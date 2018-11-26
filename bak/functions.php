<?php
/**
 * GFF Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GFF_Starter
 */

if ( ! function_exists( 'gff_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gff_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GFF Starter, use a find and replace
	 * to change 'gff-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gff-starter', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Header Menu', 'gff-starter' ),
		'menu-2' => esc_html__( 'Footer Menu', 'gff-starter' ),
		'menu-3' => esc_html__( 'Top Menu', 'gff-starter' ),
		'social-menu-footer' => esc_html__( 'Social Footer Menu', 'gff-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gff_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gff_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gff_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gff_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'gff_starter_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function gff_starter_scripts() {
wp_enqueue_style( 'gff-starter-style', get_stylesheet_directory_uri() . '/style.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-responsive-menu-css', get_stylesheet_directory_uri()  . '/css/slicknav.css', array(), '20151215' );

wp_enqueue_style( 'gff-starter-font-awesome', get_stylesheet_directory_uri()  . '/css/font-awesome.css', array(), '1.0' );

	wp_enqueue_style( 'gff-bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '20151215' );
	wp_enqueue_style( 'gff-custom-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '20151215' );
wp_enqueue_style( 'gff-starter-responsive-menu-css', get_stylesheet_directory_uri()  . '/css/slicknav.css', array(), '20151215' );
	wp_enqueue_style( 'gff-slider-style', get_stylesheet_directory_uri() . '/css/slick.css', array(), '20151215' );
	
	
wp_enqueue_script( 'gff-starter-slider', get_template_directory_uri() . '/js/slick.js', array(), '20151215', true );
	wp_enqueue_script( 'gff-starter-slider-init', get_template_directory_uri() . '/js/slick-init.js', array(), '20151215', true );
wp_enqueue_script( 'gff-starter-responsive-menu', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), '20151215', true );
wp_enqueue_script( 'gff-starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gff_starter_scripts' );
add_filter('widget_text','do_shortcode');

/** Fallback Jquery loaded in footer in case Google tanks
*/

// jQuery from Google's CDN, fallback to local if not available
add_action('wp_enqueue_scripts', 'load_external_jQuery');

// Deregister jQuery that is included with WordPress
function load_external_jQuery() {
    wp_deregister_script( 'jquery' );

// Check to make sure Google's library is available
    $link = 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js';
    $try_url = @fopen($link,'r');
        if( $try_url !== false ) {
            // If it's available, get it registered
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
    } else {
        // Register the local file if CDN fails
        wp_register_script('jquery', get_template_directory_uri().'/js/libs/jquery-3.1.1.min.js', __FILE__, false, '1.11.1', true);  
    }
    // Get it enqueued
    wp_enqueue_script('jquery');
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom widgets and widget areas.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Landing page cities
 */
require get_template_directory() . '/inc/landingpage-cities.php';


// Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/**
 * Fix Gravity Form Tabindex Conflicts
 * http://gravitywiz.com/fix-gravity-form-tabindex-conflicts/
 */
add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
    $starting_index = 1000; // if you need a higher tabindex, update this number
    if( $form )
        add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
    return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}

add_action( 'wp_footer', 'cf7_thank_you_redirect' );

function cf7_thank_you_redirect() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '622' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/confirmed/';
    } else if ( '421' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/thank-you/';
    } else if ( '744' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/es-thank-you/';
    } else if ( '407' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/confirmation/';
    } else if ( '743' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/es-confirmation/';
    } else if ( '1140' == event.detail.contactFormId ) {
        location = 'http://www.elpasocashhomebuyers.com/thank-you/';
    } else {
        // do nothing
    }
}, false );
</script>
<?php
}

function wpb_add_google_fonts() {
    wp_enqueue_style( 'open', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', false );

    if(is_page('landing')) :
        wp_enqueue_style( 'open', 'https://fonts.googleapis.com/css?family=Poppins:300,400,600', false );
    endif;
//    wp_enqueue_style( 'nunito', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//
//function landing_style() {
//    wp_enqueue_script( 'landing-style', get_template_directory_uri() . '/css/main.css', array('gff-starter-style'), '1.0', true );
//}
//
//add_action( 'wp_enqueue_scripts', 'landing_style' );