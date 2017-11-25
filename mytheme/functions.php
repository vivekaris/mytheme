<?php
function wp_massively_setup() {
    global $content_width;
    if ( ! isset( $content_width ) ) {
        $content_width = 614;
    }
    add_theme_support( 'title-tag' );
    add_theme_support(
        'custom-logo', array(
            'flex-width'  => true,
            'height'      => 70,
        )
);
    load_theme_textdomain( 'wp-massively', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    //menu designer
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'wp- massively' ),
            'social'  => esc_html__( 'Social Menu', 'wp- massively' ),
        )
); 
    
    //header bg
    add_theme_support(
    'custom-background', array(
        'default-color' => '#FFFFFF',
    )
);
add_theme_support(
    'custom-header', array(
        'default-image' => get_template_directory_uri() . '/assets/images/header.png',
 ) );
    
}
add_action( 'after_setup_theme', 'wp_massively_setup' );
function wp_massively_scripts() {
    wp_enqueue_style( 'wp_massively_merriweather', '//fonts.googleapis.com/css?family=Merriweather:
300,300i,400,400i,700,700i,900,900i');
    wp_enqueue_style( 'wp_massively_open_sans', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,
400,400i,600,600i,700,700i,800,800i');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-
awesome.min.css' );
    wp_enqueue_style( 'wp_massively_style', get_stylesheet_uri() );
    if ( is_singular() ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'wp_massively_main', get_template_directory_uri() . '/assets/js/modernizr.js' );
    wp_enqueue_script( 'wp_massively_modernizr', get_template_directory_uri() .'/assets/js/main.js',
array( 'jquery' ), '',  true );
}
add_action( 'wp_enqueue_scripts', 'wp_massively_scripts' );