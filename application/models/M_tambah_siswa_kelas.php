<?php
    class M_tambah_siswa_kelas extends CI_Model{    
        function process($tahun_ajaran){
                   
					
					$kelas= $this->input->post('kelas');
					$wali_kelas= $this->input->post('wali_kelas');
					$siswa= $this->input->post('siswa[]');
                    $tahun_ajaran;
					$jumlah=count($siswa);
                  
					for($i=0;$i<$jumlah;$i++){
						$data = array(
							'nisn'=>$siswa[$i],
							'id_kelas'=>$kelas,
							'tahun_ajaran'=>$tahun_ajaran,
							'nip'=>$wali_kelas
							
							
						);
						
						$cek=$this->db->insert('siswa_kelas',$data);
					}
					
                 return $cek; 
						
										
            }     
        }
?>