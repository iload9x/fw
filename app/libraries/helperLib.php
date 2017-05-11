<?php /**
* 
*/
class helperLib
{
	function checkIsset($dieukien, $giatridung, $giatrisai) {
		return isset($dieukien) ? $giatridung : $giatrisai;
	}
}