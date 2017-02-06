<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class Redirect_controller extends CI_Controller { 
	
		public function index() { 
         $this->load->helper('url'); 
         $this->login();
		}
		
		public function grafik() {
			$this->load->helper('url');

			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_status_kepegawaian');
			 $data['data_status_kepegawaian'] = $this->M_data_status_kepegawaian-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_grafik');
			 $nilai='2010/2011';
			 //$data['grafik'] = $this->M_grafik->report();
			 
			 $this->load->view('grafik', $data);
			}
		
		}
		
		
		public function hasil_grafik($id,$id2) {
			$this->load->helper('url');

			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$this->load->model('M_grafik');
			  $data['grafik'] = $this->M_grafik->report($id,$id2);
			   $this->load->view('hasil_grafik', $data);
			}
		
		}
		
		
		
		function kabupaten($id) {
			$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> kabupaten($id);
			$data1 .=" <option >Pilih Kabupaten</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->nama_kabupaten.'">'.$data2->nama_kabupaten.'</option>';
			}	
			echo $data1;
		}
		
		function kecamatan($id) {
			$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> kecamatan($id);
		
			$data1 .=" <option >Pilih Kecamatan</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->nama_kecamatan.'">'.$data2->nama_kecamatan.'</option>';
			}	
			echo $data1;
		}
		
		function desa($id) {
			$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> desa($id);
			$data1 .=" <option >Pilih Desa</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->nama_desa.'">'.$data2->nama_desa.'</option>';
			}	
			echo $data1;
		}
		
		function kabupaten2($id) {
			//$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> kabupaten2($id);
			$data1 .=" <option >Pilih Kabupaten</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_kabupaten.'">'.$data2->nama_kabupaten.'</option>';
			}	
			echo $data1;
		}
		
		function kecamatan2($id) {
			$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> kecamatan2($id);
		
			$data1 .=" <option >Pilih Kecamatan</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_kecamatan.'">'.$data2->nama_kecamatan.'</option>';
			}	
			echo $data1;
		}
		
		function desa2($id) {
			$id=rawurldecode($id);
			$this->load->model('M_select');
			$data=$this->M_select-> desa2($id);
			$data1 .=" <option >Pilih Desa</option>";
			foreach($data as $data2){
			$data1.='<option value="'.$data2->id_desa.'">'.$data2->nama_desa.'</option>';
			}	
			echo $data1;
		}
		
		
	  
		public function login() {
		 $this->load->helper('url'); 
        
		 $this->load->view('login');
		
		}
		public function home() {
		 $this->load->helper('url'); 
        
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_jumlah');
			 $data['jumlah_kelas'] = $this->M_jumlah-> jumlah_kelas();
			 $data['jumlah_siswa'] = $this->M_jumlah-> jumlah_siswa();
			 $data['jumlah_guru'] = $this->M_jumlah-> jumlah_guru();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('home',$data);
			}
		}
		
		
		
		public function status_kepegawaian() {
			$this->load->helper('url');

			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_status_kepegawaian');
			 $data['data_status_kepegawaian'] = $this->M_data_status_kepegawaian-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_status_kepegawaian', $data);
			}
		
		}
		
		public function jenis_ptk() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_jenis_ptk');
			 $data['data_jenis_ptk'] = $this->M_data_jenis_ptk-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_jenis_ptk', $data);
			}
		}
		
		public function mata_pelajaran() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_mata_pelajaran');
			 $data['data_mata_pelajaran'] = $this->M_data_mata_pelajaran-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_mata_pelajaran', $data);
			}
		
		}
		
		public function agama() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_agama');
			 $data['data_agama'] = $this->M_data_agama-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_agama', $data);
			}
		}
		
		public function tahun_ajaran() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_tahun_ajaran', $data);
			}
		}
		
		public function jenjang_pendidikan() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_jenjang_pendidikan');
			 $data['data_jenjang_pendidikan'] = $this->M_data_jenjang_pendidikan-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_jenjang_pendidikan', $data);
			}
		}
		
		public function alamat() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_select');
			
			 $this->load->model('M_data_alamat');
			 $data['alamat']= $this->M_data_alamat-> semua();
			 
			 $data['kabupaten']= $this->M_data_alamat-> kabupaten();
			 $data['kecamatan']= $this->M_data_alamat-> kecamatan();
			 $data['desa']= $this->M_data_alamat-> desa();
			 $this->load->view('data_alamat', $data);
			}
		}
		
		public function admin() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_admin');
			 $data['data_admin'] = $this->M_data_admin-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_admin', $data);
			}
		}
		
		
		public function kelas() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_kelas');
			 $data['data_kelas'] = $this->M_data_kelas-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_kelas', $data);
			}
		}
		
		public function siswa_kelas() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_siswa_kelas');
			 $id=$_GET['id'];
			 $data['data_kelas'] = $this->M_data_siswa_kelas-> get_user_all($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_siswa_kelas', $data);
			}
		}
		
		public function detail_siswa_kelas() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 
			 $kelas=$_GET['id'];
			 $tahun_ajaran=$_GET['TA'];
			
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_data_siswa');
			 $data['data_siswa'] = $this->M_data_siswa-> data_perkelas($kelas,$tahun_ajaran);
			 $this->load->view('detail_siswa_kelas', $data);
			}
		}
		
		public function guru() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $this->load->model('M_data_guru');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $data['data_guru'] = $this->M_data_guru-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_guru',$data);
			}
		
		}
		
		public function detail_guru() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $this->load->model('M_data_guru');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $data['detail_guru'] = $this->M_data_guru-> detail_guru($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('detail_guru',$data);
			}
		
		}
		
		public function siswa() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $this->load->model('M_data_siswa');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $data['data_siswa'] = $this->M_data_siswa-> get_user_all();
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('data_siswa',$data);
			}
		
		}
		public function detail_siswa() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $this->load->model('M_data_siswa');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $data['detail_siswa'] = $this->M_data_siswa-> detail_siswa($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('detail_siswa',$data);
			}
		
		}
		
		public function tambah_siswa() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$this->load->model('M_nama_admin');
				$username=$this->session->userdata['admin'];
				$data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
				$this->load->model('M_data_tahun_ajaran');
				$data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
				$this->load->model('M_select');
				$data['agama'] = $this->M_select-> agama();
				$data['kabupaten'] = $this->M_select-> kabupaten();
				$data['jenjang_pendidikan'] = $this->M_select-> jenjang_pendidikan();
				
				$this->load->view('tambah_siswa',$data);
			}
		}
		public function tambah_siswa_kelas() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_nama_admin');
				$username=$this->session->userdata['admin'];
				$data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
				$this->load->model('M_data_tahun_ajaran');
				$this->load->model('M_data_kelas');
				$this->load->model('M_data_siswa_tidak_ada_kelas');
				$this->load->model('M_data_guru');
				$data['data_siswa'] = $this->M_data_siswa_tidak_ada_kelas-> get_user_all($id);
				
				$data['data_kelas'] = $this->M_data_kelas-> get_user_all();
				$data['data_guru'] = $this->M_data_guru-> get_user_all();
				$data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
				$this->load->view('tambah_siswa_kelas',$data);
			}
		}
		
		public function tambah_siswa_kelas_per_kelas() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_nama_admin');
				$username=$this->session->userdata['admin'];
				$data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
				$this->load->model('M_data_tahun_ajaran');
				$this->load->model('M_data_kelas');
				$this->load->model('M_data_siswa_tidak_ada_kelas');
				$this->load->model('M_data_guru');
				$data['data_siswa'] = $this->M_data_siswa_tidak_ada_kelas-> get_user_all($id);
				
				$data['data_kelas'] = $this->M_data_kelas-> get_user_all();
				$data['data_guru'] = $this->M_data_guru-> get_user_all();
				$data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
				$this->load->view('tambah_siswa_kelas_per_kelas',$data);
			}
		}
		
		public function tambah_guru() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$this->load->model('M_nama_admin');
				$username=$this->session->userdata['admin'];
				$data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
				$this->load->model('M_data_tahun_ajaran');
				$data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
				$this->load->model('M_select');
				$data['data_mata_pelajaran'] = $this->M_select-> mata_pelajaran();
				$data['data_jenjang_pendidikan'] = $this->M_select-> jenjang_pendidikan();
				$data['data_agama'] = $this->M_select-> agama();
				$data['data_status_kepegawaian'] = $this->M_select-> status_kepegawaian();
				$data['data_jenis_ptk'] = $this->M_select-> jenis_ptk();
				$data['kabupaten'] = $this->M_select-> kabupaten();
				$this->load->view('tambah_guru',$data);
			}
		}
		
		public function ubah_password() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('ubah_password', $data);
			}
		}
		
		
		
//halaman Edit

		public function edit_alamat() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_select');
			 $this->load->model('M_data_alamat');
			 $data['alamat']= $this->M_data_alamat-> semua();
			 $data['kabupaten']= $this->M_data_alamat-> kabupaten();
			 $data['kecamatan']= $this->M_data_alamat-> kecamatan();
			 $data['desa']= $this->M_data_alamat-> desa();
			 
			 $id=$_GET['id'];
			 $id_kabupaten=$_GET['id_kabupaten'];
			 $id_kecamatan=$_GET['id_kecamatan'];
			 $id_desa=$_GET['id_desa'];
			 $this->load->model('M_edit_alamat');
			 if($id_kabupaten!=0&&$id_desa==0){
				 $data['edit']= $this->M_edit_alamat-> kabupaten($id_kabupaten);
				 
			 }else if ($id_kecamatan!=0){
				 $data['edit']= $this->M_edit_alamat-> kecamatan($id_kecamatan);
				 
			 }else if ($id_desa!=0){
				 $this->load->model('M_select');
				 $data['kecamatan']= $this->M_select-> kecamatan2($id_kabupaten);
				 $data['edit']= $this->M_edit_alamat-> desa($id_desa);
				 
			 }
			 
			 
			 $this->load->view('edit_alamat', $data);
			}
		}

		public function edit_tahun_ajaran() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $data['edit_tahun_ajaran'] = $this->M_data_tahun_ajaran-> tahun_ajaran($id);
			 $this->load->view('edit_tahun_ajaran', $data);
			}
		}
		
		public function edit_kelas() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			  $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_kelas');
			 $data['data_kelas'] = $this->M_data_kelas-> get_user_all();
			 $data['edit_kelas'] = $this->M_data_kelas-> edit_kelas($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_kelas', $data);
			}
		}
		
		public function edit_status_kepegawaian() {
			$this->load->helper('url');

			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_status_kepegawaian');
			 $data['data_status_kepegawaian'] = $this->M_data_status_kepegawaian-> get_user_all();
			 $data['edit_status_kepegawaian'] = $this->M_data_status_kepegawaian->edit_status_kepegawaian($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_status_kepegawaian', $data);
			}
		
		}
		public function edit_jenis_ptk() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_jenis_ptk');
			 $data['data_jenis_ptk'] = $this->M_data_jenis_ptk-> get_user_all();
			 $data['edit_jenis_ptk'] = $this->M_data_jenis_ptk-> edit_jenis_ptk($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_jenis_ptk', $data);
			}
		}
		
		public function edit_mata_pelajaran() {
			$this->load->helper('url'); 
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_mata_pelajaran');
			 $data['data_mata_pelajaran'] = $this->M_data_mata_pelajaran-> get_user_all();
			 $data['edit_mata_pelajaran'] = $this->M_data_mata_pelajaran-> edit_mata_pelajaran($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_mata_pelajaran', $data);
			}
		
		}
		
		public function edit_agama() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_agama');
			 $data['data_agama'] = $this->M_data_agama-> get_user_all();
			 $data['edit_agama'] = $this->M_data_agama-> edit_agama($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_agama', $data);
			}
		}
		
		public function edit_jenjang_pendidikan() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_jenjang_pendidikan');
			 $data['data_jenjang_pendidikan'] = $this->M_data_jenjang_pendidikan-> get_user_all();
			 $data['edit_jenjang_pendidikan'] = $this->M_data_jenjang_pendidikan->edit_jenjang_pendidikan($id);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->view('edit_jenjang_pendidikan', $data);
			}
		}
		
		public function edit_guru() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_data_guru');
			 $data['detail_guru'] = $this->M_data_guru-> detail_guru($id);
			 $this->load->model('M_select');
			 $data['data_mata_pelajaran'] = $this->M_select-> mata_pelajaran();
			 $data['data_jenjang_pendidikan'] = $this->M_select-> jenjang_pendidikan();
			 $data['data_agama'] = $this->M_select-> agama();
			 $data['data_status_kepegawaian'] = $this->M_select-> status_kepegawaian();
			 $data['data_jenis_ptk'] = $this->M_select-> jenis_ptk();
			
			 $kabupaten;
			 $kecamatan;
			 
			 foreach($data['detail_guru'] as $edit){
			
				 $kabupaten=$edit->kabupaten;
				 $kecamatan=$edit->kecamatan;
			 }
			 $data['kabupaten']= $this->M_select-> kabupaten();
			 $data['kecamatan']= $this->M_select-> kecamatan($kabupaten);
			 $data['desa']= $this->M_select->desa($kecamatan);
			 //print_r($data['desa']);
			 
			 $this->load->view('edit_guru', $data);
			}
		}
		
		public function edit_siswa() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $id=$_GET['id'];
			  $this->load->model('M_select');
			 $data['agama'] = $this->M_select-> agama();
			 $data['jenjang_pendidikan'] = $this->M_select-> jenjang_pendidikan();
			
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_data_siswa');
			 $data['detail_siswa'] = $this->M_data_siswa-> detail_siswa($id);
			 $this->load->model('M_select');
			 $data['data_agama'] = $this->M_select-> agama();
			 $data['jenjang_pendidikan'] = $this->M_select-> jenjang_pendidikan();
			
			 $kabupaten;
			 $kecamatan;
			 
			 foreach($data['detail_siswa'] as $edit){
				
				 $kabupaten=$edit->kabupaten;
				 $kecamatan=$edit->kecamatan;
			 }
			 $data['kabupaten']= $this->M_select-> kabupaten();
			 $data['kecamatan']= $this->M_select-> kecamatan($kabupaten);
			 $data['desa']= $this->M_select->desa($kecamatan);
			 $this->load->view('edit_siswa', $data);
			}
		}
		public function edit_wali_kelas() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			 $kelas=$_GET['id'];
			 $tahun_ajaran=$_GET['TA'];
		
			 $this->load->model('M_nama_admin');
			 $username=$this->session->userdata['admin'];
			 $data['nama_admin'] = $this->M_nama_admin-> get_user_all($username);
			 $this->load->model('M_data_tahun_ajaran');
			 $data['data_tahun_ajaran'] = $this->M_data_tahun_ajaran-> get_user_all();
			 $this->load->model('M_data_siswa');
			 $this->load->model('M_data_guru');
			 $data['data_siswa'] = $this->M_data_siswa-> data_perkelas($kelas,$tahun_ajaran);
			 $data['data_guru'] = $this->M_data_guru-> get_user_all();
			 
			 $this->load->view('edit_wali_kelas', $data);
			}
		}
//proses edit
		public function proses_edit_tahun_ajaran() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_tahun_ajaran');        
				$cek=$this->M_edit_tahun_ajaran->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('tahun_ajaran');
				}else{
					$this->edit_gagal();
					redirect('edit_tahun_ajaran?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_kelas() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_kelas');        
				$cek=$this->M_edit_kelas->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('kelas');
				}else{
					$this->edit_gagal();
					redirect('edit_kelas?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_status_kepegawaian() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_status_kepegawaian');        
				$cek=$this->M_edit_status_kepegawaian->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('status_kepegawaian');
				}else{
					$this->edit_gagal();
					redirect('edit_status_kepegawaian?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_jenis_ptk() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_jenis_ptk');        
				$cek=$this->M_edit_jenis_ptk->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('jenis_ptk');
				}else{
					$this->edit_gagal();
					redirect('edit_jenis_ptk?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_agama() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_agama');        
				$cek=$this->M_edit_agama->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('agama');
				}else{
					$this->edit_gagal();
					redirect('edit_agama?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_mata_pelajaran() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_mata_pelajaran');        
				$cek=$this->M_edit_mata_pelajaran->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('mata_pelajaran');
				}else{
					$this->edit_gagal();
					redirect('edit_mata_pelajaran?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_jenjang_pendidikan() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$this->load->model('M_edit_jenjang_pendidikan');        
				$cek=$this->M_edit_jenjang_pendidikan->update($id);
				if($cek){
					$this->edit_berhasil();
					redirect('jenjang_pendidikan');
				}else{
					$this->edit_gagal();
					redirect('edit_jenjang_pendidikan?id='.$id.'');
				}
			}
		}
		
		public function proses_edit_wali_kelas() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$id=$_GET['id'];
				$TA=$_GET['TA'];
				$this->load->model('M_edit_wali_kelas');        
				$cek=$this->M_edit_wali_kelas->update($id,$TA);
				if($cek){
					$this->edit_berhasil();
					redirect("detail_siswa_kelas?id=$id&&TA=$TA");
				}else{
					$this->edit_gagal();
					redirect("edit_wali_kelas?id=$id&&TA=$TA");
				}
			}
		}
		
		public function proses_edit_kabupaten($id) {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			
				
				$this->load->model('M_edit_kabupaten');        
				$cek=$this->M_edit_kabupaten->process($id);
				if($cek){
					$this->edit_berhasil();
					redirect("alamat?id=3");
				}else{
					$this->edit_gagal();
					redirect("alamat?id=3");
				}
			}
		}
		public function proses_edit_kecamatan($id) {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			
				
				$this->load->model('M_edit_kecamatan');        
				$cek=$this->M_edit_kecamatan->process($id);
				if($cek){
					$this->edit_berhasil();
					redirect("alamat?id=4");
				}else{
					$this->edit_gagal();
					redirect("alamat?id=4");
				}
			}
		}
		public function proses_edit_desa($id) {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			
				
				$this->load->model('M_edit_desa');        
				$cek=$this->M_edit_desa->process($id);
				if($cek){
					$this->edit_berhasil();
					redirect("alamat?id=5");
				}else{
					$this->edit_gagal();
					redirect("alamat?id=5");
				}
			}
		}
		
		public function proses_edit_guru($id) {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			
				
				$this->load->model('M_edit_guru');        
				$cek=$this->M_edit_guru->process($id);
				if($cek){
					$this->edit_berhasil();
					redirect("detail_guru?id=$id");
				}else{
					$this->edit_gagal();
					redirect("edit_guru?id=$id");
				}
			}
		}
		public function proses_edit_siswa($id) {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
			
				
				$this->load->model('M_edit_siswa');        
				$cek=$this->M_edit_siswa->process($id);
				if($cek){
					$this->edit_berhasil();
					redirect("detail_siswa?id=$id");
				}else{
					$this->edit_gagal();
					redirect("edit_siswa?id=$id");
				}
			}
		}


		public function proses_ubah_password() {
			$this->load->helper('url');
			$this->load->model('M_ubah_password');
			$username=$this->session->userdata['admin'];
			$cek=$this->M_ubah_password->process($username);
			if($cek){
				$this->tambah_berhasil();
				redirect('logout');
			}else{
				$this->tambah_gagal();
				redirect('ubah_password');
			}
		
		}




// proses tambah		
		public function proses_tambah_status_kepegawaian() {
			$this->load->helper('url');
			$this->load->model('M_tambah_status_kepegawaian');
			$cek=$this->M_tambah_status_kepegawaian->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('status_kepegawaian');
			}else{
				$this->tambah_gagal();
				redirect('status_kepegawaian');
			}
		
		}
		
		public function proses_tambah_agama() {
			$this->load->helper('url');
			$this->load->model('M_tambah_agama');
			$cek=$this->M_tambah_agama->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('agama');
			}else{
				$this->tambah_gagal();
				redirect('agama');
			}
		
		}
		
		public function proses_tambah_tahun_ajaran() {
			$this->load->helper('url');
			$this->load->model('M_tambah_tahun_ajaran');
			$cek=$this->M_tambah_tahun_ajaran->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tahun_ajaran');
			}else{
				$this->tambah_gagal();
				redirect('tahun_ajaran');
			}
		
		}
		
		public function proses_tambah_jenis_ptk() {
			$this->load->helper('url');
			$this->load->model('M_tambah_jenis_ptk');
			$cek=$this->M_tambah_jenis_ptk->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('jenis_ptk');
			}else{
				$this->tambah_gagal();
				redirect('jenis_ptk');
			}
		
		}
		
		public function proses_tambah_mata_pelajaran() {
			$this->load->helper('url');
			$this->load->model('M_tambah_mata_pelajaran');
			$cek=$this->M_tambah_mata_pelajaran->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('mata_pelajaran');
			}else{
				$this->tambah_gagal();
				redirect('mata_pelajaran');
			}
		
		}
		
		public function proses_tambah_jenjang_pendidikan() {
			$this->load->helper('url');
			$this->load->model('M_tambah_jenjang_pendidikan');
			$cek=$this->M_tambah_jenjang_pendidikan->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('jenjang_pendidikan');
			}else{
				$this->tambah_gagal();
				redirect('jenjang_pendidikan');
			}
		
		}
		
		public function proses_tambah_admin() {
			$this->load->helper('url');
			$this->load->model('M_tambah_admin');
			$cek=$this->M_tambah_admin->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('admin');
			}else{
				$this->tambah_gagal();
				redirect('admin');
			}
		
		}
		
		public function proses_tambah_kelas() {
			$this->load->helper('url');
			$this->load->model('M_tambah_kelas');
			$cek=$this->M_tambah_kelas->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('kelas');
			}else{
				$this->tambah_gagal();
				redirect('kelas');
			}
		
		}
		
		public function proses_tambah_guru() {
			$this->load->helper('url');
			$this->load->model('M_tambah_guru');
			$cek=$this->M_tambah_guru->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('guru');
			}else{
				$this->tambah_gagal();
				redirect('tambah_guru');
			}
		
		}
		public function proses_tambah_provinsi() {
			$this->load->helper('url');
			$this->load->model('M_tambah_provinsi');
			$cek=$this->M_tambah_provinsi->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('alamat?id=2');
			}else{
				$this->tambah_gagal();
				redirect('alamat?id=2');
			}
		
		}
		
		public function proses_tambah_kabupaten() {
			$this->load->helper('url');
			$this->load->model('M_tambah_kabupaten');
			$cek=$this->M_tambah_kabupaten->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('alamat?id=3');
			}else{
				$this->tambah_gagal();
				redirect('alamat?id=3');
			}
		
		}
		
		public function proses_tambah_kecamatan() {
			$this->load->helper('url');
			$this->load->model('M_tambah_kecamatan');
			$cek=$this->M_tambah_kecamatan->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('alamat?id=4');
			}else{
				$this->tambah_gagal();
				redirect('alamat?id=4');
			}
		
		}
		
		public function proses_tambah_desa() {
			$this->load->helper('url');
			$this->load->model('M_tambah_desa');
			$cek=$this->M_tambah_desa->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('alamat?id=5');
			}else{
				$this->tambah_gagal();
				redirect('alamat?id=5');
			}
		
		}
		
		public function proses_tambah_siswa() {
			$this->load->helper('url');
			$this->load->model('M_tambah_siswa');
			$cek=$this->M_tambah_siswa->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('siswa');
			}else{
				$this->tambah_gagal();
				redirect('tambah_siswa');
			}
		
		}
		public function proses_tambah_siswa_kelas() {
			$this->load->helper('url');
			$tahun_ajaran=$_GET['id'];
			echo $tahun_ajaran=rawurldecode($tahun_ajaran);
			$this->load->model('M_tambah_siswa_kelas');
			$cek=$this->M_tambah_siswa_kelas->process($tahun_ajaran);
			if($cek){
				$this->tambah_berhasil();
				redirect("tambah_siswa_kelas?id=$tahun_ajaran");
			}else{
				$this->tambah_gagal();
				redirect("tambah_siswa_kelas?id=$tahun_ajaran");
			}
		
		}
		public function proses_tambah_siswa_kelas_per_kelas() {
			$this->load->helper('url');
			$kelas=$_GET['kelas'];
			$wali=$_GET['wali'];
			$id=$_GET['TA'];
			
			$tahun_ajaran=rawurldecode($id);
			$this->load->model('M_tambah_siswa_kelas_per_kelas');
			$cek=$this->M_tambah_siswa_kelas_per_kelas->process($kelas,$tahun_ajaran,$wali);
			if($cek){
				$this->tambah_berhasil();
				redirect("detail_siswa_kelas?id=$kelas&&TA=$tahun_ajaran");
			}else{
				$this->tambah_gagal();
				redirect("detail_siswa_kelas?id=$kelas&&TA=$tahun_ajaran");
			}
		
		}
		
//proses login dan logout

			public function proses_login() {
			$this->load->helper('url'); 
			$this->load->library('session'); 
			$this->load->model('M_login');
			$cek=$this->M_login->login();
				if($cek){
					$username = $this->input->post('username');
					$this->session->set_userdata('admin',$username);
					redirect('home');
				}else{
					$this->session->set_flashdata('login', '
							<div class="alert alert-danger alert-dismissable fade in">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>OPPSS!</strong> Maaf Username Atau Password Anda Salah!.
							  </div>');
					redirect('login');
				}
		}
		
		public function logout() {
			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			$this->login();
		}	


		

		
// proses Hapus

		function proses_hapus_admin($id){
			
            $this->load->model('M_hapus_admin');        
			$cek=$this->M_hapus_admin->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('admin');
			}else{
				$this->hapus_gagal();
				redirect('admin');
			}
		} 

		function proses_hapus_agama($id){
			
            $this->load->model('M_hapus_agama');        
			$cek=$this->M_hapus_agama->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('agama');
			}else{
				$this->hapus_gagal();
				redirect('agama');
			}
		} 	

		function proses_hapus_tahun_ajaran($id){
			
            $this->load->model('M_hapus_tahun_ajaran');        
			$cek=$this->M_hapus_tahun_ajaran->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tahun_ajaran');
			}else{
				$this->hapus_gagal();
				redirect('tahun_ajaran');
			}
		} 			
		
		function proses_hapus_jenis_ptk($id){
			
            $this->load->model('M_hapus_jenis_ptk');        
			$cek=$this->M_hapus_jenis_ptk->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('jenis_ptk');
			}else{
				$this->hapus_gagal();
				redirect('jenis_ptk');
			}
		}
		
		function proses_hapus_jenjang_pendidikan($id){
			
            $this->load->model('M_hapus_jenjang_pendidikan');        
			$cek=$this->M_hapus_jenjang_pendidikan->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('jenjang_pendidikan');
			}else{
				$this->hapus_gagal();
				redirect('jenjang_pendidikan');
			}
		}
		
		function proses_hapus_mata_pelajaran($id){
			
            $this->load->model('M_hapus_mata_pelajaran');        
			$cek=$this->M_hapus_mata_pelajaran->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('mata_pelajaran');
			}else{
				$this->hapus_gagal();
				redirect('mata_pelajaran');
			}
		}
		
		function proses_hapus_status_kepegawaian($id){
			
            $this->load->model('M_hapus_status_kepegawaian');        
			$cek=$this->M_hapus_status_kepegawaian->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('status_kepegawaian');
			}else{
				$this->hapus_gagal();
				redirect('status_kepegawaian');
			}
		}
		
		function proses_hapus_kelas ($id){
			
            $this->load->model('M_hapus_kelas');        
			$cek=$this->M_hapus_kelas->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('kelas');
			}else{
				$this->hapus_gagal();
				redirect('kelas');
			}
		}
		
		function proses_hapus_guru ($id){
			
            $this->load->model('M_hapus_guru');        
			$cek=$this->M_hapus_guru->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('guru');
			}else{
				$this->hapus_gagal();
				redirect("detail_guru?id=$id");
			}
		}
		
		function proses_hapus_siswa ($id){
			
            $this->load->model('M_hapus_siswa');        
			$cek=$this->M_hapus_siswa->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('siswa');
			}else{
				$this->hapus_gagal();
				redirect("detail_siswa?id=$id");
			}
		}
		
		function proses_hapus_provinsi ($id){
			
            $this->load->model('M_hapus_provinsi');        
			$cek=$this->M_hapus_provinsi->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('alamat?id=2');
			}else{
				$this->hapus_gagal();
				redirect("alamat?id=2");
			}
		}
		
		function proses_hapus_kabupaten ($id){
			
            $this->load->model('M_hapus_kabupaten');        
			$cek=$this->M_hapus_kabupaten->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('alamat?id=3');
			}else{
				$this->hapus_gagal();
				redirect("alamat?id=3");
			}
		}
		
		function proses_hapus_kecamatan ($id){
			
            $this->load->model('M_hapus_kecamatan');        
			$cek=$this->M_hapus_kecamatan->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('alamat?id=4');
			}else{
				$this->hapus_gagal();
				redirect("alamat?id=4");
			}
		}
		
		function proses_hapus_desa($id){
			
            $this->load->model('M_hapus_desa');        
			$cek=$this->M_hapus_desa->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('alamat?id=5');
			}else{
				$this->hapus_gagal();
				redirect("alamat?id=5");
			}
		}
		function proses_hapus_siswa_kelas(){
			$kelas=$_GET['kelas'];
			$TA=$_GET['TA'];
			$id_siswa_kelas=$_GET['id_siswa_kelas'];
            $this->load->model('M_hapus_siswa_kelas');        
			$cek=$this->M_hapus_siswa_kelas->delete($id_siswa_kelas);
			if($cek){
				$this->hapus_berhasil();
				redirect("detail_siswa_kelas?id=$kelas&&TA=$TA");
			}else{
				$this->hapus_gagal();
				redirect("detail_siswa_kelas?id=$kelas&&TA=$TA");
			}
		}
		function proses_hapus_data_siswa_kelas(){
			$kelas=$_GET['kelas'];
			$TA=$_GET['TA'];
			
            $this->load->model('M_hapus_data_siswa_kelas');        
			$cek=$this->M_hapus_data_siswa_kelas->delete($kelas);
			if($cek){
				$this->hapus_berhasil();
				redirect("siswa_kelas?id=$TA");
			}else{
				$this->hapus_gagal();
					redirect("siswa_kelas?id=$TA");
			}
		}
		
//cetak
		public function cetak_data_guru() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$this->load->model('M_data_guru');  
				$data['data_guru']= $this->M_data_guru->detail_guru_semua();
				$this->load->view('cetak_data_guru', $data);
				
       
			}
		}
		public function cetak_data_siswa() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$this->load->model('M_data_siswa');  
				$data['data_siswa']= $this->M_data_siswa->detail_siswa_semua();
				$this->load->view('cetak_data_siswa', $data);
				
       
			}
		}
		public function cetak_per_kelas() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$kelas=$_GET['kelas'];
				$tahun_ajaran=$_GET['tahun_ajaran'];
				
				
				$this->load->model('M_data_siswa');
				$data['data_siswa'] = $this->M_data_siswa-> data_perkelas($kelas,$tahun_ajaran);
				$data['header_absen'] = $this->M_data_siswa-> header_absen($kelas,$tahun_ajaran);
				
				
				
				
				$this->load->view('cetak_per_kelas', $data);
				
       
			}
		}
		
		public function cetak_absen_semua() {
			$this->load->helper('url');
			if (!isset($this->session->userdata['admin'])) {
				 $this->load->view('login');
			}else{
				$kelas=$_GET['kelas'];
				$tahun_ajaran=$_GET['tahun_ajaran'];
				
				
				$this->load->model('M_data_siswa');
				$data['data_siswa'] = $this->M_data_siswa-> data_perkelas($kelas,$tahun_ajaran);
				
				
				$this->load->view('cetak_absen_semua', $data);
				
       
			}
		}
		
		
	
//tambahan	
		function tambah_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
							</div>');
		}
		function tambah_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal ditambahkan!.
							</div>');
		}
		function edit_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
							</div>');
		}
		function edit_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
							</div>');
		}
		function hapus_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
		}
		function hapus_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Hapus!.
							</div>');
		}
		
		
		
		
		
		
   } 
?>
