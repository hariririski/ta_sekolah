<?php
class M_hapus_kabupaten extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE  kabupaten.*, kecamatan.*, desa.* from kabupaten LEFT JOIN kecamatan on kecamatan.id_kabupaten=kabupaten.id_kabupaten LEFT JOIN desa on desa.id_kecamatan=kecamatan.id_kecamatan where kabupaten.id_kabupaten='$id'");
        return $query;
    }
	
}