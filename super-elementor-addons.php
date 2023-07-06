<?php
/*
Plugin Name: Super Addons for Elementor
Description: Super Addons for Elementor is a powerful plugin for showcasing team members on websites. It offers three different styles, typography control, and a slick carousel feature. Perfect for creating visually appealing team member sections.
Version: 1.0
Author: Md Kamal Hosen
Author URI: https://xoventech.xyz
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/



function enqueue_child_theme_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', null);
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');


function theme_admin_notice() {
    $message = 'Elementor is required for this theme. Please, install Elementor.';
    ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php echo $message; ?></p>
    </div>
    <?php
}


if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require_once('elementor-widget.php');
    
} else {
    add_action('admin_notices', 'theme_admin_notice');
}



function widget_styles() {
	wp_enqueue_style('fontawesome-css','https:///cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css');
	wp_enqueue_style('slick-css','https:///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
}
add_action( 'elementor/frontend/after_enqueue_styles', 'widget_styles' );

function widget_scripts() {
	wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.01.01', true );
}
add_action('elementor/frontend/after_enqueue_scripts', 'widget_scripts');