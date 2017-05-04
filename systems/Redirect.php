<?php /**
* 
*/
class Redirect
{
	public static function to($urlTo) {
		$url = new URL();
		header("Location: " . $url->http_host() . $url->directory() . $urlTo);
	}

}