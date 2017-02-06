<?php
    class M_hapus_siswa extends CI_Model{    
        function delete($id){
						
					$this->db->where('nisn', $id);
					$ayah=$this->db->delete('ayah');
					$this->db->where('nisn', $id);
					$ibu=$this->db->delete('ibu');
					$this->db->where('nisn', $id);
					$wali=$this->db->delete('wali');
					$this->db->where('nisn', $id);
					$siswa=$this->db->delete('siswa');
					if($ayah && $ibu && $wali && $siswa ){
						 return $cek=true;
					}else{
						 return $cek=false;
					}
                    return $cek;
            }//end of simpan        
        }
?>