<?php
class login extends CI_Controller {
        public function __construct(){
            parent :: __construct();
          $this->load->model('login_model');
           // $this->load->library('form_validation');
        }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('login/index');
        $this->load->view('template/footer');
    }

    public function aksilogin(){
        $username= $this->input->post('user');
        $password= $this->input->post('pass');
        $where = array(
            "username"=> $username,
            "pass"=> md5($password),
        );
        $cek = $this->login_model->cek_login("pegawai",$where)->row();
        if($cek > 0 ){
            $data_session = array(
                'nama'=>$username,
                'status'=>"Online",
                'level'=>$cek->Jabatan,
                'nama_p'=>$cek->nama,
                'NIP'=>$cek->NIP
            );
        $this->session->set_userdata($data_session);
        redirect("home");
        }
        else{
            $this->load->view('template/header');
            $this->load->view('login/index');
            $this->load->view('template/footer');
            echo "Username dan Password salah !";
        }

    }
    public function keluar(){
        $this->session->sess_destroy();
        redirect("login");
    }
}