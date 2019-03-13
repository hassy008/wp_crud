<?php

/**
 *
 */
use Leafo\ScssPhp\Compiler;

require_once OP_PATH . "inc/vendor/leafo/scssphp/scss.inc.php";

class OpsAction
{
    public static function init()
    {
        $self = new self;
        //add_action('admin_post_', array($self, ''));
        //add_action('admin_post_nopriv_', array($self,'') );

        add_action('admin_post_crud_user_link', array($self, 'userAdd'));
        add_action('admin_post_crud_user_edit_link', array($self, 'userEdit'));


        // add_action('admin_post_nopriv_crud_user_link', array($self,'userAdd') );
    }

    public function userAdd()
    {
        // echo "<pre>";
        //    print_r($_POST);
        //    echo"</pre>";

        if (!isset($_POST['userAdd']) || !wp_verify_nonce($_POST['userAdd'], 'userAdd-nonce')) {
            die("You are not allowed to submit data.");
        }
        //echo "<pre>"; print_r($_POST); echo "</pre>";
        else {
            //$table_name = $wpdb->prefix.'crud_user';
            $data = array(
                        'first_name' => $_POST['first_name'],
                        'last_name'  => $_POST['last_name'],
                        'address'    => $_POST['address'],
                        'email'      => $_POST['email'],
                        'phone'      => $_POST['phone']
                    );
            // $wpdb->insert($data);
            $OpsCrud = new OpsCrud();
            $OpsCrud->insert($data);
            // echo "<pre>"; print_r($data); echo "</pre>";
                    
            wp_redirect($_POST['_wp_http_referer']);
            exit();
        }
    }
        
    public function userEdit()
    {
        if (!isset($_POST['userEdit']) || !wp_verify_nonce($_POST['userEdit'], 'userEdit-nonce')) {
            die("You are not allowed to submit data.");
        }
        else {
            $data = array(
                        'first_name' => $_POST['first_name'],
                        'last_name'  => $_POST['last_name'],
                        'address'    => $_POST['address'],
                        'email'      => $_POST['email'],
                        'phone'      => $_POST['phone']
                    );

            $OpsCrud = new OpsCrud();
            $OpsCrud->update($data, ['id' => $_POST['id']]);
            //echo "<pre>"; print_r($data); echo "</pre>"; die();
                    
            wp_redirect($_POST['_wp_http_referer']);
            exit();
        }        
    }
}	
