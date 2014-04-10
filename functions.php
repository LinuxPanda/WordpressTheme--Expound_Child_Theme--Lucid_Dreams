<?php
/**
 * Expound functions and definitions
 *
 * @package Lucid Dreams
 */



/**
 * Add action to remove parent function "expound_setup" using function "remove_expound_setup"
 * Parent theme uses the default priority of 10
 * So use a priority of 9 to load before the parent theme
 */
add_action( 'after_setup_theme', 'remove_expound_setup', 9 );

// Remove parent function "expound_setup" and override it with "override_expound_setup" function
function remove_expound_setup () {
	remove_action( 'after_setup_theme', 'expound_setup' );
	add_action( 'after_setup_theme', 'override_expound_setup' );
}

if ( ! function_exists( 'override_expound_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function override_expound_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_stylesheet_directory() . '/include/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Mag, use a find and replace
	 * to change 'expound' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'expound', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Editor styles for the win
	 */
	add_editor_style( 'css/editor-style.css' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 220, 126, true );
	add_image_size( 'expound-featured', 460, 260, true );
	add_image_size( 'expound-mini', 50, 50, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'expound' ),
		'social' => __( 'Social Menu', 'expound' ),
		'secondary' => __( 'Header Menu', 'expound' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // expound_setup

/**
 * Add action to remove parent function "expound_widgets_init" using function "remove_expound_widgets_init"
 * Parent theme uses the default priority of 10
 * So use a priority of 9 to load before the parent theme
 */
add_action( 'after_setup_theme', 'remove_expound_widgets_init', 9 );

// Remove parent function "expound_widgets_init" and override it with "override_expound_widgets_init" function
function remove_expound_widgets_init () {
	remove_action( 'widgets_init', 'expound_widgets_init' );
	add_action( 'widgets_init', 'override_expound_widgets_init' );
}

if ( ! function_exists( 'override_expound_widgets_init' ) ) :

/**
 * Register widgetized area and update sidebar with default widgets
 */
function override_expound_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'expound' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Area', 'expound' ),
		'id'            => 'header-area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
endif; // expound_widgets

/**
 * Add action to remove parent function "expound_scripts" using function "remove_expound_scripts"
 * Parent theme uses the default priority of 10
 * So use a priority of 9 to load before the parent theme
 */
add_action( 'after_setup_theme', 'remove_expound_scripts', 9 );

// Remove parent function "expound_setup" and override it with "override_expound_setup" function
function remove_expound_scripts () {
	remove_action( 'wp_enqueue_scripts', 'expound_scripts' );
	add_action( 'wp_enqueue_scripts', 'override_expound_scripts' );
}

if ( ! function_exists( 'override_expound_scripts' ) ) :

/**
 * Enqueue scripts and styles
 */
function override_expound_scripts() {
	// Don't forget to bump the version numbers in style.css and editor-style.css
	wp_enqueue_style( 'expound-style', get_stylesheet_uri(), array(), 20140129 );

	wp_enqueue_script( 'expound-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'expound-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_style( 'expound-genericons', get_template_directory_uri() . '/css/genericons.css', array(), '20140127' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'expound-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
endif; // expound_scripts

/**
 * Add action to remove parent function "expound_display_credits" using function "remove_expound_display_credits"
 * Parent theme uses the default priority of 10
 * So use a priority of 9 to load before the parent theme
 */
add_action( 'after_setup_theme', 'remove_expound_display_credits', 9 );

// Remove parent function "expound_display_credits" and override it with "override_expound_display_credits" function
function remove_expound_display_credits () {
	remove_action( 'expound_credits', 'expound_display_credits' );
	add_action( 'expound_credits', 'override_expound_display_credits' );
}

if ( ! function_exists( 'override_expound_display_credits' ) ) :

/**
 * Footer credits.
 */
function override_expound_display_credits() {
	$text = '<p><a href="http://wordpress.org/" rel="generator">' . sprintf( __( 'Proudly powered by %s', 'expound' ), 'WordPress' ) . '</a></p>';
	$text .= sprintf( __( '<p>%1$s Theme by %2$s', 'expound' ), 'Lucid Dreams', '<a href="http://github.com/linuxpanda" rel="designer">Linux Panda</a>' );
	$text .= '<span class="sep"> | </span>';
	$text .= sprintf( __( ' Based on %1$s by %2$s', 'expound' ), 'Expound Theme', '<a href="http://kovshenin.com/" rel="designer">Konstantin Kovshenin</a></p>' );
	echo apply_filters( 'expound_credits_text', $text );
}
endif; // display_credits

if ( ! function_exists( 'expound_display_site_credits' ) ) :

/**
 * Site credits.
 */
function expound_display_site_credits() {
	$text = sprintf( '<p>Copyright &copy; %1$s <a href="%2$s" title="%3$s" rel="self">%3$s</a><span class="sep"> | </span>All Rights Reserved</p>',
					    esc_attr( date( 'Y' ) ),
					    esc_url( home_url() ),
					    esc_attr(get_bloginfo())
				);
	echo apply_filters( 'expound_credits_text', $text );
}
endif; // display_site_credits

add_action( 'site_credits', 'expound_display_site_credits' );
