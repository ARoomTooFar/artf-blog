<?php get_header(); ?>
	<div class="container">
		<div id="content">
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<h1><a href="<?php the_permalink(); ?>" title="Permanent Link to '<?php the_title_attribute(); ?>'"><?php the_title(); ?></a></h1>
					<div class="post-info">
						<span class="genericon author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Get more posts by <?php the_author_meta( 'display_name' ); ?>"><?php the_author_meta( 'display_name' ); ?></a></span>
						<span class="genericon date"><?php the_time( 'F j, Y' ); ?></span>
					</div>
				</div>
				<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					
				</div>
				<hr>
			</div>
			<?php endwhile; ?>
			<?php comments_template(); ?> 
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
	</div>
	