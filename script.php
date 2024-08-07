		<script type="text/javascript" src="<?=WEBROOT?>jquery/jquery.js"></script>
		<script type="text/javascript" src="<?=WEBROOT?>js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?=WEBROOT?>js/main.js"></script>
		
		<script type="text/javascript" src="<?=WEBROOT?>js/placeholdem.min.js"></script>

		<script type="text/javascript">
	      Placeholdem(document.querySelectorAll('[placeholder]'));
	    </script>

	    <script type="text/javascript" src="<?=WEBROOT?>owl2/js/owl.carousel.min.js"></script>
	    
		<script type="text/javascript">
			$(document).ready(function(){

				if($('.home-slider').length > 0){
			        $(".home-slider").owlCarousel({
			          dots: false,
			          loop: true,
			          autoplay: true,
			          slideSpeed : 2000,
			          margin: 0,
			          responsiveClass: true,
			          nav: false, 
			          navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"], 
			          responsive: {
			            0: {
			              items: 1,
			              nav: true
			            },
			            700: {
			              items: 2,
			              nav: true
			            },
			            900: {
			              items: 3,
			              nav: true
			            },
			            1000: {
			              items: 3,
			              nav: true,
			              loop: true,
			              margin: 0
			            }
			          }
			           
			        });
			    }

			    if($('.prd-slider').length > 0){
			        $(".prd-slider").owlCarousel({
			          dots: false,
			          loop: true,
			          autoplay: true,
			          slideSpeed : 2000,
			          margin: 0,
			          responsiveClass: true,
			          nav: false, 
			          navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"], 
			          responsive: {
			            0: {
			              items: 1,
			              nav: false
			            },
			            700: {
			              items: 1,
			              nav: false
			            },
			            900: {
			              items: 1,
			              nav: false
			            },
			            1000: {
			              items: 1,
			              nav: false,
			              loop: true,
			              margin: 0
			            }
			          }
			           
			        });
			    }
				   
			});


		</script>