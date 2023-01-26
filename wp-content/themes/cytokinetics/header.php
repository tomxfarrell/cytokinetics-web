<?php
/**
 * Header template
 *
 * @author   TF
 * @version  1.0.0
 * @package  
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( '&ndash;', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">

	<div class="container-nav">
		<div class="social-utility-nav">
			<ul id="menu-social">
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-twitter.svg" alt="Twitter">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-linkedin.svg" alt="LinkedIn">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-facebook.svg" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-youtube.svg" alt="Youtube">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/wp-content/themes/cytokinetics/assets/images/icon-glassdoor.svg" alt="Glassdoor">
					</a>
				</li>
			</ul>
			<div class="utility-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'utility' ) ); ?>
			</div>
		</div>
		<div class="row-main">
			<div class="col-logo">
				<a href="/"><img src="/wp-content/themes/cytokinetics/assets/images/logo-cytokinetics.svg" alt="Cytokinetics logo"></a>
			</div>
			<div class="col-main-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
			</div>
		</div>
	</div>

</header>
<nav class="navigation"></nav>
<main class="main">
