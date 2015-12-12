function bumpIt() {

	$('.sh').matchHeight();
	$('.sh2').matchHeight();

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
	}, 80);
});
