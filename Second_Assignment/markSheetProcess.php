<?php

class dbms {

	private $host = "localhost";
	private $user = "root";
	private $password = "Kh@17052002";
	private $database = "student_management_system";
	private $q;
	
	function __construct() {

		$this->q = $this->connectDB();

	}

	function connectDB() {

		$q = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $q;

	}

	function runQuery($query) {

		$rs = mysqli_query($this->q,$query);

		while($r=mysqli_fetch_assoc($rs)) {

			$d[] = $r;

		}

		if(!empty($d))
		return $d;

	}
	
}

?>