<?php
class dbConn {
	protected $conn;
	function __construct(){
		//pulls db connection string
		require getcwd().DS.'lib'.DS.'conf'.DS.'config.php';
		// Connect to server and select database.
		$this->conn = new PDO('mysql:host='.$host.';dbname='.$db_name, $username, $password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
};
?>
