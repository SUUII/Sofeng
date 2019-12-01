<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pelanggan');
    }

	public function add()
	{
        $this->Pelanggan->add();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('home');
	}
    public function add2()
    {
        $this->Pelanggan->add();
        $this->session->set_flashdata('success', 'Data Pelanggan berhasil disimpan');
        redirect('admin/manage_post/');
    }
}
