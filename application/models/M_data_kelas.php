<?php
class M_data_kelas extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from kelas");
        return $query->result();
    }
	function edit_kelas($id)
    {
        $query=$this->db->query("SELECT * from kelas where id_kelas='$id'");
        return $query->result();
    }
}