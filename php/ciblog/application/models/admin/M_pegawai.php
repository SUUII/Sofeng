<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
    private $_table = "data_pegawai" ;

    public function getall()
    {
      return $this->db->get($this->_table)->result();
    }
    public function getById($kode)
    {
      return $this->db->get_where($this->_table, ["kode" => $kode])->row();
    }
    public function deletePegawai($kode)
    {
      $this -> db -> where('kode', $kode);
      $this -> db -> delete('data_pegawai'); 
    }
    public function cekPassword($kode,$passwordlama)
    {
      $data = $this->getById($kode);
      if($data->password == $passwordlama){
      	return false;
      }else{
      	return true;
      }
    }
    public function uploadpassword($data) {
    extract($data);
    $this->db->where('kode', $kode);
    $this->db->update($table_name, array('password' => $password));
    return true;
  }
}
?>