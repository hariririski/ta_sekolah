<?php
class M_data_agama extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from agama");
        return $query->result();
    }
	function edit_agama($id)
    {
        $query=$this->db->query("SELECT * from agama where id_agama='$id'");
        return $query->result();
    }
}