<?php
/**
 * Created by PhpStorm.
 * User: Mehedee
 * Date: 1/3/2019
 * Time: 5:11 PM
 */

function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __('Tooltip Map', 'textdomain'),
        'Tooltip',
        'manage_options',
        'tooltips',
        'tooltip_map_page',
        '',
        1
    );
}
add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

/**
 * Display a custom menu page
 */
function tooltip_map_page() {
    ob_start();
    include OP_VIEW_PATH . 'content-tooltip-map.php';
    $content = ob_get_contents();
    return $content;
}