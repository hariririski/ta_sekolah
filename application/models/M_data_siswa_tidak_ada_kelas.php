<?php
class M_data_siswa_tidak_ada_kelas extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT DISTINCT siswa.nisn, siswa.nama_siswa FROM siswa, siswa_kelas WHERE siswa.nisn not in (SELECT nisn FROM siswa_kelas WHERE tahun_ajaran='$id')");
        return $query->result();
    }
	function get_user_all2($id)
    {
        $query=$this->db->query("SELECT * FROM siswa, siswa_kelas WHERE siswa.nisn!=siswa_kelas.nisn or siswa_kelas.tahun_ajaran='$id'");
        return $query->result();
    }
	
}