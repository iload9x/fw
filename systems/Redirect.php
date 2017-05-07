<?php /**
* 
*/
class Redirect
{
	public static function to($urlTo) {
		header("Location: " . URL::base_url() . $urlTo);
	}

}