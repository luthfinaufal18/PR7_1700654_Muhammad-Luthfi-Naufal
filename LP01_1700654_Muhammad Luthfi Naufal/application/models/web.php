<?php
  /**
   *
   */
  class web extends CI_Model
  {
    public function get_all_lokomotif()
    {
      $query = $this->db->order_by('kd_kereta','ASC')->get('lokomotif');
      return $query->result();
    }

    public function get_all_gerbong()
    {
      $query = $this->db->order_by('kd_gerbong','ASC')->get('gerbong');
      return $query->result();
    }

    public function get_all_kursi()
    {
      $query = $this->db->order_by('kd_kursi','ASC')->get('kursi');
      return $query->result();
    }

    public function get_all_LJ()
    {
      $query = $this->db->join('kursi','lokomotif.kd_kereta = kursi.kd_kereta','left')->get('lokomotif');
      return $query->result();
    }

    public function get_all_RJ()
    {
      $query = $this->db->join('gerbong','kursi.kd_gerbong = gerbong.kd_gerbong','right')->get('kursi');
      return $query->result();
    }
    
  }

 ?>
