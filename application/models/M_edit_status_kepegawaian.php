<?php
    class M_edit_status_kepegawaian extends CI_Model{    
        function update($id){
                   $status_kepegawaian = $this->input->post('status_kepegawaian');
                
                  
                    $data = array(
                        'nama_status_kepegawaian'=>$status_kepegawaian
                        
                       
          
                    );
                   
					$this->db->where('id_status_kepegawaian',$id);
					$cek=$this->db->update('status_kepegawaian',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>