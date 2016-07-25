<?php
/**
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
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
		<div class="main-text-banner internal-page-banner">
			<p><span class="main-message">Blog</span> lorem ipsum dolor</p>
		</div>
	</div>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col-desktop">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();?>
				<article>
					<header>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<span class="entry-meta"><?php the_date(); ?></span>
					</header>
					<section>
						<?php the_post_thumbnail(); ?>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink() ?>" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">		
						<?php if (qtranxf_getLanguage() == 'en'): ?>
							Read more
						<?php elseif (qtranxf_getLanguage() == 'es'): ?>
							Read more
						<?php else: ?>
							Leia mais
						<?php endif; ?></a>
					</section>
				</article>
			<?php
			endwhile;

			the_posts_pagination( array(
				'mid_size'  => 2,
				'prev_text' => __( 'Back', 'textdomain' ),
				'next_text' => __( 'Onward', 'textdomain' ),
			) );

			?>
		<?php endif; ?>
	</div>
	<div class="mdl-cell mdl-cell--4-col-desktop">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
