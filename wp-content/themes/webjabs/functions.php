<?php

include_once('inc/acf-options-page.php');

if(function_exists('acf_add_option_page')){
acf_add_option_page();
}

function myqueue() {
   wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'myqueue' );

function create_posttype() {
 
    register_post_type( 'projects',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
			'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
add_theme_support( 'post-thumbnails' );