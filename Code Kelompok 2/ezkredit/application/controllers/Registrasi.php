<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pelanggan');
    }

	public function add()
	{
        $data['title'] = 'Token';
        $data['token'] = $this->Pelanggan->add();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->load->view('pelanggan/templates/headerv2',$data);
        $this->load->view('pelanggan/show-token',$data);
        $this->load->view('pelanggan/templates/footer');
	}
    public function add2()
    {
        $data['token'] = $this->Pelanggan->add();
        $this->session->set_flashdata('success', 'Data Pelanggan berhasil disimpan');
        redirect('admin/manage_post/detail/' . $data['token']);
    }
}
