<?php
define('DS', DIRECTORY_SEPARATOR);
chdir('../../');
require getcwd().DS.'lib'.DS.'classes'.DS.'classes_data.php';

$insForm = $_POST['insForm'];

if($insForm == 'newtype'){
	$type_name = $_POST['type_name'];
	$type_id = $_POST['type_id'];
	$ins = new typeCreate;
	$status = $ins->pushType($type_name, $type_id);
	exit($status);
}
elseif($insform == 'newsurvey'){
	$surv_name = $_POST['surv_name'];
	$surv_id = $_POST['surv_id'];
	$type_id = $_POST['type_id'];
	$ins = new surveyCreate;
	$status = $ins->pushSurvey($surv_name, $surv_id, $type_id);
	exit($status);
}
?>
