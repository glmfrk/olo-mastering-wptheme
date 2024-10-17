<?php

// Register the settings and add the settings page
function studio_settings_api() {
    // Register the setting
    $args = array(
        'type' => 'string', 
        'sanitize_callback' => 'sanitize_text_field',
        'default' => NULL,
    );
    register_setting( 'studio_settings_group', 'studio_option_name', $args );

    // Add a new section to the settings page
    add_settings_section( 
        "studio_settings_section",          // Section ID
        "Studio Settings Section Title",                  // Section Title
        "studio_settings_section_callback", // Section Callback
        "studio-settings-page"              // Section page slug
    );

    // Add the settings field
    add_settings_field( 
        "studio_option_name",               // Settings Field ID
        "Studio Option Field Title",        // Settings Field Title 
        "studio_option_field_callback",     // Settings Field Callback
        "studio-settings-page",             // Settings Field page slug
        "studio_settings_section"           // Settings Field Section ID
    );
}
add_action('admin_init', 'studio_settings_api');

// Add the settings page under the "Settings" menu
function studio_add_settings_page() {
    add_menu_page( 
        "Studio Page Title",            // Page title
        "Studio Settings",              // Menu title
        "manage_options",               // Capability
        "studio-settings-page",         // Menu slug
        "studio_settings_page_html",    // Callback to display the settings page content
        "dashicons-admin-generic",      // Icon Url
        112                             // Menu Position
    );
}
add_action( "admin_menu", "studio_add_settings_page", 110);


// Callback for the section description
function studio_settings_section_callback() {
    echo '<p>Settings for Studio Options.</p>';
}

// Callback for the field
function studio_option_field_callback() {
    // Get the value of the setting
    $value = get_option('studio_option_name');
    // Output the input field
    echo '<input type="text" id="studio_option_name" name="studio_option_name" value="' . esc_attr( $value ) . '" class="regular-text" />';
}


// Display the settings page HTML
function studio_settings_page_html() {
    // Check if the user is allowed to access this page
    if (!current_user_can('manage_options')) {
        return;
    }

    // Display the form
    ?>
    <div id="studio_setting_box" class="wrap">
        <h1>Studio Settings Wrapper Title</h1>

        <div class="header_wrapper">
            <div class="header_left_part">
                <figure class="logo">
                    <?php
                        // Fetch the URL of the image with the specified dimensions (150px by 75px)
                        $site_logo = wp_get_attachment_image_url( 7, [200, 50], false );
                    ?>
                    <img src="<?php echo esc_url( $site_logo ); ?>" alt="site logo" width="200" height="50">
                </figure>

                <div class="support_center">
                    <?php
                        $support_icon = wp_get_attachment_image_url( 8, [100, 50], false );
                    ?>
                    <figure>
                        <img src="<?php echo esc_url( $support_icon ); ?>" alt="site logo" width="24" height="24">
                    </figure>
                    <h4>Support Center</h4>
                </div>
            </div>

            <div class="header_right_part">
                <div class="search_panel">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <!-- Dynamic search input field -->
                    <input type="search" name="search_field" id="search_field" placeholder="Search Options">
                </div>
                    <button class="save_changes">Save Changes</button>
                    <button class="reset_data">Reset All</button>
            </div>
        </div>

        <form action="options.php" method="post">
            <?php
            // Security fields for the registered setting "studio_settings_group"
            settings_fields('studio_settings_group');
            // Output settings section(s) and their fields
            do_settings_sections('studio-settings-page');
            // Output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// Create a shortcode to display the Studio Option Name
function display_studio_option_name() {
    // Get the value of the option
    $studio_option_value = get_option('studio_option_name', 'Default Value'); // Provide a default value if none is saved

    // Return the value (this will be displayed where the shortcode is used)
    return esc_html($studio_option_value);
}
add_shortcode('studio_option', 'display_studio_option_name');
