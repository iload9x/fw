<?php /**
* 
*/
class configModel extends InitModel
{
	protected $table = 'ngoan_cms_configs';

	public function find_all() {
		return $this->order_by('id', 'ASC')->get()->toArray();
	}

	public function splitByKeywords() {
		$configs = $this->find_all();
		$dataResult = array();
		foreach ($configs as $kConfig => $vConfig) {
			$dataResult[$vConfig['keyword']] = $vConfig['value'];
		}
		return $dataResult;
	}
}