<?php get_header(); ?>
	<div id="wrapper">
		<div id="content">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<h1><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<div class="post-info">
						<span class="genericon author"><?php the_author(); ?></span>
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
				<div class="navigation index">
					<div class="alignleft"><?php next_posts_link( '&laquo; Older Entries' ); ?></div>
					<div class="alignright"><?php previous_posts_link( 'Newer Entries &raquo;' ); ?></div>
				</div>
			<?php else : ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
	</div>
	
