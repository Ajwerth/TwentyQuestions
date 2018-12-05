<?php 
global $aw_db_version;
$aw_db_version = "1.0";

function database_function() {
    global $wpdb;
    global $aw_db_version;

    $tablename = $wpdb->prefix . "twenty_questions";
    $charset_collate = $wpdb->get_charset_collate();

    $sql="CREATE TABLE $tablename (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time_stamp datetime NULL,
        question_one  varchar(50) NULL,
        question_two varchar(50) NULL,
        question_three varchar(50) NULL,
        question_four varchar(50) NULL,
        question_five varchar(50) NULL,
        question_six varchar(50) NULL,
        question_seven varchar(50) NULL,
        question_eight varchar(50) NULL,
        question_nine varchar(50) NULL,
        question_ten varchar(50) NULL,
        question_eleven varchar(50) NULL,
        question_twelve varchar(50) NULL,
        question_thirteen varchar(50) NULL,
        question_fourteen varchar(50) NULL,
        question_fifteen varchar(50) NULL,
        question_sixteen varchar(50) NULL,
        question_seventeen varchar(50) NULL,
        question_eightteen varchar(50) NULL,
        question_nineteen varchar(50) NULL,
        question_twenty varchar(50) NULL,
        question_twentyone varchar(50) NOT NULL,
        question_twentytwo varchar(50) NOT NULL,
        question_twentythree varchar(50) NOT NULL,
        question_twentyfour varchar(50) NOT NULL,
        question_twentyfive varchar(50) NOT NULL,
        question_twentysix varchar(50) NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

require_once( ABSPATH . "/wp-admin/includes/upgrade.php");
dbdelta($sql);

add_option( 'aw_db_version', $aw_db_version);

}
