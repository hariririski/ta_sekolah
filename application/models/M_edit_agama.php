<?php
    class M_edit_agama extends CI_Model{    
        function update($id){
                   $agama = $this->input->post('agama');
                
                  
                    $data = array(
                        'nama_agama'=>$agama
                        
                       
          
                    );
                   
					$this->db->where('id_agama',$id);
					$cek=$this->db->update('agama',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>