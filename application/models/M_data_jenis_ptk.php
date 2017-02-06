<?php
class M_data_jenis_ptk extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from jenis_ptk");
        return $query->result();
    }
	function edit_jenis_ptk($id)
    {
        $query=$this->db->query("SELECT * from jenis_ptk where id_jenis_ptk='$id'");
        return $query->result();
    }
}