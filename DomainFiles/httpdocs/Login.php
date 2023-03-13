<?php 
session_start();

if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] = 'true') {
    header('Location: index.php');
	exit();
}
/*test*/



/*test*/

function funny(){
$Username=$_POST['Username'];
$Password=$_POST['Password'];
require '../CS/Cs.php';
/*if( $conn ) { echo  "('Connection established.'')";
   }else{ echo "'Connection could not be established.'";	 die( print_r( sqlsrv_errors(), true));}  */

if ($Username=="Admin"){
$queryAdmin="SELECT Username,Password FROM adminaccounts WHERE Username='$Username'AND Password='$Password'";
$resultAdmin=mysqli_query($conn,$queryAdmin);

if ($resultAdmin->num_rows > 0) {



	$GetPlayerName="SELECT PlayerName FROM adminaccounts WHERE Username='$Username'AND Password='$Password'";
	$GoGet=mysqli_query($conn,$GetPlayerName);
	$GoG=mysqli_fetch_assoc($GoGet);
	$Go=sprintf($GoG['PlayerName']);

	$_SESSION['PlayerName']=$Go;
	$DoubleProtection=rand(10000,20000);
	$_SESSION['DoubleProtection']=$DoubleProtection;
	$DoubleProtectionQuery="UPDATE adminaccounts SET NoDoubleLogin='$DoubleProtection'  WHERE Username='$Username'AND Password='$Password'  ";
	$DoubleProtectionQueryExecute=mysqli_query($conn,$DoubleProtectionQuery);

	$_SESSION["authenticated"] = 'true';
	$_SESSION["ADMIN"] = 'true';
	$_SESSION["error"] = 'false';
	session_regenerate_id(true);
 	header('Location: index.php');
	 } 
	 else 
	 	{
	 $_SESSION["error"] = 'true';
	};

}else{  



$query="SELECT Username,Password FROM accounts WHERE Username='$Username'AND Password='$Password'";
$result=mysqli_query($conn,$query);





if ($result->num_rows > 0) {



	$GetPlayerName="SELECT PlayerName FROM accounts WHERE Username='$Username'AND Password='$Password'";
	$GoGet=mysqli_query($conn,$GetPlayerName);
	$GoG=mysqli_fetch_assoc($GoGet);
	$Go=sprintf($GoG['PlayerName']);

	$_SESSION['PlayerName']=$Go;
	$DoubleProtection=rand(10000,20000);
	$_SESSION['DoubleProtection']=$DoubleProtection;
	$DoubleProtectionQuery="UPDATE accounts SET NoDoubleLogin='$DoubleProtection'  WHERE Username='$Username'AND Password='$Password'  ";
	$DoubleProtectionQueryExecute=mysqli_query($conn,$DoubleProtectionQuery);

	$_SESSION["authenticated"] = 'true';
	$_SESSION["error"] = 'false';
	session_regenerate_id(true);
 	header('Location: index.php');
	 } 
	 else 
	 	{
	 $_SESSION["error"] = 'true';
	};

}



}



$_SESSION["id"]=232;
if(isset($_POST['submit']))
{
   funny();
} 
	?>




<html>
<head>
<title>Guild Login</title>
	<style>

	</style>
<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<meta http-equiv="refresh" content="9000"/>	
<meta charset="UTF-8">
<link rel="stylesheet" href="Login.css" type="text/css">

</head>
<body>
	<div id="GameoverChrome">
	<div id="Why">
			<div id="WraptheHome">
		<div id="Home"><a href="index.php"><img src="Pic/HomeLightsOn.png"></a></div>
	<div id="HomeOut"><a href="index.php"><img src="Pic/HomeLightsOff.png"></a></div>
	<div id="GoHomeText">Go home</div>	
			</div>
		<div id="WrongLogin"><?php if  (isset($_SESSION["error"])  &&   $_SESSION["error"]=="true") {echo "Wrong username or password." ;};  ?></div>
	<img id="PicaStandUp" src="Pic/PichaStands.gif">
	<img id="PicaStandUsername" src="Pic/PichaStands.gif">
	<div class="formWrap">
	
	<div id="TheSpartans"><img src="Pic/LogoSmall.png"></div>
	<div id="Ahoy">Ahoy member.Sign in so you can unlock the view-event panel</div>
		<form class="form" method="POST" action="">			
<input type="text" name="Username" value="" id="Username" placeholder="Username"
  onfocus="Push()" onkeypress="CheckSpace(event)" onfocusout="PushBack(),AllNoSpace()"/>
		<input type="password" name="Password" value="" onfocusout="AllNoSpace()" id="Password" onkeypress="CheckSpace(event)" placeholder="Password"  >
	<label for="submit">
		<div id="SubmitBorder">
			<div id="InsideSubmit">
			<div id="ThreeD">				
			</div>
			<span style="margin-top:2px">Login</span></div>
		</div></label>
  <input type="submit" value="" name="submit"  id="submit"></input>  			
    </form>

    <div id="MoreInfo">
    	Click here for sign up <button id="Infobutton" onclick="OpenRegister()">info</button></div>
    						<div id="SignUpLink"><a href="Signup.php">Sign up</a></div>
	<div id="Register">
		<span id="CloseRegister" onclick="CloseRegister()">X</span>
		<p>To register you will need to have a serial key provided
	by our guild leader.In case you are already a member in our guild but guild leader
	didnt provide you a key yet, you may send me an email at 
	<span style="color:lightgreen">giovani1994a@gmail.com</span>.</p>
			</div><!--Register -->
</div>
</div>
</div>
 <script>

function OpenRegister(){
	var Register=document.getElementById("Register");
	Register.style.display="flex";
}

function CloseRegister(){
	var Register=document.getElementById("Register");
	Register.style.display="none";
}


 	function Pikatsu(){
 var picha=document.getElementById("Pica");
 var PicaStandUp=document.getElementById("PicaStandUp");
 
}
 </script>


<script>
var Ahoy=document.getElementById("Ahoy");
var User=document.getElementById("Username");
var Pass=document.getElementById("Password");
if ((User.value)!=""){
Pass.classList.add("really");
Pass.classList.add("PassOpacity");
Ahoy.classList.add("AhoyKeyframe");
PicaStandUp.classList.add("PicaStandUp");



}else{
Pass.classList.remove("PassOpacity");	
}




function Push(){
var Ahoy=document.getElementById("Ahoy");
var User=document.getElementById("Username");
var Pass=document.getElementById("Password");
if ((User.value)!=""){

Pass.classList.add("PassOpacity");


}else{

Pass.classList.remove("PassOpacity");	
}
Ahoy.classList.remove("AhoyKeyframeBack");
Ahoy.classList.add("AhoyKeyframe");

	Pass.classList.remove("reallyNow");
	Pass.classList.add("really");


}
function PushBack(){
	var Ahoy=document.getElementById("Ahoy");
	var User=document.getElementById("Username");
	var Pass=document.getElementById("Password");
	if ((User.value)!=""){
Pass.classList.add("PassOpacity");
}else{
Ahoy.classList.add("AhoyKeyframeBack");
Pass.classList.remove("PassOpacity");
Pass.classList.add("reallyNow");	
}
	
}
</script>
<script>

function AllNoSpace(){
  var UserDeny = document.getElementById("Username").value;
  var res = UserDeny.replace(/\s+/g,"").replace("<script","");

  document.getElementById("Username").value = res;
	

  var PassDeny = document.getElementById("Password").value; 
  var gr = PassDeny.replace(/\s+/g,"").replace("<script","");
  document.getElementById("Password").value = gr;
	

  var PlayerDeny = document.getElementById("PlayerName").value; 
  var erw = PlayerDeny.replace(/\s+/g,"").replace("<script","");
  document.getElementById("PlayerName").value = erw;
	    

  var SerialDeny = document.getElementById("SerialKey").value; 
  var we = SerialDeny.replace(/\s+/g,"").replace("<script","");
  document.getElementById("SerialKey").value = we;
	
}


   
function CheckSpace(event)
{
   if(event.which ==32)
   {
      event.preventDefault();
      return false;
   }
}




</script>


<?php
if  (isset($_SESSION["DoubleLogin"])  &&   $_SESSION["DoubleLogin"]=="DoubleLogin"){
	echo "<script> alert('Double Login');</script>";
	$_SESSION["DoubleLogin"]="NoDoubleLogin";
}

?>



<noscript>
    <style type="text/css">    	
        #GameOverChrome {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
    <div class="noscriptmsg">

</noscript>




	</body>
	</html>