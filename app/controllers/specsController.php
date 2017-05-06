<?php /**
* 
*/
class specsController extends InitController
{
	
	function __construct()
	{
		$this->specsModel = new specsModel();
		$this->validate = new ValidateLib();
	}

	public function manager($req, $res) {
		$data['dsCategory'] = $this->specsModel->getAll();
		$data['seo']['title'] = 'Thông số kỹ thuật';
		$data['globals'] = $req->globals;
		$data['name'] = "Thông số kỹ thuật";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;

		return $res->render('admin-flat/specs/manager', 'admin-flat/layout/admin.layout', $data);
	}

	public function addGet($req, $res) {
		$data['seo']['title'] = 'Thêm thông số kỹ thuật';
		$data['globals'] = $req->globals;
		$data['name'] = "Thêm thông số kỹ thuật";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/specs/add', 'admin-flat/layout/admin.layout', $data);
	}
	
	public function addPost($req, $res) {
		if (true) {
			$this->validate->checkBody('name', 'Tên định danh')->notEmpty();
			if ($this->validate->errors) {
				if (Input::post('type') == 'ajax') {
					die(json_encode(array('errors' => $this->validate->errors)));
				}
				return $res->redirect('/admin/cart/specs/add')->with(array('errors' => $this->validate->errors));
			} else {
				$data = Input::post('specs');
				$this->specsModel->name = Input::post('name');
				foreach ($data as $key => $value) {
					$this->specsModel->{$key} = trim($value);
				}
				$this->specsModel->save();
				if (Input::post('type') == 'ajax') {
					die(json_encode(array('success' => 'Thêm thành công!')));
				}
				return $res->redirect('/admin/cart/specs/add')->with(array('success' => 'Thêm thành công!'));
			}
		}else {
			if (Input::post('type') == 'ajax') {
				die(json_encode(array('errors' => 'Lỗi Token!')));
			}
			die('Loi Token!');
		}
	}

	public function editGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('/admin/cart/specs')->with(array('errors' => array('Có lỗi xảy ra!')));
		} else if(!$this->specsModel->find($id)){
			return $res->redirect('/admin/cart/specs')->with(array('errors' => array('Thông số kỹ thuật không tồn tại!')));
		}
		$data['infoSpecs'] = $this->specsModel->getInfo($id);
		$data['seo']['title'] = 'Chỉnh sửa thông tin kỹ thuật';
		$data['globals'] = $req->globals;
		$data['name'] = "Chỉnh sửa thông tin kỹ thuật";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/specs/edit', 'admin-flat/layout/admin.layout', $data);
	}

	public function editPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên định danh không được bỏ trống!')->notEmpty();
			$id = Input::post('id');
			if(!$this->specsModel->find($id)) {
				array_push($this->validate->errors, 'ID không tồn tại!');
			}
			if ($this->validate->errors) {
				return $res->redirect('/admin/cart/specs/edit?id=' . $id)->with(array('errors' => $this->validate->errors));
			} else {
				$data = Input::post('data');
				$this->specsModel->name = Input::post('name');
				foreach ($data as $key => $value) {
					$this->specsModel->{$key} = trim($value);
				}
				$this->specsModel->save();
				return $res->redirect('/admin/cart/specs/edit?id=' . $id)->with(array('success' => 'Chỉnh sửa thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}
}