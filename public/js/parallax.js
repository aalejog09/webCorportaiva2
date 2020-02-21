$(window).on('scroll',parallax);

	
function parallax(){

	//obtener el nivel del scroll
	var s = $(window).scrollTop();

	//efecto parallax para los fondos
	function parallaxBg(el,t){

		$(el).css({

			'background-attachment':'fixed',
			'background-position':'center' + -(s*t) + 'px'
		})
	}

}
	
	//llamando las funciones antes creadas

	parallaxBg('.contenedor-parallax',2);
	//parallaxFont('.font-parallax',0.02)

