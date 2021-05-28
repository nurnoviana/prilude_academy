<?php

class pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('JenisPengguna_model');
    }
    public function index()
    {
        $query = $this->db->query("SELECT * FROM pengguna");
        $data['pengguna'] = $query->result();
        $data['total'] = $query->num_rows();
        $data['page'] = 'admin/pengguna/show_pengguna';
        $this->load->view('home_admin', $data);
    }

    public function input()
    {
        $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
        $data['page'] = 'admin/pengguna/form_add_pengguna';
        $this->load->view('home_admin', $data);
    }

    public function add()
    {
        $alamat_email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $nama_lengkap = $this->input->post('fullname');
        $tempat_lahir = $this->input->post('birthplace');
        $tanggal_lahir = $this->input->post('birthdate');
        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('identity_code');
        $alamat = $this->input->post('address');
        $jenis_kelamin = $this->input->post('gender');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $id_jenis_pengguna = $this->input->post('jenis_pengguna');

        $query = $this->db->query("INSERT INTO pengguna VALUES (NULL, '$alamat_email', '$password', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_identitas', '$no_identitas', '$alamat', '$jenis_kelamin', '$desa', '$kecamatan',  '$kabupaten', '$provinsi', '$id_jenis_pengguna')");
        if ($query) {
            $this->index();
        } else {
            echo "<h2>Input Gagal</h2>";
        }
    }

    public function del($no_pengguna)
    {
        $query = $this->db->query("DELETE FROM pengguna WHERE no_pengguna = '$no_pengguna'");
        $this->index();
    }

    public function activity($no_pengguna)
    {
        $query = $this->db->query("UPDATE pengguna SET is_active = 1 WHERE no_pengguna = '$no_pengguna'");
        $this->index();
    }

    public function inactivity($no_pengguna)
    {
        $query = $this->db->query("UPDATE pengguna SET is_active = 0 WHERE no_pengguna = '$no_pengguna'");
        $this->index();
    }

    public function edit($no_pengguna)
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE no_pengguna = '$no_pengguna'");
        $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
        $data['pengguna'] = $query->row();
        $data['page'] = 'admin/pengguna/form_edit_pengguna';
        $this->load->view('home_admin', $data);
    }

    public function update()
    {
        $no_pengguna = $this->input->post('no_pengguna');
        $alamat_email = $this->input->post('email');
        $nama_lengkap = $this->input->post('fullname');
        $tempat_lahir = $this->input->post('birthplace');
        $tanggal_lahir = $this->input->post('birthdate');
        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('identity_code');
        $alamat = $this->input->post('address');
        $jenis_kelamin = $this->input->post('gender');
        $desa = $this->input->post('desa');
        $kecamatan = $this->input->post('kecamatan');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $id_jenis_pengguna = $this->input->post('jenis_pengguna');

        $query = $this->db->query("UPDATE pengguna SET no_pengguna = '$no_pengguna', alamat_email = '$alamat_email',
        nama_lengkap = '$nama_lengkap', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir',
        jenis_identitas = '$jenis_identitas', no_identitas = '$no_identitas', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin',
        desa = '$desa', kecamatan = '$kecamatan', kabupaten = '$kabupaten', provinsi = '$provinsi', id_jenis_pengguna = '$id_jenis_pengguna' WHERE no_pengguna = '$no_pengguna' ");
        if ($query) {
            $this->index();
        } else {
            echo "<h2>Input Gagal</h2>";
        }
    }
}
