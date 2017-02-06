<?php
    class M_edit_jenjang_pendidikan extends CI_Model{    
        function update($id){
                   $jenjang_pendidikan= $this->input->post('jenjang_pendidikan');
                
                  
                    $data = array(
                        'nama_jenjang_pendidikan'=>$jenjang_pendidikan
                        
                       
          
                    );
                   
					$this->db->where('id_jenjang_pendidikan',$id);
					$cek=$this->db->update('jenjang_pendidikan',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>