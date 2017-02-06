<?php
    class M_tambah_mata_pelajaran extends CI_Model{    
        function process(){
                    $nama_mata_pelajaran = $this->input->post('mata_pelajaran');
                                     
                    $data = array(
                        'nama_mata_pelajaran'=>$nama_mata_pelajaran
                       
          
                    );
                    $cek=$this->db->insert('mata_pelajaran',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>