<?php
class M_nama_admin extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from admin where username='$id'");
        return $query->result();
    }
}