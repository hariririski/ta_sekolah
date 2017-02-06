<!DOCTYPE html>
<html lang="en">
	<head>
		 <?php echo $this->load->view('common/title', '', TRUE);?>

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
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
				<section>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg">Jumlah Siswa</strong>
											<strong class="text-xl"><?php foreach($jumlah_siswa as $data){ echo $data->jumlah_siswa;}?></strong><br/>
											<span class="opacity-50">siswa</span>
											
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg">Jumlah Guru</strong>
											<strong class="text-xl">	<?php foreach($jumlah_guru as $data){ echo $data->jumlah_guru;}?></strong><br/>
											<span class="opacity-50">Guru</span>
										
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="pull-right text-danger text-lg">Jumlah Kelas</strong>
											<strong class="text-xl">	<?php foreach($jumlah_kelas as $data){ echo $data->jumlah_kelas;}?></strong><br/>
											<span class="opacity-50">Kelas</span>
											<div class="stick-bottom-left-right">
												<div class="progress progress-hairline no-margin">
													<div class="progress-bar progress-bar-danger" style="width:43%"></div>
												</div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
											<strong class="text-xl"><?php echo date('d/m/Y')?></strong><br/>
											<span class="opacity-50">Tanggal Hari ini</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-12">
								<div class="card ">
									<div class="row">
										<div class="col-md-12">
											<div class="card-head">
												<header>Grafik Jenis Kelamin</header>
												
											</div><!--end .card-head -->
											<div class="card-body height-13">
												<iframe class="animated fadeInDown wow" src="<?php base_url()?>grafik" width="100%" height="600px" scrolling="no" frameborder="0"></iframe>
											
												
											</div><!--end .card-body -->
										</div><!--end .col -->
										</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

							<!-- BEGIN SERVER STATUS -->
							<!-- END SERVER STATUS -->

						</div><!--end .row -->
						</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			 <?php echo $this->load->view('common/menu', '', TRUE);?>
			
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/moment/moment.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/flot/curvedLines.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/d3/d3.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/d3/d3.v3.js"></script>
		<script src="<?php echo base_url()?>assets/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/App.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url()?>assets/js/core/demo/DemoDashboard.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
