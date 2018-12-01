<?php
require_once('database.php');
class CurdOperation extends Database{
	public function insert($table,$data){
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .=" (".implode(", ", array_keys($data)).") VALUES ";
		$sql .=" ('".implode("', '", array_values($data))."')";
		$query = mysqli_query($this->con, $sql);
		if ($query) {
			return true;
		}
	}
}
$obj = new CurdOperation;