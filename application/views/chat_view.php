<!-- Dashboard Headline -->
<div class="container">
	<div class="jumbotron"> 
<!-- Dashboard Headline -->
<div class="container">
	<div class="jumbotron">
		<div class="dashboard-headline">
			<h3>Chat Page</h3>		
		</div>			
	
		<div class="row">
			<div class="messages-container margin-top-0" style="width:100%;">
				<div class="messages-container-inner">
					<!-- Message Content -->
					<div class="message-content">
						<div class="messages-headline">
							<h2>Ticket ID: <?php echo $query->id ?> </h2>								
							<b><i>The Issue: <?php echo $query->query; ?></i></b>								
							<a href="#" class="message-action">									
								<?php if($this->session->userdata('user_type') == '1' && $query->status < 3) { ?>
									<button 
										onclick="location.href = '<?php echo base_url(); ?>chat/close_project/<?php echo $query->id; ?>'"
										class="button ripple-effect" 
										style="float: right;max-height: 29px;padding: 3px 19px;margin-left: 10px; background-color: #CD5C5C;">
										Close Ticket
									</button>
								<?php } ?>
							</a>								
						</div>							
						<!-- Message Content Inner -->
						<div class="message-content-inner" style="overflow-y: scroll; height: 350px; background: #D3D3D3;">
							<div class="message-bubble  <?php echo ($query->created_by == $this->session->userdata('user_id')) ? 'me' : ''; ?>">
								<div class="message-bubble-inner">
									<div class="message-text" style="background:black;color:white;font-weight:bold;"><p>Query: <?php echo $query->query; ?></p></div>
									</div>
								</div>
								<div class="clearfix"></div>
								<span id="msgslist">
									<?php if(count($chat) > 0) { ?>
									<?php foreach ($chat as $c) { ?>
									<div class="message-bubble <?php echo ($c->created_by == $this->session->userdata('user_id')) ? 'me' : ''; ?>">
										<div class="message-bubble-inner">
											<div class="message-text"><p><?php echo $c->msg; ?></p></div>
										</div>
									</div>
									<div class="clearfix"></div>
									<?php } ?>
									<?php } ?>
								</span>
								<?php if(!empty($query->review)) { ?>
									<div class="clearfix"></div>
									<div class="message-bubble">
										<div class="message-bubble-inner">
											<div class="message-text" style="background:green;color:white;font-weight:bold;"><p>Feedback: <?php echo $query->review; ?></p></div>
										</div>
									</div>
									<div class="clearfix"></div>
								<?php } ?>
							</div>
							<?php if($query->status < 3) { ?>
								<form method="post" action="<?php echo base_url(); ?>chat/add/<?php echo $query->id; ?>">
									<div class="message-reply">
										<textarea cols="1" rows="1" name="msg" placeholder="Please Enter Your Message Here" style="font-size: 14px" required></textarea>
										<button type="submit" class="button ripple-effect" style="background-color: #9DC183;">Reply</button>
									</div>
								</form>
							<?php } ?>
							<?php if($query->status > 2 && empty($query->review) && $this->session->userdata('user_type')!='1') { ?>
								<form method="post" action="<?php echo base_url(); ?>chat/feedback/<?php echo $query->id; ?>">
									<div class="message-reply">
										<textarea cols="1" rows="1" name="feedback" placeholder="Please Enter Your Feedback Here" style="font-size: 14px"></textarea>
										<button class="button ripple-effect" style="background-color: #2E8B57;">Send Feedback</button>
									</div>
								</form>
							<?php } ?>
						</div>
					</div>
					<!-- Message Content -->
				</div>
			</div>
		</div>
	</div>
</div>

							