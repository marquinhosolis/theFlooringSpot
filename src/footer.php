<footer>
	<div class="ctaFooter">
		<div class="container">
			<h3>Schedule your free estimate</h3>
			<p>Our flooring experts are ready to discuss your project and help you find the floors of your dreams! Contact us to get started today.</p>
			<a href="<?php echo site_url('/contact-us/'); ?>" class="btn">Get your free estimate</a>
		</div>
	</div>
	<div class="footerMain">
		<div class="container">
			<div class="footerMainArea">
				<div class="logoFooter">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_theFlooringSpot.svg" alt="The Flooring Spot Logo">
				</div>
				<div class="footerPhone">
					<a href="tel:407.406.6778">Call us <br><strong>407.406.6778</strong></a>
				</div>
				<div class="footerSocialLinks">
					<a href="https://www.facebook.com/theflooringspot" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/theflooringspot/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="footerMainArea">
				<p>Our Showrooms</p>
				<address>
					<a href="#">
						<strong>Ocoee</strong><br>
						11920 W Colonial Dr Ocoee, FL 34761
						407.406.6778
					</a>
				</address>
				<address>
					<a href="#">
						<strong>Winter Garden</strong>
						(Coming soon!)
					</a>
				</address>
			</div>
			<div class="footerMainArea">
				<p>
					<strong>Stay inspired!</strong><br>
					Get the latest promotions, news,
					and trends delivered to your inbox.
				</p>
				<?php echo do_shortcode('[formidable id=2]'); ?>
			</div>
		</div>
	</div>
	<div class="dppaLogoWrapper">
		<?php require_once('partials/logo-dppa-footer.php'); ?>
	</div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="https://use.fontawesome.com/1983581bba.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script>
	new WOW().init();
</script>
<?php wp_footer(); ?>
</body>

</html>