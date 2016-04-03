<?php
	chdir('../');
	define('DS', DIRECTORY_SEPARATOR);
	include getcwd().DS.'lib'.DS.'classes'.DS.'classes_components.php';
	include getcwd().DS.'lib'.DS.'functions'.DS.'func_generic.php';
	$form = new component();
	echo '<form id="typeForm">
	<label for="type_name">Type Name:</label>
	<input name="type_name" id="type_name" ></input>
	<br>
	<label for="type_id">Type ID:</label>
	<input name="type_id" id="type_id" value="'.getGUID().'" disabled></input>
	</form>
	<div id="submitBut">
	<button type="button" id="type_create" onClick="createType();">Create Type</button>
	</div>';
?>
