<?php
class M_edit_wali_kelas extends CI_Model{
    function update($id,$TA)
    {
		 $nip = $this->input->post('wali_kelas');
        $query=$this->db->query("Update siswa_kelas set nip='$nip' where id_kelas='$id' and tahun_ajaran='$TA'");
        return $query;
    }
	
}