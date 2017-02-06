<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Redirect_controller';
// data
$route['home'] = 'Redirect_controller/home';
$route['jenis_kelamin'] = 'Redirect_controller/jenis_kelamin';
$route['status_kepegawaian'] = 'Redirect_controller/status_kepegawaian';
$route['jenis_ptk'] = 'Redirect_controller/jenis_ptk';
$route['mata_pelajaran'] = 'Redirect_controller/mata_pelajaran';
$route['agama'] = 'Redirect_controller/agama';
$route['jenjang_pendidikan'] = 'Redirect_controller/jenjang_pendidikan';
$route['kelas'] = 'Redirect_controller/kelas';
$route['guru'] = 'Redirect_controller/guru';
$route['siswa'] = 'Redirect_controller/siswa';
$route['admin'] = 'Redirect_controller/admin';
$route['logout'] = 'Redirect_controller/logout';
$route['login'] = 'Redirect_controller/login';
$route['detail_guru'] = 'Redirect_controller/detail_guru';
$route['detail_siswa'] = 'Redirect_controller/detail_siswa';
$route['siswa_kelas'] = 'Redirect_controller/siswa_kelas';
$route['detail_siswa_kelas'] = 'Redirect_controller/detail_siswa_kelas';
$route['tambah_siswa_kelas'] = 'Redirect_controller/tambah_siswa_kelas';
$route['tambah_siswa_kelas_per_kelas'] = 'Redirect_controller/tambah_siswa_kelas_per_kelas';
$route['tahun_ajaran'] = 'Redirect_controller/tahun_ajaran';
$route['ubah_password'] = 'Redirect_controller/ubah_password';
$route['cetak_data_guru'] = 'Redirect_controller/cetak_data_guru';
$route['cetak_data_siswa'] = 'Redirect_controller/cetak_data_siswa';
$route['cetak_per_kelas'] = 'Redirect_controller/cetak_per_kelas';
$route['cetak_absen_semua'] = 'Redirect_controller/cetak_absen_semua';
$route['combobox'] = 'combobox/provinsi';
$route['grafik'] = 'Redirect_controller/grafik';

//tambah
$route['tambah_siswa'] = 'Redirect_controller/tambah_siswa';
$route['tambah_guru'] = 'Redirect_controller/tambah_guru';
$route['alamat'] = 'Redirect_controller/alamat';


//edit
$route['edit_tahun_ajaran'] = 'Redirect_controller/edit_tahun_ajaran';
$route['edit_kelas'] = 'Redirect_controller/edit_kelas';
$route['edit_status_kepegawaian'] = 'Redirect_controller/edit_status_kepegawaian';
$route['edit_jenis_ptk'] = 'Redirect_controller/edit_jenis_ptk';
$route['edit_mata_pelajaran'] = 'Redirect_controller/edit_mata_pelajaran';
$route['edit_agama'] = 'Redirect_controller/edit_agama';
$route['edit_jenjang_pendidikan'] = 'Redirect_controller/edit_jenjang_pendidikan';
$route['edit_siswa'] = 'Redirect_controller/edit_siswa';
$route['edit_guru'] = 'Redirect_controller/edit_guru';
$route['edit_wali_kelas'] = 'Redirect_controller/edit_wali_kelas';
$route['edit_alamat'] = 'Redirect_controller/edit_alamat';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
