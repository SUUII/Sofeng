<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_post extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_add_post');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
    public function index()
    {
        $data['data'] = $this->M_add_post->getall();
        $this->load->view('admin/manage-post', $data);
    }
    public function adddata()
    {
        $this->load->view('admin/add-data-pelanggan');
    }
    public function query($flag = null)
    {
        $post = $this->input->post();
        $token = $post['token'];
        if($flag != null){
            redirect('admin/manage_post/hasilquery/'.$flag.'/'.$token);
        }else{
            redirect('admin/manage_post/hasilquery/5/'.$token);
        }
        
    }
    public function hasilquery($flag = null,$token)
    {
        
        if($flag == 5){
            $data['data'] = $this->M_add_post->getLike($token);
            $this->load->view('admin/manage-post', $data);
        }else{
            $data['data'] = $this->M_add_post->getWhereLike($flag,$token);
        }
        if($flag == 0){
            $this->load->view('admin/manage-post-belom', $data);
        }else if($flag == 1){
            $this->load->view('admin/manage-post-datang', $data);
        }else if($flag == 2){
            $this->load->view('admin/manage-post-terima', $data);
        }else if($flag == 3){
            $this->load->view('admin/manage-post-tolak', $data);
        }else if($flag == 4){
            $this->load->view('admin/manage-post-lunas', $data);
        }
    }
    public function konfirmasi($token){
        $data = array(
        'table_name' => 'data_pelanggan',
        'token' => $token,
        'flag' => 2
        );

        if($this->M_add_post->upddata($data)) // call the method from the model
        {
            $this->session->set_flashdata('success', 'Pinjaman sudah diaktifkan'); 
        }
        else
        {
            $this->session->set_flashdata('Gagal', 'Pinjaman gagal diaktifkan');
        }
        redirect('admin/manage_post/detail/'.$token);
    }



    public function flagnol()
    {
        $data['data'] = $this->M_add_post->getflagnol();
        $this->load->view('admin/manage-post-belom', $data);
    }
    public function flagsatu()
    {
        $data['data'] = $this->M_add_post->getflagsatu();
        $this->load->view('admin/manage-post-datang', $data);
    }
    public function flagdua()
    {
        $data['data'] = $this->M_add_post->getflagdua();
        $this->load->model('admin/M_transaksi');
        $this->load->view('admin/manage-post-terima', $data);
    }
    public function flagtiga()
    {
        $data['data'] = $this->M_add_post->getflagtiga();
        $this->load->view('admin/manage-post-tolak', $data);
    }
    public function lunas()
    {
        $data['data'] = $this->M_add_post->getlunas();
        $this->load->model('admin/M_transaksi');
        $this->load->view('admin/manage-post-lunas', $data);
    }
    public function formedit($id)
    {
        if (!isset($id)) show_404();

        $data['data'] = $this->M_add_post->getById($id);
        $this->load->view('admin/edit-post', $data);
    }

    public function update($id)
    {
        if (!isset($id)) show_404();

        $this->M_add_post->update($id);
        redirect(site_url('admin/manage_post'));
    }

    public function delete($token = null)
    {
        if (!isset($token)) show_404();
        $this->M_add_post->deleteDataPelanggan($token);
        redirect(site_url('admin/manage_post'));
    }

    public function detail($token)
    {
        if (!isset($token)) show_404();
        $data['data'] = $this->M_add_post->getById($token);
        $this->load->view('admin/detail-post', $data);
    }
    // public function detailterima($token)
    // {
    //     if (!isset($token)) show_404();
    //     $this->load->model('admin/M_transaksi');
    //     $data['penanda'] = 0;
    //     if($data['data'] = $this->M_add_post->getById($token)){
    //         if($data['transaksi'] = $this->M_transaksi->getBytoken($token)){
    //             $data['penanda'] = 1;
    //         }
    //         $this->load->view('admin/detail-post-terima', $data);
    //     }else{
    //         show_404();
    //     }
    // }
    public function foto($token,$kode)
    {
        $data['token'] = $token;
        $data['kode'] = $kode;
        $this->load->view('admin/detail-post-foto', $data);
    }
    public function updatestat($token,$kode){
        $post = $this->input->post() ;
        $pilihan = $post['pilihan'];
        if($kode==1){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'stat' => "statktp",
            'pilihan' => $pilihan
        );
        }else if($kode == 2){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'stat' => "statslip",
            'pilihan' => $pilihan
        );
        }else if($kode == 3){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'stat' => "statkk",
            'pilihan' => $pilihan
        );
        }else if($kode == 4){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'stat' => "statjaminan",
            'pilihan' => $pilihan
        );
        }
        if($this->M_add_post->upstat($data)) // call the method from the model
        {
            $this->session->set_flashdata('success', 'Pinjaman sudah diaktifkan'); 
        }
        else
        {
            $this->session->set_flashdata('Gagal', 'Pinjaman gagal diaktifkan');
        }
        if($this->M_add_post->cekstatus($token) == 1){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'flag' => 1
            );
            if($this->M_add_post->upddata($data)) // call the method from the model
            {
                $this->session->set_flashdata('success', 'Data Dipindahkan Ke Datang ke Kantor'); 
            }
            else
            {
                $this->session->set_flashdata('Gagal', 'Gagal Memindahkan Data ke Datang ke Kantor');
            }
        }else if($this->M_add_post->cekstatus($token) == 2){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'flag' => 3
            );
            if($this->M_add_post->upddata($data)) // call the method from the model
            {
                $this->session->set_flashdata('success', 'Data Dipindahkan Ke Tolak'); 
            }
            else
            {
                $this->session->set_flashdata('Gagal', 'Gagal Memindahkan Data ke Tolak');
            }
        }else{
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'flag' => 0
            );
            if($this->M_add_post->upddata($data)) // call the method from the model
            {
                $this->session->set_flashdata('success', 'Data Dipindahkan Ke Belum Diperiksa'); 
            }
            else
            {
                $this->session->set_flashdata('Gagal', 'Gagal Memindahkan Data ke Belum Diperiksa');
            }
        }
        redirect('admin/manage_post/detail/'.$token);
    }
}
