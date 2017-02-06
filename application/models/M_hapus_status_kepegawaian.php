<?php
    class M_hapus_status_kepegawaian extends CI_Model{    
        function delete($id){
					$this->db->where('id_status_kepegawaian', $id);
					$cek=$this->db->delete('status_kepegawaian');
                    return $cek;
            }//end of simpan        
        }
?>