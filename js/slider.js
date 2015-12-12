$(function() {


  //cache DOM elements
  var $slider = $('#slider');
  var $wrapper = $('.wrapper', $slider);
  var $slides = $('.sp_slides', $wrapper);
  var $slide = $('.sp_slide', $slides);
  var $slide_prev = $('#slide_prev', $slider);
  var $slide_next = $('#slide_next', $slider);

	//adding final slides
	$slide.first().clone().appendTo( $slides );
	$slide = $('.sp_slide', $slides);
  var slidelenght = $slide.length;

  //setting responsive values
  var slidewidth = 100 / slidelenght;
  var slideswidth = slidelenght * 100;
  $slides.css('width', slideswidth + "%");
  $slide.css('width', slidewidth + "%");

  //adding index
  var $slider_index = $('#slider_index', $slider);
  var $index = $('.index', $slider_index);
  for (i = 0; i < slidelenght-2; i++)
		$index.first().clone().appendTo( $slider_index );

  //configuration
  var animationSpeed = 1000;//500
  var pause = 8000;//8000
  var currentSlide = 1;
  var buttonOpacity = 0.6;
  var currentButtonOpacity = 0.9;

  var interval;

  function set_index(current) {
    $('.index', $slider_index).css({
      'opacity' : buttonOpacity
    });
    $('.index:nth-child(' + (current)  + ')', $slider_index).css({
      'opacity' : currentButtonOpacity
    });
  }
  set_index(1);

  function startSlider() {
      interval = setInterval(function() {
    		currentSlide++;
    		go_to_slide(currentSlide);
      }, pause);
  }

	function go_to_slide(current){

		if (currentSlide === slidelenght) {
			$slides.animate({
				'margin-left': '-' + ((current-1) * 100) + '%'
			},
			animationSpeed,
			function(){
				$slides.css('margin-left', '0%');
			});
			currentSlide = 1 ;

		}
		else if (currentSlide === 0) {
			$slides.css('margin-left', '-' + ((slidelenght-1) * 100) + '%');
			$slides.animate({
				'margin-left': '-' + ((slidelenght-2) * 100) + '%'
			},
			animationSpeed
			);
			currentSlide = slidelenght-1 ;
		}
		else{
			$slides.animate({
					'margin-left': '-' + ((current-1) * 100) + '%'
  		},
  		animationSpeed
  		);
  	}
    set_index(currentSlide);
  }

  function go_to_slide_index(){
    currentSlide = $('.index', $slider_index).index(this) + 1;
    set_index(currentSlide);
    go_to_slide(currentSlide);
  }


  function pauseSlider() {
      clearInterval(interval);
  }

  $slider
      .on('mouseenter', pauseSlider)
      .on('mouseleave', startSlider);
  $('.index', $slider_index)
      .on('click', go_to_slide_index);

  startSlider();


});﻿
