<?php 
class modelcrud extends CI_Model{
    public function insert($data){
        $this->db->insert('bukti_bayar', $data);
        return TRUE;
    }
}
?>