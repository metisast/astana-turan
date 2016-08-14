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
<div class="paid-speciality-block">
	<div class="paid-speciality-img">
		<?php echo fw_html_tag('img', $img_attributes);?>
		<h5 style="color: <?php echo $atts['speciality_color']?>"><?php echo $atts['speciality_name']?></h5>
	</div>
	<section style="border-bottom-color: <?php echo $atts['speciality_color']?>">
		<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6">
			<i class="fa fa-calendar"></i> <?php echo $atts['speciality_date'] ?>
		</div>
		<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6">
			<i class="fa fa-clock-o"></i> <?php echo $atts['speciality_time'] ?>
		</div>
	</section>
	<article>
		<div class="fw-col-md-12">
			<h6>Срок обучения: <?php echo $atts['education_time']?></h6>
		</div>
		<div class="fw-col-md-12">
			<h5 style="background-color: <?php echo $atts['speciality_color'] ?>">
				<?php echo $atts['speciality_price']?> тг/<span> мес</span>
			</h5>
		</div>
	</article>
</div>