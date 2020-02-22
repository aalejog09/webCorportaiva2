$(document).ready(function(){

	$('.maps').on('click',function(){


		$('.mapsModal').css({

			'display':'block'

		});

		var sanBorja= '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7802.59512694499!2d-77.008478!3d-12.09177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7d6511bbbef%3A0xdbc2aaabf6f3861b!2sBernini%20352%2C%20Cercado%20de%20Lima%2015036%2C%20Peru!5e0!3m2!1sen!2sus!4v1582334379161!5m2!1sen!2sus" style="width:95vw; height:90vh; border:0;" frameborder="0"  allowfullscreen=""></iframe>'
		var losOlivos= '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31222.16561136973!2d-77.068089!3d-11.990362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb752e33b5596bd23!2sOncovip%20Los%20Olivos!5e0!3m2!1ses-419!2sus!4v1582337025477!5m2!1ses-419!2sus" style="width:95vw; height:90vh; border:0;" frameborder="0" allowfullscreen=""></iframe>';
		var mapDireccion = $(this).attr('id');

		if (mapDireccion=='sanBorja') {
			$('#mapsContenedor').empty().append(sanBorja);
		}else{
			$('#mapsContenedor').empty().append(losOlivos);
		}


	

	})


	$('.close').on('click',function(){


		$('.mapsModal').css({

			'display':'none'

		});

	})
	
});