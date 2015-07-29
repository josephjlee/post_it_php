$(document).on('submit', '.postForm', function(){
	$.post(
		"/posts_controller/create",
		$('form.postForm').serialize(),
		function(return_data){
			$('main').prepend(
				'<div class="col-sm-4 postIts">'+
				'<p>'+$('input.postInput').val()+'</p>'+
				'</div>'
			);
			$('.postForm')[0].reset();
		},
		'json'
	);
	return false;
});