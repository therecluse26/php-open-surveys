<?php
//this includes dbconn file, no need to include it separately
require getcwd().DS.'lib'.DS.'data'.DS.'formDataClasses.php';

/***** Set Constants
class testClass{
	const TEST_VAR = 'Testing 123';
	const TEST_VAR2 = 'Oooh yeaaah';
}
**** call these constants with "scope resolution operators" like so ****
echo testClass::TEST_VAR;
*****/

//Components
class component {

	//Dropdown <select> list
	function dropdown($option, $guid) {
		//Include this once whenever a list-based item is added
		include_once 'classes_lists.php';
		//Which kind of list are you pulling?
		switch($option) {
			case 'types':
				$res = new typeList;
				break;
			case 'surveys':
				$res = new surveyList;
				break;
			case 'cities':
				$res = new cityList;
				break;
			case 'events':
				$res = new eventList;
				break;
			case 'answers':
				$res = new answerList;
				break;
			case 'groups':
				$res = new groupList;
				break;
			case 'questions':
				$res = new questionList;
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

	function radioArray($option) {

	}

	function matrixItem($option) {

	}

	function checklist($option, $name) {

	}

}
?>
