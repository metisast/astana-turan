<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'value' => 'rgba(255,0,0,0.5)',
		'type'  => 'rgba-color-picker',
		// palette colors array
		'palettes' => array( '#ffffff', 'rgba(30, 170, 206, .8)', 'rgba(234, 97, 97, .8)', 'rgba(29, 187, 144, .8)' ),
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
	'custom_id' => array(
		'label' => __('Custom Section Id', 'fw'),
		'desc'  => __('Insert Custom Section Id', 'fw'),
		'type'  => 'text',
	),
	'custom_class' => array(
		'label' => __('Custom Section Class', 'fw'),
		'desc'  => __('Insert Custom Section Class', 'fw'),
		'type'  => 'text',
	)
);
