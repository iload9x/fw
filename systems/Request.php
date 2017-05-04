<?php 

/**
* 
*/
class Request
{
	public function createReq($reqArr) {
		foreach ($reqArr as $k => $v) {
			$this->{$k} = $v;
		}
	}

}