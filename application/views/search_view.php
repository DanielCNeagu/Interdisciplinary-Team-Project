<!-- Menu Headline -->
<div class="container">
	<div class="jumbotron"> 
		<div class="dashboard-headline">
			<h3>Search Results</h3>				
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">
					<div class="headline">
						<h3><i class="icon-material-outline-business-center"></i> Search Result</h3>
					</div>
					<div class="content" style="padding-bottom: 15px;">
						<ul class="dashboard-box-list">
							<?php if(count($result) > 0) { ?>
								<?php foreach($result as $r) { ?>
									<li>
										<div class="job-listing">
											<div class="job-listing-details">
												<div class="job-listing-description">
													<h3 class="job-listing-title"><a href="#">Topic: <?php echo $r->question; ?></a></h3>
													<div class="job-listing-footer">
														<p>Solution: <?php echo $r->answer; ?></p>
													</div>
												</div>
											</div>
										</div>
									</li>
								<?php } ?>
							<?php } ?>
						</ul>
						<hr>
						<div class="col-xl-12">
							<div class="fun-fact" data-fun-fact-color="#36bd78" style="width: 100%; background: #ADD8E6;">
								<div class="submit-field">
									<span><b><i>Not found what you were looking for ?</i></b></span>
									<br>
									<a href="#initchat" class="popup-with-zoom-anim log-in-button button ripple-effect big margin-top-30"> Create Ticket</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Row / End -->
	</div>
</div>

