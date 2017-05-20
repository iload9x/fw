<?php
//=================INIT=====================
Router::globalVariables(function() {
	$infoUser = null;
	if (Auth::isAuth()) {
		$userModel = new userModel();
		$store = Auth::store();
			$userModel->find($store['id']);
		$infoUser = array(
			'id' => $userModel->id,
			'username' => $userModel->username,
			'nickname' => $userModel->nickname,
			'avatar' => $userModel->avatar
		);
	}
	return array(
		'infoUser' => $infoUser,
	);
});

Router::globalLibraries(function() {

});

Router::getUse(array('route' => array('/admin/login', 'admin/register')), function($req) {
	if (Auth::isAuth()) {
		Redirect::to('/admin');
	}
});

Router::getUse(array('route' => array('/admin', '/admin/profile', '/admin/config','/admin/banner')), function($req) {
	if (!Auth::isAuth()) {
		Redirect::to('/admin/login?backtourl=' . URL::thisRoute());
	}
});

Router::getUse(array('group' => array('/admin/blog','/admin/cart','/admin/member',)), function($req) {
	if (!Auth::isAuth()) {
		Redirect::to('/admin/login?backtourl=' . URL::thisRoute());
	}
});

Router::get('/', 'home@homeGet');

Router::get('/404', function($req, $res) {
	$data['seo']['title'] = "Error: 404";
	return $res->render('404','admin-flat/layout/register.layout', $data);
});

Router::post('/404', function() {
	$data['seo']['title'] = "Error: 404";
	return $res->render('404','admin-flat/layout/register.layout', $data);
});

Router::get("/install", "install@index");

//=================FRONT-END=====================
Router::get('/tin-tuc/{name}-art{id}.html', 'home@tintucDetailGet');

Router::get('/{category}/{company}/{name}-prd{id}.html', 'home@detailGet');
Router::get('/{category}/{company}.html', 'home@companyGet');
Router::get('/{category}.html', 'home@categoryGet');
Router::get('/tim-kiem.html', 'home@searchGet');
Router::get('/tin-tuc.html', 'home@tintucGet');

Router::get("/admin", "admin@index");
Router::group('/admin', function() {
	Router::get("login", "admin@login");
	Router::post("login", "admin@loginPost");
	Router::get("register", "admin@register");
	Router::post("register", "admin@registerPost");
	Router::get("logout", function() {
		Auth::logout();
		Redirect::to('/admin/login');
	});
	Router::get("config", "admin@config");
	Router::post("config", "admin@configPost");
	Router::get("banner", "admin@banner");
	Router::post("banner", "admin@bannerPost");
	Router::get("profile", "admin@profile");
	Router::get("blog", "blog@manager");
	Router::get("blog/create", "blog@create");
	Router::post("blog/create", "blog@createPost");
	Router::get("blog/edit", "blog@edit");
	Router::post("blog/edit", "blog@editPost");
	Router::get("blog/delete", "blog@delete");
	Router::get("member", "member@manager");
	Router::get("member/edit", "member@edit");
	Router::post("member/edit", "member@editPost");
	Router::get("cart/categories", "category@manager");
	Router::get("cart/categories/add", "category@addGet");
	Router::post("cart/categories/add", "category@addPost");
	Router::get("cart/categories/edit", "category@editGet");
	Router::post("cart/categories/edit", "category@editPost");
	Router::get("cart/categories/delete", "company@deleteGet");
	Router::get("cart/companies", "company@manager");
	Router::get("cart/companies/add", "company@addGet");
	Router::post("cart/companies/add", "company@addPost");
	Router::get("cart/companies/edit", "company@editGet");
	Router::post("cart/companies/edit", "company@editPost");
	Router::get("cart/companies/delete", "company@deleteGet");
	Router::get("cart/types", "type@manager");
	Router::get("cart/types/add", "type@addGet");
	Router::post("cart/types/add", "type@addPost");
	Router::get("cart/types/edit", "type@editGet");
	Router::post("cart/types/edit", "type@editPost");
	Router::get("cart/types/delete", "type@deleteGet");
	Router::get("cart/specs", "specs@manager");
	Router::get("cart/specs/add", "specs@addGet");
	Router::post("cart/specs/add", "specs@addPost");
	Router::get("cart/specs/edit", "specs@editGet");
	Router::post("cart/specs/edit", "specs@editPost");
	Router::get("cart/specs/delete", "specs@deleteGet");
	Router::get("cart/products", "product@manager");
	Router::get("cart/products/add", "product@addGet");
	Router::post("cart/products/add", "product@addPost");
	Router::get("cart/products/edit-{id}", "product@editGet");
	Router::post("cart/products/edit", "product@editPost");
	Router::get("cart/products/delete-{id}", "product@deleteGet");
	Router::get("cart/orders", "order@manager");
});

//==========AJAX============
Router::post("/orders/send", "order@sendPost");

Router::post("/ajax/convertUrl", function($req, $res) {
	if (Input::post('input_url')) {
		echo StringLib::convertUrl(Input::post('input_url'));
	}
});
Router::post("/ajax/uploadImages", function($req, $res) {
	if ($req->csrf) {
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
		if($files['hasWarnings']) {
	$warnings = $files['warnings'];
	die(json_encode(array('errors' => 'Có lỗi xảy ra trong quá trình upload!')));
	}
	$fileList = $FileUploader->getFileList();
	$imagesArray['imageUrls'] = array();
	foreach ($fileList as $v) {
		array_push($imagesArray['imageUrls'], $v['name']);
	}
	die(json_encode($imagesArray));
	} else {
		die(json_encode(array('errors' => 'Lỗi token!')));
	}
});
