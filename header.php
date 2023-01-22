<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldy-silver
 */


global $goldy_silver_default, $goldy_silver_themetype;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php

if($goldy_silver_themetype['pluginactive']=='yes'){
	$body_class_added='slivery_active';
}else{
	$body_class_added='slivery_notactive';
}

?>
<body <?php body_class($body_class_added); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goldy-silver' ); ?></a>
			<header id="masthead" class="site-header <?php echo esc_attr(get_theme_mod( 'goldy_silver_header_layout'));?>">	
				<?php //if($goldy_silver_themetype['pluginactive']=='yes'){?>
				<div class="top_bar_info">
					<?php
						goldy_silver_social_section();
					?>
				</div>
			<?php //} ?>
				<div class="main_site_header">
					<div class="header_info">
						<div class="menu_call_button">
							<div class="call_button_info">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" id="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
										<i class="fa fa-bars"></i>
									</button>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>							
								</nav>
								<div class="mobile_menu main-navigation" id="mobile_primary">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
									<button class="menu-toggle" id="mobilepop"  aria-expanded="false">
										<i class="fa fa-close"></i>
									</button>
								</div>

								
								
							</div>
						</div>
					</div>
				</div>
			</header><!-- #masthead -->	
			
		<?php if($goldy_silver_themetype['pluginactive']=='yes'){?>
	<?php echo esc_attr(goldy_silver_breadcrumb_sections());}
	

	if ( is_front_page() ) {

			if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {
				?>
				<div class="theme_section_info">
					<?php 
						$goldy_silver_diseble = get_theme_mod( 'goldy_silver_diseble' );
						$goldy_silver_diseble_array =  explode(",",$goldy_silver_diseble);

						$glodly_ordring = get_theme_mod( 'globalddd_ordering' );
						$glodly_sortable =  explode(",",$glodly_ordring);

						$orderarr = array('goldy_silver_featuredimage_slider','goldy_silver_featured_section','goldy_silver_widget_section','goldy_silver_our_portfolio_section','goldy_silver_about_section','goldy_silver_appointment_section','goldy_silver_our_team_section','goldy_silver_our_testimonial_section','goldy_silver_our_sponsors_section','goldy_silver_services_section');
						$orderarr = apply_filters('goldy_silver_order_settings', $orderarr);
						$global_ordering_array = get_theme_mod( 'global_ordering',$orderarr );
						?>
						<?php
						if(!empty($glodly_ordring)){
							foreach ($glodly_sortable as $glodly_sortables => $glodly_sortable_value) { 
								if(!in_array( $glodly_sortable_value, $goldy_silver_diseble_array)){
									call_user_func($glodly_sortable_value);
								}		
							}
						}elseif(!empty($global_ordering_array)){
							foreach ($global_ordering_array as $global_ordering_arraydd) { 
								if(!in_array( $global_ordering_arraydd, $goldy_silver_diseble_array)){
									call_user_func($global_ordering_arraydd);
								}		
							}
						}
							
					?>
				</div>
				<?php
		}else { ?>
			<div class="theme_section_info">
				<?php 
					$goldy_silver_diseble = get_theme_mod( 'goldy_silver_diseble' );
					$goldy_silver_diseble_array =  explode(",",$goldy_silver_diseble);

					$glodly_ordring = get_theme_mod( 'globalddd_ordering' );
					$glodly_sortable =  explode(",",$glodly_ordring);

					$orderarr = array('goldy_silver_featuredimage_slider','goldy_silver_featured_section','goldy_silver_our_sponsors_section');
					
					$orderarr = apply_filters('goldy_silver_order_settings', $orderarr);
					$global_ordering_array = get_theme_mod( 'global_ordering',$orderarr );
					?>
					<?php
						if(!empty($glodly_ordring)){
							foreach ($glodly_sortable as $glodly_sortables => $glodly_sortable_value) { 
								if(!in_array( $glodly_sortable_value, $goldy_silver_diseble_array)){
									call_user_func($glodly_sortable_value);
								}		
							}
						}elseif(!empty($global_ordering_array)){
							foreach ($global_ordering_array as $global_ordering_arraydd) { 
								if(!in_array( $global_ordering_arraydd, $goldy_silver_diseble_array)){
									call_user_func($global_ordering_arraydd);
								}		
							}
						}
					?>
			</div>
			<?php
		}
	}

?>
	<div class="goldy_silver_container_data">
		<?php
		if(get_post_meta(get_the_ID(),'sidebar_select',true)){
			?>
			<div class="goldy_silver_container_info <?php echo esc_attr(get_post_meta(get_the_ID(),'sidebar_select',true));?> <?php echo esc_attr(get_theme_mod( 'goldy_silver_container_blog_layout','grid_view'));?> <?php echo esc_attr(get_theme_mod( 'goldy_silver_container_page_layout','content_boxed'));?>">
				<?php
		}else{
		?>
		<div class="goldy_silver_container_info <?php echo esc_attr(get_theme_mod( 'sidebar_post_layout'.get_post_type(),'right_sidebar'));?> <?php echo esc_attr(get_theme_mod( 'goldy_silver_container_blog_layout','grid_view'));?> <?php echo esc_attr(get_theme_mod( 'goldy_silver_container_page_layout','content_boxed'));?>">
<?php }