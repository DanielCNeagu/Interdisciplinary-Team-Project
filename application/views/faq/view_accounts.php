<!-- Features Jobs -->
		<div class="section gray padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3>Accounts Permissions</h3>
							<a href="<?php echo base_url(); ?>faq" class="headline-link">Browse Q&A</a>
						</div>						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">						
							<?php if($users > 0) {  ?>
								<?php foreach ($users as $user) { ?>
									<span href="#" class="job-listing with-apply-button">
										<div class="job-listing-details">
											<!-- Logo -->
											<div class="job-listing-company-logo">
												<img src="<?php echo base_url(); ?>assets/images/user-avatar-small-02.jpg" alt="">
											</div>														
											<!-- Details -->
											<div class="job-listing-description">
												<p class="job-listing-title"></p>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<?php if($user->user_type < 2) { ?>
														<h2>Admin</h2>
													<?php }else if($user->user_type > 1){ ?>
														<h2>Normal</h2>
													<?php } ?>
													<h3><?php echo $user->lname . " " . $user->fname ?></h3>
													<ul>														
														<p data-label="Answer"><?php echo $user->email; ?></p>														
													</ul>																										
												</div>												
											</div>
											<a href="<?php echo base_url(); ?>user/update/<?php echo $user->id; ?>" class="button ripple-effect" style="width: 75px; margin: 5px;">Edit</a>
											<a href="<?php echo base_url(); ?>user/delete/<?php echo $user->id; ?>" onclick="return confirm('Are you use you want to delete?')" class="button ripple-effect" style="width: 75px; color: black; margin: 5px;">Delete</a>																													
										</div>
									</span>
									
								<?php } ?>
							<?php } ?>							
						</div>
						<!-- Jobs Container / End -->
					</div>
				</div>
			</div>
		</div>
<!-- Featured Jobs / End -->
