<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Howdy, <?php echo $this->session->userdata('fname'); ?> <?php echo $this->session->userdata('lname'); ?>!</h3>
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>
	
			<!-- Fun Facts Container -->
			<div class="fun-facts-container">
				<div class="fun-fact" data-fun-fact-color="#36bd78">
					<div class="fun-fact-text">
						<span>Total Tickets</span>
						<h4>22</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-gavel"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#b81b7f">
					<div class="fun-fact-text">
						<span>Completed Tickets</span>
						<h4>4</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-business-center"></i></div>
				</div>
				<div class="fun-fact" data-fun-fact-color="#efa80f">
					<div class="fun-fact-text">
						<span>Total Users</span>
						<h4>28</h4>
					</div>
					<div class="fun-fact-icon"><i class="icon-material-outline-group"></i></div>
				</div>
			</div>

			<!-- Row -->
			<div class="row">
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box">
						<div class="headline">
							<h3><i class="icon-material-outline-assignment"></i> Recent Tickets</h3>
						</div>
						<div class="content">
							<ul class="dashboard-box-list">
								<li>
									<div class="invoice-list-item">
									<strong>Marius Pal</strong>
										<ul>
											<li><span class="unpaid">Pending</span></li>
											<li>Ticket Number: TN-326</li>
											<li>Date: 12/08/2018</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button">View</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Daniel Costel</strong>
										<ul>
											<li><span class="unpaid">Pending</span></li>
											<li>Ticket Number: TN-327</li>
											<li>Date: 12/08/2018</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button">View</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Lucian Nechita</strong>
										<ul>
											<li><span class="paid">Completed</span></li>
											<li>Ticket Number: TN-322</li>
											<li>Date: 12/08/2018</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button">View</a>
									</div>
								</li>
								<li>
									<div class="invoice-list-item">
									<strong>Keith ForgotHisSurname</strong>
										<ul>
											<li><span class="paid">Completed</span></li>
											<li>Ticket Number: TN-322</li>
											<li>Date: 12/08/2018</li>
										</ul>
									</div>
									<!-- Buttons -->
									<div class="buttons-to-right">
										<a href="#" class="button">View</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->