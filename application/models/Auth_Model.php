<?php
class Auth_Model extends CI_Model
{
  // function get_program()
  // {
  //   $query = $this->db->where('status_program', '1')->get('program_pelatihan')->result_array();
  //   return $query;
  // }

  // function get_sub_program()
  // {
  //   $query = $this->db->where('status_program', '1')->get('sub_program_pelatihan')->result_array();
  //   return $query;
  // }

  //Start: method tambahan untuk reset code  
  public function getUserInfo($id)
  {
    $q = $this->db->get_where('user', array('id' => $id), 1);
    if ($this->db->affected_rows() > 0) {
      $row = $q->row();
      return $row;
    } else {
      error_log('no user found getUserInfo(' . $id . ')');
      return false;
    }
  }

  public function getUserInfoByEmail($email)
  {
    $q = $this->db->get_where('user', array('email' => $email), 1);
    if ($this->db->affected_rows() > 0) {
      $row = $q->row();
      return $row;
    }
  }

  public function insertToken($user_id)
  {
    $token = substr(sha1(rand()), 0, 30);
    $date = date('Y-m-d');

    $string = array(
      'token' => $token,
      'user_id' => $user_id,
      'created' => $date
    );
    $query = $this->db->insert_string('tokens', $string);
    $this->db->query($query);
    return $token . $user_id;
  }

  public function isTokenValid($token)
  {
    $tkn = substr($token, 0, 30);
    $uid = substr($token, 30);

    $q = $this->db->get_where('tokens', array(
      'tokens.token' => $tkn,
      'tokens.user_id' => $uid
    ), 1);

    if ($this->db->affected_rows() > 0) {
      $row = $q->row();

      $created = $row->created;
      $createdTS = strtotime($created);
      $today = date('Y-m-d');
      $todayTS = strtotime($today);

      if ($createdTS != $todayTS) {
        return false;
      }

      $user_info = $this->getUserInfo($row->user_id);
      return $user_info;
    } else {
      return false;
    }
  }

  public function updatePassword($post)
  {
    $this->db->where('id', $post['id']);
    $this->db->update('user', array('password' => $post['password']));
    return true;
  }
  //End: method tambahan untuk reset code 
}
