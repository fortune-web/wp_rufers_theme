<?php

require_once get_template_directory() . '/includes/loader.php';

add_action( 'after_setup_theme', 'rufers_setup_theme' );
add_action( 'after_setup_theme', 'rufers_load_default_hooks' );


function rufers_setup_theme() {

	load_theme_textdomain( 'rufers', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-lightbox' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );


	// Set the default content width.
	$GLOBALS['content_width'] = 525;
	
	/*---------- Register image sizes ----------*/
	
	//Register image sizes
	add_image_size( 'rufers_370x300', 370, 300, true ); //'rufers_370x300 Our Services'
	add_image_size( 'rufers_884x427', 884, 427, true ); //'rufers_884x427 Work Gallery'
	add_image_size( 'rufers_427x427', 427, 427, true ); //'rufers_427x427 Work Gallery'
	add_image_size( 'rufers_350x350', 350, 350, true ); //'rufers_350x350 Our Team'
	add_image_size( 'rufers_250x250', 250, 250, true ); //'rufers_250x250 Testimonials'
	add_image_size( 'rufers_370x250', 370, 250, true ); //'rufers_370x250 Our Blog'
	add_image_size( 'rufers_370x370', 370, 370, true ); //'rufers_370x370 Our Gallery V2'
	add_image_size( 'rufers_90x90', 90, 90, true ); //'rufers_90x90 Testimonial v2'
	add_image_size( 'rufers_370x350', 370, 350, true ); //'rufers_370x350 Our Blog 2'
	add_image_size( 'rufers_55x55', 55, 5, true ); //'rufers_55x55 Testimonials 3'
	add_image_size( 'rufers_570x570', 570, 570, true ); //'rufers_570x570 Projects V1'
	add_image_size( 'rufers_285x285', 285, 285, true ); //'rufers_285x285 Projects V3'
	add_image_size( 'rufers_150x150', 150, 150, true ); //'rufers_150x150 Testimonial v4'
	add_image_size( 'rufers_370x322', 370, 322, true ); //'rufers_370x322 Blog List View'
	add_image_size( 'rufers_1170x420', 1170, 420, true ); //'rufers_1170x420 Our Blog '
	
	/*---------- Register image sizes ends ----------*/
	
	
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'rufers' ),
		'onepage_menu' => esc_html__( 'One Page Menu', 'rufers' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style();
	add_action( 'admin_init', 'rufers_admin_init', 2000000 );
}

/**
 * [rufers_admin_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */


function rufers_admin_init() {
	remove_action( 'admin_notices', array( 'ReduxFramework', '_admin_notices' ), 99 );
}

/*---------- Sidebar settings ----------*/

/**
 * [rufers_widgets_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
function rufers_widgets_init() {

	global $wp_registered_sidebars;

	$theme_options = get_theme_mod( 'rufers' . '_options-mods' );

	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'rufers' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'rufers' ),
		'before_widget' => '<div id="%1$s" class="widget sidebar-widget single-sidebar-box %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="sidebar-title"><div class="pattern-bg" style="background-image: url('.get_template_directory_uri().'/assets/images/pattern/thm-pattern-7.png);"></div><h3><span class="border-left"></span>',
	  	'after_title' => '</h3></div>'
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer Widget', 'rufers'),
		'id' => 'footer-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'rufers'),
		'before_widget'=>'<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>'
	));
	if ( class_exists( '\Elementor\Plugin' )){
	register_sidebar(array(
		'name' => esc_html__('Footer Widget Two', 'rufers'),
		'id' => 'footer-sidebar-2',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'rufers'),
		'before_widget'=>'<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>'
	));
	register_sidebar(array(
		'name' => esc_html__('Footer Widget Three', 'rufers'),
		'id' => 'footer-sidebar-3',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'rufers'),
		'before_widget'=>'<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s"><div id="%1$s" class="footer-widget single-footer-widget single-footer-widget--style3 %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>'
	));
	register_sidebar(array(
		'name' => esc_html__('Services Widget', 'rufers'),
		'id' => 'service-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Services Area.', 'rufers'),
		'before_widget'=>'<div id="%1$s" class="service-widget %2$s">',
		'after_widget'=>'</div>',
		'before_title' => '<div class="sidebar-title"><div class="pattern-bg" style="background-image: url('.get_template_directory_uri().'/assets/images/pattern/thm-pattern-7.png);"></div><h3><span class="border-left"></span>',
	  	'after_title' => '</h3></div>'
	));
	register_sidebar(array(
		'name' => esc_html__('Shop Widget', 'rufers'),
		'id' => 'shop-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Shop Area.', 'rufers'),
		'before_widget'=>'<div id="%1$s" class="widget single-sidebar-box %2$s">',
		'after_widget'=>'</div>',
		'before_title' => '<div class="sidebar-title"><div class="pattern-bg" style="background-image: url('.get_template_directory_uri().'/assets/images/pattern/thm-pattern-7.png);"></div><h3><span class="border-left"></span>',
	  	'after_title' => '</h3></div>'
	));
	}
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'rufers' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'rufers' ),
	  'before_widget'=>'<div id="%1$s" class="widget single-sidebar-box %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><div class="pattern-bg" style="background-image: url('.get_template_directory_uri().'/assets/images/pattern/thm-pattern-7.png);"></div><h3><span class="border-left"></span>',
	  'after_title' => '</h3></div>'
	));
	if ( ! is_object( rufers_WSH() ) ) {
		return;
	}

	$sidebars = rufers_set( $theme_options, 'custom_sidebar_name' );

	foreach ( array_filter( (array) $sidebars ) as $sidebar ) {

		if ( rufers_set( $sidebar, 'topcopy' ) ) {
			continue;
		}

		$name = $sidebar;
		if ( ! $name ) {
			continue;
		}
		$slug = str_replace( ' ', '_', $name );

		register_sidebar( array(
			'name'          => $name,
			'id'            => sanitize_title( $slug ),
			'before_widget' => '<div id="%1$s" class="%2$s widget single-sidebar-box ">',
			'after_widget'  => '</div>',
			'before_title' => '<div class="sidebar-title"><div class="pattern-bg" style="background-image: url('.get_template_directory_uri().'/assets/images/pattern/thm-pattern-7.png);"></div><h3><span class="border-left"></span>',
	  		'after_title' => '</h3></div>'
		) );
	}

	update_option( 'wp_registered_sidebars', $wp_registered_sidebars );
}

add_action( 'widgets_init', 'rufers_widgets_init' );

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function rufers_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'rufers' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'rufers' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'rufers' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'rufers' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'rufers' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'rufers' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'rufers' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'rufers' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'rufers' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'rufers_gutenberg_editor_palette_styles' );

/*---------- Gutenberg settings ends ----------*/

/*---------- Enqueue Styles and Scripts ----------*/

function rufers_enqueue_scripts() {
	$options = rufers_WSH()->option();
	$header_meta = get_post_meta( get_the_ID(), 'header_style_settings');
	$header_option = $options->get( 'header_style_settings' );
	$header = ( $header_meta ) ? $header_meta['0'] : $header_option;
		
		if ( $header == 'header_v1' ) {
			$color_scheme =  '/assets/css/color/theme-color.css';
		} elseif ( $header == 'header_v2' ) {
			$color_scheme =  '/assets/css/color-1.css';
		} elseif ( $header == 'header_v3' ) {
			$color_scheme =  '/assets/css/color-2.css';
		} else {
			$color_scheme =  '/assets/css/color/theme-color.css';
	}
    //styles
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'rufers-aos', get_template_directory_uri() . '/assets/css/aos.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css' );
	wp_enqueue_style( 'custom-animate', get_template_directory_uri() . '/assets/css/custom-animate.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'imp', get_template_directory_uri() . '/assets/css/imp.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css' );
	wp_enqueue_style( 'scrollbar', get_template_directory_uri() . '/assets/css/scrollbar.css' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
	wp_enqueue_style( 'jquery-bootstrap', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'rufers-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/css/bxslider.css' );
	wp_enqueue_style( 'header-section', get_template_directory_uri() . '/assets/css/module-css/header-section.css' );
	wp_enqueue_style( 'banner-section', get_template_directory_uri() . '/assets/css/module-css/banner-section.css' );
	wp_enqueue_style( 'about-section', get_template_directory_uri() . '/assets/css/module-css/about-section.css' );
	wp_enqueue_style( 'blog-section', get_template_directory_uri() . '/assets/css/module-css/blog-section.css' );
	wp_enqueue_style( 'fact-counter-section', get_template_directory_uri() . '/assets/css/module-css/fact-counter-section.css' );
	wp_enqueue_style( 'faq-section', get_template_directory_uri() . '/assets/css/module-css/faq-section.css' );
	wp_enqueue_style( 'contact-page', get_template_directory_uri() . '/assets/css/module-css/contact-page.css' );
	wp_enqueue_style( 'breadcrumb-section', get_template_directory_uri() . '/assets/css/module-css/breadcrumb-section.css' );
	wp_enqueue_style( 'team-section', get_template_directory_uri() . '/assets/css/module-css/team-section.css' );
	wp_enqueue_style( 'rufers-partner-section', get_template_directory_uri() . '/assets/css/module-css/partner-section.css' );
	wp_enqueue_style( 'testimonial-section', get_template_directory_uri() . '/assets/css/module-css/testimonial-section.css' );
	wp_enqueue_style( 'services-section', get_template_directory_uri() . '/assets/css/module-css/services-section.css' );
	wp_enqueue_style( 'footer-section', get_template_directory_uri() . '/assets/css/module-css/footer-section.css' );
	wp_enqueue_style( 'rufers-main', get_stylesheet_uri() );
	wp_enqueue_style( 'rufers-main-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'rufers-custom', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_style( 'theme-color', get_template_directory_uri() . $color_scheme );
	wp_enqueue_style( 'rufers-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'rufers-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	
	
	
    //scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'rufers-aos', get_template_directory_uri().'/assets/js/aos.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-select', get_template_directory_uri().'/assets/js/bootstrap-select.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-countto', get_template_directory_uri().'/assets/js/jquery.countTo.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-enllax', get_template_directory_uri().'/assets/js/jquery.enllax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-paroller', get_template_directory_uri().'/assets/js/jquery.paroller.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'knob', get_template_directory_uri().'/assets/js/knob.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'pagenav', get_template_directory_uri().'/assets/js/pagenav.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax-min', get_template_directory_uri().'/assets/js/parallax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrollbar', get_template_directory_uri().'/assets/js/scrollbar.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'tweenmax', get_template_directory_uri().'/assets/js/TweenMax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'color-switcher', get_template_directory_uri().'/assets/js/color-switcher.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-sidebar', get_template_directory_uri().'/assets/js/jquery-sidebar-content.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-bxslider', get_template_directory_uri().'/assets/js/jquery.bxslider.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-countdown', get_template_directory_uri().'/assets/js/jquery.countdown.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri().'/assets/js/jquery.bootstrap-touchspin.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'rufers-jquery-nice', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'tilt-jquery', get_template_directory_uri().'/assets/js/tilt.jquery.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'rufers-main-script', get_template_directory_uri().'/assets/js/custom.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'rufers_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

/*---------- Google fonts ----------*/

function rufers_fonts_url() {
	
	$fonts_url = '';

		$font_families['Inter']      = 'Inter:wght@300,400,500,600,700,800;900&display=swap';
		$font_families['Be+Vietnam']      = 'Be+Vietnam:wght@300,400,500,600,700,800&display=swap';
		
		$font_families = apply_filters( 'REXAR/includes/classes/header_enqueue/font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$protocol  = is_ssl() ? 'https' : 'http';
		$fonts_url = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css' );

		return esc_url_raw($fonts_url);

}

function rufers_theme_styles() {
    wp_enqueue_style( 'rufers-theme-fonts', rufers_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'rufers_theme_styles' );
add_action( 'admin_enqueue_scripts', 'rufers_theme_styles' );

/*---------- Google fonts ends ----------*/

/*---------- More functions ----------*/

// 1) rufers_set function

/**
 * [rufers_set description]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
if ( ! function_exists( 'rufers_set' ) ) {
	function rufers_set( $var, $key, $def = '' ) {
		//if( ! $var ) return false;

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} elseif ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} elseif ( $def ) {
			return $def;
		} else {
			return false;
		}
	}
}

// 2) rufers_add_editor_styles function

function rufers_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'rufers_add_editor_styles' );

// 3) Add specific CSS class by filter body class.

$options = rufers_WSH()->option(); 
if( rufers_set($options, 'boxed_wrapper') ){

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'boxed_wrapper';
    return $classes;
} );
}

// 4) rufers_related_products_limit function 

function rufers_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'rufers_related_products_args', 20 );
  function rufers_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 1; // arranged in 2 columns
	return $args;
}
add_filter('doing_it_wrong_trigger_error', function () {return false;}, 10, 0);
/*---------- More functions ends ----------*/