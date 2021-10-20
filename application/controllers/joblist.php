<?php
class joblist extends CI_Controller {
    public function __construct(){
            
        parent :: __construct();
        $this->load->model('pemesanan_model');
        $this->load->model('pegawai_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['pegawai'] = $this->pegawai_model->getpegawaiall();
        $data['pesanan'] = $this->pemesanan_model->getpemesananall();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('joblist/index',$data);
        $this->load->view('template/footer');
    }
    public function tambah(){
        $this->form_validation->set_rules('id','ID Pemesanan','required','numeric');
        $this->form_validation->set_rules('judul','Judul Pemesanan','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('joblist/tambah');
            $this->load->view('template/footer');
            }else{
                $this->pemesanan_model->tambahpemesanan();
                $this->session->set_flashdata('flash','ditambahkan');
                redirect('Pemesanan');
            }
        }
    public function editjob($id_pemesanan){
        $data['jobedit'] = $this->pemesanan_model->pemesananid($id_pemesanan);
        $this->form_validation->set_rules('id','ID Pemesanan','required','numeric');
        $this->form_validation->set_rules('judul','Judul Pemesanan','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('joblist/edit',$data);
            $this->load->view('template/footer');
        }else{
            $this->pemesanan_model->editjoblist();
            $this->session->set_flashdata('flash','diubah');
            redirect('joblist');
        }
    }



}