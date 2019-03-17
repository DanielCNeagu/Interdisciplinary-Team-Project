			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Search</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Search</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
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
							<div class="col-xl-12">
								<center>
									<div class="submit-field">
										<a href="#initchat" class="popup-with-zoom-anim log-in-button button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Initiate Chat?</a>
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->


