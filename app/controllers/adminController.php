<?php 


class adminController extends InitController
{
	function __construct() {
		$this->blogModel = new blogModel();
		$this->userModel = new userModel();
		$this->validate = new ValidateLib();
	}

	public function index($req, $res) {
		$data = $this->blogModel->chartData();//load data for charts
		
		$data['seo']['title'] = "Admin Control Panel";
		$data['name'] = "Admin Dashboard";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			'public/templates/admin-flat/scripts/admin.js'
		);
		$data['globals'] = $req->globals;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render("admin-flat/index", "admin-flat/layout/admin.layout", $data);
	}


	public function login($req, $res) {
		$data['seo']['title'] = "Đăng nhập";
		$data['csrf_token'] = $req->csrfToken;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render("admin-flat/login", "admin-flat/layout/register.layout", $data);
	}

	public function loginPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('username','Họ tên không được bỏ trống')->notEmpty();
			$this->validate->checkBody('password','Mật khẩu không được bỏ trống')->notEmpty();
			if (!$this->userModel->find(Input::post('username'),'username')) {
				array_push($this->validate->errors, "Tài khoản chưa được đăng ký!");
			} else {
				if ($this->userModel->whereAnd(array('username' => Input::post('username'), 'password' => Input::post('password')))->get()->countAll() <= 0) {
					array_push($this->validate->errors, "Mật khẩu không chính xác!");
				} else if($this->userModel->whereAnd(array('status' => 1, 'username' => Input::post('username'), 'password' => Input::post('password')))->get()->countAll() <= 0){
					array_push($this->validate->errors, "Tài khoản hiện đang bị khóa!");
				}
			}
			if ($this->validate->errors) {
				return $res->redirect("admin/login")->with(array('errors' => $this->validate->errors));
			} else {
				Auth::useTable('ngoan_cms_users');
				$a = Auth::attempt(array(
					'username' => Input::post('username'),
					'password' => Input::post('password')
				));
				if (Input::get('backtourl')) {
					return $res->redirect(Input::get('backtourl'));
				}
				return $res->redirect("admin");
			}


		}
	}

	public function register($req, $res) {
		$data['seo']['title'] = "Đăng ký";
		$data['csrf_token'] = $req->csrfToken;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render("admin-flat/register", "admin-flat/layout/register.layout", $data);
	}

	public function registerPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('username','Họ tên không được bỏ trống')->notEmpty();
			$this->validate->checkBody('password','Mật khẩu không được bỏ trống')->notEmpty();
			$this->validate->checkBody('nickname','Tên hiện thị không được bỏ trống')->notEmpty();
			$this->validate->checkBody('email','Sai định dạng Email!')->isEmail();
			if($this->userModel->find(Input::post('username'),'username')) {
				array_push($this->validate->errors, "Tài khoản đã được đăng ký");
			}
			if ($this->validate->errors) {
				return $res->redirect("admin/register")->with(array('errors' => $this->validate->errors));
			} else {
				$this->userModel->username = Input::post('username');
				$this->userModel->password = Input::post('password');
				$this->userModel->email =Input::post('email');
				$this->userModel->nickname = Input::post('nickname');
				$this->userModel->time_reg = date("Y-m-d H:i:s",time());
				$this->userModel->avatar = 'public/templates/admin-flat/images/profile.jpg';
				$this->userModel->save();
				return $res->redirect("admin/login");
			}
		} else {
			echo "Sai Token!!";
		}
	}

	public function profile($req, $res) {
		$data['seo']['title'] = "Profile";
		$data['name'] = "Profile";
		$data['csrf_token'] = $req->csrfToken;
		$data['globals'] = $req->globals;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render("admin-flat/profile", "admin-flat/layout/admin.layout", $data);
	}

}
