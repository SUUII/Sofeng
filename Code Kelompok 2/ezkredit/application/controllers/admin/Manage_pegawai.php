<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_pegawai');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
    public function index()
    {
        $data['data'] = $this->M_pegawai->getall();
        $this->load->view('admin/manage-pegawai', $data);
    }
    public function edit_pegawai()
    {
        $this->load->view('admin/edit-pegawai');
    }
    public function gantipassword()
    {
        $post = $this->input->post() ;
        $passwordlama = $post['passwordlama'];
        $passwordbaru = $post['passwordbaru'];
        $passwordulang = $post['passwordulang'];
        if($passwordbaru != $passwordulang){
            $this->session->set_flashdata('success', 'Password ulang tidak sama'); 
            redirect('admin/manage_pegawai/edit_pegawai');
        }else if($this->M_pegawai->cekPassword($this->session->userdata('kode'),$passwordlama)){
            $this->session->set_flashdata('success', 'Password yang dimasukan salah'); 
            redirect('admin/manage_pegawai/edit_pegawai');
        }else{
            $data = array(
            'table_name' => 'data_pegawai',
            'kode' => $this->session->userdata('kode'),
            'password' => $passwordbaru
            );

            if($this->M_pegawai->uploadpassword($data)) // call the method from the model
            { 
                //$this->session->set_flashdata('Berhasil update', 'Hutang sudah lunas'); 
            }
            else
            {
                //$this->session->set_flashdata('Gagal Update', 'Lunas tetapi gagal update');
            }
            redirect('admin/login_admin/logout');
        }
        
    }
     public function delete($kode = null)
    {
        if (!isset($kode)) show_404();
        $this->M_pegawai->deletePegawai($kode);
        redirect('admin/login_admin/logout');
    }
}
