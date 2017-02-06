<?php
class M_data_status_kepegawaian extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from status_kepegawaian");
        return $query->result();
    }
	 function edit_status_kepegawaian($id)
    {
        $query=$this->db->query("SELECT * from status_kepegawaian where id_status_kepegawaian='$id'");
        return $query->result();
    }
}