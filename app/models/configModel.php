<?php /**
* 
*/
class configModel extends InitModel
{
	protected $table = 'ngoan_cms_configs';

	public function find_all() {
		return $this->order_by('id', 'ASC')->get()->toArray();
	}
}