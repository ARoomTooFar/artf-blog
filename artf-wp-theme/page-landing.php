<?php
/*
Template Name: Landing Template
*/
?>
<?php get_header(); ?>
	<div class="container">
		<div id="content" class="col-xs-12">
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry clear">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php get_footer(); ?>
	</div>
