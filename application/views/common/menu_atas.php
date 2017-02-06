<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php base_url()?>home">
									<span class="text-lg text-bold text-primary">Sistem Informasi Siswa Dan Guru</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?php echo base_url()?>assets/img/admin.png" alt="" />
								<span class="profile-info">
									<?php foreach($nama_admin as $data){ echo $data->nama_lengkap;}?>
								
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Pengaturan</li>
								<li><a href="<?php base_url()?>ubah_password">Ubah Password</a></li>
								<li class="divider"></li>
								
								<li><a href="<?php base_url()?>logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		