<?php /**
* 
*/
class URL 
{
	public static function directory() {
		$requestUri = $_SERVER['REQUEST_URI'];
		if (Session::get('directorys_system')) {
			return Session::get('directorys_system');
		}
		if (strpos($requestUri, '?') !== false) {
			$requestUri = substr($_SERVER['REQUEST_URI'], 0, strpos($requestUri, '?'));
		} else {
			$requestUri = substr($_SERVER['REQUEST_URI'], 0, strlen($_SERVER['REQUEST_URI']));
		}
		$requestUriElement = explode('/', $requestUri);
		$strRequestUriElement = $requestUriElement[1];
		$id = 1;
		$directorys = $requestUriElement[0].'/';
		while (@strpos(BASE_PATH, $strRequestUriElement) !== false) {
			$directorys .= $requestUriElement[$id].'/';
			$id++;
			$strRequestUriElement = $strRequestUriElement . '\\' .$requestUriElement[$id];
		}
		$directorys = substr($directorys, 0, strlen($directorys) - 1);
		Session::set('directorys_system', $directorys);
		return $directorys;
	}

	public static function requestUri() {
		return $_SERVER['REQUEST_URI'];
	}

	public static function thisUrl() {
		return self::http_host().self::requestUri();
	}

	public static function thisRoute() {
		return str_replace(self::base_path(), '', self::thisUrl());
	}

	public static function http_host() {
		return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
	}

	public static function base_path($url = '') {
		if (!Session::get('base_url')) {
			Session::set('base_url', self::http_host() . self::directory());
		}
		return Session::get('base_url')  . $url;
	}

	public static function base_url($url = '') {
		if (!Session::get('base_url')) {
			Session::set('base_url', self::http_host() . self::directory());
		}
		return Session::get('base_url')  . $url;
	}

	public static function clearHoiCham($requestUrl) {
		if (strpos($requestUrl, '?')) {
			return $requestUrl = substr($requestUrl, 0, strpos($requestUrl, '?'));
		}
		return $requestUrl;
	}


	public static function setOldUrl($url) {
		Session::set('oldUrl',self::base_path($url));
	}

	public static function oldUrl() {
		return Session::get('oldUrl');
	}

}