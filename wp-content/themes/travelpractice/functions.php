<?php
/**
 * Travel Practice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travel_Practice
 */

if ( ! function_exists( 'travelpractice_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function travelpractice_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Travel Practice, use a find and replace
		 * to change 'travelpractice' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'travelpractice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'travelpractice' ),
			'menu-2' => esc_html__( 'Footer', 'travelpractice' ),
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
		add_theme_support( 'custom-background', apply_filters( 'travelpractice_custom_background_args', array(
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
			'height'      => 25,
			'width'       => 25,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'travelpractice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travelpractice_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'travelpractice_content_width', 640 );
}
add_action( 'after_setup_theme', 'travelpractice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travelpractice_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'travelpractice' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'travelpractice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Social', 'travelpractice' ),
		'id'            => 'social-1',
		'description'   => esc_html__( 'Add widgets here.', 'travelpractice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );




	register_sidebar( array(
		'name'          => esc_html__( 'Recent Posts', 'travelpractice' ),
		'id'            => 'rposts-1',
		'description'   => esc_html__( 'Add widgets here.', 'travelpractice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


register_sidebar( array(
		'name'          => esc_html__( 'Footer Social', 'travelpractice' ),
		'id'            => 'foosocial-1',
		'description'   => esc_html__( 'Add widgets here.', 'travelpractice' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'travelpractice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function travelpractice_scripts() {
	wp_enqueue_style( 'travelpractice-style', get_stylesheet_uri() );

	wp_enqueue_script( 'travelpractice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'travelpractice-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-lightbox', get_stylesheet_directory_uri() . '/js/jquery.lightbox-0.5.min.js', array( 'jquery' ) );
	wp_enqueue_style( 'jquery-lightbox', get_stylesheet_directory_uri() . '/css/jquery.lightbox-0.5.css' );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'travelpractice_scripts' );

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




// Register Custom Post Type project
// Post Type Key: project
function create_project_cpt() {

	$labels = array(
		'name' => __( 'projects', 'Post Type General Name', 'travelpractice' ),
		'singular_name' => __( 'project', 'Post Type Singular Name', 'travelpractice' ),
		'menu_name' => __( 'Projects', 'travelpractice' ),
		'name_admin_bar' => __( 'project', 'travelpractice' ),
		'archives' => __( 'project Archives', 'travelpractice' ),
		'attributes' => __( 'project Attributes', 'travelpractice' ),
		'parent_item_colon' => __( 'Parent project:', 'travelpractice' ),
		'all_items' => __( 'All projects', 'travelpractice' ),
		'add_new_item' => __( 'Add New project', 'travelpractice' ),
		'add_new' => __( 'Add New', 'travelpractice' ),
		'new_item' => __( 'New project', 'travelpractice' ),
		'edit_item' => __( 'Edit project', 'travelpractice' ),
		'update_item' => __( 'Update project', 'travelpractice' ),
		'view_item' => __( 'View project', 'travelpractice' ),
		'view_items' => __( 'View projects', 'travelpractice' ),
		'search_items' => __( 'Search project', 'travelpractice' ),
		'not_found' => __( 'Not found', 'travelpractice' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'travelpractice' ),
		'featured_image' => __( 'Featured Image', 'travelpractice' ),
		'set_featured_image' => __( 'Set featured image', 'travelpractice' ),
		'remove_featured_image' => __( 'Remove featured image', 'travelpractice' ),
		'use_featured_image' => __( 'Use as featured image', 'travelpractice' ),
		'insert_into_item' => __( 'Insert into project', 'travelpractice' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'travelpractice' ),
		'items_list' => __( 'projects list', 'travelpractice' ),
		'items_list_navigation' => __( 'projects list navigation', 'travelpractice' ),
		'filter_items_list' => __( 'Filter projects list', 'travelpractice' ),
	);
	$args = array(
		'label' => __( 'project', 'travelpractice' ),
		'description' => __( 'Projects', 'travelpractice' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies' => array('Projects', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );




// Register Custom Post Type services
// Post Type Key: services
function create_services_cpt() {

	$labels = array(
		'name' => __( 'Services', 'Post Type General Name', 'travelpractice' ),
		'singular_name' => __( 'services', 'Post Type Singular Name', 'travelpractice' ),
		'menu_name' => __( 'Services', 'travelpractice' ),
		'name_admin_bar' => __( 'services', 'travelpractice' ),
		'archives' => __( 'services Archives', 'travelpractice' ),
		'attributes' => __( 'services Attributes', 'travelpractice' ),
		'parent_item_colon' => __( 'Parent services:', 'travelpractice' ),
		'all_items' => __( 'All Services', 'travelpractice' ),
		'add_new_item' => __( 'Add New services', 'travelpractice' ),
		'add_new' => __( 'Add New', 'travelpractice' ),
		'new_item' => __( 'New services', 'travelpractice' ),
		'edit_item' => __( 'Edit services', 'travelpractice' ),
		'update_item' => __( 'Update services', 'travelpractice' ),
		'view_item' => __( 'View services', 'travelpractice' ),
		'view_items' => __( 'View Services', 'travelpractice' ),
		'search_items' => __( 'Search services', 'travelpractice' ),
		'not_found' => __( 'Not found', 'travelpractice' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'travelpractice' ),
		'featured_image' => __( 'Featured Image', 'travelpractice' ),
		'set_featured_image' => __( 'Set featured image', 'travelpractice' ),
		'remove_featured_image' => __( 'Remove featured image', 'travelpractice' ),
		'use_featured_image' => __( 'Use as featured image', 'travelpractice' ),
		'insert_into_item' => __( 'Insert into services', 'travelpractice' ),
		'uploaded_to_this_item' => __( 'Uploaded to this services', 'travelpractice' ),
		'items_list' => __( 'Services list', 'travelpractice' ),
		'items_list_navigation' => __( 'Services list navigation', 'travelpractice' ),
		'filter_items_list' => __( 'Filter Services list', 'travelpractice' ),
	);
	$args = array(
		'label' => __( 'services', 'travelpractice' ),
		'description' => __( 'Services', 'travelpractice' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-tools',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies' => array('services', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'create_services_cpt', 0 );




// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';




function tr_create_my_taxonomy() {

    register_taxonomy(
        'team-category',
        'project',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'team-category' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );



// Limit except length to 125 characters.
// tn limited excerpt length by number of characters
function get_excerpt( $count ) {
$permalink = get_permalink($post->ID);
$excerpt = get_the_content();
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, $count);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'"></a></p>';
return $excerpt;
}



// metabox project
class projectinfoMetabox {
	private $screen = array(
		'project',
	);
	private $meta_fields = array(
		array(
			'label' => 'Project Name:',
			'id' => 'projectname_44712',
			'type' => 'text',
		),
		array(
			'label' => 'Project Type:',
			'id' => 'projecttype_83597',
			'type' => 'text',
		),
		array(
			'label' => 'Address:',
			'id' => 'projectaddress_74148',
			'type' => 'text',
		),
		array(
			'label' => 'Client:',
			'id' => 'projectclient_76333',
			'type' => 'text',
		),
		array(
			'label' => 'Total Plinth Area:',
			'id' => 'projecttotalplintharea_61414',
			'type' => 'text',
		),
		array(
			'label' => 'Total Carpet Area:',
			'id' => 'projecttotalcarpetarea_36898',
			'type' => 'text',
		),
		array(
			'label' => 'Total Hall Area:',
			'id' => 'projecttotalhallarea_123',
			'type' => 'text',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'projectinfo',
				__( 'Project Info', 'projectinfo' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'advanced',
				'default'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'projectinfo_data', 'projectinfo_nonce' );
		echo 'Project Info';
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = $meta_field['default']; }
			switch ( $meta_field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['projectinfo_nonce'] ) )
			return $post_id;
		$nonce = $_POST['projectinfo_nonce'];
		if ( !wp_verify_nonce( $nonce, 'projectinfo_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('projectinfoMetabox')) {
	new projectinfoMetabox;
};




// Default Gallery

// Remove Gallery Styling

add_filter( 'use_default_gallery_style', '__return_false' );






// Register Custom Post Type Our Team
function create_ourteam_cpt() {

	$labels = array(
		'name' => _x( 'Our Team', 'Post Type General Name', 'travelpractice' ),
		'singular_name' => _x( 'Our Team', 'Post Type Singular Name', 'travelpractice' ),
		'menu_name' => _x( 'Our Team', 'Admin Menu text', 'travelpractice' ),
		'name_admin_bar' => _x( 'Our Team', 'Add New on Toolbar', 'travelpractice' ),
		'archives' => __( 'Our Team Archives', 'travelpractice' ),
		'attributes' => __( 'Our Team Attributes', 'travelpractice' ),
		'parent_item_colon' => __( 'Parent Our Team:', 'travelpractice' ),
		'all_items' => __( 'All Our Team', 'travelpractice' ),
		'add_new_item' => __( 'Add New Our Team', 'travelpractice' ),
		'add_new' => __( 'Add New', 'travelpractice' ),
		'new_item' => __( 'New Our Team', 'travelpractice' ),
		'edit_item' => __( 'Edit Our Team', 'travelpractice' ),
		'update_item' => __( 'Update Our Team', 'travelpractice' ),
		'view_item' => __( 'View Our Team', 'travelpractice' ),
		'view_items' => __( 'View Our Team', 'travelpractice' ),
		'search_items' => __( 'Search Our Team', 'travelpractice' ),
		'not_found' => __( 'Not found', 'travelpractice' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'travelpractice' ),
		'featured_image' => __( 'Featured Image', 'travelpractice' ),
		'set_featured_image' => __( 'Set featured image', 'travelpractice' ),
		'remove_featured_image' => __( 'Remove featured image', 'travelpractice' ),
		'use_featured_image' => __( 'Use as featured image', 'travelpractice' ),
		'insert_into_item' => __( 'Insert into Our Team', 'travelpractice' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Our Team', 'travelpractice' ),
		'items_list' => __( 'Our Team list', 'travelpractice' ),
		'items_list_navigation' => __( 'Our Team list navigation', 'travelpractice' ),
		'filter_items_list' => __( 'Filter Our Team list', 'travelpractice' ),
	);
	$args = array(
		'label' => __( 'Our Team', 'travelpractice' ),
		'description' => __( 'ourteam', 'travelpractice' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-groups',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'ourteam', $args );

}
add_action( 'init', 'create_ourteam_cpt', 0 );




