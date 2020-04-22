<?php
/* Add CSS files */
function add_theme_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('slider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.1', 'all');
    wp_enqueue_style('slider');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
/* Add Js files */
function add_theme_JSscripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), 1, 'all');
    wp_enqueue_script('jquery');
    wp_register_script('custom',get_template_directory_uri() .'/js/script.js', array(), 1, 'all');
    wp_enqueue_script('custom');
    wp_register_script('jquery flexslider',get_template_directory_uri() .'/js/jquery.flexslider-min.js', array(), 1, 'all');
    wp_enqueue_script('jquery flexslider');
    wp_register_script('modernizr','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js',array(), 1, 'all');
    wp_enqueue_script('modernizr');
}
add_action('wp_enqueue_scripts', 'add_theme_JSscripts');

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Register WP Navigation menu
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
register_nav_menus(
array(
    'side-menu' => __('Side Menu', 'theme')
)
);

// Register Side bar
    register_sidebar(
        array(
            'id'            => 'sidebar-1',
            'name'          => 'WpBlogg Sidebar',
        )
    );

/* Registering acf options page */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(
        array(
            'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Sidebar Settings',
            'menu_title'	=> 'Sidebar',
            'parent_slug'	=> 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));
   
	
}

//Customize image size
add_image_size( 'slide', 1000, 400, false );