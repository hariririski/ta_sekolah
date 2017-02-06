<?php
    class M_hapus_jenjang_pendidikan extends CI_Model{    
        function delete($id){
					$this->db->where('id_jenjang_pendidikan', $id);
					$cek=$this->db->delete('jenjang_pendidikan');
                    return $cek;
            }//end of simpan        
        }
?>