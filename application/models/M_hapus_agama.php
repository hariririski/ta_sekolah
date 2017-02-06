<?php
    class M_hapus_agama extends CI_Model{    
        function delete($id){
					$this->db->where('id_agama', $id);
					$cek=$this->db->delete('agama');
                    return $cek;
            }//end of simpan        
        }
?>