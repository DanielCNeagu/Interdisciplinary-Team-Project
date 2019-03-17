			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>FAQ List</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>FAQs</li>
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
							<h3><i class="icon-feather-folder-plus"></i> FAQ List</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-12 table-responsive">
									<table class="basic-table">
										<tbody>
											<tr>
												<th>Sr #</th>
												<th>Question</th>
												<th>Actions</th>
											</tr>
											<?php if(count($faqs) > 0) { ?>
											<?php foreach ($faqs as $faq) { $x = 1; ?>
											<tr>
												<td data-label="Sr #"><?php echo $x++; ?></td>
												<td data-label="Question"><?php echo $faq->question; ?></td>
												<td data-label="Actions">
													<a href="<?php echo base_url(); ?>faq/update/<?php echo $faq->id; ?>" class="button ripple-effect">Edit/View</a>
													<a href="<?php echo base_url(); ?>faq/delete/<?php echo $faq->id; ?>" onclick="return confirm('Are you use you want to delete?')" class="button ripple-effect">Delete</a>
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

			