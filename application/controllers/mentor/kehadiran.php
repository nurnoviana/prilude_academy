<?php 

class kehadiran extends CI_Controller {
    function __construct() { 
        parent::__construct();
        $this->load->model('AgendaPertemuan_model');
        $this->load->model('KursusSaya_model');
    } 
	public function index()
	{
        $query = $this->db->query("SELECT * FROM kehadiran"); 
        $data['kehadiran'] = $query->result();
        $data['total'] = $query->num_rows();
        $data['page'] = 'pengajar/kehadiran/lihat_hadir';
        $this->load->view('homementor', $data);
    }
    
    public function input()
    {
        $data['agenda_pertemuan'] = $this->AgendaPertemuan_model->get_AgendaPertemuan();
        $data['kursus_saya'] = $this->KursusSaya_model->get_kursus_saya();
        $data['page'] = 'pengajar/kehadiran/form_tambah_hadir';
        $this->load->view('homementor', $data);
    }

        public function add()
    {
        $tanggal   = $this->input->post('tanggal');
        $status_kehadiran      = $this->input->post('status_kehadiran');
        $id_agenda_pertemuan   = $this->input->post('agenda_pertemuan');
        $id_kursus_saya   = $this->input->post('id_kursus_saya');

        $query = $this->db->query("INSERT INTO kehadiran VALUES (NULL, '$tanggal', '$status_kehadiran', '$id_agenda_pertemuan', '$id_kursus_saya')");
        if ($query) {
        $this->index();
        } else {
        echo "<h2>Input Gagal</h2>";
        }
    }

    public function del($id_kehadiran)
    {
      $query = $this->db->query("DELETE FROM kehadiran WHERE id_kehadiran = '$id_kehadiran'");
      $this->index();
    }

    public function edit($id_kehadiran)
    {
        $data['agenda_pertemuan'] = $this->AgendaPertemuan_model->get_AgendaPertemuan();
        $data['kursus_saya'] = $this->KursusSaya_model->get_kursus_saya();
        $query = $this->db->query("SELECT * FROM kehadiran WHERE id_kehadiran = '$id_kehadiran'");
        $data['kehadiran'] = $query->row();
        $data['page'] = 'pengajar/kehadiran/form_edit_hadir';
        $this->load->view('homementor', $data);
    }

    public function simpan($id_kehadiran){
        $tanggal   = $this->input->post('tanggal');
        $status_kehadiran  = $this->input->post('status_kehadiran');
        $id_agenda_pertemuan   = $this->input->post('agenda_pertemuan');
        $id_kursus_saya   = $this->input->post('id_kursus_saya');

        $query = $this->db->query("UPDATE kehadiran SET tanggal = '$tanggal', status_kehadiran = '$status_kehadiran',
        id_agenda_pertemuan = '$id_agenda_pertemuan', id_kursus_saya = '$id_kursus_saya' WHERE id_kehadiran = '$id_kehadiran' ");
        $this->index();
    }

}

?>