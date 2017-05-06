<?php /**
* 
*/
class companyController extends InitController
{
	public function __construct() {
		$this->validate = new ValidateLib();
		$this->companyModel = new companyModel();
	}

	public function manager($req, $res) {
		$data['dsCategory'] = $this->companyModel->getAll();
		$data['seo']['title'] = 'Hãng sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Hãng sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;

		return $res->render('admin-flat/company/manager', 'admin-flat/layout/admin.layout', $data);
	}

	public function addGet($req, $res) {
		$data['seo']['title'] = 'Thêm hãng sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Thêm hãng sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/company/add', 'admin-flat/layout/admin.layout', $data);

	}

	public function addPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên hãng không được bỏ trống!')->notEmpty();
			if ($this->validate->errors) {
				return $res->redirect('/admin/cart/companies/add')->with(array('errors' => $this->validate->errors));
			} else {
				$this->companyModel->name = Input::post('name');
				$this->companyModel->uid = $req->globals['infoUser']['id'];
				$this->companyModel->slug = StringLib::convertUrl(Input::post('name'));
				$this->companyModel->time_created = Dtime::format("Y-m-d H:i:s", time());
				$this->companyModel->save();
				return $res->redirect('/admin/cart/companies/add')->with(array('success' => 'Thêm thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}

	public function editGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('/admin/cart/companies')->with(array('errors' => array('Vui lòng chọn chuyên mục!')));
		} else if(!$this->companyModel->find($id)){
			return $res->redirect('/admin/cart/companies')->with(array('errors' => array('Chuyên mục không tồn tại!')));
		}
		$data['infoCategory']['name'] = $this->companyModel->name;
		$data['seo']['title'] = 'Chỉnh sửa chuyên mục sản phẩm';
		$data['globals'] = $req->globals;
		$data['name'] = "Chỉnh sửa chuyên mục sản phẩm";
		$data['csrf_token'] = $req->csrfToken;
		$data['scripts'] = array(
			//'public/templates/admin-flat/scripts/admin.js'
		);

		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/company/edit', 'admin-flat/layout/admin.layout', $data);
	}

	public function editPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên chuyên mục không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('id', 'ID không được bỏ trống!')->notNumeric();
			$id = Input::post('id');
			if(!$this->companyModel->find($id)) {
				array_push($this->validate->errors, 'Chuyên mục không tồn tại!');
			}
			if ($this->validate->errors) {
				return $res->redirect('/admin/cart/companies/edit?id=' . $id)->with(array('errors' => $this->validate->errors));
			} else {
				$this->companyModel->name = Input::post('name');
				$this->companyModel->uid_updated = $req->globals['infoUser']['id'];
				$this->companyModel->slug = StringLib::convertUrl(Input::post('name'));
				$this->companyModel->time_updated = Dtime::format("Y-m-d H:i:s", time());
				$this->companyModel->save();
				return $res->redirect('/admin/cart/companies/edit?id=' . $id)->with(array('success' => 'Chỉnh sửa thành công!'));
			}
		}else {
			die('Loi Token!');
		}
	}

	public function deleteGet($req, $res) {
		$id = Input::get('id');
		if (!$id || !is_numeric($id)) {
			return $res->redirect('/admin/cart/companies')->with(array('errors' => array('Vui lòng chọn Hãng sản xuất!')));
		} else if(!$this->companyModel->find($id)){
			return $res->redirect('/admin/cart/companies')->with(array('errors' => array('Hãng sản xuất không tồn tại!')));
		}
		$this->companyModel->reduce($id);
		if ($this->companyModel->reduce($id)) {
			return $res->redirect('/admin/cart/companies')->with(array('success' => 'Xóa thành công!'));
		} else {
			return $res->redirect('/admin/cart/companies')->with(array('errors' => 'Hãng sản xuất không tồn tại hoặc vẫn tồn tại sản phẩm !'));
		}

	}
}

