<?php /**
* 
*/
class testController extends InitController
{
	function __construct() {
		$this->url = new URL();
	}

	function index($req, $res) {
		echo $this->url->directory();
		$middle = new Middleware();
		$req->global = 11111;
		$data = array();
		return $res->render('admin/login','admin/layout', $data);
	}

	function login($req, $res) {
		//echo $req->global['infomation'];
		Auth::useTable('tamhoa_user');
		if (Auth::attempt(array('sdfsd'), 1)) {
			die('Đăng nhập thành công');
		} else {
			die('Đăng nhập thất bại');
		}
	}

	function logout($req, $res) {
		Auth::logout();
		return $res->redirect('/test/login');
	}


}