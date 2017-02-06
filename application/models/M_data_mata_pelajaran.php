<?php
class M_data_mata_pelajaran extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from mata_pelajaran");
        return $query->result();
    }
	 function edit_mata_pelajaran($id)
    {
        $query=$this->db->query("SELECT * from mata_pelajaran where id_mata_pelajaran='$id'");
        return $query->result();
    }
}