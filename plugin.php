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
    
        foreach ( $row as $row ){ ?>
        <div style="display:flex;">
            <div><?php echo "'Did you ever lose time from work or school due to gambling?'.$row->question_one."; ?></div>
            <div><?php echo "'Has gambling ever made your home life unhappy?'.$row->question_two."; ?></div>
            <div><?php echo "'Did gambling affect your reputation?'.$row->question_three."; ?></div>
            <div><?php echo "'Have you ever felt remorse after gambling?'.$row->question_four."; ?></div>
            <div><?php echo "'Did you ever gamble to get money with which to pay debts or otherwise solve financial difficulties?'.$row->question_five."; ?></div>
            <div><?php echo "'Did gambling cause a decrease in your ambition or efficiency?'.$row->question_six."; ?></div>
            <div><?php echo "'After losing, did you feel you must return as soon as possible and win back your losses?'.$row->question_seven."; ?></div>
            <div><?php echo "'After a win, did you have a strong urge to return and win more?'.$row->question_eight."; ?></div>
            <div><?php echo "'Did you often gamble until your last dollar was gone?'.$row->question_nine."; ?></div>
            <div><?php echo "'Did you ever borrow to finance your gambling?'.$row->question_ten."; ?></div>
            <div><?php echo "'Have you ever sold anything to finance gambling?'.$row->question_eleven."; ?></div>
            <div><?php echo "'Were you reluctant to use \"gambling money\" for normal expenditures?'.$row->question_twelve."; ?></div>
            <div><?php echo "'Did gambling make you careless of the welfare of yourself and your family?'.$row->question_thirteen."; ?></div>
            <div><?php echo "'Did you ever gamble longer than you had planned?'.$row->question_fourteen."; ?></div>
            <div><?php echo "'Have you ever gambled to escape worry or trouble?'.$row->question_fifteen."; ?></div>
            <div><?php echo "'Have you ever committed, or considered committing, an illegal act to finance gambling?'.$row->question_sixteen."; ?></div>
            <div><?php echo "'Did gambling cause difficulty in sleeping?'.$row->question_seventeen."; ?></div>
            <div><?php echo "'Do arguments, disappointments or frustrations create within you an urge to gamble?'.$row->question_eightteen."; ?></div>
            <div><?php echo "'Did you ever have an urge to celebrate any good fortune by a few hours of gambling?'.$row->question_nineteen."; ?></div>
            <div><?php echo "'Have you ever considered self destruction or suicide as a result of your gambling?'.$row->question_twenty."; ?></div>
        </div>
<?php  
        } //$row->your_column_name in table
}