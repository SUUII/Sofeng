<?php
class M_user extends CI_Model
{
    private $_table = "data_pelanggan";

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("Nim" => $id));
    }
}
