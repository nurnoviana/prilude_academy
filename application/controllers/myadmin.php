<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myadmin extends CI_Controller {
  function __construct() { 
    parent::__construct(); 
  } 

	public function index()
	{
		$this->load->view('myadmin');
	}

	public function proses()
  {
    $email_admin = $this->input->post('email');
    $password = $this->input->post('password');

    $query = "SELECT * FROM user_admin WHERE email_admin = '$email_admin'";
    $hasil = $this->db->query($query);
    $result =  $hasil->row();

    if (isset($result)) {
      if ($result->password == $password) {
        $this->session->login_status = True;
        $this->session->alamat_email = $alamat_email;
        $this->session->no_pengguna = $no_pengguna;
        $this->session->nama_admin = $result->nama_admin;
        
        redirect('home_admin');
      } else {
        $data['errormsg'] = "Password Salah!";
        $this->load->view('myadmin', $data);
      }
    } else {
      $data['errormsg'] = "Username tidak ditemukan";
      $this->load->view('myadmin', $data);
    }
  }

  public function logout()
  {
    session_destroy();
    redirect('myadmin');
  }

}
