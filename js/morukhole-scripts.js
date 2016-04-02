(function($) {
	$('.owl-carousel').owlCarousel({
	    items:10,
	    lazyLoad:true,
	    loop:true,
	    center:true,
	    autoplay:true,
	});

	$('.owl-carousel-header').owlCarousel({
	    items:1,
	    lazyLoad:true,
	    loop:true,
	    center:true,
	    autoplay:true,
		autoplayTimeout:500,
		autoplayHoverPause:true,
	});

	$('.play').on('click',function(){
	    owl.trigger('autoplay.play.owl',[1000])
	})
	$('.stop').on('click',function(){
	    owl.trigger('autoplay.stop.owl')
	})

	$('[data-toggle="tooltip"]').tooltip()
	
})(jQuery);