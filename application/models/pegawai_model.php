<?php 

    class pegawai_model extends CI_Model{
        public function getpegawaiall(){
            // $this->db->select('*');
            // $this->db->from('pemesanan');
            // $this->db->join('barang','pemesanan.id=barang.id');
            // $query = $this->db->get();
            // return $query->result_array();
            return $this->db->get('pegawai')->result_array();
        }
        public function tambahpegawai(){
            $data = [
                "NIP" => $this->input->post('NIP',true),
                "nama" => $this->input->post('nama',true),
                "username" => $this->input->post('username',true),
                "pass"=> md5($this->input->post('password',true)),
                "Tgl_lahir" => $this->input->post('tgl_lahir',true),	
                "tmpt_lahir" => $this->input->post('tmp_lahir',true),
                "hp" => $this->input->post('Hp',true),
                "Jabatan" => $this->input->post('Jabatan',true)
            ];
            $this->db->insert('pegawai',$data);
        }
        public function pegawaiNIP($NIP){
            return $this->db->get_where('pegawai',['NIP'=> $NIP])->row_array();
        }
        public function editpegawai(){
            $data = [
                "nama" => $this->input->post('nama',true),
                "username" => $this->input->post('username',true),
                "Tgl_lahir" => $this->input->post('tgl_lahir',true),	
                "tmpt_lahir" => $this->input->post('tmp_lahir',true),
                "hp" => $this->input->post('Hp',true),
                "Jabatan" => $this->input->post('Jabatan',true),
            ];
            $this->db->where('NIP',$this->input->post('NIP',true));
            $this->db->update('pegawai',$data);
        }
    }