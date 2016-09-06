<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package astana-turan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title hidden-md-up">', '</h1>' );
		else :
			//the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if(!is_single()) :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
				<div class="col-md-12 col-sm-12 col-xs-12 post-image">
					<a href="<?php echo $post->guid?>">
						<?php
						$thumbnail = get_the_post_thumbnail($post->ID, array(680));
						echo ($thumbnail) ? $img = $thumbnail : $img =  "<img src='" . get_template_directory_uri() . '/img/no-image.png' . "'>";
						?>
					</a>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php
						if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php echo date_i18n( 'j F Y', strtotime( $post->post_date ) )?> | <?php echo get_the_author() ?>
							</div><!-- .entry-meta -->
							<?php
						endif;

						the_truncated_post( 500 );
			?>
					<div class="col-md-12 read-more">
						<a href="<?php echo $post->guid ?>" class="btn btn-primary btn-sm">Читать далее</a>
					</div>
				</div>
			<?php
			else :

				the_content( sprintf(
				/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'astana-turan' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta" style="text-align: right">
						<?php echo date_i18n( 'j F Y', strtotime( $post->post_date ) )?> | <?php echo get_the_author() ?>
					</div><!-- .entry-meta -->
					<?php
				endif;

			endif;

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //astana_turan_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
