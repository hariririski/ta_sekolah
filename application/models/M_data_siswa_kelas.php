<?php
class M_data_siswa_kelas extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT *, COUNT(kelas.id_kelas) as jumlah FROM siswa_kelas RIGHT join kelas on kelas.id_kelas=siswa_kelas.id_kelas right join guru on guru.nip=siswa_kelas.nip  where  siswa_kelas.tahun_ajaran='$id' GROUP by kelas.nama_kelas");
        return $query->result();
    }
}