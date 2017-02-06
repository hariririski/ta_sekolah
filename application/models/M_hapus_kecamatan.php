<?php
class M_hapus_kecamatan extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE   kecamatan.*, desa.* from kecamatan LEFT JOIN desa on desa.id_kecamatan=kecamatan.id_kecamatan where kecamatan.id_kecamatan='$id'");
        return $query;
    }
	
}