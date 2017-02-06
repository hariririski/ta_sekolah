<?php
    class M_hapus_mata_pelajaran extends CI_Model{    
        function delete($id){
					$this->db->where('id_mata_pelajaran', $id);
					$cek=$this->db->delete('mata_pelajaran');
                    return $cek;
            }//end of simpan        
        }
?>