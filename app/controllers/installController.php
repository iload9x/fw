<?php /**
* 
*/
class installController extends InitController
{
	
	function __construct()
	{
		# code...
	}

	public function index($req, $res) {
		$Database = new Database();
		$ngoan_cms_users = file_get_contents(BASE_PATH . '/db/ngoancms.sql');
		$Database->newQuery = $ngoan_cms_users;
		var_dump($Database->execute_multi($ngoan_cms_users)) ;
	}
}