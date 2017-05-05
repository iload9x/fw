<?php /**
* 
*/
class homeController extends InitController
{
	
	function __construct()
	{
		$this->productModel = new productModel();
	}

	public function homeGet($req, $res) {
		$data['seo'] = array(
			'title' => 'Trang chủ | Điện thoại HOT',
			'description' => 'Mo ta dien thoai| ban dien thoai | Điện thoại HOT',
		);
		$data['productList'] = $this->productModel->select()->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		foreach ($data['productList'] as $k => $v) {
			$data['productList'][$k]['avatar'] = (array)json_decode($data['productList'][$k]['avatar']);
		}
		$res->render('front/home', 'front/layout/index.layout',$data);
	}
}