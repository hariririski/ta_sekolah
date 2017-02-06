<?php
    class M_tambah_jenis_ptk extends CI_Model{    
        function process(){
                    $nama_jenis_ptk = $this->input->post('jenis_ptk');
                                      
                    $data = array(
                        'nama_jenis_ptk'=>$nama_jenis_ptk
                       
          
                    );
                    $cek=$this->db->insert('jenis_ptk',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>