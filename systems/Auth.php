<?php
class Auth
{
	public static $isAuth;
	public static $fieldValues = array();
	public static $fields = array();
	public static $table = null;
	public static $primaryKey;
	public static function attempt($data, $remember = 0) {
		$table =  self::$table;
		if (is_array($data)) {
			$database = new Database();
			$session = new Session();
			$result = $database->select()->from($table)->whereAnd($data)->get()->exec();
			if ($result) {
				$arrayData = $data;
				$result = $result->fetch_assoc();
				$data[self::$primaryKey] = $result[self::$primaryKey];
				foreach ($arrayData as $key => $value) {
					$data[$key] = $result[$key];
				}
				$data['isAuth'] = true;
				if ($remember == 1) {
					$data['ss_code'] = md5(time());
					$database->update(array('ss_code' => $data['ss_code']))->whereAnd($data)->get()->exec();
				}
				
				$session->set('Authentication', $data);
				return true;
			}
		}
		return false;
	}
	public static function isAuth() {
		if (isset(Session::get('Authentication')['isAuth'])) {
			return true;
		}
		return false;
	}
	public static function logout() {
		if (isset(Session::get('Authentication')['isAuth'])) {
			Session::destroy();
		}
		return true;
	}
	public static function useTable($table) {
		self::$table = $table;
		$database = new Database();
		$showQuery = "SHOW COLUMNS FROM {$table}";
		$allField = $database->execute($showQuery);
		if ($allField) {
			while ($field = $allField->fetch_assoc()) {
				if ($field['Key'] == 'PRI') {
					self::$primaryKey = $field['Field'];
					break;
				}
			}
		}
	}
	public static function store() {
		if (self::isAuth()) {
			return Session::get('Authentication');
		}
		return null;
	}
}