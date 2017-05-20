<?php /**
* 
*/
class nCrypt 
{
	
	function __construct()
	{
	}
	/*
	@params
		int $password
		string $string
	*/
	public static function encode($string, $password = null) {
		if (!isset($password) || !is_numeric($password)) {
			return base64_encode($string);
		}
		$words = [
			'a','b','c','d','e',
			'A','B','C','D','E',
			'f','g','h','i','j',
			'F','G','H','I','J',
			'k','l','m','n','o',
			'K','L','M','N','O',
			'p','q','r','s','t',
			'P','Q','R','S','T',
			'u','v','w','x','y','z',
			'U','V','W','X','Y','Z',
			'~','!','@','%','$','^',
			'a','b','c','d','e',
			'A','B','C','D','E',
			'f','g','h','i','j',
			'F','G','H','I','J',
			'k','l','m','n','o',
			'K','L','M','N','O',
			'p','q','r','s','t',
			'P','Q','R','S','T',
			'u','v','w','x','y','z',
			'U','V','W','X','Y','Z',
			'~','!','@','%','$','^',
		];
		$string = str_split(base64_encode($string));
		$password = str_split($password);
		foreach ($password as $kPassword => $vPassword) {
			array_splice($string, $vPassword, 0, $words[$password[$kPassword] * isset($password[$kPassword + 1]) ? $password[$kPassword + 1] : 1]);
		}
		return implode('', $string);
	}

	public static function decode($string, $password = null) {
		if (!isset($password) || !is_numeric($password)) {
			return base64_decode($string);
		}

		$words = [
			'a','b','c','d','e',
			'A','B','C','D','E',
			'f','g','h','i','j',
			'F','G','H','I','J',
			'k','l','m','n','o',
			'K','L','M','N','O',
			'p','q','r','s','t',
			'P','Q','R','S','T',
			'u','v','w','x','y','z',
			'U','V','W','X','Y','Z',
			'~','!','@','%','$','^',
			'a','b','c','d','e',
			'A','B','C','D','E',
			'f','g','h','i','j',
			'F','G','H','I','J',
			'k','l','m','n','o',
			'K','L','M','N','O',
			'p','q','r','s','t',
			'P','Q','R','S','T',
			'u','v','w','x','y','z',
			'U','V','W','X','Y','Z',
			'~','!','@','%','$','^',
		];

		$password = str_split($password);
		$string = str_split($string);
		for ($i=count($password) - 1; $i >= 0 ; $i--) { 
			array_splice($string, $password[$i], 1);
		}
		return base64_decode(implode('', $string));
	}


}