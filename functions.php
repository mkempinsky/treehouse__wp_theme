<?php

// function to load style sheets
function wpt_theme_styles(){
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css');
	// wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css');
	// only need normalize_css if you plan on making further customizations on the theme
	// and want to normalize some of the styles and font sizes.
	wp_enqueue_style( 'google_fonts', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

// call the function to load styles
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

// function to load js
function wpt_theme_js(){
	// calling false places the script in the header, asks 'is in footer?' empty '' for version number
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr.js', '', '', false);
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation/foundation.js', array('jquery'), '', true);
	// following takes array of dependencies -- calling true puts script in footer
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}

// call the function to load js
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

?>