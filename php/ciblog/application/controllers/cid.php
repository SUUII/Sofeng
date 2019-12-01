<?php
class cid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('data_pelanggan');
    }
    public function index(){
            $data['title'] = 'Check ID';
            $this->load->view('pelanggan/templates/headerv2',$data);
            $this->load->view('pelanggan/cid');
            $this->load->view('pelanggan/templates/footer');
    }

    public function hasil()
    {
        $this->load->model('admin/M_transaksi');
        $post = $this->input->post() ;
        $token = $post['token'];
        redirect('cid/hasilquery/' . $token);
    }
    public function hasilquery($token)
    {
        $this->load->model('admin/M_transaksi');
        $this->load->model('admin/M_pegawai');
        $data['penanda'] = 0;
        $data['title'] = 'Hasil Query';
            
        if($data['data'] = $this->data_pelanggan->getById($token)){
            if($data['data'] -> flag == 0){
                $this->load->view('pelanggan/templates/headerv2',$data);
                $this->load->view('pelanggan/hasilcid-belom');
                $this->load->view('pelanggan/templates/footer');
            }else if($data['data'] -> flag == 1){
                $this->load->view('pelanggan/templates/headerv2',$data);
                $this->load->view('pelanggan/hasilcid-datang');
                $this->load->view('pelanggan/templates/footer');
            }else if($data['data'] -> flag == 2){
                if($data['transaksi'] = $this->M_transaksi->getBytoken($token)){
                    $data['total'] = $this->M_transaksi->getTotal($token);
                    $data['pegawai'] = $this->M_pegawai->getall();
                    $data['penanda'] = 1;
                }
                $this->load->view('pelanggan/templates/headerv2',$data);
                $this->load->view('pelanggan/hasilcid-terima', $data);
                $this->load->view('pelanggan/templates/footer');
            }else if($data['data'] -> flag == 3){
                $this->load->view('pelanggan/templates/headerv2',$data);
                $this->load->view('pelanggan/hasilcid-tolak');
                $this->load->view('pelanggan/templates/footer');
            }else if($data['data'] -> flag == 4){
                $this->load->view('pelanggan/templates/headerv2',$data);
                $this->load->view('pelanggan/hasilcid-lunas');
                $this->load->view('pelanggan/templates/footer');
            }
           
        }else{
            $this->session->set_flashdata('salah', 'Token yang anda masukan tidak terdaftar'); 
            redirect('cid');
        }
    }
}
?>