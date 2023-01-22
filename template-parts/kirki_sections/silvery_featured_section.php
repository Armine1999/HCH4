<?php
global $goldy_silver_themetype;
// Featured Section
new \Kirki\Section(
	'featured_section',
	[
		'title'       => esc_html__( 'Featured Section', 'goldy-silver' ),
		'panel'       => 'globly_theme_option',
		'priority'    => 160,
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'goldy_silver_featured_section_content',
		'label'    => esc_html__( 'featured Items Content', 'goldy-silver' ),
		'row_label' => array( 'value' => 'Info item' ),
		'section'  => 'featured_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_value'    => 'fa-cloud',
				'title'    => 'Featured title 1',
				'text'    => 'this is featured.',	
			],
			[
				'icon_value'    => 'fa-facebook',
				'title'    => 'Featured title 2',
				'text'    => 'this is featured.',	
			],
			[
				'icon_value'    => 'fa-twitter',
				'title'    => 'Featured title 3',
				'text'    => 'this is featured.',	
			],
		],
		'fields'   => [
			'icon_value'    => [
				'type'		  => 'text',
				'label'       => esc_html__( 'Icon:', 'goldy-silver' ),
				'description' => esc_html__( 'Note: Some icons may not be displayed here. You can see the full list of icons at', 'goldy-silver' ),
			],
			'title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'goldy-silver' ),
			],
			'text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'goldy-silver' ),
			],
		],
		'partial_refresh'    => [
			'goldy_silver_featured_section_content' => [
				'selector'        => '.theme_section_info',
				'render_callback' => function() {
				    return get_theme_mod('goldy_silver_featured_section_content');
				}
			],
		],
		'choices' => [
			'limit' => ($goldy_silver_themetype['themtypeis']=='normal') ? 3 : 100,
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'featured_section_icon_size',
		'label'    => esc_html__( 'Icon Size', 'goldy-silver' ),
		'description' => esc_html__( 'in px', 'goldy-silver' ),
		'section'  => 'featured_section',
		'priority'    => 160,
		'default'  => '45px',
		'output' => array(
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'font-size',
			),
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'width',
			),
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'height',
			),
		),
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'featured_section_bg_image',
		'label'       => esc_html__( 'Backgroung Image', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '',
		'priority'    => 160,
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_position',
		'label'       => esc_html__( 'Background Position', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => 'center center',
		'placeholder' => esc_html__( 'Choose an option', 'goldy-silver' ),
		'priority'    => 160,
		'choices'     => [
			'left top' => esc_html__( 'Left Top', 'goldy-silver' ),
			'left center' => esc_html__( 'Left Center', 'goldy-silver' ),
			'left bottom' => esc_html__( 'Left Bottom', 'goldy-silver' ),
			'right top' => esc_html__( 'Right Top', 'goldy-silver' ),
			'right center' => esc_html__( 'Right Center', 'goldy-silver' ),
			'right bottom' => esc_html__( 'Right Bottom', 'goldy-silver' ),
			'center top' => esc_html__( 'Center Top', 'goldy-silver' ),
			'center center' => esc_html__( 'Center Center', 'goldy-silver' ),
			'center bottom' => esc_html__( 'Center Bottom', 'goldy-silver' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-position',
			),
		),
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_attachment',
		'label'       => esc_html__( 'Background Attachment', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => 'scroll',
		'priority'    => 160,
		'placeholder' => esc_html__( 'Choose an option', 'goldy-silver' ),
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'goldy-silver' ),
			'fixed' => esc_html__( 'Fixed', 'goldy-silver' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-attachment',
			),
		),
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_size',
		'label'       => esc_html__( 'Background Size', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => 'cover',
		'priority'    => 160,
		'placeholder' => esc_html__( 'Choose an option', 'goldy-silver' ),
		'choices'     => [
			'auto' => esc_html__( 'Auto', 'goldy-silver' ),
			'cover' => esc_html__( 'Cover', 'goldy-silver' ),
			'contain' => esc_html__( 'Contain', 'goldy-silver' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-size',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_bg_color',
		'label'       => __( 'Background Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#ffffff',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_text_color',
		'label'       => __( 'Text Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#333333',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_contain_bg_color',
		'label'       => __( 'Contain Background Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#deedff',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.section-featured-wrep',
				'property' => 'background',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_bg_hover_color',
		'label'       => __( 'Contain Background Hover Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#b7cced',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.section-featured-wrep:before, .section-featured-wrep:after',
				'property' => 'background',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_contain_text_color',
		'label'       => __( 'Contain Text Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#273641',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.section-featured-wrep',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_color',
		'label'       => __( 'Icon Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#273641',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .featured_content .featured-icon',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_bg_color',
		'label'       => __( 'Icon Background Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#fcf5f4',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .featured_content .featured-icon',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_hover_color',
		'label'       => __( 'Icon Hover Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#273641',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .section-featured-wrep:hover i',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_bg_hover_color',
		'label'       => __( 'Icon Background Hover Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#fcf5f4',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured_content_inner:hover .featured-icon',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_border_color',
		'label'       => __( 'Border Color', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'     => '#d2d2d2',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-description',
				'property' => 'border-color',
			),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'featured_section_Margin',
		'label'    => esc_html__( 'Margin', 'goldy-silver' ),
		'description' => esc_html__( 'in px', 'goldy-silver' ),
		'section'     => 'featured_section',
		'default'  => esc_html__( '0px 0px 0px 0px', 'goldy-silver' ),
		'priority' => 160,
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'margin',
			),
		),
	]
);
?>