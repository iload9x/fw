<?php /**
* 
*/
class categoryModel extends InitModel
{
	
	protected $table = 'ngoan_cart_categories';

	public function getAll() {
		$data = $this->select()->order_by('id', 'DESC')->get()->toArray();
		$userModel = new userModel();
		$productModel = new productModel();
		foreach ($data as $k => $v) {
			$userModel->find($v['uid']);
			$data[$k]['username'] = $userModel->username;
			$data[$k]['qtyProducts'] = $productModel->select('id')->whereAnd(array('categoryId' => $v['id']))->get()->countAll();
		}
		return $data;
	}


	public function find_all($field = '*') {
		return $this->select($field)->order_by('id', 'DESC')->get()->toArray();
	}

}