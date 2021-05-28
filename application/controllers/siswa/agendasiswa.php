<?php 
class agendasiswa extends CI_Controller{

    public function index(){
        $query = $this->db->query("SELECT * FROM agenda_pertemuan");
        $data['agenda_pertemuan'] = $query->result();
        $data['total'] = $query->num_rows();
        $data['page'] = 'siswa/agenda_pertemuan/show_agenda';
        $this->load->view('homesiswa', $data);
    }

    public function input()
    {
        $data['page'] = 'siswa/agenda_pertemuan/tambah_agenda';
        $this->load->view('homesiswa', $data);
    }
    
    public function download()
    {
        $data['page']='siswa/agenda_pertemuan/materi';
        $this->load->view('homesiswa',$data);        
    }
    
    public function edit($id_agenda_pertemuan)
    {
        $query = $this->db->query("SELECT * FROM agenda_pertemuan WHERE id_agenda_pertemuan = '$id_agenda_pertemuan'");
        $data['id_agenda_pertemuan'] = $query->result();
        $data['page'] = 'siswa/agenda/edit_agenda';
        $this->load->view('homesiswa', $data);
    }
    
    public function update()
    {
        $id_agenda_pertemuan    = $this->input->post('id_agenda_pertemuan');
        $pertemuan_ke    = $this->input->post('pertemuan_ke');
        $judul_materi  = $this->input->post('judul_materi');
        $deskripsi_materi = $this->input->post('deskripsi_materi');
        $link_modul  = $this->input->post('link_modul');
        $tanggal_dibuat  = $this->input->post('tanggal_dibuat');
        $terakhir_diubah  = $this->input->post('terakhir_diubah');
        $kode_kursus  = $this->input->post('kode_kursus');

        $query = $this->db->query("UPDATE agenda_pertemuan
        SET pertemuan_ke = '$pertemuan_ke', judul_materi = '$judul_materi', deskripsi_materi = '$deskripsi_materi', link_modul = '$link_modul', tanggal_dibuat = '$tanggal_dibuat', 
        terakhir_diubah = '$terakhir_diubah', kode_kursus = '$kode_kursus' WHERE id_agenda_pertemuan = '$id_agenda_pertemuan'");
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
}
?>