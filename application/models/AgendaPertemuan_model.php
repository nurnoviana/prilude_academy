<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AgendaPertemuan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_AgendaPertemuan()
    {
        return $this->db->get("agenda_pertemuan");
    }
}

?>