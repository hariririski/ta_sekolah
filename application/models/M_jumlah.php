<?php
class M_jumlah extends CI_Model{
    function jumlah_kelas()
    {
        $query=$this->db->query("SELECT count(id_kelas) as jumlah_kelas from kelas");
        return $query->result();
    }
	
	function jumlah_siswa()
    {
        $query=$this->db->query("SELECT count(nisn) as jumlah_siswa from siswa");
        return $query->result();
    }
	
	function jumlah_guru()
    {
        $query=$this->db->query("SELECT count(nip)as jumlah_guru from guru");
        return $query->result();
    }
	
	function mata_pelajaran()
    {
        $query=$this->db->query("SELECT * from mata_pelajaran");
        return $query->result();
    }
	
	
}