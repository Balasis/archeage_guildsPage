<?php  session_start();

if (isset($_SESSION['PlayerName'])){ 
$daplayer=$_SESSION['PlayerName'];
$daNumber=$_SESSION['DoubleProtection'];
require '../CS/Cs.php';
/*if( $conn ) { echo  "('Connection established.'')";
   }else{ echo "'Connection could not be established.'";	 die( print_r( sqlsrv_errors(), true));}  */



if (isset($_SESSION["ADMIN"])){
$queryAdmin="SELECT NoDoubleLogin FROM adminaccounts WHERE PlayerName='$daplayer'";
$resultAdmin=mysqli_query($conn,$queryAdmin);
$beforeCompareAdmin=mysqli_fetch_assoc($resultAdmin);
$beforeCompareeAdmin=sprintf($beforeCompareAdmin['NoDoubleLogin']);
if ($daNumber==$beforeCompareeAdmin){
	$_SESSION['DoubleLogin']="NoDoubleLogin";
}else{
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
session_start();
$_SESSION['DoubleLogin']="DoubleLogin";
 header(sprintf('Location: %s', $GoTo));

};

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
$_SESSION['DoubleLogin']="DoubleLogin";
 header(sprintf('Location: %s', $GoTo));

};



}



}
?>


<?php 
if (isset($_POST['LogMeOut'])){
	$url="Index.php";
$_SESSION["authenticated"]="false";
session_destroy();
 header(sprintf('Location: %s', $url));
}    ?>



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
#AdminSettings{
position:fixed;
left:3em;
top:15em;
color:white;
background-color:orange;
width:10em;
border-radius:15px 15px 15px 15px;

}
.AdminLinks{
display:block;
	width:100%;
	height:100%;
	text-align:center;

	
}
.AdminLinks:hover{
	background-color:red;
}
.AdminTd{

border:0.2em solid black;
}
</style>
<title>Guild page</title>
	<!--CSS-->
	<link rel="stylesheet" href="NotifyCss.css" type="text/css"/>
	<link rel="stylesheet" href="myCss.css" type="text/css"/>

   	<!--JAVASCRIPT LIBRARY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!--Resize For Devices-->
	<meta name="viewport" content="width=device-width ,initial-scale=1"/>

	<!--Creator-->
	<meta name="author" content="John balasis"/>

	<!--AFK KICK-->
	<meta http-equiv="refresh" content="9000"/>

	<meta charset="UTF-8"/>	

</head>


<body>
<?php
if  (isset($_SESSION["ADMIN"])  &&  $_SESSION["ADMIN"]=="true"){
	
	echo "<table id='AdminSettings'>";


	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='edit.php'>Main Page</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditSectionOne.php'>Section One</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditSectionTwo.php'>Section Two</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditSectionThree.php'>Section Three</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditSectionFour.php'>Section Four</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditForEvents.php'>Specific Day<br> Events</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditForDailyEvents.php'>Daily Events</a></td>";
	echo "</tr>";



	echo "<tr>";
	echo "<td class='AdminTd'><a class='AdminLinks' href='EditForLimitEvents.php'>DateRange Events</a></td>";
	echo "</tr>";



	echo "</table>";
	
}

 ?>
	<div id="WrapperFromBodyToWholePageDiv">
		<div id="WholePageDiv">
			
			<?php include "navbar.php" ?>

		
			

				<!--VIDEO BEHIND MENU-->
				<div id="DivOfVideo">
				
				<iframe id="MuteMe" src="https://player.vimeo.com/video/354042013?muted=1&autoplay=1&loop=1" muted="muted"  allow="autoplay; fullscreen" allowfullscreen></iframe>

				<!--<video id="video"  autoplay="autoplay"

				src="https://redirect.veoh.com/flash/p/2/v1420011108WdWKADT/l142001110.mp4?ct=452bfa1560185f02a6f4bd268667a561469fdd51a4791292" muted="muted" autoplay="autoplay" type="mp4" preload="auto"
				playinline="playinline" loop>

				</video>-->
				</div>
				<!--VIDEO  END-->

			<div id="AfterVideo">
<!--Wings and shield-->
<div id="ChangeTestLeft"><img src="Pic/LeftWing.png"></div>
<div id="ChangeTest"><img src="Pic/Shield2.png"></div>
<div id="ChangeTestRight"><img src="Pic/RightWing.png"></div>
<!--End-->

			
				<div id="DescriptionDivs">
										
									<div  id="Section1" class="DescriptionDiv">
										<div id="WrapSection1">					   
											<div class="headtext" id="Section1Head">
												<p><?php include "Text/DescriptionHead/Section1H.txt" ?></p>
												</div>
											<div class="DescriptionTextDiv" id="Section1Text">
									 			<p><?php include "Text/DescriptionTextDiv/Section1.txt" ?>
									 	         </p>
												</div> 
											<div id="Section1ButtonDiv" class="buttonThemeOuterDiv"> 
												<div id="Section1Link1"><a  href="Section1.php">Details</a></div>  </div>	
										</div>
									</div>


									<div  id="Section2" class="DescriptionDiv">
										<div id="WrapSection2">	
												<div class="headtext" id="Section2Head">
													<p><?php include "Text/DescriptionHead/Section2H.txt" ?></p>
												</div>
												<div class="DescriptionTextDiv" id="Section2Text">
									 			<p><?php include "Text/DescriptionTextDiv/Section2.txt" ?></p>
												</div> 
												<div id="Section2ButtonDiv" class="buttonThemeOuterDiv"> 
													<div id="Section2Link1"><a  href="Section2.php">Details</a></div>  </div>
											</div><!--WrapJoinUs-->
										</div><!--New Close-->


										<div  id="Section3" class="DescriptionDiv">
										<div id="WrapSection3">					   
											<div class="headtext" id="Section3Head">
												<p><?php include "Text/DescriptionHead/Section3H.txt" ?></p>
												</div>
											<div class="DescriptionTextDiv" id="Section3Text">
									 			<p><?php include "Text/DescriptionTextDiv/Section3.txt" ?>
									 	         </p>
												</div> 
											<div id="Section3ButtonDiv" class="buttonThemeOuterDiv"> 
												<div id="Section3Link1"><a  href="Section3.php">Details</a></div>  </div>	
										</div>
									</div>

										<div  id="Section4" class="DescriptionDiv">
										<div id="WrapSection4">					   
											<div class="headtext" id="Section4Head">
												<p><?php include "Text/DescriptionHead/Section4H.txt" ?></p>
												</div>
											<div class="DescriptionTextDiv" id="Section4Text">
									 			<p><?php include "Text/DescriptionTextDiv/Section4.txt" ?>
									 	         </p>
												</div> 
											<div id="Section4ButtonDiv" class="buttonThemeOuterDiv"> 
												<div id="Section4Link1"><a  href="Section4.php">Details</a></div>  </div>	
										</div>
									</div>
				</div><!--<=/Close Description Divs-->
				
			</div><!--<=/Close AfterVideo -->
<div style="margin-top:1em;margin-bottom:5em;color:white;"><p>I will be removed Soon just to keep the space</p></div>
					

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
