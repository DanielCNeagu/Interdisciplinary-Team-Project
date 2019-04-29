<!-- Dashboard Headline -->
	<div class="container">
		<div class="jumbotron"> 
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Howdy, <?php echo $this->session->userdata('fname'); ?>!, Welcote to Admin Page </h3>
				<span>We are glad to see you again!</span>				
			</div>   
	
			<!-- Fun Facts Container -->
			<div class="fun-facts-container">				
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<a class="fun-fact-text" href="<?php echo base_url(); ?>tickets/active">						
						<span>Active Tickets</span>
						<h4><?php echo $active->count; ?></h4>					
					</a>					
					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
				</div>				
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<a class="fun-fact-text" href="<?php echo base_url(); ?>tickets/index">						
						<span>Completed Tickets</span>
						<h4><?php echo $completed->count; ?></h4>					
					</a>					
					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<a class="fun-fact-text" href="<?php echo base_url(); ?>tickets/pending">						
						<span>New Tickets</span>
						<h4><?php echo $pending->count; ?></h4>					
					</a>
					<div class="fun-fact-icon"><i class="icon-material-outline-group"></i></div>
				</div>
			</div>

			<br><br><br><br><hr>
			<p>
				<strong>
					Total amount of satisfied customers so far:
				</strong>
			</p>
			<div class="fun-fact" data-fun-fact-color="#36bd78" style="width: 100%; background: #ADD8E6;">
				<div class="fun-fact-text">
					<span>Total Tickets</span>
					<h4><?php echo $active->count + $pending->count + $completed->count; ?> </h4>
				</div>
				<div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
			</div>

		</div>
	</div>
			
	
