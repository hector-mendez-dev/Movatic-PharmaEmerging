function bumpIt() {

	$('.sh').matchHeight();
	$('.sh2').matchHeight();
	$('.data').matchHeight({
		target: $('.contact')
	});

 }
 var didResize = false;

$( document ).ready(function() {
	bumpIt();

	$(window).resize(function() {
	  didResize = true;
	});

	setInterval(function() {
	  if(didResize) {
		didResize = false;
		bumpIt();
	  }
		//$.fn.fullpage.reBuild();
	}, 80);
});
