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

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section class="style-default-bright">
					<div class="section-header">
						<h2 class="text-primary">Data Guru</h2>
					</div>
					<hr>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
							
									<div class="card">
										<div class="card-head style-warning">
											<header>Biodata Diri</header>
										</div>
										
										<div class="card-body">
										<?php foreach($detail_guru as $data){
											?>	
											<div class="form-group">
												<div class="card-body">
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nip" required value="<?php echo $data->nip?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NUPTK</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nuptk" required value="<?php echo $data->nuptk?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Gelar Depan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="gelar_depan" value="<?php echo $data->gelar_depan?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="nama_lengkap" value="<?php echo $data->nama_guru?>" disabled ><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Gelar Belakang</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="gelar_belakang" value="<?php echo $data->gelar_belakang?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
										
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jenis Kelamin</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="gelar_belakang" value="<?php echo $data->jenis_kelamin?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required value="tanggal_lahir" >Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="date" class="form-control" id="Username5" value="<?php echo $data->tanggal_lahir?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required value="tempat_lahir" >Tempat Lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->tempat_lahir?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required name="email">Email</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="Username5" value="<?php echo $data->email?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required="no_hp">NO HP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->no_hp?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required="no_hp">Mata Pelajaran</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->nama_mata_pelajaran?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required="no_hp">Jenjang Pendidikan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->nama_jenjang_pendidikan?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Prodi</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->prodi?> " disabled><div class="form-control-line"></div>
												</div>
											</div>
											
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->kabupaten?>" disabled><div class="form-control-line"></div>
												</div>
											</div>
											
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kecamatan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->kecamatan?> " disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Desa</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" value="<?php echo $data->desa?> " disabled><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jalan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="jalan" value="<?php echo $data->jalan?> " disabled><div class="form-control-line"></div>
												</div>
											</div>
											
										</div><!--end .card-body -->
										
											</div>
										<div class="card-actionbar">
											<center>
													
														<a href="<?php base_url();?>edit_guru?id=<?php echo $data->nip?>" ><button type="button" class="btn ink-reaction btn-raised btn-primary">Edit</button></a>
												
													
														<?php
												echo"<a href='". base_url()."Redirect_controller/proses_hapus_guru/".$data->nip."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn ink-reaction btn-raised btn-danger'>Hapus</button></a>
												";
												?>
														
											</center>	
										
												</div>
										 <?php
											}
											?>
												
										</div><!--end .card-body -->
										
									</div><!--end .card -->
									
							
							</div>
						</div>
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
