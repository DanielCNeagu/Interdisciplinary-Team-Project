			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3><?php echo $type; ?> Tickets</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Tickets</a></li>
						<li><?php echo $type; ?> Tickets</li>
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
							<h3><i class="icon-feather-folder-plus"></i> <?php echo $type; ?> Tickets</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-12 table-responsive">
									<table class="basic-table">
										<tbody>
											<tr>
												<th>Sr #</th>
												<th>Ticket</th>
												<th>Status</th>
												<th>Review</th>
												<th>Actions</th>
											</tr>
											<?php if(count($tickets) > 0) { ?>
											<?php foreach ($tickets as $t) { $x = 1; ?>
											<tr>
												<td data-label="Sr #"><?php echo $x++; ?></td>
												<td data-label="Question"><?php echo $t->query; ?></td>
												<td data-label="Question"><?php echo ($t->status=='1') ? 'Pending' : ($t->status=='2') ? 'Active' : 'Completed'; ?></td>
												<td data-label="Question"><?php echo $t->review; ?></td>
												<td data-label="Actions">
													<a href="<?php echo base_url(); ?>chat/view/<?php echo $t->id; ?>" class="button ripple-effect">View</a>
												</td>
											</tr>
											<?php } ?>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

			