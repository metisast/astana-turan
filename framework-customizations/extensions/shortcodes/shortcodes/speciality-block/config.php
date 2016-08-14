<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$cfg = array(
    'page_builder' => array(
        'title'         => __('Speciality blog', '{domain}'),
        'description'   => __('Turan advance Shortcode', '{domain}'),
        'tab'           => __('Turan', '{domain}'),
        'popup_size'    => 'small', // can be large, medium or small
        'icon' => 'fa fa-plug',

        /*
        // Icon examples
        // Note: By default is loaded {your-shortcode}/static/img/page_builder.png
        'icon' => 'http://.../image-16x16.png', // background color should be #8c8c8c
        'icon' => 'dashicons dashicons-admin-site',
        'icon' => 'unycon unycon-crown',
        'icon' => 'fa fa-btc',
        */
    )
);