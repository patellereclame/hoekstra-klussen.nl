<?php 


function theme_styles() {

	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/bootstrap.min.css/' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js/', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


?>
