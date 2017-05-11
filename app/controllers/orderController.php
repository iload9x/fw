<?php /**
* 
*/
class orderController extends InitController
{
	
	function __construct()
	{
		$this->validate = new ValidateLib();
		$this->orderModel = new orderModel();
	}

	public function manager($req, $res) {
		$this->data['seo'] = array(
			'title' =>  null,
		);
	}

	public function sendPost($req, $res) {
		$this->validate->checkBody('productId', 'ID sản phẩm')->notNumeric()->notEmpty();
		$this->validate->checkBody('categoryId', 'ID chuyên mục')->notNumeric()->notEmpty();
		$this->validate->checkBody('price', 'Giá')->notNumeric()->notEmpty();
		$this->validate->checkBody('link', 'LINK')->notEmpty();
		$this->validate->checkBody('fullname', 'Họ tên')->notEmpty();
		$this->validate->checkBody('email', 'Email')->notEmpty();
		$this->validate->checkBody('phone', 'Điện thoại')->notEmpty();
		$this->validate->checkBody('address', 'Địa chỉ')->notEmpty();
		if ($this->validate->errors) {
			die(json_encode(array(
				'status' => 0,
				'message' => $this->validate->errors
			)));
		}
		$this->orderModel->productId = Input::post('productId');
		$this->orderModel->categoryId = Input::post('categoryId');
		$this->orderModel->price = Input::post('price');
		$this->orderModel->link = Input::post('link');
		$this->orderModel->fullname = Input::post('fullname');
		$this->orderModel->email = Input::post('email');
		$this->orderModel->phone = Input::post('phone');
		$this->orderModel->address = Input::post('address');
		$this->orderModel->genner = Input::post('genner');
		$this->orderModel->note = Input::post('note');
		$this->orderModel->save();
		die(json_encode(array(
			'status' => 1
		)));
	}
}