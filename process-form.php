<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if(isset($_POST)){
    global $wpdb, $table_prefix;
    $table_name = $wpdb->prefix . 'form_submission';
    $timestamp = current_time( 'mysql' );
    $q_1 = isset($_POST['q-one-yes']) ? 1 : 0;
    $q_2 = isset($_POST['q-two-yes']) ? 1 : 0;
    $q_3 = isset($_POST['q-three-yes']) ? 1 : 0;
    $q_4 = isset($_POST['q-four-yes']) ? 1 : 0;
    $q_5 = isset($_POST['q-five-yes']) ? 1 : 0;
    $q_6 = isset($_POST['q-six-yes']) ? 1 : 0;
    $q_7 = isset($_POST['q-seven-yes']) ? 1 : 0;
    $q_8 = isset($_POST['q-eight-yes']) ? 1 : 0;
    $q_9 = isset($_POST['q-nine-yes']) ? 1 : 0;
    $q_10 = isset($_POST['q-ten-yes']) ? 1 : 0;
    $q_11 = isset($_POST['q-eleven-yes']) ? 1 : 0;
    $q_12 = isset($_POST['q-twelve-yes']) ? 1 : 0;
    $q_13 = isset($_POST['q-thirteen-yes']) ? 1 : 0;
    $q_14 = isset($_POST['q-fourteen-yes']) ? 1 : 0;
    $q_15 = isset($_POST['q-fifteen-yes']) ? 1 : 0;
    $q_16 = isset($_POST['q-sixteen-yes']) ? 1 : 0;
    $q_17 = isset($_POST['q-seventeen-yes']) ? 1 : 0;
    $q_18 = isset($_POST['q-eightteen-yes']) ? 1 : 0;
    $q_19 = isset($_POST['q-nineteen-yes']) ? 1 : 0; 
    $q_20 = isset($_POST['q-twenty-yes']) ? 1 : 0;
    var_dump($q_1, $q_20);
    $wpdb->insert( $table_name, array(
        'time_stamp' => $timestamp,
        'question_one' => $q_1,
        'question_two' => $q_2,
        'question_three' => $q_3,
        'question_four' => $q_4,
        'question_five' => $q_5,
        'question_six' => $q_6,
        'question_seven' => $q_7,
        'question_eight' => $q_8,
        'question_nine' => $q_9,
        'question_ten' => $q_10,
        'question_eleven' => $q_11,
        'question_twelve' => $q_12,
        'question_thirteen' => $q_13,
        'question_fourteen' => $q_14,
        'question_fifteen' => $q_15,
        'question_sixteen' => $q_16,
        'question_seventeen' => $q_17,
        'question_eightteen' => $q_18,
        'question_nineteen' => $q_19,
        'question_twenty' => $q_20
    ) );
    echo "Working";
}else{
    echo "Something's Gone Wrong Mate!";
};