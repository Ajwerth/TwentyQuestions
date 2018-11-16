<?php

resgister_activation_hook(__FILE__, "database_function");

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
        
    ) $charset_collate;";

require_once( ABSPATH . "/wp-admin/includes/upgrade.php");
dbdelta($sql);

add_option( 'aw_db_version', $aw_db_version);

}

//Next Step Add Form Elements into DB
