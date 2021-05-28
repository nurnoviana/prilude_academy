<?php defined('BASEPATH') or exit('No direct script access allowed');

class MetodePembayaran_model extends CI_Model
{

    function get_metode(){
        return $this->db->get('metode_pembayaran');
    }

}


?>