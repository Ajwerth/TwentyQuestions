<?php 



global $aw_db_version;
$aw_db_version = "1.0";

function database_function() {
    global $wpdb;
    global $aw_db_version;

    $tablename = $wpdb->prefix . "form_submission";

    $charset_collate = $wpdb->get_charset_collate();

    $sql="CREATE TABLE $tablename (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time_stamp datetime NULL,
        question_one int(1) NULL,
        question_two int(1) NULL,
        question_three int(1) NULL,
        question_four int(1) NULL,
        question_five int(1) NULL,
        question_six int(1) NULL,
        question_seven int(1) NULL,
        question_eight int(1) NULL,
        question_nine int(1) NULL,
        question_ten int(1) NULL,
        question_eleven int(1) NULL,
        question_twelve int(1) NULL,
        question_thirteen int(1) NULL,
        question_fourteen int(1) NULL,
        question_fifteen int(1) NULL,
        question_sixteen int(1) NULL,
        question_seventeen int(1) NULL,
        question_eightteen int(1) NULL,
        question_nineteen int(1) NULL,
        question_twentyone int(2) NULL,
        question_twentytwo int(2) NULL,
        question_twentythree int(2) NULL,
        question_twentyfour int(1) NULL,
        question_twentyfive int(1) NULL,
        question_twentysix int(1) NULL,
        question_twentyseven int(1) NULL,
        question_twentyeight int(1) NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

require_once( ABSPATH . "/wp-admin/includes/upgrade.php");
dbdelta($sql);

add_option( 'aw_db_version', $aw_db_version);

}