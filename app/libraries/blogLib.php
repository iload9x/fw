<?php /**
* 
*/
class blogLib
{
	function __construct() {
		
	}

	public static function treeMenuCat($arrData, $prefix = '', $idSelected = -1) {
		foreach ($arrData as $v) {
			if ($idSelected == $v['id']) {
				echo "<option selected value='{$v['id']}'>".$prefix.$v['name']."</option>";
			} else {
				echo "<option value='{$v['id']}'>".$prefix.$v['name']."</option>";
			}
			
			$blogModel = new blogModel();
			$arrParent = $blogModel->select('id, name, parent')->whereAnd(array('type' => 'cat', 'parent' => $v['id']))->get()->toArray();
			if($arrParent) {
				self::treeMenuCat($arrParent, $prefix.'|-- ', $idSelected);
			}
		}
	}
}