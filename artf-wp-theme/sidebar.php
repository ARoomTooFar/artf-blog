	<div id="sidebar">
		<h1><?php _e('Categories'); ?></h1>
		<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
		<h1><?php _e('Archives'); ?></h1>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>