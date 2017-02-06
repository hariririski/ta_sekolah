<?php
   class M_edit_desa extends CI_Model{    
        function process($id){
                    $desa= $this->input->post('nama_desa');
                    $kecamatan = $this->input->post('kecamatan');
                                      
                    $data = array(
                        'id_kecamatan'=>$kecamatan,
                        'nama_desa'=>$desa
                       
          
                    );
					$this->db->where('id_desa',$id);
					$cek=$this->db->update('desa',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>