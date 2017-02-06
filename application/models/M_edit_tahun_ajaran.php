<?php
    class M_edit_tahun_ajaran extends CI_Model{    
        function update($id){
                   $tahun_ajaran = $this->input->post('tahun_ajaran');
                  
                    $data = array(
                        'tahun_ajaran'=>$tahun_ajaran
                       
          
                    );
                   
					$this->db->where('id_tahun_ajaran',$id);
					$cek=$this->db->update('tahun_ajaran',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>