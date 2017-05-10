<?php /**
* 
*/
class bannerModel extends InitModel
{
	protected $table = 'ngoan_cms_banners';

	public function find_all() {
		return $this->get()->toArray();
	}
	
	public function find_by_position($position)
	{
		return $this->whereAnd(array('position' => $position))->get()->rowArray();
	}
}