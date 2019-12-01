<?php
  class data_pegawai extends CI_Model
  {
    private $_table = "data_pegawai";

    public $kode;
    public $username;
    public $password;
    public $nama;

    public function getall()
    {
      return $this->db->get($this->_table)->result();
    }
    public function verifikasii($username,$password)
    {
      if($data['data'] = $this->db->get_where($this->_table, ["username" => $username])->row()){
          if($data['data']->password == $password){
          return TRUE;
        }else{
          return FALSE;
        }
      }else{
         return FALSE; 
      }
      
      
    }
    // public function getById($token)
    // {
    //   return $this->db->get_where($this->_table, ["token" => $token])->row();
    // }
  }
?>