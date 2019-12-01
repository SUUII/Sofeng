<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/dashboard');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
}
