<?php /**
* 
*/
class typeModel extends InitModel
{
	protected $table = 'ngoan_cart_types';

	public function getAll() {
		$data = $this->select()->order_by('id', 'DESC')->get()->toArray();
		$userModel = new userModel();
		$productModel = new productModel();
		foreach ($data as $k => $v) {
			$userModel->find($v['uid']);
			$data[$k]['username'] = $userModel->username;
			$data[$k]['qtyProducts'] = $productModel->select('id')->whereAnd(array('type' => $v['id']))->get()->countAll();
		}
		return $data;
	}

	public function reduce($id) {
		$productModel = new productModel();
		$qty = $productModel->select('id')->whereAnd(array('type' => $v['id']))->get()->countAll();
		if ($this->find($id) || $qty <= 0) {
			return $this->remove();
		}

		return false;
	}
}