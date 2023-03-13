<?php
if (!isset($conn)){
	require '../CS/Cs.php';
}


 ?>

<div id='Notification' onclick='Notify()' style='max-width:5em;height:3em;position:absolute;right:2.5em;top:2.5em;display:<?php if (isset($_SESSION['PlayerName'])){ echo 'block'; }else{echo 'none';}; ?>'> 
<?php
$SoTiredPlzEnd=$_SESSION['PlayerName'];
 $CheckTopicsIf=mysqli_query($conn,"SELECT COUNT(DISTINCT whichTopic) AS TOPICCOUNTED FROM notificationtopic WHERE OwnerOfTopic='$SoTiredPlzEnd'");
 $TranslateCheck=mysqli_fetch_array($CheckTopicsIf,MYSQLI_ASSOC);
 $IwillNotBow=$TranslateCheck['TOPICCOUNTED'];
if ($IwillNotBow!=0){
 echo "<div style='position:absolute;background-color:lightblue;color:white;font-size:1.5em;border-radius:50%;padding:0.3em;margin-top:-0.6em;'>".$IwillNotBow."</div>";  
 }
 ?>
	 <img style='max-width:5em;height:auto;' id='MailImage' src='Pic/Notification.png'>
<?php
 $CheckReplyIf=mysqli_query($conn,"SELECT COUNT(id) AS REPLYCOUNTED FROM reply WHERE ReplyTo='$SoTiredPlzEnd'");
 $ReplyCheck=mysqli_fetch_array($CheckReplyIf,MYSQLI_ASSOC);
 $IwillNotBowReply=$ReplyCheck['REPLYCOUNTED'];
 if ($IwillNotBowReply!=0){
 echo "<div style='margin-left:2.3em;position:absolute;background-color:red;color:white;font-size:1.5em;border-radius:50%;padding:0.3em;margin-top:-3.4em;'>".$IwillNotBowReply."</div>"; 
 } 
 ?>

</div>
<script>
function Notify(){
var NotCont=document.getElementById('NotificationContent');
if 	(NotCont.style.display=='flex'){
NotCont.style.display='none';
document.getElementsByTagName("BODY")[0].style.overflow='initial';
load(window.location.href + " #NotificationContent" );
}else{
NotCont.style.display='flex';
document.getElementsByTagName("BODY")[0].style.overflow='hidden';
}
}	
</script>

<!--Over HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<style>#NotificationContent a{color:white;} </style>

<div id='NotificationContent' style='font-size:0.7vw;top:15em;z-index:9999;position:fixed;margin-left:auto;margin-right:auto;left:0;right:0;display:none;width:110em;height:50em;justify-content:center;align-items:center;border-radius:25px 25px 25px 25px;overflow:hidden;background-image:url(Pic/BgMailTopic.png);background-size:100% 100%;'>
<div id='NotifyTopics' style='width:42%;height:100%;background-image:url(Pic/Reply.png);background-size:12em 10em;background-position:5% 95%;background-repeat:no-repeat;'> <div style='height:5em;width:100%;text-align:center;background-color:rgb(91,0,0);'><span style='font-weight:bold;font-style:italic;font-size:1.5em;margin-top:1em;display:inline-block;color:gold;'>Replies To Your Topics</span><span style='position:absolute;left:39em;top:0.7em;'><button id='ReplyDeleteAllA'  style='border-radius:50%;padding:0.5em;width:4vw;height:auto;font-size:0.7vw;' onclick='DeleteThemAllA()'>Mark<br>them all</button></span> </div> 

<div style='width:100%;height:70%;font-size:1.34em;overflow-y:auto; word-break: break-all;'> 
<?php
if (isset($_SESSION['PlayerName'])){
$CurrentLog=$_SESSION['PlayerName'];
$getTopicsIds=mysqli_query($conn,"SELECT DISTINCT whichTopic FROM notificationtopic WHERE OwnerOfTopic='$CurrentLog'");
echo "<table style='background-color:rgb(0,0,0,0.6);width:100%;font-size:0.8em;'>";
echo "<tr>";
echo "<th style='padding-left:1em;padding-right:1em;background-color:black;font-size:1em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Topic<br>(click on to go) </th>";
echo "<th style='padding-left:1em;padding-right:1em;background-color:black;font-size:1em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Recent Replies<br>(including yours)</th>";
echo "<th style='padding-left:1em;padding-right:1em;background-color:black;font-size:1em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Disable <br>notification</th>";
echo "<th style='padding-left:1em;padding-right:1em;background-color:black;font-size:1em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Mark As<br>readed</th>";
echo "</tr>";

while ($TrGet=mysqli_fetch_array($getTopicsIds,MYSQLI_ASSOC)){
$IdOfIt=$TrGet['whichTopic'];
$QForMore=mysqli_query($conn,"SELECT NameOfTopic,GroupOfTopic FROM topic WHERE id='$IdOfIt'");
$TiredOfThis=mysqli_fetch_array($QForMore,MYSQLI_ASSOC);
$NameOfDaTopicc=$TiredOfThis['NameOfTopic'];
$GroupForLink=$TiredOfThis['GroupOfTopic'];
$countNot=mysqli_query($conn,"SELECT COUNT(id) AS Total FROM notificationtopic  WHERE whichTopic=$IdOfIt ");
$rowNot = $countNot->fetch_row();
$MaxRowsNot=$rowNot[0];
echo "<tr>";
echo "<td style='padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;color:white;max-width:22em;overflow:hidden;font-style:italic;' 
onhover='color:blue;'>";
echo "<a class='GoToTopicFromMail' href='posts?id=";
echo $GroupForLink;
echo "&topic=";
echo $IdOfIt;
echo "&postpage=0'>";
echo $NameOfDaTopicc;
echo "</a>";
echo "</td>";
echo "<td style='padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;'>";
echo "<span style='color:gold;border-radius:50%;border:1px solid rgb(91,0,0);background-color:rgb(47,166,208);display:inline-block;height:3em;width:3em;line-height:3em'>";
echo $MaxRowsNot;
echo "</span>";
echo "</td>";
echo "<td  style='padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;color:lightgreen;'>";
echo "<button class='StopNotify' style='width:4vw;height:auto;font-size:0.7vw;' onclick='o".$IdOfIt."()'>";
echo "<span id='g".$IdOfIt."'>";
$checkIfNotifyOn=mysqli_query($conn,"SELECT Notify FROM topic WHERE id='$IdOfIt'");
$traCheckIf=mysqli_fetch_array($checkIfNotifyOn,MYSQLI_ASSOC);
$notTired=$traCheckIf['Notify'];
if ($notTired=='1'){
	echo "&check;";
}else{
	echo "x";
}
echo "</span>";
echo "</button>";
echo "</td>";
echo "<td style='line-height:100%;text-align:center;'>";
echo "<button class='readedNotify' onclick='l".$IdOfIt."()' style='border-radius:35px 35px 35px 35px;width:4vw;height:auto;font-size:0.7vw;padding:0.5em;'>";
echo "<span id='l".$IdOfIt."' >";
echo "read";
echo "</span>";
echo "</button>";
echo "</td>";


echo "</tr>";
echo "<script>function l".$IdOfIt."(){var xhttpl".$IdOfIt."=new XMLHttpRequest();";

echo "xhttpl".$IdOfIt.".onreadystatechange = function() { document.getElementById('l".$IdOfIt."').innerHTML='Done'; };";

echo "xhttpl".$IdOfIt.".open(";
echo '"GET","ReadNotify.php?topic='.$IdOfIt.'",true);';
echo "xhttpl".$IdOfIt.".send();};";
echo "</script>";


echo "<script>function o".$IdOfIt."(){var xhttp".$IdOfIt."=new XMLHttpRequest();";

echo "xhttp".$IdOfIt.".onreadystatechange = function() { document.getElementById('g".$IdOfIt."').innerHTML='&check;'; };";

echo "xhttp".$IdOfIt.".open(";
echo '"GET","AjaxMe.php?topic='.$IdOfIt.'",true);';
echo "xhttp".$IdOfIt.".send();};";
echo "</script>";
};

echo "</table>";

}

 ?>

</div>

  </div>

<div id='NotifyReplies' style='border-left:1em solid black;width:58%;height:100%;background-image:url(Pic/OkReply.png);background-size:10em 10em;background-repeat:no-repeat;background-position:95% 95%;'>

<div style='height:5em;width:100%;text-align:center;background-color:rgb(91,0,0);'><span style='font-weight:bold;font-style:italic;font-size:1.5em;margin-top:1em;display:inline-block;color:gold;'>Replies To Your Posts</span><br><span style='color:orange;font-style:italic;font-size:1em;'>Click on Da reply will get you on the specific page of it</span> <span style='position:absolute;right:1.5em;top:0.7em;'><button id='ReplyDeleteAll' style='border-radius:50%;padding:0.5em;width:4vw;height:auto;font-size:0.7vw;' onclick='DeleteThemAll()'>Mark<br>them all</button></span></div>

<div style='width:100%;height:70%;font-size:1.34em;overflow-y:auto; word-break: break-all;'> 
<?php
if (isset($_SESSION['PlayerName'])){
$CurrentLog=$_SESSION['PlayerName'];
$ReplyGo=mysqli_query($conn,"SELECT id,ReplyTo,InTopic,ReplyFrom,ReplyText,postedAt,IdOfPostTable FROM reply WHERE ReplyTo='$CurrentLog'");
echo "<table style='background-color:rgb(0,0,0,0.6);width:100%;font-size:0.8em;'>";
echo "<tr>";
echo "<th style='padding-left:0.5em;padding-right:0.5em;background-color:black;font-size:0.9em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>InTopic<br>(click on to go) </th>";
echo "<th style='width:5.5em;padding-left:1em;padding-right:1em;background-color:black;font-size:0.9em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>DateTime<br>Of Reply</th>";
echo "<th style='width:9em;padding-left:0.2em;padding-right:0.2em;background-color:black;font-size:0.9em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Reply <br>From</th>";
echo "<th style='width:18em;padding-left:1em;padding-right:1em;background-color:black;font-size:0.9em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;'>Da  Reply</th>";
echo "<th style='padding-left:1em;padding-right:1em;background-color:black;font-size:0.9em;border-top:none;text-align:center;border-left:none;border-right:none;padding-bottom:0em;color:gold;-webkit-text-stroke-width:0em;-webkit-text-stroke-color:rgb(95,0,0);font-style:italic;font-size:0.7em;'>Mark  as <br> readed</th>";
echo "</tr>";

while ($TrGetA=mysqli_fetch_array($ReplyGo,MYSQLI_ASSOC)){
$IdOfItA=$TrGetA['InTopic'];
$QForMoreA=mysqli_query($conn,"SELECT NameOfTopic,GroupOfTopic FROM topic WHERE id='$IdOfItA'");
$TiredOfThisA=mysqli_fetch_array($QForMoreA,MYSQLI_ASSOC);
$NameOfDaTopiccA=$TiredOfThisA['NameOfTopic'];
$GroupForLinkA=$TiredOfThisA['GroupOfTopic'];
echo "<tr>";
echo "<td style='padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;max-width:22em;overflow:hidden;font-style:italic;border-top:1px solid white;'>";
echo "<a class='GoToTopicFromMail' href='posts?id=";
echo $GroupForLinkA;
echo "&topic=";
echo $IdOfItA;
echo "&postpage=0'>";
echo $NameOfDaTopiccA;
echo "</a>";
echo "</td>";
echo "<td style='color:orange;padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;border-top:1px solid white;'>";

echo $TrGetA['postedAt'];

echo "</td>";
echo "<td  style='padding-top:1em;padding-bottom:0.5em;text-align:center;border-left:none;border-right:none;color:lightgreen;border-top:1px solid white;'>";
echo $TrGetA['ReplyFrom'];
echo "</td>";
$IdInPostTable=$TrGetA['IdOfPostTable'];
$TakeNumberOfIt=mysqli_query($conn,"SELECT COUNT(*) AS TOTALNAIL FROM post WHERE id <='$IdInPostTable' AND GroupOfPost='$IdOfItA'");
$FinalIsIt=mysqli_fetch_array($TakeNumberOfIt,MYSQLI_ASSOC);
$HeyYouGetOut=$FinalIsIt['TOTALNAIL']/10;
$RoundThatHey=floor($HeyYouGetOut);
echo "<td class='RemDaBlue' style='color:white;border-top:1px solid white;height:5em;text-align:center;' onclick='location.href=";
echo '"posts?id=';
echo $GroupForLinkA;
echo "&topic=";
echo $IdOfItA;
echo '&postpage=';
echo $RoundThatHey;
echo '";';
echo "'>";

$trimDa=trim($TrGetA['ReplyText']);
echo $trimDa;



echo "</td>";

echo "<td style='border-top:1px solid white;display:table-cell;height:100%;text-align:center;padding-left:0.5em;'>";
echo "<button style='border-radius:35px 35px 35px 35px;width:4vw;height:4vh;font-size:0.7vw;' class='CheckThemAll' id='ol";
echo $TrGetA['id'];
echo "' onclick='ol";
echo $TrGetA['id'];
echo "()'>";
echo "Mark It";
echo "</button>";


echo "</td>";

echo "</tr>";


$fetaMePsomi=$TrGetA['id'];
echo "<script>function ol".$fetaMePsomi."(){var xhttpA".$fetaMePsomi."=new XMLHttpRequest();";

echo "xhttpA".$fetaMePsomi.".onreadystatechange = function() { document.getElementById('ol".$fetaMePsomi."').innerHTML='&check;'; };";

echo "xhttpA".$fetaMePsomi.".open(";
echo ' "GET","AjaxMeAgain.php?post='.$fetaMePsomi.'",true); ';
echo "xhttpA".$fetaMePsomi.".send();};";
echo "</script>";



};
echo "<script>function DeleteThemAll(){
var xhttpDeleteAll=new XMLHttpRequest();
xhttpDeleteAll.onreadystatechange=function(){var allButtons=document.getElementsByClassName('CheckThemAll');for (i=0;i<allButtons.length;i++){ allButtons[i].innerHTML='&check;'}; };
xhttpDeleteAll.open('GET','AjaxMassDeleteReply.php',true);
xhttpDeleteAll.send();}
</script>
	";


echo "<script>function DeleteThemAllA(){
var xhttpDeleteAllA=new XMLHttpRequest();
xhttpDeleteAllA.onreadystatechange=function(){var allButtonsA=document.getElementsByClassName('readedNotify');for (i=0;i<allButtonsA.length;i++){ allButtonsA[i].innerHTML='&check;'}; };
xhttpDeleteAllA.open('GET','AjaxMassDeleteReplyA.php',true);
xhttpDeleteAllA.send();}
</script>
	";


echo "<script>
$('.RemDaBlue').children('.Touchable').remove();
$('.RemDaBlue').children.trim();

</script>";
echo "<script>
var RemDaBlue=document.getElementsByClassName('RemDaBlue');
for (w=0;w<RemDaBlue.length;w++){

for (i=0;i<RemDaBlue[w].children.length;i++){

if (RemDaBlue[w].children[i].innerHTML==''){
	
	RemDaBlue[w].children[i].remove();
}
}

}
</script>";








echo "</table>";

}

 ?>
</div>

</div>

 </div>


