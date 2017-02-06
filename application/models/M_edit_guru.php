<?php
   class M_edit_guru extends CI_Model{    
        function process($id){
                    $nip= $this->input->post('nip');
                    $nuptk = $this->input->post('nuptk');
                    $gelar_depan = $this->input->post('gelar_depan');
                    $nama_lengkap = $this->input->post('nama_lengkap');
                    $gelar_belakang = $this->input->post('gelar_belakang');
                    $jenis_kelamin = $this->input->post('jenis_kelamin');
                    $tanggal_lahir = $this->input->post('tanggal_lahir');
                    $tempat_lahir= $this->input->post('tempat_lahir');
                    $email= $this->input->post('email');
                    $no_hp=$this->input->post('no_hp');
                    $mata_pelajaran=$this->input->post('mata_pelajaran');
                    $jenjang_pendidikan=$this->input->post('jenjang_pendidikan');
                    $prodi=$this->input->post('prodi');
                   
                    $kabupaten=$this->input->post('kabupaten');
                    $kecamatan=$this->input->post('kecamatan');
                    $desa=$this->input->post('desa');
                    $jalan=$this->input->post('jalan');
                    $agama=$this->input->post('agama');
                    $status_kepegawaian=$this->input->post('status_kepegawaian');
                    $jenis_ptk=$this->input->post('jenis_ptk');
						
          
                                     
                    $data = array(
                        'nip'=>$nip,
                        'jenis_kelamin'=>$jenis_kelamin,
                        'prodi'=>$prodi,
                        'gelar_depan'=>$gelar_depan,
                        'nama_guru'=>$nama_lengkap,
                        'jalan'=>$jalan,
                        'desa'=>$desa,
                        'kecamatan'=>$kecamatan,
                        'kabupaten'=>$kabupaten,
                      
                        'tempat_lahir'=>$tempat_lahir,
                        'email'=>$email,
                        'no_hp'=>$no_hp,
                        'id_jenjang_pendidikan'=>$jenjang_pendidikan,
                        'tanggal_lahir'=>$tanggal_lahir,
                        'gelar_belakang'=>$gelar_belakang,
                        'nuptk'=>$nuptk,
                        'id_status_kepegawaian'=>$status_kepegawaian,
                        'id_jenis_ptk'=>$jenis_ptk,
                        'id_agama'=>$agama,
                        'id_mata_pelajaran'=>$mata_pelajaran
                    );
					$this->db->where('nip',$id);
					$cek=$this->db->update('guru',$data); 	
					   return $cek;
						
									
            }//end of simpan        
        }
?>