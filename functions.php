<?php 
// Register Nav Walker class
require_once('wp-bootstrap-navwalker.php');

// Theme support
function wpb_theme_setup(){
	add_theme_support('post_thumbnails');

	// Nav support
	register_nav_menus(array(
		'primary' => __('Primary Menu')
		));
}

add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length

function set_excerpt_length() {
	return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget location

function wpb_init_widgets($id) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));

	register_sidebar(array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));

	register_sidebar(array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));

	register_sidebar(array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
}

add_action('widgets_init', 'wpb_init_widgets');

// Add custom post type advisors

add_theme_support( 'post-thumbnails' );
function create_posttype() {

    register_post_type( 'advisors',

    // CPT Options

        array(

            'labels' => array(
                'name' => __( 'Advisors' ),
                'singular_name' => __( 'Advisor' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'advisors'),
        )
    );

    register_post_type( 'testimonials',

    // CPT Options

        array(

            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
        )
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


// Creating a function to create our CPT

function custom_post_type_advisors() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Advisors', 'Post Type General Name', 'vidapoint' ),
		'singular_name'       => _x( 'Advisor', 'Post Type Singular Name', 'vidapoint' ),
		'menu_name'           => __( 'Advisors', 'vidapoint' ),
		'parent_item_colon'   => __( 'Parent Advisor', 'vidapoint' ),
		'all_items'           => __( 'All Advisors', 'vidapoint' ),
		'view_item'           => __( 'View Advisor', 'vidapoint' ),
		'add_new_item'        => __( 'Add New Advisor', 'vidapoint' ),
		'add_new'             => __( 'Add New', 'vidapoint' ),
		'edit_item'           => __( 'Edit Advisor', 'vidapoint' ),
		'update_item'         => __( 'Update Advisor', 'vidapoint' ),
		'search_items'        => __( 'Search Advisor', 'vidapoint' ),
		'not_found'           => __( 'Not Found', 'vidapoint' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'vidapoint' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'advisors', 'vidapoint' ),
		'description'         => __( 'Advisor', 'vidapoint' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'description', 'excerpt', 'thumbnail', 'revisions' ), 
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'advisors', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_advisors', 0 );

add_image_size( 'advisors-thumbnail', 300, auto );

// add CPT testimonials
function custom_post_type_testimonials() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'vidapoint' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'vidapoint' ),
		'menu_name'           => __( 'Testimonials', 'vidapoint' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'vidapoint' ),
		'all_items'           => __( 'All Testimonials', 'vidapoint' ),
		'view_item'           => __( 'View Testimonial', 'vidapoint' ),
		'add_new_item'        => __( 'Add New Testimonial', 'vidapoint' ),
		'add_new'             => __( 'Add New', 'vidapoint' ),
		'edit_item'           => __( 'Edit Testimonial', 'vidapoint' ),
		'update_item'         => __( 'Update Testimonial', 'vidapoint' ),
		'search_items'        => __( 'Search Testimonial', 'vidapoint' ),
		'not_found'           => __( 'Not Found', 'vidapoint' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'vidapoint' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'testimonials', 'vidapoint' ),
		'description'         => __( 'Testimonial', 'vidapoint' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'description' ), 
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_testimonials', 0 );

// admin bar move to bottom

function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body { 
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );