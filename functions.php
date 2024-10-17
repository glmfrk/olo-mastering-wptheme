<?php

// Define theme version
define( 'THEME_VERSION', wp_get_theme()->get('Version') );

add_action('after_setup_theme', 'studio_theme_setup_options');

function studio_theme_setup_options() {
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');
}

add_action('wp_enqueue_scripts', 'studio_theme_including_assets');

function studio_theme_including_assets() {
    // WordPress Dash Icon
    wp_enqueue_style('dashicons');

    // Enqueue Font Awesome from CDN
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3' );

    wp_enqueue_style( 
        'studio_custom_style',
        get_parent_theme_file_uri( 'assets/css/custom.css' ),
        array(),
        THEME_VERSION,
        'all'
    );

    wp_enqueue_style( 
        'studio_responsive_style',
        get_parent_theme_file_uri( 'assets/css/responsive.css' ),
        array(),
        THEME_VERSION,
        'all'
    );

    wp_enqueue_style( 
        'studio_style',
        get_stylesheet_uri(),
        array(),
        THEME_VERSION,
        'all'
    );

    // Include JS Files 
    wp_enqueue_script( 
		'studio_custom_script',
		get_parent_theme_file_uri( 'assets/js/scripts.js' ),
		array('jquery'),
		THEME_VERSION,
		true
	);

    wp_localize_script( 'studio_custom_script', 'wpApiSettings', array(
        'root' => esc_url_raw( rest_url() ),
        'nonce' => wp_create_nonce( 'wp_rest' )
    ) );
}

function studio_custom_admin_assets() {

    // Enqueue Font Awesome from CDN
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3' );
    
    // Enqueue a custom admin CSS file
    wp_enqueue_style( 'studio-admin-css', get_template_directory_uri() . '/assets/css/admin-style.css', array(), '1.0.0', 'all' );

    // Enqueue a custom admin JS file
    wp_enqueue_script( 'studio-admin-js', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'studio_custom_admin_assets' );




// Hook the function to an action
add_action( 'after_setup_theme', 'olo_studio_load_includes' );

function olo_studio_load_includes() {
    // List of files to include
    $files_to_include = [
        'includes/studio-settings-api.php',
        'includes/studio-ajax-handler.php',
        'includes/studio-custom-posts.php',
        'includes/studio-shortcodes.php',
        'includes/studio-taxonomies.php'
    ];

    // Loop through the array and require each file
    foreach ($files_to_include as $files) {
        $file_path = get_parent_theme_file_path($files);

        if (file_exists($file_path)) {
            require_once $file_path;
        } else {
            // Optional: Add error handling if the file doesn't exist
            error_log( "File not found: " . $file_path );
        }
    }

}

