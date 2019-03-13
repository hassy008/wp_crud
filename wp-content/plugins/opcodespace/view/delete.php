<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  $OpsCrudUser = new OpsCrudUser(); //instance extended class file 
  $user        = $OpsCrudUser->delete(['id' => $_GET['delete']]);
  echo "Deleted Successfully";
  // echo "<pre>";
  // print_r($user);
  // echo "<pre>";

 //  	wp_redirect( home_url('short-code') );
	// exit;

// 	header('Location: http://localhost/wordpress/short-code/');
// exit();
?>