<?php
    class M_tambah_kecamatan extends CI_Model{    
        function process(){
                    $kecamatan= $this->input->post('nama_kecamatan');
                    $kabupaten = $this->input->post('kabupaten');
                                      
                    $data = array(
                        'id_kabupaten'=>$kabupaten,
                        'nama_kecamatan'=>$kecamatan
                       
          
                    );
                    $cek=$this->db->insert('kecamatan',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>