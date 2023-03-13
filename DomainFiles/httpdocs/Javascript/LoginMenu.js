var count;
var Logout=document.getElementById("LogOutBox");
var MoreBox=document.getElementById("MoreBox");

		function More(){
	Logout.classList.remove("MoveLogOutBox");
	Logout.classList.add("RemoveLogOutBox");

MoreBox.classList.remove("MoreBoxEffectIn");
	MoreBox.classList.add("MoreBoxEffectOut");
	

if  (count==="Remove"){
count="up";
	return(count);		
}else{
	Logout.classList.remove("RemoveLogOutBox");
	Logout.classList.add("MoveLogOutBox");


	MoreBox.classList.remove("MoreBoxEffectOut");
	MoreBox.classList.add("MoreBoxEffectIn");

	count="Remove";	
	return(count);	
}

}
