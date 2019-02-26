<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.dz-4.de
 * @since      1.0.0
 *
 * @package    Strompreis_Rechner
 * @subpackage Strompreis_Rechner/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Strompreis_Rechner
 * @subpackage Strompreis_Rechner/includes
 * @author     Benjamin Spinola <spinola@dz-4.de>
 */
class Strompreis_Rechner_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'strompreis-rechner',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
