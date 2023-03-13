<?php 
session_start();
?>


<html>

<head>

<title>Guild Sign up</title>
	<style>

	</style>
<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<meta http-equiv="refresh" content="9000"/>	
<meta charset="UTF-8">
<link rel="stylesheet" href="SignUp.css" type="text/css">

</head>
<body>

	<div id="GameoverChrome">

	<div id="Why">
		<div id="WraptheHome">
		<div id="Home"><a href="index.php"><img src="Pic/HomeLightsOn.png"></a></div>
	<div id="HomeOut"><a href="index.php"><img src="Pic/HomeLightsOff.png"></a></div>
	<div id="GoHomeText">Go home</div>		
			</div>
	<div id="UsernameCheck"></div>
	<div id="PlayerNameCheck"></div>
	<div id="Keymom"><B>BE CAREFULL KEYS ARE ONLY FOR 1 USE</B></div>
	<div id="TheSpartans"><img src="Pic/LogoSmall.png"></div>
	<div id="Ahoy">Ahoy member.Sign in so you can unlock the view-event panel</div>		
	<div class="formWrap">

	<div id="SignedUp">Welcome aboard!!!<br> Get back to <a href="index.php">home page</a></div>	
		<form id="form" class="form" method="POST" action="">			
<input type="text" name="Username"  id="Username" 
placeholder="Username" onkeypress="CheckSpace(event)" onfocusout="AllNoSpace()" required />
<input type="password" name="Password" value="" id="Password" 
placeholder="Password" onkeypress="CheckSpace(event)" onfocusout="AllNoSpace()" required >
<div style="display:block;position:absolute">
	<label for="PasswordToText">
	<input type="checkbox" id="PasswordToText" name="PasswordToText" onchange="checkbox()" >
	<p id="ShowPassword">Show Password</p>
</label>
</div>
<input type="text" name="PlayerName" value="" id="PlayerName" 
placeholder="Name of your character in game" onkeypress="CheckSpace(event)" onfocusout="AllNoSpace()"  required> 
<input type="text" name="SerialKey" value="" id="SerialKey" 
placeholder="SerialKey"  onkeypress="CheckSpace(event)" onfocusout="AllNoSpace()" required >
	<label for="submit">
		<div id="SubmitBorder">
			<div id="InsideSubmit">
			<div id="ThreeD">				
			</div>
			<span style="margin-top:2px">Sign Up</span></div>
		</div></label>
  <input type="submit" value="" name="submit"  id="submit"></input>  			
    </form>

    <div id="MoreInfo">
    	No Serial key? Check here for <button id="Infobutton" onclick="OpenRegister()">info</button></div>
    						<div id="MissclickToLogin"><a href="Login.php">Missclicked here?Go back to Login</a></div>
       
   <!--=====================================box Info======================================--> 						
	<div id="Register">
		<span id="CloseRegister" onclick="CloseRegister()">X</span>
		<p>Serial keys for sign up are provided by the guild leader after the invite into the guild.If somehow you still dont
		have a key while you are already a member of the guild contact me at <span style="color:lightgreen">giovani1994a@gmail.com</span>.Do not expect instant responce from mail since I will need to check remotely(most secure way)if you are trully a member of the guild to provide you one. </p>
			</div><!--Register -->
<!--=====================================END box Info======================================--> 


</div>
</div>
</div>
    
<script>
function checkbox(){
if (document.getElementById("PasswordToText").checked){
	document.getElementById('Password').type="text";
}else{
	document.getElementById('Password').type="password";
}


}



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




 <script>





function OpenRegister(){
	var Register=document.getElementById("Register");
	Register.style.display="flex";
}

function CloseRegister(){
	var Register=document.getElementById("Register");
	Register.style.display="none";
}
 </script>





<?php 
/*=========================TRIGGER FUNCTION BY FORM SUBMIT===================================================*/
$_SESSION["id"]=232;
if(isset($_POST['submit']))
{
   funny();
} 
/*===========================================================================================================*/






function funny(){
/*===================================POSTS===================================================================*/

$Username=$_POST['Username'];
$Password=$_POST['Password'];
$PlayerName=$_POST['PlayerName'];
$SerialKey=$_POST['SerialKey'];
/*===========================================================================================================*/






/*==============================CONNECTION STRING=============================================================*/
require '../CS/Cs.php';
/*if( $conn ) { echo  "Connection established";
   }else{ echo "'Connection could not be established.'";	 die( print_r( sqlsrv_errors(), true));}*/

/*============================================================================================================*/







/*==============================Check If Username Exist=============================================================*/
$UsernameCheck="SELECT Username FROM accounts WHERE Username='$Username'";
$UsernameCheckExecute=mysqli_query($conn,$UsernameCheck);
if ($UsernameCheckExecute->num_rows>0){
				 echo "<script>   document.getElementById('UsernameCheck').innerHTML = 'Username already exist';  </script>";
				};

/*============================================================================================================*/
/*==============================Check Serial key=============================================================*/
$work="SELECT PlayerName FROM accounts WHERE PlayerName='$PlayerName'";
$workExecute=mysqli_query($conn,$work);

if ($workExecute->num_rows>0){
				 echo "<script>   document.getElementById('PlayerNameCheck').innerHTML = 'Theres already a player with that name';  </script>";
				};
/*============================================================================================================*/
/*==============================Check Serial key=============================================================*/
$keygen="SELECT SerialKeys FROM serialKeys WHERE SerialKeys='$SerialKey'";
$keygenExecute=mysqli_query($conn,$keygen);


if (!($keygenExecute->num_rows>0)) {
				 echo "<script>   document.getElementById('Keymom').innerHTML = 'wrongSerialkey';  </script>";
				};
/*============================================================================================================*/


if (  $UsernameCheckExecute->num_rows>0 || $workExecute->num_rows>0 || !($keygenExecute->num_rows>0)   ){
	

}else{
$Register="INSERT INTO accounts (Username,Password,PlayerName) VALUES ('$Username','$Password','$PlayerName')";
$RegisterExecute=mysqli_query($conn,$Register);
if ($RegisterExecute){echo "<script>document.getElementById('Welcome').innerHTML='Welcome bro'</script>";};
$DeleteKey="DELETE FROM serialkeys WHERE SerialKeys='$SerialKey'";
$DeleteKeyExecute=mysqli_query($conn,$DeleteKey);
if ($DeleteKeyExecute) {echo "<script>document.getElementById('SignedUp').style.display='block';
										document.getElementById('form').style.display='none';
										document.getElementById('Ahoy').style.display='none';
										document.getElementById('MoreInfo').style.display='none';
										document.getElementById('MissclickToLogin').style.display='none';
										document.getElementById('Keymom').style.display='none';
									</script>";

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






								};




	
};
 
/*
$result=mysqli_query($conn,$query);

if ($result->num_rows > 0) {
	function sessionStart($lifetime,$path,$domain,$secure,$httponly){
	session_set_cookie_params($lifetime,$path,$domain,$secure,$httponly);

	session_start();}
	sessionStart(0,'/',"localhost/login.php",false,true);
	
	$_SESSION["authenticated"] = 'true';	
	session_regenerate_id(true);
 	header('Location: index.php');
	 } 
	 else 
	 	{
	 	echo "paparies";
	};*/

}

	?>


<noscript>
    <style type="text/css">    	
        #GameOverChrome {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
    <div class="noscriptmsg">
</div>
</noscript>

	</body>
	</html>