<?php
class M_data_tahun_ajaran extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from tahun_ajaran");
        return $query->result();
    }
	function tahun_ajaran($id)
    {
        $query=$this->db->query("SELECT * from tahun_ajaran where id_tahun_ajaran='$id'");
        return $query->result();
    }
	
	
}