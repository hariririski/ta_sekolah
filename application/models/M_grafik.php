<?php
class M_grafik extends CI_Model{
    function report($id,$id2){
		$th=$id."/".$id2;
        $query = $this->db->query("SELECT siswa.jenis_kelamin, COUNT(siswa.jenis_kelamin) as jumlah from siswa_kelas INNER join siswa on siswa.nisn=siswa_kelas.nisn WHERE siswa_kelas.tahun_ajaran='$th' GROUP BY siswa.jenis_kelamin");
         
        
            return $query->result();
        }
	
	
}