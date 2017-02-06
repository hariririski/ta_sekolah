<?php
    class M_edit_kelas extends CI_Model{    
        function update($id){
                   $kelas = $this->input->post('kelas');
                   $daya_tampung = $this->input->post('daya_tampung');
                  
                    $data = array(
                        'nama_kelas'=>$kelas,
                        'daya_tampung'=>$daya_tampung
                       
          
                    );
                   
					$this->db->where('id_kelas',$id);
					$cek=$this->db->update('kelas',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>