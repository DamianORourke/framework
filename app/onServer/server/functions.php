<?php
include dirname(__FILE__).'/templates/shortcodes.php';

//global variable



// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled Bootstrap
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/lib/bootstrap.min.css'));
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/lib/bootstrap.min.css', array('parent-style'), $modified_bootscoreChildCss);

  wp_enqueue_style('opensans','https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

  // custom.js
  wp_enqueue_script('aboutUs-js', get_stylesheet_directory_uri() . '/js/aboutUs.js', array('jquery'), '1.0', true);

}


// if we are getting hacked by user name
function redirect_to_home_if_author_parameter() {

	$is_author_set = get_query_var( 'author', '' );
	if ( $is_author_set != '' && !is_admin()) {
		wp_redirect( home_url(), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'redirect_to_home_if_author_parameter' );

function disable_rest_endpoints ( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
}
add_filter( 'rest_endpoints', 'disable_rest_endpoints');


// add a second footer menu 
function tilt_add_a_second_footer_menu(){
    register_nav_menus(array(
            'footer-first-menu' => __( 'First Footer Menu' ),
            'footer-second-menu' => __( 'Second Footer Menu' ),
            'footer-third-menu' => __( 'Third Footer Menu' ),
            'footer-fourth-menu' => __( 'Fourth Footer Menu' ),
            'social-media-menu' => __( 'Social Media Menu' ),
            'mobile-main-menu' => __( 'Mobile Main Menu' )
        )
    );
}
  add_action( 'init', 'tilt_add_a_second_footer_menu' );


add_shortcode( 'showOurPartners', 'doShowOurPartners' );
add_shortcode( 'showHeading', 'doShowHeading' );
add_shortcode( 'showSpacer', 'doShowSpacer' );



function tilt_custom_logo() {
	
	add_theme_support( 'custom-logo', array(
        'height'      => 48,
        'width'       => 123,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
    

}
add_action( 'after_setup_theme', 'tilt_custom_logo' );


function checkForNavColor(){
    $navBackgroundColor= "";
    if(is_front_page()){
        $navBackgroundColor='whitePurple';
    }elseif(is_page( '253' )){
        $navBackgroundColor='whiteBlue';
    }elseif(is_page( '255' ) ){
        $navBackgroundColor='whiteYellow';
    }elseif(is_page( '251' ) ){
        $navBackgroundColor='footerColor';
    }elseif(is_page( '257' ) ){
        $navBackgroundColor='whitePurple';
    }else{
        $navBackgroundColor='whitePurple';
    }
    return $navBackgroundColor;
}