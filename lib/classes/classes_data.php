<?php
class dbConn {
	public $conn;
	public function __construct(){
		require getcwd().DS.'lib'.DS.'conf'.DS.'config.php';
		// Connect to server and select database.
		$this->conn = new PDO('sqlsrv:Server='.$host.';Database='.$db_name, $username, $password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
};

class genericList extends dbConn{
	public function pullGeneric($sql){
		$db = new dbConn();
		$stmt = $db->conn->query($sql);
		$stmt->execute();
		$allResults = $stmt->fetchAll(PDO::FETCH_NUM);
		return $allResults;
	}
}

class Survey extends dbConn {
/*
	function buildSurvey() {
	}

	function buildQuestions() {
	}
*/
	function pushSurvey($surv_name, $surv_id, $type_id) {
		//insert into survey (if new), questions, types (if new)
		$status = 'unfinished';
		$db = new dbConn();
	try {
		$sql = "insert into s_surveys (survey_name, guid, type_id) values(:survey_name, :guid, :type_id)";
		$stmt = $db->conn->prepare($sql);
		$stmt->bindParam(':survey_name', $surv_name);
		$stmt->bindParam(':guid', $surv_id);
		$stmt->bindParam(':type_id', $type_id);
		$stmt->execute();
		$status = 'success';
		return $status;
	}
	catch(PDOException $ex)
    {
		$err = "Error code: " . $ex->getMessage();
		return $err;
		$status = 'failed';
		return $status;

	}
	}
}

class SurveyType extends dbConn {
	function pushType($type_name, $type_id) {
		$status = 'unfinished';
		$db = new dbConn();
	try {
		$sql = "insert into s_types (type, guid) values(:type, :guid)";
		$stmt = $db->conn->prepare($sql);
		$stmt->bindParam(':type', $type_name);
		$stmt->bindParam(':guid', $type_id);
		$stmt->execute();
		$status = 'success';
		return $status;
	}
	catch(PDOException $ex)
    {
		$err = "Error code: " . $ex->getMessage();
		return $err;
		$status = 'failed';
		return $status;
	}
	}
}


?>
