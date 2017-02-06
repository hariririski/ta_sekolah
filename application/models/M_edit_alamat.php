<?php
class M_edit_alamat extends CI_Model{
   
	function semua()
    {
        $query=$this->db->query("SELECT * from  kabupaten LEFT JOIN kecamatan on kecamatan.id_kabupaten=kabupaten.id_kabupaten LEFT JOIN desa on desa.id_kecamatan=kecamatan.id_kecamatan");
        return $query->result();
    }
	
	function kabupaten($id)
    {
		
        $query=$this->db->query("SELECT * from kabupaten where id_kabupaten='$id'");
        return $query->result();
    }
	function kecamatan($id)
    {
		
        $query=$this->db->query("SELECT * from kecamatan inner join kabupaten on kabupaten.id_kabupaten=kecamatan.id_kabupaten where kecamatan.id_kecamatan='$id' ");
        return $query->result();
    }
	
	function desa($id)
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan=desa.id_kecamatan INNER join kabupaten on kecamatan.id_kabupaten=kabupaten.id_kabupaten where desa.id_desa='$id'");
        return $query->result();
    }
	
	
}