<?php
/**
 * Nooblic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nooblic
 */

///////////////////////////////////////////////////////////Variables globales////////////////////////////////////////////////////////

global $headerHeight;
$headerHeight = "70px";

///////////////////////////////////////////////////////////////Fonctions///////////////////////////////////////////////////////////

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nooblic_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nooblic_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Nooblic, use a find and replace
		 * to change 'nooblic' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nooblic', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'nooblic' ),
				'footer-1' => esc_html__( 'Footer-1', 'nooblic' ),
				'footer-2' => esc_html__( 'Footer-2', 'nooblic' ),
				'footer-3' => esc_html__( 'Footer-3', 'nooblic' ),
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
				'nooblic_custom_background_args',
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
add_action( 'after_setup_theme', 'nooblic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nooblic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nooblic_content_width', 640 );
}
add_action( 'after_setup_theme', 'nooblic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nooblic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nooblic' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nooblic' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar( array(
        'name' => esc_html__( 'footer-1', '_s' ),
        'id' => 'foot1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'footer-2', '_s' ),
        'id' => 'foot2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'footer-3', '_s' ),
        'id' => 'foot3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'nooblic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nooblic_scripts() {
	wp_enqueue_style( 'nooblic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nooblic-style', 'rtl', 'replace' );

    wp_register_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
    wp_enqueue_style( 'fontawesome');

    wp_enqueue_style('header', get_bloginfo('template_directory').'/assets/css/header.css');

    wp_enqueue_style('footer', get_bloginfo('template_directory').'/assets/css/footer.css');

    wp_enqueue_style('home', get_bloginfo('template_directory').'/assets/css/home.css');

    wp_enqueue_style('template_articles', get_bloginfo('template_directory').'/assets/css/template_articles.css');

		wp_enqueue_style('stylesGuideRedac', get_bloginfo('template_directory').'/assets/css/stylesGuideRedac.css');

		wp_enqueue_style('Propos', get_bloginfo('template_directory').'/assets/css/Propos.css');

		wp_enqueue_style('listeArticles', get_bloginfo('template_directory').'/assets/css/listeArticles.css');

	wp_enqueue_script( 'nooblic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'article-carousel', get_template_directory_uri() . '/js/articles-carousel.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'crayon', get_template_directory_uri() . '/js/crayon.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'nyan-cat', get_template_directory_uri() . '/js/nyan-cat.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'police', get_template_directory_uri() . '/js/police.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nooblic_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
