<?php 
/**
* 
*/
class Router
{
	public static $Routes = array();
	public static $RoutesHasParam = array();
	public  $Request;
	public  $RoutesHasMiddleware = array();
	public static $currentRoute;
	public static $RoutesHasSet = array(
		'GET' => array(),
		'POST'=> array()
	);
	public static $prefix;

	public static $globalVariables = array();
	public static $globalLibraries = array();

	function __construct() {
		$this->Request = new Request();
		$this->input = new Input();
		$this->Csrf = new Csrf();

	}

	public static function getUse($data, $action) {
		if (is_array($data)) {
			foreach ($data as $k => $v) {
				if (!isset(self::$RoutesHasSet['GET'][$k])) {
					self::$RoutesHasSet['GET'][$k] = array();
				}
				if (is_array($v)) {
					foreach ($v as $value) {
						if (!isset(self::$RoutesHasSet['GET'][$k][$value]) || !is_array(self::$RoutesHasSet['GET'][$k][$value])) {
							self::$RoutesHasSet['GET'][$k][$value] = array();
						}
						array_push(self::$RoutesHasSet['GET'][$k][$value], $action);
					}
				} else {
					if (!is_array(self::$RoutesHasSet['GET'][$k][$v])) {
						self::$RoutesHasSet['GET'][$k][$v] = array();
					}
					array_push(self::$RoutesHasSet['GET'][$k][$v], $action);
				}
				
			}
		}
	}

	public static function postUse($data, $action) {
		if (is_array($data)) {
			foreach ($data as $k => $v) {
				if (is_array($v)) {
					foreach ($v as $value) {
						if (!is_array(self::$RoutesHasSet['POST'][$k][$value])) {
							self::$RoutesHasSet['POST'][$k][$value] = array();
						}
						array_push(self::$RoutesHasSet['POST'][$k][$value], $action);
					}
				} else {
					if (!is_array(self::$RoutesHasSet['POST'][$k][$v])) {
						self::$RoutesHasSet['POST'][$k][$v] = array();
					}
					array_push(self::$RoutesHasSet['POST'][$k][$v], $action);
				}
				
			}
		}
		return $this;
	}

	public static function group($route, $action) {
		self::$prefix = $route;
		if (is_callable($action)) {
			$action();
		}
		self::$prefix = null;
	}

	public static function get($route, $action) {
		if (isset(self::$prefix)) {
			$route = self::$prefix. "/{$route}";
		}

		if (count(explode('{', $route)) > 1) {
			array_push(self::$RoutesHasParam, explode('{', $route));
		}
		
		self::$Routes['GET'][$route] = $action;
		self::$currentRoute = $route;
	}

	public static function post($route, $action) {
		if (isset(self::$prefix)) {
			$route = self::$prefix. "/{$route}";
		}
		self::$Routes['POST'][$route] = $action;
	}

	public function processRoute($route) {

		if (isset(self::$globalVariables)) {
			$this->setReq(array('globals' => self::$globalVariables));
		}

		if (isset(self::$globalLibraries)) {
			$this->setReq(self::$globalLibraries);
		}

		if(Input::post()) {
			$checkCsrf = $this->Csrf->check();
			if ($checkCsrf) {
				$this->setReq(array('csrf' => true));
			}else {
				$this->setReq(array('csrf' => false));
			}
			$this->route(self::$Routes['POST'], self::$RoutesHasSet['POST'], $route);
		} else {
			//$this->Csrf->create();
			$this->setReq(array('csrfToken' => Session::get('cscfSession')));
			if (isset(Session::get('Response')[$route])) {
				$this->setReq(Session::get('Response')[$route]);
				unset($_SESSION['Response'][$route]);
			}
			$this->route(self::$Routes['GET'], self::$RoutesHasSet['GET'], $route);
		}
	}

	public function setReq($reqArr) {
		$this->Request->createReq($reqArr);
	}

	public function processRouteHasParam($route2) {
		$containRouteTrue = array();
		foreach (self::$RoutesHasParam as $v) { 

			//VD: $v = ['products/', 'name}'] #Route đã tạo : products/{name} đã được explore 
			$route = $route2; // VD URI trên URL : products/iload9x
			$error = false;// khởi tạo không có lỗi
			if (strpos($route, $v[0]) === 0) { // kiểm tra $v[0] = 'products/' có nằm ở vị trí đầu tiền của $route = products/iload9x hay không
				$this->hasRoute = true; // check
				$id = 1; 
				$route = substr($route, strlen($v[0])); // xóa bỏ phần đầu trùng khớp của $route [products/]
				//$route = str_replace($v[0], '', $route);
				$params = array();
				while (isset($v[$id])) { // nếu tồn tại tiếp theo $v[1] = 'name}'
					$c = explode('}', $v[$id]); // tách chuôi explore } từ $v[1]
					if ($c[1] != null) { // sau '}' còn ký tự
						if(!strpos($route, $c[1])) {// kiểm tra xem ký từ sau '}' có tồn tại trong $route hay không
							$error = true; // nếu không tồn tại
							break;
						} else {
							// $vlue : lấy giá trị của của dấu {}
							$vlue = substr($route, 0, strpos($route, $c[1]));
							$route = str_replace($vlue . $c[1], '', $route);// xóa bỏ phần đầu đã xử lý xong
							$params[$c[0]] = $vlue; // $c[0] = name
						}
						
					} else { // còn nếu sau '}' không còn ký tự
						$vlue = $route; // giá trị của params bằng $route luôn
						$params[$c[0]] = $vlue; // $c[0] = name
						break;
					}
					
					$id++; // lặp cho đến khi hết params thì thôi
				}
				if (!$error) { // nếu không có lỗi
					array_push($containRouteTrue, array( // đẩy vào 1 mảng chứ các Route thỏa mãn
					 	'route' => implode('{',$v),
					 	'params' => $params
					));
					break;
				}
				 
			}

		}

		if (@isset(self::$Routes["GET"]["{$containRouteTrue[0]['route']}"])) {
			$this->setReq($containRouteTrue[0]['params']);
			$this->processRoute($containRouteTrue[0]['route']);
		} else {
			$this->processRoute('/404');
			return;
		}
		
	}

	public function route($Routes, $RoutesHasSet, $route) {
		if (isset($Routes[$route])) {
			$action = $Routes[$route];
			if (is_callable($Routes[$route])) {
				$action($this->Request, new Response);
			} else {
				URL::setOldUrl($route);
				$this->RoutesHasSet($RoutesHasSet, $route);
				$action = explode('@',$action);
				$controllerPath = APP_PATH . '/controllers/' . $action[0] . 'Controller.php';
				if (file_exists($controllerPath)) {
					require $controllerPath;
					if(class_exists($action[0] . 'Controller')) {
						$classs = $action[0] . 'Controller';
						$a = new $classs();
						if (method_exists($a, $action[1])) {
							$getReturn = $a->$action[1]($this->Request, new Response);
							if (isset($getReturn->redirectUrl)) {
								Redirect::to($getReturn->redirectUrl);
							}
						} else {
							die('KHông tồn tại Method: ' . $action[1]);
						}
					} else {
						die('KHông tồn tại Class: ' . $action[0] . 'Controller');
					}

				}else {
					die(APP_PATH . '/controllers/' . $action[0] . 'Controller.php không tồn tại!');
				}
			}

		} else {
			$this->processRouteHasParam($route);
			if (!isset($this->hasRoute)) {
				$this->processRoute('/404');
			}
		}
	}

	/*public function middleware($nameMiddleware) {
		print_r($this->RoutesHasMiddleware);
		if (isset($nameMiddleware)) {
			$this->currentRoute;
			array_push($this->RoutesHasMiddleware, $this->currentRoute);
		}
	}*/

	public function RoutesHasSet($RoutesHasSet, $route) {
		if (isset($RoutesHasSet['route'][$route])) {
			foreach ($RoutesHasSet['route'][$route] as $vAction) {
				if (is_callable($vAction)) {
					$vAction($this->Request);
				} else {
					$this->setReq(array('global' => $vAction));
				}
			}
		}
		if (isset($RoutesHasSet['group'])) {
			foreach ($RoutesHasSet['group'] as $k => $v) {
				if (strpos($route, $k) === 0) {
					foreach ($RoutesHasSet['group'][$k] as $vAction) {
						if (is_callable($vAction)) {
							$vAction($this->Request);
						} else {
							$this->setReq(array('global' => $vAction));
						}
					}

				}
			}
		}
		
	}

	public static function globalVariables($action) {
		if (is_callable($action)) {
			$getResult = $action();
			if (is_array($getResult)) {
				self::$globalVariables = $getResult;
			}
		}
	}

	public static function globalLibraries($action) {
		if (is_callable($action)) {
			$getResult = $action();
			if (is_array($getResult)) {
				self::$globalLibraries = $getResult;
			}
		}
	}

}
 ?>