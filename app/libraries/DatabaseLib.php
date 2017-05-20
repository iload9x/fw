<?php /**
* 
*/
class DatabaseLib
{
	function __construct() {
		$this->config = array(
			'hostname' 	=> 'us-cdbr-iron-east-03.cleardb.net',
			'username'	=> 'bba4bd358d9dae',
			'password' 	=> '88ca662b',
			'dbname'	=> 'heroku_cc3ffde785b8c00'
		);

		$this->config = array(
			'hostname' 	=> '127.0.0.1:3306',
			'username'	=> 'root',
			'password' 	=> '',
			'dbname'	=> 'ngoancms'
		);
	}
}