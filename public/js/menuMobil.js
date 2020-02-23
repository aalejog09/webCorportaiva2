$(document).ready(function(){

	$('#menuMobil').on('click', function(e){

		$('.menuModal').animate({

			 left:'0',

		},500)

		$('html').css({

			 'overflow-y':'hidden'

		})

		event.preventDefault();
	});



	$('#close-menuMobil').on('click', function(){

		$('.menuModal').animate({

			 left:'-100vw'

		},500)

		$('html').css({

			 'overflow-y':'scroll'

		})
	});


	$('.link-menuMobil').on('click',function(){

		$('.menuModal').animate({

			 left:'-100vw'

		},500)

		$('html').css({

			 'overflow-y':'scroll'

		})

	})


	

})