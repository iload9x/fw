<?php 


class adminController extends InitController
{
	function __construct() {
		$this->blogModel = new blogModel();
		$this->userModel = new userModel();
		$this->validate = new ValidateLib();
		$this->configModel = new configModel();
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
				return $res->redirect("/admin/login")->with(array('errors' => $this->validate->errors));
			} else {
				Auth::useTable('ngoan_cms_users');
				$a = Auth::attempt(array(
					'username' => Input::post('username'),
					'password' => Input::post('password')
				));
				if (Input::get('backtourl')) {
					return $res->redirect(Input::get('backtourl'));
				}
				return $res->redirect("/admin");
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
				return $res->redirect("/admin/register")->with(array('errors' => $this->validate->errors));
			} else {
				$this->userModel->username = Input::post('username');
				$this->userModel->password = Input::post('password');
				$this->userModel->email =Input::post('email');
				$this->userModel->nickname = Input::post('nickname');
				$this->userModel->time_reg = date("Y-m-d H:i:s",time());
				$this->userModel->avatar = 'public/templates/admin-flat/images/profile.jpg';
				$this->userModel->save();
				return $res->redirect("/admin/login");
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

	public function config($req, $res) {
		$data['seo']['title'] = "Quản lý cấu hình";
		$data['name'] = "Quản lý cấu hình";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);
		$data['globals'] = $req->globals;
		$data['configList'] = $this->configModel->find_all();
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		return $res->render("admin-flat/config", "admin-flat/layout/admin.layout", $data);
	}

	public function configPost($req, $res) {
		if ($req->csrf) {
			$arrayData = array();
			foreach (Input::post('config') as $kConfig => $vConfig) {
				array_push($arrayData, array(
					'keyword' => $kConfig,
					'value' => $vConfig
				));
			}

			$this->configModel->update_bath($arrayData, 'keyword');
			return $res->redirect('/admin/config')->with(array('success' => 'Cập nhật thành công!'));
		} else {
			echo "Sai Token!!";
		}
	}

	public function banner($req, $res) {
		$data['seo']['title'] = "Quản lý Banner quảng cáo";
		$data['name'] = "Quản lý Banner";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			'public/templates/admin-flat/scripts/banner.js'
		);
		$data['styles'] = array(
			'public/templates/admin-flat/styles/product.css'
		);
		$data['globals'] = $req->globals;
		$bannerModel = new bannerModel();
		$data['bannerList'] = $bannerModel->find_all();
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		return $res->render("admin-flat/banner", "admin-flat/layout/admin.layout", $data);
	}

	public function bannerPost($req, $res) {
		$bannerModel = new bannerModel();
		$id = Input::post('id');
		$errors = array();
		if (!$id || !is_numeric($id)) {
			array_push($errors, 'Id banner không chính xác!');
		}
		if (!$bannerModel->find($id)) {
			array_push($errors, 'Banner không tồn tại!');
		}
		if (count($errors) > 0) {
			return $res->redirect('/admin/banner')->with(array('errors' => $errors));
		}

		$FileUploader = new FileUploaderLib('files', array(
			'limit' => null,
			'maxSize' => null,
			'fileMaxSize' => null,
			'extensions' => null,
			'required' => false,
			'uploadDir' => BASE_PATH . '/public/uploads/',
			'title' => 'name',
			'replace' => false,
			'listInput' => true,
			'files' => null
		));

		$files = $FileUploader->upload();
		if ($files['hasWarnings']) {
			$warnings = $files['warnings'];
			return $res->redirect('/admin/banner')->with(array(
				'errors' => $warnings,
				'callback' => Input::post()
				));
		}
		$fileList    = $FileUploader->getFileList();
		$imagesArray = array();
		foreach (Input::post('image_src_old') as $k => $v) {
			$imagesArray[$k]['src'] = $v;
			$imagesArray[$k]['link'] = Input::post('link')[$k];
		}

		foreach ($fileList as $v) {
			array_push($imagesArray, array('src' => $v['name'], 'link' => null));
		}

		$bannerModel->image_src = json_encode($imagesArray);
		$bannerModel->save();
		return $res->redirect('/admin/banner')->with(array('success' => 'Cập nhật thành công!'));
	}


}
