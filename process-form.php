<?php
require_once('../../../wp-config.php;');
require_once('../../../wp-includes/wp-db.php;');

if(isset($_POST['q-one-yes'])){
    global $wpdb, $table_prefix;

    $table_name = $wpdb->prefix . 'form_submission';
    $timestamp = current_time( 'mysql' );
    $wpdb->insert(
        $table_name,
        array(
            'time_stamp' => $timestamp,
        )
        );
    echo "Working";
}else{
    echo "Shits Fucked";
};


//