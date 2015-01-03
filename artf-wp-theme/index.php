<?php get_header(); ?>
	<div class="container">
		<div id="content" class="col-sm-9 col-xs-12">
			<?php if ( have_posts() ) : ?>
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
				<div class="post-footer">
					<?php comments_popup_link( '0 Comments', '1 Comment', '% Comments', 'genericon comment' ); ?>
				</div>
				<hr>
			</div>
			<?php endwhile; ?>
			<div class="blognav">
				<div class="alignleft"><?php next_posts_link( '&laquo; Older Entries' ); ?></div>
				<div class="alignright"><?php previous_posts_link( 'Newer Entries &raquo;' ); ?></div>
			</div>
			<?php else : ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
	</div>
