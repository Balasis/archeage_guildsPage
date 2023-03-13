
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
<?php

if(isset($_POST["Section1Bg"])) {

	if($_FILES['fileToUpload']['size'] < 1500000){
	if ($_FILES["fileToUpload"]["name"]=$_SESSION['PlayerName'].".png"){ 
    $target_dir = "Pic/ProfileLogos/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
}
}else{echo "<script>alert('Put an image with less than 1.5Mb size')</script>";}
}



 ?>
<!DOCTYPE html>
<html>
<head>

<style>

</style>

<title>Guilds Discord</title>
	<!--CSS-->
	<link rel="stylesheet" href="NotifyCss.css" type="text/css"/>
	<link rel="stylesheet" href="GuildDiscord.css" type="text/css"/>

   	<!--JAVASCRIPT LIBRARY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="discord.VERSION.min.js"></script>

	<!--Resize For Devices-->
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>

	<!--Creator-->
	<meta name="author" content="John balasis"/>

	<!--AFK KICK-->
	<meta http-equiv="refresh" content="9000"/>

	<meta charset="UTF-8"/>	

</head>


<body style='font-size:0.9vw !important;'>

	<div id="WrapperFromBodyToWholePageDiv">
		<div id="WholePageDiv" style='background-color:transparent !important;'>
			
			<?php include "navbar.php" ?>

			<div style='margin-top:15em;color:red;background-color:rgb(25,25,25);width:85em;padding-bottom:0.5em;font-weight:bold;text-align:center'>Please respect the fact that only members should be able to login to guilds discord.<br>Any member trying to get foreigners inside will get banned from website and discord(and propably from guild too~Guild leader vote on that~).</div>
	<div >
	<iframe id="frameSecond" src="https://titanembeds.com/embed/682661660841869388"   frameborder="0"></iframe>
	</div>

	<div id="LiveChat">
		<div id="LiveChatView"></div>
		<div id="LiveChatType">
				<textarea id="LiveText" style="width:85%;resize:none;padding-left:1em;" maxlength="180"></textarea>
				<button style="width:15%;background-color:orange;color:black;font-size:1.5em">go</button>
		</div>
	</div>
			

					

		</div><!-- <=/ Close WholepageDiv-->
	</div><!-- <=/ Close wrapper-->

	<script src="Javascript/LoginMenu.js"></script>

<script src="Javascript/LoginMenuTwo.js"></script>
<script>
var muted=document.getElementById("MuteMe");
var player=new Vimeo.player(muted);player.setVolume(0);
</script>
	<script src="Javascript/NeonLight.js"></script>
	<script src="Javascript/BlueWingsScroll.js"></script>
	<script src="Javascript/MarginTopTextHeads.js"></script>
	<noscript>
    <style type="text/css">    	
        #WrapperFromBodyToWholePageDiv {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
 
</noscript>
	</body>
	</html>
