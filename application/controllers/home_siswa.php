<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_siswa extends CI_Controller {

	public function index()
	{
		$data['page'] = 'dashboard_pengguna';
		$this->load->view('homesiswa', $data);
	}

	public function show_profile(){
		$query = $this->db->query("SELECT * FROM pengguna WHERE no_pengguna = '".$_SESSION['no_pengguna']."'");
		$data['pengguna'] = $query->result();
        $data['total'] = $query->num_rows();    
		$data['page'] = 'siswa/profile_siswa';
		$this->load->view('homesiswa', $data);
	}
}