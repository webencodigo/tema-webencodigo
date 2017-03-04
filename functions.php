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


// Le decimos a nuestro WordPress quwe vamos a querer añadir imágenes destacadas a los posts
function webencodigo_imagen_destacada() {

  add_theme_support( 'post-thumbnails' );

}

add_action( 'after_setup_theme', 'webencodigo_imagen_destacada' );


// Le decimos a nuestro WordPress que vamos a usar un sidebar que se va a llamar "lateral"

function webencodigo_sidebar() {

	$args = array(
		'name' => 'Barra lateral',
        'id' => 'lateral',
        'description' => 'Los widgets de este sidebar se mostrarán en una columna lateral en todas las páginas y entradas.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	);
    register_sidebar( $args );
}

add_action( 'widgets_init', 'webencodigo_sidebar' );