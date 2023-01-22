<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-silver
 */
global $goldy_silver_default;
$featured_section  = get_theme_mod( 'goldy_silver_featured_section_content',$goldy_silver_default['options']['goldy_silver_featured_section_content']);
if(empty($featured_section)){
	$featured_section  = $goldy_silver_default['options']['goldy_silver_featured_section_content'];
}
?>
	<div class="featured-section_data">
		<div class="featured_section_info">
			    <div id="featured-section" class="featured-section section scroll-element js-scroll fade-in-bottom">
					<div class="card-container featured_content">
					<?php 
						foreach ( $featured_section as $info_item ) {
							?>
							<div class="section-featured-wrep" style="visibility: visible;animation-duration: 2s;animation-name: zoomIn;">
								<div class="featured-thumbnail"> 
									<div class="featured_content_inner">
										<?php if(!empty($info_item['icon_value'])){ ?>
											<div class="featured-icon">
												<i class="fa <?php echo esc_attr($info_item['icon_value'])?>"></i>
											</div>
										<?php } ?>
											<div class="featured-title"> 
												<h4>
													<?php echo esc_attr($info_item['title']); ?>
												</h4>
											</div>
										<div class="featured-description">
											<p><?php echo esc_html($info_item['text']); ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
						} ?>
					</div>
				</div>
			</div>
		</div>
