<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/import/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy|Roboto|Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-style" role="navigation">
      <div class="container">
        <div class="col-xs-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="/">A Room Too Far</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/">About</a></li>
              <li><a href="/blog">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
	<div id="cover">
		<div id="fade"></div>
	</div>
