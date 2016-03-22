<?php
define('DS', DIRECTORY_SEPARATOR);
chdir('../../');
require getcwd().DS.'lib'.DS.'classes'.DS.'classes_data.php';
$insForm = $_POST['insForm'];
if($insForm == 'newtype'){
	$type_name = $_POST['type_name'];
	$type_id = $_POST['type_id'];
	if(strlen($type_name) < 2){
		$status = 'Type name must be longer than 2 characters';
		exit($status);
	};
	$ins = new SurveyType;
	$status = $ins->pushType($type_name, $type_id);
	exit($status);
}
else if($insForm == 'newsurvey'){
	$surv_name = $_POST['surv_name'];
	$surv_id = $_POST['surv_id'];
	$type_id = $_POST['type_id'];
	if(strlen($surv_name) < 2){
		$status = 'Survey name must be longer than 2 characters';
		exit($status);
	};
	$ins = new Survey;
	$status = $ins->pushSurvey($surv_name, $surv_id, $type_id);
	exit($status);
};
?>
