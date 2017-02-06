<?php
class M_hapus_desa extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE   from desa where desa.id_desa='$id'");
        return $query;
    }
	
}