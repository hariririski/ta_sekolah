<?php
class M_data_per_kelas extends CI_Model{
    function get_user_all($kelas,$tahun_ajaran)
    {
        $query=$this->db->query("SELECT * FROM siswa INNER JOIN siswa_kelas on siswa_kelas.nisn=siswa.nisn WHERE siswa_kelas.id_kelas='$kelas' and siswa_kelas.tahun_ajaran='$tahun_ajaran'");
        return $query->result();
    }
	
	
}