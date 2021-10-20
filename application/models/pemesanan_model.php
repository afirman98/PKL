<?php 

    class pemesanan_model extends CI_Model{
        public function getpemesananall(){
            return $this->db->get('pemesanan')->result_array();
        }
        public function tambahpemesanan(){
            $data = [
                "id_pemesanan" => $this->input->post('id',true),
                "judul_pemesanan" => $this->input->post('judul',true),
                "tgl_pemesanan" => $this->input->post('tgl_pesan',true),
                "deskripsi" => $this->input->post('deskripsi',true),	
                "status_pengerjaan" => ('Belum Dikerjakan'),	
            ];
            $this->db->insert('pemesanan',$data);
        }
        public function pemesananid($id_pemesanan){
            return $this->db->get_where('pemesanan',['id_pemesanan'=> $id_pemesanan])->row_array();
        }
        // Joblist
        public function addjob($id_pemesanan){
            $data = [
                    "NIP" => $this->session->userdata("NIP")
            ];
            $this->db->where('id_pemesanan',$id_pemesanan);
            $this->db->update('pemesanan',$data);
        }
        public function editjoblist(){
            $data = [
                    "judul_pemesanan" => $this->input->post('judul',true),
                    "deskripsi" => $this->input->post('deskripsi',true),
                    "status_pengerjaan" => $this->input->post('stus_pengerjaan',true)	
            ];
            $this->db->where('id_pemesanan',$this->input->post('id',true));
            $this->db->update('pemesanan',$data);
        }
        public function editpemesanan(){
            $data = [
                "judul_pemesanan" => $this->input->post('judul',true),
                "tgl_pemesanan" => $this->input->post('tgl_pesan',true),
                "deskripsi" => $this->input->post('deskripsi',true),		
            ];
            $this->db->where('id_pemesanan',$this->input->post('id',true));
            $this->db->update('pemesanan',$data);
        }

    }