<!-- Customer Nav bar -->
<div class="dashboard-container">
	<!-- Dashboard Sidebar -->
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
						<div style="margin-bottom: 570px;">
							<ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>dashboard"><i class="icon-material-outline-dashboard"></i>My Dashboard</a></li>					
							</ul>					
                            <ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>tickets/newTicket"><i class="icon-material-outline-assignment"></i>Create Ticket</a></li>					
							</ul>							
							<ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>tickets/active"><i class="icon-material-outline-assignment"></i>Replied</a></li>						
							</ul>
							<ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>tickets/pending"><i class="icon-material-outline-assignment"></i>Opened</a></li>						
							</ul>
							<ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>tickets/index"><i class="icon-material-outline-assignment"></i>Closed</a></li>						
							</ul>
							<ul data-submenu-title=" ">
                                <li style="font-size: 20px;"><a href="<?php echo base_url(); ?>faq"><i class="icon-material-outline-eye"></i>See More</a></li>						
							</ul>
							
							<ul data-submenu-title="" >
								<li ><a href="#"><i></i></a></li>
							</ul>
							<ul data-submenu-title="" >
								<li ><a href="#"><i></i></a></li>
							</ul>
							<ul data-submenu-title="" >
								<li ><a href="#"><i></i></a></li>
							</ul>

							<ul data-submenu-title="" >
								<li style="font-size: 25px;"><a href="<?php echo base_url(); ?>logout"><i class="icon-material-outline-power-settings-new" style="font-size: 30px;"></i> Logout</a></li>
							</ul>	
                        </div>											
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->
	<!-- Dashboard Content-->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			<?php if($this->session->flashdata('notification')) {
				echo $this->session->flashdata('notification');
					}
						?>
			