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
    'speciality_name' => array(
        'type'  => 'text',
        'value' => 'Введите специальность',
        'label' => __('Специальность', '{domain}'),
        'desc'  => __('Текст для названия специальности', '{domain}'),
    ),
    'speciality_color' => array(
        'type'  => 'color-picker',
        'value' => '#FF0000',
        'label' => __('Цвет специальности', '{domain}'),
        'desc'  => __('Фоновый цвет', '{domain}'),
    ),
    'speciality_index' => array(
        'type'  => 'text',
        'value' => '1000000',
        'label' => __('Код специальность', '{domain}'),
        'desc'  => __('Текст для кода специальности', '{domain}'),
    ),
    'speciality_price' => array(
        'type'  => 'text',
        'value' => '150 000',
        'label' => __('Стоймость специальности в год', '{domain}'),
        'desc'  => __('Текст для стоймости специальности', '{domain}'),
    ),
);