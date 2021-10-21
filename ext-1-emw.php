<?php
/*
Plugin Name: Ext 1 emw
Plugin URI:  patrickind.com
Description: Extension trial
Version:     1.0.0
Author:      E.W. Webber
Author URI:  patrickind.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: x1emw-ext-1-emw
Domain Path: /languages

Ext 1 emw is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Ext 1 emw is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Ext 1 emw. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'x1emw_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function x1emw_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/Ext1Emw.php';
}
add_action( 'divi_extensions_init', 'x1emw_initialize_extension' );
endif;
