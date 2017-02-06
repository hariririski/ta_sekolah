<?php
    class M_tambah_jenjang_pendidikan extends CI_Model{    
        function process(){
                    $nama_jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
                                      
                    $data = array(
                        'nama_jenjang_pendidikan'=>$nama_jenjang_pendidikan
                       
          
                    );
                    $cek=$this->db->insert('jenjang_pendidikan',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>