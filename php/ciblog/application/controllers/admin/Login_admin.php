<?php
class Login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Admin_Model');
    }

    function index()
    {
        $this->load->view('admin/login-admin');
    }

    function auth()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $data = $this->Admin_Model->validate($username, $password);
        if ($password == $data->password) {
            $username = $data->username;
            $nama = $data->nama;
            $kode = $data->kode;
            $sesdata = array(
                'username' => $username,
                'kode' => $kode,
                'nama'  => $nama,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('admin/dashboard');
        } else {
            echo $this->session->set_flashdata('msg', 'Username atau Password salah');
            redirect('admin/Login_admin');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login_admin');
    }
}
