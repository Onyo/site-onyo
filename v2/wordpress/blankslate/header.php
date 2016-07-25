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
		<header class="mdl-layout__header mdl-layout__header--transparent">
		    <div class="mdl-layout__header-row">
		      <!-- Title -->
		      <span class="mdl-layout-title">
		      		<!-- functional image -->
		      		<a href="http://localhost/onyo/website/v2/wordpress/index.php">
  						<img src="<?php echo get_template_directory_uri(); ?>/css/assets/main-logo-onyo.png" alt="Onyo home">
					</a>
		      </span>
		      <!-- Add spacer, to align navigation to the right -->
		      <div class="mdl-layout-spacer"></div>
		      <!-- Navigation -->
		      <nav class="mdl-navigation">
				<?php 
					$newsArgs = array( 'post_type' => 'main-navigation', 'order'=> 'ASC'); 
					$newsLoop = new WP_Query( $newsArgs ); 

					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<a class="mdl-navigation__link <?php the_field('highlightclass'); ?>" title="<?php the_field('title'); ?>" href="<?php the_field('href'); ?>"><?php the_field('label'); ?></a>
				<?php endwhile; ?>


	        	<a class="mdl-navigation__link change-lang current" href="">EN</a>
	        	<a class="mdl-navigation__link change-lang" href="">PT</a>
		      </nav>
		    </div>
		</header>
		<div class="mdl-layout__drawer">
		    <span class="mdl-layout-title">
		    	<img src="<?php echo get_template_directory_uri(); ?>/css/assets/main-logo-onyo.png" alt="Onyo home">
		    </span>
	      	<nav class="mdl-navigation">
				<?php 
					$newsArgs = array( 'post_type' => 'main-navigation', 'order'=> 'ASC'); 
					$newsLoop = new WP_Query( $newsArgs ); 

					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<a class="mdl-navigation__link" title="<?php the_field('title'); ?>" href="<?php the_field('href'); ?>"><?php the_field('label'); ?></a>
				<?php endwhile; ?>
	      	</nav>
		</div>
		<!-- END MOBILE MENU -->
		<main class="mdl-layout__content">
<!--	
<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
	<h1>Ola</h1>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'blankslate' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									) );
								?>
							</nav>
						<?php endif; ?> -->