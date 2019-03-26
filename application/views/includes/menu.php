<<<<<<< HEAD

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="" style="height:130px" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#">Services</a>
						</li>

						<li><a href="#">Case Studies</a>
						</li>

						<li><a href="#">About Us</a>
						</li>

						<li><a href="#">Careers</a>
						</li>

						<li><a href="#">Blog</a>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


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

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
=======

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/itlogop.png" style="height: 80px;" alt="Add Logo here"></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="<?php echo base_url(); ?>dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>

						<li><a href="#">Services</a>
						</li>

						<li><a href="#">Case Studies</a>
						</li>

						<li><a href="<?php echo base_url(); ?>">About Us</a>
						</li>

						<li><a href="#">Careers</a>
						</li>

						<li><a href="#">Blog</a>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

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
			<!-- Right Side Content / End -->
			<div class="right-side">

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="<?php echo base_url(); ?>assets/images/user-avatar-small-01.jpg" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
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
							<li><a href="<?php echo base_url(); ?>dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<!-- <li><a href="#"><i class="icon-material-outline-settings"></i> Settings</a></li> -->
							<li><a href="<?php echo base_url(); ?>logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->
			<?php } ?>

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
>>>>>>> FirstB
