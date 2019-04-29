<div class="container">
	<div class="jumbotron"> 			
		<!-- Dashboard Headline -->
		<div class="dashboard-headline">
			<h3>Create <?php echo $type; ?> Tickets</h3>				
		</div>
		<!-- Row -->
		<div class="row">
			<!-- Dashboard Box -->
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> <?php echo $type; ?> Tickets</h3>
					</div>
					<div class="content with-padding padding-bottom-10">
						<div class="row">
							<div class="col-xl-12 table-responsive">
								<?php if ($this->session->userdata('user_type') != '1') { ?>								
									<div class="container">
										<div class="row">
											<div class="col-xl-5 offset-xl-3">
												<div class="login-register-page">
													<div class="welcome-text">
														<a href="#initchat" class="popup-with-zoom-anim log-in-button button ripple-effect big" style="width: 160px; text-align: center; font-weight:bold;"> Create Ticket</a>
														<a href="#initfaq" class="popup-with-zoom-anim log-in-button button ripple-effect big" style="width: 160px; text-align: center; font-weight:bold;"> Search Ticket</a>														
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row / End -->
	</div>
</div>