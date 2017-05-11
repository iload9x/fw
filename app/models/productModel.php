<?php /**
* 
*/
class productModel extends InitModel
{
	protected $table = 'ngoan_cart_products';


	public function processData($data) {
		if (isset($data)) {
			$this->typeModel = new typeModel();
			$this->categoryModel = new categoryModel();
			$this->userModel = new userModel();
			$this->companyModel = new companyModel();
			foreach ($data as $k => $v) {
				$this->categoryModel->find($v['categoryId']);
				
				$this->userModel->find($v['uId']);
				$this->companyModel->find($v['companyId']);
				$data[$k]['categoryName'] = $this->categoryModel->name;
				//print_r($data[$k]['typeId']);
				$data[$k]['typeName'] = array();
				foreach ((array)json_decode($data[$k]['typeId']) as $value) {
					$this->typeModel->find($value);
					array_push($data[$k]['typeName'], $this->typeModel->name);
				}
				$data[$k]['typeName'] = implode(', ', $data[$k]['typeName']);
				$data[$k]['companyName'] = $this->companyModel->name;
				$data[$k]['uName'] = $this->userModel->username;
				if ($v['status'] == 1) {
					$data[$k]['status'] = 'Còn hàng';
				} else {
					$data[$k]['status'] = 'Hết hàng';
				}
				$data[$k]['avatar'] = json_decode($data[$k]['avatar']);


			}
			return $data;
		}

		return array();
	}

	public function getProducts($curPage, $qty) {
		$data = $this->select()->limit(($curPage - 1) * $qty, $qty)->order_by('id', 'DESC')->get()->toArray();
		return $this->processData($data);
	}
	public function getAll() {
		$data = $this->select()->order_by('id', 'DESC')->get()->toArray();
		return $this->processData($data);
	}

	public function getInfo($id) {
		return $this->select()->whereAnd(array('id' => $id))->get()->rowArray();
	}

	public function checkExist($id) {
		if ($this->select('id')->whereAnd(array('id' => $id))->get()->countAll() > 0) {
			return true;
		}
		return false;
	}

	public function search($txtSearch, $field, $sort, $curPage, $qty) {
		$field = isset($field) ? $field : 'id';
		$sort = isset($sort) ? $sort : 'DESC';
		if (isset($txtSearch)) {
			$data = $this->select()->like($field, "%{$txtSearch}%")->limit(($curPage - 1) * $qty, $qty)->order_by($field, $sort)->get()->toArray();
		} else {
			$data = $this->select()->limit(($curPage - 1) * $qty, $qty)->order_by($field, $sort)->get()->toArray();
		}
		return $this->processData($data);
	}

	public function search_count($txtSearch, $field, $sort) {
		$field = isset($field) ? $field : 'id';
		$sort = isset($sort) ? $sort : 'DESC';
		if (isset($txtSearch)) {
			$count = $this->select()->like($field, "%{$txtSearch}%")->order_by($field, $sort)->get()->countAll();
		} else {
			$count = $this->select()->order_by($field, $sort)->get()->countAll();
		}
		return $count;
	}

	public function count_all() {
		return $this->select('id')->get()->countAll();
	}

	public function didongList() {
		$data = $this->whereAnd(array('categoryId' => 5))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		$companyModel = new companyModel();
		$categoryModel = new categoryModel();
		$typeModel = new typeModel();
		foreach ($data as $k => $v) {
			$companyModel->find($v['companyId']);
			$categoryModel->find($v['categoryId']);
			$data[$k]['avatar'] = (array)json_decode($data[$k]['avatar']);
			$data[$k]['counpons'] = (array)json_decode($data[$k]['counpons']);
			$data[$k]['companySlug'] = $companyModel->slug;
			$data[$k]['categorySlug'] = $categoryModel->slug;
			$typeIds = array();
			foreach ((array)json_decode($data[$k]['typeId']) as $v) {
				$typeModel->find($v);
				array_push($typeIds, array('name' => $typeModel->name, 'color' => $typeModel->color));
			}
			$data[$k]['type'] = $typeIds;
		}

		return $data;
	}

	public function phukienList() {
		$data = $this->select('id, name, avatar, price, companyId,categoryId')->whereAnd(array('categoryId' => 7))->limit(0, 15)->order_by('id', 'DESC')->get()->toArray();
		$companyModel = new companyModel();
		$categoryModel = new categoryModel();
		foreach ($data as $k => $v) {
			$companyModel->find($v['companyId']);
			$categoryModel->find($v['categoryId']);
			$data[$k]['avatar'] = (array)json_decode($data[$k]['avatar']);
			$data[$k]['companySlug'] = $companyModel->slug;
			$data[$k]['categorySlug'] = $categoryModel->slug;
		}

		return $data;
	}

	public function get_random_phukien($num) {
		$data = $this->whereAnd(array('categoryId' => 7))->order_by('RAND()','DESC')->limit(0, $num)->get()->toArray();
		$companyModel = new companyModel();
		$categoryModel = new categoryModel();
		foreach ($data as $k => $v) {
			$companyModel->find($v['companyId']);
			$categoryModel->find($v['categoryId']);
			$data[$k]['avatar'] = (array)json_decode($data[$k]['avatar']);
			$data[$k]['companySlug'] = $companyModel->slug;
			$data[$k]['categorySlug'] = $categoryModel->slug;
		}

		return $data;
	}

	public function get_random_dienthoai($num) {
		$data = $this->whereAnd(array('categoryId' => 5))->order_by('RAND()','DESC')->limit(0, $num)->get()->toArray();
		$companyModel = new companyModel();
		$categoryModel = new categoryModel();
		foreach ($data as $k => $v) {
			$companyModel->find($v['companyId']);
			$categoryModel->find($v['categoryId']);
			$data[$k]['avatar'] = (array)json_decode($data[$k]['avatar']);
			$data[$k]['companySlug'] = $companyModel->slug;
			$data[$k]['categorySlug'] = $categoryModel->slug;
		}

		return $data;
	}

}