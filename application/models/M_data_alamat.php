<?php
class M_data_alamat extends CI_Model{
   
	function semua()
    {
        $query=$this->db->query("SELECT * from  kabupaten LEFT JOIN kecamatan on kecamatan.id_kabupaten=kabupaten.id_kabupaten LEFT JOIN desa on desa.id_kecamatan=kecamatan.id_kecamatan");
        return $query->result();
    }
	
	function kabupaten()
    {
        $query=$this->db->query("SELECT * from kabupaten  ");
        return $query->result();
    }
	function kecamatan()
    {
		
        $query=$this->db->query("SELECT * from kecamatan inner join kabupaten on kabupaten.id_kabupaten=kecamatan.id_kabupaten ");
        return $query->result();
    }
	function desa()
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan=desa.id_kecamatan");
        return $query->result();
    }
	
	
}