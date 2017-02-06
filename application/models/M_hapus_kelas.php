<?php
    class M_hapus_kelas extends CI_Model{    
        function delete($id){
					$this->db->where('id_kelas', $id);
					$cek=$this->db->delete('kelas');
                    return $cek;
            }//end of simpan        
        }
?>