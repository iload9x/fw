<?php /**
* 
*/
class typeController extends InitController
{
public function __construct() {
		$this->validate = new ValidateLib();
		$this->typeModel = new typeModel();
	}

	public function manager($req, $res) {
		$data['dsCategory'] = $this->typeModel->getAll();
		$data['seo']['title'] = 'Loại sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Loại sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;

		return $res->render('admin-flat/type/manager', 'admin-flat/layout/admin.layout', $data);
	}

	public function addGet($req, $res) {
		$data['seo']['title'] = 'Thêm loại sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Thêm loại sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/type/add', 'admin-flat/layout/admin.layout', $data);

	}

	public function addPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên loại SP không được bỏ trống!')->notEmpty();
			if ($this->validate->errors) {
				return $res->redirect('admin/cart/types/add')->with(array('errors' => $this->validate->errors));
			} else {
				$this->typeModel->name = Input::post('name');
				$this->typeModel->uid = $req->globals['infoUser']['id'];
				$this->typeModel->time_created = Dtime::format("Y-m-d H:i:s", time());
				$this->typeModel->save();
				return $res->redirect('admin/cart/types/add')->with(array('success' => 'Thêm thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}

	public function editGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('admin/cart/types')->with(array('errors' => array('Vui lòng chọn chuyên mục!')));
		} else if(!$this->typeModel->find($id)){
			return $res->redirect('admin/cart/types')->with(array('errors' => array('Chuyên mục không tồn tại!')));
		}
		$data['infoCategory']['name'] = $this->typeModel->name;
		$data['seo']['title'] = 'Chỉnh sửa loại sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Chỉnh sửa loại sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/type/edit', 'admin-flat/layout/admin.layout', $data);
	}

	public function editPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên chuyên mục không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID phải là số!')->notNumeric();
			$id = Input::post('id');
			if(!$this->typeModel->find($id)) {
				array_push($this->validate->errors, 'Loại sản phẩm không tồn tại!');
			}
			if ($this->validate->errors) {
				return $res->redirect('admin/cart/types/edit?id=' . $id)->with(array('errors' => $this->validate->errors));
			} else {
				$this->typeModel->name = Input::post('name');
				$this->typeModel->uid_updated = $req->globals['infoUser']['id'];
				$this->typeModel->time_updated = Dtime::format("Y-m-d H:i:s", time());
				$this->typeModel->save();
				return $res->redirect('admin/cart/types/edit?id=' . $id)->with(array('success' => 'Chỉnh sửa thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}

	public function deleteGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('admin/cart/types')->with(array('errors' => array('Vui lòng chọn Loại sản phẩm!')));
		} else if(!$this->typeModel->find($id)){
			return $res->redirect('admin/cart/types')->with(array('errors' => array('Loại sản phẩm không tồn tại!')));
		}
		$this->typeModel->reduce($id);
		if ($this->typeModel->reduce($id)) {
			return $res->redirect('admin/cart/types')->with(array('success' => 'Xóa thành công!'));
		} else {
			return $res->redirect('admin/cart/types')->with(array('errors' => 'Loại sản phâm không tồn tại hoặc vẫn tồn tại sản phẩm !'));
		}

	}
}