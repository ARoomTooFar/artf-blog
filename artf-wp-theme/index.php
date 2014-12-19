<?php get_header(); ?>
	<div id="wrapper">
		<div id="content">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post-header">
					<h1>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>
					<div class="date"><?php the_time( 'M j y' ); ?></div>
					<div class="author"><?php the_author(); ?></div>
				</div>
				<div class="entry clear">
					<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); ?>
					<?php wp_link_pages(); ?>
				</div>
				<div class="post-footer">
					<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
				<div class="navigation index">
					<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
					<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
				</div>
			<?php else : ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
	</div>
	
