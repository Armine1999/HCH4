<?php
/* Notifications in customizer */

require get_template_directory()  . '/inc/customizer-notify/goldy-silver-notify.php';
$goldy_silver_config_customizer = array(
	'recommended_plugins'       => array(
		'slivery-extender' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Slivery Extender</strong> plugin for taking full advantage of all the features this theme has to offer goldy_silver.', 'goldy-silver')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'goldy-silver' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'goldy-silver' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'goldy-silver' ),
	'activate_button_label'     => esc_html__( 'Activate', 'goldy-silver' ),
	'goldy_silver_deactivate_button_label'   => esc_html__( 'Deactivate', 'goldy-silver' ),
);
goldy_silver_Customizer_Notify::init( apply_filters( 'goldy_silver_recommended_plugins', $goldy_silver_config_customizer ) );