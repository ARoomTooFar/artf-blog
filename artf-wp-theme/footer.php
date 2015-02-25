	<div id="footer" class="col-xs-12">
		<p class="text-center">&copy; 2014 - 2015 A Room Too Far</p>
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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57656001-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>