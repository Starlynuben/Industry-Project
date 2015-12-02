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

var url = window.location.href;
	
if(url.search("gallery") >= 0){

Galleria.loadTheme('../galleria/themes/classic/galleria.classic.min.js');
Galleria.run('.galleria');	

}

// Jeditable

$(function(){

	$("[data-url]").each(function(i,el){

		var url =$(el).attr("data-url");
		var options = {
			type:"textarea",
			submitdata:{
				_method:"PUT",
				_token:$("#token").text(),
			},
			submit:"OK"
		};

		$(this).editable(url,options);

	});

});



	



