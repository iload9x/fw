<?php 
/**
* 
*/
class blogModel extends InitModel
{
	protected $table = 'ngoan_cms_blogs';

	public function chartData() {
		$data['postDataThisMonth'] = '[';
		$data['viewDataThisMonth'] = '[';
		$data['postDataLastMonth'] = '[';
		$data['viewDataLastMonth'] = '[';
		$data['labelsDataThisMonth'] = '[';
		for ($i=6; $i >= 0; $i--) { 
			$this->newQuery = "SELECT count(*) as 'count', sum(view) as 'sum' FROM ngoan_cms_blogs WHERE type = 'post' AND time_created LIKE '".Dtime::date(-$i, 0, 0, 'Y-m-d')."%'";
			$d = $this->rowArray();
			$data['postDataThisMonth'] .= "{$d['count']},";
			$data['viewDataThisMonth'] .= "{$d['sum']},";
			$this->newQuery = "SELECT count(*) as 'count', sum(view) as 'sum' FROM ngoan_cms_blogs WHERE type = 'post' AND time_created LIKE '".Dtime::date(-$i, -1, 0, 'Y-m-d')."%'";
			$d = $this->rowArray();
			$data['postDataLastMonth'] .= "{$d['count']},";
			$data['viewDataLastMonth'] .= "{$d['sum']},";
			$time = Dtime::date(-$i, 0, 0, 'd-m');
			$data['labelsDataThisMonth'] .= "'{$time}',";
		}
		$data['postDataThisMonth'] = substr($data['postDataThisMonth'], 0, strlen($data['postDataThisMonth']) - 1) . ']';
		$data['viewDataThisMonth'] = substr($data['viewDataThisMonth'], 0, strlen($data['viewDataThisMonth']) - 1) . ']';
		$data['postDataLastMonth'] = substr($data['postDataLastMonth'], 0, strlen($data['postDataLastMonth']) - 1) . ']';
		$data['viewDataLastMonth'] = substr($data['viewDataLastMonth'], 0, strlen($data['viewDataLastMonth']) - 1) . ']';
		$data['labelsDataThisMonth'] = substr($data['labelsDataThisMonth'], 0, strlen($data['labelsDataThisMonth']) - 1) . ']';
		return $data;
	}

	public function getDsLienQuan($id) {
		$this->newQuery = "SELECT * FROM ngoan_cms_blogs WHERE type = 'post' AND id NOT IN ($id) ORDER BY id LIMIT 6";
		$data = $this->toArray();
		foreach ($data as $kData => $vData) {
			$data[$kData]['images'] = json_decode($data[$kData]['images']);
		}

		return $data;
	}
}
