<?php 
class Input 
{
	function __construct() {
	}

	public static function setPost($name, $value) {
		$_POST[$name] = $value;
		return true;
	}
	public static function get($name = null) {
		if (isset($name)) {
			return isset($_GET[$name]) ? $_GET[$name] : false;
		}
		return $_GET;
	}

	public static function post($name = null) {

		if (isset($name)) {
			return isset($_POST[$name]) ? $_POST[$name] : false;
		}
		return $_POST;
	}

	public static function files($name = null) {

		if (isset($name)) {
			return isset($_FILES[$name]) ? $_FILES[$name] : false;
		}
		return $_FILES;
	}
}
 ?>