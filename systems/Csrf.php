<?php /**
* 
*/
class Csrf
{
	function __construct() {
		if (!Session::get('cscfSession')) {
			$this->create();
		}
	}

	public function check() {
		if (!Input::post('_csrfToken') || Session::get('cscfSession') != Input::post('_csrfToken')) {
			return false;
		}
		//$this->create();
		return true;
	}

	public function create() {
		$this->cscf_code = "chauhh" . md5(microtime());//md5(microtime());
		Session::set('cscfSession', $this->cscf_code);
		return;
	}
}