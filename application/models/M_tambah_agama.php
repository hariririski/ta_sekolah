<?php
    class M_tambah_agama extends CI_Model{    
        function process(){
                    $nama_agama = $this->input->post('agama');
                                     
                    $data = array(
                        'nama_agama'=>$nama_agama
                       
          
                    );
                    $cek=$this->db->insert('agama',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>