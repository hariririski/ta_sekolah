<?php
class M_data_guru extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * FROM `guru` INNER JOIN mata_pelajaran on mata_pelajaran.id_mata_pelajaran=guru.id_mata_pelajaran");
        return $query->result();
    }
	function detail_guru($id)
    {
        $query=$this->db->query("SELECT * FROM `guru` INNER JOIN mata_pelajaran on mata_pelajaran.id_mata_pelajaran=guru.id_mata_pelajaran INNER JOIN agama on agama.id_agama=guru.id_agama INNER JOIN jenis_ptk on jenis_ptk.id_jenis_ptk = guru.id_jenis_ptk INNER JOIN jenjang_pendidikan on jenjang_pendidikan.id_jenjang_pendidikan=guru.id_jenjang_pendidikan INNER join status_kepegawaian on status_kepegawaian.id_status_kepegawaian=guru.id_status_kepegawaian where guru.nip='$id'");
        return $query->result();
    }
	function detail_guru_semua()
    {
        $query=$this->db->query("SELECT * FROM `guru` INNER JOIN mata_pelajaran on mata_pelajaran.id_mata_pelajaran=guru.id_mata_pelajaran INNER JOIN agama on agama.id_agama=guru.id_agama INNER JOIN jenis_ptk on jenis_ptk.id_jenis_ptk = guru.id_jenis_ptk INNER JOIN jenjang_pendidikan on jenjang_pendidikan.id_jenjang_pendidikan=guru.id_jenjang_pendidikan INNER join status_kepegawaian on status_kepegawaian.id_status_kepegawaian=guru.id_status_kepegawaian");
        return $query->result();
    }
}