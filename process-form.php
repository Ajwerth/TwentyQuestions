<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if(isset($_POST)){
    if ( ! isset( $_POST['twentyquest_generate_nonce'] ) || ! wp_verify_nonce( $_POST['twentyquest_generate_nonce'], 'twentyquestions_submit' ) ){ 
        wp_die('Something\'s Gone Wrong!');
    } else {
        if( ! isset($_POST) || ! isset( 
            $_POST[ 'question1' ], 
            $_POST[ 'question2' ],
            $_POST[ 'question3' ],
            $_POST[ 'question4' ],
            $_POST[ 'question5' ],
            $_POST[ 'question6' ],
            $_POST[ 'question7' ],
            $_POST[ 'question8' ],
            $_POST[ 'question9' ],
            $_POST[ 'question10' ],
            $_POST[ 'question11' ],
            $_POST[ 'question12' ],
            $_POST[ 'question13' ],
            $_POST[ 'question14' ],
            $_POST[ 'question15' ],
            $_POST[ 'question16' ],
            $_POST[ 'question17' ],
            $_POST[ 'question18' ],
            $_POST[ 'question19' ],
            $_POST[ 'question20' ],
            $_POST['prefered'],
            $_POST['county'],
            $_POST['age'],
            $_POST['race'],
            $_POST['gender']
            ) ) 
        {
            echo "Some of the Data is invalid.";
        } else {
            global $wpdb, $table_prefix;
            $table_name = $wpdb->prefix . 'form_submission';
            $timestamp = current_time( 'mysql' );
            //Set the Gambling Type variable to an arry and passing the data from the Type of Gambling question into the array.
            $gambtype = array();
            if(empty($gambtype)){

            } else {
                $gambtype[] = implode(',', $_POST['gambtype']);
            };

            $formData = array(
                'time_stamp' => $timestamp,
                'question_one' => ( $_POST['question1'] == "yes") ? "Yes" : "No",
                'question_two' => ( $_POST['question2'] == "yes") ? "Yes" : "No",
                'question_three' => ( $_POST['question3'] == "yes") ? "Yes" : "No",
                'question_four' =>  ( $_POST['question4'] == "yes") ? "Yes" : "No",
                'question_five' => ( $_POST['question5'] == "yes") ? "Yes" : "No",
                'question_six' => ( $_POST['question6'] == "yes") ? "Yes" : "No",
                'question_seven' => ( $_POST['question7'] == "yes") ? "Yes" : "No",
                'question_eight' => ( $_POST['question8'] == "yes") ? "Yes" : "No",
                'question_nine' => ( $_POST['question9'] == "yes") ? "Yes" : "No",
                'question_ten' => ( $_POST['question10'] == "yes") ? "Yes" : "No",
                'question_eleven' => ( $_POST['question11'] == "yes") ? "Yes" : "No",
                'question_twelve' => ( $_POST['question12'] == "yes") ? "Yes" : "No",
                'question_thirteen' => ( $_POST['question13'] == "yes") ? "Yes" : "No",
                'question_fourteen' => ( $_POST['question14'] == "yes") ? "Yes" : "No",
                'question_fifteen' => ( $_POST['question15'] == "yes") ? "Yes" : "No",
                'question_sixteen' => ( $_POST['question16'] == "yes") ? "Yes" : "No",
                'question_seventeen' => ( $_POST['question17'] == "yes") ? "Yes" : "No",
                'question_eightteen' => ( $_POST['question18'] == "yes") ? "Yes" : "No",
                'question_nineteen' => ( $_POST['question19'] == "yes") ? "Yes" : "No",
                'question_twenty' => ( $_POST['question20'] == "yes") ? "Yes" : "No",
                'question_twentyone' => implode(',', $gambtype),
                'question_twentytwo' => $_POST['prefered'],
                'question_twentythree' => $_POST['county'],
                'question_twentyfour' => $_POST['age'],
                'question_twentyfive' => $_POST['race'],
                'question_twentysix' => $_POST['gender'],
            );
            
            //Insert the Data from the form into the Database
            $wpdb->insert( $table_name, $formData );
            $lastid = $wpdb->insert_id;
            $formDataYes = (array_keys($formData, "Yes"));
            $url = "/?survey-results=". json_encode(sizeof($formDataYes));
            wp_redirect( $url );
            exit;
        };
    };
}else{
    echo "Something\'s Gone Wrong!";
};