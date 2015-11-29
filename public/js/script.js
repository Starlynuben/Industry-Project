var bars = document.querySelector("#bars");
var nav = document.querySelector("#nav");

bars.onclick = function(){
	if(nav.className == ""){
		nav.className = "show";
	}else{
		nav.className = "";
	}
}
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 300
      });
    });
