var res;

$('.alert-map').click(function(){
	var link = $(this);
	var alert_id = link.data('id');
		$.ajax({
			type: 'GET',
			url: '../map/' + alert_id,
			dataType: 'json',
			success: function(response){
				$('#alert_map_modal').modal('show');
				res = response.html;
				$('.modal-body').html(res);
			}
		});
});

$('#alert_map_modal').on('hidden.bs.modal', function(e){
	$('.modal-body').children().remove();
});