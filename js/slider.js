/*--------------------------------------------------------------
# Silder Functions
--------------------------------------------------------------*/

	//List - Windows showcase
	$('#windowsShowcaseRight').click(function() {
		var currentSlide = $('.item-showcase-image.slide.active');
		var nextSlide = currentSlide.next();
		currentSlide.fadeOut(0).removeClass('active');
		nextSlide.fadeIn(0).addClass('active');

		if(nextSlide.length == 0){
			$('.item-showcase-image.slide').first().fadeIn(0).addClass('active');
		}
	});


	$('#windowsShowcaseLeft').click(function() {
		var currentSlide = $('.item-showcase-image.slide.active');
		var prevSlide = currentSlide.prev();
		currentSlide.fadeOut(0).removeClass('active');
		prevSlide.fadeIn(0).addClass('active');

		if(prevSlide.length == 0){
			$('.item-showcase-image.slide.active').last().fadeIn(0).addClass('active');
		}
	});

	//Full showcase
	$('#showcaseRight').click(function() {
		var currentSlide = $('.item-showcase-image.slide.active');
		var nextSlide = currentSlide.next();

		currentSlide.fadeOut(0).removeClass('active');
		nextSlide.fadeIn(0).addClass('active');

		if(nextSlide.length == 0){
			$('.item-showcase-image.slide').first().fadeIn(0).addClass('active');
		}
	});

	$('#showcaseLeft').click(function() {
		var currentSlide = $('.item-showcase-image.slide.active');
		var prevSlide = currentSlide.prev();
		currentSlide.fadeOut(0).removeClass('active');
		prevSlide.fadeIn(0).addClass('active');
		
		if(prevSlide.length == 0){
			$('.item-showcase-image.slide').last().fadeIn(0).addClass('active');
		}
	});