<?php
class M_data_jenjang_pendidikan extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from jenjang_pendidikan");
        return $query->result();
    }
	function edit_jenjang_pendidikan($id)
    {
        $query=$this->db->query("SELECT * from jenjang_pendidikan where id_jenjang_pendidikan='$id'");
        return $query->result();
    }
}