<?php

use PhpParser\Node\Stmt\Echo_;

defined('BASEPATH') or exit('No direct script access allowed');

include APPPATH . "libraries/phpqrcode/qrlib.php";

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_Model');
    is_logged_in();
  }
  public function index()
  {
    $email = $this->session->userdata('email');
    $data = [
      'title' => 'My Profile',
      'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
      'batch' => $this->User_Model->getbatch(),
      'sertifikat' => $this->User_Model->getStatus_daftar($email)
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');
    // echo 'Selamat Datang ' . $data['user']['nama'];
  }

  public function edit()
  {
    $data['title'] = 'Edit Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $nama = $this->input->post('nama');
      $email = $this->input->post('email');
      $no_hp = $this->input->post('no_hp');
      $alamat = $this->input->post('alamat');

      // cek jika ada gambar yang akan diupload
      $upload_image = $_FILES['image']['name'];

      // var_dump($upload_image, $nama, $email);
      // die;

      if ($upload_image) {
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/profile/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if ($old_image != 'default.png') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }

          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('user');
        }
      }

      $this->db->set('nama', $nama);
      $this->db->set('no_hp', $no_hp);
      $this->db->set('alamat', $alamat);
      $this->db->where('email', $email);
      $this->db->update('user');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has Been Updated!</div>');
      redirect('user');
    }
  }

  public function changepassword()
  {
    $data['title'] = 'Change Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_tgl_lahir]');
    $this->form_validation->set_rules('new_password2', 'Confrim New Password', 'required|trim|min_length[8]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/changepassword', $data);
      $this->load->view('templates/footer');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');

      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
        redirect('user/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password Cannot be the same Old Password</div>');
          redirect('user/changepassword');
        } else {
          // password sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed!</div>');
          redirect('user/changepassword');
        }
      }
    }
  }

  public function sertifikate()
  {
    $data = [
      'title' => 'Sertifikate',
      'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
      'sertifikate' => $this->User_Model->getdata()
    ];

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/sertifikate', $data);
    $this->load->view('templates/footer');
  }

  public function pdf($id)
  {
    $id = $this->uri->segment(3);
    $penyimpanan = "assets/img/";
    $query = "SELECT email FROM sertifikate WHERE id=$id";
    $a = $this->db->query($query)->row_array();


    if (!file_exists($penyimpanan))
      mkdir($penyimpanan);
    $param = base_url('user/pdf/') . $id;
    $qr = QRcode::png($param, $penyimpanan . 'qrcodeku.png', QR_ECLEVEL_H);
    $data = [
      'sertifikate' => $this->db->where('id', $id)->get('sertifikate')->row_array(),
      'user' => $this->db->where('email', $a['email'])->get('user')->row(),
      'nilai' => $this->User_Model->getnilai($id),
      'histori_program' => $this->User_Model->gethistori($id),
      'qr_code' => $qr
    ];


    if (empty($data['sertifikate'])) {
      echo "<script>alert('Data tidak ditemukan!');window.location.replace('" . base_url('/user/sertifikate') . "'); </script>";
    } else if (count($data['nilai']) < 1) {
      echo "<script>alert('Belum ada nilai!');window.location.replace('" . base_url('/user/sertifikate') . "'); </script>";
    } else {
      $this->load->view('user/sertifikate_pdf', $data);
    }
  }

  public function daftar($id)
  {
    $id = $this->uri->segment(3);
    $query = "SELECT program FROM histori_program WHERE id= $id";
    $a = $this->db->query($query)->row_array();

    $email = $this->session->userdata('email');
    $query_user = "SELECT nama,no_registrasi,image,alamat FROM user WHERE email= '$email'";
    $b = $this->db->query($query_user)->row_array();

    $insert = [
      'batch_id' => $this->uri->segment(3),
      'pelatihan' => $a['program'],
      'email' => $this->session->userdata('email'),
      'nama' => $b['nama'],
      'no_regis' => $b['no_registrasi'],
      'image' => $b['image'],
      'alamat' => $b['alamat'],
      'status' => 1,
      'date_create' => time()
    ];

    $this->db->insert('sertifikate', $insert);

    $data = [
      'title' => 'Daftar',
      'user' => $this->db->get_where('user', ['email' => $email])->row_array()
    ];
    // var_dump($data['user']['foto_ktp']);
    // die;

    if ($data['user']['foto_ktp'] == null  and $data['user']['foto_ijasah'] == null and $data['user']['foto_skck'] == null and $data['user']['surat_dokter'] == null) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/daftar', $data);
      $this->load->view('templates/footer');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File Anda Sudah Lengkap</div>');
      redirect('user');
    }
  }

  public function upload_data($id)
  {
    $id = $this->uri->segment(3);
    $data = [
      'title' => 'Upload File',
      'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/upload', $data);
    $this->load->view('templates/footer');
  }

  public function upload()
  {
    // $id = $this->uri->segment(3);
    $data = [
      'title' => 'Upload File',
      'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/upload', $data);
    $this->load->view('templates/footer');

    $email = $this->session->userdata('email');
    $data = array();
    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
    $config['max_size']     = '2048';
    $config['upload_path'] = './assets/img/profile/';
    // $config['encrypt_name']     = true;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('image')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'image' => $_FILES['image']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('ktp')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'foto_ktp' => $_FILES['ktp']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('ijasah')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'foto_ijasah' => $_FILES['ijasah']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('skck')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'foto_skck' => $_FILES['skck']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('surat_dokter')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'surat_dokter' => $_FILES['surat_dokter']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('lisensi')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'surat_lisensi' => $_FILES['lisensi']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }
    if (!$this->upload->do_upload('sertifikat')) {
      $error = array('error' => $this->upload->display_errors());
    } else {
      $update_array = array(
        'sertifikate' => $_FILES['sertifikat']['name'],
      );

      // var_dump($update_array);
      // die;

      $this->db->where('email', $email);
      $this->db->update('user', $update_array);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your Profile has Been Updated!</div>');
    redirect('user');
  }

  public function datadiri($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('batch', 'Batch', 'required|trim');
    $this->form_validation->set_rules('tgl_start', 'Tgl_Start', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat', 'required|trim');
    $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
    $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
    $this->form_validation->set_rules('status', 'Status', 'required|trim');
    $this->form_validation->set_rules('jenkel', 'Jenkel', 'required|trim');
    $this->form_validation->set_rules('alamat_ktp', 'Alamat_ktp', 'required|trim');
    $this->form_validation->set_rules('tinggi_bdn', 'Tinggi_bdn', 'required|trim');
    $this->form_validation->set_rules('berat_bdn', 'Berat_bdn', 'required|trim');
    $this->form_validation->set_rules('warna_kulit', 'Warna_kulit', 'required|trim');
    $this->form_validation->set_rules('bentuk_wajh', 'Bentuk_wajh', 'required|trim');
    $this->form_validation->set_rules('jenis_rambut', 'Jenis_rambut', 'required|trim');
    $this->form_validation->set_rules('warna_rambut', 'Warna_rambut', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Data Personal',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/datadiri', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'batch' => $this->input->post('batch'),
        'tgl_mulai_belajar' => $this->input->post('tgl_start'),
        'tempat_lahir' => $this->input->post('tempat'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'agama' => $this->input->post('agama'),
        'status' => $this->input->post('status'),
        'jenkel' => $this->input->post('jenkel'),
        'alamat_ktp' => $this->input->post('alamat_ktp'),
        'alamat_domisili' => $this->input->post('alamat_domisili'),
        'tinggi_badan' => $this->input->post('tinggi_bdn'),
        'berat_badan' => $this->input->post('berat_bdn'),
        'warna_kulit' => $this->input->post('warna_kulit'),
        'bentuk_muka' => $this->input->post('bentuk_wajh'),
        'jenis_rambut' => $this->input->post('jenis_rambut'),
        'warna_rambut' => $this->input->post('warna_rambut'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('data_diri', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Data Diri</div>');
      redirect('user');
    }
  }

  public function data_keluarga($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('nama_ibu', 'Nama_ibu', 'required|trim');
    $this->form_validation->set_rules('tempat_ibu', 'Tempat_ibu', 'required');
    $this->form_validation->set_rules('tgl_lahir_ibu', 'Tgl_lahir_ibu', 'required|trim');
    $this->form_validation->set_rules('alamat_ibu', 'Alamat_ibu', 'required|trim');
    $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan_ibu', 'required|trim');
    $this->form_validation->set_rules('nama_ayah', 'Nama_ayah', 'required|trim');
    $this->form_validation->set_rules('tempat_ayah', 'Tempat_ayah', 'required|trim');
    $this->form_validation->set_rules('tgl_lahir_ayah', 'Tgl_lahir_ayah', 'required|trim');
    $this->form_validation->set_rules('alamat_ayah', 'Alamat_ayah', 'required|trim');
    $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan_ayah', 'required|trim');
    $this->form_validation->set_rules('nama_saudara1', 'Nama_saudara1', 'required|trim');
    $this->form_validation->set_rules('tempat_saudara1', 'Tempat_saudara1', 'required|trim');
    $this->form_validation->set_rules('tgl_lahir_saudara1', 'Tgl_lahir_saudara1', 'required|trim');
    $this->form_validation->set_rules('pekerjaan_saudara1', 'Pekerjaan_saudara1', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Data Keluarga',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/data_keluarga', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'nama_ibu' => $this->input->post('nama_ibu'),
        'tempat_lahir' => $this->input->post('tempat_ibu'),
        'tgl_lahir_ibu' => $this->input->post('tgl_lahir_ibu'),
        'alamat_ibu' => $this->input->post('alamat_ibu'),
        'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
        'nama_ayah' => $this->input->post('nama_ayah'),
        'tempat_lahir_ayah' => $this->input->post('tempat_ayah'),
        'tgl_lahir_ayah' => $this->input->post('tgl_lahir_ayah'),
        'alamat_ayah' => $this->input->post('alamat_ayah'),
        'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
        'nama_saudara1' => $this->input->post('nama_saudara1'),
        'tempat_lahir_saudara1' => $this->input->post('tempat_saudara1'),
        'tgl_lahir_saudara1' => $this->input->post('tgl_lahir_saudara1'),
        'pekerjaan_saudara1' => $this->input->post('pekerjaan_saudara1'),
        'nama_saudara2' => $this->input->post('nama_saudara2'),
        'tempat_lahir_saudara2' => $this->input->post('tempat_saudara2'),
        'tgl_lahir_saudara2' => $this->input->post('tgl_saudara2'),
        'pekerjaan_saudara2' => $this->input->post('pekerjaan_saudara2'),
        'nama_pasangan' => $this->input->post('nama_pasangan'),
        'tempat_lahir_pasangan' => $this->input->post('tempat_pasangan'),
        'tgl_lahir_pasangan' => $this->input->post('tgl_pasangan'),
        'alamat_pasangan' => $this->input->post('alamat_pasangan'),
        'pekerjaan_pasangan' => $this->input->post('pekerjaan_pasangan'),
        'nama_anak' => $this->input->post('nama_anak'),
        'tempat_lahir_anak' => $this->input->post('tempat_anak'),
        'tgl_lahir_anak' => $this->input->post('tgl_anak'),
        'no_tlp_anak' => $this->input->post('no_tlp_anak'),
        'pekerjaan_anak' => $this->input->post('pekerjaan_anak'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('data_keluarga', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Data Keluarga</div>');
      redirect('user');
    }
  }

  public function data_sekolah($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('nama_sd', 'Nama_sd', 'required|trim');
    $this->form_validation->set_rules('alamat_sd', 'Alamat_sd', 'required');
    $this->form_validation->set_rules('lulus_sd', 'Lulus_sd', 'required|trim');
    $this->form_validation->set_rules('kepsek_sd', 'Kepsek_sd', 'required');
    $this->form_validation->set_rules('nama_smp', 'Nama_smp', 'required|trim');
    $this->form_validation->set_rules('alamat_smp', 'Alamat_smp', 'required|trim');
    $this->form_validation->set_rules('lulus_smp', 'Lulus_smp', 'required|trim');
    $this->form_validation->set_rules('kepsek_smp', 'Kepsek_smp', 'required|trim');
    $this->form_validation->set_rules('nama_sma', 'Nama_sma', 'required|trim');
    $this->form_validation->set_rules('alamat_sma', 'Alamat_sma', 'required|trim');
    $this->form_validation->set_rules('lulus_sma', 'Lulus_sma', 'required|trim');
    $this->form_validation->set_rules('kepsek_sma', 'Kepsek_sma', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Riwayat Pendidikan',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/data_sekolah', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'nama_sd' => $this->input->post('nama_sd'),
        'alamat_sd' => $this->input->post('alamat_sd'),
        'tahun_lulus_sd' => $this->input->post('lulus_sd'),
        'kepsek_sd' => $this->input->post('kepsek_sd'),
        'nama_smp' => $this->input->post('nama_smp'),
        'alamat_smp' => $this->input->post('alamat_smp'),
        'tahun_lulus_smp' => $this->input->post('lulus_smp'),
        'kepsek_smp' => $this->input->post('kepsek_smp'),
        'nama_sma' => $this->input->post('nama_sma'),
        'alamat_sma' => $this->input->post('alamat_sma'),
        'tahun_lulus_sma' => $this->input->post('lulus_sma'),
        'kepsek_sma' => $this->input->post('kepsek_sma'),
        'nama_univ' => $this->input->post('nama_univ'),
        'alamat_univ' => $this->input->post('alamat_univ'),
        'tahun_lulus_univ' => $this->input->post('lulus_univ'),
        'jurusan' => $this->input->post('jurusan'),
        'nama_rektor' => $this->input->post('nama_rektor'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('jenjang_pendidikan', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Data Jenjang Pendidikan</div>');
      redirect('user');
    }
  }

  public function pengalaman($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('nama_perusahaan', 'Nama_perusahaan', 'required|trim');
    $this->form_validation->set_rules('alamat_perusahaan', 'Alamat_perusahaan', 'required');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('periode_kerja', 'Periode_kerja', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Pengalaman Kerja / Organisasi',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/pengalaman', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'nama_perusahaan' => $this->input->post('nama_perusahaan'),
        'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
        'jabatan' => $this->input->post('jabatan'),
        'periode_kerja' => $this->input->post('periode_kerja'),
        'nama_organisasi' => $this->input->post('nama_org'),
        'jabatan_organisasi' => $this->input->post('jabatan_org'),
        'periode' => $this->input->post('periode'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('pengalaman_kerja', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Data Pengalaman Kerja</div>');
      redirect('user');
    }
  }

  public function emergency_number($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('tempat', 'Tempat', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
    $this->form_validation->set_rules('hubungan', 'Hubungan', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Emergency Number',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/emergency_number', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'tempat_lahir' => $this->input->post('tempat'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'alamat' => $this->input->post('alamat'),
        'no_hp' => $this->input->post('no_hp'),
        'hubungan' => $this->input->post('hubungan'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('urgent_call', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Urgent Call</div>');
      redirect('user');
    }
  }

  public function survey($id)
  {
    $id = $this->uri->segment(3);

    // untuk memproses inputan
    $this->form_validation->set_rules('bat', 'Bat', 'required');
    $this->form_validation->set_rules('pelatihan_bat', 'Pelatihan_bat', 'required');
    $this->form_validation->set_rules('pihak_lain', 'Pihak_lain', 'required');
    $this->form_validation->set_rules('saudara', 'Saudara', 'required');
    $this->form_validation->set_rules('keluarga', 'Keluarga', 'required');
    $this->form_validation->set_rules('peraturan', 'Peraturan', 'required');
    $this->form_validation->set_rules('penyakit', 'Penyakit', 'required');
    $this->form_validation->set_rules('aviasi', 'Aviasi', 'required');
    $this->form_validation->set_rules('nasinal', 'Nasinal', 'required');
    $this->form_validation->set_rules('negara', 'Negara', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'title' => 'Survey',
        'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array()
      ];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/survey', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'pertanyaan1' => $this->input->post('bat'),
        'pertanyaan2' => $this->input->post('pelatihan_bat'),
        'pertanyaan3' => $this->input->post('pihak_lain'),
        'pertanyaan4' => $this->input->post('saudara'),
        'pertanyaan5' => $this->input->post('keluarga'),
        'pertanyaan6' => $this->input->post('peraturan'),
        'pertanyaan7' => $this->input->post('penyakit'),
        'pertanyaan8' => $this->input->post('aviasi'),
        'pertanyaan9' => $this->input->post('nasinal'),
        'pertanyaan10' => $this->input->post('negara'),
        'link_fb' => $this->input->post('link'),
        'link_insta' => $this->input->post('link2'),
        'email_id' => $this->session->userdata('email'),
        'user_id' => $id,
        'date_create' => time()
      ];

      // var_dump($data);
      // die;

      $this->db->insert('survei', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success Input Urgent Call</div>');
      redirect('user');
    }
  }
}
