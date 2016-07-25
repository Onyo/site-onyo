<?php
/**
 * Template Name: AboutUs
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
<!-- INIT ABOUT PAGE CONTENT -->
 	<!-- main text banner -->
 	<div class="mdl-grid">
 		<div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
 			<div class="main-text-banner internal-page-banner">
				<?php 
					$newsArgs = array( 'post_type' => 'restaurant-slide', 'posts_per_page' => 3,
						'meta_key'		=> 'select_page_for_banner_subtitle',
						'meta_value'	=> 'About Page'); 
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
	<section class="what-we-do even">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--1-offset-desktop">
			<?php 
				$newsArgs = array( 'post_type' => 'about-us-team', 'posts_per_page' => 3); 
				$newsLoop = new WP_Query( $newsArgs ); 

				while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
					<h2><?php the_field('title'); ?></h2>
					<p id="about-description"><?php the_field('content'); ?></p>
			<?php endwhile; ?>
			</div>
			<div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--1-offset-desktop team-picture-holder">
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/about/about-page-team.png" alt="Onyo Team all members together" aria-describedby="about-description" />
			</div>
		</div>
	</section>
	<section class="onyo-leaders odd">
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--3-col-desktop mdl-cell--1-offset-desktop">
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/about/onyo-member-1.png" alt="Alexandre Dinkelmann At Onyo" aria-describedby="member-1-details" />
				<h4>Alexandre Dinkelmann At Onyo</h4>
				<ul id="member-1-details">
					<li>Responsible for Sales & Finance</li>
					<li>Board member at Promob Solutions EVP and CFO at TOTVS</li>
					<li>Board member at Gooddata Inc</li>
					<li>CFO at Even Construtora</li>
					<li>Head of M&A and Partner at Pactual</li>
					<li>MsC from Stanford Business School CFA Chartered</li>
				</ul>
			</div>
			<div class="mdl-cell mdl-cell--4-col-desktop">
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/about/onyo-member-2.png" alt="Fernando Taliberti At Onyo" aria-describedby="member-2-details" />
				<h4>Fernando Taliberti At Onyo</h4>
				<ul id="member-2-details">
					<li>Responsible for Product Executive officer at Totvs (Corporate Venture Capital and M&A)</li>
					<li>Executive Director at TOTVS</li>
					<li>BConsulting Consultant at Accenture</li>
					<li>Master in e-Business from Politecnico di Torino</li>
				</ul>
			</div>
			<div class="mdl-cell mdl-cell--4-col-desktop">
				<img src="<?php echo get_template_directory_uri(); ?>/css/assets/about/onyo-member-3.png" alt="Andre Oliveira At Onyo" aria-describedby="member-3-details" />
				<h4>Andre Oliveira At Onyo</h4>
				<ul id="member-3-details">
					<li>Responsible for Sales & Finance</li>
					<li>Board member at Promob Solutions EVP and CFO at TOTVS</li>
					<li>Board member at Gooddata Inc</li>
					<li>CFO at Even Construtora</li>
					<li>Head of M&A and Partner at Pactual</li>
					<li>MsC from Stanford Business School CFA Chartered</li>
				</ul>
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
	<section class="secondary-bg join-us odd">
		<?php if (qtranxf_getLanguage() == 'en'): ?>
			<h2><span>Join</span> our team</h2>
		<?php elseif (qtranxf_getLanguage() == 'es'): ?>
			<h2><span>Join</span> our team</h2>
		<?php else: ?>
			<h2><span>Venha</span> trabalhar conosco</h2>
		<?php endif; ?>

		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--5-col-desktop mdl-cell--1-offset-desktop">
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
			<div class="mdl-cell mdl-cell--5-col carrers">
				<p>If you want to join our team lorem ipsum dolor sit amet consectur</p>
				<form class="onyo-form">
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
				  <button class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect">
						<?php if (qtranxf_getLanguage() == 'en'): ?>
							SEND
						<?php elseif (qtranxf_getLanguage() == 'es'): ?>
							SEND
						<?php else: ?>
							ENVIAR
						<?php endif; ?>
				 </button>
				</form>
			</div>
		</div>
	</section>
<!-- END ABOUT PAGE CONTENT -->

	<!-- JQUERY SLIDER -->
	<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/onyo/horizontal-slider/script.js"></script>
<?php get_footer(); ?>