<?php
/**
 * Template Name: ContactUs
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage blankslate
 * @since blankslate 1.0
 */

get_header(); ?>
<!-- INIT CONTACT PAGE CONTENT -->
 	<!-- main text banner -->
 	<div class="mdl-grid">
 		<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
 			<div class="main-text-banner internal-page-banner">
				<?php 
					$newsArgs = array( 'post_type' => 'restaurant-slide', 'posts_per_page' => 3,
						'meta_key'		=> 'select_page_for_banner_subtitle',
						'meta_value'	=> 'Contact Page');  
					$newsLoop = new WP_Query( $newsArgs ); 

					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<p>
							<span class="main-message"><?php the_title(); ?></span>
							<?php the_field('main_banner_subtitle'); ?>
						</p>
				<?php endwhile; ?>
 			</div>
 		</div>
 	</div>

 	<div class="mdl-grid contact-us-wrapper">
 		<div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--1-offset-desktop">
			<?php echo do_shortcode( '[contact-form-7 id="onyo-form" title="Contact form 1"]' ); ?>
 		</div>
 		<div class="mdl-cell mdl-cell--6-col-desktop">
 			<div class="mdl-grid">
			<?php 
				$newsArgs = array( 'post_type' => 'contact-phone', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
					<div class="mdl-cell mdl-cell--4-col-desktop contact">
						<h3>NY <span><?php the_field('nyphone'); ?></span></h3>
					</div>
					<div class="mdl-cell mdl-cell--4-col-desktop contact">
						<h3>RJ <span><?php the_field('rjphone'); ?></span></h3>
					</div>
					<div class="mdl-cell mdl-cell--4-col-desktop contact">
						<h3>SP <span><?php the_field('spphone'); ?></span></h3>
					</div>
			<?php endwhile; ?>
 			</div>
			<?php 
				$newsArgs = array( 'post_type' => 'contact-restaurants', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
		 			<p><?php the_field('message'); ?></p>
		 			<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="<?php the_field('linkurl'); ?>"><?php the_field('linklabel'); ?></a>
			<?php endwhile; ?>
 		</div>
 	</div>

<!-- END CONTACT PAGE CONTENT -->
<?php get_footer(); ?>