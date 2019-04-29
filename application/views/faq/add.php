<!-- Dashboard Headline -->
<div class="container">
	<div class="jumbotron">
		<div class="dashboard-headline">
			<h3>Add Q&A to Database</h3>	
		</div>
		<div class="row">
			<!-- Dashboard Box -->
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> Make the title as short as possible, and provide as much detail for the soluton</h3>
					</div>
					<form action="<?php echo base_url(); ?>faq/add" method="post">
						<div class="content with-padding padding-bottom-10">
							<div class="row">
								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Title</h5>
											<input type="text" name="question" placeholder="Ex: Networking" value="<?php echo set_value('question'); ?>" class="with-border">
											<span class="form_error"><?php echo form_error('question'); ?></span>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="submit-field">
											<h5>Solution</h5>
											<textarea cols="30" rows="5" placeholder="Ex: Press and hold the Reset button for 10 seconds. NOTE: Resetting your router to its default factory settings will also reset your router's password. The router's default password is “admin” as for the username, just leave the field blank." name="answer" class="with-border"><?php echo set_value('answer'); ?></textarea>
											<span class="form_error"><?php echo form_error('answer'); ?></span>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="submit-field">
										<button type="submit" class="button ripple-effect big margin-top-30">Submit</button>
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