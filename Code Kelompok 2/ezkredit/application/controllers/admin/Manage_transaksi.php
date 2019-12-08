<?php
defined('BASEPATH') or exit('No direct script access allowed');

class manage_transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_transaksi');
        if(!$this->session->userdata('logged_in')){
            redirect('admin/login_admin');
        }
    }
    public function index()
    {
        $data['data'] = $this->M_transaksi->getall();
        $this->load->view('admin/manage-transaksi', $data);
    }
    public function query()
    {
        $post = $this->input->post() ;
        $kode = $post['kode'];
        redirect('admin/manage_transaksi/hasilquery/' . $kode);
    }
    public function hasilquery($kode)
    {
        $data['data'] = $this->M_transaksi->getLike($kode);
        $this->load->view('admin/manage-transaksi', $data);
    }
    public function bayar_tagihan($token)
    {
        $data['token'] = $token;
        $this->load->view('admin/add-transaksi', $data);
    }
    public function viewtagihan($token)
    {
        $data['data'] = $this->M_transaksi->getByToken($token);
        $this->load->view('admin/manage-transaksi-terima', $data);
    }
    public function add($token)
    {
        $this->load->model('admin/M_add_post');
        $this->M_transaksi->add($token);
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        $total = $this->M_transaksi->getTotal($token);
        $hutang = $this->M_add_post->getHutang($token);
        if($hutang<=$total){
            $data = array(
            'table_name' => 'data_pelanggan',
            'token' => $token,
            'flag' => 4
            );

            if($this->M_add_post->upddata($data)) // call the method from the model
            { 
                $this->session->set_flashdata('success', 'Hutang sudah lunas'); 
            }
            else
            {
                $this->session->set_flashdata('Gagal', 'Lunas tetapi gagal update');
            }
        }
        redirect('admin/manage_transaksi/viewtagihan/'.$token);
    }
    public function formedit($kode)
    {
        if (!isset($kode)) show_404();

        $data['data'] = $this->M_transaksi->getById($kode);
        $this->load->view('admin/edit-post', $data);
    }

    public function update($kode)
    {
        if (!isset($kode)) show_404();

        $this->M_transaksi->update($kode);
        redirect(site_url('admin/manage_post'));
    }

    public function delete($kode = null, $token)
    {
        if (!isset($kode)) show_404();
        $this->M_transaksi->deleteDataTransaksi($kode);
        redirect(site_url('admin/manage_transaksi/viewtagihan/'.$token));
    }

    public function detail($kode)
    {
        if (!isset($kode)) show_404();
        $data['data'] = $this->M_transaksi->getById($kode);
        $this->load->view('admin/detail-transaksi', $data);
    }
}
