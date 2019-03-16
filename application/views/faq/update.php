			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Update an FAQ</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Update an FAQ</li>
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
							<h3><i class="icon-feather-folder-plus"></i> Update FAQ Form</h3>
						</div>

						<form action="<?php echo base_url(); ?>faq/update/<?php echo $faq->id; ?>" method="post">
							<div class="content with-padding padding-bottom-10">
								<div class="row">

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Question</h5>
											<input type="text" name="question" placeholder="Question" value="<?php echo $faq->question; ?>" class="with-border">
											<span class="form_error"><?php echo form_error('question'); ?></span>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Solution</h5>
											<textarea cols="30" rows="5" placeholder="Solution" name="answer" class="with-border"><?php echo $faq->answer; ?></textarea>
											<span class="form_error"><?php echo form_error('answer'); ?></span>
										</div>
									</div>

									<div class="col-xl-12">
										<div class="submit-field">
										<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Update Question</button>
										</div>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			