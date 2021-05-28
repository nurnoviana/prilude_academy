<?php 

class course extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('KodeKursus_model');
    }

    function index(){
        $data['kursus'] = $this->KodeKursus_model->get_kode_kursus()->result();
        $data['page'] = 'admin/kursus/tampil_kursus';
        $this->load->view('home_admin', $data);
    }

    function input(){
        $data['page'] = 'admin/kursus/form_add_kursus';
        $this->load->view('home_admin', $data);
    }

    public function add()
    {
        $kode_kursus    = $this->input->post('kode_kursus');
        $nama_kursus    = $this->input->post('nama_kursus');
        $alokasi_waktu  = $this->input->post('alokasi_waktu');
        $deskripsi_singkat = $this->input->post('deskripsi_singkat');
        $deskripsi  = $this->input->post('deskripsi');
        $harga_per_bulan  = $this->input->post('harga_per_bulan');

        $query = $this->db->query("INSERT INTO kursus VALUES ('$kode_kursus', '$nama_kursus', '$alokasi_waktu', '$deskripsi_singkat', '$deskripsi', '$harga_per_bulan')");
        if ($query) {
        $this->index();
        } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
        Data <a href=\"#\" class=\"alert-link\"> gagal diinput</a>. Silakan coba lagi.
        </div>";
        }
    }

    public function del($kode_kursus)
    {
      $query = $this->db->query("DELETE FROM kursus WHERE kode_kursus = '$kode_kursus'");
      $this->index();
    }

    function edit($kode_kursus){
        $query = $this->db->query("SELECT * FROM kursus WHERE kode_kursus = '$kode_kursus'");
        $data['kursus'] = $query->row();
        $data['page'] = 'admin/kursus/form_edit_kursus';
        $this->load->view('home_admin', $data);
    }

    function update(){
        $kode_kursus    = $this->input->post('kode_kursus');
        $nama_kursus    = $this->input->post('nama_kursus');
        $alokasi_waktu  = $this->input->post('alokasi_waktu');
        $deskripsi_singkat = $this->input->post('deskripsi_singkat');
        $deskripsi  = $this->input->post('deskripsi');
        $harga_per_bulan  = $this->input->post('harga_per_bulan');

        $query = $this->db->query("UPDATE kursus SET kode_kursus = '$kode_kursus', nama_kursus = '$nama_kursus', alokasi_waktu = '$alokasi_waktu',
        deskripsi_singkat = '$deskripsi_singkat', deskripsi = '$deskripsi', harga_per_bulan = '$harga_per_bulan' WHERE kode_kursus = '$kode_kursus' ");
        if ($query) {
            $this->index();
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
            Data <a href=\"#\" class=\"alert-link\"> gagal diinput</a>. Silakan coba lagi.
            </div>";
        }

    }




}

?>