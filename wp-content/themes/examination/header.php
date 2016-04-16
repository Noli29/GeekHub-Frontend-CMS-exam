<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,700italic,700,600italic,600,800,800italic|Lora:400,700,400italic,700italic|Raleway:400,400italic,600,600italic,700italic,700,800italic,800,900,900italic,100italic,100,300italic,300' rel='stylesheet' type='text/css'>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blog' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="line">
				<div class="left">
					<div id="header-image">
						<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/businessplus_logo.svg" alt="Logo" />
							<span>|</span>
						</a>
					</div>
					<span><i class="fa fa-phone" aria-hidden="true"></i> +9978 8856 999</span>
				</div>

				<nav class="main-navigation" id="site-navigation"  role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</div>

		</div>
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

