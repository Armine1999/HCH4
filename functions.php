<?php
/**
 * goldy-silver functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldy-silver
 */


include_once( 'inc/kirki/kirki.php' );

add_action('init',"goldy_silver_load_files",99);
function goldy_silver_load_files(){

    if (! function_exists( 'Kirki' )) {
        return;
    }
    
    include_once( 'template-parts/kirki_sections/silvery_global.php' );
    include_once( 'template-parts/kirki_sections/silvery_featured_slider.php' );
    include_once( 'template-parts/kirki_sections/silvery_featured_section.php' );
    include_once( 'template-parts/kirki_sections/silvery_our_sponsors.php' );
    include_once( 'template-parts/kirki_sections/silvery_our_portfolio.php' );
    include_once( 'template-parts/kirki_sections/silvery_about_section.php' );
    include_once( 'template-parts/kirki_sections/silvery_book_an_appoinment.php' );
    include_once( 'template-parts/kirki_sections/silvery_our_team.php' );
    include_once( 'template-parts/kirki_sections/silvery_our_testmonial.php' );
    include_once( 'template-parts/kirki_sections/silvery_our_services.php' );
    include_once( 'template-parts/kirki_sections/silvery_breadcrumb_section.php' );
    include_once( 'template-parts/kirki_sections/silvery_home_page_ordering.php' );
}

if ( ! defined( '_GOLDY_SILVER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_GOLDY_SILVER_VERSION', '1.0.0' );
}


if ( ! function_exists( 'goldy_silver_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function goldy_silver_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on goldy-silver, use a find and replace
		 * to change 'goldy-silver' to the name of your theme in all the template files.
		 */
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_editor_style( 'css/editor-style.css' );

		load_theme_textdomain( 'goldy-silver', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'goldy-silver' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'goldy_silver_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'goldy_silver_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $goldy_silver_content_width
 */
function goldy_silver_content_width() {
	$GLOBALS['goldy_silver_content_width'] = apply_filters( 'goldy_silver_content_width', 640 );
}
add_action( 'after_setup_theme', 'goldy_silver_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goldy_silver_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'goldy-silver' ),
			'id'            => 'goldy_silver_sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer1', 'goldy-silver' ),
			'id'            => 'goldy_silver_footer1',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer2', 'goldy-silver' ),
			'id'            => 'goldy_silver_footer2',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer3', 'goldy-silver' ),
			'id'            => 'goldy_silver_footer3',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer4', 'goldy-silver' ),
			'id'            => 'goldy_silver_footer4',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer5', 'goldy-silver' ),
			'id'            => 'goldy_silver_footer5',
			'description'   => esc_html__( 'Add widgets here.', 'goldy-silver' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'goldy_silver_widgets_init' );


function goldy_silver_wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 350, true );
}
add_action( 'after_setup_theme', 'goldy_silver_wpdocs_setup_theme' );



// Add custom meta box
add_action("add_meta_boxes", "goldy_silvar_add_sidebar_meta_box");
function goldy_silvar_add_sidebar_meta_box()
{
	$post_types = get_post_type();
    add_meta_box("goldy-silver-meta-box", esc_html__( "Custom Meta Box", 'goldy-silver' ),"goldy_silver_sidebar_meta_box_markup", $post_types, "normal", "high", null);
}
function goldy_silver_sidebar_meta_box_markup($object){
	?>
	<table class="admin_sidebar_select">
		<tr><td><label><h2 class="custom_meta"><?php echo esc_html__( 'Breadcrumb', 'goldy-silver' );?></h2></label></td></tr>
	   	<tr>
	   		<td>
	   			<label for="goldy_silver_breadcrumb_select">
	   				<input type="radio" name="goldy_silver_breadcrumb_select" id="goldy_silver_breadcrumb_select" value="yes" <?php if(get_post_meta($object->ID,'goldy_silver_breadcrumb_select',true)=='yes'){echo "checked";}?>><?php echo esc_html__( 'Yes', 'goldy-silver' );?> 
	   				<input type="radio" name="goldy_silver_breadcrumb_select" id="goldy_silver_breadcrumb_select" value="no" <?php if(get_post_meta($object->ID,'goldy_silver_breadcrumb_select',true)=='no'){echo "checked";}?>><?php echo esc_html__( 'No', 'goldy-silver' );?>
	   			</label>
	   		</td>
	   	</tr>
	   	<tr><td><label><h2 class="custom_meta">Sidebar</h2></label></td></tr>
   		<tr>
	   		<td>
	   			<label for="no_sidebar">		   				
	   				<input type="radio" name="sidebar_select" id="no_sidebar" class="no_sidebar" value="no_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='no_sidebar'){echo "checked";}?>>
		   				<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/full.png' ?>">
		   			</input>
	   			</label>
	   			<label for="left_sidebar">
	   				<input type="radio" name="sidebar_select" id="left_sidebar" class="left_sidebar" value="left_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='left_sidebar'){echo "checked";}?>>
	   					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/left.png' ?>">
	   				</input>
	   			</label>
	   			<label for="right_sidebar">			   				
	   				<input type="radio" name="sidebar_select" id="right_sidebar" class="right_sidebar" value="right_sidebar" <?php if(get_post_meta($object->ID,'sidebar_select',true)=='right_sidebar'){echo "checked";}?>>
	   					<img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/right.png' ?>">
	   				</input>
	   			</label>			
	   		</td>
	   	</tr>
	</table>
	<?php
}
add_action( 'save_post','goldy_silver_save_sidebar_meta_box_data');
function goldy_silver_save_sidebar_meta_box_data( $post_id ) {
	if(isset($_REQUEST['goldy_silver_breadcrumb_select'])){
		$goldy_silver_breadcrumb_select = filter_var(wp_unslash($_REQUEST['goldy_silver_breadcrumb_select']),FILTER_SANITIZE_STRING);
		update_post_meta($post_id,'goldy_silver_breadcrumb_select',$goldy_silver_breadcrumb_select);
	}
	if(isset($_REQUEST['sidebar_select'])){
		$sidebar_select = filter_var(wp_unslash($_REQUEST['sidebar_select']),FILTER_SANITIZE_STRING);
		update_post_meta($post_id,'sidebar_select',$sidebar_select);
	}
}

function goldy_silver_breadcrumb_slider(){
	?>
	<div class="breadcrumb_info">
		<div class="breadcrumb_data">
			<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-centerc">
				<div class="breadcrumb-content">
					<div class="breadcrumb-heading">
						<h1><?php  goldy_silver_breadcrumb_title();	?></h1>
					</div>
					<ol class="breadcrumb-list">
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'goldy-silver' );?></a>
							<?php echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;"; ?>
						</li>
						<li>
							<?php goldy_silver_breadcrumb_title();?>
						</li>
					</ol>
				</div> 
			</section>
		</div>		
	</div>
	<?php
}
/**
 * Enqueue scripts and styles.
 */
function goldy_silver_scripts() {
	wp_enqueue_script('jquery', false, array(), false, false);
	wp_enqueue_style( 'goldy-silver-style', get_stylesheet_uri(), array(), _GOLDY_SILVER_VERSION );
	wp_style_add_data( 'goldy-silver-style', 'rtl', 'replace' );

	wp_enqueue_script( 'goldy-silver-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _GOLDY_SILVER_VERSION, true );
		wp_localize_script( 'goldy-silver-navigation', 'aboutdata', 
				array(
					'about_sec' => esc_attr(get_theme_mod('goldy_silver_diseble')),
				)
     	);
	wp_enqueue_script( 'goldy-silver-owl_slider', get_template_directory_uri() . '/assets/js/owl_slider.js', array(), _GOLDY_SILVER_VERSION, true );	
	wp_enqueue_script( 'goldy-silver-owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), _GOLDY_SILVER_VERSION, true );	
	wp_enqueue_script( 'goldy-silver-appoinment', get_template_directory_uri() . '/assets/js/appoinment.js', array(), _GOLDY_SILVER_VERSION, true );
	wp_localize_script( 'goldy-silver-appoinment', 'goldy_silver_appoinment', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_style( 'goldy-silver-theme-css', esc_url(get_template_directory_uri()).'/assets/css/theme.css' , array(), _GOLDY_SILVER_VERSION );
	wp_enqueue_style( 'goldy-silver-fontawesome-css', esc_url(get_template_directory_uri()).'/assets/fontawesome/css/font-awesome.css' , array(), _GOLDY_SILVER_VERSION );
	wp_enqueue_style( 'goldy-silver-owl-carousel-min-css', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.min.css' , array(), _GOLDY_SILVER_VERSION );
	wp_enqueue_style( 'goldy-silver-owl-carousel_theme-min-css', esc_url(get_template_directory_uri()).'/assets/css/owl.theme.min.css' , array(), _GOLDY_SILVER_VERSION );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'goldy_silver_scripts' );

function goldy_silver_admin_script_style() {
	wp_enqueue_style( 'goldy-silver-admin_site-css', esc_url(get_template_directory_uri()).'/assets/css/admin_site.css' , array(), _GOLDY_SILVER_VERSION );
    wp_enqueue_script('goldy_silver_admin-js',  get_template_directory_uri() . '/install-recommended-plugins/admin.js', array( 'jquery' ), false, false );
}
add_action('admin_enqueue_scripts', 'goldy_silver_admin_script_style');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/customizer-control.php';

require get_template_directory() . '/inc/customizer_css.php';

require get_parent_theme_file_path( '/inc/about.php' );

require get_template_directory() . '/inc/appoinment_load.php';

require get_template_directory() . '/install-recommended-plugins/index.php';

require get_template_directory() . '/inc/customizer-options/goldy_silver_recommended_plugin.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}


function goldy_silver_main_js() {
    wp_enqueue_script( 'main-js', get_theme_file_uri( '/assets/js/owl_slider.js' ), array(), '1.0', true );
    // Localize the script with new data and pass php variables to JS.
    $main_js_data = array(
        /* FOR LATER USE. */
        'goldy_silver_img_autoplay' => esc_attr(get_theme_mod('silvery_featured_slider_autoplay', 'true')),
        'goldy_silver_img_autoplayspped' => esc_attr(get_theme_mod('silvery_featured_slider_autoplay_speed','1000')),
        'goldy_silver_img_autoplaytime' => esc_attr(get_theme_mod('silvery_featured_slider_autoplay_timeout','5000')),

        'goldy_silver_autoplay' => esc_attr(get_theme_mod('goldy_silver_our_testimonial_slider_autoplay', 'true')),
        'goldy_silver_autoplayspped' => esc_attr(get_theme_mod('goldy_silver_our_testimonial_slider_autoplay_speed','1000')),
        'goldy_silver_autoplaytime' => esc_attr(get_theme_mod('goldy_silver_our_testimonial_autoplay_timeout','5000')),

        'goldy_silver_sponsors_autoplay' => esc_attr(get_theme_mod('goldy_silver_our_sponsors_slider_autoplay', 'true')),
        'goldy_silver_sponsors_autoplayspped' => esc_attr(get_theme_mod('goldy_silver_our_sponsors_slider_autoplay_speed','1000')),
        'goldy_silver_sponsors_autoplaytime' => esc_attr(get_theme_mod('goldy_silver_our_sponsors_autoplay_timeout','5000')),


    );
    wp_localize_script( 'main-js', 'main_vars', $main_js_data );
}
add_action( 'wp_enqueue_scripts', 'goldy_silver_main_js' );

global $goldy_silver_default;
$goldy_silver_default = [
	'options' => [
		'goldy_silver_contact_info_number' => '04463235323',
		'goldy_silver_email_info_number'  => 'info@website.com',
		'goldy_silver_display_social_icon'  => true,
		'goldy_silver_social_icon_section_content'=> [
			[
				'icon_value'     => 'fa-facebook',
				'link_url'           => '#',			
			],
			[
				'icon_value'     => 'fa-twitter',
				'link_url'           => '#',				
			],
			[
				'icon_value'     => 'fa-linkedin',
				'link_url'           => '#',				
			],
			[
				'icon_value'     => 'fa-instagram',
				'link_url'           => '#',				
			],
		], 
		'goldy_silver_featuredimage_slider'=> [
			[

				'title'    => esc_html__('New Skills', 'goldy-silver'),
				'text'    => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'goldy-silver'),	
				'link_url'    => esc_html__('#', 'goldy-silver'),
				'link_text'   => esc_html__( 'Button', 'goldy-silver' ),	
			],
		],
		'goldy_silver_featured_section_content'=> [
			[
				'icon_value'    => 'fa-cloud',
				'title'    => esc_html__( 'Featured title 1', 'goldy-silver' ),
				'text'    => esc_html__( 'this is featured.', 'goldy-silver' ),	
			],
			[
				'icon_value'    => 'fa-facebook',
				'title'    =>  esc_html__( 'Featured title 2', 'goldy-silver' ),
				'text'    =>  esc_html__( 'this is featured.', 'goldy-silver' ),	
			],
			[
				'icon_value'    => 'fa-twitter',
				'title'    => esc_html__( 'Featured title 3', 'goldy-silver' ),
				'text'    => esc_html__( 'this is featured.', 'goldy-silver' ),	
			],
		], 
		'goldy_silver_our_portfolio_main_title' => esc_html__('Our Portfolio', 'goldy-silver' ),
		'goldy_silver_our_portfolio_desc' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'goldy-silver' ),
		'goldy_silver_our_portfolio_content' =>  [
			[
				'image'  => '',
				'title'           => esc_html__( 'Free Consulting', 'goldy-silver' ),
				'text'        => esc_html__( 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sapien, Sit Sed Accumsan.', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),				
			],
			[
				'image'  => '',
				'title'           => esc_html__( 'Best Analysis', 'goldy-silver' ),
				'text'        => esc_html__( 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sapien, Sit Sed Accumsan.', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),			
			],
			[
				'image'  => '',
				'title'       => esc_html__( 'Successes Reports', 'goldy-silver' ),
				'text'        => esc_html__( 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Sapien, Sit Sed Accumsan.'),
				'link_url'           => esc_html__('#', 'goldy-silver'),				
			],
		],
		'goldy_silver_about_main_title' => esc_html__('About Us', 'goldy-silver' ),
		'goldy_silver_about_section_layout_title' => esc_html__('Hi, I Am Samantha!', 'goldy-silver' ),
		'goldy_silver_about_section_layout_subheading' => esc_html__('Owner/Founder, Executive Coach', 'goldy-silver' ),
		'goldy_silver_about_section_layout_desc' => esc_html__('Yes, I Know My Stuff! And Throughout Our Coaching Time, You Will Develop The Tools And Confidence To Take Action. My Way Of Coaching Is To Empower You In Becoming The Leader You Want To Be. You Are Unique And So Your Coaching Should Be Too.', 'goldy-silver' ),
		'goldy_silver_about_section_layout_btn' => esc_html__('Read More', 'goldy-silver' ),
		'goldy_silver_about_section_layout_btn_link' => esc_html__('#', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_main_title' => esc_html__('Book an Appointment', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_name_ph' => esc_html__('Enter Your Name', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_email_ph' => esc_html__('Enter Your Email', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_number_ph' => esc_html__('Your Moblie Number', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_query_ph' => esc_html__('Your Query', 'goldy-silver' ),
		'goldy_silver_book_an_appoinment_btn_text' => esc_html__('Submit', 'goldy-silver' ),

		'goldy_silver_our_team_main_title' => esc_html__('Our Team', 'goldy-silver' ),
		'goldy_silver_our_team_desc' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'goldy-silver' ),
		'goldy_silver_our_team_content' =>  [
			[
				'title'          => esc_html__( 'Rizon Pet', 'goldy-silver' ),
				'subtitle'       => esc_html__( 'Project Manager', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),				
			],
			[
				'title'          => esc_html__( 'Glenn Maxwell', 'goldy-silver' ),
				'subtitle'       => esc_html__( 'Project Manager', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),					
			],
			[
				'title'          => esc_html__( 'Aaron Finch', 'goldy-silver' ),
				'subtitle'       => esc_html__( 'Manager And Director', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),					
			],
			[
				'title'          => esc_html__( 'Christiana Ena', 'goldy-silver' ),
				'subtitle'       => esc_html__( 'Project Manager', 'goldy-silver' ),
				'link_url'           => esc_html__('#', 'goldy-silver'),					
			],
		],
		'our_testimonial_main_title'  => esc_html__('Our Testimonial', 'goldy-silver' ),
		'our_testimonial_desc'  => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'goldy-silver' ),
		'our_testimonial_content' => [
			[
				'image'    => '',
				'title'    => esc_html__( 'Rizon Pet', 'goldy-silver' ),
				'subtitle'    => esc_html__( 'Project Manager', 'goldy-silver' ),
				'text'    => esc_html__( 'Cricket is a bat-and-ball game played between two teams of eleven players each on a field at the centre.', 'goldy-silver' ),
			],
			[
				'image'    => '',
				'title'    => esc_html__( 'Glenn Maxwell', 'goldy-silver' ),
				'subtitle'    => esc_html__( 'Project Manager', 'goldy-silver' ),
				'text'    => esc_html__( 'Cricket is a bat-and-ball game played between two teams of eleven players each on a field at the centre.', 'goldy-silver' ),
			],
			[
				'image'    => '',
				'title'    => esc_html__( 'Aaron Finch', 'goldy-silver' ),
				'subtitle'    => esc_html__( 'Project Manager', 'goldy-silver' ),
				'text'    => esc_html__( 'Cricket is a bat-and-ball game played between two teams of eleven players each on a field at the centre.', 'goldy-silver' ),
			],
		],
		'goldy_silver_our_sponsors_main_title' => esc_html__('Our Sponsors', 'goldy-silver' ),
		'goldy_silver_our_sponsors_section_content'=> [
			[		
				'image'    => '',
			],
			[
				'image'    => '',
			],
			[
				'image'    => '',
			],
		],
		'goldy_silver_our_services_main_title' => esc_html__('Our Services', 'goldy-silver' ),
		'goldy_silver_our_services_first_widget_title' => esc_html__('New Skills', 'goldy-silver' ),
		'goldy_silver_our_services_first_widget_desc' => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.', 'goldy-silver' ),
		'goldy_silver_our_services_second_widget_title' => esc_html__('23 Hours Services', 'goldy-silver' ),
		'goldy_silver_our_services_second_widget_desc' => esc_html__(' when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_title' => esc_html__('opening Hours', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc1' => esc_html__('Monday-Friday', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc2' => esc_html__('9:00AM To 11:00PM', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc3' => esc_html__('Saturday', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc4' => esc_html__('10:00AM To 9:00PM', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc5' => esc_html__('Sunday', 'goldy-silver' ),
		'goldy_silver_our_services_third_widget_desc6' => esc_html__('10:00AM To 5:00PM', 'goldy-silver' ),
	],
];

add_theme_support( 'starter-content',$goldy_silver_default);


add_action("init","theme_limit_set",10);
function theme_limit_set(){
	global $goldy_silver_themetype;
	$goldy_silver_themetype['themtypeis']='normal';
	if (is_plugin_active('slivery-extender/slivery-extender.php') ) {
		$goldy_silver_themetype['pluginactive']="yes";
	}else{
		$goldy_silver_themetype['pluginactive']="no";
	}
}


add_action( 'admin_notices', 'goldy_silver_admin_notice_demo_data' );
function goldy_silver_admin_notice_demo_data() {
	if( !empty( $_GET['status'] ) && $_GET['status'] == 'goldy_silver_hide_msg' ){
		update_option( 'goldy_silver_hide_msg', true );
	}

	$status = get_option( 'goldy_silver_hide_msg' );
	if( $status == true ){
		return;
	} 

	$recommended_plugins = apply_filters( 'goldy_silver_plugins', $plugins = array() );
	if( empty( $recommended_plugins ) ){
		return;
	}
	$my_theme = wp_get_theme();
	$theme_name = $my_theme->get( 'Name' );
	$nonce = wp_create_nonce("goldy_silver_install_plugins");
	?>
	 <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="goldy-silver-getting-started-notice clearfix">
            <div class="goldy-silver-theme-screenshot">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'goldy-silver' ); ?>" />
            </div><!-- /.goldy-silver-theme-screenshot -->
            <div class="theme-info-wrapper">
		        <?php 
		        echo '<strong style="font-size: 20px; padding-bottom: 10px; display: block;">';
		        printf(
		        	esc_html__( 'Thank you for installing %1$s', 'goldy-silver' ),
		        	esc_attr($theme_name)
		        ); 
		        echo '</strong>';
		        echo '<p>' . esc_html__( "Install and activate Inverstheme For Theme plugin for taking full advantage of all the features this theme has to offer." , 'goldy-silver' ) . '</p>';
		        ?>

		        <div class="button_wrapper_theme" style="margin-top: 20px;">
			        <a 
			        href="javascript:void(0)" 
			        class="button button-primary button-hero goldy_silver_install_plugins" 
			        data-nonce="<?php echo esc_attr( $nonce ); ?>"
					data-redirect="<?php echo esc_url( admin_url( 'customize.php' )); ?>"
			        >
			        <!-- themes.php?page=tgmpa-install-plugins -->
			        <img class="lodear_img" src="<?php echo esc_url(get_template_directory_uri().'/assets/images/loader1.gif') ?>" style="display: none;">
			        <span><?php esc_html_e( 'Get Started', 'goldy-silver' ) ?></span>
			    	</a>

			        <a 
			        href="<?php echo esc_url( admin_url('/?status=goldy_silver_hide_msg') ); ?>" 
			        class="button button-default button-hero goldy_silver_dismiss" ><?php esc_html_e( 'Close', 'goldy-silver' ) ?></a>
		        </div>
	        </div>   
        </div>
    </div>    
    <?php
}

add_filter( 'goldy_silver_plugins', function(){

	$plugins = array(
		'slivery-extender' => array(
			'slug' => 'slivery-extender/slivery-extender.php',
			'zip' => 'slivery-extender'
		),	
	);
	return $plugins;
});

function register_block_styles( $block_name, $style_properties ) {
	return WP_Block_Styles_Registry::get_instance()->register( $block_name, $style_properties );
}

function register_block_patterns( $pattern_name, $pattern_properties ) {
	return WP_Block_Patterns_Registry::get_instance()->register( $pattern_name, $pattern_properties );
}