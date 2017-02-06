<?php
    class M_tambah_siswa extends CI_Model{    
        function process(){
                    $nik_siswa= $this->input->post('nik');
                    $nisn= $this->input->post('nisn');
                    $nipd= $this->input->post('nipd');
                    $nama_siswa= $this->input->post('nama_siswa');
					$jenis_kelamin= $this->input->post('jenis_kelamin');
					$id_agama= $this->input->post('agama');
					$tanggal_lahir= $this->input->post('tanggal_lahir');
					$tempat_lahir= $this->input->post('tempat_lahir');
					$no_seri_ijazah= $this->input->post('no_seri_ijazah');
					$skhun= $this->input->post('skhun');
					$no_registrasi_akte_kelahiran= $this->input->post('no_registrasi_akte_kelahiran');
					$jenis_tinggal= $this->input->post('jenis_tinggal');
					$jumlah_saudara_kandung= $this->input->post('jumlah_saudara_kandung');
					$no_hp= $this->input->post('no_hp_siswa');
					$email= $this->input->post('email_siswa');
					
					$kabupaten= $this->input->post('kabupaten');
					$kecamatan= $this->input->post('kecamatan');
					$desa= $this->input->post('desa');
					$jalan= $this->input->post('jalan');
					$kode_pos= $this->input->post('kode_pos');
					$alat_transportasi= $this->input->post('alat_transportasi');
					$layak_pip= $this->input->post('layak_pip');
					$alasan_layak_pip= $this->input->post('alasan_layak_pip');
					$penerima_kip= $this->input->post('penerima_kip');
					$no_kip= $this->input->post('no_kip');
					$nama_di_kip= $this->input->post('nama_di_kip');
					$penerima_kps= $this->input->post('penerima_kps');
					$no_kps= $this->input->post('no_kps');
					$no_kks= $this->input->post('no_kks');
					$no_pun= $this->input->post('no_pum');
					$bank= $this->input->post('bank');
					$rombel_saat_ini= $this->input->post('rombel_saat_ini');
					$rekening_atas_nama= $this->input->post('rekening_atas_nama');
					$no_rekening_bank= $this->input->post('no_rekening_bank');
					
					$nama_ayah= $this->input->post('nama_ayah');
					$tahun_lahir_ayah= $this->input->post('tahun_lahir_ayah');
					$pekerjaan_ayah= $this->input->post('pekerjaan_ayah');
					$penghasilan_ayah= $this->input->post('penghasilan_ayah');
					$jenjang_pendidikan_ayah= $this->input->post('jenjang_pendidikan_ayah');
                   
					$nama_ibu= $this->input->post('nama_lengkap_ibu');
					$tahun_lahir_ibu= $this->input->post('tahun_lahir_ibu');
					$pekerjaan_ibu= $this->input->post('pekerjaan_ibu');
					$penghasilan_ibu= $this->input->post('penghasilan_ibu');
					$jenjang_pendidikan_ibu= $this->input->post('jenjang_pendidikan_ibu');
          
					$nama_wali= $this->input->post('nama_lengkap_wali');
					$tahun_lahir_wali= $this->input->post('tahun_lahir_wali');
					
					$penghasilan_wali= $this->input->post('penghasilan_wali');
					$jenjang_pendidikan_wali= $this->input->post('jenjang_pendidikan_wali');
                                     
                    $siswa = array(
                        'nik_siswa'=>$nik_siswa,
                        'nisn'=>$nisn,
                        'jenis_kelamin'=>$jenis_kelamin,
                        'tanggal_lahir'=>$tanggal_lahir,
                        'nama_siswa'=>$nama_siswa,
                        'id_agama'=>$id_agama,
                        'nipd'=>$nipd,
                        'tempat_lahir'=>$tempat_lahir,
                        'no_kks'=>$no_kks,
                        'no_registrasi_akte_kelahiran'=>$no_registrasi_akte_kelahiran,
                        'no_seri_ijazah'=>$no_seri_ijazah,
                        'no_kip'=>$no_kip,
                        'jalan'=>$jalan,
                        'desa'=>$desa,
                        'kecamatan'=>$kecamatan,
                        'kabupaten'=>$kabupaten,
                        
                        'layak_pip'=>$layak_pip,
                        'no_hp'=>$no_hp,
                        'penerima_kip'=>$penerima_kip,
                        'skhun'=>$skhun,
                        'rekening_atas_nama'=>$rekening_atas_nama,
                        'nama_di_kip'=>$nama_di_kip,
                        'no_pun'=>$no_pun,
                        'rombel_saat_ini'=>$rombel_saat_ini,
                        'penerima_kps'=>$penerima_kps,
                        'alasan_layak_pip'=>$alasan_layak_pip,
                        'no_kps'=>$no_kps,
                        'kode_pos'=>$kode_pos,
                        'bank'=>$bank,
                        'email'=>$email,
                        'alat_transportasi'=>$alat_transportasi,
                        'no_rekening_bank'=>$no_rekening_bank,
                        'jenis_tinggal'=>$jenis_tinggal,
                        'jumlah_saudara_kandung'=>$jumlah_saudara_kandung
                        
                        
                    );
					
					$ayah = array(
                        'id_ayah'=>$nisn,
                        'tahun_lahir'=>$tahun_lahir_ayah,
                        'penghasilan'=>$penghasilan_ayah,
                        'pekerjaan'=>$pekerjaan_ayah,
                        'nama_ayah'=>$nama_ayah,
                        'nisn'=>$nisn,
                        'id_jenjang'=>$jenjang_pendidikan_ayah
                        
                    );
					
					$ibu = array(
                        'id_ibu'=>$nisn,
                        'tahun_lahir'=>$tahun_lahir_ibu,
                        'penghasilan'=>$penghasilan_ibu,
                        'pekerjaan'=>$pekerjaan_ibu,
                        'nama_ibu'=>$nama_ibu,
                        'nisn'=>$nisn,
                        'id_jenjang'=>$jenjang_pendidikan_ibu
                    );
					
					$wali = array(
                        'id_wali'=>$nisn,
                        'tahun_lahir'=>$tahun_lahir_wali,
                        'pekerjaan'=>$penghasilan_wali,
                        'nama_wali'=>$nama_wali,
                        'nisn'=>$nisn,
						'id_jenjang'=>$jenjang_pendidikan_wali
                        
                    );
                    $siswa=$this->db->insert('siswa',$siswa);
                    $ayah=$this->db->insert('ayah',$ayah);
                    $ibu=$this->db->insert('ibu',$ibu);
                    $wali=$this->db->insert('wali',$wali);
					if($siswa=true && $ayah==true && $ibu==true && $wali == true){	
					   return true;
						
					}else{	
						return false;
					}
            }//end of simpan        
        }
?>