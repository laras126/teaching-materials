$(document).ready(function(){

	$('#changePictureBtn').click(function(){
		$('.avatar').attr('src', 'img/harry.jpg');
		$(this).removeClass('button').text("Wait, that's not Sam!");
	});

	$('.intro').text().replace('The','HELLO');

});