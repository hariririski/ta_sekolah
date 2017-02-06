<?php
class M_hapus_siswa_kelas extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE   from siswa_kelas where id_siswa_kelas='$id'");
        return $query;
    }
	
}