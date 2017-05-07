<?php 

	class Initialize
	{
		public $requestUrl;
		function __construct() {
			$this->req = new Input();
			$this->url = new URL();
			$this->session = new Session();
			$this->Router = new Router();
			require APP_PATH . 'Routes.php';
			$this->processUrl();
		}

		public function processUrl() {
			
			$directorys = $this->url->directory();
			$requestUri = $this->url->requestUri();
			if (strlen($directorys) > 1) {
				$requestUrl = str_replace($directorys, "", $requestUri);
			} else {
				$requestUrl = substr($requestUri, 1);
			}
			$requestUrl = $this->url->clearHoiCham($requestUrl);
			if (isset($requestUrl) && $requestUrl != null) {
				$this->requestUrl = $requestUrl;
				$this->Router->processRoute($this->requestUrl);
			} else {
				$this->Router->processRoute('/');
			}
		}


	}
 ?>