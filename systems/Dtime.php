<?php /**
* 
*/
class Dtime
{
	public static function format($math = "Y-m-d H:i:s", $time = null) {
		if (!isset($time)) {
			$time = time();
		}
		return date($math,$time);
	}

	public static function makeTime($math, $time) {
		return date($math, $time);
	}

	public static function date($num_day = 0, $num_month = 0, $num_year = 0, $math) {
		if (!is_numeric($num_day)) {
			$num_day = 0;
		}
		if (!is_numeric($num_month)) {
			$num_month = 0;
		}
		if (!is_numeric($num_year)) {
			$num_year = 0;
		}
		if (isset($math)) {
			return self::makeTime($math, mktime(0, 0, 0, date("m")+$num_month, date("d")+$num_day, date("Y")+$num_year));
		}
		return mktime(0, 0, 0, date("m")+$num_month, date("d")+$num_day, date("Y")+$num_year);
	}
}