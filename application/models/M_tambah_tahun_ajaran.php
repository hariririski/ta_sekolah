<?php
    class M_tambah_tahun_ajaran extends CI_Model{    
        function process(){
                    $tahun_ajaran = $this->input->post('tahun_ajaran');
                                     
                    $data = array(
                        'tahun_ajaran'=>$tahun_ajaran
                       
          
                    );
                    $cek=$this->db->insert('tahun_ajaran',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>