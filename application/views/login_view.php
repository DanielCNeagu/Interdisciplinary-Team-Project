<!-- Homepage Headline -->
<div class="container">
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 offset-xl-3">
					<div class="login-register-page">
						<div class="welcome-text">
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="container">
			<div class="row">
				<div class="col-xl-5 offset-xl-3">
					<div class="login-register-page">
						<div class="welcome-text">							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-5 offset-xl-3">
					<div class="login-register-page">
						<div class="welcome-text">							
						</div>
					</div>
				</div>
			</div>
		</div>			
		<div class="container">
			<div class="row">
				<div class="col-xl-5 offset-xl-3">
					<div class="login-register-page">
						<div class="welcome-text">
							<h3>Please login </h3>
							<h3></h3><h3></h3><h3></h3>
							<span>Don't have an account? <a href="<?php echo base_url(); ?>register">Sign Up!</a></span>
							<?php
								if($this->session->flashdata('notification')) {
									echo $this->session->flashdata('notification');
								}
							?>
						</div>
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
							<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<!-- Test Bar -->
		<div class="container">
			<div class="row">
				<div class="col-xl-5 offset-xl-3">
					<div class="login-register-page">
						<!-- Welcome Text -->
						<div class="welcome-text">
							<br>
							<h3>For Admin Testing</h3>
							<br>
							<h4>Email: admin@admin.com </h4>
							<h4>Password: admin</h4>
							<hr>
							<br>
							<h3>For Customer Testing</h3>
							<br>
							<h4>Email: customer@customer.com </h4>
							<h4>Password: customer</h4>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

