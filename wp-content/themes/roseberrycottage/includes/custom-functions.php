<?php

function scripts_and_styles() {
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		
		// respond
		//wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array('jquery'), null, false );
		//wp_enqueue_script( 'respondjs' );
		
		//jquery
	  wp_deregister_script( 'jquery' );
	  wp_register_script( 'jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null );
	  wp_enqueue_script( 'jquery' );


		// modernizr (without media query polyfill)
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', array(), '2.5.3', false );
		wp_enqueue_script( 'modernizr' );

		wp_register_script( 'easing', get_stylesheet_directory_uri() . '/js/jquery.easing.min.js', array(), '2.5.3', false );
		wp_enqueue_script( 'easing' );


  		//scroll to
		wp_register_script( 'scrollto', get_stylesheet_directory_uri() . '/js/jquery.scrollTo.min.js', array(), null, false );
  		wp_enqueue_script( 'scrollto' );


		// register main stylesheet
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'stylesheet' );
		
		 //google maps api
	//  wp_register_script( 'google_maps_api', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maps.google.com/maps/api/js?sensor=true", false, null );
	//  wp_enqueue_script( 'google_maps_api' );

	//  wp_register_script(  'gmap', get_stylesheet_directory_uri() . '/js/jquery.gmap.js', array(), null, false  );
	//  wp_enqueue_script( 'gmap' );
		
		//register styles for our theme
		//wp_register_style( 'respgrid', get_template_directory_uri() . '/css/foundation-grid.css', array(), 'all' );
		//wp_enqueue_style( 'respgrid' );
		
		//register selectbox
		//wp_register_script( 'selectbox', get_stylesheet_directory_uri() . '/library/js/libs/jquery.selectBox.js', array(), null, true );
		//wp_enqueue_script( 'selectbox' );	

		
		//register all scripts
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), null, true );
		wp_enqueue_script( 'allscripts' );	
		

	//	wp_localize_script( 'allscripts', 'Map', array('lat' => 51.5196628,'lng' =>-0.0875072,'marker'=> get_template_directory_uri().'/images/marker.png'));

		
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);



// enqueue google fonts
function google_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Merriweather:400,500,700');
  wp_enqueue_style( 'googleFonts');
}

//add_action('wp_print_styles', 'google_fonts');




//Hide Admin Bar
show_admin_bar( false );


/** Register Navigation Menus
 **/

function register_menus() {
	  register_nav_menus(
	    array( 	'main-menu'	   => __( 'Main Menu' ),
	            'footer-menu' => __( 'Footer Menu' )
	   	)
	  );
	}
	
add_action( 'init', 'register_menus' );


