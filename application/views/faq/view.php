<!-- Features Jobs -->
		<div class="section gray padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3>Recent Tickets</h3>
							<a href="<?php echo base_url(); ?>faq" class="headline-link">Browse Q&A</a>
						</div>						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">						
							<?php if(count($faqs) > 0) { $x = 1; ?>
								<?php foreach ($faqs as $faq) { ?>
									<span href="#" class="job-listing with-apply-button">
										<div class="job-listing-details">
											<!-- Logo -->
											<div class="job-listing-company-logo">
												<img src="<?php echo base_url(); ?>assets/images/user-avatar-small-02.jpg" alt="">
											</div>														
											<!-- Details -->
											<div class="job-listing-description">
												<p class="job-listing-title">Ticket Number <?php echo $x++; ?></p>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<h2><?php echo $faq->question; ?></h2>
													<ul>														
														<p data-label="Answer"><?php echo $faq->answer; ?></p>														
													</ul>													
												</div>												
											</div>
											<?php if($this->session->userdata('user_type') < 2){ ?>
												<a href="<?php echo base_url(); ?>faq/update/<?php echo $faq->id; ?>" class="button ripple-effect" style="width: 75px; margin: 5px;">Edit</a>
												<a href="<?php echo base_url(); ?>faq/delete/<?php echo $faq->id; ?>" onclick="return confirm('Are you use you want to delete?')" class="button ripple-effect" style="width: 75px; color: black; margin: 5px;">Delete</a>																									
											<?php } ?>
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
			