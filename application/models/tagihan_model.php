<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class tagihan_model extends CI_Model
{

    function get_tagihan()
    {
        return $this->db->get("tagihan");
    }

    function get_pendapatan()
    {
        return $this->db->query("SELECT SUM(tagihan_setelah_diskon) as total FROM tagihan WHERE id_status_pembayaran = 2");
    }

    public function insert($data)
    {
        $this->db->insert('bukti_bayar',$data);
        return TRUE;
    }
}

?>