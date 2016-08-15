<?php
/*
Plugin Name:       SCP Bookings
Plugin URI:        https://github.com/knoppys/
Description:       
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/
GitHub Branch:     master
*/

define( 'PLUGIN_VERSION', '1' );
define( 'PLUGIN__MINIMUM_WP_VERSION', '1.0' );
define( 'PLUGIN__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/

//Post Types and Taxonomies
foreach ( glob( dirname( __FILE__ ) . '*.php' ) as $root ) {
    require $root;
}

/***************************
*Load SCP styles
****************************/
function plugin_style() {        

        wp_register_style( '', plugin_dir_url( __FILE__ ) . '', false, '1.0.0' );
        wp_enqueue_style( '' );       
}
add_action( 'admin_enqueue_scripts', 'plugin_style' );

/***************************
* Load SCP Scripts
****************************/
function scripts() {    
   
    wp_enqueue_script( '', plugin_dir_url( __FILE__ ) . '', array(), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'plugin_scripts' );

?>