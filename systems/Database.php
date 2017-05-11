<?php /**
* 
*/
class Database
{
	public $query;
	function __construct($table = null) {
		$DatabaseLib = new DatabaseLib();
		$this->config = $DatabaseLib->config;
		$this->primaryKey = isset($this->primaryKey) ? $this->primayKey : null;
		if (isset($this->fields)) {
			$fields = implode(',', $this->fields);
		} else {
			$fields = "*";
		}

		if (!isset($this->table)) {
			$this->table = $table;
			
		}
		$this->selectQuery = "SELECT {$fields} FROM {$this->table}";
		
	}

	public function connect() {
		if (!isset($this->conn)) {
			$this->conn = mysqli_connect($this->config['hostname'],$this->config['username'],$this->config['password'],$this->config['dbname']) or die("Loi ket noi CSDL!");
			mysqli_set_charset($this->conn,"utf8");
		}
	}
		

	public function close() {
		if ($this->conn) {
			mysqli_close($this->conn);
		}
	}

	public function execute($query) {
		$this->connect();
		return mysqli_query($this->conn,$query);
		$this->close();
	}

	public function execute_multi($query) {
		$this->connect();
		return mysqli_multi_query($this->conn,$query);
		$this->close();
	}

	public function save() {
		$propreties = get_object_vars($this);
		unset($propreties['config']);
		unset($propreties['table']);
		unset($propreties['conn']);
		unset($propreties['fields']);
		unset($propreties['primaryKey']);
		unset($propreties['selectQuery']);
		unset($propreties['query']);
		unset($propreties['newQuery']);
		if (isset($this->{$this->primaryKey})) {
			return $this->update($propreties)->whereAnd(array($this->primaryKey => $this->{$this->primaryKey}))->get()->exec();
		}
		return $this->insert($propreties);
	}

	public function insert($data) {
		if (is_array($data)) {
			$strField = '';
			$strValue = '';
			foreach ($data as $field => $value) {
				if (isset($value)) {
					$strField = $strField . $field . ',';
					if (is_numeric($value)) {
						$strValue = $strValue . $value . ',';
					} else if(!$value){
						$strValue = $strValue . "''," ;
					} else {
						$strValue = $strValue. "'{$value}',";
					}
				}
				
			}
			$strField = substr($strField, 0, strlen($strField) - 1);
			$strValue = substr($strValue, 0, strlen($strValue) - 1);
			$queryInsert = "INSERT INTO {$this->table} ({$strField}) VALUES ($strValue)";
			return $this->execute($queryInsert);

		} 
	}

	public function remove() {
		if (isset($this->{$this->primaryKey})) {
			return $this->delete()->whereAnd(array($this->primaryKey => $this->{$this->primaryKey}))->get()->exec();
		}
		return false;
	}

	public function delete() {
		$this->query['delete'] = "DELETE";
		return $this;
	}
	public function select($fields = '*') {
		$this->query['select'] = "SELECT {$fields}";
		return $this;
	}

	public function from($table) {
		$this->table = $table;
		return $this;
	}

	public function update($data) {
		if (is_array($data)) {
			$this->query['update'] = "";
			foreach ($data as $key => $value) {
				$this->query['update'] = $this->query['update'] . " {$key}='{$value}',";
			}
			$this->query['update'] = substr($this->query['update'], 0, strlen($this->query['update']) - 1);
		}
		return $this;
	}

	public function update_bath($data, $field) {
		if (isset($data) && is_array($data)) {
			$this->query['update'] = "";
			$fieldArray = array();
			$keywordArray = array();
			$filedIn = '(';
			foreach ($data as $k => $v) {
				foreach ($v as $kValue => $vValue) {
					if ($kValue == $field) {
						$filedIn .= "'{$vValue}',";
					}

					if (!isset($fieldArray[$kValue])) {
						$fieldArray[$kValue] = array();
					}
					array_push($fieldArray[$kValue], $vValue);
					
				}
			}
			$filedIn = substr($filedIn, 0, strlen($filedIn) - 1);
			$filedIn .= ')';
			foreach ($fieldArray as $k => $v) {
				if ($k != $field) {
					$this->query['update'] = "{$k} = CASE";
					foreach ($v as $kValue => $vValue) {
						$this->query['update'] .= " WHEN $field = '{$fieldArray[$field][$kValue]}' THEN '{$vValue}'";
					}
					$this->query['update'] .= " ELSE {$k} END,";
				}
			}
			$this->query['update'] = substr($this->query['update'], 0, strlen($this->query['update']) - 1);
			$this->query['where'] = " WHERE {$field} IN {$filedIn}";
		}
		return $this->get()->exec();
	}

	public function find($primaryKey, $field = null) {
		if (isset($this->fields)) {
			$fields = implode(',', $this->fields);
		} else {
			$fields = "*";
		}
		$fieldSelect = isset($field) ? $field : $this->primaryKey;
		$selectQuery = "{$this->selectQuery} WHERE {$fieldSelect} = '{$primaryKey}' LIMIT 1";
		$result = $this->execute($selectQuery);
		
		if ($result) {
			if ($result->num_rows > 0) {
				foreach ($result->fetch_assoc() as $key => $value) {
					$this->{$key} = $value;
				}
				return true;
			}
		}
		return false;
	}

	public function like($field, $match) {
		$this->query['where'] = " WHERE {$field} LIKE '{$match}'";
		return $this;
	}

	public function whereAnd($data) {
		if (is_array($data)) {
			$this->query['where'] = ' WHERE';
			foreach ($data as $key => $value) {
				$this->query['where'] = $this->query['where'] . " {$key}='{$value}' AND";
			}
			$this->query['where'] = substr($this->query['where'], 0, strlen($this->query['where']) - 4);
		}
		return $this;
	}

	public function whereOr($data) {
		if (is_array($data)) {
			$this->query['where'] = ' WHERE';
			foreach ($data as $key => $value) {
				$this->query['where'] = $this->query['where'] . " {$key}='{$value}' OR";
			}
			$this->query['where'] = substr($this->query['where'], 0, strlen($this->query['where']) - 3);
		}
		return $this;
	}

	public function get(){
		$query = '';
		if (isset($this->query["select"])) {
			$query = $this->query["select"] . " FROM {$this->table}";
			$this->query["select"] = '';
		} else if(isset($this->query["update"])) {
			$query = "UPDATE {$this->table} SET " . $this->query["update"];
			$this->query["update"] = '';
		} else if(isset($this->query["delete"])) {
			$query = $this->query["delete"] .  " FROM {$this->table}";
			$this->query["delete"] = '';
		} else if(isset($this->query["insert"])) {
			$query = $this->query["insert"];
			$this->query["insert"] = '';
		} else {
			$query = "SELECT * FROM {$this->table}";
		}

		if (isset($this->query["where"])) {
			$query = $query . $this->query["where"];
			$this->query["where"] = '';
		}

		if (isset($this->query["order_by"])) {
			$query = $query . $this->query["order_by"];
			$this->query["order_by"] = '';
		}

		if (isset($this->query["limit"])) {
			$query = $query . $this->query["limit"];
			$this->query["limit"] = '';
		}


		$this->newQuery = $query;
		return $this;
	}

	public function toCode() {
		return $this->newQuery;
	}

	public function countAll() {
		$result = $this->execute($this->newQuery);
		$this->query = null;
		if ($result) {
			return $result->num_rows;
		}
		return false;
	}

	public function toArray() {
		$result = $this->execute($this->newQuery);

		if ($result) {
			$arrayData = array();
			while ($row = $result->fetch_assoc()) {
				array_push($arrayData, $row);
			}

			return $arrayData;
		}
		return false;
	}

	public function rowArray() {
		$result = $this->execute($this->newQuery);
		if ($result) {
			return $result->fetch_assoc();

		}
		return false;
	}

	public function exec() {
		return $this->execute($this->newQuery);
	}

	public function limit($start, $length) {
		$this->query['limit'] = " LIMIT {$start}, {$length}";
		return $this;
	}

	public function order_by($field, $sort = '') {
		$this->query['order_by'] = " ORDER BY {$field} {$sort}";
		return $this;
	}

}