<?php 

function massively_theme_setup(){
	load_theme_textdomain( "massively");
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
/*	$motion_custom_header = array(
		'header-text'        => true,
		'default-text-color' => '#FFFFFF',
		'width'              => 1200,
		'height'             => 600,
		'flex-height'        => true,
		'flex-width'         => true,

	);
	add_theme_support( "custom-header", $motion_custom_header );   */


	register_nav_menu( "topmenu", __("Top Menu","massively"));


	
	add_image_size( "massively_post_thumb", 508, 310 );
	
}
add_action( "after_setup_theme", "massively_theme_setup" );

function massively_assets(){
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri("/assets/css/font-awesome.min.css"), null, '4.7.0'   );
	wp_enqueue_style( 'fonts-css','//fonts.googleapis.com/css?family=Merriweather:300,700,300italic,700italic|Source+Sans+Pro:900', null, '1.0.1'   );
	wp_enqueue_style( 'main-css', get_theme_file_uri("/assets/css/main.css"), null  );
	wp_enqueue_style( 'massively-css', get_stylesheet_uri());


	
	wp_enqueue_script( 'scrollex-js', get_theme_file_uri( '/assets/js/jquery.scrollex.min.js' ), array("jquery"), '0.2.1', true );
	wp_enqueue_script( 'scrolly-js', get_theme_file_uri( '/assets/js/jquery.scrolly.min.js' ), array("jquery"), '1.0.0', true );
	wp_enqueue_script( 'browser-js', get_theme_file_uri( '/assets/js/browser.min.js' ), array("jquery"), '1.0', true );
	wp_enqueue_script( 'breakpoints-js', get_theme_file_uri( '/assets/js/breakpoints.min.js' ), array("jquery"), '1.0', true );
	wp_enqueue_script( 'util-js', get_theme_file_uri( '/assets/js/util.js' ), array("jquery"), '1.0', true );
	wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/js/main.js' ), null, array("jquery"), true );
}
add_action( "wp_enqueue_scripts", "massively_assets" );
/*
function motion_widgets(){
	
	register_sidebar(array(
		'name'          => __( 'Footer Top Section ', 'massively' ),
		'id'            => 'footer-top',
		'description'   => __( 'Footer Top Section Area ', 'massively' ),
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
	

	
}
add_action( "widgets_init", "motion_widgets" );


function mamurjor_header(){
	if (is_front_page()) {
		if (current_theme_supports("custom-header")) {
			?>
				
				<style>
					
					#banner{
						background-image: url(<?php echo header_image(); ?>);
						background-size: cover;
					}


				</style>


			<?php
		} 
		
	} 
	
}
add_action( "wp_head", "mamurjor_header");

*/





