<?php

function goldy_silver_about_menu() {
	add_theme_page( esc_html__( 'About Theme', 'goldy-silver' ), esc_html__( 'About Theme', 'goldy-silver' ), 'edit_theme_options', 'goldy-silver-about', 'goldy_silver_about_display' );
}
add_action( 'admin_menu', 'goldy_silver_about_menu' );

function goldy_silver_about_display(){
	?>
	<div class="goldy_silver_about_data">
		<div class="goldy_silver_about_title">
			<h1>Goldy Silver</h1>
			<div class="goldy_silver_about_theme">
				<div class="goldy_silver_about_description">
					<p>
					Goldy Silver is a clean, modern, user friendly, responsive and highly customizable WordPress Theme. you’ll easily find the design of this theme impressive and suitable for your Website. This Goldy Silver WordPress theme, carries an abundance of crucial features and functionalities. For instance, featured slider, featured Section, About Section, Our Portfolio, Book an Appointment, Our team Section, Testimonial Slider, Our Services, Our Sponsors, Sticky Header, Social Information, Sidebar, Excerpt Options, and many more. All of these highly customizable features and sections are completely responsive and absolutely easy to customize. </p>

					<div class="goldy_silver_about_demo">
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free Theme Demo', 'goldy-silver' ); ?></h3>
								<a href="https://inverstheme.com/themedemo/goldy-silver/"><?php echo esc_html( 'Theme Demo ', 'goldy-silver' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Documentation', 'goldy-silver' ); ?></h3>
								<a href="https://www.inverstheme.com/goldy-silver-documentation/"><?php echo esc_html( 'Read Documentation', 'goldy-silver' ); ?></a>
							</div>
						</div>
						<div class="feature-section">
							<div class="about_data_goldy_solar">
								<h3><?php echo esc_html( 'Free VS Pro', 'goldy-silver' ); ?></h3>
								<a href="https://www.inverstheme.com/theme/goldy-silver-pro/"><?php echo esc_html( 'Compare free Vs Pro ', 'goldy-silver' ); ?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="goldy_silver_about_image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				</div>
			</div>
		</div>
		<ul class="tabs">
			<li class="tab-link current" data-tab="about"><?php echo esc_html( 'About', 'goldy-silver' ); ?></li>
		</ul> 
		<div id="about" class="tab-content current">
			<div class="about_section">
				<div class="about_info_data theme_info">
					<div class="about_theme_title">
						<h2><?php echo esc_html( 'Theme Customizer', 'goldy-silver' ); ?></h2>
					</div>
					<div class="about_theme_data">
						<p><?php echo esc_html( 'All Theme Options are available via Customize screen.', 'goldy-silver' ); ?></p>
					</div>
					<div class="about_theme_btn">
						<a class="customize_btn button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php echo esc_html( 'Customize', 'goldy-silver' ); ?></a>
					</div>
				</div>
				<div class="theme_que theme_info">
					<div class="about_theme_que">
						<h2><?php echo esc_html( 'Got theme support question?', 'goldy-silver' ); ?></h2>
					</div>
					<div class="about_que_data">
						<p><?php echo esc_html( 'Get genuine support from genuine people. Whether its customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'goldy-silver' ); ?></p>
					</div>
					<div class="about_que_btn">
						<a class="support_forum button button-primary" href="https://www.inverstheme.com/contact-us/"><?php echo esc_html( 'Support Forum', 'goldy-silver' ); ?></a>
					</div>
				</div>
			</div>
		</div>			
	</div>
	<?php
}
?>