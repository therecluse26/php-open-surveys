createSurvey = function(surv_name, surv_id, type_id){
  $.ajax({
	type: 'POST',
	url: './lib/data/createSurvey.php',
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
	return false;
};
