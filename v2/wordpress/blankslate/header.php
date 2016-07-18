<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/material-design-lite/material.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/onyo.material.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div class="main-bg main-home-bg mdl-js-layout mdl-layout--no-desktop-drawer-button">

		<!-- INIT SITE HEADER -->
		<header class="mdl-layout__header mdl-layout__header--transparent">
		    <div class="mdl-layout__header-row">
		      <!-- Title -->
		      <span class="mdl-layout-title">
		      		<!-- functional image -->
		      		<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/css/assets/main-logo-onyo.png" alt="Onyo home">
					</a>
		      </span>
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Navigation -->=
		      <nav class="mdl-navigation">
		        <a class="mdl-navigation__link" title="About" href="">About</a>
		        <a class="mdl-navigation__link" title="Help" href="">Help</a>
		        <a class="mdl-navigation__link" title="Carrers" href="">Carrers</a>
		        <a class="mdl-navigation__link" title="For restaurants" href="">For restaurants</a>
		      </nav>
		    </div>
		</header>
		<!-- END SITE HEADER -->
		<!-- INIT MOBILE MENU -->
		<div class="mdl-layout__drawer">
		    <span class="mdl-layout-title">Onyo</span>
	      	<nav class="mdl-navigation">
	        	<a class="mdl-navigation__link" title="About" href="">About</a>
	        	<a class="mdl-navigation__link" title="Help" href="">Help</a>
	        	<a class="mdl-navigation__link" title="Carrers" href="">Carrers</a>
	        	<a class="mdl-navigation__link" title="For restaurants" href="">For restaurants</a>
	      	</nav>
		 </div>
		<!-- END MOBILE MENU -->
		<main class="mdl-layout__content">

<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
<?php bloginfo( 'description' ); ?>
<?php get_search_form(); ?>