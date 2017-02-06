<?php
    class M_edit_mata_pelajaran extends CI_Model{    
        function update($id){
                   $mata_pelajaran = $this->input->post('mata_pelajaran');
                
                  
                    $data = array(
                        'nama_mata_pelajaran'=>$mata_pelajaran
                        
                       
          
                    );
                   
					$this->db->where('id_mata_pelajaran',$id);
					$cek=$this->db->update('mata_pelajaran',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>