<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Menu_Model');
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Added!</div>');
      redirect('menu');
    }
  }

  public function edit($id)
  {
    $data = array(
      'id' => $id,
      'menu' => $this->input->post('menu'),
    );

    // var_dump($id, $data);
    // die;

    $this->Menu_Model->update_data($data, 'user_menu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil Di Perbaharui !!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
    );
    redirect('menu');
    // }
  }

  public function delete($id)
  {
    $where = array('id' => $id);

    $this->Menu_Model->delete($where, 'user_menu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('menu');
  }

  public function submenu()
  {
    $data['title'] = 'Submenu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['submenu'] = $this->Menu_Model->getSubmenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('icon', 'Icon', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Submenu Added!</div>');
      redirect('menu/submenu');
    }
  }

  public function editsubmenu($id)
  {
    $data = array(
      'id' => $id,
      'title' => $this->input->post('title'),
      'menu_id' => $this->input->post('menu_id'),
      'url' => $this->input->post('url'),
      'icon' => $this->input->post('icon'),
    );

    // var_dump($id, $data);
    // die;

    $this->Menu_Model->update_data_submenu($data, 'user_sub_menu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil Di Perbaharui !!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
    );
    redirect('menu/submenu');
  }

  public function deletesubmenu($id)
  {
    $where = array('id' => $id);

    $this->Menu_Model->delete_submenu($where, 'user_sub_menu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('menu/submenu');
  }

  public function role()
  {
    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role', 'Role', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/role', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Role Added!</div>');
      redirect('menu/role');
    }
  }

  public function editrole($id)
  {
    $data = array(
      'id' => $id,
      'role' => $this->input->post('role'),
    );

    // var_dump($id, $data);
    // die;

    $this->Menu_Model->update_data_role($data, 'user_role');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil Di Perbaharui !!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
    );
    redirect('menu/role');
    // }
  }

  public function deleterole($id)
  {
    $where = array('id' => $id);

    $this->Menu_Model->delete_role($where, 'user_role');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus !!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('menu/role');
  }

  public function roleAccess($role_id)
  {
    $data['title'] = 'Role Access';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id != ', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/roleaccess', $data);
    $this->load->view('templates/footer');
  }

  public function changeAccess()
  {
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
  }

  public function addstaff()
  {
    $data['title'] = 'Add Staff';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['user'] = $this->db->get_where('user', ['role_id', 4])->result_array();
    var_dump($data);
    die;

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('menu/addstaff', $data);
    $this->load->view('templates/footer');
  }
}
