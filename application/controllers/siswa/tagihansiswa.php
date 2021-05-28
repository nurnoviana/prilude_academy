<?php 

class tagihansiswa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->model('pengguna_model');
        $this->load->model('tagihan_model');
    }

    public function index(){
        $query2 = $this->db->query("SELECT * FROM tagihan WHERE no_pengguna = '".$_SESSION['no_pengguna']."'");
        $data['tagihan'] = $query2->result();
        $data['total'] = $query2->num_rows();
        $data['page'] = 'siswa/tagihan_kursus/show_tagihan';
        $this->load->view('homesiswa', $data);
    }

    function input($no_tagihan){
        $query = $this->db->query("SELECT * FROM tagihan WHERE no_tagihan = '$no_tagihan'");
        $data['tagihan'] = $query->row();
        $data['pengguna'] = $this->pengguna_model->get_no_pengguna();
        $data['page'] = 'siswa/tagihan_kursus/form_bukti_bayar';
        $this->load->view('homesiswa', $data);
    }

    public function insertdata()
  {
      $bank_asal   = $this->input->post('bank_asal');
      $nama_pemilik_rekening = $this->input->post('nama_pemilik_rekening');
      $tanggal_transfer = $this->input->post('tanggal_transfer');
      $no_tagihan = $this->input->post('no_tagihan');
      // get foto
      $config['upload_path'] = './src/img';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['bukti_transfer']['name'];
      $this->upload->initialize($config);
	    if (!empty($_FILES['bukti_transfer']['name'])) {
	        if ( $this->upload->do_upload('bukti_transfer') ) {
	            $foto = $this->upload->data();
	            $data = array(
                                'id_bukti_bayar' => NULL,
                                'bank_asal'   => $bank_asal,
                                'nama_pemilik_rekening' => $nama_pemilik_rekening,
                                'tanggal_transfer' => $tanggal_transfer,
                                'bukti_transfer'       => $foto['file_name'],
                                'no_tagihan'    => $no_tagihan,
	                        );
				$this->tagihan_model->insert($data);
              $this->index();
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
        }
  }
}

?>