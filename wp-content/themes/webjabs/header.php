<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A Web Developer has creative set of skills, can do freelance website development work.">
	<meta name="keywords" content="web,design,html,css,html5,css3,development">
	<meta name="author" content="Emmanuel Tabar">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" />
	<?php wp_head(); ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-81195016-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
<body <?php body_class(); ?>>
<?php if(is_front_page()): ?>
	<div class="header-section">
		<div class="site-details-section text-center">
			<div class="table-j">
				<div class="table-cell-j">
					<div class="site-details-section-content">
						<!-- <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo" title="logo" /> -->
						<h3 class="logo-text">&lt;<span>/</span>&gt;</h3>
						<h2>Web Developer</h2>
						<h1>Emmanuel Tabar</h1>
						<a href="/#about" class="btn btn-medium">more info</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-section text-center">
			<?php wp_nav_menu(array('menu' => 'Main')); ?>
		</div>
	</div>
<?php else: ?>
	<div class="header-not-home">
		<div class="menu-section text-center">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/projects/">Projects</a></li>
			</ul>
		</div>
	</div>
<?php endif; ?>

