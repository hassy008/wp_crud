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
        add_action('admin_post_', array($self, ''));
        //add_action('admin_post_nopriv_', array($self,'') );
    }
}
