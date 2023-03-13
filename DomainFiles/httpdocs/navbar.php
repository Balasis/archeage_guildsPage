		<div id="navbar">
				<header>
					
				<nav>

					<div id="leftBlackWing"><img src="Pic/BlackWing2.png"></div>
					<ul id="navUl">
    				<li id="Logo"><a href="index.php"><img  src="Pic/LogoExtraSmall.png"></a></li>
    				<li id="Forum"><a href="Forum.php">Forum</a></li>
    				<li id="Guilds"><?php
 if  (isset($_SESSION["authenticated"])  &&  $_SESSION["authenticated"]=="true") {
 	    	     echo "<a href='GuildDiscord.php'>Guilds Discord</a>";
 						}else{
 		echo "<div style='color:black;' >Guilds Discord<img style='margin-left:0.3em;margin-top:0.6em;position:absolute;height:auto;width:0.7em;' src='Pic/lock.png'><br><span style='font-size:0.5em;position:absolute;margin-top:-1.7em;color:red;margin-right:-2.5em;'>login to enter</span>";
 	};     
 
 	    ?>
</li>    	
					<li id="Events"><?php
					

 	    if  (isset($_SESSION["authenticated"])  &&  $_SESSION["authenticated"]=="true") {
 	    	     echo "<a href='Events.php'>   Events        </a> "             ;
 						}else{
 		echo " <div id='EventsWithoutLogin'>Events<img src='Pic/lock.png'><div id='HoverEventWithoutLogin'>You need to Login to view Events</div>            </div> ";
 	};     
 
 	    ?></li>
 	



 	<li id="Login">
 		<div id="MoreBox"><div id="DeleteAccount"><a href="deleteAccount.php">Delete <br> Acccount </a></div></div>
 	<!--TO LOGIN OTAN EXI IDI BI MESA                   EPISEIS TO BOX KATW GIA TO LOG OUT -->
 		<div id="LoginName" >
 			<div id="PictureLog" onclick="AppearLogout()">
 		<?php
 		
 	    if  (isset($_SESSION["authenticated"])  &&  $_SESSION["authenticated"]=="true") {


echo "<img id='ProfLog'  src='Pic/ProfileLogos/";
echo $_SESSION['PlayerName'];
echo ".png'";
echo '   onerror="this.onerror=null;this.src=     ';
echo "	'Pic/ProfileLogos/Angelhollow.png '     ";
echo '   "   ';
echo ">";

 	}  

 	  ?>
</div>

<!--=========================================TO LOGIN MENU OTAN EIMAI MESA -->
				<div id="LogOutBox">

<div id="More" onclick="More()"><hr> <div>More</div> <img  src="Pic/Gear.png"><hr> </div>



	<div id="ChangeProfilePictureLabel">
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="Yolo" onchange="ClickItAuto()">
    <input type="submit" value="Upload Image" name="Section1Bg" id="Skoupa">
</form>

		    <label for="Yolo"> <div id="ChangeDaLogoSize">Change <br> Picture <img src="Pic/ChangeLogo.png"></div></label>
		    <hr>
					</div>


		<label for="LogMeOut">			
	<div id="SignOutLabel"> <form method="POST" action=""> <input id="LogMeOut" type="submit" name="LogMeOut" value="Log out"></form>
		Log out  </div> </label>
					</div>

		
			

	
					






</div>


<!--=========================================TO LOGIN TITLE AMA DEN EIMAI MESA -->

 		<div id="LoginTitle">
 							<?php
 					if  (!(isset($_SESSION["authenticated"])  &&  $_SESSION["authenticated"]=="true")) {
 		echo "<a href='Login.php'>   Login        </a> ";
 	};     
 	?>	</div>

 	   </li>
 				
 				

 				
    				</ul>

    				<div id="rightBlackWing"><img src="Pic/BlackWing.png"></div>
				</nav>
				
			</header>
			</div>