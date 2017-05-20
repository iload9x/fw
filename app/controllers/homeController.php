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
		$this->configModel = new configModel();
		$this->specsModel = new specsModel();
		$this->blogModel = new blogModel();
		$this->data['dsCompanyDienThoai'] = $this->companyModel->select('name, slug')->whereAnd(array('categoryId' => 5))->limit(0,20)->get()->toArray();
		$this->data['dsCompanyTablet'] = $this->companyModel->select('name, slug')->whereAnd(array('categoryId' => 6))->limit(0,20)->get()->toArray();
		$this->data['dsCompanyPhuKien'] = $this->companyModel->select('name, slug')->whereAnd(array('categoryId' => 7))->limit(0,20)->get()->toArray();
		$this->data['configs'] = $this->configModel->splitByKeywords();
		$this->data['breadCrumbs'] = array(
			array(
				"name" => "Trang chủ",
				"url" => URL::base_url()
			)
		);

	}

	public function homeGet($req, $res) {
		$this->data['seo'] = array(
			'title' => isset($this->data['configs']['title']) ? $this->data['configs']['title'] : 'Home',
			'description' => isset($this->data['configs']['description']) ? $this->data['configs']['description'] : 'Home',
			'keywords' => isset($this->data['configs']['keywords']) ? $this->data['configs']['keywords'] : 'Home',
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/home.css',
			'public/templates/front/themes/css/lightslider.css',
			'public/templates/front/themes/css/owl.carousel.css'
		);
		$this->data['diDongList'] = $this->productModel->didongList();
		$this->data['phukienList'] = $this->productModel->phukienList();
		$blogModel = new blogModel();
		$this->data['dsTinTuc'] = $blogModel->select('id, name, images,content')->whereAnd(array('type' => 'post'))->limit(0, 2)->order_by('id', 'DESC')->get()->toArray();
		$bannerModel = new bannerModel();
		$this->data['banner']['home'] = $bannerModel->find_by_position('home');
		$res->render('front/home', 'front/layout/index.layout',$this->data);
	}

	public function categoryGet($req, $res) {
		if (!$this->categoryModel->find($req->category, 'slug')) {
			return $res->redirect('/');
		}

		$categoryId = $this->categoryModel->id;
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->categoryModel->name,
			'url' => URL::thisUrl(),
		));
		$this->data['seo'] = array(
			'title' => $this->categoryModel->name . ' | TaoDoc',
			'description' => $this->categoryModel->description,
			'keywords' => $this->categoryModel->keywords,
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/cate_pro.css',
		);

		$this->data['categorySlug'] = $req->category;
		$this->data['companyList'] = $this->companyModel->findByCategory($categoryId);
		$this->data['productList'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		foreach ($this->data['productList'] as $k => $v) {
			$this->companyModel->find($v['companyId']);
			$this->data['productList'][$k]['avatar'] = (array)json_decode($this->data['productList'][$k]['avatar']);
			$this->data['productList'][$k]['companySlug'] = $this->companyModel->slug;
			$this->data['productList'][$k]['counpons'] = (array)json_decode($this->data['productList'][$k]['counpons']);
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

		array_push($this->data['breadCrumbs'], array(
			'name' => $this->categoryModel->name,
			'url' => URL::base_url("/{$this->categoryModel->slug}.html"),
		));
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->companyModel->name,
			'url' => URL::thisUrl(),
		));

		$this->data['seo'] = array(
			'title' => "{$this->companyModel->name} | {$this->categoryModel->name}",
			'description' => $this->companyModel->description,
			'keywords' => $this->companyModel->keywords,
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/cate_pro.css',
		);
		$this->data['categorySlug'] = $req->category;
		$this->data['companySlug'] = $req->company;
		$this->data['productList'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId, 'companyId' => $companyId))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		$this->data['companyList'] = $this->companyModel->findByCategory($categoryId);
		foreach ($this->data['productList'] as $k => $v) {
			$this->companyModel->find($v['companyId']);
			$this->data['productList'][$k]['avatar'] = (array)json_decode($this->data['productList'][$k]['avatar']);
			$this->data['productList'][$k]['counpons'] = (array)json_decode($this->data['productList'][$k]['counpons']);
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
		$this->data['random_phukien'] = $this->productModel->get_random_phukien(3);
		$this->data['random_dienthoai'] = $this->productModel->get_random_dienthoai(3);

		$this->data['infoProduct'] = $this->productModel->select()->whereAnd(array('categoryId' => $categoryId, 'companyId' => $companyId, 'id' => $id))->get()->rowArray();
		$this->data['infoProduct']['avatar'] = (array)json_decode($this->data['infoProduct']['avatar']);
		$this->data['infoProduct']['color'] = (array)json_decode($this->data['infoProduct']['color']);
		$this->data['infoProduct']['storage'] = (array)json_decode($this->data['infoProduct']['storage']);
		$this->data['infoProduct']['counpons'] = (array)json_decode($this->data['infoProduct']['counpons']);
		$this->data['infoProduct']['typeId'] = (array)json_decode($this->data['infoProduct']['typeId']);
		$this->data['infoProduct']['videoLinks'] = (array)json_decode($this->data['infoProduct']['videoLinks']);
		if (!empty($this->data['infoProduct']['specsId'])) {
			$this->data['infoProduct']['specs'] = $this->specsModel->getInfo($this->data['infoProduct']['specsId']);
		}
		$this->data['seo'] = array(
			'title' => "{$this->data['infoProduct']['name']} | {$this->companyModel->name} | {$this->categoryModel->name}",
			'description' => $this->data['infoProduct']['description'],
		);
		$this->data['styles'] = array(
			'public/templates/front/themes/css/products.css',
			'public/templates/front/themes/css/lightslider.css',
			'public/templates/front/themes/css/lightgallery.min.css',
		);
		
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->categoryModel->name,
			'url' => URL::base_url("/{$this->categoryModel->slug}.html"),
		));
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->companyModel->name,
			'url' => URL::base_url("/{$this->categoryModel->slug}/{$this->companyModel->slug}.html"),
		));
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->data['infoProduct']['name'],
			'url' => URL::thisUrl(),
		));
		return $res->render('front/home/detail', 'front/layout/home_detail.layout', $this->data);

	}

	public function searchGet($req, $res) {
		echo nCrypt::encode('anhyeuem', 74213798);
		nCrypt::decode('YdWCb5oEbcDeWVe1ZW0=', 74213798);
		echo base64_decode('YdWCb5oEbcDeWVe1ZW0');
	}

	public function tintucDetailGet($req, $res) {
		if (!$this->blogModel->find($req->id)) {
			return $res->redirect('/');
		}

		array_push($this->data['breadCrumbs'], array(
			'name' => $this->categoryModel->name,
			'url' => URL::base_url("/{$this->categoryModel->slug}.html"),
		));
		array_push($this->data['breadCrumbs'], array(
			'name' => $this->companyModel->name,
			'url' => URL::thisUrl(),
		));

		$this->data['seo'] = array(
			'title' => "{$this->blogModel->name} | Tin tức công nghệ",
			'description' => $this->blogModel->des,
			'keywords' => $this->blogModel->keyword,
		);

		$this->data['styles'] = array(
			'public/templates/front/themes/css/new_single.css',
		);

		$this->data['infoBlog']['name'] = $this->blogModel->name;
		$this->data['infoBlog']['content'] = $this->blogModel->content;
		$this->data['infoBlog']['time_created'] = $this->blogModel->time_created;
		$this->data['dsLienQuan'] = $this->blogModel->getDsLienQuan($req->id);
		return $res->render('front/home/tintucDetailGet', 'front/layout/index.layout', $this->data);
	}

	public function tintucGet($req, $res) {
		
	}
}