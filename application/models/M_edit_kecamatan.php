<?php
   class M_edit_kecamatan extends CI_Model{    
        function process($id){
                   $kabupaten = $this->input->post('nama_kabupaten');
                  
                                      
                    $kecamatan= $this->input->post('nama_kecamatan');
                    $kabupaten = $this->input->post('kabupaten');
                                      
                    $data = array(
                        'id_kabupaten'=>$kabupaten,
                        'nama_kecamatan'=>$kecamatan
                       
          
                    );
					$this->db->where('id_kecamatan',$id);
					$cek=$this->db->update('kecamatan',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>