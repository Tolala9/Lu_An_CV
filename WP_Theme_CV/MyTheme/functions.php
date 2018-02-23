<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

/*hide admin bar*/
show_admin_bar(false);

/*Widget for logo*/
function logo_widgets_init() {

    register_sidebar( array(
        'name'          => 'logo_svg',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'logo_widgets_init' );

/*Theme options*/
require_once (get_stylesheet_directory() . '/theme-options.php' );

/*Post Thumbnails*/
add_theme_support('post-thumbnails');




