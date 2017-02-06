<?php
    class M_ubah_password extends CI_Model{    
        function process($username){
                    $password_lama = $this->input->post('password_lama');
                    $password_baru= $this->input->post('password_baru');
                    $ulangi_password_baru = $this->input->post('ulangi_password_baru');
                    if($password_baru== $ulangi_password_baru) {   
					$password_baru=md5($password_baru);
                    $data = array(
                        'password'=>$password_baru
                       
          
                    );
                   
					$this->db->where('username',$username);
					$cek=$this->db->update('admin',$data); 	
					   return $cek;
						
					}else{
						 return $cek=false;
						
					}					
            }//end of simpan        
        }
?>