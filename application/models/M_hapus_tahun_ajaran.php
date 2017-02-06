<?php
    class M_hapus_tahun_ajaran extends CI_Model{    
        function delete($id){
					$this->db->where('id_tahun_ajaran', $id);
					$cek=$this->db->delete('tahun_ajaran');
                    return $cek;
            }//end of simpan        
        }
?>