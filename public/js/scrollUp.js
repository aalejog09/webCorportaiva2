$(document).ready(function(){


	$('.boton-arriba').on('click',function(){

		$('html').animate({

			scrollTop: '0px'
		}, 300)
	});

	$(window).scroll(function(){

		if($(this).scrollTop() > 0){
			$('.boton-arriba').slideDown(300);
		}else{
			$('.boton-arriba').slideUp(300);
		}
	});
})