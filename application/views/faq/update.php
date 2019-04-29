<!-- Features Jobs -->
		<div class="section gray padding-top-65 padding-bottom-75">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">						
						<!-- Section Headline -->
						<div class="section-headline margin-top-0 margin-bottom-35">
							<h3>Ticket to be Updated</h3>
						</div>						
						<!-- Jobs Container -->
						<div class="listings-container compact-list-layout margin-top-35">						
							<?php if($faq->id) { $x = 1; ?>								
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
			<h3>New Solution</h3>							
		</div>	
		<!-- Row -->
		<div class="row">
			<!-- Dashboard Box -->
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">					
					<form action="<?php echo base_url(); ?>faq/update/<?php echo $faq->id; ?>" method="post">
						<div class="content with-padding padding-bottom-10">
							<div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Update Question</h5>
										<p><small> (optional)</small></p>
										<input type="text" name="question" placeholder="Enter a question customer might have" value="<?php echo $faq->question; ?>" class="with-border">
										<span class="form_error"><?php echo form_error('question'); ?></span>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Update Solution</h5>
										<p><small>(any new version will replace the old version)</small></p>
										<textarea cols="30" rows="5" placeholder="Solution" name="answer" class="with-border"><?php echo $faq->answer; ?></textarea>
										<span class="form_error"><?php echo form_error('answer'); ?></span>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="submit-field">
										<button type="submit" class="button ripple-effect big margin-top-30">Update Ticket</button>
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
			