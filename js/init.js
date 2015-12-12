function menuFixed() {
	var menuY = 238;
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
      fixedOn = menuY;

  if (distanceY > fixedOn) {
    $( "#home" ).css("padding-top", 238 );
    $( "#header" ).addClass("fixed");
  } else {
      if ($( "#header" ).hasClass("fixed")) {
				$( "#home" ).css("padding-top", 0 );
        $( "#header" ).removeClass("fixed");
      }
  }
}

function toogleMenu() {
    if ($( "#transition-menu" ).hasClass("showing")) {
			$( "#transition-menu" ).removeClass("showing");
			$( "#mask" ).removeClass("showing");
    }
    else {
			$( "#transition-menu" ).addClass("showing");
			$( "#mask" ).addClass("showing");
    }
}

function init() {

	if (window.addEventListener) {    // For all major browsers, gte IE 9 versions
		window.addEventListener("scroll", menuFixed, false);
	} else if (window.attachEvent) {    // For lt IE 9 versions
		window.attachEvent("onscroll", menuFixed);
	}

	supportsSVG();
}

$( document ).ready(function() {
	init();
	$("#menu").localScroll({
		duration: 800
	});

});
