<?php
/**
 * 
 */
class productController extends InitController
{

	function __construct()
	{
		$this->productModel  = new productModel();
		$this->specsModel    = new specsModel();
		$this->companyModel  = new companyModel();
		$this->typeModel     = new typeModel();
		$this->categoryModel = new categoryModel();
		$this->validate      = new ValidateLib();
	}

	public function manager($req, $res)
	{
		$txtSearch    = Input::get('txtSearch');
		$field        = Input::get('field');
		$sort         = Input::get('sort');
		$sobaihienthi = 10;
		$curentPage   = (Input::get('page') && is_numeric(Input::get('page'))) ? Input::get('page') : 1;
		if ($txtSearch || $field || $sort) {
			$data['dsProduct'] = $this->productModel->search($txtSearch, $field, $sort, $curentPage, $sobaihienthi);
			$totalRow          = $this->productModel->search_count($txtSearch, $field, $sort);
		} else {
			$data['dsProduct'] = $this->productModel->getProducts($curentPage, $sobaihienthi);
			$totalRow          = $this->productModel->count_all();
		}
		$data['seo']['title']               = 'Quản lý sản phẩm';
		$data['globals']                    = $req->globals;
		$data['name']                       = "Quản lý sản phẩm";
		$data['csrf_token']                 = $req->csrfToken;
		$data['scripts']      = array(
			'public/templates/admin-flat/scripts/select2.js',
			'public/templates/admin-flat/scripts/product.js'
			);

		$data['styles']              = array(
			'public/templates/admin-flat/styles/select2.min.css',
			'public/templates/admin-flat/styles/product.css'
			);
		$data['validate']['success']        = isset($req->success) ? $req->success : null;
		$data['validate']['errors']         = isset($req->errors) ? $req->errors : null;
		$pagination                         = new PaginationLib();
		$pagination->next_tag_html          = '<button name="page" value="{$id}" class="pagination-btn btn btn-default"><i class="fa fa-chevron-right"></i></button>';
		$pagination->next_tag_disabled_html = '<button disabled name="page" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>';
		$pagination->prev_tag_html          = '<button name="page" value="{$id}" class="pagination-btn btn btn-default"><i class="fa fa-chevron-left"></i></button>';
		$pagination->prev_tag_disabled_html = '<button disabled name="page" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>';
		$pagination->num_tag_html           = '<button name="page" value="{$id}" class="pagination-btn  btn btn-default">{$id}</button>';
		$pagination->cur_tag_html           = '<button disabled name="page" value="{$id}" class="btn btn-default active">{$id}</button>';
		$data['pagination']                 = $pagination->html($totalRow, $curentPage, $sobaihienthi);

		return $res->render('admin-flat/product/manager', 'admin-flat/layout/admin.layout', $data);
	}

	public function addGet($req, $res)
	{

		$data['callback'] = isset($req->callback) ? $req->callback : null;
		$data['seo']['title'] = 'Thêm sản phẩm';
		$data['globals']      = $req->globals;
		$data['name']         = "Thêm sản phẩm";
		$data['csrf_token']   = $req->csrfToken;
		$data['scripts']      = array(
			'public/templates/admin-flat/scripts/select2.js',
			'public/templates/admin-flat/scripts/product.js'
			);

		$data['styles']              = array(
			'public/templates/admin-flat/styles/select2.min.css',
			'public/templates/admin-flat/styles/product.css'
			);
		$data['dsSpecs']             = $this->specsModel->getAll();
		$data['dsCategory']          = $this->categoryModel->getAll();
		$data['dsCompany']           = $this->companyModel->getAll();
		$data['dsType']              = $this->typeModel->getAll();
		$data['dsImages']            = array_diff(scandir(BASE_PATH . '/public/uploads'), array(
			'.',
			'..'
			));
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors']  = isset($req->errors) ? $req->errors : null;
		return $res->render('admin-flat/product/add', 'admin-flat/layout/admin.layout', $data);
	}

	public function addPost($req, $res)
	{
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên sản phẩm')->notEmpty();
			$this->validate->checkBody('detail', 'Mô tả chi tiết')->notEmpty();
			$this->validate->checkBody('categoryId', 'Chuyên mục')->notEmpty()->notNumeric();
			$this->validate->checkBody('companyId', 'Hãng sản xuất')->notEmpty()->notNumeric();
			$this->validate->checkBody('specsId', 'Thông số kỹ thuật')->notEmpty()->notNumeric();
			$this->validate->checkBody('price', 'Giá sản phẩm')->notNumeric();
			$this->validate->checkBody('status', 'Trạng thái')->notNumeric();

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


			if ($this->validate->errors) {

				return $res->redirect('/admin/cart/products/add')->with(array(
					'errors' => $this->validate->errors,
					'callback' => Input::post()
					));
			} else {
				$files = $FileUploader->upload();
				if ($files['hasWarnings']) {
					$warnings = $files['warnings'];
					return $res->redirect('/admin/cart/products/add')->with(array(
						'errors' => $warnings,
						'callback' => Input::post()
						));
				}
				$fileList    = $FileUploader->getFileList();
				$imagesArray = array();
				foreach ($fileList as $v) {
					array_push($imagesArray, $v['name']);
				}
				foreach ($fileList as $v) {
					array_push($imagesArray, $v['name']);
				}

				$storage = array();
				$storagePrice = Input::post('storagePrice');
				foreach (Input::post('storage') as $k => $v) {
					if (!empty($v)) {
						$storage[$v] = $storagePrice[$k];
					}
				}

				$color = array();
				$colorPrice = Input::post('colorPrice');
				foreach (Input::post('color') as $k => $v) {
					if (!empty($v)) {
						$color[$v] = $colorPrice[$k];
					}
				}

				$this->productModel->name					= Input::post('name');
				$this->productModel->detail				= Input::post('detail');
				$this->productModel->categoryId   = Input::post('categoryId');
				$this->productModel->companyId    = Input::post('companyId');
				$this->productModel->typeId       = json_encode(Input::post('typeId'));
				$this->productModel->specsId      = Input::post('specsId');
				$this->productModel->uId          = $req->globals['infoUser']['id'];
				$this->productModel->price        = Input::post('price');
				$this->productModel->status       = Input::post('status');
				$this->productModel->storage      = json_encode($storage);
				$this->productModel->color      = json_encode($color);
				$this->productModel->guarantee = Input::post('guarantee');
				$this->productModel->inbox = Input::post('inbox');
				$this->productModel->delivery = Input::post('delivery');
				$this->productModel->counpons = json_encode(Input::post('counpons'));
				$this->productModel->avatar       = json_encode($imagesArray);
				$this->productModel->time_created = Dtime::format("Y-m-d H:i:s", time());
				$this->productModel->save();
				return $res->redirect('/admin/cart/products/add')->with(array(
					'success' => 'Thêm thành công!'
					));
			}
		} else {
			die('Loi Token!');
		}
	}

	public function editGet($req, $res)
	{
		$id = $req->id;
		if (!$id || !is_numeric($id)) {
			return $res->redirect('/admin/cart/products')->with(array(
				'errors' => array(
					'Có lỗi xảy ra!'
					)
				));
		} else if (!$this->productModel->find($id)) {
			return $res->redirect('/admin/cart/products')->with(array(
				'errors' => array(
					'Sản phẩm không tồn tại!'
					)
				));
		}

		$data['seo']['title'] = 'Chỉnh sửa thông tin sản phẩm';
		$data['globals']      = $req->globals;
		$data['name']         = "Chỉnh sửa thông tin sản phẩm";
		$data['csrf_token']   = $req->csrfToken;
		$data['scripts']      = array(
			'public/templates/admin-flat/scripts/select2.js',
			'public/templates/admin-flat/scripts/product.js'
			);

		$data['styles']              = array(
			'public/templates/admin-flat/styles/select2.min.css',
			'public/templates/admin-flat/styles/product.css'
			);
		$data['dsSpecs']             = $this->specsModel->getAll();
		$data['dsCategory']          = $this->categoryModel->getAll();
		$data['dsCompany']           = $this->companyModel->getAll();
		$data['dsType']              = $this->typeModel->getAll();
		$data['dsImages']            = array_diff(scandir(BASE_PATH . '/public/uploads'), array(
			'.',
			'..'
			));
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$data['validate']['errors']  = isset($req->errors) ? $req->errors : null;

		$data['infoProduct']  = $this->productModel->getInfo($id);
		$data['infoProduct']['avatar'] = json_decode($data['infoProduct']['avatar']);
		$data['infoProduct']['storage'] = (array)json_decode($data['infoProduct']['storage']);
		$data['infoProduct']['color'] = (array)json_decode($data['infoProduct']['color']);
		$data['infoProduct']['counpons'] = (array)json_decode($data['infoProduct']['counpons']);
		$data['infoProduct']['typeId'] = (array)json_decode($data['infoProduct']['typeId']);

		return $res->render('admin-flat/product/edit', 'admin-flat/layout/admin.layout', $data);
	}

	public function editPost($req, $res)
	{
		if ($req->csrf) {
			$this->validate->checkBody('name', 'Tên sản phẩm')->notEmpty();
			$this->validate->checkBody('detail', 'Mô tả chi tiết')->notEmpty();
			$this->validate->checkBody('categoryId', 'Chuyên mục')->notEmpty()->notNumeric();
			$this->validate->checkBody('companyId', 'Hãng sản xuất')->notEmpty()->notNumeric();
			$this->validate->checkBody('specsId', 'Thông số kỹ thuật')->notEmpty()->notNumeric();
			$this->validate->checkBody('price', 'Giá sản phẩm')->notNumeric();
			$this->validate->checkBody('status', 'Trạng thái')->notNumeric();

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

			$id = Input::post('id');
			if (!$this->productModel->find($id)) {
				array_push($this->validate->errors, 'ID sản phẩm không tồn tại!');
			}
			if ($this->validate->errors) {
				return $res->redirect('/admin/cart/products/edit-' . $id)->with(array(
					'errors' => $this->validate->errors
					));
			} else {
				$files = $FileUploader->upload();
				if ($files['hasWarnings']) {
					$warnings = $files['warnings'];
					return $res->redirect('/admin/cart/products/edit-' . $id)->with(array(
						'errors' => $warnings,
						'callback' => Input::post()
						));
				}
				$fileList    = $FileUploader->getFileList();
				$imagesArray = array();
				foreach ($fileList as $v) {
					array_push($imagesArray, $v['name']);
				}
				foreach ($fileList as $v) {
					array_push($imagesArray, $v['name']);
				}

				$storage = array();
				$storagePrice = Input::post('storagePrice');
				foreach (Input::post('storage') as $k => $v) {
					if (!empty($v)) {
						$storage[$v] = $storagePrice[$k];
					}
				}

				$color = array();
				$colorPrice = Input::post('colorPrice');
				foreach (Input::post('color') as $k => $v) {
					if (!empty($v)) {
						$color[$v] = $colorPrice[$k];
					}
				}

				$this->productModel->name					= Input::post('name');
				$this->productModel->detail				= Input::post('detail');
				$this->productModel->categoryId   = Input::post('categoryId');
				$this->productModel->companyId    = Input::post('companyId');
				$this->productModel->typeId       = json_encode(Input::post('typeId'));
				$this->productModel->specsId      = Input::post('specsId');
				$this->productModel->uId          = $req->globals['infoUser']['id'];
				$this->productModel->price        = Input::post('price');
				$this->productModel->status       = Input::post('status');
				$this->productModel->storage      = json_encode($storage);
				$this->productModel->color      = json_encode($color);
				$this->productModel->guarantee = Input::post('guarantee');
				$this->productModel->inbox = Input::post('inbox');
				$this->productModel->delivery = Input::post('delivery');
				$this->productModel->counpons = json_encode(Input::post('counpons'));
				$this->productModel->avatar       = json_encode($imagesArray);
				$this->productModel->time_updated = Dtime::format("Y-m-d H:i:s", time());
				$this->productModel->save();
				return $res->redirect('/admin/cart/products/edit-' . $id)->with(array(
					'success' => 'Cập nhật thành công!'
					));
			}
		} else {
			die('Loi Token!');
		}
	}
}