<?php
class M_hapus_provinsi extends CI_Model{
    function delete($id)
    {
        $query=$this->db->query("DELETE provinsi.*, kabupaten.*, kecamatan.*, desa.* from provinsi LEFT JOIN kabupaten on provinsi.id_provinsi=kabupaten.id_provinsi LEFT JOIN kecamatan on kecamatan.id_kabupaten=kabupaten.id_kabupaten LEFT JOIN desa on desa.id_kecamatan=kecamatan.id_kecamatan where provinsi.id_provinsi='$id'");
        return $query;
    }
	
}