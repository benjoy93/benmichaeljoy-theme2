<?php

add_theme_support ( 'menus'); 

add_theme_support( 'post-thumbnails' ); 

function register_theme_menus () {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu')
        )
    );
}

add_action ( 'init', 'register_theme_menus');

function bmj_theme_styles() {
    wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css'  );

    wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.min.css'  );

    wp_enqueue_style('volkron_font', 'https://fonts.googleapis.com/css?family=Vollkorn'  );


    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css'  );
}


add_action ('wp_enqueue_scripts', 'bmj_theme_styles' );

?>