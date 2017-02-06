<?php
    class M_tambah_kabupaten extends CI_Model{    
        function process(){
                    $kabupaten = $this->input->post('nama_kabupaten');
                  
                                      
                    $data = array(
                        'nama_kabupaten'=>$kabupaten,
                       
                       
          
                    );
                    $cek=$this->db->insert('kabupaten',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>