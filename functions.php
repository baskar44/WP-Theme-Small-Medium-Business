<?php
/**
 * Lindsay Almond Glass & Aluminium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lindsay_Almond_Glass_&_Aluminium
 */

if ( ! function_exists( 'lindsay_almond_glass_aluminium_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lindsay_almond_glass_aluminium_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lindsay Almond Glass & Aluminium, use a find and replace
		 * to change 'lindsay-almond-glass-aluminium' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lindsay-almond-glass-aluminium', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary Menu', 'lindsay-almond-glass-aluminium' ),
			'footer' => esc_html__( 'Footer Menu', 'lindsay-almond-glass-aluminium' ),

		) );

		// Post Formats
		add_theme_support('post-formats',  array('aside', 'gallery', 'link'));


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
		add_theme_support( 'custom-background', apply_filters( 'lindsay_almond_glass_aluminium_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lindsay_almond_glass_aluminium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lindsay_almond_glass_aluminium_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lindsay_almond_glass_aluminium_content_width', 640 );
}
add_action( 'after_setup_theme', 'lindsay_almond_glass_aluminium_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lindsay_almond_glass_aluminium_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lindsay-almond-glass-aluminium' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lindsay-almond-glass-aluminium' ),
		'before_widget' => '<div class="block side-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'lindsay_almond_glass_aluminium_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lindsay_almond_glass_aluminium_scripts() {
	wp_enqueue_style( 'lindsay-almond-glass-aluminium-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lindsay-almond-glass-aluminium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lindsay-almond-glass-aluminium-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lindsay_almond_glass_aluminium_scripts' );

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



// Excerpt Length
function lindsay_almond_glass_aluminium_set_excerpt_length(){
	return 50;
}

add_filter('excerpt_length', 'lindsay_almond_glass_aluminium_set_excerpt_length');


function get_top_parent(){
	global $post;
	if($post->post_parent){
		$ancestors = get_post_ancestors($post->ID);
		return $ancestors[0];
	}

	return $post->ID;
}



function page_is_parent(){
	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}


function wpdocs_theme_name_scripts() {
    wp_enqueue_script(
        'slider',
        get_template_directory_uri() . '/js/slider.js',
        array('jquery'),
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


/**
 * Custom Post Types
 */

function lalmond_custom_window_type(){
	
	$labels = array(
		'name' => 'Windows', 
		'singular_name' => 'Window',
		'add_new' => 'Add Window',
		'all_items' => 'All Windows',
		'add_new_item' => 'Add Window',
		'edit_item' => 'Edit Window',
		'new_item' => 'New Window',
		'view_item' => 'View Window',
		'search_item' => 'Search Window',
		'not_found' => 'No windows found',
		'not_found_in_trash' => 'No windows found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
				
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('window', $args);
	flush_rewrite_rules();
}

add_action('init', 'lalmond_custom_window_type');


function lalmond_custom_door_type(){
	
	$labels = array(
		'name' => 'Doors', 
		'singular_name' => 'Door',
		'add_new' => 'Add Door',
		'all_items' => 'All Doors',
		'add_new_item' => 'Add Door',
		'edit_item' => 'Edit Door',
		'new_item' => 'New Door',
		'view_item' => 'View Door',
		'search_item' => 'Search Door',
		'not_found' => 'No doors found',
		'not_found_in_trash' => 'No doors found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
				
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('door', $args);
	flush_rewrite_rules();
}

add_action('init', 'lalmond_custom_door_type');


function lalmond_custom_commercial_type(){
	
	$labels = array(
		'name' => 'Commercial Items', 
		'singular_name' => 'Commercial Item',
		'add_new' => 'Add Commercial Item',
		'all_items' => 'All Commercial Item',
		'add_new_item' => 'Add Commercial Item',
		'edit_item' => 'Edit Commercial Item',
		'new_item' => 'New Commercial Item',
		'view_item' => 'View Commercial Item',
		'search_item' => 'Search Commercial Item',
		'not_found' => 'No commercial items found',
		'not_found_in_trash' => 'No commercial items found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
				
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('commercial_item', $args);
	flush_rewrite_rules();
}

add_action('init', 'lalmond_custom_commercial_type');


function lalmond_custom_other_type(){
	
	$labels = array(
		'name' => 'Other', 
		'singular_name' => 'Other',
		'add_new' => 'Add Other',
		'all_items' => 'All Other',
		'add_new_item' => 'Add Other',
		'edit_item' => 'Edit Other',
		'new_item' => 'New Other',
		'view_item' => 'View Other',
		'search_item' => 'Search Other',
		'not_found' => 'No other items found',
		'not_found_in_trash' => 'No other items found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
				
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('other', $args);
	flush_rewrite_rules();
}

add_action('init', 'lalmond_custom_other_type');



function lalmond_custom_projects_type(){
	
	$labels = array(
		'name' => 'Projects', 
		'singular_name' => 'Project',
		'add_new' => 'Add Project',
		'all_items' => 'All Project',
		'add_new_item' => 'Add Project',
		'edit_item' => 'Edit Project',
		'new_item' => 'New Project',
		'view_item' => 'View Project',
		'search_item' => 'Search Project',
		'not_found' => 'No products found',
		'not_found_in_trash' => 'No products found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
				
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);

	register_post_type('product', $args);
	flush_rewrite_rules();
}

add_action('init', 'lalmond_custom_projects_type');