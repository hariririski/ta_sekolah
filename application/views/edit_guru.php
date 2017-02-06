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
						<h2 class="text-primary">Guru</h2>
					</div>
					<hr>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-lg-12">

									<div class="card">
										<div class="card-head style-info">
											<header>Biodata Diri</header>
										</div>
										<?php foreach($detail_guru as $edit){
											?>
										<div class="card-body">
										<?php echo $this->session->flashdata('pesan');?>
										 <?php
											echo form_open("Redirect_controller/proses_edit_guru/$edit->nip" , array('class' => 'form-horizontal'));
										?>
											<div class="form-group">
												<div class="card-body">
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NIP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nip" value="<?php echo $edit->nip?>" required><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">NUPTK</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="nuptk"  value="<?php echo $edit->nuptk?>" required><div class="form-control-line"></div>
												</div>
											</div>


											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Gelar Depan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="gelar_depan" value="<?php echo $edit->gelar_depan?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Nama Lengkap</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="nama_lengkap"  value="<?php echo $edit->nama_guru?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Gelar Belakang</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="gelar_belakang" value="<?php echo $edit->gelar_belakang?>"><div class="form-control-line"></div>
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
												<label for="Username5" class="col-sm-2 control-label" required >Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="date" class="form-control" id="Username5" name="tanggal_lahir" value="<?php echo $edit->tanggal_lahir?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required >Tempat Lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" name="tempat_lahir" value="<?php echo $edit->tempat_lahir?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Agama</label>
												<div class="col-sm-10">
												<select id="select1"  class="form-control" required="" aria-required="true" required name="agama">
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
												<label for="Username5" class="col-sm-2 control-label" required >Email</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="Username5" name="email" value="<?php echo $edit->email?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label" required="no_hp">NO HP</label>
												<div class="col-sm-10">
													<input type="number" class="form-control" id="Username5" name="no_hp" value="<?php echo $edit->no_hp?>"><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Mata Pelajaran</label>
												<div class="col-sm-10">
												<select id="select1"  class="form-control" required="" aria-required="true" required name="mata_pelajaran">
													<option value="<?php echo $edit->id_mata_pelajaran?>"><?php echo $edit->nama_mata_pelajaran?></option>

													<?php
													foreach($data_mata_pelajaran as $data){
													if($edit->id_mata_pelajaran!=$data->id_mata_pelajaran){?>
													<option value="<?php echo $data->id_mata_pelajaran?>"><?php echo $data->nama_mata_pelajaran?></option>
													<?php
													}

													} ?>
												</select>

												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jenjang Pendidikan</label>
												<div class="col-sm-10">
												<select id="select1" class="form-control" required="" aria-required="true" required name="jenjang_pendidikan">
													<option value="<?php echo $edit->id_jenjang_pendidikan?>"><?php echo $edit->nama_jenjang_pendidikan?></option>

													<?php foreach($data_jenjang_pendidikan as $data){
													if($edit->id_jenjang_pendidikan!=$data->id_jenjang_pendidikan){
													?>
													<option value="<?php echo $data->id_jenjang_pendidikan?>"><?php echo $data->nama_jenjang_pendidikan?></option>
													<?php
													}}?>
												</select>

												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Prodi</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="Username5" required name="prodi" value="<?php echo $edit->prodi?> "><div class="form-control-line"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Status Kepegawaian</label>
												<div class="col-sm-10">
												<select id="select1"  class="form-control" required="" aria-required="true" required name="status_kepegawaian">
													<option value="<?php echo $edit->id_status_kepegawaian?>"><?php echo $edit->nama_status_kepegawaian?></option>
													<?php foreach($data_status_kepegawaian as $data){
													if($edit->id_status_kepegawaian!=$data->id_status_kepegawaian){
													?>
													<option value="<?php echo $data->id_status_kepegawaian?>"><?php echo $data->nama_status_kepegawaian?></option>
													<?php
													}}?>
												</select>

												</div>
											</div>
											<div class="form-group">
												<label for="Username5" class="col-sm-2 control-label">Jenis PTK</label>
												<div class="col-sm-10">
												<select id="select1"  class="form-control" required="" aria-required="true" required name="jenis_ptk">
													<option value="<?php echo $edit->id_jenis_ptk?>"><?php echo $edit->nama_jenis_ptk?></option>
													<?php foreach($data_jenis_ptk as $data){
													if($edit->id_jenis_ptk!=$data->id_jenis_ptk){
													?>
													<option value="<?php echo $data->id_jenis_ptk?>"><?php echo $data->nama_jenis_ptk?></option>
													<?php
													}}
													?>
												</select>

												</div>
											</div>

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
													<input type="text" class="form-control" id="Username5" required name="jalan" value="<?php echo $edit->jalan?>" ><div class="form-control-line"></div>
												</div>
											</div>

										</div><!--end .card-body -->

											</div>
										<div class="card-actionbar">
													<div class="card-actionbar-row">
														<button type="submit" class="btn btn-flat btn-primary ink-reaction">Perbaharui</button>
													</div>
												</div>
										 <?php
													echo form_close();
											?>
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
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/jquery.auto-complete.js"></script>
    <script>
        $(function(){
            $('#provinsi').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = ['Aceh', 'Sumatra Utara'];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>
	<script>
        $(function(){
            $('#kabupaten').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = ['Aceh Barat',
									'Aceh Barat Daya',
									'Aceh Besar',
									'Aceh Jaya',
									'Aceh Selatan',
									'Aceh Singkil',
									'Aceh Tamiang',
									'Aceh Tengah',
									'Aceh Tenggara',
									'Aceh Timur',
									'Aceh Utara',
									'Bener Meriah',
									'Bireuen',
									'Gayo Lues',
									'Nagan Raya',
									'Pidie',
									'Pidie Jaya',
									'Simeulue',
									'Banda Aceh',
									'Langsa',
									'Lhokseumawe',
									'Sabang',
									'Subulussalam'
									];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>
	<script>
        $(function(){
            $('#kecamatan').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = ['Lhoong',
									'Lhonga',
									'Leupung',
									'Indrapuri',
									'Kuta Cot Glie',
									'Seulimeum',
									'Kota Jantho',
									'Lembah Seulawah',
									'Mesjid Raya',
									'Darussalam',
									'Baitussalam',
									'Kuta Baro',
									'Montasik',
									'Ingin Jaya',
									'Krueng Barona Jaya',
									'Suka Makmur',
									'Kuta Malaka',
									'Simpang Tiga',
									'Darul Imarah',
									'Darul Kamal',
									'Peukan Bada',
									'Pulo Aceh'];
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>
	<script>
        $(function(){
            $('#desa').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase();
                    var choices = ['Pasi',
									'Glee Bruek',
									'Meunasah Cot',
									'Cundien',
									'Gapui',
									'Monmata',
									'Keutapang',
									'Lamsujen',
									'Lamjuhang',
									'Lamgeuriheu',
									'Umong Seuribee',
									'Lamkuta Blangmee',
									'Teungoh Blangmee',
									'Baroh Blangmee',
									'Jantang',
									'Meunasah Krueng Kala',
									'Kareung',
									'Biriek',
									'Seungko Mulat',
									'Baroh Kruengkala',
									'Tunong Kruengkala',
									'Paroi',
									'Mon Ikeun',
									'Naga Umbang',
									'Lambaro Kueh',
									'Lam Ateuk',
									'Aneuk Paya',
									'Lampaya',
									'Lamkruet',
									'Weu Raya',
									'Meunasah Moncut',
									'Meunasah Manyang',
									'Meunasah Karieng',
									'Lamgaboh',
									'Tanjong/Lamcok',
									'Kueh',
									'Nusa',
									'Seubun Keutapang',
									'Seubun Ayon',
									'Lambaro Seubun',
									'Meunasah Mesjid Lamlhom',
									'Meunasah Baro',
									'Meunasah Mesjid Lampuuk',
									'Meunasah Balee',
									'Meunasah Lamgirek',
									'Meunasah Beutong',
									'Layeun',
									'Pulot',
									'Lamseunia',
									'Mesjid Leupung',
									'Meunasah Bak Ue',
									'Deah Mamplam',
									'Aneuk Glee',
									'Lam Ilie Ganto',
									'Lam Ilie Teungoh',
									'Reukih Dayah',
									'Krueng Lamkareung',
									'Riting',
									'Lampanah Tunong',
									'Lampanah Baroh',
									'Lampanah Teungoh',
									'Lampanah Dayah',
									'Lampanah Ranjo',
									'Seuot Tunong',
									'Sihom Cot',
									'Sihom Lhok',
									'Sinyeu',
									'Seuot Baroh',
									'Pasar Indrapuri',
									'Indrapuri',
									'Reukih Keupula',
									'Lamlubok',
									'Lam Ilie Mesjid',
									'Empee Ara',
									'Ulee Kareung',
									'Seureumo',
									'Meunara',
									'Lingom',
									'Lambunot',
									'Lam Siot',
									'Ulee Oe',
									'Jruek Bak Kreh',
									'Jruek Balee',
									'Grot Manyang',
									'Grot Baro',
									'Mon Alue',
									'Grot Blang',
									'Seulangai',
									'Lampupok Baro',
									'Lampupok Raya',
									'Lam Beutong',
									'Limo Lamlueng',
									'Limo Mesjid',
									'Limo Blang',
									'Cot Kareung',
									'Cureh',
									'Lheue Jeumpa',
									'Meusale Lhok',
									'Lam Lueng',
									'Meureu Ulee Titi',
									'Mereu Bueng-U',
									'Mureu Baro',
									'Mureu Lam Glumpang',
									'Manggra',
									'Bak Sukon',
									'Siron Krueng',
									'Siron Blang',
									'Bueng Simek',
									'Bithak',
									'Tutue',
									'Pakuk',
									'Pasar Lampakuk',
									'Sigapang',
									'Keuruweung Krueng',
									'Keuruweung Blang',
									'Glee Jai',
									'Lampakuk',
									'Bandasafa',
									'Lamtui',
									'Lam Beugak',
									'Lam Leupung',
									'Cot Bayu',
									'Keumireu',
									'Lam Leuot',
									'Leupung Balee',
									'Ie Alang Lam Keureumeun',
									'Ie Alang Mesjid',
									'Ie Alang Dayah',
									'Ie Alang Lam Ghui',
									'Maheng',
									'Leupung Bruek',
									'Lam Alieng',
									'Lamsie',
									'Lampoh Raja',
									'Barih Lhok',
									'Lamkleeng',
									'Alue Gintong',
									'Lhieb',
									'Data Gaseue',
									'Keunaloi',
									'Jawie',
									'Buga',
									'Pasar Seulimeum',
									'Rabo',
									'Lampisang Tunong',
									'Lampisang Teungoh',
									'Lampisang Dayah',
									'Capeung Baroh',
									'Capeung Dayah',
									'Bak Aghu',
									'Jeumpa',
									'Pinto Khop',
									'Kayee Adang',
									'Seuneubok',
									'Seulimeum',
									'Gampong Raya',
									'Lamjruen',
									'Iboih Tanjong',
									'Iboih Tunong',
									'Alue Rindang',
									'Meunasah Baro',
									'Ayon',
									'Bayu',
									'Batee Lhee',
									'Meunasah Tunong',
									'Mangeu',
									'Bak Seutui',
									'Ujong Mesjid Tanoh Abee',
									'Lamkuk',
									'Lamcarak',
									'Lampante',
									'Lamteuba Droi',
									'Pulo',
									'Meurah',
									'Lambada',
									'Blang Tingkeum',
									'Lam Apeng',
									'Ateuk',
									'Beureunut',
									'Ujong Keupula',
									'Lampanah',
									'Ujong Mesjid Lampanah',
									'Leungah',
									'Jantho Baru',
									'Weue',
									'Awek',
									'Bueng',
									'Jalin',
									'Suka Tani',
									'Janthoi',
									'Barueh',
									'Buleet Meusar/Jantho Makmur',
									'Buleet Meurasa/Jantho Meusar 1',
									'Teureubeh',
									'Cucum',
									'Panca',
									'Panca Kubu',
									'Lam Kubu',
									'Lon Asan',
									'Lon Baroh',
									'Paya Keureuleh',
									'Lambaro Tunong',
									'P Teuladan',
									'Lamtamot',
									'Sukadamai',
									'Sukamulia',
									'Saree Aceh',
									'Lamnga',
									'Neuheun',
									'Durung',
									'Ladong',
									'Ruyung',
									'Paya Kameng',
									'Beurandeh',
									'Meunasah Kulam',
									'Meunasah Keudee',
									'Meunasah Mon',
									'Ie Seu Um',
									'Lam Reh',
									'Lampuja',
									'Lam Ujong Tungkop',
									'Lam Gawe',
									'Lam Asan Siem',
									'Lam Reh',
									'Siem',
									'Krueng Kale',
									'Lambaro Sukon',
									'Lambiheu',
									'Lambiheu Siem',
									'Lam Klat',
									'Lamkeunung',
									'Lampuuk',
									'Lamtimpeung',
									'Limpok',
									'Barabung',
									'Tungkop',
									'Lamduroy',
									'Lambitra',
									'Li-Eue',
									'Lambada Peukan',
									'Gampong Blang',
									'Gampong Cot',
									'Angan',
									'Miruk Taman',
									'Lam Peudaya',
									'Suleue',
									'Tanjung Deah',
									'Tanjung Selamat',
									'Blang Krueng',
									'Baet',
									'Cadek',
									'Kajhu',
									'Cot Paya',
									'Lam Bada Lhok',
									'Miruk Lam Reudeup',
									'Klieng Meuria',
									'Lampineung',
									'Lam Asan',
									'Labui',
									'Lam Ujong',
									'Cot Mon Raya',
									'Cot Geundreut',
									'Paya U',
									'Lamme',
									'Gue',
									'Melayo',
									'Lamsiem',
									'Cot Puklat',
									'Babah Jurong',
									'Lambro Deyah',
									'Lam Baet',
									'Krueng Anoi',
									'Cot Masam',
									'Cot Mancang',
									'Bueng Bak Jok',
									'Cot Beut',
									'Ujong Blang',
									'Seupeu',
									'Lam Neuheun',
									'Lampuuk',
									'Lambro Bileu',
									'Lampoh Keudee',
									'Cot Peutano',
									'Cot Cut',
									'Lam Geulumpang',
									'Meunasah Bak Trieng',
									'Lam Asan',
									'Lamceu',
									'Cot Preh',
									'Puuk',
									'Lam Seunong',
									'Lam Trieng',
									'Beurangong',
									'Rabeu',
									'Deyah',
									'Cucum',
									'Cot Yang',
									'Cot Raya',
									'Lampoh Tarom',
									'Aron',
									'Lamroh',
									'Bak Buloh',
									'Lam Raya',
									'Tumpok Lampoh',
									'Lam Bunot Tanoh',
									'Lam Bunot Paya',
									'Lamteubee Mon Ara',
									'Lamteubee Geupula',
									'Lam Alue Cut',
									'Lam Sabang',
									'Lam Alue Raya',
									'Leupung Ulee Alue',
									'Leupung Mesjid',
									'Cot Lamme',
									'Weu Bada',
									'Piyeung Lhang',
									'Piyeung Datu',
									'Piyeung Manee',
									'Piyeung Kuweu',
									'Bueng Daroh',
									'Cot Lampoh Soh',
									'Mon Ara',
									'Cot Lhok',
									'Bueng Raya',
									'Atong',
									'Teubang Phui Mesjid',
									'Lamme Garot',
									'Reudeup',
									'Bak Cirih',
									'Meunasah Tutong',
									'Empee Tanong',
									'Dayah Daboh',
									'Lampaseh Krueng',
									'Lamnga',
									'Lampaseh Lhok',
									'Gampong Baroh',
									'Mata Ie',
									'Weu Krueng',
									'Alue',
									'Weulhok',
									'Warabo',
									'Teubang Phui Baroh',
									'Bueng Tujoh',
									'Bira Lhok',
									'Bira Cot',
									'Perumping',
									'Data Makmur',
									'Kayee Kunyet',
									'Bak Dilip',
									'Ulee Lhat',
									'Seubam Lhok',
									'Lam Raya',
									'Cot Seunong',
									'Cot Meulangen',
									'Cot Nambak',
									'Seubam Cot',
									'Seumet',
									'Cot Mancang',
									'Empee Bata',
									'Cot Bagie',
									'Teupin Batee',
									'Cot Leu-Ot',
									'Cot Ho-Ho',
									'Cot Jambo',
									'Cot Rumpun',
									'Bueng Pageu',
									'Cot Sayun',
									'Kayee Lheu',
									'Lam Teungoh',
									'Lubok Sukon',
									'Lubok Gapuy',
									'Lam Daya',
									'Lam Oe',
									'Paleuh Blang',
									'Paleuh Pulo',
									'Lam Bada',
									'Lam Cot',
									'Lam Preh Lam Jampok',
									'Lam Sinyeu',
									'Cot Mentiwan',
									'Cot Alue',
									'Cot Gud',
									'Cot Bada',
									'Cot Surui',
									'Ajee Cut',
									'Ajee Rayeuk',
									'Dham Pulo',
									'Pasi Lubok',
									'Ujong XII',
									'Lampreh Lamteungoh',
									'Bada',
									'Lambaro Kaphee',
									'Meunasah Kaluet',
									'Meunasah Manyet',
									'Meunasah Ajee',
									'Lubok Batee',
									'Siron',
									'Meunasah Baro',
									'Pasi Lamgarot',
									'Dham Ceukok',
									'Gani',
									'Bueng Ceukok',
									'Teubang Phui',
									'Ateuk Lueng Ie',
									'Ateuk Anggok',
									'Bakoy',
									'Meunasah Manyang Lg',
									'Meunasah Tutong',
									'Meunasah Deyah',
									'Jurong Peujera',
									'Pantee',
									'Bineh Blang',
									'Reuloh',
									'Tanjong',
									'Meunasah Manyang Pa',
									'Santan',
									'Meunasah Krueng',
									'Cot Karieng',
									'Cot Malem',
									'Gampong Blang',
									'Bueng Sidom',
									'Cot Madi',
									'Lampermee',
									'Miruk',
									'Gla Deyah',
									'Gla Meunasah Baro',
									'Meunasah Intan',
									'Meunasah Baet',
									'Lam Ujong Meunasah Manyang',
									'Lam Gapang',
									'Rumpet',
									'Meunasah Baktrieng',
									'Lueng Ie',
									'Meunasah Papeun',
									'Luthu Lamweu',
									'Baet Mesjid',
									'Baet Lampuot',
									'Baet Meusugo',
									'Panterawa',
									'Sibreh Keumudee',
									'Dilib Lamteungoh',
									'Dilib Bukti',
									'Reuhat Tuha',
									'Seumeureung',
									'Luthu Dayah Krueng',
									'Lam Tanjong',
									'Lambirah',
									'Kayee Adang',
									'Tampok Blang',
									'Lamgeu Baro',
									'Lamgeu Tuha',
									'Lam Lheu',
									'Lamteh Dayah',
									'Tampok Jeurat Raya',
									'Lampanah Ineu',
									'Klieng Manyang',
									'Lampisang',
									'Lambaro Sibreh',
									'Weusiteh',
									'Aneuk Galong Titi',
									'Aneuk Galong Baro',
									'Meunasah Bakthu',
									'Blang Cot',
									'Meunasah Tuha',
									'Aneuk Batee',
									'Niron',
									'Bukloh',
									'Lambarih Jurong Raya',
									'Lambarih Bak Mee',
									'Lubok Batee',
									'Lubok Buni',
									'Bughu',
									'Teudayah',
									'Lam Ara Tunong',
									'Lam Ara Engkit',
									'Lam Ara Cut',
									'Leupung Cut',
									'Tumbo Baro',
									'Lambaro Samahani',
									'Leupung Riwat',
									'Leupung Rayeuk',
									'Reuleung Geulumpang',
									'Reuleung Karieng',
									'Lamsiteh Cot',
									'Tantuha',
									'Blang Preh',
									'Blang Miro',
									'Bha Ulee Tutue',
									'Lambunot',
									'Lambatee',
									'Nyaa',
									'Krueng Mak',
									'Batee Linteung',
									'Ateuk Lam Phang',
									'Ateuk Cut',
									'Ateuk Blang Asan',
									'Ateuk Mon Panah',
									'Ateuk Lam Ura',
									'Ateuk Lampuot',
									'Lamjamee Simpang Tiga',
									'Lamjamee Lamkrak',
									'Lam Urit',
									'Deunong',
									'Leugeu',
									'Lamsiteh',
									'Lampeuneuen',
									'Ulee Tui',
									'Punie',
									'Leu Ue/Mata Ie',
									'Geundrieng',
									'Pasheu Beutong',
									'Lampasi Engking',
									'Jeumpet Ajuen',
									'Garot Geuceu',
									'Gue Gajah',
									'Ulee Lueng',
									'Lam Bheu',
									'Kandang',
									'Daroy Kameu',
									'Tingkeum',
									'Lamtheun',
									'Lamsidaya',
									'Kuta Karang',
									'Lam Kawe',
									'Lheu Blang',
									'Lagang',
									'Lam Blang Manyang',
									'Lam Blang Trieng',
									'Payaroh',
									'Lampeuneurut Blang',
									'Lampeuneurut Gampong',
									'Lamcot',
									'Lamreung',
									'Bayu',
									'Lambaro Biluy',
									'Empee Trieng',
									'Biluy',
									'Lamsod',
									'Manee Dayah',
									'Lamtadok',
									'Lamkunyet',
									'Lhang',
									'Lambatee',
									'Turam',
									'Blang Kiree',
									'Teubalui',
									'Neusok',
									'Lam Bleut',
									'Beuradeun',
									'Keuneu Ue',
									'Lampisang',
									'Rima Jeuneu',
									'Rima Keuneurom',
									'Ajuen',
									'Lam Hasan',
									'Paya Tieng',
									'Lam Rukam',
									'Lam Isek',
									'Lamteh',
									'Gampong Baro',
									'Lam Manyang',
									'Lam Awe',
									'Meunasah Tuha',
									'Lamteungoh',
									'Lamguron',
									'Lambaro',
									'Lampageu',
									'Alue Riyeung',
									'Deudap',
									'Rabo',
									'Lamteng',
									'Lapeng',
									'Ulee Paya',
									'Gugob'];
					var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });

        });


    </script>
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
