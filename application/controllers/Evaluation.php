<?php

use PSpell\Config;

defined('BASEPATH') or exit('No direct script access allowed');

class Evaluation extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Evaluation_Model');
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'Daftar Siswa';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->library('pagination');

    // keyword searching
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    // paginasi config
    $this->db->like('nama', $data['keyword']);
    $this->db->or_like('email', $data['keyword']);
    $this->db->from('sertifikate');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 10;

    // inisializ
    $this->pagination->initialize($config);

    // var_dump($config['total_rows']);
    // die;

    $data['start'] = $this->uri->segment(3);
    $data['sertifikate'] = $this->Evaluation_Model->getSiswa($config['per_page'], $data['start'], $data['keyword']);
    // $data['sertifikate'] = $this->evaluation_model->get_data_siswa();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('evaluation/index', $data);
    $this->load->view('templates/footer');
    // echo 'Selamat Datang ' . $data['user']['nama'];
  }

  public function program()
  {
    $data['title'] = 'Program Pelatihan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['histori_program'] = $this->db->get('histori_program')->result_array();

    $this->form_validation->set_rules('program', 'Program', 'required');
    $this->form_validation->set_rules('sub_program', 'Sub_Program', 'required');
    $this->form_validation->set_rules('batch', 'Batch', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('evaluation/program', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'program' => $this->input->post('program'),
        'sub_program' => $this->input->post('sub_program'),
        'batch' => $this->input->post('batch'),
        'status' => $this->input->post('status'),
        'periode_program' => $this->input->post('periode'),
        'tanggal' =>  time()
      ];
      $this->db->insert('histori_program', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Batch Added!</div>');
      redirect('evaluation/program');
    }
  }

  public function editprogram($id)
  {
    $data = array(
      'id' => $id,
      'program' => $this->input->post('program'),
      'sub_program' => $this->input->post('sub_program'),
      'batch' => $this->input->post('batch'),
      'periode_program' => $this->input->post('periode'),
      'status' => $this->input->post('status')
    );

    $this->Evaluation_Model->update_data_program($data, 'histori_program');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil Di Perbaharui !!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
    );
    redirect('evaluation/program');
  }

  public function deleteprogram($id)
  {
    $data = array(
      'id' => $id,
      'status' => 2
    );

    $this->Evaluation_Model->delete_program($data, 'histori_program');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Menonaktifkan Program !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('evaluation/program');
  }

  public function upload_nilai($id)
  {
    $id = $this->uri->segment(3);
    $query = "SELECT email FROM sertifikate WHERE id= $id";
    $a = $this->db->query($query)->row_array();

    // var_dump($a);
    // die;

    $data = [
      'title' => 'Upload Nilai Siswa',
      'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
      'sertifikate' => $this->db->get_where('sertifikate', ['email' => $a['email']])->row_array()
    ];

    $this->form_validation->set_rules('materi1', 'Materi1', 'required|trim');
    $this->form_validation->set_rules('jam1', 'Jam1', 'required');
    $this->form_validation->set_rules('materi2', 'Materi2', 'required|trim');
    $this->form_validation->set_rules('jam2', 'Jam2', 'required');
    $this->form_validation->set_rules('materi3', 'Materi3', 'required|trim');
    $this->form_validation->set_rules('jam3', 'Jam3', 'required');
    $this->form_validation->set_rules('materi4', 'Materi4', 'required|trim');
    $this->form_validation->set_rules('jam4', 'Jam4', 'required');
    $this->form_validation->set_rules('nilai_teori', 'Nilai Teori', 'required');
    $this->form_validation->set_rules('nilai_praktek', 'Nilai Praktek', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('evaluation/upload_nilai', $data);
      $this->load->view('templates/footer');
    } else {
      $insert = [
        'materi_satu' => $this->input->post('materi1'),
        'jam_ajar_satu' => $this->input->post('jam1'),
        'materi_dua' => $this->input->post('materi2'),
        'jam_ajar_dua' => $this->input->post('jam2'),
        'materi_tiga' => $this->input->post('materi3'),
        'jam_ajar_tiga' => $this->input->post('jam3'),
        'materi_empat' => $this->input->post('materi4'),
        'jam_ajar_empat' => $this->input->post('jam4'),
        'nilai_teori' => $this->input->post('nilai_teori'),
        'nilai_praktek' => $this->input->post('nilai_praktek'),
        'email_id' => $a['email'],
        'user_id' => $id,
        'date_create' =>  time()
      ];

      // var_dump($insert);
      // die;

      $this->db->insert('upload_nilai', $insert);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Insert Nilai!</div>');
      redirect('evaluation');
    }
  }
}
