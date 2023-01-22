<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-silver
 */

if(get_theme_mod('goldy_silver_display_breadcrumb_section',true) != ''){
	goldy_silver_breadcrumb_slider();
}elseif(get_post_type()){	
	if(get_post_meta(get_the_ID(),'goldy_silver_breadcrumb_select',true) == 'yes'){
		goldy_silver_breadcrumb_slider();
	}
}