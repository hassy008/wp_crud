<?php 

/**
 * Get Client IP address
 * @return type
 */
function get_the_user_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	//check ip from share internet
	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	//to check ip is pass from proxy
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	$ip = $_SERVER['REMOTE_ADDR'];
	}
	return apply_filters( 'wpb_get_ip', $ip );
}

/**
 * Before inserting into db
 * @param type $value 
 * @return type
 */
function _filter_post($value)
{
  return htmlspecialchars(stripslashes(trim($value)), ENT_QUOTES);
}

/**
 * Printing on browser
 * @param type $value 
 * @return type
 */
function _filter($value)
{
  return htmlspecialchars_decode(stripslashes($value), ENT_QUOTES);
}

/**
 * Before inserting into db
 * @param type $arr 
 * @return type
 */
function _filter_array($arr)
{
	$filtered_arr = [];
	foreach ($arr as $key => $value) {
		if(!is_array($value)){
			$value = _filter_post($value);
		}
		$filtered_arr[$key] = $value;
	}
	return $filtered_arr;
}


add_action('init', 'start_session', 1); 
add_action('wp_logout', 'end_session');
add_action('wp_login', 'end_session');	

function start_session() {
	if(!session_id()) {
		session_start();
	}
}

function end_session() {
	session_destroy ();
}

add_action('after_setup_theme', 'remove_admin_bar');

/**
 * @param $file_path
 * @param $variables
 * @return false|string
 */
function get_view($file_path, $variables = null){

    if($variables !== null)
    extract($variables, EXTR_PREFIX_SAME, "ops");

    ob_start();
    include "$file_path";
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}

/**
 * @param boolean $success
 * @param string $message
 * @param array $data
 * @return array
 */
function _return($success, $message = "", $data = [])
{
    $data['success'] = $success;
    $data['message'] = $message;

    return $data;
}

// function remove_admin_bar() {
//     if (!current_user_can('administrator') && !is_admin()) {
//         show_admin_bar(false);
//     }
// }

// // Block Access to /wp-admin for non admins.
// function custom_blockusers_init() {
//     if ( is_user_logged_in() && is_admin() && !current_user_can( 'administrator' ) ) {
//         wp_redirect( home_url() );
//         exit;
//     }
// }
// add_action( 'init', 'custom_blockusers_init' ); // Hook into 'init'