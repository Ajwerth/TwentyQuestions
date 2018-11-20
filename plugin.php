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
require_once(plugin_dir_path(__FILE__) . "/process-form.php");

