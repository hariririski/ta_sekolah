<?php
   class M_edit_kabupaten extends CI_Model{    
        function process($id){
                   $kabupaten = $this->input->post('nama_kabupaten');
                  
                                      
                    $data = array(
                        'nama_kabupaten'=>$kabupaten,
                       
                       
          
                    );
					$this->db->where('id_kabupaten',$id);
					$cek=$this->db->update('kabupaten',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>