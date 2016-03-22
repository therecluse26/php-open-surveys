createType = function(){
	var type_name = $("#type_name").val();
	var type_id = $("#type_id").val();
	$.ajax({
		type: 'post',
		url: '../lib/data/createType.php',
		data: 'type_name='+ type_name +'&type_id=' + type_id,
		success: function(res) {
			if(res == 'success'){
				$('#status').html('Success!');
			}
		}
	});
};

/*$('#typeForm').on('click', '#typeForm', function() {
	//e.preventDefault();
	var type_name = $("#type_name").val();
	var type_id = $("#type_id").val();
	//createType(type_name, type_id);
	$.ajax({
		type: 'post',
		url: '../lib/data/createType.php',
		data: 'type_name='+ surv_name +'&type_id=' + type_id,
		success: function(res) {
				$('#status').html(res);
				alert(res);
		}
	});
	/*$.post( '../lib/data/createType.php', {type_name: type_name, type_id: type_id}, function(result){
        $("$status").html(result);
    }) */
