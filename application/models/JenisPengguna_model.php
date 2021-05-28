<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class JenisPengguna_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_jenis_pengguna()
    {
        return $this->db->get("jenis_pengguna");
    }
}

?>