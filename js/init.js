function init() {

	if (window.addEventListener) {                // For all major browsers, gte IE 9 versions
		window.addEventListener("scroll", menuFixed, false);
	} else if (window.attachEvent) {              // For lt IE 9 versions
		window.attachEvent("onscroll", menuFixed);
	}

	supportsSVG();
}

function toogleMenu() {
    if ($( "#transition-menu" ).hasClass("show")) {
      $( "#transition-menu" ).removeClass("show");
    }
    else {
      $( "#transition-menu" ).addClass("show");
    }
}

if (window.addEventListener) {                // For all major browsers, gte IE 9 versions
	window.addEventListener("load", init, false);
} else if (window.attachEvent) {              // For lt IE 9 versions
	window.attachEvent("onload", init);
}
$( document ).ready(function() {
	init();
	$('#fullpage').fullpage();


});
