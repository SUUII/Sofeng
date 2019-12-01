<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_user');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
    public function index()
    {
        $data['data'] = $this->M_user->getAllData();
        $this->load->view('admin/manage-user', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_user->delete($id)) {
            redirect(site_url('admin/User'));
        }
    }
}
