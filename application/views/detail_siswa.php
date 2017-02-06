<!DOCTYPE html>
<html lang="en">
	<head>
		 <?php echo $this->load->view('common/title', '', TRUE);?>

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed menubar-pin">

		<!-- BEGIN HEADER-->
		 <?php echo $this->load->view('common/menu_atas', '', TRUE);?>
		 <!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->
			
		<?php foreach($detail_siswa as $data){
											?>	
			<!-- BEGIN CONTENT-->
			<div id="content">
			
				<section class="style-default-bright">
				
					<div class="section-header">
						<h2 class="text-primary">Siswa</h2>
					</div>
					<?php echo $this->session->flashdata('pesan');?>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
								<form class="form-horizontal">
									<div class="card">
										<div class="card-head style-warning">
											<header>Biodata Diri</header>
										</div>
										<div class="card-body">
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NISN</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nisn?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIK</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nik_siswa?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIPD</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nipd?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_siswa?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jenis Kelamin</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->jenis_kelamin?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">agama</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_agama?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->tanggal_lahir?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Tempat_lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nipd?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO Seri Ijazah</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_seri_ijazah?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No SKHUN</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->skhun?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No Registrasi Akte Kelahiran</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_registrasi_akte_kelahiran?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jenis Tinggal</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->jenis_tinggal?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jumlah Saudara Kandung</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->jumlah_saudara_kandung?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO HP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_hp?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->email?>"><div class="form-control-line"></div>
												</div>
											</div>
											
											
											
											
											
										</div><!--end .card-body -->
										
									</div><!--end .card -->
									
								</form>
							</div>
							
							<div class="col-lg-12">
								<form class="form-horizontal">
									<div class="card">
										<div class="card-head style-warning">
											<header>Alamat Siswa</header>
										</div>
										<div class="card-body">
											
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->kabupaten?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kecamatan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->kecamatan?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Desa</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->desa?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jalan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->jalan?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kode Pos</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->kode_pos?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Alat Transportasi</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->alat_transportasi?>"><div class="form-control-line"></div>
												</div>
											</div>
										</div><!--end .card-body -->
										
									</div><!--end .card -->
									
								</form>
							</div> 
							
							<div class="col-lg-12">
								<form class="form-horizontal">
									<div class="card">
										<div class="card-head style-warning">
											<header>Lainnya</header>
										</div>
										<div class="card-body">
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Layak PIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->layak_pip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Alasan Layak PIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->alasan_layak_pip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No KIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_kip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Penerima KIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->penerima_kip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Di KIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_di_kip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO KPS</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_kps?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Penerima KPS</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->penerima_kps?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO KKS</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_kks?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No PUM</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->no_pun?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Rombel Saat Ini</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->rombel_saat_ini?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Bank</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->bank?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Rekening Atas Nama</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->rekening_atas_nama?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">no_rekening_bank</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->bank?>"><div class="form-control-line"></div>
												</div>
											</div>
										</div><!--end .card-body -->
										
									</div><!--end .card -->
									
								</form>
							</div> 
							
							<div class="col-lg-12">
								<form class="form-horizontal">
									<div class="card">
										<div class="card-head style-warning">
											<header>Orang Tua</header>
										</div>
										<BR>
										
										<div class="col-lg-12">
										<form class="form-horizontal">
											<div class="card">
												<div class="card-head style-warning">
													<header>Ayah</header>
												</div>
												<div class="card-body">
													
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_ayah?>" ><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun Lahir</label>
														<div class="col-sm-10">
															<input  class="form-control" id="Username5" disabled value="<?php echo $data->tahun_lahir_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="Rp.<?php echo $data->penghasilan_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->pekerjaan_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_jenjang_pendidikan_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													
													
												</div><!--end .card-body -->
											
											
										</form>
										</div>
										</div>
										
										<div class="col-lg-12">
										<form class="form-horizontal">
											<div class="card">
												<div class="card-head style-warning">
													<header>Ibu</header>
												</div>
												<div class="card-body">
													
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_ibu?>" ><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun Lahir</label>
														<div class="col-sm-10">
															<input  class="form-control" id="Username5" disabled value="<?php echo $data->tahun_lahir_ibu?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="Rp.<?php echo $data->penghasilan_ibu?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->pekerjaan_ibu?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_jenjang_pendidikan_ibu?>"><div class="form-control-line"></div>
														</div>
													</div>
													
													
												</div><!--end .card-body -->
											
												
											</div><!--end .card -->
											
										</form>
										</div>
										
										<div class="col-lg-12">
										<form class="form-horizontal">
											<div class="card">
												<div class="card-head style-warning">
													<header>Wali</header>
												</div>
												<div class="card-body">
													
												<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_wali?>" ><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun Lahir</label>
														<div class="col-sm-10">
															<input  class="form-control" id="Username5" disabled value="<?php echo $data->tahun_lahir_wali?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="Rp.<?php echo $data->penghasilan_wali?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->pekerjaan_wali?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" disabled value="<?php echo $data->nama_jenjang_pendidikan_wali?>"><div class="form-control-line"></div>
														</div>
													</div>
													
												</div><!--end .card-body -->
											
												
											</div><!--end .card -->
											
										</form>
										</div>
										
										
									</div><!--end .card -->
									<div class="card-actionbar">
											<center>
													
														<a href="<?php base_url();?>edit_siswa?id=<?php echo $data->nisn?>" ><button type="button" class="btn ink-reaction btn-raised btn-primary">Edit</button></a>
												
													
														<?php
												echo"<a href='". base_url()."Redirect_controller/proses_hapus_siswa/".$data->nisn."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn ink-reaction btn-raised btn-danger'>Hapus</button></a>
												";
												?>
														
											</center>	
										
												</div>
								</form>
							</div>
		<?php }?>	
							
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						<hr class="ruler-xxl"/>

						<!-- BEGIN DATATABLE 2 -->
						<!-- END DATATABLE 2 -->

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			 <?php echo $this->load->view('common/menu', '', TRUE);?>
			 <!-- END MENUBAR -->

			

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/DataTables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/App.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/demo/DemoTableDynamic.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
