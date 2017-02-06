<?php
class M_hapus_data_siswa_kelas extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE   from siswa_kelas where id_kelas='$id'");
        return $query;
    }
	
}