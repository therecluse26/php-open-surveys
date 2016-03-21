<?php
	chdir('../');
	//echo getcwd();
	define('DS', DIRECTORY_SEPARATOR);
	include getcwd().DS.'lib'.DS.'classes'.DS.'classes_components.php';
	include getcwd().DS.'lib'.DS.'functions'.DS.'func_generic.php';
	$form = new component();
	/*echo 'Types: ';
	echo $form->dropdown('types', '');
		echo '<br>';
	echo 'Surveys: ';
	echo $form->dropdown('surveys',''); */
	//echo getGUID();
	echo '<form id="typeCreate">
	<label for="type_name">Type Name:</label>
	<input name="type_name" id="type_name" ></input>
	<br>
	<label for="type_id">Type ID:</label>
	<input name="type_id" id="type_id" value="'.getGUID().'" disabled></input>

	<div id="submitBut">
		<button id="type_create">Create Type</button>
	</div>
	</form>';

?>
