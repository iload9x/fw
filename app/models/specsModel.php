<?php /**
* 
*/
class specsModel extends InitModel
{
	protected $table = 'ngoan_cart_specs';

	public function getAll() {
		$data = $this->select()->order_by('id', 'DESC')->get()->toArray();
		return $data;
	}

	public function reduce($id) {
		$productModel = new productModel();
		if ($this->find($id)) {
			return $this->remove();
		}

		return false;
	}

	public function getInfo($id) {
		$allField = $this->execute("SHOW COLUMNS FROM ".$this->table);
		$this->find($id);
		$data = array();
		if ($allField) {
			while ($field = $allField->fetch_assoc()) {
				$data[$field['Field']] = $this->{$field['Field']};
			}
		}

		return $data;
	}
}