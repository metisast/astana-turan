<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astana-turan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'astana-turan' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-line">
			<div class="fw-container">
				<div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-xs-3 ">
					<!-- Localization -->
				</div>
				<!-- Contacts -->
				<div class="col-xl-4 col-lg-4 col-md-offset-2 col-xl-offset-0 col-lg-offset-0 hidden-md-down">
					<div class="feedback-info">
						<div class="fw-col-md-6 phone">
							<h6><i class="fa fa-phone"></i> +7 (700) 000 0000</h6>
						</div>
						<div class="fw-col-md-6 email">
							<h6><i class="fa fa-envelope"></i> info@turan-college.kz</h6>
						</div>
					</div>
				</div>
				<!-- Alert -->
				<div class="col-xl-2 col-lg-1 col-md-2 col-md-offset-3 col-xl-offset-0 col-lg-offset-0 col-sm-offset-4 col-sm-1 col-xs-offset-2 col-xs-2">
					<div class="ad" data-status="inactive">
						<p class="fa fa-bell pink"></p>
					</div>
				</div>
				<!-- Special links -->
				<div class="col-xl-4 col-xl-offset-1 col-lg-5 col-lg-offset-0 col-md-5 col-sm-7 col-sm-offset-0 hidden-md-down">
					<div class="top-bar-info">
						<a href="#" class="poslanie">Послание Президента</a>
						<a href="#" class="gossimvoly">Государтвенные символы</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Desktop menu -->
		<div class="fw-container-fluid hidden-md-down" id="desktop-menu">
			<div class="fw-container">
				<div class="top-menu">
					<div class="fw-col-md-2 fw-col-sm-2 fw-col-xs-2">
						<a href="/" class="logo">
							<div>
								<img width="40px" src="<?php echo get_template_directory_uri()?>/img/turan_logo.png" class="img" alt="">
							</div>
						</a>
					</div>
					<div class="fw-col-md-10 fw-col-sm-10 fw-col-xs-10">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php $walker = new Menu_With_Description; ?>

							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'astana-turan' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'walker' => $walker ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile menu -->
		<div class="fw-container-fluid hidden-md-up" id="mobile-menu">
			<div class="fw-container">
				<div class="fw-row">
					<div class="top-menu">
						<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6 logo">
							<a href="/">
								<img src="<?php echo get_template_directory_uri() . '/img/turan_logo.png' ?>" alt="">
							</a>
						</div>
						<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6">
							<a id="my-button" href="#mobile-menu">
								<i class="fa fa-bars fa-2x"></i>
							</a>
						</div>
						<div style="display: none">
							<?php wp_nav_menu( array('menu' => 'Mobile' )); ?>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<!--   Header -->

	<!--Header slider end-->
	<div id="content" class="site-content">
