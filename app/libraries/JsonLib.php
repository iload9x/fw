<?php 

 class JsonLib
 {
 	function encode($jsonStr) {
 		return json_encode($jsonStr);
 	}

 	function decode($jsonStr) {
 		return json_decode($jsonStr);
 	}
 	
 }