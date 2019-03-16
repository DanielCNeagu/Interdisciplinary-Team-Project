
<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="<?php echo base_url(); ?>register">Sign Up!</a></span>
					<?php
						if($this->session->flashdata('notification')) {
							echo $this->session->flashdata('notification');
						}
					?>
				</div>
					
				<!-- Form -->
				<form method="post" action="<?php echo base_url(); ?>login">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email" value="<?php echo set_value('email'); ?>" id="emailaddress" placeholder="Email Address" required/>
						<span class="form_error"><?php echo form_error('email'); ?></span>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="Password" required/>
						<span class="form_error"><?php echo form_error('password'); ?></span>
					</div>
				
					<!-- Button -->
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->