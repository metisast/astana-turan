<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
?>
<?php
	/* init custom options */
	$custom_class = ( isset( $atts['custom_class'] ) && $atts['custom_class'] ) ? ' ' . $atts['custom_class'] : '';
?>
<div class="fw-heading<?php echo $custom_class?> fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo !empty($atts['centered']) ? 'fw-heading-center' : ''; ?>">
	<?php $heading = "<{$atts['heading']} class='fw-special-title'>{$atts['title']}</{$atts['heading']}>"; ?>
	<?php echo $heading; ?>
	<?php if (!empty($atts['subtitle'])): ?>
		<div class="fw-special-subtitle"><?php echo $atts['subtitle']; ?></div>
	<?php endif; ?>
</div>