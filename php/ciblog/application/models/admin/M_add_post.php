<?php
class M_add_post extends CI_Model
{
  private $_table = "data_pelanggan";

  public $token;
  public $Nama_Event;
  public $Kapasitas;
  public $Gambar = "default.jpg";
  public $Detail_Event;

  public function getHutang($token)
  {
    $data = $this->db->get_where($this->_table, ["token" => $token])->row();
    return $data -> hutang;
  }
  public function getWhereLike($flag,$token)
  {
    $this -> db -> where('flag',$flag); 
    $this -> db -> like('token', $token);
    return $this->db->get($this->_table)->result();
  }
  public function getLike($token)
  {
    $this -> db -> like('token', $token);
    $this -> db -> order_by('flag', 'asc');
    return $this->db->get($this->_table)->result();
  }
  public function deleteDataPelanggan($token){
      $this -> db -> where('token', $token);
      $this -> db -> delete('data_pelanggan');
      $this -> deleteImage($token);
      $this -> deleteImage($token,1);
      $this -> deleteImage($token,2);
      $this -> deleteImage($token,3);
      $this -> deleteImage($token,4);
  }
  private function deleteImage($token,$index = null)
  {
      $event = $this->getById($token);
      $filename = explode(".", $token.$index)[0];
      return array_map('unlink', glob(FCPATH . "assets/images/upload/pelanggan/$filename.*"));
  }
  public function upddata($data) {
    extract($data);
    $this->db->where('token', $token);
    $this->db->update($table_name, array('flag' => $flag));
    return true;
  }
  public function upstat($data) {
    extract($data);
    $this->db->where('token', $token);
    $this->db->update($table_name, array($stat => $pilihan));
    return true;
  }
  public function cekstatus($token){
    $data = $this->getById($token);
    $stat = 0;
    if($data->statktp != 0&&$data->statslip != 0&&$data->statkk != 0&&$data->statjaminan != 0){
      if($data->statktp == 1&&$data->statslip == 1&&$data->statkk == 1&&$data->statjaminan == 1){
        $stat = 1;
      }else{
        $stat = 2;
      }
    }
    return $stat;
  }
  public function getall()
  {
    $this -> db -> order_by('flag', 'asc');
    return $this->db->get($this->_table)->result();
  }

  public function getflagnol()
  {
    $this->db->where('flag', 0);
    $this -> db -> order_by('token', 'asc');
    $result = $this->db->get($this->_table)->result();
    return $result;
  }

 public function getflagsatu()
  {
    $this->db->where('flag', 1);
    $this -> db -> order_by('token', 'asc');
    $result = $this->db->get($this->_table)->result();
    return $result;
  }
   public function getflagdua()
  {
    $this->db->where('flag', 2);
    $this -> db -> order_by('token', 'asc');
    $result = $this->db->get($this->_table)->result();
    return $result;
  }
  public function getflagtiga()
  {
    $this->db->where('flag', 3);
    $this -> db -> order_by('token', 'asc');
    $result = $this->db->get($this->_table)->result();
    return $result;
  }
    public function getlunas()
  {
    $this->db->where('flag', 4);
    $this -> db -> order_by('token', 'asc');
    $result = $this->db->get($this->_table)->result();
    return $result;
  }
  public function getById($token)
  {
    return $this->db->get_where($this->_table, ["token" => $token])->row();
  }

  public function save()
  {
    date_default_timezone_set('Asia/Jakarta');
    $post = $this->input->post();
    $this->Id_Event = uniqid();
    $this->Nama_Event = $post["judul"];
    $this->Tgl_Publikasi = date('Y-m-d H:i:s');
    $this->Kapasitas = $post["kapasitas"];
    $this->Tgl_Mulai = $post["mulai"];
    $this->Tgl_Berakhir = $post["akhir"];
    $this->Harga = $post["harga"];
    $this->Gambar = $this->_uploadImage();
    $this->Detail_Event = $post["detail"];
    $this->db->insert($this->_table, $this);
  }

  private function _uploadImage()
  {
    $config['upload_path']          = './upload/gambar/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->Id_Event;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
      return $this->upload->data("file_name");
    }
    return "default.jpg";
  }

  public function update($id)
  {
    date_default_timezone_set('Asia/Jakarta');
    $post = $this->input->post();
    $this->Id_Event = $id;
    $this->Nama_Event = $post["judul"];
    $this->Tgl_Publikasi = $post["publikasi"];
    $this->Tgl_Pembaharuan = date('Y-m-d H:i:s');
    $this->Kapasitas = $post["kapasitas"];
    $this->Tgl_Mulai = $post["mulai"];
    $this->Tgl_Berakhir = $post["akhir"];
    $this->Harga = $post["harga"];
    $this->Detail_Event = $post["detail"];
    if (!empty($_FILES["gambar"]["name"])) {
      $this->_deleteImage($id);
      $this->Gambar = $this->_uploadImage();
    } else {
      $this->Gambar = $post["old_image"];
    }
    $this->db->update($this->_table, $this, array('Id_Event' => $id));
  }


  

  
}
