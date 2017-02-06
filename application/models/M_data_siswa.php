<?php
class M_data_siswa extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * FROM siswa");
        return $query->result();
    }
	function detail_siswa($id)
    {
        $query=$this->db->query("SELECT *,
		jenjang_pendidikan_ayah.nama_jenjang_pendidikan as nama_jenjang_pendidikan_ayah,
		jenjang_pendidikan_ayah.id_jenjang_pendidikan as id_jenjang_pendidikan_ayah,
		jenjang_pendidikan_ibu.nama_jenjang_pendidikan as nama_jenjang_pendidikan_ibu,
		jenjang_pendidikan_ibu.id_jenjang_pendidikan as id_jenjang_pendidikan_ibu,
		jenjang_pendidikan_wali.nama_jenjang_pendidikan as nama_jenjang_pendidikan_wali,
		jenjang_pendidikan_wali.id_jenjang_pendidikan as id_jenjang_pendidikan_wali,
		ayah.tahun_lahir as tahun_lahir_ayah, ayah.penghasilan as penghasilan_ayah ,
		ayah.pekerjaan as pekerjaan_ayah, 
		ibu.tahun_lahir as tahun_lahir_ibu,
		ibu.penghasilan as penghasilan_ibu ,
		ibu.pekerjaan as pekerjaan_ibu,
		wali.tahun_lahir as tahun_lahir_wali,
		wali.penghasilan as penghasilan_wali ,
		wali.pekerjaan as pekerjaan_wali
		FROM `siswa` INNER JOIN agama on agama.id_agama=siswa.id_agama inner JOIN ayah on ayah.nisn=siswa.nisn INNER JOIN ibu ON ibu.nisn=siswa.nisn INNER JOIN wali on wali.nisn=siswa.nisn INNER JOIN jenjang_pendidikan as jenjang_pendidikan_ayah on ayah.id_jenjang=jenjang_pendidikan_ayah.id_jenjang_pendidikan INNER JOIN jenjang_pendidikan as jenjang_pendidikan_ibu on ibu.id_jenjang=jenjang_pendidikan_ibu.id_jenjang_pendidikan RIGHT JOIN jenjang_pendidikan as jenjang_pendidikan_wali on wali.id_jenjang=jenjang_pendidikan_wali.id_jenjang_pendidikan where siswa.nisn='$id'");
        return $query->result();
    }
	function detail_siswa_semua()
    {
        $query=$this->db->query("SELECT *,
		jenjang_pendidikan_ayah.nama_jenjang_pendidikan as nama_jenjang_pendidikan_ayah, jenjang_pendidikan_ibu.nama_jenjang_pendidikan as nama_jenjang_pendidikan_ibu, jenjang_pendidikan_wali.nama_jenjang_pendidikan as nama_jenjang_pendidikan_wali,
		ayah.tahun_lahir as tahun_lahir_ayah, ayah.penghasilan as penghasilan_ayah , ayah.pekerjaan as pekerjaan_ayah, 
		ibu.tahun_lahir as tahun_lahir_ibu, ibu.penghasilan as penghasilan_ibu , ibu.pekerjaan as pekerjaan_ibu,
		wali.tahun_lahir as tahun_lahir_wali, wali.penghasilan as penghasilan_wali , wali.pekerjaan as pekerjaan_wali
		FROM `siswa` INNER JOIN agama on agama.id_agama=siswa.id_agama inner JOIN ayah on ayah.nisn=siswa.nisn INNER JOIN ibu ON ibu.nisn=siswa.nisn INNER JOIN wali on wali.nisn=siswa.nisn INNER JOIN jenjang_pendidikan as jenjang_pendidikan_ayah on ayah.id_jenjang=jenjang_pendidikan_ayah.id_jenjang_pendidikan INNER JOIN jenjang_pendidikan as jenjang_pendidikan_ibu on ibu.id_jenjang=jenjang_pendidikan_ibu.id_jenjang_pendidikan inner JOIN jenjang_pendidikan as jenjang_pendidikan_wali on wali.id_jenjang=jenjang_pendidikan_wali.id_jenjang_pendidikan");
        return $query->result();
    }
	function data_perkelas($kelas,$tahun_ajaran)
    {
        $query=$this->db->query("SELECT * FROM siswa_kelas RIGHT join kelas on kelas.id_kelas=siswa_kelas.id_kelas right join guru on guru.nip=siswa_kelas.nip inner join siswa on siswa_kelas.nisn=siswa.nisn where siswa_kelas.id_kelas='$kelas' and siswa_kelas.tahun_ajaran='$tahun_ajaran'");
        return $query->result();
    }
	function header_absen($kelas,$tahun_ajaran)
    {
        $query=$this->db->query("SELECT DISTINCT  kelas.nama_kelas, guru.gelar_depan, guru.nama_guru, guru.gelar_belakang FROM guru INNER JOIN siswa_kelas on guru.nip=siswa_kelas.nip INNER JOIN kelas on kelas.id_kelas=siswa_kelas.id_kelas WHERE siswa_kelas.id_kelas='$kelas' and siswa_kelas.tahun_ajaran='$tahun_ajaran' ");
        return $query->result();
    }
	
}