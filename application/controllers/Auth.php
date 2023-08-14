<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Auth_Model');
  }
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    // var_dump($user);
    // die;

    // jika usernya ada
    if ($user) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);

          // untuk cek status user ( admin / member )
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not activated</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered</div>');
      redirect('auth');
    }
  }

  function getRomawi($bln)
  {
    switch ($bln) {
      case 1:
        return "I";
        break;
      case 2:
        return "II";
        break;
      case 3:
        return "III";
        break;
      case 4:
        return "IV";
        break;
      case 5:
        return "V";
        break;
      case 6:
        return "VI";
        break;
      case 7:
        return "VII";
        break;
      case 8:
        return "VIII";
        break;
      case 9:
        return "IX";
        break;
      case 10:
        return "X";
        break;
      case 11:
        return "XI";
        break;
      case 12:
        return "XII";
        break;
    }
  }

  public function registration()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    // untuk menampilkan data program
    // $data['program_pelatihan'] = $this->auth_model->get_program();
    // $data['sub_program_pelatihan'] = $this->auth_model->get_sub_program();

    // untuk memproses inputan
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'This Email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
      'matches' => 'Password dont Mathch!',
      'min_length' => 'Password too Short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim');
    $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[user.nik]', [
      'is_unique' => 'This Number NIK has already registered!'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'BeCampus Registration';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.png',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'no_hp' => $this->input->post('no_hp'),
        'nik' => $this->input->post('nik'),
        'alamat' => $this->input->post('alamat'),
        'golongan' => $this->input->post('tipe'),
        'nama_org' => $this->input->post('name_company'),
        "no_regis" => strtoupper($this->input->post('no_regis')),
        // 'prog_pelatihan' => $this->input->post('program'),
        // 'sub_prog_pelatihan' => $this->input->post('sub_program'),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      // var_dump($data);
      // die;

      $db =  $this->db->query("SELECT MAX(no_bat) as no_bat FROM user")->row_array();
      $nomor = $db['no_bat'];
      $nomor++;
      $nomor_t = sprintf("%03s", $nomor);;
      $bulan = date('n');
      $romawi = $this->getRomawi($bulan);
      $tahun = date('Y');

      $insert = [
        "no_bat" => $nomor,
        "no_registrasi" => $nomor_t . '/BAT/REG/' . $romawi . '/' . $tahun,
        'nama' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.png',
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'no_hp' => $this->input->post('no_hp'),
        'nik' => $this->input->post('nik'),
        'alamat' => $this->input->post('alamat'),
        'golongan' => $this->input->post('tipe'),
        'nama_org' => $this->input->post('name_company'),
        // 'prog_pelatihan' => $this->input->post('program'),
        // 'sub_prog_pelatihan' => $this->input->post('sub_program'),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $insert);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been Created. Please Login!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You Have been Logged Out!</div>');
    redirect('auth');
  }

  public function blocked()
  {
    $this->load->view('auth/blocked');
  }

  public function forgotpassword()
  {
    $data['title'] = 'Forgot Password';
    $this->load->view('templates/auth_header', $data);
    $this->load->view('auth/forgotpassword');
    $this->load->view('templates/auth_footer');
  }
}
