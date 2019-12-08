<?php
class Admin_Model extends CI_Model
{
    private $_table = "data_pegawai";
    function validate($username, $password)
    {
    //     $this->db->where('username', $username);
    //     return $this->db->get('data_pegawai');

        return $this->db->get_where($this->_table, ["username" => $username])->row();
        
    }

    public function save()
    {
        $post = $this->input->post();
        $this->Nim = $post['nim'];
        $this->Nama = $post["nama"];
        $this->Password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Nim" => $id));
    }
}
