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
		},
		'json'
	);
	return false;
});