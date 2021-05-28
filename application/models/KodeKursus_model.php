<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class KodeKursus_model extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    
    function get_kode_kursus()
    {
        return $this->db->get("kursus");
    }
}

?>