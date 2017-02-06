<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php base_url()?>home">
							
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php base_url()?>home" <?php $link=uri_string(); if($link =="home"){ echo 'class="active"';} ?>>
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->

						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a <?php $link=uri_string(); if($link =="siswa"||$link =="guru"||$link =="data_kelas"||$link =="siswa_kelas"){ echo 'class="active"';} ?>>
								<div class="gui-icon"><i class="glyphicon glyphicon-list-alt"></i></div>
								<span class="title">Data Sekolah</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php base_url()?>siswa" <?php $link=uri_string(); if($link =="siswa"){ echo 'class="active"';} ?> ><span class="title">Siswa</span></a></li>
								<li><a href="<?php base_url()?>guru" <?php $link=uri_string(); if($link =="guru"){ echo 'class="active"';} ?>><span class="title">Guru</span></a></li>
								<li class="gui-folder"><a ><span class="title">Kelas</span></a>
									<ul>
									<?php foreach($data_tahun_ajaran as $data1){
											?>	
									<li><a <?php $link=uri_string(); if($link =="siswa_kelas"||$link =="detail_siswa_kelas"||$link =="tambah_siswa_kelas"){ echo 'class="active"';} ?> href="<?php base_url()?>siswa_kelas?id=<?php echo $data1->tahun_ajaran?>" <?php $link=uri_string(); if($link =="siswa"){ echo 'class="active"';} ?> ><span class="title">Tahun Ajaran <?php echo $data1->tahun_ajaran?></span></a></li>
									<?php }?>
									
									
									</ul><!--end /submenu -->
								
								</li>
								
								
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->
						<li class="gui-folder">
							<a  <?php $link=uri_string(); if($link =="kelas"||$link =="status_kepegawaian"||$link =="jenis_ptk"||$link =="mata_pelajaran"||$link =="agama"||$link =="jenjang_pendidikan"||$link =="admin"||$link =="alamat"){ echo 'class="active"';} ?>>
								<div class="gui-icon"><i class="glyphicon glyphicon-cog"></i></div>
								<span class="title">Setting</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php base_url()?>tahun_ajaran" <?php $link=uri_string(); if($link =="tahun_ajaran"){ echo 'class="active"';} ?> ><span class="title">Tahun Ajaran</span></a></li>
								<li><a href="<?php base_url()?>kelas" <?php $link=uri_string(); if($link =="kelas"){ echo 'class="active"';} ?> ><span class="title">Kelas</span></a></li>
								<li><a href="<?php base_url()?>status_kepegawaian" <?php $link=uri_string(); if($link =="status_kepegawaian"){ echo 'class="active"';} ?>><span class="title">Status Kepegawaian</span></a></li>
								<li><a href="<?php base_url()?>jenis_ptk" <?php $link=uri_string(); if($link =="jenis_ptk"){ echo 'class="active"';} ?>><span class="title">Jenis PTK</span></a></li>
								<li><a href="<?php base_url()?>mata_pelajaran" <?php $link=uri_string(); if($link =="mata_pelajaran"){ echo 'class="active"';} ?>><span class="title">Mata Pelajaran</span></a></li>
								<li><a href="<?php base_url()?>agama" <?php $link=uri_string(); if($link =="agama"){ echo 'class="active"';} ?>><span class="title">Agama</span></a></li>
								<li><a href="<?php base_url()?>jenjang_pendidikan" <?php $link=uri_string(); if($link =="jenjang_pendidikan"){ echo 'class="active"';} ?>><span class="title">Jenjang Pedidikan</span></a></li>
								<li><a href="<?php base_url()?>alamat?id=1" <?php $link=uri_string(); if($link =="alamat"){ echo 'class="active"';} ?>><span class="title">Alamat</span></a></li>
								<li><a href="<?php base_url()?>admin" <?php $link=uri_string(); if($link =="admin"){ echo 'class="active"';} ?>><span class="title">Admin</span></a></li>
								
							</ul><!--end /submenu -->
						</li>
						
						<!-- BEGIN DASHBOARD -->
						

					
						

					
					

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright </span> <strong>SMA NEGERI 1 SEULIMUM</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			