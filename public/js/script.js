//  For the mobile navigation

var bars = document.querySelector("#bars");
var nav = document.querySelector("#nav");

bars.onclick = function(){
	if(nav.className == ""){
		nav.className = "show";
	}else{
		nav.className = "";
	}
}

// Home page slider

$(function(){
  $("#slides").slidesjs({
    width: 940,
    height: 300
  });
});


// Gallery Page

Galleria.loadTheme('../galleria/themes/classic/galleria.classic.min.js');
Galleria.run('.galleria');



