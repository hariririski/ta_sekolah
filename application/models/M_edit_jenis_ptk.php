<?php
    class M_edit_jenis_ptk extends CI_Model{    
        function update($id){
                   $jenis_ptk = $this->input->post('jenis_ptk');
                
                  
                    $data = array(
                        'nama_jenis_ptk'=>$jenis_ptk
                        
                       
          
                    );
                   
					$this->db->where('id_jenis_ptk',$id);
					$cek=$this->db->update('jenis_ptk',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>