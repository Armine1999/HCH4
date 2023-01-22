<?php
// Global Section
	new \Kirki\Panel(
		'global_option',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Global', 'goldy-silver' ),
			
		]
	);

// Buttons
	new \Kirki\Section(
		'button_section',
		[
			'title'       => esc_html__( 'Buttons', 'goldy-silver' ),
			'panel'       => 'global_option',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_silver_button_bg_color',
			'label'       => __( 'Button Background Color', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '#0a62b2',
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_silver_button_bg_hover_color',
			'label'       => __( 'Background Hover Color', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '#ffffff',
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'button::before, input[type="button"]::before, input[type="reset"]::before, input[type="submit"]::before, .wp-block-search .wp-block-search__button::before, .wp-block-search .wp-block-search__button::after, .nav-previous a::before, .nav-next a::before,.buttons::before, .buttons::after ,.woocommerce a.button::before, .woocommerce button::before, .woocommerce .single-product button::before, .woocommerce button.button.alt::before, .woocommerce a.button.alt::before,.woocommerce button.button.alt.disabled::before',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_silver_button_text_color',
			'label'       => __( 'Button Text Color', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '#ffffff',
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_silver_button_texthover_color',
			'label'       => __( 'Button Text Hover Color', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '#a74941',
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'button:hover, input[type="button"]:hover , input[type="reset"]:hover , input[type="submit"]:hover , .wp-block-search .wp-block-search__button:hover, .nav-previous a:hover, .buttons:hover, .nav-next a:hover, .woocommerce a.button:hover, .woocommerce button:hover, .woocommerce .single-product button:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt.disabled:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_silver_button_border_color',
			'label'       => __( 'Border Color', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '#0a62b2',
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'border-color',
					'suffix'  => ' !important'
				),
			),
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_silver_borderwidth','goldy_silver_button_border_color',
			'label'    => esc_html__( 'Border Width', 'goldy-silver' ),
			'description' => esc_html__( 'in px', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'  => '1px solid',
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'border',
				),
			),
		]
	);

	new \Kirki\Field\Dimension(
		[
			'settings'    => 'goldy_silver_button_border_radius',
			'label'       => esc_html__( 'Border Radius', 'goldy-silver' ),
			'description' => esc_html__( 'in px', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'     => '50px',
			'choices'     => [
				'accept_unitless' => true,
			],
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'border-radius',
				),
			),
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_silver_button_padding',
			'label'    => esc_html__( 'Button Padding', 'goldy-silver' ),
			'description' => esc_html__( '8px 15px', 'goldy-silver' ),
			'section'     => 'button_section',
			'default'  => esc_html__( '8px 15px', 'goldy-silver' ),
			'output' => array(
				array(
					'element'  => 'button, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button,.nav-previous a, .nav-next a, .buttons, .woocommerce a.button , .woocommerce button, .woocommerce .single-product button, .woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce button.button.alt.disabled',
					'property' => 'padding',
				),
			),
		]
	);
?>