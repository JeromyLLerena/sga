var res;
var link = $('.alert-map');

link.click(function(){
var alert_id = link.data('id');
console.log(alert_id);
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

