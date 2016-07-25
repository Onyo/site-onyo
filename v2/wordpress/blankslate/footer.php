
</main>
<footer class="mdl-mega-footer" role="contentinfo">
	<div class="mdl-mega-footer__middle-section">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--2-col-desktop">
				<a class="functional-image-onyo-logo" href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/css/assets/footer-logo-onyo.png" alt="Onyo home">
				</a>
			</div>
			<div class="mdl-cell mdl-cell--3-col-desktop navigation-block">
		      	<nav class="mdl-navigation">
		      		<ul>  
						<?php 
							$newsArgs = array( 'post_type' => 'footer-navigation', 'order'=> 'ASC'); 
							$newsLoop = new WP_Query( $newsArgs ); 

							while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
							<li><a class="<?php the_field('highlightclass'); ?>" title="<?php the_field('title'); ?>" href="<?php the_field('href'); ?>"><?php the_field('label'); ?></a></li>
						<?php endwhile; ?>
		      		</ul>
		      	</nav>
			</div>
			<?php 
				$newsArgs = array( 'post_type' => 'contact-phone', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
					<div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--1-offset-desktop contact">
						<h3>NY <span><?php the_field('nyphone'); ?></span></h3>
					</div>
					<div class="mdl-cell mdl-cell--2-col-desktop contact">
						<h3>RJ <span><?php the_field('rjphone'); ?></span></h3>
					</div>
					<div class="mdl-cell mdl-cell--2-col-desktop contact">
						<h3>SP <span><?php the_field('spphone'); ?></span></h3>
					</div>
			<?php endwhile; ?>
		</div>
	</div>
</footer>

</div><!-- END LAYOUT -->
<script src="<?php echo get_template_directory_uri(); ?>/lib/material-design-lite/material.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>