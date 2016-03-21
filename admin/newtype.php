<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Survey Creator</title>
	<meta name="Author" content=""/>
	<script src="../../lib/js/jquery-2.2.2.js"></script>
	<script src="../../lib/js/createType.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#type_create').click(function() {
				var type_name = $("#type_name").val();
				var type_id = $("#type_id").val();
				createType(type_name, type_id);
			});

		});

	</script>
	<?php
		chdir('../');
		//echo getcwd();
		define('DS', DIRECTORY_SEPARATOR);
		include getcwd().DS.'lib'.DS.'classes'.DS.'classes_components.php';
		 include getcwd().DS.'lib'.DS.'functions'.DS.'func_generic.php';
	?>
</head>
<body>
<form id="typeCreate">

	<?php
		$form = new component();
		echo 'Types: ';
		echo $form->dropdown('types', '');
			echo '<br>';
		echo 'Surveys: ';
		echo $form->dropdown('surveys','AE403213-B39B-CC8A-058D-7B5963B3659A');
		//echo getGUID();



	?>

</form>
	<form id="typeCreate">

		<input name="type_name" id="type_name" ></input>
		<input name="type_id" id="type_id" value="<?php echo getGUID();?>" ></input>

		<div id='submitBut'>
			<button id='type_create'>Create Survey</button>
		</div>

	<?php
		/*$survey = new surveyCreate;
		$survey->pushSurvey('Test Insert', getGUID(), getGUID()); */

	?>


	</form>

<p id="status"></p>
<script>

</script>
</body>
</html>
