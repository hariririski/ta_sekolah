<?php
    class M_tambah_siswa_kelas_per_kelas extends CI_Model{    
        function process($kelas,$tahun_ajaran,$wali){
                   
					
					
					$siswa= $this->input->post('siswa[]');
                   
					$jumlah=count($siswa);
                  
					for($i=0;$i<$jumlah;$i++){
						$data = array(
							'nisn'=>$siswa[$i],
							'id_kelas'=>$kelas,
							'tahun_ajaran'=>$tahun_ajaran,
							'nip'=>$wali
							
							
						);
						
						$cek=$this->db->insert('siswa_kelas',$data);
					}
					
                 return $cek; 
						
										
            }     
        }
?>