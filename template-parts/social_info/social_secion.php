<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-silver
 */
global $goldy_silver_default;
// $number = get_theme_mod( 'silvary_contact_info_number',$goldy_silver_default);
// echo "<pre>";
// print_r($number);
// echo "</pre>";
?>
<div class="header_topbar_info">
	<div class="header_data">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<div class="header_logo">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				endif;
				$sharp_tian_description = get_bloginfo( 'description', 'display' );
				if ( $sharp_tian_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo esc_html($sharp_tian_description); ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->
	</div>
<?php
if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {?>
	<div class="header_top_bar">
	<?php if(get_theme_mod( 'goldy_silver_contact_info_number',$goldy_silver_default['options']['goldy_silver_contact_info_number'])){ ?>
	
		<?php if(!empty(get_theme_mod( 'goldy_silver_contact_info_number',$goldy_silver_default['options']['goldy_silver_contact_info_number']))){ ?>
				<div class="contact_data">
					<div class="contact_icon">
						<i class="fa fa-phone"></i>
					</div>
					<div class="contact_info">
						<a href="tel:+1234567890"><p><?php echo esc_html(get_theme_mod( 'goldy_silver_contact_info_number',$goldy_silver_default['options']['goldy_silver_contact_info_number'] )); ?></p></a>
					</div>
				</div>
				
		<?php } } 
		if(get_theme_mod( 'goldy_silver_email_info_number',$goldy_silver_default['options']['goldy_silver_email_info_number'] )){
			if(!empty(get_theme_mod( 'goldy_silver_email_info_number',$goldy_silver_default['options']['goldy_silver_email_info_number'] ))){ ?>
			<div class="email_data">
				<div class="email_icon">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="email_info">
					<a href="mailto:info@website.com"><p><?php echo esc_html(get_theme_mod( 'goldy_silver_email_info_number',$goldy_silver_default['options']['goldy_silver_email_info_number'] )); ?></p></a>
				</div>
			</div>
		<?php } 
	}?>
	</div>
	
	<div class="header_social_icon">
	<?php 
	if(get_theme_mod( 'goldy_silver_display_social_icon',$goldy_silver_default['options']['goldy_silver_display_social_icon']) != ''){ 
		?>
			<div class="social_icon_info">
				<div class="social_data">
					<?php 
					$social_icon_section_content  = get_theme_mod( 'goldy_silver_social_icon_section_content',$goldy_silver_default['options']['goldy_silver_social_icon_section_content']);
					if ( ! empty( $social_icon_section_content ) ) {
						// $social_icon_section_content = json_decode( $social_icon_section_content );
						foreach ( $social_icon_section_content as $info_item ) {
							if(get_theme_mod( 'goldy_silver_social_icon_section_content',$goldy_silver_default['options']['goldy_silver_social_icon_section_content']) != ''){
								if(!empty($info_item['link_url'])){
								?>
								<a class="social_icon" href="<?php echo esc_attr($info_item['link_url']);?>" target="_blank">
									<i class="fa <?php echo esc_attr($info_item['icon_value']);?>"></i>
								</a>
								<?php
								}
							}
						}
					} ?>
				</div>
			</div>
		
		<?php 
	}
	?>
	</div>
<?php } ?>
</div>