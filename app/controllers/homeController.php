<?php /**
* 
*/
class homeController extends InitController
{
	
	function __construct()
	{
		$this->productModel = new productModel();
		$this->categoryModel =  new categoryModel();
		$this->companyModel =  new companyModel();
		$this->typeModel = new typeModel();
		$this->data['dsCompany'] = $this->companyModel->select('name, slug')->limit(0,20)->get()->toArray();
	}

	public function homeGet($req, $res) {
		$this->data['seo'] = array(
			'title' => 'Trang chủ | Điện thoại HOT',
			'description' => 'Mo ta dien thoai| ban dien thoai | Điện thoại HOT',
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/home.css',
			'public/templates/front/themes/css/lightslider.css',
			'public/templates/front/themes/css/owl.carousel.css'
		);
		$this->data['diDongList'] = $this->productModel->select()->whereAnd(array('categoryId' => 5))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		foreach ($this->data['diDongList'] as $k => $v) {
			$this->companyModel->find($v['companyId']);
			$this->categoryModel->find($v['categoryId']);
			$this->data['diDongList'][$k]['avatar'] = (array)json_decode($this->data['diDongList'][$k]['avatar']);
			$this->data['diDongList'][$k]['companySlug'] = $this->companyModel->slug;
			$this->data['diDongList'][$k]['categorySlug'] = $this->categoryModel->slug;
			$typeIds = array();
			foreach ((array)json_decode($this->data['diDongList'][$k]['typeId']) as $v) {
				$this->typeModel->find($v);
				array_push($typeIds, array('name' => $this->typeModel->name, 'color' => $this->typeModel->color));
			}
			$this->data['diDongList'][$k]['type'] = $typeIds;
		}
		$res->render('front/home', 'front/layout/index.layout',$this->data);
	}

	public function categoryGet($req, $res) {
		if (!$this->categoryModel->find($req->category, 'slug')) {
			return $res->redirect('/');
		}

		$categoryId = $this->categoryModel->id;
		$this->data['seo'] = array(
			'title' => 'Trang chủ | Điện thoại HOT',
			'description' => 'Mo ta dien thoai| ban dien thoai | Điện thoại HOT',
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/cate_pro.css',
		);

		$this->data['categorySlug'] = $req->category;
		$this->data['productList'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		foreach ($this->data['productList'] as $k => $v) {
			$this->companyModel->find($v['companyId']);
			$this->data['productList'][$k]['avatar'] = (array)json_decode($this->data['productList'][$k]['avatar']);
			$this->data['productList'][$k]['companySlug'] = $this->companyModel->slug;
			$typeIds = array();
			foreach ((array)json_decode($this->data['productList'][$k]['typeId']) as $v) {
				$this->typeModel->find($v);
				array_push($typeIds, array('name' => $this->typeModel->name, 'color' => $this->typeModel->color));
			}
			$this->data['productList'][$k]['type'] = $typeIds;
		}
		return $res->render('front/home/category', 'front/layout/index.layout', $this->data);
	}

	public function companyGet($req, $res) {
		if (!$this->categoryModel->find($req->category, 'slug') || !$this->companyModel->find($req->company, 'slug')) {
			return $res->redirect('/');
		}

		$categoryId = $this->categoryModel->id;
		$companyId = $this->companyModel->id;
		$this->data['seo'] = array(
			'title' => "{$this->companyModel->name} | {$this->categoryModel->name}",
			'description' => '{$this->companyModel->name} | {$this->categoryModel->name}',
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/cate_pro.css',
		);
		$this->data['categorySlug'] = $req->category;
		$this->data['companySlug'] = $req->company;
		$this->data['productList'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId, 'companyId' => $companyId))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		foreach ($this->data['productList'] as $k => $v) {
			$this->companyModel->find($v['companyId']);
			$this->data['productList'][$k]['avatar'] = (array)json_decode($this->data['productList'][$k]['avatar']);
			$typeIds = array();
			foreach ((array)json_decode($this->data['productList'][$k]['typeId']) as $v) {
				$this->typeModel->find($v);
				array_push($typeIds, array('name' => $this->typeModel->name, 'color' => $this->typeModel->color));
			}
			$this->data['productList'][$k]['type'] = $typeIds;
		}
		return $res->render('front/home/company', 'front/layout/index.layout', $this->data);

	}

	public function detailGet($req, $res) {
		if (!$this->categoryModel->find($req->category, 'slug') || !$this->companyModel->find($req->company, 'slug') || !$this->productModel->find($req->id)) {
			return $res->redirect('/');
		}
		$companyId = $this->companyModel->id;
		$categoryId = $this->categoryModel->id;
		$id = $req->id;
		if ($this->productModel->select()->whereAnd(array('categoryId' => $categoryId, 'companyId' => $companyId, 'id' => $id))->get()->countAll() <= 0) {
			return $res->redirect('/');
		}
		$this->data['seo'] = array(
			'title' => "{$this->companyModel->name} | {$this->categoryModel->name}",
			'description' => '{$this->companyModel->name} | {$this->categoryModel->name}',
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/products.css',
			'public/templates/front/themes/css/lightslider.css',
			'public/templates/front/themes/css/lightgallery.min.css',
		);
		$this->data['infoProduct'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId, 'companyId' => $companyId, 'id' => $id))->get()->rowArray();
		$this->data['infoProduct']['avatar'] = (array)json_decode($this->data['infoProduct']['avatar']);
		$this->data['infoProduct']['color'] = (array)json_decode($this->data['infoProduct']['color']);
		$this->data['infoProduct']['storage'] = (array)json_decode($this->data['infoProduct']['storage']);
		$this->data['infoProduct']['counpons'] = (array)json_decode($this->data['infoProduct']['counpons']);
		$this->data['infoProduct']['typeId'] = (array)json_decode($this->data['infoProduct']['typeId']);
		return $res->render('front/home/detail', 'front/layout/home_detail.layout', $this->data);

	}
}