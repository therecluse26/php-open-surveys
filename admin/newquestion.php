<?php
	chdir('../');
	define('DS', DIRECTORY_SEPARATOR);
	include getcwd().DS.'lib'.DS.'classes'.DS.'classes_components.php';
	include getcwd().DS.'lib'.DS.'functions'.DS.'func_generic.php';
	$form = new component();
	echo 'Survey: ';
	echo $form->dropdown('surveys', '');
	echo '<form id="questionCreate" method="post" >

	<label for="question_id">Question Id:</label>
	<input name="question_id" id="question_id" value="'.getGUID().'" disabled>
	</input>
	<br

	<label for="question">Question:</label>
	<input name="question" id="question" ></input>
	<br>

	<label for="elementType">Element Type:</label>
	<select name="elementType" id="elementType" >
		<option value="textfield">Text Field</option>
		<option value="longtext">Long Textbox</option>
		<option value="dropdown">Dropdown</option>
		<option value="radiobuttons">Radio Buttons</option>
		<option value="checklist">Checklist</option>
		<option value="matrixitem">Matrix Item</option>
	</select>
	<br>

	<label for="required">Required? </label>
	<input type="checkbox" name="required" id="required" ></input>
	<br>

	<label for="groupsDropdown">Group Id:</label>';
	echo $form->dropdown('groups', '');

echo '<br>

	<label for="ord_in_group">Order in Group:</label>
	<select name="ord_in_group" id="ord_in_group" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br>

	<label for="cat_id">Category Id:</label>
	<input name="cat_id" id="cat_id" value="'.getGUID().'" disabled>
	</input>

	<div id="submitBut">
	<button type="button" id="question_create" onClick="createQuestion();">Create Question</button>
	</div>
	</form>';
?>
