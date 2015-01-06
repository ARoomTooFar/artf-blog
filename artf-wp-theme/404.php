<?php get_header(); ?>
	<div class="container">
		<div class="col-sm-9 col-xs-12">
			<h1><a href="<?php the_permalink(); ?>" title="Permanent Link to '<?php the_title_attribute(); ?>'">404 Error</a></h1>
			<p>Page not found!</p>	
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
	</div>
