<?php

if ( ! function_exists( 'goldy_silver_breadcrumb_title' ) ) {
	function goldy_silver_breadcrumb_title() {
		
		if ( is_home() || is_front_page()):
			
			single_post_title();
			
		elseif ( is_day() ) : 
										
			printf( esc_html( 'Daily Archives: %s', 'experoner' ), get_the_date() );
		
		elseif ( is_month() ) :
		
			printf( esc_html( 'Monthly Archives: %s', 'experoner' ), (get_the_date( 'F Y' ) ));
			
		elseif ( is_year() ) :
		
			printf( esc_html( 'Yearly Archives: %s', 'experoner' ), (get_the_date( 'Y' ) ) );
			
		elseif ( is_category() ) :
		
			printf( esc_html( 'Category Archives: %s', 'experoner' ), (single_cat_title( '', false ) ));

		elseif ( is_tag() ) :
		
			printf( esc_html( 'Tag Archives: %s', 'experoner' ), (single_tag_title( '', false ) ));
			
		elseif ( is_404() ) :

			printf( esc_html( 'Error 404', 'experoner' ));
			
		elseif ( is_author() ) :
		
			printf( esc_html( 'Author: %s', 'experoner' ), (get_the_author( '', false ) ));			
			
		elseif ( class_exists( 'woocommerce' ) ) : 
			
			if ( is_shop() ) {
				woocommerce_page_title();
			}
			
			elseif ( is_cart() ) {
				the_title();
			}
			
			elseif ( is_checkout() ) {
				the_title();
			}
			
			else {
				the_title();
			}
		else :
				the_title();
				
		endif;
	}
}

if ( ! function_exists( 'goldy_silver_breadcrumb_sections' ) ) :
	function goldy_silver_breadcrumb_sections( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/breadcrumb' );
	}
endif;
if ( ! function_exists( 'goldy_silver_featuredimage_slider' ) ) :
	function goldy_silver_featuredimage_slider( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/featured_slider' );
	}
endif;
if ( ! function_exists( 'goldy_silver_featured_section' ) ) :
	function goldy_silver_featured_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/featured_section' );
	}
endif;
if ( ! function_exists( 'goldy_silver_about_section' ) ) :
	function goldy_silver_about_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/about_section' );
	}
endif;
if ( ! function_exists( 'goldy_silver_our_portfolio_section' ) ) :
	function goldy_silver_our_portfolio_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/our_portfolio' );
	}
endif;
if ( ! function_exists( 'goldy_silver_appointment_section' ) ) :
	function goldy_silver_appointment_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/book_an_appointment' );
	}
endif;
if ( ! function_exists( 'goldy_silver_our_team_section' ) ) :
	function goldy_silver_our_team_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/our_team' );
	}
endif;
if ( ! function_exists( 'goldy_silver_our_testimonial_section' ) ) :
	function goldy_silver_our_testimonial_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/our_testimonial' );
	}
endif;
if ( ! function_exists( 'goldy_silver_social_section' ) ) :
	function goldy_silver_social_section( $selector = 'header' ) {
		get_template_part( 'template-parts/social_info/social_secion' );
	}
endif;
if ( ! function_exists( 'goldy_silver_our_sponsors_section' ) ) :
	function goldy_silver_our_sponsors_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/our_sponsors' );
	}
endif;
if ( ! function_exists( 'goldy_silver_services_section' ) ) :
	function goldy_silver_services_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/services_section' );
	}
endif;
if ( ! function_exists( 'goldy_silver_widget_section' ) ) :
	function goldy_silver_widget_section( $selector = 'header' ) {
		get_template_part( 'template-parts/theme_option/widget_section' );
	}
endif;


// drag and drop pro version


if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}



/**
 * The custom control class
 */


class goldy_silver_recommand_about_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}
// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_about_activ_section';
	return $controls;

} );


class goldy_silver_recommand_appoinment_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_appoinment_activ_section';
	return $controls;

} );

class goldy_silver_recommand_portfolio_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_portfolio_activ_section';
	return $controls;

} );

class goldy_silver_recommand_our_team_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_our_team_activ_section';
	return $controls;

} );

class goldy_silver_recommand_our_testminial_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_our_testminial_activ_section';
	return $controls;

} );

class goldy_silver_recommand_our_services_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_our_services_activ_section';
	return $controls;

} );

class goldy_silver_recommand_breadcrumb_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_breadcrumb_activ_section';
	return $controls;

} );

class goldy_silver_recommand_ordering_activ_section extends Kirki\Control\Base {

	public $type = 'goldy-silver-gp-upsell-active';

	public $text = '';

	public $reg_url = '';

    public function json() {
        $json = parent::json();
        $json['text'] = $this->text;
        $json['reg_url'] = esc_url($this->reg_url);
        return $json;
    }

	public function render_content() { ?>
		<div class="custom-action">
			<div class="silvery_custom_message">
				<h2>Recommand Plugin</h2>
				<h4 class="customize-control-title">Install and activate Slivery Extender plugin for taking full advantage of all the features this theme has to offer goldy_silver.</h4>
			</div>
        	<p class="plugin-card-slivery-extender action_button ">
            	<a data-slug="slivery-extender" class="button button-secondary alignright button_pro activate-now button button-primary" href="<?php echo esc_url($this->reg_url);?>"><?php echo esc_html( $this->text ); ?></a>
            </p>
        </div>
		<?php
	}
}

// Register our custom control with Kirki.
add_filter( 'kirki_control_types', function( $controls ) {
	$controls['goldy-silver-gp-upsell-active'] = 'goldy_silver_recommand_ordering_activ_section';
	return $controls;

} );