<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 *
 * Платные курсы
 */
?>
<?php

$posts = get_posts( array(
	'numberposts'     => 3, // тоже самое что posts_per_page
	'offset'          => 0,
	'category'        => '5', // идетификатор новостей
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'include'         => '',
	'exclude'         => '',
	'meta_key'        => '',
	'meta_value'      => '',
	'post_type'       => 'post',
	'post_mime_type'  => '', // image, video, video/mp4
	'post_parent'     => '',
	'post_status'     => 'publish'
) );
foreach($posts as $post): setup_postdata($post);?>
	<div class="fw-col-md-4 fw-col-sm-6">
		<div class="last-news-block">
			<section class="last-news-img">
				<?php
					$thumbnail = get_the_post_thumbnail($post->ID, array(350));
					echo ($thumbnail) ?  $thumbnail :  "<div class='news-demo'><i class='fa fa-image fa-3x'></i></div>";
				?>
			</section>
			<section class="last-news-content">
				<div class="fw-col-md-12">
					<article>
						<div class="fw-row">
							<div class="fw-col-lg-6 fw-col-md-12">
								<?php echo get_the_author() ?>
							</div>
							<div class="fw-col-lg-6 fw-col-md-12 text-md-left text-lg-right">
								<p><i class="fa fa-calendar"></i><?php echo date_i18n( 'j F Y', strtotime( $post->post_date ) )?></p>
							</div>
						</div>
					</article>
				</div>
				<div class="fw-col-md-12">
					<h5><?php echo  $post->post_title?></h5>
					<p><?php echo the_truncated_post( 220 ) /*strip_tags($post->post_content)*/ ?></p>
				</div>
				<div class="fw-col-md-12 text-md-center text-xs-center">
					<a href="<?php echo $post->guid?>" class="btn btn-primary btn-sm">Читать далее</a>
				</div>
			</section>
		</div>
	</div>
<?php
endforeach;
wp_reset_postdata();
?>


