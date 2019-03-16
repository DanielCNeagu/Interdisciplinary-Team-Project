<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth dashboard-header not-sticky">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/itlogop.png" style="height: 80px;" alt="Add logo here"></a>
				</div>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


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

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">					
						<?php if($this->session->userdata('user_type') != '1') { ?>
						<a href="#initchat" class="popup-with-zoom-anim log-in-button button ripple-effect big" style="width: 100%;text-align: center;font-weight:bold;"><i class="icon-feather-plus"></i> Initiate Chat?</a>
						<?php } ?>
						<ul data-submenu-title="Start">
							<li><a href="<?php echo base_url(); ?>dashboard"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> Tickets</a>
								<ul>
									<!-- <li><a href="<?php echo base_url(); ?>tickets/active">Active Tickets</a></li> -->
									<li><a href="<?php echo base_url(); ?>tickets/pending">Pending Tickets</a></li>
									<li><a href="<?php echo base_url(); ?>tickets/">Completed Tickets</a></li>
								</ul>	
							</li>
							<?php if($this->session->userdata('user_type') == '1') { ?>
							<li><a href="#"><i class="icon-material-outline-assignment"></i> FAQ</a>
								<ul>
									<li><a href="<?php echo base_url(); ?>faq/add">Add Question and Solutions</a></li>
									<li><a href="<?php echo base_url(); ?>faq">View older Questions</a></li>
								</ul>	
							</li>
							<?php } ?>
						</ul>

						<ul data-submenu-title="Account">
							<!-- <li><a href="#"><i class="icon-material-outline-group"></i> Users</a></li> -->
							<!-- <li><a href="<?php echo base_url(); ?>profile"><i class="icon-material-outline-settings"></i> Settings</a></li> -->
							<li><a href="<?php echo base_url(); ?>logout"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			<?php
						if($this->session->flashdata('notification')) {
							echo $this->session->flashdata('notification');
						}
					?>
			