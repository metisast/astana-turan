<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 *
 * Платные курсы
 */
?>
<?php
	/* init custom options */
	if ( empty( $atts['image'] ) ) {
		return;
	}

	$image = $atts['image']['url'];
	$img_attributes = array(
		'src' => $image,
		'alt' => $alt ? $alt : $image,
		'class' => 'fw-img-responsive'
	);
?>
<div class="statistics-block">
	<div class="fw-row">
	<div class="fw-col-md-4">
		<?php echo fw_html_tag('img', $img_attributes);?>
	</div>
	<div class="fw-col-md-8">
		<h3><?php echo $atts['count'] ?> +</h3>
		<p><?php echo $atts['title'] ?></p>
	</div>
	</div>
</div>