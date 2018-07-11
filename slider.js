/*--------------------------------------------------------------
# Silder Functions
--------------------------------------------------------------*/
//Windows showcase
$('#windowsShowcaseRight').click(function() {
	var currentSlide = $('.windows-showcase-image.slide.active');
	var nextSlide = currentSlide.next();
	alert("Hello! I am an alert box!!");
	currentSlide.fadeOut(0).removeClass('active');
	nextSlide.fadeIn(0).addClass('active');

	if(nextSlide.length == 0){
		$('.windows-showcase-image.slide').first().fadeIn(0).addClass('active');
	}
});

$('#windowsShowcaseLeft').click(function() {
	console("Hello! I am an alert box!!");
	var currentSlide = $('.windows-showcase-image.slide.active');
	var prevSlide = currentSlide.prev();
	currentSlide.fadeOut(0).removeClass('active');
	prevSlide.fadeIn(0).addClass('active');
	
	if(prevSlide.length == 0){
		$('.windows-showcase-image.slide.active').last().fadeIn(0).addClass('active');
	}
});

//Full showcase
$('#fullShowcaseRight').click(function() {
	var currentSlide = $('.full-showcase-image.slide.active');
	var nextSlide = currentSlide.next();

	currentSlide.fadeOut(0).removeClass('active');
	nextSlide.fadeIn(0).addClass('active');

	if(nextSlide.length == 0){
		$('.full-showcase-image.slide').first().fadeIn(0).addClass('active');
	}
});

$('#fullShowcaseLeft').click(function() {
	var currentSlide = $('.full-showcase-image.slide.active');
	var prevSlide = currentSlide.prev();
	currentSlide.fadeOut(0).removeClass('active');
	prevSlide.fadeIn(0).addClass('active');
	
	if(prevSlide.length == 0){
		$('.full-showcase-image.slide.active').last().fadeIn(0).addClass('active');
	}
});



