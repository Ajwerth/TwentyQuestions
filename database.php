<?php

register_activation_hook(__FILE__, "database_function");

global $aw_db_version;
$aw_db_version = "1.0";

function database_function() {
    global $wpdb;
    global $aw_db_version;

    $tablename = $wpdb->prefix . "form_submission";

    $charset_collate = $wpdb->get_charset_collate();

    $sql="CREATE TABLE $tablename (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        question_one INT(1) NOT NULL,
        question_two INT(1) NOT NULL,
        question_three INT(1) NOT NULL,
        question_four INT(1) NOT NULL,
        question_five INT(1) NOT NULL,
        question_six INT(1) NOT NULL,
        question_seven INT(1) NOT NULL,
        question_eight INT(1) NOT NULL,
        question_nine INT(1) NOT NULL,
        question_ten INT(1) NOT NULL,
        question_eleven INT(1) NOT NULL,
        question_twelve INT(1) NOT NULL,
        question_thirteen INT(1) NOT NULL,
        question_fourteen INT(1) NOT NULL,
        question_fifteen INT(1) NOT NULL,
        question_sixteen INT(1) NOT NULL,
        question_seventeen INT(1) NOT NULL,
        question_eightteen INT(1) NOT NULL,
        question_nineteen INT(1) NOT NULL,
        question_twentyone INT(2) NOT NULL,
        question_twentytwo INT(2) NOT NULL,
        question_twentythree INT(2) NOT NULL,
        question_twentyfour INT(1) NOT NULL,
        question_twentyfive INT(1) NOT NULL,
        question_twentysix INT(1) NOT NULL,
        question_twentyseven INT(1) NOT NULL,
        question_twentyeight INT(1) NOT NULL,
    ) $charset_collate;";

require_once( ABSPATH . "/wp-admin/includes/upgrade.php");
dbdelta($sql);

add_option( 'aw_db_version', $aw_db_version);

}


