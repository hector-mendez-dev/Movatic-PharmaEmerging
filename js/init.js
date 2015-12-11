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
    if ($( "#fixed-transition-menu" ).hasClass("showing")) {
			$( "#fixed-transition-menu" ).removeClass("showing");
			$( "#fixed-transition-menu" ).css('display','block');
			$( "#mask" ).removeClass("showing");
    }
    else {
			$( "#fixed-transition-menu" ).addClass("showing");
			$( "#mask" ).addClass("showing");
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
