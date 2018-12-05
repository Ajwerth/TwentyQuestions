<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if(isset($_POST)){
    if ( ! isset( $_POST['twentyquest_generate_nonce'] ) || ! wp_verify_nonce( $_POST['twentyquest_generate_nonce'], 'twentyquestions_submit' ) ){ 
        wp_die('Something\'s Gone Wrong!');
    } else {
        global $wpdb, $table_prefix;
        $table_name = $wpdb->prefix . 'twenty_questions';
        $timestamp = current_time( 'mysql' );
        //Set the Gambling Type variable to an arry and passing the data from the Type of Gambling question into the array.
        $gambtype = array();
        $gambtype[] = implode(',', $_POST['gambtype']);

        $formData = array(
            'time_stamp' => $timestamp,
            'Did you ever lose time from work or school due to gambling?' => ( $_POST['question1'] == "yes") ? "Yes" : "No",
            'Has gambling ever made your home life unhappy?' => ( $_POST['question2'] == "yes") ? "Yes" : "No",
            'Did gambling affect your reputation?' => ( $_POST['question3'] == "yes") ? "Yes" : "No",
            'Have you ever felt remorse after gambling?' =>  ( $_POST['question4'] == "yes") ? "Yes" : "No",
            'Did you ever gamble to get money with which to pay debts or otherwise solve financial difficulties?' => ( $_POST['question5'] == "yes") ? "Yes" : "No",
            'Did gambling cause a decrease in your ambition or efficiency?' => ( $_POST['question6'] == "yes") ? "Yes" : "No",
            'After losing, did you feel you must return as soon as possible and win back your losses?' => ( $_POST['question7'] == "yes") ? "Yes" : "No",
            'After a win, did you have a strong urge to return and win more?' => ( $_POST['question8'] == "yes") ? "Yes" : "No",
            'Did you often gamble until your last dollar was gone?' => ( $_POST['question9'] == "yes") ? "Yes" : "No",
            'Did you ever borrow to finance your gambling?' => ( $_POST['question10'] == "yes") ? "Yes" : "No",
            'Have you ever sold anything to finance gambling?' => ( $_POST['question11'] == "yes") ? "Yes" : "No",
            'Were you reluctant to use "gambling money" for normal expenditures?' => ( $_POST['question12'] == "yes") ? "Yes" : "No",
            'Did gambling make you careless of the welfare of yourself and your family?' => ( $_POST['question13'] == "yes") ? "Yes" : "No",
            'Did you ever gamble longer than you had planned?' => ( $_POST['question14'] == "yes") ? "Yes" : "No",
            'Have you ever gambled to escape worry or trouble?' => ( $_POST['question15'] == "yes") ? "Yes" : "No",
            'Have you ever committed, or considered committing, an illegal act to finance gambling?' => ( $_POST['question16'] == "yes") ? "Yes" : "No",
            'Did gambling cause difficulty in sleeping?' => ( $_POST['question17'] == "yes") ? "Yes" : "No",
            'Do arguments, disappointments or frustrations create within you an urge to gamble?' => ( $_POST['question18'] == "yes") ? "Yes" : "No",
            'Did you ever have an urge to celebrate any good fortune by a few hours of gambling?' => ( $_POST['question19'] == "yes") ? "Yes" : "No",
            'Have you ever considered self destruction or suicide as a result of your gambling?' => ( $_POST['question20'] == "yes") ? "Yes" : "No",
            'Types of Gambling' => implode(',', $gambtype),
            'Gambling of Choice' => $_POST['prefered'],
            'County' => $_POST['county'],
            'Age' => $_POST['age'],
            'Race' => $_POST['race'],
            'Gender' => $_POST['gender'],
        );

        // Any of the WordPress data sanitization functions can be used here
        $formDataSan = array_map( 'sanitize_key', $formData );

        //Insert the Data from the form into the Database
        $wpdb->insert( $table_name, $formDataSan );
        $lastid = $wpdb->insert_id;
        $formDataYes = (array_keys($formData, "Yes"));
        $url = "/?survey-results=". json_encode(sizeof($formDataYes));
        wp_redirect( $url );
        exit;
    };
}else{
    echo "Something\'s Gone Wrong!";
};