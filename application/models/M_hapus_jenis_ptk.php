<?php
    class M_hapus_jenis_ptk extends CI_Model{    
        function delete($id){
					$this->db->where('id_jenis_ptk', $id);
					$cek=$this->db->delete('jenis_ptk');
                    return $cek;
            }//end of simpan        
        }
?>