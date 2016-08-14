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
    'speciality_date' => array(
        'type'  => 'text',
        'value' => '10 августа',
        'label' => __('Начало занятий', '{domain}'),
        'desc'  => __('Дата начала занятий', '{domain}'),
    ),
    'speciality_time' => array(
        'type'  => 'text',
        'value' => '10:10',
        'label' => __('Начало занятий', '{domain}'),
        'desc'  => __('Время начала занятий', '{domain}'),
    ),
    'education_time' => array(
        'type'  => 'text',
        'value' => '3 месяца',
        'label' => __('Срок обучения', '{domain}'),
        'desc'  => __('Укажите Срок обучения', '{domain}'),
    ),
    'speciality_price' => array(
        'type'  => 'text',
        'value' => '150 000',
        'label' => __('Стоймость специальности в год', '{domain}'),
        'desc'  => __('Текст стоймости специальности', '{domain}'),
    ),
);