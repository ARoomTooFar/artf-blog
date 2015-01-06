	<div id="footer" class="col-xs-12">
		<p class="text-center">Background banner art found from Google Images... in the future we could be using your art instead!</p>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/import/jquery/jquery-1.11.2.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/import/bootstrap/js/bootstrap.js"></script>
	<?php wp_footer(); ?>
	<script>
	$('#navbar-items li').each(function () {
    	if ($(this).find('a').attr('href') === window.location.pathname) {
    		$(this).addClass('active');
    	}
	});
	</script>
</body>
</html>