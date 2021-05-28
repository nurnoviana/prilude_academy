<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('JenisPengguna_model');
  }

  public function index()
  {
    $this->load->view('form_login');
  }

  public function proses()
  {
    $alamat_email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $query = "SELECT * FROM pengguna WHERE alamat_email = '$alamat_email'";
    $hasil = $this->db->query($query);
    $result =  $hasil->row();

    if (isset($result)) {
      if ($result->password == $password) {
        $this->session->login_status = True;
        $this->session->alamat_email = $alamat_email;
        $this->session->no_pengguna = $result->no_pengguna;
        $this->session->nama_lengkap = $result->nama_lengkap;
        $this->session->tempat_lahir = $result->tempat_tahir;

        if ($result->id_jenis_pengguna == 1 && $result->is_active == 1) {
          redirect('home_siswa');
        } elseif ($result->id_jenis_pengguna == 2 && $result->is_active == 1) {
          redirect('home_pengajar');
        } elseif ($result->id_jenis_pengguna == 2 && $result->is_active == 0) {
          redirect('backtologin');
        } elseif ($result->id_jenis_pengguna == 1 && $result->is_active == 0) {
          redirect('backtologin');
        }
      } else {
        $data['errormsg'] = "Password Salah!";
        $this->load->view('form_login', $data);
      }
    } else {
      $data['errormsg'] = "Username tidak ditemukan";
      $this->load->view('form_login', $data);
    }
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }

  public function adduser()
  {
    $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
    $this->load->view('form_register', $data);
  }

  public function simpan()
  {
    $alamat_email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $nama_lengkap = $this->input->post('nama_lengkap');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $jenis_identitas = $this->input->post('jenis_identitas');
    $no_identitas = $this->input->post('no_identitas');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $desa = $this->input->post('desa');
    $kecamatan = $this->input->post('kecamatan');
    $kabupaten = $this->input->post('kabupaten');
    $provinsi = $this->input->post('provinsi');
    $is_active = 0;
    $id_jenis_pengguna = $this->input->post('jenis_pengguna');


    $hasil = $this->db->query("SELECT * FROM pengguna WHERE alamat_email = '$alamat_email'");
    $result = $hasil->row();
    if (isset($result)) {
      $data['jenis_pengguna'] = $this->JenisPengguna_model->get_jenis_pengguna();
      $data['errormsg'] = "<b>Email Sudah Ada</b>";
      $this->load->view('form_register', $data);
    } else {
      $query = "INSERT INTO pengguna VALUES (NULL, '$alamat_email', '$password', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_identitas', '$no_identitas', '$alamat', '$jenis_kelamin', '$desa', '$kecamatan',  '$kabupaten', '$provinsi', '$is_active', '$id_jenis_pengguna')";
      $hasil = $this->db->query($query);
      $data['successmsg'] = True;
      $this->load->view('form_login');
    }
  }
}
