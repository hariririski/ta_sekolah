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
		<script type="text/javascript" src="<?php echo base_url()?>assets/jquery_combo.js"></script> <!-- ajax-bertingkat -->
	
<script type='text/javascript'>
			var hash = window.location.hash;
			//alert(hash);
			
			var htmlobjek;
			$(document).ready(function() {
				$("#provinsi").change(function(){
					var kode_provinsi = $("#provinsi").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/kabupaten2/"+kode_provinsi,
						data: "kode_provinsi="+kode_provinsi,
						success: function(data){
							$("#kabupaten").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kabupaten").change(function(){
					var kode_kabupaten = $("#kabupaten").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/kecamatan2/"+kode_kabupaten,
						data: "kode_kabupaten="+kode_kabupaten,
						success: function(data){
							$("#kecamatan").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kecamatan").change(function(){
					var kode_kecamatan = $("#kecamatan").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/desa2/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa").html(data);
						}
					});
				});
			});
				</script>
				
		<script type='text/javascript'>

			
			
		
			
			$(document).ready(function() {
				$("#kecamatan_kecamatan").change(function(){
					var kode_kecamatan = $("#kecamatan_kecamatan").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/desa2/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa_kecamatan").html(data);
						}
					});
				});
			});
				</script>

<script type='text/javascript'>

			var htmlobjek;
			$(document).ready(function() {
				$("#provinsi_desa").change(function(){
					var kode_provinsi = $("#provinsi_desa").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/kabupaten2/"+kode_provinsi,
						data: "kode_provinsi="+kode_provinsi,
						success: function(data){
							$("#kabupaten_desa").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kabupaten_desa").change(function(){
					var kode_kabupaten = $("#kabupaten_desa").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/kecamatan2/"+kode_kabupaten,
						data: "kode_kabupaten="+kode_kabupaten,
						success: function(data){
							$("#kecamatan_desa").html(data);
						}
					});
				});
			});
			
			$(document).ready(function() {
				$("#kecamatan_desa").change(function(){
					var kode_kecamatan = $("#kecamatan_desa").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/desa2/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa_desa").html(data);
						}
					});
				});
			});
				</script>	
			
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
						<h2 class="text-primary">Alamat</h2>
					</div>
					
					
					
					
					
				<div class="row">

							<!-- BEGIN LAYOUT LEFT SIDEBAR -->
							
							<!-- END LAYOUT LEFT SIDEBAR -->

							<!-- BEGIN LAYOUT RIGHT SIDEBAR -->
							<div class="col-md-12">
								<div class="card tabs-right style-default-light">
									<ul class="card-head nav nav-tabs text-center" >
										<a href="<?php base_url();?>alamat?id=1"><li <?php $link=$_GET['id']; if($link =="1"){ echo 'class="active"';} ?>><i class="glyphicon glyphicon-tags"></i><br/><h4>Alamat<br/><small>Semua Data</small></h4></li></a><hr>
									
										<a href="<?php base_url();?>alamat?id=3"><li <?php $link=$_GET['id']; if($link =="3"){ echo 'class="active"';} ?>><i class="glyphicon glyphicon-tags"></i><br/><h4>Kabupaten<br/></h4></li></a><hr>
										<a href="<?php base_url();?>alamat?id=4"><li <?php $link=$_GET['id']; if($link =="4"){ echo 'class="active"';} ?>><i class="glyphicon glyphicon-tags"></i><br/><h4>Kecamatan<br/></h4></li></a><hr>
										<a href="<?php base_url();?>alamat?id=5"><li <?php $link=$_GET['id']; if($link =="5"){ echo 'class="active"';} ?>><i class="glyphicon glyphicon-tags"></i><br/><h4>Desa<br/></h4></li></a>
									</ul>
									<div class="card-body tab-content style-default-bright">
									
										<div class="tab-pane <?php $link=$_GET['id']; if($link =="1"){ echo "active";} ?> " id="first1">
										<h3 class="text-light">Semua <strong>Data</strong></h3>
										<section class="style-default-bright">
												
												<div class="section-body">

													<!-- BEGIN DATATABLE 1 -->
													
													<div class="row">
														<div class="col-md-12">
															<h4>Data Alamat</h4>
														</div><!--end .col -->
														<div class="col-lg-12">
															<div class="table-responsive">
																<table <?php $link=$_GET['id']; if($link =="1"){ echo 'id="datatable1"';} ?> class="table table-striped table-hover">
																	<thead>
																		<tr>
																			<th width="10%">NO</th>
																		
																			<th>Kabupaten</th>
																			<th>Kecamatan</th>
																			<th>Desa</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		
																		$j=0;
																				foreach($alamat as $data){
																		?>
																		<tr class="gradeX">
																			<td><?php echo ++$j?></td>
																		
																			<td><?php echo $data->nama_kabupaten; ?></td>
																			<td><?php echo $data->nama_kecamatan; ?></td>
																			<td><?php echo $data->nama_desa; ?></td>
																			
																			
																			
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

													<!-- BEGIN DATATABLE 2 -->
													<!-- END DATATABLE 2 -->

												</div><!--end .section-body -->
											</section>
				
										</div>						
										
										<div class="tab-pane  <?php $link=$_GET['id']; if($link =="3"){ echo "active";} ?>" id="first3">
											<h3 class="text-light">Data <strong>Kabupaten</strong></h3>
											<section class="style-default-bright">
												
												<div class="section-body">

													<!-- BEGIN DATATABLE 1 -->
													<div class="row">
														<div class="col-lg-12">
															<?php echo $this->session->flashdata('pesan');?>
															 <?php
																echo form_open('Redirect_controller/proses_tambah_kabupaten', array('class' => 'form-horizontal'));    
															?>
																<div class="card">
																	<div class="card-head style-primary">
																		<header>Data Kabupaten</header>
																	</div>
																	<div class="card-body">
																		
																		
																		
																		
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Nama Kabupaten</label>
																			<div class="col-sm-10">
																				<input type="text" class="form-control" id="Username5" name="nama_kabupaten" required autofocus><div class="form-control-line"></div>
																			</div>
																		</div>
																		
																	</div><!--end .card-body -->
																	<div class="card-actionbar">
																		<div class="card-actionbar-row">
																			<button type="submit" class="btn btn-flat btn-primary ink-reaction">Tambah</button>
																		</div>
																	</div>
																</div><!--end .card -->
																
															<?php
															echo form_close();
														?>
														</div>
													</div><!--end .row -->
													<div class="row">
														<div class="col-md-12">
															<h4>Data Kabupaten</h4>
														</div><!--end .col -->
														<div class="col-lg-12">
															<div class="table-responsive">
																<table <?php $link=$_GET['id']; if($link =="3"){ echo 'id="datatable1"';} ?> class="table table-striped table-hover">
																	<thead>
																		<tr>
																			<th width="10%">NO</th>
																			<th>Kabupaten</th>
																			<th width="10%">Edit</th>
																			<th width="10%">Hapus</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		
																		$j=0;
																				foreach($kabupaten as $data){
																		?>
																		<tr class="gradeX">
																			<td><?php echo ++$j?></td>
																			<td><?php echo $data->nama_kabupaten; ?></td>
																			<td><a href="<?php echo base_url()?>edit_alamat?id=3&&id_kabupaten=<?php echo $data->id_kabupaten?>&&id_kecamatan=0&&id_desa=0"  ><button type="button" class="btn ink-reaction btn-raised btn-primary">Edit</button></a></td>
																			<?php
																			echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_kabupaten/".$data->id_kabupaten."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn ink-reaction btn-raised btn-danger'>Hapus</button></a>
																			</td>";
																			?>
																			
																			
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

													<!-- BEGIN DATATABLE 2 -->
													<!-- END DATATABLE 2 -->

												</div><!--end .section-body -->
											</section>
			
										</div>
										<div class="tab-pane  <?php $link=$_GET['id']; if($link =="4"){ echo "active";} ?>" id="first4">
											<h3 class="text-light">Edit <strong>Kecamatan</strong></h3>
											<section class="style-default-bright">
												
												<div class="section-body">

													<!-- BEGIN DATATABLE 1 -->
													<div class="row">
														<div class="col-lg-12">
															<?php echo $this->session->flashdata('pesan');?>
															 <?php
																echo form_open('Redirect_controller/proses_tambah_kecamatan', array('class' => 'form-horizontal'));    
															?>
																<div class="card">
																	<div class="card-head style-primary">
																		<header>Edit Kecamatan</header>
																	</div>
																	<div class="card-body">
																		
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
																			<div class="col-sm-10">
																			<select  class="form-control" required="" aria-required="true" required name="kabupaten" data-live-search="true">
																				<option value="">Pilih Kabupaten</option>
																				<?php foreach($kabupaten as $data){?>
																				<option value="<?php echo $data->id_kabupaten?>"><?php echo $data->nama_kabupaten?></option>
																				<?php }?>
																			</select>
																			
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Nama Kecamatan</label>
																			<div class="col-sm-10">
																				<input type="text" class="form-control" id="Username5" name="nama_kecamatan" required autofocus><div class="form-control-line"></div>
																			</div>
																		</div>
																		
																	</div><!--end .card-body -->
																	<div class="card-actionbar">
																		<div class="card-actionbar-row">
																			<button type="submit" class="btn btn-flat btn-primary ink-reaction">Tambah</button>
																		</div>
																	</div>
																</div><!--end .card -->
																
															<?php
															echo form_close();
														?>
														</div>
													</div><!--end .row -->
													<div class="row">
														<div class="col-md-12">
															<h4>Data Kecamatan</h4>
														</div><!--end .col -->
														<div class="col-lg-12">
															<div class="table-responsive">
																<table <?php $link=$_GET['id']; if($link =="4"){ echo 'id="datatable1"';} ?> class="table table-striped table-hover">
																	<thead>
																		<tr>
																			<th width="10%">NO</th>
																			<th>Kecamatan</th>
																			<th width="10%">Edit</th>
																			<th width="10%">Hapus</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		
																		$j=0;
																				foreach($kecamatan as $data){
																		?>
																		<tr class="gradeX">
																			<td><?php echo ++$j?></td>
																			<td><?php echo $data->nama_kecamatan; ?></td>
																			<td><a href="<?php echo base_url()?>edit_alamat?id=4&&id_kabupaten=0&&id_kecamatan=<?php echo $data->id_kecamatan?>&&id_desa=0"  ><button type="button" class="btn ink-reaction btn-raised btn-primary">Edit</button></a></td>
																			<?php
																			echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_kecamatan/".$data->id_kecamatan."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn ink-reaction btn-raised btn-danger'>Hapus</button></a>
																			</td>";
																			?>
																			
																			
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

													<!-- BEGIN DATATABLE 2 -->
													<!-- END DATATABLE 2 -->

												</div><!--end .section-body -->
											</section>
			
										</div>
										
										
										
										
										<div class="tab-pane  <?php $link=$_GET['id']; if($link =="5"){ echo "active";} ?>" id="first5">
											<h3 class="text-light">Edit <strong>Desa</strong></h3>
											
											
											
											<section class="style-default-bright">
												
												<div class="section-body">

													<!-- BEGIN DATATABLE 1 -->
													<div class="row">
														<div class="col-lg-12">
															<?php echo $this->session->flashdata('pesan');?>
															 <?php
																echo form_open('Redirect_controller/proses_tambah_desa', array('class' => 'form-horizontal'));    
															?>
																<div class="card">
																	<div class="card-head style-primary">
																		<header>Edit Desa</header>
																	</div>
																	<div class="card-body">
																		
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
																			<div class="col-sm-10">
																		<select id="kabupaten_desa"  class="form-control" required="" aria-required="true" required name="kabupaten" data-live-search="true">
																				<option value="">Pilih Kabupaten</option>
																				<?php foreach($kabupaten as $data){?>
																				<option value="<?php echo $data->id_kabupaten?>"><?php echo $data->nama_kabupaten?></option>
																				<?php }?>
																			</select>
																			
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Kecamatan</label>
																			<div class="col-sm-10">
																			<select id="kecamatan_desa"  class="form-control" required="" aria-required="true" required name="kecamatan">
																				<option value="">Pilih Kecamatan</option>
																			
																			</select>
																			
																			</div>
																		</div>
																		
																		<div class="form-group">
																			<label for="Username5" class="col-sm-2 control-label">Nama Desa</label>
																			<div class="col-sm-10">
																				<input type="text" class="form-control" id="Username5" name="nama_desa" required autofocus><div class="form-control-line"></div>
																			</div>
																		</div>
																		
																	</div><!--end .card-body -->
																	<div class="card-actionbar">
																		<div class="card-actionbar-row">
																			<button type="submit" class="btn btn-flat btn-primary ink-reaction">Tambah</button>
																		</div>
																	</div>
																</div><!--end .card -->
																
															<?php
															echo form_close();
														?>
														</div>
													</div><!--end .row -->
													<div class="row">
														<div class="col-md-12">
															<h4>Data Desa</h4>
														</div><!--end .col -->
														<div class="col-lg-12">
															<div class="table-responsive">
																<table <?php $link=$_GET['id']; if($link =="5"){ echo 'id="datatable1"';} ?> class="table table-striped table-hover">
																	<thead>
																		<tr>
																			<th width="10%">NO</th>
																			<th>Desa</th>
																			<th width="10%">Edit</th>
																			<th width="10%">Hapus</th>
																			
																		</tr>
																	</thead>
																	<tbody>
																		<?php
																		
																		$j=0;
																				foreach($desa as $data){
																		?>
																		<tr class="gradeX">
																			<td><?php echo ++$j?></td>
																			<td><?php echo $data->nama_desa; ?></td>
																			<td><a href="<?php echo base_url()?>edit_alamat?id=5&&id_kabupaten=<?php echo $data->id_kabupaten?>&&id_kecamatan=0&&id_desa=<?php echo $data->id_desa?>"  ><button type="button" class="btn ink-reaction btn-raised btn-primary">Edit</button></a></td>
																			<?php
																			echo"<td class='center'><a href='". base_url()."Redirect_controller/proses_hapus_desa/".$data->id_desa."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn ink-reaction btn-raised btn-danger'>Hapus</button></a>
																			</td>";
																			?>
																			
																			
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

													<!-- BEGIN DATATABLE 2 -->
													<!-- END DATATABLE 2 -->

												</div><!--end .section-body -->
											</section>
			
											
											
											
											
											
											
											
											
										</div>
									</div>
								</div><!--end .card -->
								
							</div><!--end .col -->
							<!-- END LAYOUT RIGHT SIDEBAR -->

						</div><!--end .row -->
							
					
					
					
					
					
					
					
					
					
					
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
