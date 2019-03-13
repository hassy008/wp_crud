<?php
/**
 * Here should be all table and column which will create table
 */
class OpsInstallTable
{
    public static function token()
    {
        global $wpdb;
        $version = '1.0';
        $table_name       = $wpdb->prefix . 'token';
        $charset_collate  = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(11) NOT NULL AUTO_INCREMENT,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            modified_at DATETIME on update CURRENT_TIMESTAMP NOT NULL,
            token TEXT NULL,
            vendor VARCHAR(50) NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);

        add_option('version', $version);
    }

    public static function crud_user()
    {
        global $wpdb;
        $version = '1.0';
        $table_name       = $wpdb->prefix . 'crud_user';
        $charset_collate  = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
            id mediumint(11) NOT NULL AUTO_INCREMENT,
            first_name varchar(255) NOT NULL, 
            last_name varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            phone int(11) NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            modified_at DATETIME on update CURRENT_TIMESTAMP NOT NULL,
            token TEXT NULL,
            vendor VARCHAR(50) NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);

        add_option('version', $version);
    }

    public function crud_user_action()
    {
        global $wpdb;
        $version         = '1.0';
        $table_name      = $wpdb->prefix . 'crud_user_action';
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
          id mediumint(11) NOT NULL AUTO_INCREMENT,
          first_name varchar(255) NOT NULL,
          last_name varchar(255) NOT NULL,
          email varchar(255) NOT NULL,
          phone int(11) NOT NULL,
          address varchar(255) NOT NULL,
          created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
          modified_at DATETIME on update CURRENT_TIMESTAMP NOT NULL,
          token TEXT NULL,
          vendor VARCHAR(50) NULL,
          PRIMARY KEY  (id)
        ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );

        add_option('version', $version);
    }


}
