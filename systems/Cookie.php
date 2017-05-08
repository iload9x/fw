<?php 

class Cookie
{
	
	public static function set($cookieName, $cookieValue, $time) {
		if (!is_numeric($time)) {
			$time = 0;
		}
		if (isset($cookieName)) {
			if (is_array($cookieValue)) {
				foreach ($cookieValue as $kCookie => $vCookie) {
					setcookie("$cookieName" . "[$kCookie]", $vCookie, time() + $time, "/");
				}
				return;
			}
			setcookie("$cookieName", $cookieValue, time() + $time, "/");
		}
	}
	
	public static function delete($cookieName) {
		if (isset($cookieName)) {
			
			if (is_array($_COOKIE[$cookieName])) {
				foreach ($_COOKIE[$cookieName] as $kCookie => $vCookie) {
					unset($_COOKIE[$cookieName][$kCookie]);
					setcookie("$cookieName" . "[$kCookie]", null, time() - 9999, "/");
				}
			} else {
				unset($_COOKIE[$cookieName]);
				setcookie("$cookieName", null, time() - 9999, "/");
			}}
	}

	public static function get($cookieName = null) {
		if(isset($cookieName))
			return isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : false;
		return $_COOKIE;
	}


}