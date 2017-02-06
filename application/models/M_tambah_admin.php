<?php
    class M_tambah_admin extends CI_Model{    
        function process(){
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $password=md5($password);
                    $nama_lengkap = $this->input->post('nama_lengkap');
                                     
                    $data = array(
                        'username'=>$username,
                        'password'=>$password,
                        'nama_lengkap'=>$nama_lengkap
                       
          
                    );
                    $cek=$this->db->insert('admin',$data);
						
					   return $cek;
						
										
            }//end of simpan        
        }
?>