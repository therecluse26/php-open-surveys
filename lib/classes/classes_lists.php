<?php
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
			$sql = "select distinct survey_name, guid from s_surveys";
		}
		$surveyList = $obj->pullGeneric($sql);
		return $surveyList;
	}
}


?>
