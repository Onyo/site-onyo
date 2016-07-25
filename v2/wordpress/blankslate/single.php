<?php get_header(); ?>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
		<div class="main-text-banner internal-page-banner">
			<p><span class="main-message">Blog</span> lorem ipsum dolor</p>
		</div>
	</div>
</div>

<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--8-col-desktop">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>

		<footer class="footer">
		<?php get_template_part( 'nav', 'below-single' ); ?>
		</footer>
	</div>
	<div class="mdl-cell mdl-cell--4-col-desktop">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>