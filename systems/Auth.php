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
				Cookie::set('Authentication', $data, 60 * 60 * 24 * 30);
				return true;
			}
		}
		return false;
	}

	public static function isAuth() {
		
		if (isset(Cookie::get('Authentication')['isAuth'])) {
			return true;
		}
		return false;
	}
	public static function logout() {
		if (isset(Cookie::get('Authentication')['isAuth'])) {
			Cookie::delete('Authentication');
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
			return Cookie::get('Authentication');
		}
		return null;
	}
}