<?php
class genericList extends dbConn{
	public function pullGeneric($sql){
		$db = new dbConn();
		$stmt = $db->conn->query($sql);
		$stmt->execute();
		$allResults = $stmt->fetchAll(PDO::FETCH_NUM);
		return $allResults;
	}
}
class typeList {
	function pullList() {
		$obj = new genericList();
		$sql = 'select distinct type, guid from s_types';
		$typeList = $obj->pullGeneric($sql);
		return $typeList;
	}
}
class categoryList {
	function pullList() {
		$obj = new genericList();
		$sql = 'select distinct cat_name, guid from s_categories';
		$categoryList = $obj->pullGeneric($sql);
		return $categoryList;
	}
}
class surveyList {
	function pullList($type_id){
		$obj = new genericList();
		if($type_id != ''){
			$sql = "select distinct survey_name, guid from s_surveys where type_id = '".$type_id."'";
		}
		else{
			$sql = "select distinct survey_name, guid from s_surveys order by survey_name";
		}
		$surveyList = $obj->pullGeneric($sql);
		return $surveyList;
	}
}
class groupList {
	function pullList($surv_id){
		$obj = new genericList();
		$sql = "select distinct g.group_name, g.guid, g.group_order from s_groups g
		inner join s_surveygroups sg on sg.group_id = g.guid 
		where sg.survey_id = '".$surv_id."' order by g.group_order";
		$groupList = $obj->pullGeneric($sql);
		return $groupList;
	}
}
class questionList {
	function pullList($group_id) {
		$obj = new genericList();
		$sql = 'select distinct question, guid, elementType, required, group_id, order_in_group from s_questions order by order_in_group where group_id = '.$group_id;
		$questionList = $obj->pullGeneric($sql);
		return $questionList;
	}

}
?>
