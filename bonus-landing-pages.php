<?php
/**
 * @package Bonus_LandingPage
 * @version 1.0
 */
/*
Plugin Name: Bonus Landing Pages
Description: Create Bonus Landing Pages
Version: 1.0
Author URI: https://profiles.wordpress.org/felipeloureirosantos/
*/

function create_bonus() {
 
    register_post_type( 'bonus',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Bonus' ),
                'singular_name' => __( 'Bonus' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'bonus'),
        )
    );
}

add_action( 'init', 'create_bonus' );


function bonus_noindex()
{
	if ( 'bonus' == get_post_type() ) {
		return '<meta name="robots" content="noindex, follow">';
	}
}

add_action('wp_head', 'bonus_noindex');