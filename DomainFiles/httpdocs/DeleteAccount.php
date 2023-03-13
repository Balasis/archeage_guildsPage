<?php  session_start();

if (isset($_SESSION['PlayerName'])){ 
$daplayer=$_SESSION['PlayerName'];
$daNumber=$_SESSION['DoubleProtection'];
require '../CS/Cs.php';
/* 2 */
if (isset($_SESSION["ADMIN"])){
$queryAdmin="SELECT NoDoubleLogin FROM adminaccounts WHERE PlayerName='$daplayer'";
$resultAdmin=mysqli_query($conn,$queryAdmin);
$beforeCompareAdmin=mysqli_fetch_assoc($resultAdmin);
$beforeCompareeAdmin=sprintf($beforeCompareAdmin['NoDoubleLogin']);

/*3*/
if ($daNumber==$beforeCompareeAdmin){
	$_SESSION['DoubleLogin']="NoDoubleLogin";
}else{
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
session_start();

 header(sprintf('Location: %s', $GoTo));

};
/*3*/


}else{

$query="SELECT NoDoubleLogin FROM accounts WHERE PlayerName='$daplayer'";
$result=mysqli_query($conn,$query);
$beforeCompare=mysqli_fetch_assoc($result);
$beforeComparee=sprintf($beforeCompare['NoDoubleLogin']);
if ($daNumber==$beforeComparee){
	$_SESSION['DoubleLogin']="NoDoubleLogin";
}else{
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";

session_destroy();
session_start();

 header(sprintf('Location: %s', $GoTo));
} ;

}
/* 2 */
}else{
$GoTo="Login.php";
$_SESSION["authenticated"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));

}




?>










<html>

<head>

<title>Delete Account</title>
	<style>

	</style>
	<link rel="stylesheet" href="NotifyCss.css" type="text/css"/>
<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<meta http-equiv="refresh" content="9000"/>	
<meta charset="UTF-8">
<link rel="stylesheet" href="DeleteAccount.css" type="text/css">

</head>
<body>


	<div id="GameoverChrome">

	<div id="Why">




<!--   HOME BUTTON            -->
		<div id="WraptheHome">

		<div id="Home"><a href="index.php"><img src="Pic/HomeLightsOn.png"></a></div>

	<div id="HomeOut"><a href="index.php"><img src="Pic/HomeLightsOff.png"></a></div>

	<div id="GoHomeText">Get back to home bro</div>		
			</div>


<!--   HOME BUTTON  END           -->



	<div id="Keymom"><B>Farewell Sholdier :'[</B></div>
	<div id="TheSpartans"><img src="Pic/LogoSmall.png"></div>
	<div id="Ahoy">Ouh tha akward momment to even type goodbye...</div>





		<div class="formWrap">

	<div id="SignedUp">Your Account Has been deleted  o/</div>	
															<form method ="Post" id="form" action="">
<input type="text" name="SerialKey" value="" id="SerialKey" placeholder="SerialKey (security reasons)"  onkeypress="CheckSpace(event)" onfocusout="AllNoSpace()" required >
	<label for="submit">
		<div id="SubmitBorder">
				<div id="InsideSubmit">
						<div id="ThreeD"></div>
						<span style="margin-top:2px">Delete Account</span>
				</div>
		</div>
	</label>
  																										<input type="submit" value="" name="submit"  id="submit"></input>  			
    																									</form>


    <div id="MoreInfo">	Hope we play again together at future	</div>       



</div><!--formWrap -->


</div><!-- WHY-->

</div><!--GAME OVER CHROME -->





    
<script>


function AllNoSpace(){
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
/*=========================TRIGGER FUNCTION BY FORM SUBMIT===================================================*/
$_SESSION["id"]=232;
if(isset($_POST['submit']))
{
   funny();
} 
/*===========================================================================================================*/






function funny(){
/*===================================POSTS===================================================================*/
$SerialKey=$_POST['SerialKey'];
/*===========================================================================================================*/

/*==============================CONNECTION STRING=============================================================*/
require '../CS/Cs.php';
/*if( $conn ) { echo  "Connection established";
   }else{ echo "'Connection could not be established.'";	 die( print_r( sqlsrv_errors(), true));}*/

/*============================================================================================================*/

/*==============================Check Serial key=============================================================*/
$keygen="SELECT SerialKeys FROM serialKeys WHERE SerialKeys='$SerialKey'";
$keygenExecute=mysqli_query($conn,$keygen);


if (!($keygenExecute->num_rows>0)) {
				 echo "<script>   document.getElementById('Keymom').innerHTML = 'wrongSerialkey';
				 					document.getElementById('Keymom').style.color = 'red';
				 							  </script>";
				};
/*============================================================================================================*/
$DAPLAY=$_SESSION['PlayerName'];
if ($keygenExecute->num_rows>0) {
	
$Register="DELETE FROM accounts WHERE PlayerName='$DAPLAY'";
$RegisterExecute=mysqli_query($conn,$Register);
if ($RegisterExecute){echo "<script>document.getElementById('Welcome').innerHTML='Account has been deleted.o/'</script>";};



$DeleteKey="DELETE FROM serialkeys WHERE SerialKeys='$SerialKey'";
$DeleteKeyExecute=mysqli_query($conn,$DeleteKey);
if ($DeleteKeyExecute) {echo "<script>document.getElementById('SignedUp').style.display='block';
										document.getElementById('form').style.display='none';
										document.getElementById('Ahoy').style.display='none';
										document.getElementById('MoreInfo').style.display='none';
										document.getElementById('MissclickToLogin').style.display='none';
										document.getElementById('Keymom').style.display='none';
									</script>";
if (file_exists("Pic/ProfileLogos/".$_SESSION['PlayerName'].".png")){
unlink("Pic/ProfileLogos/".$_SESSION['PlayerName'].".png");
};


session_destroy();
								};




	
};
 

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