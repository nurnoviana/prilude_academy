<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class StatusPembayaran_model extends CI_Model
{
    function get_status(){
        return $this->db->get("status_pembayaran");
    }
}