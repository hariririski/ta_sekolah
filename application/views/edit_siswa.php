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



			$(document).ready(function() {
				$("#kabupaten").change(function(){
					var kode_kabupaten = $("#kabupaten").val();
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>Redirect_controller/kecamatan/"+kode_kabupaten,
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
						url: "<?php echo base_url(); ?>Redirect_controller/desa/"+kode_kecamatan,
						data: "kode_kecamatan="+kode_kecamatan,
						success: function(data){
							$("#desa").html(data);
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
						<h2 class="text-primary">Siswa</h2>
					</div>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">
							<?php foreach($detail_siswa as $edit){
											?>
								<?php echo $this->session->flashdata('pesan');?>
										 <?php
											echo form_open("Redirect_controller/proses_edit_siswa/$edit->nisn" , array('class' => 'form-horizontal'));
										?>
									<div class="card">
										<div class="card-head style-info">
											<header>Biodata Diri</header>
										</div>
										<div class="card-body">

											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NISN</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nisn" required value="<?php echo $edit->nisn?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIK</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nik" required value="<?php echo $edit->nik_siswa?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIPD</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nipd" required value="<?php echo $edit->nipd?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Siswa</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nama_siswa" required value="<?php echo $edit->nama_siswa?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">

												<label for="Username5" class="col-sm-2 control-label">Jenis Kelamin</label>
												<div class="col-sm-10">
												<?php
												if($edit->jenis_kelamin=="Pria"){
													echo'
														<label class="radio-inline radio-styled col-sm-2 control-label">
															<input type="radio" name="jenis_kelamin" checked="" value="Pria"><span>Pria</span>
														</label>
														<label class="radio-inline radio-styled">
															<input type="radio" name="jenis_kelamin" value="Wanita" ><span>Wanita</span>
														</label>
													';
												}else{
													echo'
														<label class="radio-inline radio-styled col-sm-2 control-label">
															<input type="radio" name="jenis_kelamin"  value="Pria"><span>Pria</span>
														</label>
														<label class="radio-inline radio-styled">
															<input type="radio" name="jenis_kelamin" checked="" value="Wanita" ><span>Wanita</span>
														</label>
													';

												}

												?>
												</div>
											</div >
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Agama</label>
												<div class="col-sm-10">
												<select id="select1"  class="form-control"  aria-required="true" required name="agama">
													<option value="<?php echo $edit->id_agama?>"><?php echo $edit->nama_agama?></option>

													<?php
													foreach($data_agama as $data){
														if( $edit->id_agama!= $data->id_agama){
													?>
															<option value="<?php echo $data->id_agama?>"><?php echo $data->nama_agama?></option>
													<?php }
													}
													?>
												</select>

												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="date" class="form-control" id="Username5" name="tanggal_lahir" required value="<?php echo $edit->tanggal_lahir?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Tempat Lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="tempat_lahir" required value="<?php echo $edit->nipd?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No Seri Ijazah</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="no_seri_ijazah" value="<?php echo $edit->no_seri_ijazah?>" ><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No SKHUN</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="skhun" value="<?php echo $edit->skhun?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No Registrasi Akta Kelahiran</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="no_registrasi_akte_kelahiran" value="<?php echo $edit->no_registrasi_akte_kelahiran?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenis Tinggal</label>
														<div class="col-sm-10">
														<select id="select1" name="jenis_tinggal" class="form-control"  aria-required="true" required>
															<option><?php echo $edit->jenis_tinggal?></option>
															<option value="Orang Tua"  <?php if($edit->jenis_tinggal=="Orang Tua"){echo"hidden";}?> >Orang Tua</option>
															<option value="Kerabat" <?php if($edit->jenis_tinggal=="Kerabat"){echo"hidden";}?> >Kerabat</option>
															<option value="Sendiri" <?php if($edit->jenis_tinggal=="Sendiri"){echo"hidden";}?> >Sendiri</option>
															<option value="Keluarga" <?php if($edit->jenis_tinggal=="Keluarga"){echo"hidden";}?> >Keluarga</option>

														</select>

														</div>
													</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jumlah Sudara Kandung</label>
												<div class="col-sm-10">
													<input type="number" class="form-control" id="Username5" name="jumlah_saudara_kandung" required value="<?php echo $edit->jumlah_saudara_kandung?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO HP Siswa</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="no_hp_siswa" value="<?php echo $edit->no_hp?>" ><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Email Siswa</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="Username5" name="email_siswa" value="<?php echo $edit->email?>"><div class="form-control-line"></div>
												</div>
											</div>
										</div><!--end .card-body -->

									</div><!--end .card -->


							</div>

							<div class="col-lg-12">

									<div class="card">
										<div class="card-head style-info">
											<header>Alamat Siswa</header>
										</div>
										<div class="card-body">


							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-sm-10">
												<select id="kabupaten"  class="form-control" required="" aria-required="true" required name="kabupaten">
													<option value="<?php echo $edit->kabupaten?>"><?php echo $edit->kabupaten?></option>
													<?php foreach($kabupaten as $data){
													if($edit->kabupaten!=$data->nama_kabupaten){?>
													<option value="<?php echo $data->nama_kabupaten?>"><?php echo $data->nama_kabupaten?></option>
													<?php
													}}?>
												</select>

												</div>
											</div>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kecamatan</label>
												<div class="col-sm-10">
												<select id="kecamatan"  class="form-control" required="" aria-required="true" required name="kecamatan">
												<option value="<?php echo $edit->kecamatan?>"><?php echo $edit->kecamatan?></option>
													<?php foreach($kecamatan as $data){
													if($edit->kecamatan!=$data->nama_kecamatan){?>
													<option value="<?php echo $data->nama_kecamatan?>"><?php echo $data->nama_kecamatan?></option>
													<?php
													}}?>
												</select>

												</div>
											</div>
							<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Desa</label>
												<div class="col-sm-10">
												<select id="desa"  class="form-control" required="" aria-required="true" required name="desa" >
												<option value="<?php echo $edit->desa?>"><?php echo $edit->desa?></option>
													<?php foreach($desa as $data){
													if($edit->desa!=$data->nama_desa){?>
													<option value="<?php echo $data->nama_desa?>"><?php echo $data->nama_desa?></option>
													<?php
													}}?>
												</select>

												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jalan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="jalan" required value="<?php echo $edit->jalan?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Kode Pos</label>
												<div class="col-sm-10">
													<input type="number" class="form-control" id="Username5" name="kode_pos"required value="<?php echo $edit->kode_pos?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Alat Transportasi</label>
														<div class="col-sm-10">
														<select id="select1" name="alat_transportasi" class="form-control"  aria-required="true" required>
														<option><?php echo $edit->alat_transportasi?></option>

															<option <?php if($edit->alat_transportasi=="Jalan Kaki"){echo"hidden";}?> >Jalan Kaki</option>
															<option <?php if($edit->alat_transportasi=="Sepeda Motor"){echo"hidden";}?> >Sepeda Motor</option>
															<option <?php if($edit->alat_transportasi=="Mobil"){echo"hidden";}?> >Mobil</option>
															<option <?php if($edit->alat_transportasi=="Anggkutan Umum"){echo"hidden";}?> >Anggkutan Umum</option>
															<option <?php if($edit->alat_transportasi=="Diantar"){echo"hidden";}?> >Diantar</option>

														</select>

														</div>
													</div>
										</div><!--end .card-body -->

									</div><!--end .card -->

									<div class="card">
										<div class="card-head style-info">
											<header>Lainnya</header>
										</div>
										<div class="card-body">
											<div class="form-group">

												<label for="Username5" class="col-sm-2 control-label">Layak PIP</label>
												<div class="col-sm-10">
												<label class="radio-inline radio-styled col-sm-2 control-label">
													<input type="radio" name="layak_pip"  value="YA"  <?php if($edit->layak_pip=="YA"){echo"checked";}?> ><span>YA</span>
												</label>
												<label class="radio-inline radio-styled">
													<input type="radio" name="layak_pip"  value="TIDAK"  <?php if($edit->layak_pip=="TIDAK"){echo"checked";}?> ><span>TIDAK</span>
												</label>
												</div>
											</div >
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Alasan Layak PIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="alasan_layak_pip" value="<?php echo $edit->alasan_layak_pip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">

												<label for="Username5" class="col-sm-2 control-label">Penerima KIP</label>
												<div class="col-sm-10">
												<label class="radio-inline radio-styled col-sm-2 control-label">
													<input type="radio" name="penerima_kip"  <?php if($edit->penerima_kip=="YA"){echo"checked";}?> value="YA"><span>YA</span>
												</label>
												<label class="radio-inline radio-styled">
													<input type="radio" name="penerima_kip" value="TIDAK"  <?php if($edit->penerima_kip=="TIDAK"){echo"checked";}?> ><span>TIDAK</span>
												</label>
												</div>
											</div >
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No KIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name='no_kip' value="<?php echo $edit->no_kip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Di KIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nama_di_kip" value="<?php echo $edit->nama_di_kip?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">

												<label for="Username5" class="col-sm-2 control-label">Penerima KPS</label>
												<div class="col-sm-10">
												<label class="radio-inline radio-styled col-sm-2 control-label">
													<input type="radio" name="penerima_kps"  value="YA"  <?php if($edit->penerima_kps=="YA"){echo"checked";}?>><span>YA</span>
												</label>
												<label class="radio-inline radio-styled">
													<input type="radio" name="penerima_kps" value="TIDAK" <?php if($edit->penerima_kps=="TIDAK"){echo"checked";}?> ><span>TIDAK</span>
												</label>
												</div>
											</div >

											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO KPS</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="no_kps" value="<?php echo $edit->no_kps?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NO KKS</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="no_kks" value="<?php echo $edit->no_kks?>" ><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No PUN</label>
												<div class="col-sm-10">
													<input type="number" class="form-control" id="Username5" name="no_pum" value="<?php echo $edit->no_pun?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Rombel Saat Ini</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="rombel_saat_ini" value="<?php echo $edit->rombel_saat_ini?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Bank</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="bank" value="<?php echo $edit->bank?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Rekening</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="rekening_atas_nama" value="<?php echo $edit->rekening_atas_nama?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">No Rekening</label>
												<div class="col-sm-10">
													<input type="number" class="form-control" id="Username5" name="no_rekening_bank" value="<?php echo $edit->bank?>"><div class="form-control-line"></div>
												</div>
											</div>
										</div><!--end .card-body -->

									</div><!--end .card -->



							</div>
							<div class="col-lg-12">

									<div class="card">
										<div class="card-head style-info">
											<header>Orang Tua</header>
										</div>
										<BR>

										<div class="col-lg-12">
										<form class="form-horizontal">
											<div class="card">
												<div class="card-head style-info">
													<header>Ayah</header>
												</div>
												<div class="card-body">

													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" name="nama_ayah" required value="<?php echo $edit->nama_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun_lahir</label>
														<div class="col-sm-10">
															<input type="number" class="form-control" id="Username5" name="tahun_lahir_ayah"  required value="<?php echo $edit->tahun_lahir_ayah?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
														<select id="select1" name="pekerjaan_ayah" class="form-control"  aria-required="true" required>
															<option><?php echo $edit->pekerjaan_ayah?></option>
															<option <?php if($edit->pekerjaan_ayah=="TNI/POLRI"){echo"hidden";}?> >TNI/POLRI</option>
															<option <?php if($edit->pekerjaan_ayah=="PNS GURU"){echo"hidden";}?> >PNS GURU</option>
															<option <?php if($edit->pekerjaan_ayah=="PNS TNI"){echo"hidden";}?>  >PNS TNI</option>
															<option <?php if($edit->pekerjaan_ayah=="PNS POLRI"){echo"hidden";}?>   >PNS POLRI</option>
															<option <?php if($edit->pekerjaan_ayah=="PNS BUMN"){echo"hidden";}?>   >PNS BUMN</option>
															<option <?php if($edit->pekerjaan_ayah=="Karyawan Swasta"){echo"hidden";}?>   >Karyawan Swasta</option>
															<option <?php if($edit->pekerjaan_ayah=="PNS"){echo"hidden";}?>   >PNS</option>
															<option <?php if($edit->pekerjaan_ayah=="Wira Swasta"){echo"hidden";}?>   >Wira Swasta</option>
															<option <?php if($edit->pekerjaan_ayah=="Tidak Bekerja"){echo"hidden";}?>   >Tidak Bekerja</option>


														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
														<select id="select1" name="penghasilan_ayah" class="form-control"  aria-required="true" required>
															<option><?php echo $edit->penghasilan_ayah?></option>
															<option <?php if($edit->penghasilan_ayah=="Rp.0 Sampai Rp.500.000"){echo"hidden";}?> >Rp.0 Sampai Rp.500.000</option>
															<option <?php if($edit->penghasilan_ayah=="Rp.500.000 Sampai Rp.1.000.000"){echo"hidden";}?> >Rp.500.000 Sampai Rp.1.000.000</option>
															<option <?php if($edit->penghasilan_ayah=="Rp.1.000.000 Sampai Rp.2.000.000"){echo"hidden";}?> >Rp.1.000.000 Sampai Rp.2.000.000</option>
															<option <?php if($edit->penghasilan_ayah=="Rp.2.000.000 Sampai Rp.4.000.000"){echo"hidden";}?> >Rp.2.000.000 Sampai Rp.4.000.000</option>
															<option <?php if($edit->penghasilan_ayah=="Rp.4.000.000 Sampai Rp.8.000.000"){echo"hidden";}?> >Rp.4.000.000 Sampai Rp.8.000.000</option>
															<option <?php if($edit->penghasilan_ayah=="Rp.8.000.000 Sampai Rp.15.000.000"){echo"hidden";}?> >Rp.8.000.000 Sampai Rp.15.000.000</option>
															<option <?php if($edit->penghasilan_ayah=="Lebih Dari Rp.15.000.000"){echo"hidden";}?> >Lebih Dari Rp.15.000.000</option>

														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
														<select id="select1" name="jenjang_pendidikan_ayah" class="form-control" required aria-required="true">
															<option value="<?php echo $edit->id_jenjang_pendidikan_ayah?>"><?php echo $edit->nama_jenjang_pendidikan_ayah?></option>
															<?php foreach($jenjang_pendidikan as $data){
																if($edit->id_jenjang_pendidikan_ayah!=$data->id_jenjang_pendidikan){
																?>
													<option value="<?php echo $data->id_jenjang_pendidikan?>"><?php echo $data->nama_jenjang_pendidikan?></option>
													<?php }
													}
													?>
														</select>

														</div>
													</div>



												</div><!--end .card-body -->


										</div>
										</div>

										<div class="col-lg-12">

											<div class="card">
												<div class="card-head style-info">
													<header>Ibu</header>
												</div>
												<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" name="nama_lengkap_ibu" required value="<?php echo $edit->nama_ibu?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun_lahir</label>
														<div class="col-sm-10">
															<input type="number" class="form-control" id="Username5" name="tahun_lahir_ibu" required value="<?php echo $edit->tahun_lahir_ibu?>"><div class="form-control-line" ></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
														<select id="select1" name="pekerjaan_ibu" class="form-control"  aria-required="true" required>
															<option><?php echo $edit->pekerjaan_ibu?></option>
															<option <?php if($edit->pekerjaan_ibu=="TNI/POLRI"){echo"hidden";}?> >TNI/POLRI</option>
															<option <?php if($edit->pekerjaan_ibu=="PNS GURU"){echo"hidden";}?> >PNS GURU</option>
															<option <?php if($edit->pekerjaan_ibu=="PNS TNI"){echo"hidden";}?>  >PNS TNI</option>
															<option <?php if($edit->pekerjaan_ibu=="PNS POLRI"){echo"hidden";}?>   >PNS POLRI</option>
															<option <?php if($edit->pekerjaan_ibu=="PNS BUMN"){echo"hidden";}?>   >PNS BUMN</option>
															<option <?php if($edit->pekerjaan_ibu=="Karyawan Swasta"){echo"hidden";}?>   >Karyawan Swasta</option>
															<option <?php if($edit->pekerjaan_ibu=="PNS"){echo"hidden";}?>   >PNS</option>
															<option <?php if($edit->pekerjaan_ibu=="Wira Swasta"){echo"hidden";}?>   >Wira Swasta</option>
															<option <?php if($edit->pekerjaan_ibu=="Tidak Bekerja"){echo"hidden";}?>   >Tidak Bekerja</option>


														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
														<select id="select1" name="penghasilan_ibu" class="form-control"  aria-required="true" required>
															<option><?php echo $edit->penghasilan_ibu?></option>
															<option <?php if($edit->penghasilan_ibu=="Rp.0 Sampai Rp.500.000"){echo"hidden";}?> >Rp.0 Sampai Rp.500.000</option>
															<option <?php if($edit->penghasilan_ibu=="Rp.500.000 Sampai Rp.1.000.000"){echo"hidden";}?> >Rp.500.000 Sampai Rp.1.000.000</option>
															<option <?php if($edit->penghasilan_ibu=="Rp.1.000.000 Sampai Rp.2.000.000"){echo"hidden";}?> >Rp.1.000.000 Sampai Rp.2.000.000</option>
															<option <?php if($edit->penghasilan_ibu=="Rp.2.000.000 Sampai Rp.4.000.000"){echo"hidden";}?> >Rp.2.000.000 Sampai Rp.4.000.000</option>
															<option <?php if($edit->penghasilan_ibu=="Rp.4.000.000 Sampai Rp.8.000.000"){echo"hidden";}?> >Rp.4.000.000 Sampai Rp.8.000.000</option>
															<option <?php if($edit->penghasilan_ibu=="Rp.8.000.000 Sampai Rp.15.000.000"){echo"hidden";}?> >Rp.8.000.000 Sampai Rp.15.000.000</option>
															<option <?php if($edit->penghasilan_ibu=="Lebih Dari Rp.15.000.000"){echo"hidden";}?> >Lebih Dari Rp.15.000.000</option>


														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
														<select id="select1" name="jenjang_pendidikan_ibu" class="form-control" required="" aria-required="true">
															<option value="<?php echo $edit->id_jenjang_pendidikan_ibu?>"><?php echo $edit->nama_jenjang_pendidikan_ibu?></option>
															<?php foreach($jenjang_pendidikan as $data){
																if($edit->id_jenjang_pendidikan_ibu!=$data->id_jenjang_pendidikan){
																?>
													<option value="<?php echo $data->id_jenjang_pendidikan?>"><?php echo $data->nama_jenjang_pendidikan?></option>
													<?php }
													}
													?>
														</select>

														</div>
													</div>


												</div><!--end .card-body -->

												<div class="card">
												<div class="card-head style-info">
													<header>Wali</header>
												</div>
												<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="Username5" name="nama_lengkap_wali" value="<?php echo $edit->nama_wali?>"><div class="form-control-line"></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Tahun_lahir</label>
														<div class="col-sm-10">
															<input type="number" class="form-control" id="Username5" name="tahun_lahir_wali" value="<?php echo $edit->tahun_lahir_wali?>"><div class="form-control-line" ></div>
														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Pekerjaan</label>
														<div class="col-sm-10">
														<select id="select1" name="pekerjaan_wali" class="form-control"  aria-required="true">
															<option><?php echo $edit->pekerjaan_wali?></option>

															<option <?php if($edit->pekerjaan_wali=="TNI/POLRI"){echo"hidden";}?> >TNI/POLRI</option>
															<option <?php if($edit->pekerjaan_wali=="PNS GURU"){echo"hidden";}?> >PNS GURU</option>
															<option <?php if($edit->pekerjaan_wali=="PNS TNI"){echo"hidden";}?>  >PNS TNI</option>
															<option <?php if($edit->pekerjaan_wali=="PNS POLRI"){echo"hidden";}?>   >PNS POLRI</option>
															<option <?php if($edit->pekerjaan_wali=="PNS BUMN"){echo"hidden";}?>   >PNS BUMN</option>
															<option <?php if($edit->pekerjaan_wali=="Karyawan Swasta"){echo"hidden";}?>   >Karyawan Swasta</option>
															<option <?php if($edit->pekerjaan_wali=="PNS"){echo"hidden";}?>   >PNS</option>
															<option <?php if($edit->pekerjaan_wali=="Wira Swasta"){echo"hidden";}?>   >Wira Swasta</option>
															<option <?php if($edit->pekerjaan_wali=="Tidak Bekerja"){echo"hidden";}?>   >Tidak Bekerja</option>


														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Penghasilan</label>
														<div class="col-sm-10">
														<select id="select1" name="penghasilan_wali" class="form-control"  aria-required="true">
															<option><?php echo $edit->penghasilan_wali?></option>
															<option <?php if($edit->penghasilan_wali=="Rp.0 Sampai Rp.500.000"){echo"hidden";}?> >Rp.0 Sampai Rp.500.000</option>
															<option <?php if($edit->penghasilan_wali=="Rp.500.000 Sampai Rp.1.000.000"){echo"hidden";}?> >Rp.500.000 Sampai Rp.1.000.000</option>
															<option <?php if($edit->penghasilan_wali=="Rp.1.000.000 Sampai Rp.2.000.000"){echo"hidden";}?> >Rp.1.000.000 Sampai Rp.2.000.000</option>
															<option <?php if($edit->penghasilan_wali=="Rp.2.000.000 Sampai Rp.4.000.000"){echo"hidden";}?> >Rp.2.000.000 Sampai Rp.4.000.000</option>
															<option <?php if($edit->penghasilan_wali=="Rp.4.000.000 Sampai Rp.8.000.000"){echo"hidden";}?> >Rp.4.000.000 Sampai Rp.8.000.000</option>
															<option <?php if($edit->penghasilan_wali=="Rp.8.000.000 Sampai Rp.15.000.000"){echo"hidden";}?> >Rp.8.000.000 Sampai Rp.15.000.000</option>
															<option <?php if($edit->penghasilan_wali=="Lebih Dari Rp.15.000.000"){echo"hidden";}?> >Lebih Dari Rp.15.000.000</option>

														</select>

														</div>
													</div>
													<div class="form-group">
														<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
														<div class="col-sm-10">
														<select id="select1" name="jenjang_pendidikan_wali" class="form-control"  aria-required="true">
															<option value="<?php echo $edit->id_jenjang_pendidikan_wali?>"><?php echo $edit->nama_jenjang_pendidikan_wali?></option>
															<?php foreach($jenjang_pendidikan as $data){
																if($edit->id_jenjang_pendidikan_wali!=$data->id_jenjang_pendidikan){
																?>
													<option value="<?php echo $data->id_jenjang_pendidikan?>"><?php echo $data->nama_jenjang_pendidikan?></option>
													<?php }
													}
													?>
														</select>

														</div>
													</div>


												</div><!--end .card-body -->


											</div><!--end .card -->

										</div>



										</div>


									</div><!--end .card -->

									<div class="card-actionbar">
													<div class="card-actionbar-row">
														<button type="submit" class="btn btn-flat btn-primary ink-reaction">Perbaharui</button>
													</div>
												</div>
								 <?php
													echo form_close();
											?>
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
