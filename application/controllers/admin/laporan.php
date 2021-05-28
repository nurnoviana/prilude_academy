<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('tagihan_model');
    }

	public function index()
	{
        $query = $this->db->query("SELECT * FROM bukti_bayar"); 
        $data['tagihan_setelah_diskon'] = $this->tagihan_model->get_pendapatan()->result();
        $data['bukti_bayar'] = $query->result();
        $data['tagihan'] = $this->tagihan_model->get_tagihan();
        $data['page'] = 'admin/laporan';
        $this->load->view('home_admin', $data);
    }
    
}
