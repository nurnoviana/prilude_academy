<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class pengguna_model extends CI_Model
{
    function get_no_pengguna()
    {
        return $this->db->get("pengguna");
    }

}

?>