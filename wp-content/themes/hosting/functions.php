<?php

function btw_theme_styles() {

	wp_enqueue_style ('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css' );

}

add_action ('wp_enqueue_scripts', 'btw_theme_styles');


//function btw_theme_js(){

//wp_enqueue_script ('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '',true );
//wp_enqueue_script ('wow_js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '',true );

//add_action('wp_enqueue_scripts', 'btw_theme_js');
//}

?>