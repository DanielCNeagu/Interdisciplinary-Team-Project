<<<<<<< HEAD
<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>EveryPersonIT</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mmenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tippy.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/snackbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/clipboard.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>


</body>
=======
<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>EveryPersonIT</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mmenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/tippy.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/simplebar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/snackbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/clipboard.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>



<div id="initchat" class="zoom-anim-dialog mfp-hide dialog-with-tabs" style="max-width: 40%;margin: 0 auto;">

	<!--Tabs -->
	<div class="sign-in-form">
		<div class="popup-tabs-container">
			<div class="popup-tab-content" id="chat">
				<div class="welcome-text">
					<h3 style="color:white;">Please describe the nature of your issue to the Agent!</h3>
				</div>
				<form method="post" action="<?php echo base_url(); ?>chat">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="question" placeholder="Your query" required/>
					</div>
					<button class="button full-width button-sliding-icon ripple-effect" type="submit">Chat now <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php if($this->uri->segment(2)=='view' && $this->uri->segment(1)=='chat') { ?>
<script type="text/javascript">

// function checkMsgs()
// {
// 	$.ajax({
// 	    url: "<?php echo base_url(); ?>chat/check/",
// 	    async: false,
// 	    type: "POST",
// 	    data: { ticket_id: <?php echo $query->id; ?>},
// 	    dataType: "html",
// 	    error: function(res) {
// 	      alert(res.responseText);
// 	    },
// 	    success: function(res) {
// 	      $('#msgslist').html(res);
// 	    }
// 	});
// }

// checkMsgs();

setInterval(function()
{
	$.ajax({
	    url: "<?php echo base_url(); ?>chat/check/",
	    async: false,
	    type: "POST",
	    data: { ticket_id: <?php echo $query->id; ?>},
	    dataType: "html",
	    error: function(res) {
	      alert(res.responseText);
	    },
	    success: function(res) {
	      $('#msgslist').html(res);
	    }
	});
}, 1000);

</script>
<?php } ?>

</body>
>>>>>>> FirstB
</html>