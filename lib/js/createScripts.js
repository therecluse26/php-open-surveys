createType = function(){
	var type_name = encodeURIComponent($("#type_name").val());
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
	var surv_name = encodeURIComponent($("#surv_name").val());
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
createQuestion = function(){
	var question_id = $("#question_id").val();
	var question = encodeURIComponent($("#question").val());
	var elementType = $("#elementType").val();
	if($("#required").is(':checked')){
		var required = 1;
	}
	else{
		var required = 0; }
	var group_id = $("#groupsDropdown").val();
	var ord_in_group = $("#ord_in_group").val();
	var cat_id = $("#cat_id").val();
	var surv_id = $("#surv_id").val();
	$.ajax({
		type: 'post',
		url: '../lib/data/createScript.php',
		data: 'insForm=newquestion&question_id='+question_id+'&question='+question+'&elementType='+elementType+'&required='+required+'&group_id='+group_id+'&ord_in_group='+ord_in_group+'&cat_id='+cat_id+'&surv_id='+surv_id,
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
