function menuFixed() {
	if( !($( "body" ).hasClass("fp-viewing-0") )) {
		//$( "#fixed-header" ).addClass("fixed");
	}
	else {
			if ($( "#fixed-header" ).hasClass("fixed")) {
				$( "#fixed-header" ).removeClass("fixed");
			}
	}
}

function toogleMenu() {
    if ($( "#transition-menu" ).hasClass("show")) {
      $( "#transition-menu" ).removeClass("show");
			//$( "#fixed-transition-menu" ).removeClass("show");
			//$( "#mask" ).removeClass("show");
    }
    else {
      $( "#transition-menu" ).addClass("show");
			//$( "#fixed-transition-menu" ).addClass("show");
			//$( "#mask" ).addClass("show");
    }
}

function init() {

	setInterval(function() {
		menuFixed();
	}, 40);
	supportsSVG();
}

$( document ).ready(function() {
	$('#fullpage').fullpage({
		scrollOverflow: true,
		anchors:['home','who-we-are','service-products','contact-us'],
		//menu: '#menu'
	});
	init();


});
