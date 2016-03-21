<?php
define('DS', DIRECTORY_SEPARATOR);
chdir('../../');
echo getcwd();
header('Content-type: application/json');
require getcwd().DS.'lib'.DS.'classes'.DS.'classes_data.php';
$surv_name = $_POST['surv_name'];
$surv_id = $_POST['surv_id'];
$type_id = $_POST['type_id'];
$ins = new surveyCreate;
$ins->pushSurvey($surv_name, $surv_id, $type_id);
return $surv_name;
return $surv_id;
return $type_id;
?>
