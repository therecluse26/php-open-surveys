<?php
	chdir('../');
	define('DS', DIRECTORY_SEPARATOR);
	include getcwd().DS.'lib'.DS.'classes'.DS.'classes_components.php';
	include getcwd().DS.'lib'.DS.'functions'.DS.'func_generic.php';
	$form = new component();
	echo 'Survey Type: ';
	echo $form->dropdown('surveys', '');
	echo '<form id="surveyCreate" method="post" >
	<label for="surv_name">Survey Name:</label>
	<input name="surv_name" id="surv_name" ></input>
	<br>
	<label for="surv_id">Survey ID:</label>
	<input name="surv_id" id="surv_id" value="'.getGUID().'" disabled></input>
	<div id="submitBut">
	<button type="button" id="surv_create" onClick="createSurvey();">Create Survey</button>
	</div>
	</form>';
?>
