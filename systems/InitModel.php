<?php 
/**
* 
*/
class InitModel extends Database
{
	function __construct() {
		parent::__construct();
		$this->extractTable($this->table);
	}

	protected function extractTable($table) {
		$allField = $this->execute("SHOW COLUMNS FROM ".$table);
		if ($allField) {
			while ($field = $allField->fetch_assoc()) {
				if ($field['Key'] == 'PRI') {
					$this->primaryKey = $field['Field'];
				}
				$this->{$field['Field']} = null;
			}
		}
	}
}