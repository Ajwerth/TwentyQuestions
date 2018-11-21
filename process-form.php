<?php 
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

if(isset($_POST)){
    global $wpdb, $table_prefix;
    $table_name = $wpdb->prefix . 'form_submission';
    $timestamp = current_time( 'mysql' );

    var_dump($q_1, $q_20);
    $wpdb->insert( $table_name, array(
        'question_one' => isset($_POST['q-one-yes']) ? 1 : 0,
        'question_two' => isset($_POST['q-two-yes']) ? 1 : 0,
        'question_three' => isset($_POST['q-three-yes']) ? 1 : 0,
        'question_four' =>  isset($_POST['q-four-yes']) ? 1 : 0,
        'question_five' => isset($_POST['q-five-yes']) ? 1 : 0,
        'question_six' => isset($_POST['q-six-yes']) ? 1 : 0,
        'question_seven' => isset($_POST['q-seven-yes']) ? 1 : 0,
        'question_eight' => isset($_POST['q-eight-yes']) ? 1 : 0,
        'question_nine' => isset($_POST['q-nine-yes']) ? 1 : 0,
        'question_ten' => isset($_POST['q-ten-yes']) ? 1 : 0,
        'question_eleven' => isset($_POST['q-eleven-yes']) ? 1 : 0,
        'question_twelve' => isset($_POST['q-twelve-yes']) ? 1 : 0,
        'question_thirteen' => isset($_POST['q-thirteen-yes']) ? 1 : 0,
        'question_fourteen' => isset($_POST['q-fourteen-yes']) ? 1 : 0,
        'question_fifteen' => isset($_POST['q-fifteen-yes']) ? 1 : 0,
        'question_sixteen' => isset($_POST['q-sixteen-yes']) ? 1 : 0,
        'question_seventeen' => isset($_POST['q-seventeen-yes']) ? 1 : 0,
        'question_eightteen' => isset($_POST['q-eightteen-yes']) ? 1 : 0,
        'question_nineteen' => isset($_POST['q-nineteen-yes']) ? 1 : 0, 
        'question_twenty' => isset($_POST['q-twenty-yes']) ? 1 : 0,
        'question_twentyone' => isset($_POST['q-twenty-yes']) ? 1 : 0,
        'question_twentytwo' => $_POST['prefered'],
        'question_twentythree' => $_POST['county'],
        'question_twentyfour' => $_POST['age'],
        'question_twentyfive' => $_POST['race'],
        'question_twentysix' => $_POST['gender'],
    ) );
    echo "Working";
}else{
    echo "Something's Gone Wrong Mate!";
};