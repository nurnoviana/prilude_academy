<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_pengajar extends CI_Controller {

	public function index()
	{
		$data['page'] = 'dashboard_pengguna';
		$this->load->view('homementor', $data);
	}

	public function show_profile()
	{
		$data['page'] = 'pengajar/profile_pengajar';
		$this->load->view('homementor', $data);
	}
}