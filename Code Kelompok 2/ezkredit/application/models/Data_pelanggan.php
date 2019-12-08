<?php
  class Data_pelanggan extends CI_Model
  {
    private $_table = "data_pelanggan";

    public $token;
    public $nama;
    public $alamat;
    public $telp;
    public $email;
    public $statktp;
    public $statslip;
    public $statkk;
    public $statjaminan;
    public $flag;
    public $hutang;
    public $lama;
    public $bunga;

    public function getall()
    {
      return $this->db->get($this->_table)->result();
    }

    public function getById($token)
    {
      return $this->db->get_where($this->_table, ["token" => $token])->row();
    }
  }
?>