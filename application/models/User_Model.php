<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
  public function data_pdf($data, $table)
  {
    $this->db->where('id', $data['id']);
    return $this->db->get($table);
  }

  public function getdata()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $email_user = $data['user']['email'];
    $query = "SELECT `sertifikate`.*, `user`.`email` FROM `sertifikate` JOIN `user` ON `sertifikate`.`email` = `user`.`email` WHERE `sertifikate`.`email` = '$email_user'";
    return $this->db->query($query)->result_array();
  }

  public function getbatch()
  {
    $query = "SELECT id,batch,program,sub_program FROM histori_program WHERE status = 1";
    return $this->db->query($query)->result_array();
  }

  public function getStatus_daftar($email)
  {
    $query = "SELECT * FROM sertifikate WHERE email = '$email' ";
    return $this->db->query($query)->result_array();
    // var_dump($this->db->query($query)->result_array());
    // exit;
  }

  public function getnilai($id)
  {
    $data['sertifikate'] = $this->db->where('id', $id)->get('sertifikate')->row_array();
    $email_user = $data['sertifikate']['email'];
    $user_id = $data['sertifikate']['id'];
    $query = "SELECT * FROM upload_nilai  WHERE email_id = '$email_user' AND user_id = '$user_id'";
    return $this->db->query($query)->result_array();

    // var_dump($this->db->query($query)->result_array());
    // exit;
  }

  public function gethistori($id)
  {
    $data['sertifikate'] = $this->db->where('id', $id)->get('sertifikate')->row_array();
    $batch_id = $data['sertifikate']['batch_id'];
    $query = "SELECT * FROM histori_program  WHERE id = '$batch_id'";
    return $this->db->query($query)->result_array();

    // var_dump($this->db->query($query)->result_array());
    // exit;
  }
}
