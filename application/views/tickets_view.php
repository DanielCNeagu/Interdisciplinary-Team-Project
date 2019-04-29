<!-- Features Jobs -->
		<div class="section gray padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3><?php echo $type; ?> Tickets</h3>
							<a href="<?php echo base_url(); ?>dashboard" class="headline-link">Back to Dashboard</a>
						</div>						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">												
							<?php if(count($tickets) > 0) {  $x = 1; ?>
								<?php foreach ($tickets as $t) { ?>
									<?php if($this->session->userdata('user_type') > 1){ ?>
										<?php if ($t->created_by == $this->session->userdata('user_id')) { ?>
											<span href="#" class="job-listing with-apply-button">
												<div class="job-listing-details">
													<!-- Logo -->
													<div class="job-listing-company-logo">														
														<img src="<?php echo base_url(); ?>assets/images/user-avatar-small-02.jpg" alt="">
														<p><?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></p>
													</div>														
													<!-- Details -->
													<div class="job-listing-description">																				
														<h3 class="job-listing-title"><?php echo ($t->status=='1') ? 'New' : ($t->status=='2') ? 'Active' : 'Closed'; ?></h3>
														<hr>
														<!-- Job Listing Footer -->
														<div class="job-listing-footer">
															<p class="job-listing-title">ID: <?php echo $x++; ?></p>
															<h4>Title: <?php echo $t->query; ?></h4>																									
															<p class="job-listing-title">Review: <?php echo $t->review; ?></p>																									
														</div>												
													</div>
													<a href="<?php echo base_url(); ?>chat/view/<?php echo $t->id; ?>" class="button ripple-effect">View</a>																										
												</div>
											</span>
											<hr>
										<?php } ?>
									<?php }else{ ?>
										<span href="#" class="job-listing with-apply-button">
											<div class="job-listing-details">
												<!-- Logo -->
												<div class="job-listing-company-logo">
													<img src="<?php echo base_url(); ?>assets/images/user-avatar-small-02.jpg" alt="">																										
												</div>														
												<!-- Details -->
												<div class="job-listing-description">																																
													<h3 class="job-listing-title"><?php echo ($t->status=='1') ? 'New' : ($t->status=='2') ? 'Active' : 'Closed'; ?></h3>
													<hr>
													<!-- Job Listing Footer -->
													<div class="job-listing-footer">
														<p class="job-listing-title">ID: <?php echo $x++; ?></p>
														<h4>Title: <?php echo $t->query; ?></h4>																									
														<p class="job-listing-title">Review: <?php echo $t->review; ?></p>																									
													</div>												
												</div>
												<?php if($this->session->userdata('user_type') < 2){ ?>
													<a href="<?php echo base_url(); ?>chat/view/<?php echo $t->id; ?>" class="button ripple-effect">View</a>																									
												<?php } ?>
											</div>
										</span>
										<hr>
									<?php } ?>
								<?php } ?>
							<?php } ?>													
						</div>
						<!-- Jobs Container / End -->
					</div>
				</div>
			</div>
		</div>
<!-- Featured Jobs / End -->



									
									
									