createType = function(type_name, type_id){
  $.ajax({
	type: 'POST',
	url: '../lib/data/createType.php',
	data: 'type_name='+ type_name +'&type_id='+ type_id,
	success: function (data) {
		if (data == 'success') {
			$('#status').html('Success!');
		}
		else {
			$('#status').html('Something is wrong');
	}
	}
});
};

$('#type_create').click(function() {
	var type_name = $("#type_name").val();
	var type_id = $("#type_id").val();
	createType(type_name, type_id);
});
