<?php /**
* 
*/
class categoryController extends InitController
{
	public function __construct() {
		$this->validate = new ValidateLib();
		$this->categoryModel = new categoryModel();
	}

	public function manager($req, $res) {
		$data['dsCategory'] = $this->categoryModel->getAll();
		$data['seo']['title'] = 'Chuyên mục sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Chuyên mục sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;

		return $res->render('admin-flat/category/manager', 'admin-flat/layout/admin.layout', $data);
	}

	public function addGet($req, $res) {
		$data['seo']['title'] = 'Thêm mục sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Thêm mục sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/category/add', 'admin-flat/layout/admin.layout', $data);

	}

	public function addPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên chuyên mục không được bỏ trống!')->notEmpty();
			if ($this->validate->errors) {
				return $res->redirect('admin/cart/categories/add')->with(array('errors' => $this->validate->errors));
			} else {
				$this->categoryModel->name = Input::post('name');
				$this->categoryModel->uid = $req->globals['infoUser']['id'];
				$this->categoryModel->slug = StringLib::convertUrl(Input::post('name'));
				$this->categoryModel->time_created = Dtime::format("Y-m-d H:i:s", time());
				$this->categoryModel->save();
				return $res->redirect('admin/cart/categories/add')->with(array('success' => 'Thêm thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}

	public function editGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('admin/cart/categories')->with(array('errors' => array('Vui lòng chọn chuyên mục!')));
		} else if(!$this->categoryModel->find($id)){
			return $res->redirect('admin/cart/categories')->with(array('errors' => array('Chuyên mục không tồn tại!')));
		}
		$data['infoCategory']['name'] = $this->categoryModel->name;
		$data['seo']['title'] = 'Chỉnh sửa chuyên mục sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Chỉnh sửa chuyên mục sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/category/edit', 'admin-flat/layout/admin.layout', $data);
	}

	public function editPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên chuyên mục không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID không được bỏ trống!')->notNumeric();
			$id = Input::post('id');
			if(!$this->categoryModel->find($id)) {
				array_push($this->validate->errors, 'Chuyên mục không tồn tại!');
			}
			if ($this->validate->errors) {
				return $res->redirect('admin/cart/categories/edit?id=' . $id)->with(array('errors' => $this->validate->errors));
			} else {
				$this->categoryModel->name = Input::post('name');
				$this->categoryModel->uid_updated = $req->globals['infoUser']['id'];
				$this->categoryModel->slug = StringLib::convertUrl(Input::post('name'));
				$this->categoryModel->time_updated = Dtime::format("Y-m-d H:i:s", time());
				$this->categoryModel->save();
				return $res->redirect('admin/cart/categories/edit?id=' . $id)->with(array('success' => 'Chỉnh sửa thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}
}