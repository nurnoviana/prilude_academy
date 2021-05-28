<?php 

class agenda extends CI_Controller {
    function __construct() { 
        parent::__construct();
        $this->load->model('KodeKursus_model');
    } 
	public function index()
	{
        $query = $this->db->query("SELECT * FROM agenda_pertemuan"); 
        $data['agenda_pertemuan'] = $query->result();
        $data['total'] = $query->num_rows();
        $data['page'] = 'pengajar/agenda_pertemuan/lihat_agenda';
        $this->load->view('homementor', $data);
    }
    
    public function input()
    {
        $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();
        $data['page'] = 'pengajar/agenda_pertemuan/form_tambah_agenda';
        $this->load->view('homementor', $data);
    }

        public function add()
    {
        $id_agenda_pertemuan   = $this->input->post('id_agenda_pertemuan');
        $pertemuan_ke      = $this->input->post('pertemuan_ke');
        $judul_materi   = $this->input->post('judul_materi');
        $deskripsi_materi   = $this->input->post('deskripsi_materi');
        $link_modul      = $this->input->post('link_modul');
        $tanggal_dibuat   = date("Y-m-d");
        $terakhir_diubah   = date("Y-m-d");
        $kode_kursus  = $this->input->post('kode_kursus');

        $query = $this->db->query("INSERT INTO agenda_pertemuan VALUES ('$id_agenda_pertemuan', '$pertemuan_ke',
         '$judul_materi', '$deskripsi_materi', '$link_modul', '$tanggal_dibuat', '$terakhir_diubah', '$kode_kursus')");
        if ($query) {
        $this->index();
        } else {
        echo "<h2>Input Gagal</h2>";
        }
    }

    public function del($id_agenda_pertemuan)
    {
      $query = $this->db->query("DELETE FROM agenda_pertemuan WHERE id_agenda_pertemuan = '$id_agenda_pertemuan'");
      $this->index();
    }

    public function edit($id_agenda_pertemuan)
    {
        $data['kursus'] = $this->KodeKursus_model->get_kode_kursus();
        $query = $this->db->query("SELECT * FROM agenda_pertemuan WHERE id_agenda_pertemuan = '$id_agenda_pertemuan'");
        $data['agenda_pertemuan'] = $query->row();
        $data['page'] = 'pengajar/agenda_pertemuan/form_edit_agenda';
        $this->load->view('homementor', $data);
    }

    public function update()
    {
        $id_agenda_pertemuan    = $this->input->post('id_agenda_pertemuan');
        $pertemuan_ke   = $this->input->post('pertemuan_ke');
        $judul_materi       = $this->input->post('judul_materi');
        $deskripsi_materi   = $this->input->post('deskripsi_materi');
        $link_modul   = $this->input->post('link_modul');
        $terakhir_diubah = date("Y-m-d");
        $kode_kursus   = $this->input->post('kode_kursus');

        $query = $this->db->query("UPDATE agenda_pertemuan
        SET id_agenda_pertemuan = '$id_agenda_pertemuan', pertemuan_ke = '$pertemuan_ke', judul_materi = '$judul_materi', deskripsi_materi = '$deskripsi_materi',
        link_modul = '$link_modul', terakhir_diubah = '$terakhir_diubah', kode_kursus='$kode_kursus' WHERE id_agenda_pertemuan = '$id_agenda_pertemuan'");
        if ($query) {
        $this->index();
        } else {
        echo "<h2>Input Gagal</h2>";
        }
    }
}

?>