<?php
    class M_tambah_status_kepegawaian extends CI_Model{    
        function process(){
                    $nama_status_kepegawaian = $this->input->post('status_kepegawaian');
                                      
                    $data = array(
                        'nama_status_kepegawaian'=>$nama_status_kepegawaian
                       
          
                    );
                    $cek=$this->db->insert('status_kepegawaian',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>