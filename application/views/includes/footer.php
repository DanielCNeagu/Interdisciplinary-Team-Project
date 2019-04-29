<!-- Footer
================================================== -->
<div id="footer">	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<!-- Footer Rows Container -->
					<div class="footer-rows-container">						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">	
								</div>
							</div>
						</div>						
						<!-- Right Side -->
						<div class="footer-rows-right">
							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="https://www.facebook.com/" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="https://www.google.com/" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="https://ie.linkedin.com/" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>							
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>EveryPersonIT</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

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

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

<script id="jsbin-javascript">
$.getJSON("https://bootswatch.com/api/3.json", function (data) {
  var themes = data.themes;
  var select = $("select"); 
  select.show();
  $(".alert").toggleClass("alert-info alert-success");
  $(".alert h4").text("Success!");
  
  themes.forEach(function(value, index){
    select.append($("<option />")
          .val(index)
          .text(value.name));
		  
   });
  
  select.change(function(){
	
    var theme = themes[$(this).val()];
    $("link").attr("href", theme.css);
    $("h1").text(theme.name);
	
  }).change();
  

}, "json").fail(function(){
    $(".alert").toggleClass("alert-info alert-danger");
    $(".alert h4").text("Failure!");
});


</script>


</body>
</html>