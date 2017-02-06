<?php
    class M_tambah_desa extends CI_Model{    
        function process(){
                    $desa= $this->input->post('nama_desa');
                    $kecamatan = $this->input->post('kecamatan');
                                      
                    $data = array(
                        'id_kecamatan'=>$kecamatan,
                        'nama_desa'=>$desa
                       
          
                    );
                    $cek=$this->db->insert('desa',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>