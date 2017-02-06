<?php
    class M_tambah_kelas extends CI_Model{    
        function process(){
                    $kelas= $this->input->post('kelas');
                    $daya_tampung = $this->input->post('daya_tampung');
          
                                     
                    $data = array(
                        'nama_kelas'=>$kelas,
                        'daya_tampung'=>$daya_tampung
                    );
                    $cek=$this->db->insert('kelas',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>