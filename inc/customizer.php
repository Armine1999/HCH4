<?php
/**
 * goldy-silver Theme Customizer
 *
 * @package goldy-silver
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
	// Documentation
		new \Kirki\Section(
		'goldy_silver_documentation_Upsell_Section',
			[
				'title'       => esc_html__( 'Documentation', 'goldy-silver' ),
				'type'        => 'link',
				'button_text' => esc_html__( 'View', 'goldy-silver' ),
				'button_url'  => 'https://www.inverstheme.com/goldy-silver-documentation/',
				'priority' => 1,
			]
		);

		// pro version button
		new \Kirki\Section(
		'pro_section_custom_control',
			[
				'title'       => esc_html__( 'Premium version', 'goldy-silver' ),
				'type'        => 'link',
				'button_text' => esc_html__( 'Upgrade', 'goldy-silver' ),
				'button_url'  => 'https://www.inverstheme.com/theme/goldy-silver-pro/',
				'priority' => 1,
			]
		);	
function goldy_silver_customize_register( $wp_customize ) {
global $goldy_silver_default;
	$wp_customize->remove_control('background_color');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('colors');

}
add_action( 'customize_register', 'goldy_silver_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function my_register_blogname_partials( WP_Customize_Manager $wp_customize ) {

    // Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
        return;
    }

    $wp_customize->selective_refresh->add_partial( 'header_site_title', [
        'selector'        => '.site-title a',
        'settings'        => [ 'blogname' ],
        'render_callback' => function() {
            return get_bloginfo( 'name', 'display' );
        },
	] );

    $wp_customize->selective_refresh->add_partial( 'document_title', [
        'selector'        => '.site-description',
        'settings'        => [ 'blogdescription' ],
        'render_callback' => 'wp_get_document_title',
	] );
}
add_action( 'customize_register', 'my_register_blogname_partials' );


/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function goldy_silver_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function goldy_silver_customize_preview_js() {
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script( 'goldy-silver-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _GOLDY_SILVER_VERSION, true );
	wp_register_script( 'goldy-silver-customize-custom-js', get_template_directory_uri() . '/assets/js/customs.js' );
	$temp = array(
    	'ajaxUrl' => admin_url( 'admin-ajax.php' )
	);
}
add_action( 'customize_preview_init', 'goldy_silver_customize_preview_js' );

function goldy_silver_customizer_css() {

    wp_enqueue_style( 'goldy-silver-customize-controls-style', get_template_directory_uri() . '/assets/css/customizer-admin.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'goldy_silver_customizer_css',0 );

if ( ! function_exists( 'goldy_silver_sanitize_select' ) ) :

    /**
     * Sanitize select.
     *
     * @since 1.0.0
     *
     * @param mixed                $input The value to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return mixed Sanitized value.
     */
    function goldy_silver_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_text_field( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }
endif;

function goldy_silver_sanitize_number_range( $number, $setting ) {

    // Ensure input is an absolute integer.
    $number = absint( $number );

    // Get the input attributes associated with the setting.
    $atts = $setting->manager->get_control( $setting->id )->input_attrs;


    // Get minimum number in the range.
    $min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

    // Get maximum number in the range.
    $max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

    // Get step.
    $step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

    // If the number is within the valid range, return it; otherwise, return the default
    return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function goldy_silver_custom_sanitization_callback( $value ) {
	// This pattern will check and match 3/6/8-character hex, rgb, rgba, hsl, & hsla colors.
	$pattern = '/^(\#[\da-f]{3}|\#[\da-f]{6}|\#[\da-f]{8}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/';
	\preg_match( $pattern, $value, $matches );
	// Return the 1st match found.
	if ( isset( $matches[0] ) ) {
		if ( is_string( $matches[0] ) ) {
			return $matches[0];
		}
		if ( is_array( $matches[0] ) && isset( $matches[0][0] ) ) {
			return $matches[0][0];
		}
	}
	// If no match was found, return an empty string.
	return '';
}


//sanitize select
	if ( ! function_exists( 'custom_sanitize_select' ) ) :
	    function custom_sanitize_select( $input, $setting ) {

	        $input = sanitize_text_field( $input );

	        $choices = $setting->manager->get_control( $setting->id )->choices;

	        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

	    }
	endif;
//sanitize checkbox
	if ( ! function_exists( 'custom_sanitize_checkbox' ) ) :
	    function custom_sanitize_checkbox( $checked ) {
	        return ( ( isset( $checked ) && true === $checked ) ? true : false );
	    }
	endif;

function goldy_silver_social_icon_general_callback(){
	$social_icon_tab = get_theme_mod( 'social_icon_tab','general');
	if ( 'general' === $social_icon_tab ) {
		return true;
	}
	return false;
}
function goldy_silver_social_icon_design_callback(){
	$social_icon_tab = get_theme_mod( 'social_icon_tab','general');
	if ( 'design' === $social_icon_tab ) {
		return true;
	}
	return false;
}