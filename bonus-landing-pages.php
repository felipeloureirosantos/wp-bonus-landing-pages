<?php
/**
 * @package Bonus_Landing_Page
 * @version 1.0
 */
/*
Plugin Name: Bonus Landing Pages
Description: Create Bonus Landing Pages
Version: 1.0
Author: Felipe Loureiro dos Santos
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
