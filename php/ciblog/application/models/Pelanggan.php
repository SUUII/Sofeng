<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Model{
    private $_table = "data_pelanggan" ;

    public function add(){
        $post = $this->input->post() ;
        $this->token = uniqid();
        $this->nama = $post['nama'];
        $this->alamat = $post['alamat'];
        $this->telp = (int)$post['telp'];
        $this->email = $post['email'];
        $hutang = (int)$post['hutang'];
        for ($index = 0; $index < (int)$post['lama']; $index++) {
          $hutang += ($hutang*0.04);
        }
        $this->hutang = $hutang;
        $this->lama = (int)$post['lama'];
        $this->bunga = $hutang-(int)$post['hutang'];
        $this->deskripsi = $post['deskripsi'];
        $this->_uploadImage('diri');
        $this->_uploadImage('ktp');
        $this->_uploadImage('slip');
        $this->_uploadImage('kk');
        $this->_uploadImage('jaminan');
        $this->db->insert($this->_table, $this);        
    }

    private function _uploadImage($jenis = null)
    {
      $config['upload_path']          = './assets/images/upload/pelanggan/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['file_name']            = $this->token;
      //$config['overwrite']            = true;
      $config['max_size']             = 1024; // 1MB
      // $config['max_width']            = 1024;
      // $config['max_height']           = 768;
  
      $this->load->library('upload', $config);
  
      if ($this->upload->do_upload('gambar'.$jenis)) {
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