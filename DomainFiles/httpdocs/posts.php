<?php 
session_start();

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
	
	  background-position:;
  background-repeat:repeat;
  font-size:0.7vw;
}
a{  cursor:url(Curs/Hover.cur),auto;    
	text-decoration:none;
	color:inherit;
}
label{
	cursor:url(Curs/Hover.cur),auto; 
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
width:90em;
/*height:127em;*/
background-color:transparent;

}
#Upper{
	position:relative;
	width:100%;
	display:block;
height:20em;
background-color:transparent;
}
#Before{
	position:absolute;
background-color:transparent;
top:15.2em;
display:block;

}
#Before div{
	
}

#note{
	background-color:rgb(91,0,0);
	margin-top:-3em;
margin-left:6em;
padding:0.3em;
color:rgb(230,230,230);
font-style:italic;
font-weight:bold;
font-size:2em;
border-radius:15px 15px 15px 0px;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
}


/*===== to the table ======*/








#PushItDown{
width:100%;
display:block;

background-color:transparent;

margin-left:-0.2em;



}
#CategoryPre{

	text-align:center;
width:100%;
height:5em;
color:white;
background-color:rgb(91,0,0);
}
.CategoryWrap{
border-radius:25px 25px 0px 0px;
	text-align:right;
width:100%;
height:5em;
color:white;
background-color:rgb(91,0,0);
border:1px solid transparent;
}
#CategoryTable{
width:100%;
border:none;
border-bottom:1px solid black;
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
	color:rgb(120,120,120);
	font-size:1.8em;
	font-weight:bold;

}
.lastTopicby{
display:block;
font-weight:bold;
font-size:1.3em;
margin-top:3em;
margin-bottom:0.1em;
}
.lastTopicbyAdmin{
	display:block;
	font-weight:bold;
	color:red;
	font-size:1.3em;
	margin-top:3em;
margin-bottom:1em;
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
}
th{
font-size:1.6em;
border-top:none;
	text-align:center;
border-left:none;
border-right:none;
padding-bottom:0.5em;
color:white;
 -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: gold;
	
}
#NamesOfColumnsTr{
	background-color:rgb(91,0,0);
}

.PostWrap{
	background-color:white;
display:block;
border-radius:0px 0px 25px 25px;
overflow:hidden;
box-shadow:30px 0px 35px black;
margin-bottom:1em;
width:100%;
border:1px solid black;
}
.UpperPostDiv{
	background-color:white;
display:flex;
height:2em;
color:black;
width:99.8%;
border:1px solid black;
}
.DatetimePost{
	color:black;
	background-color:white;
text-align:left;
width:30%;
height:1em;
margin-top:0.4em;
margin-left:1.1em;
}
.NumberOfPost{
	color:black;
	background-color:white;
text-align:right;
width:67%;

margin-top:0.4em;
}
.MiddlePostDiv{
	
	background-color:white;
	border:1px solid black;
	display:flex;

}
.PosterInfo{
	position:relative;
	display:block;
text-align:center;
	color:black;
	background-color:lightblue;
width:25%;
}
.RankOfficer{
display:block;
font-style:italic;
margin-bottom:0.1em;
}
.RankMember{
	display:block;
font-style:italic;
margin-bottom:0.1em;
}
.PosterImg{
width:10em;
height:10em;

}
.postText{
	background-color:white;
	width:75%;
	color:black;
	max-height:150em;
min-height:25em;
overflow:auto;
}
.InsidepostText{
	width:95%;
	margin-left:1em;
	margin-top:1em;

}
.UnderPostDiv{
	background-color:white;
	border:1px solid black;
	width:99.8%;
	text-align:right;
	max-height:5em;
	min-height:3em;
	border-radius:0px 0px 25px 25px;

}
.replyText{
	display:block;
	font-size:1.5em;
	margin-top:0.3em;
	margin-right:2.5em;
	color:orange;
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
.PostProperties{
margin-top:2em;
margin-right:2em;
width:2em;
height:2em;
}
.PostProperties img{
	width:2em;
	height:auto;
margin-top:-0.15em;
margin-left:-0.8em;
}
.Edit{
	display:inline-block;
	font-size:1.5em;
	margin-top:0.6em;
	color:orange;
	font-style:italic;
	margin-right:0.9vw;
	background-color:black;
	padding:0.5em;
	border-radius:15px 15px 15px 15px;
	border:1px solid orange;
}
.Edit:hover{
	background-color:white;
	border-color:rgb(91,0,0);
	
	cursor:url(Curs/Hover.cur),auto; 
}
.HideProperties{
	display:none;
}

.styleDat{
	padding:1em;
	text-align:center;
	position:absolute;
	
	background-color:rgb(65,0,0);
	display:none;
	margin-top:1.1em;
  margin-left:-1.95em;
  border-radius:0px 0px 0px 15px;
 

}

.FirstEdit:hover{
color:red;
}
.SecondEdit:hover{
color:red;
}
.HideMeAsap{
	display:none;
}

#NewPost{
	border-radius:0px 0px 15px 15px;
	border:1px solid black;
	background-color:gold;
	font-style:italic;
	font-weight:bold;
	font-size:1.2em;
	max-width:4em;
	padding:0.6em;
	margin-left:10em;
}
#NewPost:hover{
	background-color:white;
	cursor:url(Curs/Hover.cur),auto;
}


.AdminDeletePost{
	margin-top:1em;
	margin-right:3em;
}

#SignHoverIt{

	background-position:50% 50%;
background-image:url(Pic/GoBack.png);
}

#SignHoverIt:hover{
background-image:url(Pic/GoBackHover.png);
}

	@media (max-width:98.6em){html,body{}}
</style>
<title><?php
require '../CS/Cs.php';
$topicCc=$_GET['topic'];
$TitleResult=mysqli_query($conn,"SELECT NameOfTopic From topic Where id='$topicCc'");
$TranslateIt=mysqli_fetch_array($TitleResult,MYSQLI_ASSOC);
echo $TranslateIt['NameOfTopic'];

 ?></title>
	<!--CSS-->
	<link rel="stylesheet" href="NotifyCss.css" type="text/css"/>

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
<?php include "navbar.php" ?>

<!--=========================================Telos tou nav -->

<!-- =================================================================COPY DAT================================================-->



<!-- =================================================================Till Here================================================-->


<?php
echo "<a id='SignHoverIt' style='display:block;position:fixed;left:13em;top:11em;width:11em;height:11em;color:white' href='topics?id=".$_GET['id']."'><span style='display:block;transform:rotate(314deg);color:rgb(91,0,0);font-size:1.5em;margin-top:0.25em;margin-left:-0.05em;'>Go back</span></a>";
?>













<div id="WrapAgain">

<div id="ContentWrap">

<div id='Upper'>
	<div id="Before">
			<div id="note">
			Thread: <?php

$topicCc=$_GET['topic'];
$TitleResult=mysqli_query($conn,"SELECT NameOfTopic From topic Where id='$topicCc'");
$TranslateIt=mysqli_fetch_array($TitleResult,MYSQLI_ASSOC);
echo $TranslateIt['NameOfTopic'];

 ?><br>
			</div>
			<label for="LinkOfNewPost">
		<div id='NewPost'>
		<?php
		$TopTop=$_GET['topic'];
		echo "<a id='LinkOfNewPost' href='createPost.php?topic=";
		echo $TopTop;
		echo "'> + Post</a>";
		 ?></div>
		</label>
	</div>
</div>
<div id="PushItDown">


<?php

$top=$_GET['topic'];

if (!isset($_GET['postpage'])){

$page=0;

}else{
	$page=$_GET['postpage'];

}

$count=mysqli_query($conn,"SELECT COUNT(id) AS Total FROM post  Where GroupOfpost=$top ");
$row = $count->fetch_row();
$MaxRows=$row[0];
$per_page=10;
$Allpages=ceil($MaxRows/$per_page);
$Multi=$page * $per_page;
$result = mysqli_query($conn,"SELECT id,postedby,postedAt,postText FROM post WHERE GroupOfPost=$top ORDER BY postedAt  LIMIT  $Multi,$per_page "   );
$Number=0;
if ($result->num_rows>0){

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$Number=$Number+1;
$ZERO="0"; 
$Nu=$_GET['postpage'].$ZERO;
$NuResult=$Nu+$Number;
echo '<div class="CategoryWrap">';
if (isset($_SESSION["ADMIN"])  &&  $_SESSION["ADMIN"]=="true"){
	echo "<button id='Aq";
	echo $row['id'];
	echo "' class='AdminDeletePost' onclick='Adm";
	echo $row['id'];
	echo "()'>Delete Post</button>";

echo "<script>function Adm".$row['id']."(){var xhttpAq".$row['id']."=new XMLHttpRequest();";

echo "xhttpAq".$row['id'].".onreadystatechange = function() { document.getElementById('Aq".$row['id']."').innerHTML='Done'; };";

echo "xhttpAq".$row['id'].".open(";
echo '"GET","DeletePostAdminAjax.php?post='.$row['id'].'",true);';
echo "xhttpAq".$row['id'].".send();};";
echo "</script>";
}

if (isset($_SESSION['PlayerName']) && $_SESSION['PlayerName']==$row['postedby']){

echo "<div class='Edit' onclick='ShowProp(this)'>";
echo   "Edit";
echo "<div class='styleDat'>  <div class='FirstEdit'><a href='EditPost.php?PostId=";
echo $row['id'];

echo "'>Edit</a><hr></div>    "; 
echo "<label for='D".$row['id']."'>";
echo "<div class='SecondEdit'>  <form method='post' action=''> ";

echo "<input type='submit' class='HideMeAsap' id='";
echo "D".$row['id'];
echo "'";
echo "name='";
echo "D".$row['id'];
echo "'>";
echo "</form>";

echo "Delete </div>     ";
echo "</label>";
echo " </div>";
echo "</div>";
$grs=$row['id'];
if (isset($_POST['D'.$row['id'] ])){
$CryAriver=mysqli_query($conn,"DELETE from post Where Id='$grs'");


}


}
echo "</div>";
echo "<div class='PostWrap'>";
echo "<div class='UpperPostDiv'>";
echo "<span class='DatetimePost'>";
echo $row['postedAt'];
echo " </span>";
echo "<span class='NumberOfPost'>";
echo "#";
echo $NuResult;
echo " </span>";
echo "</div>";




echo "<div class='MiddlePostDiv'>";

echo "<div class='PosterInfo'>";
  $takeThis=$row['postedby'];
  $checkIfAdmin=mysqli_query($conn,"SELECT Rank,RankInGame,NumberOfPosts FROM adminaccounts Where PlayerName='$takeThis'");
$checkIfAdminl=mysqli_fetch_array($checkIfAdmin, MYSQLI_ASSOC);

$checkRank=mysqli_query($conn,"SELECT RankInGame,NumberOfPosts FROM accounts Where PlayerName='$takeThis'");
$checkRankl=mysqli_fetch_array($checkRank, MYSQLI_ASSOC);

 if ($checkIfAdmin->num_rows>0){
echo"<span class='lastTopicbyAdmin'>";
 }else{
 	echo"<span class='lastTopicby'>";
 }
 echo $row['postedby'];
echo "</span>";
echo "<br>";

 if ($checkIfAdmin->num_rows>0){
echo "<span class='RankOfficer'>";

if (!isset($checkIfAdminl['RankInGame'])){
	echo 'Admin no longer with us';
}else{
	echo $checkIfAdminl['RankInGame'];
}

echo "<br>";
echo "<br>";
 echo "Posts: ";

if(!isset($checkIfAdminl['NumberOfPosts'])){
	echo 'Unknown post number since account is being deleted';
}else{
echo $checkIfAdminl['NumberOfPosts'];	
}


echo "</span>";


 }else{
 	echo "<span class='RankMember'>";
if (!isset($checkRankl['RankInGame'])){
	echo 'User propably not exist anymore';
}else{
	 echo $checkRankl['RankInGame'];
}

  echo "<br>";
  echo "<br>";
  echo "Posts: ";

if (!isset($checkRankl['NumberOfPosts'])){
	echo 'Unknown post number since account propably being deleted'; 
}else{
	echo $checkRankl['NumberOfPosts'];
}


 echo "</span>";


 }
echo "<br>";
echo "<img class='PosterImg' src='Pic/ProfileLogos/";
echo $row['postedby'];
echo ".png'";
echo '   onerror="this.onerror=null;this.src=     ';
echo "  'Pic/ProfileLogos/Angelhollow.png '     ";
echo '   "   ';
echo ">";


echo "</div>";

echo "<div class='postText'>";
echo "<div class='InsidepostText'>";
echo $row['postText'];
echo "</div>";
echo "</div>";

echo "</div>";






echo "<div class='UnderPostDiv'>";
echo "<a href='createReply.php?p=";
echo $row['id'];
echo "'>";
echo "<span class='replyText'>";
echo "Reply";
echo "</span>";
echo "</a>";
echo "</div>";
echo "</div>";

}
}
?>




</div><!--PushItDown -->
</div><!--ContentWrap -->

</div><!--WrapAgain -->

<div id="spaceme"></div>
	</div> <!--WholePageDiv -->
	<div id='NavPages' style="">

	<?php 
	echo '<a class="GoToFirstPage" href="posts?id='.$_GET['id']."&topic=".$_GET['topic'].'&postpage='.'0';
 echo '">'."First Page".'</a>';   
for ($x=0; $x<$Allpages; $x++) {
    $page =($x * $per_page);
    
    echo '<a class="buttons" href="posts?id='.$_GET['id']."&topic=".$_GET['topic'].'&postpage='.$x;
    echo '">'.$x.'</a>'; 
}
$GiaToLast=$Allpages-1;
echo '<a class="GoToLastPage" href="posts?id='.$_GET['id']."&topic=".$_GET['topic'].'&postpage='.$GiaToLast;
 echo '">'."Last Page".'</a>'; 
	?></div>
</div><!--WrapperFromBodyToWholePageDiv -->
<script></script>




<script>
var dateComa=document.getElementsByClassName('lastTopicat');
for (i=0;i<dateComa.length;i++){
var dafuc=dateComa[i].innerHTML;
var wouf=dafuc.replace(" "," , ");
dateComa[i].innerHTML=wouf;
}	
</script>

<script>
var dateComa2=document.getElementsByClassName('lastTopicat2');
for (i=0;i<dateComa2.length;i++){
var dafuc2=dateComa2[i].innerHTML;
var wouf2=dafuc2.replace(" "," , ");
dateComa2[i].innerHTML=wouf;
}	
</script>


	<script>
		function well(){
		var url = window.location.href;	
		var Pagess=document.getElementsByClassName('buttons');

	for (i=0;i<Pagess.length;i++){
		
		if (Pagess[i].href==url){
		
			Pagess[i].style.backgroundColor="rgb(91,0,0)";
			Pagess[i].style.borderColor="rgb(91,0,0)";
		}
		
	}
	}
	</script>

	<?php
echo "<script>var PageHide=document.getElementsByClassName('buttons');";
echo "for (i=0;i<PageHide;i++){PageHide[i].style.display='none';};";


$Ninja=$_GET['postpage'];
$Prev=$_GET['postpage'];	

$PrevP=$Prev-5;
if ($PrevP<0){
	$PrevP=0;
}else{
	$PrevP=$Prev-5;
}

echo "for (p=";
echo $PrevP;
echo ";p<";
echo $Prev;
echo ";p++){PageHide[p].style.display='inline-block';};";

$NinjaP=$Ninja+5;

echo "for (w=";
echo $Ninja;
echo ";w<";
echo $NinjaP;
echo ";w++){PageHide[w].style.display='inline-block';}</script>";


 ?>
<script>
	

function ShowProp(grr){
if (grr.children[0].style.display=='block'){
grr.children[0].style.display='none';
}else{
grr.children[0].style.display='block';	
}

}	
</script>

	<script src="Javascript/LoginMenu.js"></script>

<script src="Javascript/LoginMenuTwo.js"></script>
<script src="Javascript/nicEdit.js"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script src="Javascript/BlueWingsScroll.js"></script>
<script>

</script>
</body>
</html>