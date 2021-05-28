<?php

    class tagihan extends CI_Controller{
        function __construct(){
            parent:: __construct();
            $this->load->model('tagihan_model');
            $this->load->model('KodeKursus_model');
            $this->load->model('pengguna_model');
            $this->load->model('MetodePembayaran_model');
            $this->load->model('StatusPembayaran_model');
        }

        public function index(){
            $query = $this->db->query("SELECT * FROM tagihan");
            $data['tagihan'] = $query->result();
            $data['total'] = $query->num_rows();    
            $data['page'] = 'admin/tagihan_kursus/show_tagihan';
            $this->load->view('home_admin', $data);
        } 

        function input(){
            $data['status_pembayaran'] = $this->StatusPembayaran_model->get_status();
            $data['metode_pembayaran'] = $this->MetodePembayaran_model->get_metode();
            $data['pengguna'] = $this->pengguna_model->get_no_pengguna();
            $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();
            $data['page'] = 'admin/tagihan_kursus/tambah_tagihan';
            $this->load->view('home_admin', $data);
        }

        function add(){
            $no_tagihan = $this->input->post('no_tagihan');
            $tanggal_dibuat = date("Y-m-d h:i:sA");
            $tanggal_jatuh_tempo = $this->input->post('tanggal_jatuh_tempo');
            $tanggal_lunas = $this->input->post('tanggal_lunas');
            $deskripsi = $this->input->post('deskripsi');
            $jumlah_tagihan = $this->input->post('jumlah_tagihan');
            $diskon = $this->input->post('diskon');
            $tagihan_setelah_diskon = $jumlah_tagihan - ($jumlah_tagihan * $diskon / 100);
            $id_status_pembayaran = $this->input->post('id_status_pembayaran');
            $no_pengguna = $this->input->post('no_pengguna');
            $kode_kursus = $this->input->post('kode_kursus');
            $id_metode_pembayaran = $this->input->post('id_metode_pembayaran');

            $hasil = $this->db->query("SELECT * FROM tagihan WHERE no_tagihan = '$no_tagihan'");
            $result = $hasil->row();
            if (isset($result)) {
                $data['status_pembayaran'] = $this->StatusPembayaran_model->get_status();
                $data['metode_pembayaran'] = $this->MetodePembayaran_model->get_metode();
                $data['pengguna'] = $this->pengguna_model->get_no_pengguna();
                $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();    
              $data['errormsg'] = "<b>Nomor Tagihan Tidak Boleh Duplikat</b>";
              $data['page'] = 'admin/tagihan_kursus/tambah_tagihan';
              $this->load->view('home_admin', $data);
            } else {
                $query = $this->db->query("INSERT INTO tagihan VALUES('$no_tagihan', '$tanggal_dibuat', '$tanggal_jatuh_tempo', '$tanggal_lunas', 
                '$deskripsi', '$jumlah_tagihan', '$diskon', '$tagihan_setelah_diskon', '$id_status_pembayaran', '$no_pengguna', '$kode_kursus', 
                '$id_metode_pembayaran')");
                    if ($query) {
                        $this->index();
                    } else {
                        $data['errormsg'] = "<b>Error!</b>";
                    }
                }
                        
        }

        function del($no_tagihan){
            $query = $this->db->query("DELETE FROM tagihan WHERE no_tagihan = '$no_tagihan'");
            $this->index();    
        }

        function konfirmasi($no_tagihan){
            $tanggal_lunas = date("Y-m-d h:i:sA");
            $id_status_pembayaran = 2;
            $query = $this->db->query("UPDATE tagihan SET tanggal_lunas = '$tanggal_lunas', id_status_pembayaran = '$id_status_pembayaran' WHERE no_tagihan = '$no_tagihan'");
            $this->index(); 
        }

    }


?>