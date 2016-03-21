<?php
include 'classes_data.php';

//Components
class component {

	//Dropdown <select> list
	function dropdown($option, $guid) {
		include_once 'classes_lists.php';
		//'types', 'surveys' as options
		switch($option) {
			case 'types':
				$res = new typeList;
				break;
			case 'surveys':
				$res = new surveyList;
				break;
			case 'city':
				$res = new cityList;
				break;
			case 'event':
				$res = new eventList;
				break;
			case 'answer':
				$res = new answerList;
				break;
			default:
				throw new Exception('Error: Dropdown option not specified.');
		}

		//Renders <select> list with results
		try {	$results = $res->pullList($guid);
				echo '<select id="'.$option.'Dropdown">';
				foreach($results as $result){
					echo '<option value="'.$result[1].'">'.$result[0].'</option>';
				}
				echo '</select>';
			}
			catch (PDOException $e) {
					echo 'Failed: ' . $e->getMessage();
					echo '<br>';
			}

		}

	function radiolist($option) {
		
	}

	function checklist($option, $name) {

	}
}
?>
