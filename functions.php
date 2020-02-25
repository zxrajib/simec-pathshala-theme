<?php
define( 'bloggermart_THEMEROOT', get_template_directory_uri() );
/**
 * ----------------------------------------------------------------------------------------
 * Load the custom scripts
 * ----------------------------------------------------------------------------------------
 */

if ( ! function_exists( 'bloggermart_scripts' ) ) {
	function bloggermart_scripts() {
		wp_enqueue_style( 'animate', bloggermart_THEMEROOT . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'owl', bloggermart_THEMEROOT . '/assets/css/owl.carousel.min.css' );
		wp_enqueue_style( 'owl_theme', bloggermart_THEMEROOT . '/assets/css/owl.theme.default.min.css' );
		wp_enqueue_style( 'font-awesome', bloggermart_THEMEROOT . '/assets/css/all.css' );
        wp_enqueue_style( 'bloggermart_THEMEROOT', get_stylesheet_uri() );        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'proper', bloggermart_THEMEROOT.'/assets/js/vendor/popper.min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'bootstrap_bundle', bloggermart_THEMEROOT.'/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'owl_js', bloggermart_THEMEROOT.'/assets/js/owl.carousel.min.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'all', bloggermart_THEMEROOT.'/assets/js/all.js', array( 'jquery' ), false, true );
        wp_enqueue_script( 'scripts', bloggermart_THEMEROOT.'/assets/js/scripts.js', array( 'jquery' ), false, true );		
	}
	add_action( 'wp_enqueue_scripts', 'bloggermart_scripts' );
}
// Theme setup
function simec_group_setup() {	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
		'footer_menu_one' => __( 'Footer Menu One'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 170, 180, true);
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'simec_group_setup');

function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts');


// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');

?>