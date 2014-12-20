	<div id="sidebar">
		<h1>Categories</h1>
		<ul>
			<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
		</ul>
		<h1>Archives</h1>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>