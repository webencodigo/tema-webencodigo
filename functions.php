<?php

// Creamos una función para cargar los estilos y el javascript necesarios
function webencodigo_scripts() {

	wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap_css' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style( 'bootstrap_theme_css' , get_template_directory_uri() . '/assets/css/bootstrap-theme.min.css');

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') );

}

add_action( 'wp_enqueue_scripts', 'webencodigo_scripts' );


// Le decimos a nuestro WordPress que vamos a usar un menú que se va a llamar "principal"
function webencodigo_menu() {

  register_nav_menu( 'principal', 'Menú Principal' );

}

add_action( 'after_setup_theme', 'webencodigo_menu' );