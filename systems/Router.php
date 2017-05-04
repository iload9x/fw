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
			$this->Csrf->create();
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

	public function processRouteHasParam($route) {
		foreach (self::$RoutesHasParam as $v) {
			if (strpos($route, $v[0]) === 0) {
				$this->hasRoute = true;// check
				$id = 1;
				$route = str_replace($v[0], '', $route);
				$arr = array();
				while ($v[$id]) {
					$c = explode('}', $v[$id]);
					if ($c[1] != null) {
						if(!strpos($route, $c[1])) {
							$this->processRoute('404');
							return;
						}
						$vlue = substr($route, 0, strpos($route, $c[1]));
						$route = str_replace($vlue . $c[1], '', $route);
						$arr[$c[0]] = $vlue;
					} else {
						$vlue = $route;
						$arr[$c[0]] = $vlue;
						break;
					}
					
					$id++;
				}
				$this->setReq($arr);
				$this->processRoute(implode('{',$v));
				break;
			}
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
				$this->processRoute('404');
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