<!-- footer section start -->
<div class="footer_section layout_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="location_text">
					<ul>
						<li>
							<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="social_icon">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h3 class="footer_text">About Us</h3>
				<p class="lorem_text">Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
			</div>
			<div class="col-md-4">
				<h3 class="footer_text">Recent Properties</h3>
				<div class="image_main">
					<div class="image_10"><img src="<?php echo base_url(); ?>assets/images/img-10.png"></div>
					<div class="image_10"><img src="<?php echo base_url(); ?>assets/images/img-10.png"></div>
				</div>
			</div>
			<div class="col-md-4">
				<h3 class="footer_text">Useful Links</h3>
				<div class="footer_menu">
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="property.html">Property</a></li>
						<li><a href="testimonial.html">Testimonial</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
	<div class="container">
		<p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
	</div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<!-- javascript -->
<script>
	// Material Select Initialization
	$(document).ready(function() {
		$('.mdb-select').materialSelect();
		$('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function() {
			$(this).closest('.select-outline').find('label').toggleClass('active');
			$(this).closest('.select-outline').find('.caret').toggleClass('active');
		});
	});
</script>
</body>

</html>
