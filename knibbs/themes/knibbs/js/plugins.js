/* START DOCUMENT READY */
$(document).ready(function(){

	$("a[href^='http:']:not([href*='" + window.location.host + "'])").each(function() {
		$(this).bind('click', function() {
			window.open(this.href);
			return false;
		});
	});
	
	$.localScroll();
	
	if((!navigator.userAgent.match(/iPhone/i)) && (!navigator.userAgent.match(/iPod/i)) && (navigator.userAgent.indexOf('Android')&&navigator.userAgent.indexOf('mobile'))) {
	var w = $(window).width(); 
	console.log(w);
		// Define the height of your two background images.
	  //The image to scroll
		 var backgroundheight = w;

		// Create a random offset for both images' starting positions
	        offset = Math.round(Math.floor(Math.random()* w));
	        offset2 = Math.round(Math.floor(Math.random()* w));
					offset3 = Math.round(Math.floor(Math.random()* w));
					console.group('Offset');
					console.log('Offset: '+offset);
					console.log('Offset2: '+offset2);
					console.log('Offset3: '+offset3);
					console.groupEnd();

		
		function scrollbackground2() {
	                //Ensure all bases are covered when defining the offset.
	   		offset2 = offset2 - 1;
				//console.log('Active Offset2: '+offset2);
			// Put the background onto the required div and animate vertically
	   		$('#med_clouds').css("background-position", offset2 + "px 140px");
	   		// Enable the function to loop when it reaches the end of the image
	   		setTimeout(function() {
				scrollbackground2();
				}, 100
			);
	   	}

		function scrollbackground3() {
	                //Ensure all bases are covered when defining the offset.
	   		offset3 = offset3 - 1;
			// Put the background onto the required div and animate vertically
	   		$('#small_clouds').css("background-position", offset3 + "px 120px");
	   		// Enable the function to loop when it reaches the end of the image
	   		setTimeout(function() {
				scrollbackground3();
				}, 60
			);
	   	}

		// Initiate the scroll
		//scrollbackground();
		scrollbackground2();
		scrollbackground3();

		// Use the offset defined earlier and apply it to the div.
	  $('header').css("background-position", offset + "px 140px");
	  $('#med_clouds').css("background-position", offset2 + "px 140px");
		$('#small_clouds').css("background-position", offset3 + "px 120px");
	}
	
/* END DOCUMENT READY */
});