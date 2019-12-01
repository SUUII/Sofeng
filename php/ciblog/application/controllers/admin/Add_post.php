<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_post extends CI_Controller
{
    function __construct()
    {
        // Initialization of class
        parent::__construct();
        $this->load->model('admin/M_add_post');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
    public function index()
    {
        $this->load->view('admin/add-tagihan');
    }

    public function add()
    {
        $this->M_add_post->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/Manage_post');
    }
}
