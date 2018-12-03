<?php 
/**
 * Plugin Name: TwentyQuestions
 * Description: WordPress Plugin for 800Gambler
 * Author: Alec
 * Version: 1.0.0
 **/

 //Require Assets
include(plugin_dir_path(__FILE__) . "/database.php");
register_activation_hook(__FILE__, "database_function");
require_once(plugin_dir_path(__FILE__) . "/form.php");

//Create Admin Page
function test_plugin_setup_menu(){
        add_menu_page( 'Twenty Questions', 'Twenty Questions', 'manage_options', 'twenty-questions', 'test_init', $icon_url = '
        dashicons-welcome-write-blog');
}

function test_init(){
    echo '<h1>Twenty Questions</h1>
    <h2>URL of Landing Page if More than 7</h2>
    <input type="text" name="more-seven" id="more-seven">
    <h2>URL of Landing Page if Less than 7</h2>
    <input type="text" name="less-seven" id="less-seven">';
}

// Register Script
function custom_scripts() {
	wp_register_script( 'twentyjs', '/wp-content/plugins/twentyquestions/twenty.js', false, false, true );
	wp_enqueue_script( 'twentyjs' );
}

// Register Style
function custom_styles() {
	wp_register_style( 'twentycss', '/wp-content/plugins/twentyquestions/twenty.css', false, false );
	wp_enqueue_style( 'twentycss' );
}

//Adding Menu Page in the Admin Panel
add_action('admin_menu', 'test_plugin_setup_menu');
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
add_action( 'wp_enqueue_scripts', 'custom_styles' );


add_action( 'init', function() {
    add_rewrite_endpoint( 'survey-results', EP_PERMALINK );
} );


add_action( 'template_redirect', function() {
    global $wp_query;
    if ( ! isset( $wp_query->query_vars['survey-results'] ) ) {
        return;
    }
    include plugin_dir_path( __FILE__ ) . 'templates/survey-results.php';
    die;
} );