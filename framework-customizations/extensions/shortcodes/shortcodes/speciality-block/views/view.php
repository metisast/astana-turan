<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
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
<div class="speciality-block">
	<div class="speciality-img">
		<?php echo fw_html_tag('img', $img_attributes);?>
	</div>
	<section style="background-color: <?php echo $atts['speciality_color']?>">
		<h4><?php echo $atts['speciality_name']?></h4>
	</section>
	<article>
		<h5 style="color: <?php echo $atts['speciality_color']?>"><?php echo $atts['speciality_index']?></h5>
		<h3><?php echo $atts['speciality_price']?> тг/<span> год</span></h3>
	</article>
</div>