<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_admin extends CI_Controller {

	public function index()
	{
		$data['page'] = 'dashboard';
		$this->load->view('home_admin', $data);
	}
}