
// search script

$(document).ready(function(){

	$("#search-wrapper").click(function(){

		$(".open-search").slideToggle(600);

	});

	$("#search-wrapper01").click(function(){

		$(".open-search").slideToggle(600);

	});

	 // fixed menu bar after scrooling

	$(document).on('scroll',function(){


		if($(this).scrollTop() > 1){

			$('header').addClass('sticky');

		}else{

			$('header').removeClass('sticky');
		}


	});




});