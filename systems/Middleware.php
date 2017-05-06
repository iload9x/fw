<?php /**
* 
*/
class Middleware
{
	function __construct() {

	}

	public function auth($req) {
		if (!Auth::isAuth()) {
			Redirect::to('/test/login');
		}

		return true;
	}
	
}