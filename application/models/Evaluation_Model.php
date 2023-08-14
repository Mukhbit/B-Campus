<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Evaluation_Model extends CI_Model
{
  public function update_data_program($data, $table)
  {
    $this->db->where('id', $data['id']);
    $this->db->update($table, $data);
  }

  public function delete_program($data, $table)
  {
    $this->db->where('id', $data['id']);
    $this->db->update($table, $data);
  }

  // public function get_data_siswa()
  // {
  //   return $this->db->get('sertifikate')->result_array();
  // }

  public function getSiswa($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('nama', $keyword);
      $this->db->or_like('email', $keyword);
    }
    return $this->db->get('sertifikate', $limit, $start)->result_array();
  }

  public function countSiswa()
  {
    return $this->db->get('sertifikate')->num_rows();
  }
}
