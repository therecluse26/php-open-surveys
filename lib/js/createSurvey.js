createSurvey = function(surv_name, surv_id, type_id){
  $.ajax({
	type: 'POST',
	url: '../lib/data/createSurvey.php',
	data: 'surv_name='+ surv_name +'&surv_id=' + surv_id + '&type_id=' + type_id,
	success: function (data) {
		if (data == 'success') {
			$('#status').html('Success!');
		}
		else {
			$('#status').html('Something is wrong');
	}
	}
});
	//return false;
};

$('#surv_create').click(function() {
	var surv_name = $("#surv_name").val();
	var surv_id = $("#surv_id").val();
	var type_id = $("#typesDropdown").val();
	createSurvey(surv_name, surv_id, type_id);
});
