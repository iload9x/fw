<?php
	session_start();
	define('BASE_PATH', dirname(__FILE__));
	define('SYSTEM_PATH', BASE_PATH . '/systems/');
	define('APP_PATH', BASE_PATH . '/app/');
	require_once SYSTEM_PATH . "autoLoad.php";
	$Initialize = new Initialize();
?>
