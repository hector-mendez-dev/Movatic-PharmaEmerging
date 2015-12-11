function menuFixed() {
	if( !($( "body" ).hasClass("fp-viewing-home") )) {
		$( "#fixed-header" ).addClass("fixed");
	}
	else {
			if ($( "#fixed-header" ).hasClass("fixed")) {
				$( "#fixed-header" ).removeClass("fixed");
			}
	}
}

function toogleMenu() {
    if ($( "#fixed-transition-menu" ).hasClass("show")) {
			$( "#fixed-transition-menu" ).removeClass("show");
			$( "#fixed-transition-menu" ).css('display','block');
			$( "#mask" ).removeClass("show");
      //$( "#transition-menu" ).removeClass("show");
    }
    else {
			$( "#fixed-transition-menu" ).addClass("show");
			$( "#mask" ).addClass("show");
      //$( "#transition-menu" ).addClass("show");
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
	});
	init();


});
