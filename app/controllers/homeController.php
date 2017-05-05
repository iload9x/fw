<?php /**
* 
*/
class homeController extends InitController
{
	
	function __construct()
	{
		# code...
	}

	public function homeGet($req, $res) {
		$data['seo'] = array(
			'title' => 'Trang chủ | Điện thoại HOT',
			'description' => 'Mo ta dien thoai| ban dien thoai | Điện thoại HOT',
		);

		$res->render('front/home', 'front/layout/index.layout',$data);
	}
}