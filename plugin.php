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
//Adding Menu Page in the Admin Panel
add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
        add_menu_page( 'Twenty Questions', 'Twenty Questions', 'manage_options', 'twenty-questions', 'test_init', $icon_url = '
        dashicons-welcome-write-blog');
}

function test_init(){
    global $wpdb;

    $row = $wpdb->get_results( "SELECT * FROM wp_form_submission");
    
        foreach ( $row as $row ) { 
            echo "'question_one:'.$row->question_one.";
            echo "'question_one:'.$row->question_two.";
            echo "'question_one:'.$row->question_three.";
            echo "'question_one:'.$row->question_four.";
            echo "'question_one:'.$row->question_five.";
            echo "'question_one:'.$row->question_six.";
            echo "'question_one:'.$row->question_seven.";
        } //$row->your_column_name in table
}