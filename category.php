<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package astana-turan
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="entry-header entry-header-block">
				<div class="fw-col-lg-12 hidden-lg-down">
					<?php single_cat_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</div>
				<!-- Breadcrumbs -->
				<div>
					<?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
				</div>
			</header><!-- .entry-header -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'content' );


						endwhile; // End of the loop.
						?>

						<?php my_pagenavi() ?>

					</div>

					<!-- Side bar -->
					<?php
					/**
					 * The sidebar containing the main widget area.
					 *
					 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
					 *
					 * @package astana-turan
					 */

					if ( ! is_active_sidebar( 'sidebar-1' ) ) {
						return;
					}
					?>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<aside id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</aside><!-- #secondary -->
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
