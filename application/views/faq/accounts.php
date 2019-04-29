<!-- Features Jobs -->
		<div class="section gray padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3>Account to be Updated</h3>
						</div>						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">						
							<?php if($users->id) {  ?>								
									<span href="#" class="job-listing with-apply-button">
										<div class="job-listing-details">
											<!-- Logo -->
											<div class="job-listing-company-logo">
												<img src="<?php echo base_url(); ?>assets/images/user-avatar-small-02.jpg" alt="">
											</div>														
											<!-- Details -->
											<div class="job-listing-description">
												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<h2><?php echo $users->lname . " " . $users->fname; ?></h2>
													<ul>														
														<p data-label="Answer"><?php echo $users->email; ?></p>														
													</ul>													
												</div>												
											</div>											
										</div>
									</span>								
							<?php } ?>							
						</div>
						<!-- Jobs Container / End -->
					</div>
				</div>
			</div>
		</div>
<!-- Featured Jobs / End -->


<!-- Dashboard Headline -->
	<div class="container">
		<div class="jumbotron">	
			<div class="dashboard-headline">
				<h3>Update Permission</h3>							
			</div>	
			<!-- Row -->
			<div class="row">
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">					
						<form action="<?php echo base_url(); ?>users/update/<?php echo $users->id; ?>" method="post">
							<div class="content with-padding padding-bottom-10">
								<div class="row">
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>1 = Admin, <br>2 = Customer</h5>
											<input type="number" name="user_type"   class="with-border">
											
										</div>
									</div>								
									<div class="col-xl-12">
										<div class="submit-field">
											<button type="submit" class="button ripple-effect big margin-top-30">Update Permission</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		<!-- Row / End -->
		</div>
	</div>
			