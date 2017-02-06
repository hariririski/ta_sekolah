<?php
    class M_hapus_guru extends CI_Model{    
        function delete($id){
					$this->db->where('nip', $id);
					$cek=$this->db->delete('guru');
                    return $cek;
            }//end of simpan        
        }
?>