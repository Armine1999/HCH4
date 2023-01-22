<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-silver
 */
global $goldy_silver_default;

$our_portfolio  = get_theme_mod( 'goldy_silver_our_portfolio_content',$goldy_silver_default['options']['goldy_silver_our_portfolio_content']);

if(empty($our_portfolio)){
	$our_portfolio  = $goldy_silver_default['options']['goldy_silver_our_portfolio_content'];
}
// $our_portfolio = json_decode( $our_portfolio );
	?>
	<div class="our_portfolio_info" id="our_portfolio_info">
		<div class="our_portfolio_data scroll-element js-scroll fade-in-bottom">
			<?php if(get_theme_mod('goldy_silver_our_portfolio_main_title',$goldy_silver_default['options']['goldy_silver_our_portfolio_main_title'])){
				?>
				<div class="goldy_silver_our_portfolio_main_title heading_main_title">
					<h2><?php echo esc_html(get_theme_mod('goldy_silver_our_portfolio_main_title',$goldy_silver_default['options']['goldy_silver_our_portfolio_main_title']));?></h2>
					<span class="separator"></span>
				</div>
				<?php
			} 
			?>
			<div class="our_portfolio_main_disc">
				<p><?php echo esc_html(get_theme_mod( 'goldy_silver_our_portfolio_desc',$goldy_silver_default['options']['goldy_silver_our_portfolio_desc']));?></p>
			</div>		
			<div class="wrappers our_portfolio_section">
				<?php 
					foreach ( $our_portfolio as $info_item ) { 
					// echo "<pre>";
					// print_r($info_item);
					// echo "<pre>";
						?>
						<div class="parent our_portfolio_caption">
							<div class="child our_portfolio_image">
								<div class="our_portfolio_container">
									<div class="protfolio_img_main">
										<div class="protfolio_images">
											<?php if(!empty( $info_item['image'])){ ?>
												<img src="<?php echo $info_item['image']; ?>" alt="The Last of us">
											<?php }else{
												?>
												<img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"> 
												<?php
											} 
											?>
										</div>
									</div>
									<div class="our_port_containe">
										<div class="our_portfolio_title" >
											<h3><?php echo $info_item['title'];?></h3>
											<i class="fa fa-window-minimize" aria-hidden="true"></i>
											<p><?php //echo $info_item->subtitle; ?></p>
											<p class="our_portfolio_desc"><?php echo esc_html($info_item['text']); ?></p>
										</div>	
										<div class="our_portfolio_btn">
										<?php if(!empty($info_item['link_url'])){ ?>
											<a href="<?php echo $info_item['link_url']; ?>">
												<i class="fa fa-arrow-right"></i> 
											</a>
										<?php } ?>
										</div>
									</div>
								</div>
							</div>					
						</div>
						<?php
					}
				//}
				?>
			</div>				
		</div>
	</div>