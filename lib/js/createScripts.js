createType = function(){
	var type_name = $("#type_name").val();
	var type_id = $("#type_id").val();
	$.ajax({
		type: 'post',
		url: '../lib/data/createScript.php',
		data: 'insForm=newtype&type_name='+type_name+'&type_id='+type_id,
		success: function(res) {
			if(res == 'success'){
				$('#status').html('Success!');
				$("#submitBut *").attr("disabled", "disabled").off('click');
			}
			else{
				//echoes error 
				$('#status').html(res);
			}
		}
	});
};

createSurvey = function(){
	var surv_name = $("#surv_name").val();
	var surv_id = $("#surv_id").val();
	var type_id = $("#typesDropdown").val();
	$.ajax({
		type: 'post',
		url: '../lib/data/createScript.php',
		data: 'insForm=newsurvey&surv_name='+surv_name+'&surv_id='+surv_id+ '&type_id='+type_id,
		success: function(res) {
			if(res == 'success'){
				$('#status').html('Success!');
				$("#submitBut *").attr("disabled", "disabled").off('click');
			}
			else{
				//echoes error
				$('#status').html(res);
			}
		}
	});
};
