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
	<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
	<body class="menubar-hoverable header-fixed menubar-pin">

		<!-- BEGIN HEADER-->
		 <?php echo $this->load->view('common/menu_atas', '', TRUE); 	$id=$_GET['id'];?>
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
						<h2 class="text-primary">Tambah Siswa Tahun Ajaran <?php echo $id?> </h2>
					</div>
					<div class="section-body">
						
						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
						<div class="col-lg-12">
								<?php echo $this->session->flashdata('pesan');?>

								 <?php
								 $id=$_GET['id'];
								 $id=rawurldecode($id);
									echo form_open("Redirect_controller/proses_tambah_siswa_kelas?id=$id", array('class' => 'form-horizontal'));    
								?>
									<div class="card">
										<div class="card-head style-primary">
											<header>Tambah Siswa</header>
										</div>
										<div class="card-body">
											
											<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Kelas</label>
														<div class="col-sm-10">
														<select id="select1" name="kelas" class="form-control" required="" aria-required="true" autofocus>
															<option value="">Pilih Kelas</option>
															<?php foreach($data_kelas as $data){?>
													<option value="<?php echo $data->id_kelas?>"><?php echo $data->nama_kelas?></option>
													<?php }?>
														</select>
														
														</div>
													</div>
											<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pilih Wali Kelas</label>
														<div class="col-sm-10">
														<select id="select1" name="wali_kelas" class="form-control" required="" aria-required="true" autofocus>
															<option value="">Pilih Wali Kelas</option>
															<?php foreach($data_guru as $data){?>
													<option value="<?php echo $data->nip?>"><?php echo $data->nip?>/<?php echo $data->nama_guru?></option>
													<?php }?>
														</select>
														
														</div>
													</div>
											
										</div><!--end .card-body -->
										
								
										<div class="col-lg-2">	
										</div>
										<div class="col-lg-10">		
						
																	
									
									
									
									<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Berdasarkan NISN" title="NISN">

										<table id="myTable">
										  <tr class="header">
											<th style="width:5%;">#</th>
											<th style="width:60%;">NISN</th>
											<th style="width:40%;">Nama</th>
										  </tr>
										  <?php
											$j=0;
											foreach($data_siswa as $data){
											?>
										  <tr>
											<td><input type="checkbox" value="<?php Echo $data->nisn?>" name="siswa[]" style="width:100%; height=100px;" ></td>
											<td><?php echo $data->nisn?></td>
											<td ><?php echo $data->nama_siswa?></td>
										  </tr>
										  <?php
													}
											?>
										 
										</table>
										<br>
									
									
									
									
									
								</div>
								</div><!--end .card -->
								
								
							</div>				
								<!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						<hr class="ruler-xxl"/>
						<div class="section-action style-primary">
						
						<div class="section-floating-action-row">
							<button class="btn ink-reaction btn-floating-action btn-lg btn-accent" type="submit" data-toggle="tooltip" data-placement="top" data-original-title="Compose">
								<i class="md md-add"></i>
							</button>
						</div>

					</div>
					 <?php
								echo form_close();
							?>
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
			<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>		
	</body>
</html>
