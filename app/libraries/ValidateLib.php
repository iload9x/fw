<?php 
/**
* 
*/
class ValidateLib
{
	public $errors = array();
	private $postName = null;
	private $alert = array(
		'notEmpty' => "%s không được bỏ trống!",
		'notNumeric' => "%s phải là số!",
		'isLength' => "%s có độ dài không hợp lệ!",
		'isEmail' => "%s không đúng định dạng Email!"
	);
	function __construct() {

	}

	public function checkBody($name, $mess) {
		$this->postName = Input::post($name);
		$this->message = $mess;
		return $this;
	}

	public function notEmpty() {
		if (empty($this->postName)) {
			array_push($this->errors, str_replace('%s', $this->message , $this->alert['notEmpty']));
		}
		return $this;
	}

	public function notNumeric() {
		if (!is_numeric(($this->postName))) {
			array_push($this->errors, str_replace('%s', $this->message , $this->alert['notNumeric']));
		}
		return $this;
	}
	public function isLength($arr) {
		if (is_array($arr)) {
			$arr['min'] = (isset($arr['min']) && is_numeric($arr['min'])) ? $arr['min'] : 0;
			$arr['max'] = (isset($arr['max']) && is_numeric($arr['max'])) ? $arr['max'] : 0;
			if (strlen($this->postName) < $arr['min'] || strlen($this->postName) > $arr['max']) {
				array_push($this->errors, str_replace('%s', $this->message , $this->alert['isLength']));
			}
		}
		return $this;
	}

	public function isEmail() {
		if ($this->hasPostName) {
			if (!filter_var($this->postName, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errors, str_replace('%s', $this->message , $this->alert['isEmail']));
			}
		}
		return $this;
	}
}