<?php 

class kontrak_kursus extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('kontrak_model');
        $this->load->model('pengguna_model');
        $this->load->model('JenisPengguna_model');
        $this->load->model('KodeKursus_model');
    }

    function index(){
        $data['kursus_saya'] = $this->kontrak_model->showAll()->result();
        $data['page'] = 'admin/kontrak_kursus/show_kontrak';
        $this->load->view('home_admin', $data);
    }

    function input(){
        $data['pengguna'] = $this->pengguna_model->get_no_pengguna();
        $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
        $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();
        $data['page'] = 'admin/kontrak_kursus/tambah_kontrak';
        $this->load->view('home_admin', $data);
    }

    public function add()
    {
        $id_kursus_saya    = $this->input->post('id_kursus_saya');
        $tanggal_mulai    = $this->input->post('tanggal_mulai');
        $tanggal_selesai  = $this->input->post('tanggal_selesai');
        $no_pengguna = $this->input->post('nama_pengguna');
        $kode_kursus  = $this->input->post('kode_kursus');
        $id_jenis_pengguna  = $this->input->post('jenis_pengguna');

        $query = $this->db->query("INSERT INTO kursus_saya VALUES ('$id_kursus_saya', '$tanggal_mulai', '$tanggal_selesai', '$no_pengguna', '$kode_kursus', '$id_jenis_pengguna')");
        if ($query) {
        $this->index();
        } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Data <a href=\"#\" class=\"alert-link\"> gagal diinput</a>. Silakan coba lagi.
        </div>";
        }
    }

    public function del($id_kursus_saya)
    {
      $query = $this->db->query("DELETE FROM kursus_saya WHERE id_kursus_saya = '$id_kursus_saya'");
      $this->index();
    }

    function edit($id_kursus_saya){
        $query = $this->db->query("SELECT * FROM kursus_saya WHERE id_kursus_saya = '$id_kursus_saya'");
        $data['kursus_saya'] = $query->row();
        $data['pengguna'] = $this->pengguna_model->get_no_pengguna();
        $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
        $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();
        $data['page'] = 'admin/kontrak_kursus/edit_kontrak';
        $this->load->view('home_admin', $data);
    }

    function update(){
        $id_kursus_saya    = $this->input->post('id_kursus_saya');
        $tanggal_mulai    = $this->input->post('tanggal_mulai');
        $tanggal_selesai  = $this->input->post('tanggal_selesai');
        $no_pengguna = $this->input->post('nama_pengguna');
        $kode_kursus  = $this->input->post('kode_kursus');
        $id_jenis_pengguna  = $this->input->post('jenis_pengguna');

        $query = $this->db->query("UPDATE kursus_saya SET id_kursus_saya = '$id_kursus_saya', tanggal_mulai = '$tanggal_mulai', tangal_selesai = '$tanggal_selesai', 
        no_pengguna = '$no_pengguna', kode_kursus = '$kode_kursus', id_jenis_pengguna = '$id_jenis_pengguna' WHERE id_kursus_saya = '$id_kursus_saya'");
        if ($query) {
        $this->index();
        } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Data <a href=\"#\" class=\"alert-link\"> gagal diinput</a>. Silakan coba lagi.
        </div>";
        }


    }




}
