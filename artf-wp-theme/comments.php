<h2><?php
		$numComments = get_comments_number( get_the_ID() );
		if ($numComments == "1") {
			$numComments = $numComments . " Comment";
		} else {				
			$numComments = $numComments . " Comments";
		}
		echo $numComments
	?></h2>
<?php if($comments) : ?>
	<ul id="comments">
  	<?php foreach($comments as $comment) : ?>
		<li id="comment-<?php comment_ID(); ?>">
			<?php if ($comment->comment_approved == '0') : ?>
				<p>Your comment is awaiting approval</p>
			<?php endif; ?>
			<div class="comment-info">
				<span class="genericon author"><?php echo get_comment_author(get_comment_ID()); ?></span>
				<span class="genericon date"><?php comment_date(); ?></span>
			</div>
			<?php comment_text(); ?>
		</li>
		<hr>
	<?php endforeach; ?>
	</ul>
<?php else : ?>
	<p>No comments have been posted yet.</p>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
				<label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1">
				<label for="email"><small>Email (will not be published) <?php if($req) echo "(required)"; ?></small></label>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2">
				<label for="url"><small>Website</small></label>
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3">
			<?php endif; ?>
			<label for="comment-body"><small>Comment</small></label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
			<input name="submit" type="submit" class="submit" tabindex="5" value="Submit Comment">
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>