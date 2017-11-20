<?php
/*
Plugin Name:       Knoppys WP - TROY Integration
Plugin URI:        https://github.com/knoppys/
Description:       
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/knoppys-wp-troy.git
GitHub Branch:     master
*/

define( 'PLUGIN_VERSION', '1' );
define( 'PLUGIN__MINIMUM_WP_VERSION', '1.0' );
define( 'PLUGIN__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/***************************
*Load Native & Custom wordpress functionality plugin files. 
****************************/
foreach ( glob( dirname( __FILE__ ) . '*.php' ) as $root ) {
    require $root;
}
foreach ( glob( dirname( __FILE__ ) . '/inc/*.php' ) as $root ) {
    require $root;
}
