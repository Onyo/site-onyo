<?php
/**
 * Template Name: Restaurants
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
<!-- INIT RESTAURANTS CONTENT -->
	<div class="mdl-grid">
		<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop mdl-cell--12-col">
			<div class="main-text-banner internal-page-banner">
				<?php 
					$newsArgs = array( 'post_type' => 'restaurant-slide', 'posts_per_page' => 3,
						'meta_key'		=> 'select_page_for_banner_subtitle',
						'meta_value'	=> 'Restaurants Page'); 
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
<section class="secondary-bg company-purpose even">

	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2><span>Company</span> purpose</h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2><span>Company</span> purpose</h2>
	<?php else: ?>
		<h2><span>Nosso</span> propósito</h2>
	<?php endif; ?>

	<div class="mdl-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="mdl-cell mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-cell--4-col">
				<div class="bubble">
					<div class="round-message"><p><span><?php the_field('company_purpose_1'); ?></span></p></div>
				</div>
			</div>
			<div class="mdl-cell mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-cell--4-col">
				<div class="bubble">
					<div class="round-message"><p><span><?php the_field('company_purpose_2'); ?></span></p></div>
				</div>
			</div>
			<div class="mdl-cell mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-cell--4-col">
				<div class="bubble">
					<div class="round-message"><p><span><?php the_field('company_purpose_3'); ?></span></p></div>
				</div>
			</div>
		<?php endwhile; endif; ?>
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
	<section class="onyo-clients even">
		<?php if (qtranxf_getLanguage() == 'en'): ?>
			<h2><span>Our</span> clients</h2>
		<?php elseif (qtranxf_getLanguage() == 'es'): ?>
			<h2><span>Our</span> clients</h2>
		<?php else: ?>
			<h2><span>Nossos</span> clientes</h2>
		<?php endif; ?>
		
		<div class="onyo-slider">
			<div class="onyo-slider-wrapper">
				<div>
				<a href="#slide-1" id="slide-1">slide-1</a>
			  	<div class="mdl-grid">
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/baked-potato.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/casa-pao-queijo.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/rei-do-mate.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/billy-the-grill.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/gula-gula.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/vivenda-camarao.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/frys.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/crepelocks.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/montana.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/pizzahut.png">
			  		</div>
			  	</div>
			  	</div>
			  	<div>
			  	<a href="#slide-2" id="slide-2">slide-2</a>
			  	<div class="mdl-grid">
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/casa-pao-queijo.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/baked-potato.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/rei-do-mate.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/billy-the-grill.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/gula-gula.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/vivenda-camarao.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/frys.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/crepelocks.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/montana.png">
			  		</div>
			  		<div class="mdl-cell mdl-cell--2-col-desktop">
			  			<img src="<?php echo get_template_directory_uri(); ?>/images/our-clients/pizzahut.png">
			  		</div>
			  	</div>
			  	</div>
			</div><!-- END ONYO SLIDER WRAPPER-->
			<ul class="onyo-slider-buttons">
				<li><a href="#slide-1" id="slide-1" class="current">slide-1</a></li>
				<li><a href="#slide-2" id="slide-2">slide-2</a></li>
			</ul>
	  	</div>
	</section>
<section class="secondary-bg contact-us odd">
	<?php if (qtranxf_getLanguage() == 'en'): ?>
		<h2><span>Contact us</span> To know more about our solutions</h2>
	<?php elseif (qtranxf_getLanguage() == 'es'): ?>
		<h2><span>Contact us</span> To know more about our solutions</h2>
	<?php else: ?>
		<h2><span>Contato</span> Conhe&ccedil;a nossas solu&ccedil;&otilde;es</h2>
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
						SEND
					<?php elseif (qtranxf_getLanguage() == 'es'): ?>
						SEND
					<?php else: ?>
						Enviar
					<?php endif; ?>
				</button>
			</div>
		</div>
	</form>
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
	<!-- JQUERY SLIDER -->
	<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/onyo/horizontal-slider/script.js"></script>
<!-- END RESTAURANTS CONTENT -->
<?php get_footer(); ?>