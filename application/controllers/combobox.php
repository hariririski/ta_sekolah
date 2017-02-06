<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class combobox extends CI_Controller { 
	
	
		
		public function provinsi() { 
			$this->load->helper('url'); 
			$this->load->model('M_select');
			$data['provinsi']= $this->M_select-> provinsi();
			$this->load->view('combobox',$data);
		}
		
		function kabupaten($id) {
			
			$this->load->model('M_select');
			$data=$this->M_select-> kabupaten($id);
			$data1 .=" <option >Plih Kabupaten</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_kabupaten.'">'.$data2->nama_kabupaten.'</option>';
			}	
			echo $data1;
		}
		
		function kecamatan($id) {
			
			$this->load->model('M_select');
			$data=$this->M_select-> Kecamatan($id);
			$data1 .=" <option >Plih Kecamatan</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_kecamatan.'">'.$data2->nama_kecamatan.'</option>';
			}	
			echo $data1;
		}
		
		function desa($id) {
			
			$this->load->model('M_select');
			$data=$this->M_select-> desa($id);
			$data1 .=" <option >Plih Desa</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_desa.'">'.$data2->nama_desa.'</option>';
			}	
			echo $data1;
		}
		
	  
		
		
		
   } 
?>
