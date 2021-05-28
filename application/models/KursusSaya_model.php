<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class KursusSaya_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_kursus_saya()
    {
        return $this->db->get("kursus_saya");
    }
}

?>