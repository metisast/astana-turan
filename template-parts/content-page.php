<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package astana-turan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-header-block">
		<div class="fw-col-lg-12 hidden-lg-down">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</div>
		<!-- Breadcrumbs -->
		<div>
			<?php if( function_exists('fw_ext_breadcrumbs') ) { fw_ext_breadcrumbs(); } ?>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'astana-turan' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'astana-turan' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
