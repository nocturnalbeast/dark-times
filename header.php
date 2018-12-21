<!doctype html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lt IE 9]>
		  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<title><?php echo page_title("Boo! I don't exist!"); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		<meta name="generator" content="Anchor CMS">

		<link rel="stylesheet" href="<?php echo theme_url('/css/normalize.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/skeleton.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/fonts.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/main.css'); ?>">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo theme_url('/img/favicons/apple-touch-icon-57x57.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_url('/img/favicons/apple-touch-icon-114x114.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_url('/img/favicons/apple-touch-icon-72x72.png'); ?>" />
		<link rel="apple-touch-icon-preco'); ?>mposed" sizes="144x144" href="<?php echo theme_url('/img/favicons/apple-touch-icon-144x144.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo theme_url('/img/favicons/apple-touch-icon-60x60.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo theme_url('/img/favicons/apple-touch-icon-120x120.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo theme_url('/img/favicons/apple-touch-icon-76x76.png'); ?>" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo theme_url('/img/favicons/apple-touch-icon-152x152.png'); ?>" />
		<link rel="icon" type="image/png" href="<?php echo theme_url('/img/favicons/favicon-196x196.png'); ?>" sizes="196x196" />
		<link rel="icon" type="image/png" href="<?php echo theme_url('/img/favicons/favicon-96x96.png'); ?>" sizes="96x96" />
		<link rel="icon" type="image/png" href="<?php echo theme_url('/img/favicons/favicon-32x32.png'); ?>" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo theme_url('/img/favicons/favicon-16x16.png'); ?>" sizes="16x16" />
		<link rel="icon" type="image/png" href="<?php echo theme_url('/img/favicons/favicon-128.png'); ?>" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#222222" />
		<meta name="msapplication-TileImage" content="<?php echo theme_url('/img/favicons/mstile-144x144.png'); ?>" />
		<meta name="msapplication-square70x70logo" content="<?php echo theme_url('/img/favicons/mstile-70x70.png'); ?>" />
		<meta name="msapplication-square150x150logo" content="<?php echo theme_url('/img/favicons/mstile-150x150.png'); ?>" />
		<meta name="msapplication-wide310x150logo" content="<?php echo theme_url('/img/favicons/mstile-310x150.png'); ?>" />
		<meta name="msapplication-square310x310logo" content="<?php echo theme_url('/img/favicons/mstile-310x310.png'); ?>" />

	    <meta name="theme-color" content="#151515" />

		<?php if(customised()): ?>
			<!-- Custom CSS -->
				<style><?php echo article_css(); ?></style>

			<!--  Custom Javascript -->
				<script><?php echo article_js(); ?></script>
		<?php endif; ?>

	</head>

	<body>

		<script src="<?php echo theme_url('/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/jquery.sidebar.min.js'); ?>"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('.sidebar').sidebar().trigger('sidebar:close');
				$('.sidebar-btn').click(function() {
					$('.sidebar').trigger('sidebar:open');
				});
				$('.close-btn-inbar').click(function() {
					$('.sidebar').trigger('sidebar:close');
				});
				$(document).keyup(function(e) {
					if (e.keyCode === 27) {
						$('.sidebar').trigger('sidebar:close');
					}
				});
				$('.container').click(function() {
					$('.sidebar').trigger('sidebar:close');
				});
			});
		</script>

		<div class="container">
			<header class="top">

				<h1 class="site-title u-full-width center"><?php echo site_name(); ?></h1>

				<h2 class="site-desc center"><?php echo site_description(); ?></h2>

			</header>