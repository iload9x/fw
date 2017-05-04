<?php /**
* 
*/
class DatabaseLib
{
	function __construct() {
		$this->config = array(
			'hostname' 	=> 'localhost',
			'username'	=> 'root',
			'password' 	=> '',
			'dbname'	=> 'ngoancms'
		);
	}
}