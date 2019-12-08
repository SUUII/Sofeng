<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model{
    private $_table = "data_transaksi";

    public function deleteDataTransaksi($kode){
      $this -> db -> where('kode', $kode);
      $this -> db -> delete('data_transaksi'); 
      $this -> deleteImage($kode);
    }
    private function deleteImage($kode)
    {
        $event = $this->getById($kode);
        $filename = explode(".", $kode)[0];
        return array_map('unlink', glob(FCPATH . "assets/images/upload/transaksi/$filename.*"));
    }
    public function getall()
    {
      return $this->db->get($this->_table)->result();
    }
    public function getLike($kode)
    {
      $this -> db -> like('kode', $kode);
      return $this->db->get($this->_table)->result();
    }
    public function getById($kode)
    {
      return $this->db->get_where($this->_table, ["kode" => $kode])->row();
    }
    public function getByToken($token)
    {
      return $this->db->get_where($this->_table, ["token" => $token])->result();
    }
    public function add($token)
    {
        $post = $this->input->post() ;
        $this->kode = uniqid();
        $this->token = $token;
        $this->nominal = (int)$post['nominal'];
        $this->deskripsi = $post['deskripsi'];
        $this->kode_pegawai = $this->session->userdata('kode');
        $this->_uploadImage();
        $this->db->insert($this->_table, $this);        
    }
    public function getTotal($token){
        $data = $this->db->get_where($this->_table, ["token" => $token])->result();
        $total = 0;
        foreach ($data as $dt) {
          $total += (int)$dt -> nominal;
        }
        return $total;
    }
    
    private function _uploadImage()
    {
      $config['upload_path']          = './assets/images/upload/transaksi/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $this->kode;
      //$config['overwrite']            = true;
      $config['max_size']             = 1024; // 1MB
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
  
      $this->load->library('upload', $config);
  
      if ($this->upload->do_upload('gambarbukti')) {
        return $this->upload->data("file_name");
      }
      return "default.jpg";
    }


  public function delete($id)
  {
    $this->_deleteImage($id);
    return $this->db->delete($this->_table, array("Id_Event" => $id));
  }

  private function _deleteImage($id)
  {
    $event = $this->getById($id);
    if ($event->Gambar != "default.jpg") {
      $filename = explode(".", $event->Gambar)[0];
      return array_map('unlink', glob(FCPATH . "upload/gambar/$filename.*"));
    }
  }
}
?>