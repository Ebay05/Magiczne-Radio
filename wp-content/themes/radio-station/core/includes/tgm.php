<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function radio_station_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'radio-station' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Google Language Translator', 'radio-station' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	radio_station_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'radio_station_register_recommended_plugins' );