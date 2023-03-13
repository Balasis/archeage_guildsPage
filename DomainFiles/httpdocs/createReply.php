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


if (!isset($_GET['p'])){


$GoTo="Login.php";
$_SESSION["authenticated"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));


}

 ?>

<?php
if (isset($_POST['changedR'])){

$ChangedTextt=$_POST['MainText'];
$ReplyTo=$_GET['p'];
$QuestTopic=mysqli_query($conn,"SELECT GroupOfPost,postedBy FROM post WHERE id='$ReplyTo'");
$TrQuestTopic=mysqli_fetch_array($QuestTopic,MYSQLI_ASSOC);
$IdOfChange=$TrQuestTopic['GroupOfPost'];
$DaPlayerName=$_SESSION['PlayerName'];
$StartedAt=gmdate("Y-m-d "."h:i:s");
$resultChange=mysqli_query($conn,"INSERT INTO post(postedBy,postedAt,postText,GroupOfPost) VALUES ('$DaPlayerName','$StartedAt','$ChangedTextt','$IdOfChange') ");


if (isset($_SESSION["ADMIN"]) && $_SESSION["ADMIN"]=="true"){	
	$ReturnItBack=mysqli_query($conn,"UPDATE adminaccounts SET NumberOfPosts=NumberOfPosts + 1 Where PlayerName='$DaPlayerName' ");
	$ReturnAgain=mysqli_query($conn,"UPDATE topic SET AdminPost=AdminPost + 1 Where Id='$IdOfChange'");

}else{

	$ReturnItBack=mysqli_query($conn,"UPDATE accounts SET NumberOfPosts=NumberOfPosts + 1 Where PlayerName='$DaPlayerName' ");
}


$redirectInfo=mysqli_query($conn,"SELECT GroupOfTopic,StartedBy,Notify From topic Where Id='$IdOfChange'");
$redirectInfoTrans=mysqli_fetch_array($redirectInfo,MYSQLI_ASSOC);
$idfor=$redirectInfoTrans['GroupOfTopic'];
$AllowNotify=$redirectInfoTrans['Notify'];
$OwnerOfT=$redirectInfoTrans['StartedBy'];

if ($AllowNotify==0){
$NotificationAdd=mysqli_query($conn,"INSERT INTO notificationtopic(whichTopic,OwnerOfTopic) VALUES ('$IdOfChange','$OwnerOfT')");
}


$Replytoo=$TrQuestTopic['postedBy'];
$NailIt=mysqli_query($conn,"SELECT id FROM post WHERE postedBy='$DaPlayerName' AND postedAt='$StartedAt' AND postText='$ChangedTextt' AND GroupOfPost='$IdOfChange'");
$Nailed=mysqli_fetch_array($NailIt,MYSQLI_ASSOC);
$RewardNail=$Nailed['id'];
$NotifyReplyP=mysqli_query($conn,"INSERT INTO reply(ReplyTo,InTopic,ReplyFrom,ReplyText,postedAt,IdOfPostTable) VALUES ('$Replytoo','$IdOfChange','$DaPlayerName','$ChangedTextt','$StartedAt','$RewardNail')");


$count=mysqli_query($conn,"SELECT COUNT(id) AS Total FROM post  Where GroupOfpost='$IdOfChange' ");
$row = $count->fetch_row();
$MaxRows=$row[0];
$per_page=10;
$Allpages=ceil($MaxRows/$per_page);
$AllpagesM=$Allpages-1;
$GoToR="posts.php?id=".$idfor."&topic=".$IdOfChange."&postpage=".$AllpagesM;
 header(sprintf('Location: %s', $GoToR));



}





 ?>




<?php 
if (isset($_POST['LogMeOut'])){
	$url="Index.php";
$_SESSION["authenticated"]="false";
session_destroy();
 header(sprintf('Location: %s', $url));
}    ?>



<!DOCTYPE html>
<html>
<head>

<style>
body{
	min-height:100vh;;
	overflow-x:hidden;
	padding:0;
	margin:0;
	background-color:black;
	cursor:url(Curs/wow.cur),auto;
	margin:auto;
	font-family: Verdana, sans-serif;
	background-image:url(Pic/ForumBg.png);
	background-size:100% 100%;
	  background-position:;
  background-repeat:no-repeat;
  font-size:0.7vw;
}
a{  cursor:url(Curs/Hover.cur),auto;    
	text-decoration:none;
	color:inherit;
}
#WrapperFromBodyToWholePageDiv{
	max-width:112.5em;
	margin:auto;
	padding:0;
	
	background-color:transparent;
	
	background-position:50% 50%;
}
#WholePageDiv{
	padding:0;
	margin:0;

	background-color:;
	max-width:98.6em;
	
	margin:auto;

	
}

	.buttons{
		color:white;
		text-align:center;
		width:2em;
		height:1.1em;
		display:none;
		margin-left:0.2em;
		margin-right:0.2em;
		margin-top:0.1em;
		border-width:0.2em;
		background-color:white;
		border-style:solid;
		border-color:grey;
		background-color:lightblue;
		border-radius:360%;
	}
	.buttons:active{
		background-color:green;
	}
	.buttons:hover{
		border-color:rgb(91,0,0);
	}

.GoToFirstPage{
	color:white;
		text-align:center;
		width:6em;
		height:1.3em;
		display:inline-block;
		margin-left:0.1em;
		margin-right:0.1em;
		border-width:0.2em;
		background-color:white;
		border-style:solid;
		border-color:grey;
		background-color:lightblue;
		
}
.GoToFirstPage:hover{
border-color:rgb(91,0,0);
}
.GoToLastPage{
	color:white;
		text-align:center;
		width:6em;
		height:1.3em;
		display:inline-block;
		margin-left:0.1em;
		margin-right:0.1em;
		border-width:0.2em;
		background-color:white;
		border-style:solid;
		border-color:grey;
		background-color:lightblue;
}
.GoToLastPage:hover{
border-color:rgb(91,0,0);	
}


/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/
/*===============================================================nav starts here ============================================*/







#navbar{
	display:block;
	z-index:490;
	background-color:;
	position:fixed;
	width:100%;
	max-width:93.75em;
	padding:0;
	top:-0.9em;
	margin-left:3em;

	
	
}
#navUl{
	position:relative;
	z-index:450;
	padding:0;
	margin:0;
	
	background-color:transparent;
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-position:center;
	width:100%;
	max-width:93.6em;
	background-image:url(Pic/navBG.png);
	min-height:5em;
	display:flex;
	border-radius:;
	justify-content:space-between;
	flex-wrap:nowrap;

}
#navUl li{
margin-top:-0.3em;
	padding:0.5em;
	font-family:Bookman;
	
	white-space:nowrap;
	max-height:1.5em;
	
	font-size:2.5em;
	line-height:1.5em;
	color:white;
	list-style-type:none;
}

#navUl a{
	display:inline-block;
	color:rgb(36,36,36);
}
#navUl a:hover {
	animation-fill-mode: forwards;
	color:white;

	animation-name:NavHoverLinks;
	animation-duration:2s;
	animation-iteration-count:infinite;
}
@keyframes NavHoverLinks{
	0%{text-shadow: 0px 0px 0px  #5b0000;}
	50%{text-shadow: 0px 0px 25px  #5b0000;}
	100%{text-shadow: 0px 0px 0px  #5b0000;}
}
/*==================================================================================================*/

/*=================================              IDS OF LI'S          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/
#Logo{
	
	left:1em;
}
#Logo img{
	margin-top:-0.1em;
	height:2em;
	width:2.5em;
}
#Logo a:hover{
	animation-name:rotateCrazy;
	animation-duration:2s;
	animation-iteration-count:infinite;
	animation-fill-mode: forwards;

	 
}
@keyframes rotateCrazy{
0%{transform:scale(1.0);}

50%{transform:scale(1.3);margin-top:0.3em;}

100%{transform:scale(1.0);margin-top:0.0em;}
}
#Forum{

	left:5em;
}
#Guilds{

	
}
#Events{

	
}
#EventsWithoutLogin{
	color:rgba(0,0,0,0.7);
}
#EventsWithoutLogin:hover{
	color:red;
}
#EventsWithoutLogin:hover #HoverEventWithoutLogin{display:block;}
#EventsWithoutLogin img{
	margin-left:0.3em;
	margin-top:0.6em;
	position:absolute;
	height:auto;
	width:0.7em;
}
#HoverEventWithoutLogin{
	text-align:center;
	line-height:1.5;
	font-size:0.5em;
	display:none;
	position:absolute;
	width:15em;
	border-radius:10px 10px 10px 10px;
	background-color:white;
	color:red;
	font-style:italic;
}
#Login{
	
margin-right:3em;
}
#PictureLog{
	
	z-index:960;
	overflow:hidden;
	border-radius:360%;
	color:grey;
	animation-name:LogoGlide;
	animation-duration:5s;
	animation-iteration-count:infinite;	
}
#PictureLog:hover{
	cursor:url(Curs/Hover.cur),auto;
}
#ProfLog{
	z-index:960;
	display:block;
width:4em;
height:4em;
}

#LoginName{
	
	

}
#LoginName:hover{
	
}
@keyframes LogoGlide{
	  0% {box-shadow:0px 0px 0px red;}
	  50%{box-shadow:0px 0px 50px red;}
	100%{box-shadow:0px 0px 0px red;}
}

#LogOutBox{
	border-color:rgb(176,147,103);
	border-width:0.1em;
	border-style:solid;
	color:black;
	z-index:-2;
	margin-left:0.1em;
	margin-top:-2.65em;
	
	text-align:center;
	position:absolute;
	display:none;
	width:3.6em;
	height:8.5em;
	border-radius:0px  0px 10px 10px;
	font-style:italic;
	font-size:1em;
	background-color:rgb(235,207,146);
	border-top-width:0;
}
#LogMeOut{
	display:none;

}

#More{
	text-align:center;
	position:absolute;
	width:100%;
	margin-top:4em;
	font-size:0.7em;
	line-height:1;
}
#More:hover{
	color:white;
	cursor:url(Curs/Hover.cur),auto;
}
#More img{
		position:absolute;
	margin-top:-1.3em;
	margin-left:1.4em;
	width:0.8em;
	height:auto;
}

#MoreBox{

position:absolute;
margin-top:-6em;
z-index:-1;
		border-color:rgb(176,147,103);
	border-width:0.1em;
	border-style:solid;
	color:black;
	height:8em;
	background-color:rgb(235,207,146);
	margin-left:0.1em;
	opacity:0;
	width:3.6em;
	border-radius:10px  10px 0px 0px;
	font-style:italic;
	font-size:1em;
	border-bottom-width:0em;
}

.MoreBoxEffectIn{
		animation-name:MoreBoxIn;
	animation-duration:2s;
	animation-fill-mode: forwards;
}
@keyframes MoreBoxIn{
0%{margin-top:-6em;opacity:0;}
1%{opacity:1;}
100%{margin-top:1.5em;opacity:1;}

}

.MoreBoxEffectOut{
		animation-name:MoreBoxOut;
	animation-duration:2s;
	animation-fill-mode: forwards;
}
@keyframes MoreBoxOut{
0%{margin-top:1.5em;opacity:1;}
99%{opacity:1;}
100%{margin-top:-6em;opacity:0;}

}


#DeleteAccount{
	margin-top:5em;
	text-align:center;
	font-size:0.7em;
	line-height:1;
}
#DeleteAccount:hover{
	color:white;
}
.MoveLogOutBox{
	animation-name:MoveLogOut;
	animation-duration:2s;

	animation-fill-mode: forwards;
}
@keyframes MoveLogOut{
	0%{margin-top:-2.65em;}
	100%{margin-top:2.85em;}

}

.RemoveLogOutBox{
	animation-name:Remove;
	animation-duration:2s;
	
	animation-fill-mode: forwards;
}
@keyframes Remove{
	0%{margin-top:2.65em;}
	100%{margin-top:-2.65em;}

}


#SignOutLabel{
	
	position:absolute;
	margin-top:9.8em;
	font-size:0.7em;
	width:100%;
	text-align:center;

}
#SignOutLabel:hover{
cursor:url(Curs/Hover.cur),auto;
color:white;
}
#ChangeProfilePictureLabel{
		margin-top:6.8em;
	font-size:0.7em;
	width:100%;
	text-align:center;
	position:absolute;

	color:black;

}
#ChangeProfilePictureLabel:hover{

cursor:url(Curs/Hover.cur),auto;
color:white;
}
#UploadLogo{
	display:none;
}
#Yolo{
	cursor:auto;
	display:none;
}
#ChangeDaLogoSize{
	line-height:1.2;
	margin-left:-1em;


}
#ChangeDaLogoSize img{
	position:absolute;
	margin-top:-0.4em;
	margin-left:0.3em;
	width:1em;
	height:auto;
}



#Skoupa{
display:none;
}





#leftBlackWing{

 position:absolute;
 top:-10.2em;
 left:-8em;
 transform:rotate(206deg);
 z-index:300;
  height:21em;
	width:19.5em;
}
#leftBlackWing img{height:auto;width:100%;position:relative;z-index:300;}
.leftBlackWingMove{

	animation-name:ScrollBlackLeft !important;
	animation-duration:0.30s !important;
	animation-timing-function:linear !important;
animation-iteration-count:1 !important;
animation-delay:0s !important;
}
@keyframes ScrollBlackLeft{
	0%{transform:rotate(206deg);}
	50% {transform:rotate(226deg);}
	100%{transform:rotate(206deg);}
}


#rightBlackWing{
 position:absolute;
 top:-10.2em;
 transform:rotate(155deg);
 right:-8.5em;
 z-index:300;
 height:21em;
	width:19.5em;

}
#rightBlackWing img{height:auto;width:100%;position:relative;z-index:300;}
.rightBlackWingMove{
	animation-name:ScrollBlackRight !important;
	animation-duration:0.30s !important;
	animation-delay:0s !important;
	animation-timing-function:linear !important;
animation-iteration-count:1 !important;
}
@keyframes ScrollBlackRight{
	0%{transform:rotate(155deg);}
	50% {transform:rotate(135deg);}
	100%{transform:rotate(155deg);}
}

     





/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
/*===============================================================nav end here ============================================*/
#WrapAgain{
display:flex;

justify-content:center;
/*min-height:127em;*/
background-color:transparent;
}

#ContentWrap{
display:block;
width:120em;
/*height:127em;*/
background-color:transparent;

}
#Upper{
	position:relative;
	width:100%;
	display:block;
height:10em;
background-color:transparent;
}
#Before{
	position:absolute;
width:100%;
height:5em;
background-color:transparent;
top:12.2em;
display:block;

}
#Before div{
	
}

#note{
margin-left:6em;
padding-bottom:1em;
color:rgb(230,230,230);
font-style:italic;
font-weight:bold;
font-size:2em;
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black;
}


/*===== to the table ======*/








#PushItDown{
width:100%;
overflow:hidden;
display:block;
min-height:60em;
background-color:rgb(91,0,0);
border-radius:25px 25px 25px 25px;
border-width:0.2em;
margin-left:-0.2em;
border-color:;
border-style:solid;
box-shadow:0px 0px 15px 0px rgb(0,119,190);
}
#CategoryPre{

	text-align:left;
width:100%;
height:5em;
color:white;
background-color:rgb(91,0,0);
}
#CategoryWrap{

}
#CategoryTable{
width:100%;
border:none;
border-bottom:1em solid black;
border-color:rgb(91,0,0);
}
.catname{
	color:rgb(176,155,186);
	font-style:italic;
	font-size:2em;
}
.catinfo{
	color:black !important;
	font-size:0.8em;

}

.catnametd{
width:30em;
}
.lastTopic{
	color:rgb(0,119,190);
	font-size:1.8em;
	font-weight:bold;

}
.lastTopicby{
font-weight:bold;
font-size:1.3em;
}
.lastTopicbyAdmin{
	font-weight:bold;
	color:red;
	font-size:1.3em;
}
.lastTopicat{

	font-style:italic;
	font-size:0.8em;
}
#spaceme{
	min-height:15em;
	width:100%;

}
td{
	padding-top:1em;
	padding-bottom:1em;
	text-align:center;
border-left:none;
border-right:none;
border-color:rgb(91,0,0);
border-width:1em;
}
th{
	
font-size:1.6em;
border-top:none;
	text-align:center;
border-left:none;
border-right:none;
padding-bottom:0.5em;
color:white;
border-color:rgb(91,0,0);
 -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: gold;
  border-width:1em;
	
}
#NamesOfColumnsTr{
	background-color:rgb(91,0,0);
}


.ArrowG{
	margin-top:-0.1em;
	margin-left:1.3em;
	position:absolute;
	font-size:2.0em;
	color:gold;
	font-weight:bold;
 	text-shadow:0px 0px 10px red;
}
.ArrowG:hover{
	text-shadow:0px 0px 10px rgb(91,0,0);
	color:lightblue;
}

#NavPages{
	display:block;
	position:absolute;
	top:8em;
	left:15em;
	font-size:2em;
	z-index:999;
	
	max-width:42em;
	height:1.7em;

}
#CreateTopic{
	margin-top:0.2em;
	display:block;
	width:100%;
	font-weight:bold;
	font-style:italic;
	text-align:center;
	font-size:3.5em;
	color:rgb(242,222,164);
}
#PrePost{
	width:50%;
	margin-left:0.5em;
	
	background-color:rgb(91,0,0);
}
#formC{
	width:50%;
}
#Title{
	margin-left:2.5em;
width:12em;
}
#Subject{
width:39em;
margin-left:1em;

}
#wtf{
	width:42.8em;
	background-color:white;
	overflow:auto;
	margin-top:0.8em;

}
#MainText {
	width:44.56em !important;
	max-width:60.56em !important;
	height:40em !important;
	color:black;
	overflow:hidden !important;
	word-break: break-all;
	
}
#ReplyToPrepare{
	box-shadow:0px 0px 3px white;
	border-radius:15px 15px 15px 15px;
	margin-top:3em;
	margin-left:0.5em;
	width:38.56em !important;
	max-width:58.56em !important;
	height:45em !important;
	color:black;
	overflow:auto !important;
	background-color:lightblue;

}


.nicEdit-main{
	word-break: break-all;
	color:black;
	width:39.56em !important;
	overflow-y:auto !important;
	height:40em !important;
}
#sub{
	box-shadow:15px 0px  10px black;
	color:black;
	display:inline-block;
	background-color:lightblue;
	margin-left:5em;
	margin-top:9.5em;
	position:absolute;
	
	font-size:5em;
	padding:0.1em;
	padding-left:0.3em;
	padding-right:0.3em;
}
#sub:hover{
box-shadow:15px 0px  10px white;
color:white;
cursor:url(Curs/Hover.cur),auto;
}

.Touchable{
	background-color:lightblue;
	border-radius:;
	width:100%;
	display:block;

}

#flexThat{
	display:flex;
	justify-content:space-around;

}

#transfer{
	height:5em;
	margin-top:15em;
}

	@media (max-width:98.6em){html,body{}}
</style>
<title>Reply to <?php $forT=$_GET['p']; $forTitle=mysqli_query($conn,"SELECT postedBy FROM post WHERE id='$forT'");$forTi=mysqli_fetch_array($forTitle,MYSQLI_ASSOC);echo $forTi['postedBy']; ?></title>
	<!--CSS-->
	<link rel="stylesheet" href="NotifyCss.css" type="text/css"/>
	<link rel="stylesheet" href="" type="text/css"/>

   	<!--JAVASCRIPT LIBRARY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!--Resize For Devices-->
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>

	<!--Creator-->
	<meta name="author" content="John balasis"/>

	<!--AFK KICK-->
	<meta http-equiv="refresh" content="9000"/>

	<meta charset="UTF-8"/>	

</head>
<body  onload="well()">

		
  <div id="WrapperFromBodyToWholePageDiv">
  
    <div id="WholePageDiv">

	



<!-- -->
<div id="navbar">
  <div id="clock"></div>
        <header>
          
        <nav>

          <div id="leftBlackWing"><img src="Pic/BlackWing2.png"></div>
          <ul id="navUl">
            <li id="Logo"><a href="index.php"><img  src="Pic/LogoExtraSmall.png"></a></li>
            <li id="Forum"><a href="forum.php">Forum</a></li>
            <li id="Guilds"><?php
 if  (isset($_SESSION["authenticated"])  &&  $_SESSION["authenticated"]=="true") {
 	    	     echo "<a href='GuildDiscord.php'>Guilds Discord</a>";
 						}else{
 		echo "<div style='color:black;' >Guilds Discord<img style='margin-left:0.3em;margin-top:0.6em;position:absolute;height:auto;width:0.7em;' src='Pic/lock.png'><br><span style='font-size:0.5em;position:absolute;margin-top:-1.7em;color:red;margin-right:-2.5em;'>login to enter</span>";
 	};     
 
 	    ?></li>      
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
echo "  'Pic/ProfileLogos/Angelhollow.png '     ";
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
  ?>  </div>

     </li>
            
            </ul>
            <div id="rightBlackWing"><img src="Pic/BlackWing.png"></div>
        </nav>
        
      </header>
      </div>

<!--=========================================Telos tou nav -->










<div id="WrapAgain">

<div id="ContentWrap">

<div id='Upper'>

</div>
<div id="PushItDown">

<div id="CategoryPre">
	<span id="CreateTopic">Reply to <?php $forT=$_GET['p']; $forTitle=mysqli_query($conn,"SELECT postedBy FROM post WHERE id='$forT'");$forTi=mysqli_fetch_array($forTitle,MYSQLI_ASSOC);echo $forTi['postedBy']; ?></span>


<div id="flexThat">

<div id='ReplyToPrepare'>
<br>
<div id='mustbe' onmousedown='ClearDouble()' style='margin-left:0.5em;'>
	<?php
$MachinePlease=$_GET['p']; 
$IDontGiveAFuck=mysqli_query($conn,"SELECT postedBy,postText FROM post WHERE id='$MachinePlease'");
$tranFuck=mysqli_fetch_array($IDontGiveAFuck,MYSQLI_ASSOC);


echo $tranFuck['postText'];


	 ?>
	</div>
<br><br><br><br>

 </div>	

 <button id='transfer' onclick='Transfer()'>PASTE<br>HIGHTLIGHT <BR> -></button>
	<form method='POST' id='formC' action="">
		<input type='submit' id='sub' name="changedR" value='Post'>
		<div id="PrePost">

		<br><br>
	<div id='wtf'>

	<textarea id='MainText' name='MainText' maxlength="700" ></textarea>
	</div>
</div>
</form>
</div>


</div>


<div id="CategoryWrap">


</div><!--categoryWrap -->



</div><!--PushItDown -->
</div><!--ContentWrap -->

</div><!--WrapAgain -->

<div id="spaceme"></div>
	</div> <!--WholePageDiv -->


</div><!--WrapperFromBodyToWholePageDiv -->
<div style='display:none;'  id='DaHere'><?php $forT=$_GET['p']; $forTitle=mysqli_query($conn,"SELECT postedBy FROM post WHERE id='$forT'");$forTi=mysqli_fetch_array($forTitle,MYSQLI_ASSOC);echo $forTi['postedBy']; ?> </div>

	<script src="Javascript/LoginMenu.js"></script>
<script>
function Transfer(){

if (!document.getElementById('mustbe').contains(window.getSelection().anchorNode) ){alert('Select something from reply');
}else{
	
var selected=window.getSelection().toString();
var toWho=document.getElementById('DaHere').innerHTML;
document.getElementsByClassName('nicEdit-main')[0].innerHTML+="<br><div> 	&nbsp;</div><div class='Touchable' style='background-color:lightblue;' oncontextmenu='HeyYou(this);return false;' onclick='SpaceGo(this)' contenteditable='false'><div style='font-weight:bold;line-height:2em;padding-left:0.5em;'> Post From <span style='font-style:italic;'>"+toWho+'</span></div>'+selected +'<div style="background-color:white;"> 	&nbsp;</div></div><div> 	&nbsp;</div>';
}
}


 </script>

<script>function SpaceGo(ouf){var wannaCry=document.createElement("Div");wannaCry.style.cssText="display:flex;min-width:1px;max-width:1px;min-height:1em;";var GiveMeSpace=document.createTextNode(" ");wannaCry.appendChild(GiveMeSpace);document.getElementsByClassName('nicEdit-main')[0].insertBefore(wannaCry,ouf);

var wannaCr=document.createElement("Div");wannaCr.style.cssText="display:flex;min-width:1px;max-width:1px;min-height:1em;";var GiveMeSpac=document.createTextNode(" ");wannaCr.appendChild(GiveMeSpac);
document.getElementsByClassName('nicEdit-main')[0].insertBefore(wannaCr,ouf.nextSibling);}


function HeyYou(xma){
	xma.closest("div").remove();return false;
}



</script>
<script>

function ClearDouble(){

document.getSelection().removeAllRanges();


}




</script>
<script>
var denyDaReply=document.getElementById('ReplyToPrepare');
var allThese=document.getElementsByClassName('Touchable');
for (p=0;p<allThese.length;p++){
	if (document.getElementById('mustbe').contains(allThese[p] ) ){
		allThese[p].innerHTML="";
	}
}	
</script>
<script src="Javascript/LoginMenuTwo.js"></script>
<script src="Javascript/nicEdit.js"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script src="Javascript/BlueWingsScroll.js"></script>
<noscript>
    <style type="text/css">    	
        #WrapperFromBodyToWholePageDiv {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
 
</noscript>
</body>
</html>