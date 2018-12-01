<?php
class Database{
	public $con;
	public function __construct(){
		$this->con = mysqli_connect("localhost", "root", "", "imageupload");
		if (!$this->con) {
			die('Failed to connect DB');
		}
	}
}
$obj = new Database;