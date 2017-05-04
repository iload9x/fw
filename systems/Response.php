<?php 
/**
* 
*/
class Response
{
	function __construct() {
	}

	public function json($jsStr) {
		die(json_encode($jsStr));
	}

	public function redirect($url) {
		$this->redirectUrl = $url;
		Session::set('redirectUrl', $url);
		return $this;
	}

	public function with($data) {
		$redirectUrl =  URL::clearHoiCham(Session::get('redirectUrl'));
		Session::set('Response', array($redirectUrl => $data));
		return $this;
	}

	public function render($template, $layout, $data = null) {
		$templatePath = APP_PATH . 'views/' . $template . '.php';
		$layoutPath = APP_PATH . 'views/' . $layout . '.php';
		
		if (!file_exists($templatePath)) {
			die("Không tồn tại :" . $templatePath);
		} else {
			if(!file_exists($layoutPath)) {
				die("Không tồn tại :" . $layoutPath);
			} else {
				$templateContent = file_get_contents($templatePath);
				$layoutContent = file_get_contents($layoutPath);
				$layoutContent = str_replace('{{{body}}}', $templateContent , $layoutContent);
				//=============PARTIALS=============
				$prefix = "{{{include";
				$suffix = "}}}";
				$postionPrefix = null;
				$postionSuffix = null;
				while (strpos($layoutContent, $prefix) !== false) {
					$postionPrefix = strpos($layoutContent, $prefix);
					$postionSuffix = strpos($layoutContent, $suffix);
					$str = substr($layoutContent,  $postionPrefix + strlen($prefix) ,  $postionSuffix - ($postionPrefix + strlen($prefix)));
					$line = $prefix . $str . $suffix;

					$partialPath = APP_PATH . 'views/' . trim($str) . '.php';
					$partialContent = @file_get_contents($partialPath);
					$layoutContent = str_replace($line, $partialContent , $layoutContent);
				}
				//=============/PARTIALS=============
				$math = array(
					'{{if',
					'{{endif',
					'{{foreach',
					'{{endforeach',
					'{{#',
					'{{',
					'}}'
				);
				$replace = array(
					'<?php if',
					'<?php endif;',
					'<?php foreach',
					'<?php endforeach;',
					'<?php echo',
					'<?php  ',
					'?>'
				);
				$layoutContent = str_replace($math, $replace , $layoutContent);
				$enginePath = SYSTEM_PATH . '/Engine.php';
				file_put_contents($enginePath, $layoutContent);
				if (is_array($data)) {
					extract($data);
				}
				require_once $enginePath;
				//file_put_contents($enginePath, "");
			}
		}

	}


}
 ?>