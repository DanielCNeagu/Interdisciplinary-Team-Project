<!-- Customer Header Container -->
<header id="header-container" class="fullwidth">
	<div id="header">
		<div class="container">			
			<!-- Left Side Content -->
			<div class="left-side">				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url(); ?>logout"><img src="<?php echo base_url(); ?>assets/images/itlogop.png" style="height: 80px; border-radius: 15%;" alt="Add Logo here"></a>
				</div>
				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li>
							<a href="<?php echo base_url(); ?>logout" ><i class="icon-material-outline-home"></i> 
								Home
							</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>futures" ><i class="icon-material-outline-book"></i> 
								About Us
							</a>
						</li>
					</ul>
				</nav>				
			</div>
			<!-- Right Side Content -->
			<?php if($this->session->userdata('is_logged_in') != true) { ?>
				<div class="right-side">
					<div class="header-widget">
						<a href="<?php echo base_url(); ?>login" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Log In</span></a>
					</div>
					<div class="header-widget">
						<a href="<?php echo base_url(); ?>register" class="log-in-button"><i class="icon-feather-user-plus"></i> <span>Register</span></a>
					</div>
					<!-- Mobile Navigation Button -->
					<span class="mmenu-trigger">
						<button class="hamburger hamburger--collapse" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</span>
				</div>
			<?php } else { ?>
				<!-- Right Side Content / User SubMenu -->
				<div class="right-side">
					<div class="header-widget">
						<div class="header-notifications user-menu">
							<div class="header-notifications-trigger">
								<a href="#"><div class="user-avatar status-online"><img src="<?php echo base_url(); ?>assets/images/user-avatar-small-01.jpg" alt=""></div></a>
							</div>
							<div class="header-notifications-dropdown">
								<div class="user-status">
									<!-- User Name / Avatar -->
									<div class="user-details">
										<div class="user-avatar status-online"><img src="<?php echo base_url(); ?>assets/images/user-avatar-small-01.jpg" alt=""></div>
										<div class="user-name">
											<?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?> <span><?php echo ($this->session->userdata('user_type')=='1') ? 'Admin' : 'User'; ?></span>
										</div>
									</div>
								</div>							
								<ul class="user-menu-small-nav">
									<li><a href="<?php echo base_url(); ?>dashboard"><i class="icon-material-outline-dashboard"></i> My Dashboard</a></li>
									<li><a href="<?php echo base_url(); ?>logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Mobile Navigation Button -->
					<span class="mmenu-trigger">
						<button class="hamburger hamburger--collapse" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</span>
				</div>
				<!-- Right Side Content -->
			<?php } ?>
		</div>
	</div>
</header>

