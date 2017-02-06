<?php
class M_select extends CI_Model{
    function agama()
    {
        $query=$this->db->query("SELECT * from agama");
        return $query->result();
    }
	
	function jenis_ptk()
    {
        $query=$this->db->query("SELECT * from jenis_ptk");
        return $query->result();
    }
	
	function jenjang_pendidikan()
    {
        $query=$this->db->query("SELECT * from jenjang_pendidikan");
        return $query->result();
    }
	
	function mata_pelajaran()
    {
        $query=$this->db->query("SELECT * from mata_pelajaran");
        return $query->result();
    }
	function status_kepegawaian()
    {
        $query=$this->db->query("SELECT * from status_kepegawaian");
        return $query->result();
    }
	
	
	function kabupaten()
    {
        $query=$this->db->query("SELECT * from kabupaten");
        return $query->result();
    }
	function kecamatan($id)
    {
		
        $query=$this->db->query("SELECT * from kecamatan inner join kabupaten on kabupaten.id_kabupaten=kecamatan.id_kabupaten where kabupaten.nama_kabupaten='$id'");
        return $query->result();
    }
	function desa($id)
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan= desa.id_kecamatan where kecamatan.nama_kecamatan='$id'");
        return $query->result();
    }

//-------------------------	
	function kabupaten2()
    {
        $query=$this->db->query("SELECT * from kabupaten inner join provinsi on kabupaten.id_provinsi=provinsi.id_provinsi where  provinsi.id_provinsi='$id'");
        return $query->result();
    }
	function kecamatan2($id)
    {
		
        $query=$this->db->query("SELECT * from kecamatan inner join kabupaten on kabupaten.id_kabupaten=kecamatan.id_kabupaten where kabupaten.id_kabupaten='$id'");
        return $query->result();
    }
	function desa2($id)
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan= desa.id_kecamatan where kecamatan.id_kecamatan='$id'");
        return $query->result();
    }
	
	
}