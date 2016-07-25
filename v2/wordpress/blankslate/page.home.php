<?php
/**
 * Template Name: Home
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
	<!-- main text banner -->
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop mdl-cell--12-col">
			<div class="main-text-banner internal-page-banner">
				<?php 
					$newsArgs = array('post_type' => 'restaurant-slide', 'posts_per_page' => 3,
						'meta_key'		=> 'select_page_for_banner_subtitle',
						'meta_value'	=> 'Home Page'); 
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

<section class="secondary-bg what-is even">
	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2><span>What </span> is it?</h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2><span>What </span> is it?</h2>
	<?php else: ?>
		<h2><span>O que</span> é ?</h2>
	<?php endif; ?>
	<div class="mdl-grid">
		<div class="md-cell mdl-cell--2-col-desktop">
			<p class="what-is-it-block">
				<span><img src="<?php echo get_template_directory_uri(); ?>/css/assets/whatisit/house.png"></span>
				<?php 
					$newsArgs = array( 'post_type' => 'what-is-it', 'posts_per_page' => 5); 
					$newsLoop = new WP_Query( $newsArgs ); 
					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<?php the_field('field1'); ?>
				<?php endwhile; ?>
			</p>
		</div>
		<div class="md-cell mdl-cell--3-col-desktop">
			<p class="what-is-it-block">
				<span><img src="<?php echo get_template_directory_uri(); ?>/css/assets/whatisit/food.png"></span>
				<?php 
					$newsArgs = array( 'post_type' => 'what-is-it', 'posts_per_page' => 5); 
					$newsLoop = new WP_Query( $newsArgs ); 
					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<?php the_field('field2'); ?>
				<?php endwhile; ?>
			</p>
		</div>
		<div class="md-cell mdl-cell--2-col-desktop">
			<p class="what-is-it-block">
				<span><img src="<?php echo get_template_directory_uri(); ?>/css/assets/whatisit/clock.png"></span>
				<?php 
					$newsArgs = array( 'post_type' => 'what-is-it', 'posts_per_page' => 5); 
					$newsLoop = new WP_Query( $newsArgs ); 
					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<?php the_field('field3'); ?>
				<?php endwhile; ?>
			</p>
		</div>
		<div class="md-cell mdl-cell--3-col-desktop">
			<p class="what-is-it-block">
				<span><img src="<?php echo get_template_directory_uri(); ?>/css/assets/whatisit/phone.png"></span>
				<?php 
					$newsArgs = array( 'post_type' => 'what-is-it', 'posts_per_page' => 5); 
					$newsLoop = new WP_Query( $newsArgs ); 
					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<?php the_field('field4'); ?>
				<?php endwhile; ?>
			</p>
		</div>
		<div class="md-cell mdl-cell--2-col-desktop">
			<p class="what-is-it-block">
				<span><img src="<?php echo get_template_directory_uri(); ?>/css/assets/whatisit/hand.png"></span>
				<?php 
					$newsArgs = array( 'post_type' => 'what-is-it', 'posts_per_page' => 5); 
					$newsLoop = new WP_Query( $newsArgs ); 
					while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
						<?php the_field('field5'); ?>
				<?php endwhile; ?>
			</p>
		</div>
	</div>
</section>

<section class="secondary-bg how-it-works odd">
	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2><span>How</span> it works?</h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2><span>How</span> it works?</h2>
	<?php else: ?>
		<h2><span>Como </span> funciona ?</h2>
	<?php endif; ?>
	
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--7-col-desktop">
			<div class="mobile-screens-samples-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/mobilescreenssamples/esquerda.png" />
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/mobilescreenssamples/frente.png" />
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/mobilescreenssamples/direita.png" />
			</div>
		</div>
		<div class="mdl-cell mdl-cell--5-col-desktop">
			<?php 
				$newsArgs = array( 'post_type' => 'how-it-works', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
					<h3><?php the_field('title'); ?></h3>
					<p><?php the_field('content'); ?></p>
			<?php endwhile; ?>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--6-col-desktop">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/css/assets/btn-app-store.png" alt="Download the app">
					</a>
				</div>
				<div class="mdl-cell mdl-cell--6-col-desktop">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/css/assets/btn-play-store.png" alt="Download the app">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="secondary-bg about-us odd">
	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2>About <span>us</span></h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2>About <span>us</span></h2>
	<?php else: ?>
		<h2><span>Sobre</span></h2>
	<?php endif; ?>
	
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-desktop mdl-cell--2-offset-desktop">
			<?php 
				$newsArgs = array( 'post_type' => 'about-us', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
					<h3><?php the_field('title'); ?></h3>
					<p><?php the_field('content'); ?></p>
					<a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"><?php the_field('button_text'); ?></a>
			<?php endwhile; ?>
		</div>
		<div class="mdl-cell mdl-cell--6-col carrers">
			<h3>Carrers</h3>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--6-col">
					<p>Mobile Developer <br />Brazil</p>
				</div>
				<div class="mdl-cell mdl-cell--6-col job-position-description">
					<p>Full time Allows <br />Remote</p>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--6-col">
					<p>Customer Success Analyst <br />São Paulo or Rio de Janeiro (Brazil) </p>
				</div>
				<div class="mdl-cell mdl-cell--6-col job-position-description">
					<p>Full time Allows <br />Remote</p>
				</div>
			</div>
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--6-col">
					<p>Back End Developer <br />Brazil</p>
				</div>
				<div class="mdl-cell mdl-cell--6-col job-position-description">
					<p>Full time Allows <br />Remote</p>
				</div>
			</div>
			<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">join our team</a>
		</div>
	</div>
</section>

<section class="secondary-bg contact-us even">
	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2><span>Contact</span> us</h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2><span>Contact</span> us</h2>
	<?php else: ?>
		<h2><span>Contato</span></h2>
	<?php endif; ?>
	
	<form>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col">
				  <div class="mdl-textfield mdl-js-textfield">
				    <input class="mdl-textfield__input" type="text" id="name">
				    <label class="mdl-textfield__label" for="name">
						<?php if (qtranxf_getLanguage() == 'en'): ?>
							Name
						<?php elseif (qtranxf_getLanguage() == 'es'): ?>
							Name
						<?php else: ?>
							Nome
						<?php endif; ?>
				    </label>
				  </div>
				  <div class="mdl-textfield mdl-js-textfield">
				    <input class="mdl-textfield__input" type="email" id="email">
				    <label class="mdl-textfield__label" for="email">E-mail</label>
				  </div>
			</div>
			<div class="mdl-cell mdl-cell--6-col">
				  <div class="mdl-textfield mdl-js-textfield">
				    <textarea class="mdl-textfield__input" type="text" rows= "4" id="message" ></textarea>
				    <label class="mdl-textfield__label" for="message">
						<?php if (qtranxf_getLanguage() == 'en'): ?>
							Message
						<?php elseif (qtranxf_getLanguage() == 'es'): ?>
							Message
						<?php else: ?>
							Mensagem
						<?php endif; ?>
				    </label>
				  </div>
			</div>
		</div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col mdl-cell--4-offset-desktop">
				<button class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect">
					<?php if (qtranxf_getLanguage() == 'en'): ?>
						Send
					<?php elseif (qtranxf_getLanguage() == 'es'): ?>
						Send
					<?php else: ?>
						Enviar
					<?php endif; ?>
				</button>
			</div>
		</div>
	</form>
</section>
<?php get_footer(); ?>