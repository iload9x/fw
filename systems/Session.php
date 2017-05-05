<?php 

class Session
{
	
	public static function set($nameSession, $valueSession) {
		$_SESSION[$nameSession] = $valueSession;
	}

	public function getAll() {
		return isset($_SESSION) ? $_SESSION : null;
	}

	public static function destroy() {
		session_destroy();
	}

	public static function get($sessionName = null) {
		if(isset($sessionName))
			return isset($_SESSION[$sessionName]) ? $_SESSION[$sessionName] : false;
		return $_SESSION;
	}


}