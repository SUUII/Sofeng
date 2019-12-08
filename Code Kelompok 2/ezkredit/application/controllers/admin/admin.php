<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        // Initialization of class
        parent::__construct();
        $this->load->model('admin/Admin_Model');
    }
    public function index()
    {
        $this->load->view('admin/add-admin');
    }

    public function add()
    {
        $this->Admin_Model->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/admin/manage');
    }

    public function manage()
    {
        $data['data'] = $this->Admin_Model->getAllData();
        $this->load->view('admin/manage-admin', $data);
    }
}
