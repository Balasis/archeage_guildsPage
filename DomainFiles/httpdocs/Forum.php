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
width:100%;
height:5em;
background-color:transparent;
top:15.2em;
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
display:block;

background-color:white;
border-radius:10px 10px 0px 0px;
border-width:0.2em;
margin-left:-0.2em;
border-color:;
border-style:solid;

}
#CategoryPre{
	text-align:center;
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
	color:gold;
	font-size:1.5em;
}
.lastTopicby{
font-weight:bold;
}
.lastTopicbyAdmin{
	font-weight:bold;
	color:red;
}
.lastTopicat{
	font-style:italic;
	font-size:0.8em;
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


	@media (max-width:98.6em){html,body{}}
</style>
<title>Forum</title>
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
<body>
		
  <div id="WrapperFromBodyToWholePageDiv">

    <div id="WholePageDiv">

	



<!-- -->
<?php include "navbar.php" ?>

<!--=========================================Telos tou nav -->









<div id="WrapAgain">

<div id="ContentWrap">

<div id='Upper'>
	<div id="Before">
			<div id="note" style="">
			Welcome to V forum.You might wanna Login to do any post.
			</div>
	</div>
</div>
<div id="PushItDown">

<div id="CategoryPre"><br>VforVendetta </div>

<div id="CategoryWrap">
<?php
require '../CS/Cs.php';
$result = mysqli_query($conn,"SELECT id, category,LastTopic,categoryInfo,LastTopicBy,LastTopicDateTime FROM category");

if ($result->num_rows>0){
echo "<table id='CategoryTable' cellspacing='0'  border=1 >";

echo "<tr id='NamesOfColumnsTr'>";
echo "<th>Category</th>";

echo "<th>Last Topic</th>";
echo "</tr>";


while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

echo "<tr>";
 echo "<td class='catnametd'>";
  echo "<div  style='max-height:5.85em;overflow:hidden'>";
 echo "<a href='topics.php?id=";
 echo $row["id"];
 echo "'>";
  echo "<span class='catname'>";
 echo $row["category"];
  echo "</span>";
 echo "<br>";

echo "</a>";
echo"<span class='catinfo'>";
echo $row["categoryInfo"];
echo "</span>";
echo "</div>";
 echo "</td>";



 echo "<td>";
  echo "<div  style='max-height:5.85em;overflow:hidden'>";
echo"<span class='lastTopic'>";
 $whichGroup=$row["LastTopic"];
 $whichGroupAre=mysqli_query($conn,"SELECT id,GroupOfTopic FROM topic WHERE NameOfTopic='$whichGroup' ");
 $whichTrue=mysqli_fetch_assoc($whichGroupAre);
 echo "<a href='posts.php?id=";
 echo $whichTrue['GroupOfTopic'];
 echo "&topic=";
 echo $whichTrue['id'];
 echo "&postpage=0";
 echo "'>";
 echo $row["LastTopic"];
 echo "</a>";
 echo "</span>";
 echo "<br>by ";


 $takeThis=$row['LastTopicBy'];
  $checkIfAdmin=mysqli_query($conn,"SELECT 'Rank' FROM adminaccounts Where PlayerName='$takeThis' ");
 if ($checkIfAdmin->num_rows>0){
echo"<span class='lastTopicbyAdmin'>";
 }else{
 	echo"<span class='lastTopicby'>";
 };
 

 echo $row['LastTopicBy'];
echo "</span>";
 echo ",<br>";
 echo"<span class='lastTopicat'>";
 echo $row['LastTopicDateTime'];
 echo "</span>";
 echo "</div>";
 echo "</td>";



   
}
echo "</table>";

}else{
	echo 'theres no categories';
}
?>
</div><!--categoryWrap -->
</div><!--PushItDown -->
</div><!--ContentWrap -->
</div><!--WrapAgain -->
	</div> <!--WholePageDiv -->
</div><!--WrapperFromBodyToWholePageDiv -->

<script>
var dateComa=document.getElementsByClassName('lastTopicat');
for (i=0;i<dateComa.length;i++){
var dafuc=dateComa[i].innerHTML;
var wouf=dafuc.replace(" "," , ");
dateComa[i].innerHTML=wouf;
}	
</script>
	<script src="Javascript/LoginMenu.js"></script>

<script src="Javascript/LoginMenuTwo.js"></script>
<script src="Javascript/BlueWingsScroll.js"></script>
<noscript>
    <style type="text/css">    	
        #WrapperFromBodyToWholePageDiv {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
 
</noscript>
</body>
</html>