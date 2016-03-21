<?php

$page = $_GET['page'];

function pageSelect($page){
	switch($page) {
	case 'newsurvey':
		include 'newsurvey.php';
		break;
	case 'newtype':
		include 'newtype.php';
		break;
	default:
		echo '<h3 id="errmsg">404: Page not found</h3>';
	};
};
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>Survey Creator</title>
	<meta name="Author" content=""/>
	<script src="../lib/js/jquery-2.2.2.js"></script>
	<script src="../lib/js/createSurvey.js"></script>
	<script src="../lib/js/createType.js"></script>



</head>
<body>

<?php
	pageSelect($page);

?>

<div class="content"></div>

<p id="status"></p>

</body>
</html>
