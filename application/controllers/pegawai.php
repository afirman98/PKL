<?php
class pegawai extends CI_Controller {
    public function __construct(){
            
        parent :: __construct();
        $this->load->model('pegawai_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['pegawai'] = $this->pegawai_model->getpegawaiall();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pegawai/index',$data);
        $this->load->view('template/footer');
    }
    public function tambah(){
        $this->form_validation->set_rules('NIP','NIP','required','numeric');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('tmp_lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('Hp','Nomor HP','required','numeric');
        if($this->form_validation->run()==FALSE){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pegawai/tambah');
        $this->load->view('template/footer');
    }else{
        $this->pegawai_model->tambahpegawai();
        $this->session->set_flashdata('flash','ditambahkan');
        redirect('pegawai');
    }
}
public function editpegawai($NIP){
        $data['pegawaie'] = $this->pegawai_model->PegawaiNIP($NIP);
        $this->form_validation->set_rules('NIP','NIP','required','numeric');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('tmp_lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('Hp','Nomor HP','required','numeric');
        if($this->form_validation->run()==FALSE){
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pegawai/edit',$data);
        $this->load->view('template/footer');
    }else{
        $this->pegawai_model->editpegawai();
        $this->session->set_flashdata('flash','di Ubah');
        redirect('pegawai');
}
}
}
