<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-silver
 */
global $goldy_silver_default;
$our_sponsors  = get_theme_mod( 'goldy_silver_our_sponsors_section_content',$goldy_silver_default['options']['goldy_silver_our_sponsors_section_content']);
if(empty($our_sponsors)){
	$our_sponsors  = $goldy_silver_default['options']['goldy_silver_our_sponsors_section_content'];
}
//if ( ! empty( $featuredimage_slider ) ) {
	?>

		<div class="our_sponsors_section">
			<div class="our_sponsors_info scroll-element js-scroll fade-in-bottom">
				<div class="our_sponsors_data">
					<div class="our_sponsors_title heading_main_title">
						<h2><?php echo esc_html(get_theme_mod( 'goldy_silver_our_sponsors_main_title',$goldy_silver_default['options']['goldy_silver_our_sponsors_main_title'] )); ?></h2>
						<span class="separator"></span>
					</div>
				</div>
				<div class="our_sponsors_contain">
					<div id="our_sponsors_demo" class="owl-carousel owl-theme our_sponsors_demo">
						<?php
						foreach($our_sponsors as $info_item ){
								?>
								<div class="our_sponsors_main">
									<div class="our_sponsors_img">
										<?php if(!empty( $info_item['image'])){
											?>
											<a href='<?php echo esc_attr($info_item['link_url'])?>'><img src="<?php echo esc_attr($info_item['image'])?>"></a>
											
											<?php
										}else{
											?>
											<a href='#'><img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"></a>
											<?php
										} ?>
										<div class="our_spon_area"></div>

									</div>
								</div>

						<?php 
						} 
					// 	} ?>

					</div>
				</div>
			</div>
		</div>		