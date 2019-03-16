<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Chat</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Tickets</a></li>
						<li>Chat</li>
					</ul>
				</nav>
			</div>
	
			
	
			<div class="row">
				<div class="messages-container margin-top-0" style="width:100%;">

					<div class="messages-container-inner">
						<!-- Message Content -->
						<div class="message-content">

							<div class="messages-headline">
								<h4>Tocket # <?php echo $query->id; ?></h4>
								<a href="#" class="message-action">
									<b>Query: <?php echo $query->query; ?></b>
									<?php if($this->session->userdata('user_type') == '1') { ?>
									<button 
										onclick="location.href = '<?php echo base_url(); ?>chat/close_project/<?php echo $query->id; ?>'"
										class="button ripple-effect" 
										style="float: right;max-height: 29px;padding: 3px 19px;margin-left: 10px;">
										Close Ticket
									</button>
									<?php } ?>
								</a>
							</div>
							
							<!-- Message Content Inner -->
							<div class="message-content-inner" style="overflow-y: scroll; height: 350px;">
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
											<div class="message-text" style="background:black;color:white;font-weight:bold;"><p>Feedback: <?php echo $query->query; ?></p></div>
										</div>
									</div>
									<div class="clearfix"></div>
									<?php } ?>
							</div>
							<?php if($query->status < 3) { ?>
							<form method="post" action="<?php echo base_url(); ?>chat/add/<?php echo $query->id; ?>">
								<div class="message-reply">
									<textarea cols="1" rows="1" name="msg" placeholder="Your Message" required></textarea>
									<button type="submit" class="button ripple-effect">Reply</button>
								</div>
							</form>
							<?php } ?>
							<?php if($query->status > 2 && empty($query->review) && $this->session->userdata('user_type')!='1') { ?>
							<form method="post" action="<?php echo base_url(); ?>chat/feedback/<?php echo $query->id; ?>">
								<div class="message-reply">
									<textarea cols="1" rows="1" name="feedback" placeholder="Feedback"></textarea>
									<button class="button ripple-effect">Send Feedback</button>
								</div>
							</form>
							<?php } ?>

						</div>
						<!-- Message Content -->

					</div>
				</div>
			</div>


