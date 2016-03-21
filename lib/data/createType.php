<?php
define('DS', DIRECTORY_SEPARATOR);
chdir('../../');
echo getcwd();
header('Content-type: application/json');
require getcwd().DS.'lib'.DS.'classes'.DS.'classes_data.php';
$type_name = $_POST['type_name'];
$type_id = $_POST['type_id'];
$ins = new typeCreate;
$ins->pushType($type_name, $type_id);
return $type_name;
return $type_id;
?>
