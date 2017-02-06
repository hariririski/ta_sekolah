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
						<h2 class="text-primary">Siswa</h2>
					</div>
					<div class="section-body">
		
						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
						<?php echo $this->session->flashdata('pesan');?>
							<div class="col-md-12">
								<h4>Data Siswa</h4>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>NO</th>
												<th>NISN</th>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Detail</th>
												
												
											</tr>
										</thead>
										<tbody>
											<?php
											$j=0;
											foreach($data_siswa as $data){
											?>
											<tr class="gradeX">
												<td><?php echo ++$j?></td>
												<td><?php echo $data->nisn; ?></td>
												<td><?php echo $data->nama_siswa; ?></td>
												<td><?php echo $data->jenis_kelamin; ?></td>
											
												<td><a href="<?php echo base_url()?>detail_siswa?id=<?php echo $data->nisn?>"  ><button type="button" class="btn ink-reaction btn-raised btn-primary">Detail</button></a></td>
												
												
											</tr>
											<?php
													}
											?>
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						<hr class="ruler-xxl"/>
						<div class="section-action style-primary">
						<div class="section-action ">
						<div class="section-action-row">
							<a  href="<?php echo base_url()?>cetak_data_siswa" class="btn ink-reaction btn-icon-toggle btn-lg" data-toggle="tooltip" data-placement="top" data-original-title="Cetak Data Siswa">
								<span class="glyphicon glyphicon-print"></span>
								
							</a>Cetak Data Siswa
						</div>
						<div class="section-floating-action-row">
							<a class="btn ink-reaction btn-floating-action btn-lg btn-accent" href="<?php echo base_url()?>tambah_siswa" data-toggle="tooltip" data-placement="top" data-original-title="Tambah Siswa">
								<i class="md md-add"></i>
							</a>
						</div>
					</div>
						<!-- BEGIN DATATABLE 2 -->
						<!-- END DATATABLE 2 -->

					</div><!--end .section-body -->
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
