<?php /**
* 
*/
class userModel extends InitModel
{
	protected $table = 'ngoan_cms_users';

	public function getLevelName($levelId) {

		if (!isset($levelId)) {
			return 'N/A';
		}

		switch ($levelId) {
			case 1:
				return 'Quản trị viên';
				break;
			case 0:
				return 'Thành viên';
				break;
			
			default:
				return 'N/A';
				break;
		}
	}

	public function levelNameList() {
		return array(
			'0' => 'Thành viên',
			'1' => 'Quản trị viên'
		);
	}
}