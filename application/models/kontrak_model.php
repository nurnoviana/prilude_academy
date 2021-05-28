<?php defined('BASEPATH') or exit('No direct script access allowed');

class kontrak_model extends CI_Model
{

    function showAll(){
        return $this->db->get('kursus_saya');
    }

    function search($keyword){
        $this->db->like('id_kursus_saya', $keyword);
        $this->db->or_like('tanggal_mulai', $keyword);
        $this->db->or_like('tanggal_selesai', $keyword);
        $this->db->or_like('nomor_pengguna', $keyword);
        $this->db->or_like('kode_kursus', $keyword);
        $this->db->or_like('id_jenis_pengguna', $keyword);

        $result = $this->db->get('kursus_saya')->result();
        return $result;
    }

}


?>