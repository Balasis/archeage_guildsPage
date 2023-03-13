var count;



	var Logout=document.getElementById("LogOutBox");

var MoreBox=document.getElementById("MoreBox");


	function AppearLogout(){
		   if(Logout.style.display == "block") { 
		   	Logout.style.display = "none";
		   	MoreBox.classList.remove("MoreBoxEffectOut");
		   	Logout.classList.remove("RemoveLogOutBox");
		   	Logout.classList.remove("MoveLogOutBox");
		   	MoreBox.classList.remove("MoreBoxEffectIn");
		   	count="";
		   }
    else { Logout.style.display = "block";opacity:1; }

	}

function ClickItAuto(){
	document.getElementById('Skoupa').click();
}



