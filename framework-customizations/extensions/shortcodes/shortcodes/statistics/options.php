<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/* Create options*/
$options = array(
    'image' => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
    'count' => array(
        'type'  => 'text',
        'value' => '1000',
        'label' => __('Количество', '{domain}'),
        'desc'  => __('Количество', '{domain}'),
    ),
    'title' => array(
        'type'  => 'text',
        'value' => 'студентов',
        'label' => __('Описание', '{domain}'),
        'desc'  => __('Описание', '{domain}'),
    ),
);