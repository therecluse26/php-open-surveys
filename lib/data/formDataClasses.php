<?php
require getcwd().DS.'lib'.DS.'data'.DS.'dbconn.php';

class Survey extends dbConn {
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
	function loadSurvey($surv_id){
		include_once getcwd().DS.'lib'.DS.'classes'.DS.'classes_lists.php';
		$surv = new groupList($surv_id);
		return $surv;
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

class Question extends dbConn {
	function pushQuestion($question_id, $question, $elementType, $required, $group_id, $ord_in_group, $cat_id) {
		$status = 'unfinished';
		$db = new dbConn();
	try {
		$sql = "insert into s_questions (guid, question, elementType, required, group_id, order_in_group, cat_id) values(:guid, :question, :elementType, :required, :group_id, :order_in_group, :cat_id)";
		$stmt = $db->conn->prepare($sql);
		$stmt->bindParam(':guid', $question_id);
		$stmt->bindParam(':question', $question);
		$stmt->bindParam(':elementType', $elementType);
		$stmt->bindParam(':required', $required);
		$stmt->bindParam(':group_id', $group_id);
		$stmt->bindParam(':order_in_group', $ord_in_group);
		$stmt->bindParam(':cat_id', $cat_id);
		$stmt->execute();
		//Need second sql statement to insert into s_surveyquestions table
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
