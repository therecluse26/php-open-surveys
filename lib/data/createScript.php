<?php
define('DS', DIRECTORY_SEPARATOR);
chdir('../../');
require 'formDataClasses.php';
$insForm = $_POST['insForm'];
if($insForm == 'newtype'){
	$type_name = $_POST['type_name'];
	$type_id = $_POST['type_id'];
	if(strlen($type_name) < 2){
		$status = 'Type name must be longer than 2 characters';
		exit($status);
	}
	else{
	$ins = new SurveyType;
	$status = $ins->pushType($type_name, $type_id);
	exit($status);
	};
}
else if($insForm == 'newsurvey'){
	$surv_name = $_POST['surv_name'];
	$surv_id = $_POST['surv_id'];
	$type_id = $_POST['type_id'];
	if(strlen($surv_name) < 2){
		$status = 'Survey name must be longer than 2 characters';
		exit($status);
	}
	else{
	$ins = new Survey;
	$status = $ins->pushSurvey($surv_name, $surv_id, $type_id);
	exit($status);
	};
}
else if($insForm == 'newgroup'){
	$group_name = $_POST['group_name'];
	$group_ord = $_POST['group_ord'];
	$group_desc = $_POST['group_desc'];
	$group_id = $_POST['group_id'];
	$group_type = $_POST['group_type'];
	if(strlen($surv_name) < 2){
		$status = 'Group name must be longer than 2 characters';
		exit($status);
	}
	else{
	$ins = new Group;
	$status = $ins->pushGroup($group_name, $group_ord, $group_desc, $group_id, $group_type);
	exit($status);
	};
}
else if($insForm == 'newquestion'){
	$req = $_POST['required'];
	$question_id = $_POST['question_id'];
	$question = $_POST['question'];
	$elementType = $_POST['elementType'];
	$required = $req;
	$group_id = $_POST['group_id'];
	$ord_in_group = $_POST['ord_in_group'];
	$cat_id = $_POST['cat_id'];
	$surv_id = $_POST['surv_id'];
	if(strlen($question) < 2){
		$status = 'Question must be longer than 4 characters';
		exit($status);
	}
	else{
	$ins = new Question;
	$status = $ins->pushQuestion($question_id, $question, $elementType, $required, $group_id, $ord_in_group, $cat_id, $surv_id);
	exit($status);
	};
};
?>
