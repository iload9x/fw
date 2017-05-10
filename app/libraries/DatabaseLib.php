<?php /**
* 
*/
class DatabaseLib
{
	function __construct() {
		$this->config = array(
			'hostname' 	=> '127.0.0.1:3306',
			'username'	=> 'root',
			'password' 	=> '',
			'dbname'	=> 'ngoancms'
		);
	}
}