$(document).ready(function() {
    //make the closing button
	$('.button-style-click').on('click', '.navbar-toggler-icon', function(){
    	$(this).toggleClass('active');
    });
	
	
	$('.why-us-link').click(function () {
		$('html, body').animate({
			scrollTop: $('.welcome-style').offset().top -20
		}, 800);
	});
	
	  $( function() {
		var state = true;
		$( "#button" ).on( "click", function() {
		  if ( state ) {
			$( "#effect" ).animate({
			  backgroundColor: "#aa0000",
			  color: "#fff",
			  width: 500
			}, 1000 );
		  } else {
			$( "#effect" ).animate({
			  backgroundColor: "#fff",
			  color: "#000",
			  width: 240
			}, 1000 );
		  }
		  state = !state;
		});
	  } );
	
	$('.slick-client').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});
	

});
