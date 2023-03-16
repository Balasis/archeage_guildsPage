<!-- YOU NEED TO CHANGE THE YEAR FROM 2020 INTO JAVASCRIPT VAR... YOU FORGOT IT ON TESTING. -->



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
$kariolis="kariolis"; 
?>
 <?php

$Year=gmdate("Y");
$Month=gmdate("F");
$NextMonth=gmdate("F",strtotime('+1month'));

if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;}
$TimeToCheck=gmdate("H:i:s");



?>
<?php 
if (isset($_POST['LogMeOut'])){
  $url="Index.php";
$_SESSION["authenticated"]="false";
session_start();
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
 <?php





if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;}
$TimeToCheck=gmdate("H:i:s");



?>
 <?php
if (isset($_POST["Mess"])){
$_SESSION['YEAR']=$_POST['Year'];
$_SESSION['MONTH']=$_POST['Year'];
$_SESSION['DAY']=$_POST['Day'];




}


  ?>

<?php
/*
$testCretSub=mkdir("Text/Events/Year",0755,true);*/
$testCreation=fopen("Text/Events/Year/text.txt","a");




 ?>




<!DOCTYPE html>
<html>
<head>

  <!--CSS-->
  <link rel="stylesheet" href="NotifyCss.css" type="text/css"/>
  <link rel="stylesheet" href="Events.css" type="text/css"/>

    <!--JAVASCRIPT LIBRARY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!--Resize For Devices-->
  <meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>

  <!--Creator-->
  <meta name="author" content="John balasis"/>

  <!--AFK KICK-->
  <meta http-equiv="refresh" content="9000"/>

  <meta charset="UTF-8"/> 

<style>
* {box-sizing: border-box}


</style>
<title>Events</title>

</head>
  <!--ZOOMS of sliders-->
    <div class="ZoomImage1Wrap">
            
              <div  class="Slide1PositionZoom">
                <span class="xXx" onclick="CloseZoom1()">X</span>
          <div class="SliderDiv1Zoom">
            <div class="numbertext1Zoom">1 / 5</div>
            <div class="imgHeightZoom" id="replicaZoom1"></div>
            <div class="text1Zoom" id="replicaZoom1Text"></div>
          </div>

          <div class="SliderDiv1Zoom">
            <div class="numbertext1Zoom">2 / 5</div>
            <div class="imgHeightZoom" id="replicaZoom2"></div>
            <div class="text1Zoom"  id="replicaZoom2Text"></div>
          </div>

          <div class="SliderDiv1Zoom">
            <div class="numbertext1Zoom">3 / 5</div>
          <div class="imgHeightZoom" id="replicaZoom3"></div>
            <div class="text1Zoom"  id="replicaZoom3Text"></div>
          </div>

          <div class="SliderDiv1Zoom">
            <div class="numbertext1Zoom">4 / 5</div>
            <div class="imgHeightZoom" id="replicaZoom4"></div>
            <div class="text1Zoom"  id="replicaZoom4Text"></div>
          </div>

          <div class="SliderDiv1Zoom">
            <div class="numbertext">5 / 5</div>
          <div class="imgHeightZoom" id="replicaZoom5"></div>
            <div class="text1Zoom"  id="replicaZoom5Text"></div>
          </div>
          <a class="prev1Zoom" onclick="howtriggers1(-1)">&#10094;</a>
        <a class="next1Zoom" onclick="howtriggers1(1)">&#10095;</a> 

            <div class="SliderQuote1Zoom"><p></p></div>
                            
      </div>


          </div>

<body onscroll="getScroll()" id="AsLong">
 







			
  <div id="WrapperFromBodyToWholePageDiv">
  
    <div id="WholePageDiv">

	



<!-- -->
<?php include "navbar.php" ?>


 
                                            
<div id="FlexBoxCallendar">
  <div id="MonthDiv"> 
    <a  id="getLost" onclick="Back()">&#10094;</a>
    <p id="Month"></p><p id="NextMonth"></p>
    <a  id="getLostToo" onclick="Forward(),NextMonthGlow()">&#10095;</a> 
        </div>
<div id="DaysName">
    <div id="Monday">Monday</div>  <div id="Tuesday">Tuesday</div>  <div id="Wednesday">Wednesday</div> 
    <div id="Thursday">Thursday</div> <div id="Friday">Friday</div> <div id="Saturday">Saturday</div> <div id="Sunday">Sunday</div>            
 </div>


   	<div id="CurrentMonth">

<label for="r1">
<div class="DaysGone"  id="d1" style="<?php $pathr1="Pic/Calendar/".$Year."/".$Month."/1/DaysGoneBg.png";
$errorpathr1a="Text/Events/".$Year."/".$Month."/1/denied.txt";
$PreTurnMtoNumr1a=$Month;$TurnMtoNumr1a=date("m",strtotime($PreTurnMtoNumr1a));  
  $gotodater1a=($Year."-".$TurnMtoNumr1a."-1");$dayr1a = date('l',strtotime($gotodater1a));$pathAltr1a="Pic/Calendar/".$dayr1a."/DaysGoneBg.png"; 
if (file_exists($pathr1)){echo "background-image:url(".$pathr1.") ;" ;}else if (file_exists($pathAltr1a) && !file_exists($errorpathr1a)){echo "background-image:url(".$pathAltr1a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da1">1</div>

	<div class="Gold" id="dan1"><?php   $pathr1g="Text/Events/".$Year."/".$Month."/1/gold.txt"; if (file_exists($pathr1g)){$goGetItr1g=file_get_contents($pathr1g); echo htmlspecialchars($goGetItr1g);}else{$errorpathr1g="Text/Events/".$Year."/".$Month."/1/denied.txt";$PreTurnMtoNumr1g=$Month;$TurnMtoNumr1g=date("m",strtotime($PreTurnMtoNumr1g));  
  $gotodater1g=($Year."-".$TurnMtoNumr1g."-1");$dayr1g = date('l',strtotime($gotodater1g));$pathAltr1g="Text/Events/".$dayr1g."/gold.txt";if (file_exists($pathAltr1g) && !file_exists($errorpathr1g)){$goGetItr1g=file_get_contents($pathAltr1g); echo htmlspecialchars($goGetItr1g); } } ?></div>

  <div class="Silver" id="dani1"><?php  $pathr1s="Text/Events/".$Year."/".$Month."/1/silver.txt";  if (file_exists($pathr1s)){$goGetItr1s=file_get_contents($pathr1s); echo htmlspecialchars($goGetItr1s);}else{$errorpathr1s="Text/Events/".$Year."/".$Month."/1/denied.txt";$PreTurnMtoNumr1s=$Month;$TurnMtoNumr1s=date("m",strtotime($PreTurnMtoNumr1s));  
  $gotodater1s=($Year."-".$TurnMtoNumr1s."-1");$dayr1s = date('l',strtotime($gotodater1s));$pathAltr1s="Text/Events/".$dayr1s."/silver.txt";if (file_exists($pathAltr1s) && !file_exists($errorpathr1s)){$goGetItr1s=file_get_contents($pathAltr1s); echo htmlspecialchars($goGetItr1s);}  } ?></div>

  <div class="Bronze" id="danie1"><?php  $pathr1b="Text/Events/".$Year."/".$Month."/1/bronze.txt";  if (file_exists($pathr1b)){$goGetItr1b=file_get_contents($pathr1b); echo htmlspecialchars($goGetItr1b);}else{$errorpathr1b="Text/Events/".$Year."/".$Month."/1/denied.txt";$PreTurnMtoNumr1b=$Month;$TurnMtoNumr1b=date("m",strtotime($PreTurnMtoNumr1b));  
  $gotodater1b=($Year."-".$TurnMtoNumr1b."-1");$dayr1b = date('l',strtotime($gotodater1b));$pathAltr1b="Text/Events/".$dayr1b."/bronze.txt";if (file_exists($pathAltr1b) && !file_exists($errorpathr1b)){$goGetItr1b=file_get_contents($pathAltr1b); echo htmlspecialchars($goGetItr1b);}  } ?></div> 

  <div class="Platinum" id="daniel1"><?php  $pathr1b="Text/Events/".$Year."/".$Month."/1/platinum.txt";  if (file_exists($pathr1b)){$goGetItr1b=file_get_contents($pathr1b); echo htmlspecialchars($goGetItr1b);}else{$errorpathr1b="Text/Events/".$Year."/".$Month."/1/denied.txt";$PreTurnMtoNumr1b=$Month;$TurnMtoNumr1b=date("m",strtotime($PreTurnMtoNumr1b));  
  $gotodater1b=($Year."-".$TurnMtoNumr1b."-1");$dayr1b = date('l',strtotime($gotodater1b));$pathAltr1b="Text/Events/".$dayr1b."/platinum.txt";if (file_exists($pathAltr1b) && !file_exists($errorpathr1b)){$goGetItr1b=file_get_contents($pathAltr1b); echo htmlspecialchars($goGetItr1b);}  } ?></div>

  <div class="Diamond" id="daniele1"><?php  $pathr1d="Text/Events/".$Year."/".$Month."/1/Diamond.txt";  if (file_exists($pathr1d)){$goGetItr1d=file_get_contents($pathr1d); echo htmlspecialchars($goGetItr1d);}else{$errorpathr1d="Text/Events/".$Year."/".$Month."/1/denied.txt";$PreTurnMtoNumr1d=$Month;$TurnMtoNumr1d=date("m",strtotime($PreTurnMtoNumr1d));  
  $gotodater1d=($Year."-".$TurnMtoNumr1d."-1");$dayr1d = date('l',strtotime($gotodater1d));$pathAltr1d="Text/Events/".$dayr1d."/diamond.txt";if (file_exists($pathAltr1d) && !file_exists($errorpathr1d)){$goGetItr1d=file_get_contents($pathAltr1d); echo htmlspecialchars($goGetItr1d);}  } ?></div> 

</div></label>


<label for="r2">
<div class="DaysGone"  id="d2" style="<?php $pathr2="Pic/Calendar/".$Year."/".$Month."/2/DaysGoneBg.png";
$errorpathr2a="Text/Events/".$Year."/".$Month."/2/denied.txt";
$PreTurnMtoNumr2a=$Month;$TurnMtoNumr2a=date("m",strtotime($PreTurnMtoNumr2a));  
  $gotodater2a=($Year."-".$TurnMtoNumr2a."-2");$dayr2a = date('l',strtotime($gotodater2a));$pathAltr2a="Pic/Calendar/".$dayr2a."/DaysGoneBg.png"; 
if (file_exists($pathr2)){echo "background-image:url(".$pathr2.") ;" ;}else if (file_exists($pathAltr2a) && !file_exists($errorpathr2a)){echo "background-image:url(".$pathAltr2a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da2">2</div>

	<div class="Gold" id="dan2"><?php   $pathr2g="Text/Events/".$Year."/".$Month."/2/gold.txt"; if (file_exists($pathr2g)){$goGetItr2g=file_get_contents($pathr2g); echo htmlspecialchars($goGetItr2g);}else{$errorpathr2g="Text/Events/".$Year."/".$Month."/2/denied.txt";$PreTurnMtoNumr2g=$Month;$TurnMtoNumr2g=date("m",strtotime($PreTurnMtoNumr2g));  
  $gotodater2g=($Year."-".$TurnMtoNumr2g."-2");$dayr2g = date('l',strtotime($gotodater2g));$pathAltr2g="Text/Events/".$dayr2g."/gold.txt";if (file_exists($pathAltr2g) && !file_exists($errorpathr2g)){$goGetItr2g=file_get_contents($pathAltr2g); echo htmlspecialchars($goGetItr2g); } } ?></div>

  <div class="Silver" id="dani2"><?php  $pathr2s="Text/Events/".$Year."/".$Month."/2/silver.txt";  if (file_exists($pathr2s)){$goGetItr2s=file_get_contents($pathr2s); echo htmlspecialchars($goGetItr2s);}else{$errorpathr2s="Text/Events/".$Year."/".$Month."/2/denied.txt";$PreTurnMtoNumr2s=$Month;$TurnMtoNumr2s=date("m",strtotime($PreTurnMtoNumr2s));  
  $gotodater2s=($Year."-".$TurnMtoNumr2s."-2");$dayr2s = date('l',strtotime($gotodater2s));$pathAltr2s="Text/Events/".$dayr2s."/silver.txt";if (file_exists($pathAltr2s) && !file_exists($errorpathr2s)){$goGetItr2s=file_get_contents($pathAltr2s); echo htmlspecialchars($goGetItr2s);}  } ?></div>

  <div class="Bronze" id="danie2"><?php  $pathr2b="Text/Events/".$Year."/".$Month."/2/bronze.txt";  if (file_exists($pathr2b)){$goGetItr2b=file_get_contents($pathr2b); echo htmlspecialchars($goGetItr2b);}else{$errorpathr2b="Text/Events/".$Year."/".$Month."/2/denied.txt";$PreTurnMtoNumr2b=$Month;$TurnMtoNumr2b=date("m",strtotime($PreTurnMtoNumr2b));  
  $gotodater2b=($Year."-".$TurnMtoNumr2b."-2");$dayr2b = date('l',strtotime($gotodater2b));$pathAltr2b="Text/Events/".$dayr2b."/bronze.txt";if (file_exists($pathAltr2b) && !file_exists($errorpathr2b)){$goGetItr2b=file_get_contents($pathAltr2b); echo htmlspecialchars($goGetItr2b);}  } ?></div> 

  <div class="Platinum" id="daniel2"><?php  $pathr2b="Text/Events/".$Year."/".$Month."/2/platinum.txt";  if (file_exists($pathr2b)){$goGetItr2b=file_get_contents($pathr2b); echo htmlspecialchars($goGetItr2b);}else{$errorpathr2b="Text/Events/".$Year."/".$Month."/2/denied.txt";$PreTurnMtoNumr2b=$Month;$TurnMtoNumr2b=date("m",strtotime($PreTurnMtoNumr2b));  
  $gotodater2b=($Year."-".$TurnMtoNumr2b."-2");$dayr2b = date('l',strtotime($gotodater2b));$pathAltr2b="Text/Events/".$dayr2b."/platinum.txt";if (file_exists($pathAltr2b) && !file_exists($errorpathr2b)){$goGetItr2b=file_get_contents($pathAltr2b); echo htmlspecialchars($goGetItr2b);}  } ?></div>

  <div class="Diamond" id="daniele2"><?php  $pathr2d="Text/Events/".$Year."/".$Month."/2/Diamond.txt";  if (file_exists($pathr2d)){$goGetItr2d=file_get_contents($pathr2d); echo htmlspecialchars($goGetItr2d);}else{$errorpathr2d="Text/Events/".$Year."/".$Month."/2/denied.txt";$PreTurnMtoNumr2d=$Month;$TurnMtoNumr2d=date("m",strtotime($PreTurnMtoNumr2d));  
  $gotodater2d=($Year."-".$TurnMtoNumr2d."-2");$dayr2d = date('l',strtotime($gotodater2d));$pathAltr2d="Text/Events/".$dayr2d."/diamond.txt";if (file_exists($pathAltr2d) && !file_exists($errorpathr2d)){$goGetItr2d=file_get_contents($pathAltr2d); echo htmlspecialchars($goGetItr2d);}  } ?></div>                       
</div></label>



<label for="r3">
<div class="DaysGone"  id="d3" style="<?php $pathr3="Pic/Calendar/".$Year."/".$Month."/3/DaysGoneBg.png";
$errorpathr3a="Text/Events/".$Year."/".$Month."/3/denied.txt";
$PreTurnMtoNumr3a=$Month;$TurnMtoNumr3a=date("m",strtotime($PreTurnMtoNumr3a));  
  $gotodater3a=($Year."-".$TurnMtoNumr3a."-3");$dayr3a = date('l',strtotime($gotodater3a));$pathAltr3a="Pic/Calendar/".$dayr3a."/DaysGoneBg.png"; 
if (file_exists($pathr3)){echo "background-image:url(".$pathr3.") ;" ;}else if (file_exists($pathAltr3a) && !file_exists($errorpathr3a)){echo "background-image:url(".$pathAltr3a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da3">3</div>

	<div class="Gold" id="dan3"><?php   $pathr3g="Text/Events/".$Year."/".$Month."/3/gold.txt"; if (file_exists($pathr3g)){$goGetItr3g=file_get_contents($pathr3g); echo htmlspecialchars($goGetItr3g);}else{$errorpathr3g="Text/Events/".$Year."/".$Month."/3/denied.txt";$PreTurnMtoNumr3g=$Month;$TurnMtoNumr3g=date("m",strtotime($PreTurnMtoNumr3g));  
  $gotodater3g=($Year."-".$TurnMtoNumr3g."-3");$dayr3g = date('l',strtotime($gotodater3g));$pathAltr3g="Text/Events/".$dayr3g."/gold.txt";if (file_exists($pathAltr3g) && !file_exists($errorpathr3g)){$goGetItr3g=file_get_contents($pathAltr3g); echo htmlspecialchars($goGetItr3g); } } ?></div>

  <div class="Silver" id="dani3"><?php  $pathr3s="Text/Events/".$Year."/".$Month."/3/silver.txt";  if (file_exists($pathr3s)){$goGetItr3s=file_get_contents($pathr3s); echo htmlspecialchars($goGetItr3s);}else{$errorpathr3s="Text/Events/".$Year."/".$Month."/3/denied.txt";$PreTurnMtoNumr3s=$Month;$TurnMtoNumr3s=date("m",strtotime($PreTurnMtoNumr3s));  
  $gotodater3s=($Year."-".$TurnMtoNumr3s."-3");$dayr3s = date('l',strtotime($gotodater3s));$pathAltr3s="Text/Events/".$dayr3s."/silver.txt";if (file_exists($pathAltr3s) && !file_exists($errorpathr3s)){$goGetItr3s=file_get_contents($pathAltr3s); echo htmlspecialchars($goGetItr3s);}  } ?></div>

  <div class="Bronze" id="danie3"><?php  $pathr3b="Text/Events/".$Year."/".$Month."/3/bronze.txt";  if (file_exists($pathr3b)){$goGetItr3b=file_get_contents($pathr3b); echo htmlspecialchars($goGetItr3b);}else{$errorpathr3b="Text/Events/".$Year."/".$Month."/3/denied.txt";$PreTurnMtoNumr3b=$Month;$TurnMtoNumr3b=date("m",strtotime($PreTurnMtoNumr3b));  
  $gotodater3b=($Year."-".$TurnMtoNumr3b."-3");$dayr3b = date('l',strtotime($gotodater3b));$pathAltr3b="Text/Events/".$dayr3b."/bronze.txt";if (file_exists($pathAltr3b) && !file_exists($errorpathr3b)){$goGetItr3b=file_get_contents($pathAltr3b); echo htmlspecialchars($goGetItr3b);}  } ?></div> 

  <div class="Platinum" id="daniel3"><?php  $pathr3b="Text/Events/".$Year."/".$Month."/3/platinum.txt";  if (file_exists($pathr3b)){$goGetItr3b=file_get_contents($pathr3b); echo htmlspecialchars($goGetItr3b);}else{$errorpathr3b="Text/Events/".$Year."/".$Month."/3/denied.txt";$PreTurnMtoNumr3b=$Month;$TurnMtoNumr3b=date("m",strtotime($PreTurnMtoNumr3b));  
  $gotodater3b=($Year."-".$TurnMtoNumr3b."-3");$dayr3b = date('l',strtotime($gotodater3b));$pathAltr3b="Text/Events/".$dayr3b."/platinum.txt";if (file_exists($pathAltr3b) && !file_exists($errorpathr3b)){$goGetItr3b=file_get_contents($pathAltr3b); echo htmlspecialchars($goGetItr3b);}  } ?></div>

  <div class="Diamond" id="daniele3"><?php  $pathr3d="Text/Events/".$Year."/".$Month."/3/Diamond.txt";  if (file_exists($pathr3d)){$goGetItr3d=file_get_contents($pathr3d); echo htmlspecialchars($goGetItr3d);}else{$errorpathr3d="Text/Events/".$Year."/".$Month."/3/denied.txt";$PreTurnMtoNumr3d=$Month;$TurnMtoNumr3d=date("m",strtotime($PreTurnMtoNumr3d));  
  $gotodater3d=($Year."-".$TurnMtoNumr3d."-3");$dayr3d = date('l',strtotime($gotodater3d));$pathAltr3d="Text/Events/".$dayr3d."/diamond.txt";if (file_exists($pathAltr3d) && !file_exists($errorpathr3d)){$goGetItr3d=file_get_contents($pathAltr3d); echo htmlspecialchars($goGetItr3d);}  } ?></div>                         
</div></label>



<label for="r4">
<div class="DaysGone"  id="d4" style="<?php $pathr4="Pic/Calendar/".$Year."/".$Month."/4/DaysGoneBg.png";
$errorpathr4a="Text/Events/".$Year."/".$Month."/4/denied.txt";
$PreTurnMtoNumr4a=$Month;$TurnMtoNumr4a=date("m",strtotime($PreTurnMtoNumr4a));  
  $gotodater4a=($Year."-".$TurnMtoNumr4a."-4");$dayr4a = date('l',strtotime($gotodater4a));$pathAltr4a="Pic/Calendar/".$dayr4a."/DaysGoneBg.png"; 
if (file_exists($pathr4)){echo "background-image:url(".$pathr4.") ;" ;}else if (file_exists($pathAltr4a) && !file_exists($errorpathr4a)){echo "background-image:url(".$pathAltr4a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da4">4</div>

	<div class="Gold" id="dan4"><?php   $pathr4g="Text/Events/".$Year."/".$Month."/4/gold.txt"; if (file_exists($pathr4g)){$goGetItr4g=file_get_contents($pathr4g); echo htmlspecialchars($goGetItr4g);}else{$errorpathr4g="Text/Events/".$Year."/".$Month."/4/denied.txt";$PreTurnMtoNumr4g=$Month;$TurnMtoNumr4g=date("m",strtotime($PreTurnMtoNumr4g));  
  $gotodater4g=($Year."-".$TurnMtoNumr4g."-4");$dayr4g = date('l',strtotime($gotodater4g));$pathAltr4g="Text/Events/".$dayr4g."/gold.txt";if (file_exists($pathAltr4g) && !file_exists($errorpathr4g)){$goGetItr4g=file_get_contents($pathAltr4g); echo htmlspecialchars($goGetItr4g); } } ?></div>

  <div class="Silver" id="dani4"><?php  $pathr4s="Text/Events/".$Year."/".$Month."/4/silver.txt";  if (file_exists($pathr4s)){$goGetItr4s=file_get_contents($pathr4s); echo htmlspecialchars($goGetItr4s);}else{$errorpathr4s="Text/Events/".$Year."/".$Month."/4/denied.txt";$PreTurnMtoNumr4s=$Month;$TurnMtoNumr4s=date("m",strtotime($PreTurnMtoNumr4s));  
  $gotodater4s=($Year."-".$TurnMtoNumr4s."-4");$dayr4s = date('l',strtotime($gotodater4s));$pathAltr4s="Text/Events/".$dayr4s."/silver.txt";if (file_exists($pathAltr4s) && !file_exists($errorpathr4s)){$goGetItr4s=file_get_contents($pathAltr4s); echo htmlspecialchars($goGetItr4s);}  } ?></div>

  <div class="Bronze" id="danie4"><?php  $pathr4b="Text/Events/".$Year."/".$Month."/4/bronze.txt";  if (file_exists($pathr4b)){$goGetItr4b=file_get_contents($pathr4b); echo htmlspecialchars($goGetItr4b);}else{$errorpathr4b="Text/Events/".$Year."/".$Month."/4/denied.txt";$PreTurnMtoNumr4b=$Month;$TurnMtoNumr4b=date("m",strtotime($PreTurnMtoNumr4b));  
  $gotodater4b=($Year."-".$TurnMtoNumr4b."-4");$dayr4b = date('l',strtotime($gotodater4b));$pathAltr4b="Text/Events/".$dayr4b."/bronze.txt";if (file_exists($pathAltr4b) && !file_exists($errorpathr4b)){$goGetItr4b=file_get_contents($pathAltr4b); echo htmlspecialchars($goGetItr4b);}  } ?></div> 

  <div class="Platinum" id="daniel4"><?php  $pathr4b="Text/Events/".$Year."/".$Month."/4/platinum.txt";  if (file_exists($pathr4b)){$goGetItr4b=file_get_contents($pathr4b); echo htmlspecialchars($goGetItr4b);}else{$errorpathr4b="Text/Events/".$Year."/".$Month."/4/denied.txt";$PreTurnMtoNumr4b=$Month;$TurnMtoNumr4b=date("m",strtotime($PreTurnMtoNumr4b));  
  $gotodater4b=($Year."-".$TurnMtoNumr4b."-4");$dayr4b = date('l',strtotime($gotodater4b));$pathAltr4b="Text/Events/".$dayr4b."/platinum.txt";if (file_exists($pathAltr4b) && !file_exists($errorpathr4b)){$goGetItr4b=file_get_contents($pathAltr4b); echo htmlspecialchars($goGetItr4b);}  } ?></div>

  <div class="Diamond" id="daniele4"><?php  $pathr4d="Text/Events/".$Year."/".$Month."/4/Diamond.txt";  if (file_exists($pathr4d)){$goGetItr4d=file_get_contents($pathr4d); echo htmlspecialchars($goGetItr4d);}else{$errorpathr4d="Text/Events/".$Year."/".$Month."/4/denied.txt";$PreTurnMtoNumr4d=$Month;$TurnMtoNumr4d=date("m",strtotime($PreTurnMtoNumr4d));  
  $gotodater4d=($Year."-".$TurnMtoNumr4d."-4");$dayr4d = date('l',strtotime($gotodater4d));$pathAltr4d="Text/Events/".$dayr4d."/diamond.txt";if (file_exists($pathAltr4d) && !file_exists($errorpathr4d)){$goGetItr4d=file_get_contents($pathAltr4d); echo htmlspecialchars($goGetItr4d);}  } ?></div>                         
</div></label>



<label for="r5">
<div class="DaysGone"  id="d5" style="<?php $pathr5="Pic/Calendar/".$Year."/".$Month."/5/DaysGoneBg.png";
$errorpathr5a="Text/Events/".$Year."/".$Month."/5/denied.txt";
$PreTurnMtoNumr5a=$Month;$TurnMtoNumr5a=date("m",strtotime($PreTurnMtoNumr5a));  
  $gotodater5a=($Year."-".$TurnMtoNumr5a."-5");$dayr5a = date('l',strtotime($gotodater5a));$pathAltr5a="Pic/Calendar/".$dayr5a."/DaysGoneBg.png"; 
if (file_exists($pathr5)){echo "background-image:url(".$pathr5.") ;" ;}else if (file_exists($pathAltr5a) && !file_exists($errorpathr5a)){echo "background-image:url(".$pathAltr5a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da5">5</div>

	<div class="Gold" id="dan5"><?php   $pathr5g="Text/Events/".$Year."/".$Month."/5/gold.txt"; if (file_exists($pathr5g)){$goGetItr5g=file_get_contents($pathr5g); echo htmlspecialchars($goGetItr5g);}else{$errorpathr5g="Text/Events/".$Year."/".$Month."/5/denied.txt";$PreTurnMtoNumr5g=$Month;$TurnMtoNumr5g=date("m",strtotime($PreTurnMtoNumr5g));  
  $gotodater5g=($Year."-".$TurnMtoNumr5g."-5");$dayr5g = date('l',strtotime($gotodater5g));$pathAltr5g="Text/Events/".$dayr5g."/gold.txt";if (file_exists($pathAltr5g) && !file_exists($errorpathr5g)){$goGetItr5g=file_get_contents($pathAltr5g); echo htmlspecialchars($goGetItr5g); } } ?></div>

  <div class="Silver" id="dani5"><?php  $pathr5s="Text/Events/".$Year."/".$Month."/5/silver.txt";  if (file_exists($pathr5s)){$goGetItr5s=file_get_contents($pathr5s); echo htmlspecialchars($goGetItr5s);}else{$errorpathr5s="Text/Events/".$Year."/".$Month."/5/denied.txt";$PreTurnMtoNumr5s=$Month;$TurnMtoNumr5s=date("m",strtotime($PreTurnMtoNumr5s));  
  $gotodater5s=($Year."-".$TurnMtoNumr5s."-5");$dayr5s = date('l',strtotime($gotodater5s));$pathAltr5s="Text/Events/".$dayr5s."/silver.txt";if (file_exists($pathAltr5s) && !file_exists($errorpathr5s)){$goGetItr5s=file_get_contents($pathAltr5s); echo htmlspecialchars($goGetItr5s);}  } ?></div>

  <div class="Bronze" id="danie5"><?php  $pathr5b="Text/Events/".$Year."/".$Month."/5/bronze.txt";  if (file_exists($pathr5b)){$goGetItr5b=file_get_contents($pathr5b); echo htmlspecialchars($goGetItr5b);}else{$errorpathr5b="Text/Events/".$Year."/".$Month."/5/denied.txt";$PreTurnMtoNumr5b=$Month;$TurnMtoNumr5b=date("m",strtotime($PreTurnMtoNumr5b));  
  $gotodater5b=($Year."-".$TurnMtoNumr5b."-5");$dayr5b = date('l',strtotime($gotodater5b));$pathAltr5b="Text/Events/".$dayr5b."/bronze.txt";if (file_exists($pathAltr5b) && !file_exists($errorpathr5b)){$goGetItr5b=file_get_contents($pathAltr5b); echo htmlspecialchars($goGetItr5b);}  } ?></div> 

  <div class="Platinum" id="daniel5"><?php  $pathr5b="Text/Events/".$Year."/".$Month."/5/platinum.txt";  if (file_exists($pathr5b)){$goGetItr5b=file_get_contents($pathr5b); echo htmlspecialchars($goGetItr5b);}else{$errorpathr5b="Text/Events/".$Year."/".$Month."/5/denied.txt";$PreTurnMtoNumr5b=$Month;$TurnMtoNumr5b=date("m",strtotime($PreTurnMtoNumr5b));  
  $gotodater5b=($Year."-".$TurnMtoNumr5b."-5");$dayr5b = date('l',strtotime($gotodater5b));$pathAltr5b="Text/Events/".$dayr5b."/platinum.txt";if (file_exists($pathAltr5b) && !file_exists($errorpathr5b)){$goGetItr5b=file_get_contents($pathAltr5b); echo htmlspecialchars($goGetItr5b);}  } ?></div>

  <div class="Diamond" id="daniele5"><?php  $pathr5d="Text/Events/".$Year."/".$Month."/5/Diamond.txt";  if (file_exists($pathr5d)){$goGetItr5d=file_get_contents($pathr5d); echo htmlspecialchars($goGetItr5d);}else{$errorpathr5d="Text/Events/".$Year."/".$Month."/5/denied.txt";$PreTurnMtoNumr5d=$Month;$TurnMtoNumr5d=date("m",strtotime($PreTurnMtoNumr5d));  
  $gotodater5d=($Year."-".$TurnMtoNumr5d."-5");$dayr5d = date('l',strtotime($gotodater5d));$pathAltr5d="Text/Events/".$dayr5d."/diamond.txt";if (file_exists($pathAltr5d) && !file_exists($errorpathr5d)){$goGetItr5d=file_get_contents($pathAltr5d); echo htmlspecialchars($goGetItr5d);}  } ?></div>                          
</div></label>



<label for="r6">
<div class="DaysGone"  id="d6" style="<?php $pathr6="Pic/Calendar/".$Year."/".$Month."/6/DaysGoneBg.png";
$errorpathr6a="Text/Events/".$Year."/".$Month."/6/denied.txt";
$PreTurnMtoNumr6a=$Month;$TurnMtoNumr6a=date("m",strtotime($PreTurnMtoNumr6a));  
  $gotodater6a=($Year."-".$TurnMtoNumr6a."-6");$dayr6a = date('l',strtotime($gotodater6a));$pathAltr6a="Pic/Calendar/".$dayr6a."/DaysGoneBg.png"; 
if (file_exists($pathr6)){echo "background-image:url(".$pathr6.") ;" ;}else if (file_exists($pathAltr6a) && !file_exists($errorpathr6a)){echo "background-image:url(".$pathAltr6a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da6">6</div>

	<div class="Gold" id="dan6"><?php   $pathr6g="Text/Events/".$Year."/".$Month."/6/gold.txt"; if (file_exists($pathr6g)){$goGetItr6g=file_get_contents($pathr6g); echo htmlspecialchars($goGetItr6g);}else{$errorpathr6g="Text/Events/".$Year."/".$Month."/6/denied.txt";$PreTurnMtoNumr6g=$Month;$TurnMtoNumr6g=date("m",strtotime($PreTurnMtoNumr6g));  
  $gotodater6g=($Year."-".$TurnMtoNumr6g."-6");$dayr6g = date('l',strtotime($gotodater6g));$pathAltr6g="Text/Events/".$dayr6g."/gold.txt";if (file_exists($pathAltr6g) && !file_exists($errorpathr6g)){$goGetItr6g=file_get_contents($pathAltr6g); echo htmlspecialchars($goGetItr6g); } } ?></div>

  <div class="Silver" id="dani6"><?php  $pathr6s="Text/Events/".$Year."/".$Month."/6/silver.txt";  if (file_exists($pathr6s)){$goGetItr6s=file_get_contents($pathr6s); echo htmlspecialchars($goGetItr6s);}else{$errorpathr6s="Text/Events/".$Year."/".$Month."/6/denied.txt";$PreTurnMtoNumr6s=$Month;$TurnMtoNumr6s=date("m",strtotime($PreTurnMtoNumr6s));  
  $gotodater6s=($Year."-".$TurnMtoNumr6s."-6");$dayr6s = date('l',strtotime($gotodater6s));$pathAltr6s="Text/Events/".$dayr6s."/silver.txt";if (file_exists($pathAltr6s) && !file_exists($errorpathr6s)){$goGetItr6s=file_get_contents($pathAltr6s); echo htmlspecialchars($goGetItr6s);}  } ?></div>

  <div class="Bronze" id="danie6"><?php  $pathr6b="Text/Events/".$Year."/".$Month."/6/bronze.txt";  if (file_exists($pathr6b)){$goGetItr6b=file_get_contents($pathr6b); echo htmlspecialchars($goGetItr6b);}else{$errorpathr6b="Text/Events/".$Year."/".$Month."/6/denied.txt";$PreTurnMtoNumr6b=$Month;$TurnMtoNumr6b=date("m",strtotime($PreTurnMtoNumr6b));  
  $gotodater6b=($Year."-".$TurnMtoNumr6b."-6");$dayr6b = date('l',strtotime($gotodater6b));$pathAltr6b="Text/Events/".$dayr6b."/bronze.txt";if (file_exists($pathAltr6b) && !file_exists($errorpathr6b)){$goGetItr6b=file_get_contents($pathAltr6b); echo htmlspecialchars($goGetItr6b);}  } ?></div> 

  <div class="Platinum" id="daniel6"><?php  $pathr6b="Text/Events/".$Year."/".$Month."/6/platinum.txt";  if (file_exists($pathr6b)){$goGetItr6b=file_get_contents($pathr6b); echo htmlspecialchars($goGetItr6b);}else{$errorpathr6b="Text/Events/".$Year."/".$Month."/6/denied.txt";$PreTurnMtoNumr6b=$Month;$TurnMtoNumr6b=date("m",strtotime($PreTurnMtoNumr6b));  
  $gotodater6b=($Year."-".$TurnMtoNumr6b."-6");$dayr6b = date('l',strtotime($gotodater6b));$pathAltr6b="Text/Events/".$dayr6b."/platinum.txt";if (file_exists($pathAltr6b) && !file_exists($errorpathr6b)){$goGetItr6b=file_get_contents($pathAltr6b); echo htmlspecialchars($goGetItr6b);}  } ?></div>

  <div class="Diamond" id="daniele6"><?php  $pathr6d="Text/Events/".$Year."/".$Month."/6/Diamond.txt";  if (file_exists($pathr6d)){$goGetItr6d=file_get_contents($pathr6d); echo htmlspecialchars($goGetItr6d);}else{$errorpathr6d="Text/Events/".$Year."/".$Month."/6/denied.txt";$PreTurnMtoNumr6d=$Month;$TurnMtoNumr6d=date("m",strtotime($PreTurnMtoNumr6d));  
  $gotodater6d=($Year."-".$TurnMtoNumr6d."-6");$dayr6d = date('l',strtotime($gotodater6d));$pathAltr6d="Text/Events/".$dayr6d."/diamond.txt";if (file_exists($pathAltr6d) && !file_exists($errorpathr6d)){$goGetItr6d=file_get_contents($pathAltr6d); echo htmlspecialchars($goGetItr6d);}  } ?></div>                          
</div></label>



<label for="r7">
<div class="DaysGone"  id="d7" style="<?php $pathr7="Pic/Calendar/".$Year."/".$Month."/7/DaysGoneBg.png";
$errorpathr7a="Text/Events/".$Year."/".$Month."/7/denied.txt";
$PreTurnMtoNumr7a=$Month;$TurnMtoNumr7a=date("m",strtotime($PreTurnMtoNumr7a));  
  $gotodater7a=($Year."-".$TurnMtoNumr7a."-7");$dayr7a = date('l',strtotime($gotodater7a));$pathAltr7a="Pic/Calendar/".$dayr7a."/DaysGoneBg.png"; 
if (file_exists($pathr7)){echo "background-image:url(".$pathr7.") ;" ;}else if (file_exists($pathAltr7a) && !file_exists($errorpathr7a)){echo "background-image:url(".$pathAltr7a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da7">7</div>

	<div class="Gold" id="dan7"><?php   $pathr7g="Text/Events/".$Year."/".$Month."/7/gold.txt"; if (file_exists($pathr7g)){$goGetItr7g=file_get_contents($pathr7g); echo htmlspecialchars($goGetItr7g);}else{$errorpathr7g="Text/Events/".$Year."/".$Month."/7/denied.txt";$PreTurnMtoNumr7g=$Month;$TurnMtoNumr7g=date("m",strtotime($PreTurnMtoNumr7g));  
  $gotodater7g=($Year."-".$TurnMtoNumr7g."-7");$dayr7g = date('l',strtotime($gotodater7g));$pathAltr7g="Text/Events/".$dayr7g."/gold.txt";if (file_exists($pathAltr7g) && !file_exists($errorpathr7g)){$goGetItr7g=file_get_contents($pathAltr7g); echo htmlspecialchars($goGetItr7g); } } ?></div>

  <div class="Silver" id="dani7"><?php  $pathr7s="Text/Events/".$Year."/".$Month."/7/silver.txt";  if (file_exists($pathr7s)){$goGetItr7s=file_get_contents($pathr7s); echo htmlspecialchars($goGetItr7s);}else{$errorpathr7s="Text/Events/".$Year."/".$Month."/7/denied.txt";$PreTurnMtoNumr7s=$Month;$TurnMtoNumr7s=date("m",strtotime($PreTurnMtoNumr7s));  
  $gotodater7s=($Year."-".$TurnMtoNumr7s."-7");$dayr7s = date('l',strtotime($gotodater7s));$pathAltr7s="Text/Events/".$dayr7s."/silver.txt";if (file_exists($pathAltr7s) && !file_exists($errorpathr7s)){$goGetItr7s=file_get_contents($pathAltr7s); echo htmlspecialchars($goGetItr7s);}  } ?></div>

  <div class="Bronze" id="danie7"><?php  $pathr7b="Text/Events/".$Year."/".$Month."/7/bronze.txt";  if (file_exists($pathr7b)){$goGetItr7b=file_get_contents($pathr7b); echo htmlspecialchars($goGetItr7b);}else{$errorpathr7b="Text/Events/".$Year."/".$Month."/7/denied.txt";$PreTurnMtoNumr7b=$Month;$TurnMtoNumr7b=date("m",strtotime($PreTurnMtoNumr7b));  
  $gotodater7b=($Year."-".$TurnMtoNumr7b."-7");$dayr7b = date('l',strtotime($gotodater7b));$pathAltr7b="Text/Events/".$dayr7b."/bronze.txt";if (file_exists($pathAltr7b) && !file_exists($errorpathr7b)){$goGetItr7b=file_get_contents($pathAltr7b); echo htmlspecialchars($goGetItr7b);}  } ?></div> 

  <div class="Platinum" id="daniel7"><?php  $pathr7b="Text/Events/".$Year."/".$Month."/7/platinum.txt";  if (file_exists($pathr7b)){$goGetItr7b=file_get_contents($pathr7b); echo htmlspecialchars($goGetItr7b);}else{$errorpathr7b="Text/Events/".$Year."/".$Month."/7/denied.txt";$PreTurnMtoNumr7b=$Month;$TurnMtoNumr7b=date("m",strtotime($PreTurnMtoNumr7b));  
  $gotodater7b=($Year."-".$TurnMtoNumr7b."-7");$dayr7b = date('l',strtotime($gotodater7b));$pathAltr7b="Text/Events/".$dayr7b."/platinum.txt";if (file_exists($pathAltr7b) && !file_exists($errorpathr7b)){$goGetItr7b=file_get_contents($pathAltr7b); echo htmlspecialchars($goGetItr7b);}  } ?></div>

  <div class="Diamond" id="daniele7"><?php  $pathr7d="Text/Events/".$Year."/".$Month."/7/Diamond.txt";  if (file_exists($pathr7d)){$goGetItr7d=file_get_contents($pathr7d); echo htmlspecialchars($goGetItr7d);}else{$errorpathr7d="Text/Events/".$Year."/".$Month."/7/denied.txt";$PreTurnMtoNumr7d=$Month;$TurnMtoNumr7d=date("m",strtotime($PreTurnMtoNumr7d));  
  $gotodater7d=($Year."-".$TurnMtoNumr7d."-7");$dayr7d = date('l',strtotime($gotodater7d));$pathAltr7d="Text/Events/".$dayr7d."/diamond.txt";if (file_exists($pathAltr7d) && !file_exists($errorpathr7d)){$goGetItr7d=file_get_contents($pathAltr7d); echo htmlspecialchars($goGetItr7d);}  } ?></div>                         
</div></label>



<label for="r8">
<div class="DaysGone"  id="d8" style="<?php $pathr8="Pic/Calendar/".$Year."/".$Month."/8/DaysGoneBg.png";
$errorpathr8a="Text/Events/".$Year."/".$Month."/8/denied.txt";
$PreTurnMtoNumr8a=$Month;$TurnMtoNumr8a=date("m",strtotime($PreTurnMtoNumr8a));  
  $gotodater8a=($Year."-".$TurnMtoNumr8a."-8");$dayr8a = date('l',strtotime($gotodater8a));$pathAltr8a="Pic/Calendar/".$dayr8a."/DaysGoneBg.png"; 
if (file_exists($pathr8)){echo "background-image:url(".$pathr8.") ;" ;}else if (file_exists($pathAltr8a) && !file_exists($errorpathr8a)){echo "background-image:url(".$pathAltr8a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da8">8</div>

	<div class="Gold" id="dan8"><?php   $pathr8g="Text/Events/".$Year."/".$Month."/8/gold.txt"; if (file_exists($pathr8g)){$goGetItr8g=file_get_contents($pathr8g); echo htmlspecialchars($goGetItr8g);}else{$errorpathr8g="Text/Events/".$Year."/".$Month."/8/denied.txt";$PreTurnMtoNumr8g=$Month;$TurnMtoNumr8g=date("m",strtotime($PreTurnMtoNumr8g));  
  $gotodater8g=($Year."-".$TurnMtoNumr8g."-8");$dayr8g = date('l',strtotime($gotodater8g));$pathAltr8g="Text/Events/".$dayr8g."/gold.txt";if (file_exists($pathAltr8g) && !file_exists($errorpathr8g)){$goGetItr8g=file_get_contents($pathAltr8g); echo htmlspecialchars($goGetItr8g); } } ?></div>

  <div class="Silver" id="dani8"><?php  $pathr8s="Text/Events/".$Year."/".$Month."/8/silver.txt";  if (file_exists($pathr8s)){$goGetItr8s=file_get_contents($pathr8s); echo htmlspecialchars($goGetItr8s);}else{$errorpathr8s="Text/Events/".$Year."/".$Month."/8/denied.txt";$PreTurnMtoNumr8s=$Month;$TurnMtoNumr8s=date("m",strtotime($PreTurnMtoNumr8s));  
  $gotodater8s=($Year."-".$TurnMtoNumr8s."-8");$dayr8s = date('l',strtotime($gotodater8s));$pathAltr8s="Text/Events/".$dayr8s."/silver.txt";if (file_exists($pathAltr8s) && !file_exists($errorpathr8s)){$goGetItr8s=file_get_contents($pathAltr8s); echo htmlspecialchars($goGetItr8s);}  } ?></div>

  <div class="Bronze" id="danie8"><?php  $pathr8b="Text/Events/".$Year."/".$Month."/8/bronze.txt";  if (file_exists($pathr8b)){$goGetItr8b=file_get_contents($pathr8b); echo htmlspecialchars($goGetItr8b);}else{$errorpathr8b="Text/Events/".$Year."/".$Month."/8/denied.txt";$PreTurnMtoNumr8b=$Month;$TurnMtoNumr8b=date("m",strtotime($PreTurnMtoNumr8b));  
  $gotodater8b=($Year."-".$TurnMtoNumr8b."-8");$dayr8b = date('l',strtotime($gotodater8b));$pathAltr8b="Text/Events/".$dayr8b."/bronze.txt";if (file_exists($pathAltr8b) && !file_exists($errorpathr8b)){$goGetItr8b=file_get_contents($pathAltr8b); echo htmlspecialchars($goGetItr8b);}  } ?></div> 

  <div class="Platinum" id="daniel8"><?php  $pathr8b="Text/Events/".$Year."/".$Month."/8/platinum.txt";  if (file_exists($pathr8b)){$goGetItr8b=file_get_contents($pathr8b); echo htmlspecialchars($goGetItr8b);}else{$errorpathr8b="Text/Events/".$Year."/".$Month."/8/denied.txt";$PreTurnMtoNumr8b=$Month;$TurnMtoNumr8b=date("m",strtotime($PreTurnMtoNumr8b));  
  $gotodater8b=($Year."-".$TurnMtoNumr8b."-8");$dayr8b = date('l',strtotime($gotodater8b));$pathAltr8b="Text/Events/".$dayr8b."/platinum.txt";if (file_exists($pathAltr8b) && !file_exists($errorpathr8b)){$goGetItr8b=file_get_contents($pathAltr8b); echo htmlspecialchars($goGetItr8b);}  } ?></div>

  <div class="Diamond" id="daniele8"><?php  $pathr8d="Text/Events/".$Year."/".$Month."/8/Diamond.txt";  if (file_exists($pathr8d)){$goGetItr8d=file_get_contents($pathr8d); echo htmlspecialchars($goGetItr8d);}else{$errorpathr8d="Text/Events/".$Year."/".$Month."/8/denied.txt";$PreTurnMtoNumr8d=$Month;$TurnMtoNumr8d=date("m",strtotime($PreTurnMtoNumr8d));  
  $gotodater8d=($Year."-".$TurnMtoNumr8d."-8");$dayr8d = date('l',strtotime($gotodater8d));$pathAltr8d="Text/Events/".$dayr8d."/diamond.txt";if (file_exists($pathAltr8d) && !file_exists($errorpathr8d)){$goGetItr8d=file_get_contents($pathAltr8d); echo htmlspecialchars($goGetItr8d);}  } ?></div>                         
</div></label>



<label for="r9">
<div class="DaysGone"  id="d9" style="<?php $pathr9="Pic/Calendar/".$Year."/".$Month."/9/DaysGoneBg.png";
$errorpathr9a="Text/Events/".$Year."/".$Month."/9/denied.txt";
$PreTurnMtoNumr9a=$Month;$TurnMtoNumr9a=date("m",strtotime($PreTurnMtoNumr9a));  
  $gotodater9a=($Year."-".$TurnMtoNumr9a."-9");$dayr9a = date('l',strtotime($gotodater9a));$pathAltr9a="Pic/Calendar/".$dayr9a."/DaysGoneBg.png"; 
if (file_exists($pathr9)){echo "background-image:url(".$pathr9.") ;" ;}else if (file_exists($pathAltr9a) && !file_exists($errorpathr9a)){echo "background-image:url(".$pathAltr9a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da9">9</div>

	<div class="Gold" id="dan9"><?php   $pathr9g="Text/Events/".$Year."/".$Month."/9/gold.txt"; if (file_exists($pathr9g)){$goGetItr9g=file_get_contents($pathr9g); echo htmlspecialchars($goGetItr9g);}else{$errorpathr9g="Text/Events/".$Year."/".$Month."/9/denied.txt";$PreTurnMtoNumr9g=$Month;$TurnMtoNumr9g=date("m",strtotime($PreTurnMtoNumr9g));  
  $gotodater9g=($Year."-".$TurnMtoNumr9g."-9");$dayr9g = date('l',strtotime($gotodater9g));$pathAltr9g="Text/Events/".$dayr9g."/gold.txt";if (file_exists($pathAltr9g) && !file_exists($errorpathr9g)){$goGetItr9g=file_get_contents($pathAltr9g); echo htmlspecialchars($goGetItr9g); } } ?></div>

  <div class="Silver" id="dani9"><?php  $pathr9s="Text/Events/".$Year."/".$Month."/9/silver.txt";  if (file_exists($pathr9s)){$goGetItr9s=file_get_contents($pathr9s); echo htmlspecialchars($goGetItr9s);}else{$errorpathr9s="Text/Events/".$Year."/".$Month."/9/denied.txt";$PreTurnMtoNumr9s=$Month;$TurnMtoNumr9s=date("m",strtotime($PreTurnMtoNumr9s));  
  $gotodater9s=($Year."-".$TurnMtoNumr9s."-9");$dayr9s = date('l',strtotime($gotodater9s));$pathAltr9s="Text/Events/".$dayr9s."/silver.txt";if (file_exists($pathAltr9s) && !file_exists($errorpathr9s)){$goGetItr9s=file_get_contents($pathAltr9s); echo htmlspecialchars($goGetItr9s);}  } ?></div>

  <div class="Bronze" id="danie9"><?php  $pathr9b="Text/Events/".$Year."/".$Month."/9/bronze.txt";  if (file_exists($pathr9b)){$goGetItr9b=file_get_contents($pathr9b); echo htmlspecialchars($goGetItr9b);}else{$errorpathr9b="Text/Events/".$Year."/".$Month."/9/denied.txt";$PreTurnMtoNumr9b=$Month;$TurnMtoNumr9b=date("m",strtotime($PreTurnMtoNumr9b));  
  $gotodater9b=($Year."-".$TurnMtoNumr9b."-9");$dayr9b = date('l',strtotime($gotodater9b));$pathAltr9b="Text/Events/".$dayr9b."/bronze.txt";if (file_exists($pathAltr9b) && !file_exists($errorpathr9b)){$goGetItr9b=file_get_contents($pathAltr9b); echo htmlspecialchars($goGetItr9b);}  } ?></div> 

  <div class="Platinum" id="daniel9"><?php  $pathr9b="Text/Events/".$Year."/".$Month."/9/platinum.txt";  if (file_exists($pathr9b)){$goGetItr9b=file_get_contents($pathr9b); echo htmlspecialchars($goGetItr9b);}else{$errorpathr9b="Text/Events/".$Year."/".$Month."/9/denied.txt";$PreTurnMtoNumr9b=$Month;$TurnMtoNumr9b=date("m",strtotime($PreTurnMtoNumr9b));  
  $gotodater9b=($Year."-".$TurnMtoNumr9b."-9");$dayr9b = date('l',strtotime($gotodater9b));$pathAltr9b="Text/Events/".$dayr9b."/platinum.txt";if (file_exists($pathAltr9b) && !file_exists($errorpathr9b)){$goGetItr9b=file_get_contents($pathAltr9b); echo htmlspecialchars($goGetItr9b);}  } ?></div>

  <div class="Diamond" id="daniele9"><?php  $pathr9d="Text/Events/".$Year."/".$Month."/9/Diamond.txt";  if (file_exists($pathr9d)){$goGetItr9d=file_get_contents($pathr9d); echo htmlspecialchars($goGetItr9d);}else{$errorpathr9d="Text/Events/".$Year."/".$Month."/9/denied.txt";$PreTurnMtoNumr9d=$Month;$TurnMtoNumr9d=date("m",strtotime($PreTurnMtoNumr9d));  
  $gotodater9d=($Year."-".$TurnMtoNumr9d."-9");$dayr9d = date('l',strtotime($gotodater9d));$pathAltr9d="Text/Events/".$dayr9d."/diamond.txt";if (file_exists($pathAltr9d) && !file_exists($errorpathr9d)){$goGetItr9d=file_get_contents($pathAltr9d); echo htmlspecialchars($goGetItr9d);}  } ?></div>                         
</div></label>



<label for="r10">
<div class="DaysGone"  id="d10" style="<?php $pathr10="Pic/Calendar/".$Year."/".$Month."/10/DaysGoneBg.png";
$errorpathr10a="Text/Events/".$Year."/".$Month."/10/denied.txt";
$PreTurnMtoNumr10a=$Month;$TurnMtoNumr10a=date("m",strtotime($PreTurnMtoNumr10a));  
  $gotodater10a=($Year."-".$TurnMtoNumr10a."-10");$dayr10a = date('l',strtotime($gotodater10a));$pathAltr10a="Pic/Calendar/".$dayr10a."/DaysGoneBg.png"; 
if (file_exists($pathr10)){echo "background-image:url(".$pathr10.") ;" ;}else if (file_exists($pathAltr10a) && !file_exists($errorpathr10a)){echo "background-image:url(".$pathAltr10a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da10">10</div>

	<div class="Gold" id="dan10"><?php   $pathr10g="Text/Events/".$Year."/".$Month."/10/gold.txt"; if (file_exists($pathr10g)){$goGetItr10g=file_get_contents($pathr10g); echo htmlspecialchars($goGetItr10g);}else{$errorpathr10g="Text/Events/".$Year."/".$Month."/10/denied.txt";$PreTurnMtoNumr10g=$Month;$TurnMtoNumr10g=date("m",strtotime($PreTurnMtoNumr10g));  
  $gotodater10g=($Year."-".$TurnMtoNumr10g."-10");$dayr10g = date('l',strtotime($gotodater10g));$pathAltr10g="Text/Events/".$dayr10g."/gold.txt";if (file_exists($pathAltr10g) && !file_exists($errorpathr10g)){$goGetItr10g=file_get_contents($pathAltr10g); echo htmlspecialchars($goGetItr10g); } } ?></div>

  <div class="Silver" id="dani10"><?php  $pathr10s="Text/Events/".$Year."/".$Month."/10/silver.txt";  if (file_exists($pathr10s)){$goGetItr10s=file_get_contents($pathr10s); echo htmlspecialchars($goGetItr10s);}else{$errorpathr10s="Text/Events/".$Year."/".$Month."/10/denied.txt";$PreTurnMtoNumr10s=$Month;$TurnMtoNumr10s=date("m",strtotime($PreTurnMtoNumr10s));  
  $gotodater10s=($Year."-".$TurnMtoNumr10s."-10");$dayr10s = date('l',strtotime($gotodater10s));$pathAltr10s="Text/Events/".$dayr10s."/silver.txt";if (file_exists($pathAltr10s) && !file_exists($errorpathr10s)){$goGetItr10s=file_get_contents($pathAltr10s); echo htmlspecialchars($goGetItr10s);}  } ?></div>

  <div class="Bronze" id="danie10"><?php  $pathr10b="Text/Events/".$Year."/".$Month."/10/bronze.txt";  if (file_exists($pathr10b)){$goGetItr10b=file_get_contents($pathr10b); echo htmlspecialchars($goGetItr10b);}else{$errorpathr10b="Text/Events/".$Year."/".$Month."/10/denied.txt";$PreTurnMtoNumr10b=$Month;$TurnMtoNumr10b=date("m",strtotime($PreTurnMtoNumr10b));  
  $gotodater10b=($Year."-".$TurnMtoNumr10b."-10");$dayr10b = date('l',strtotime($gotodater10b));$pathAltr10b="Text/Events/".$dayr10b."/bronze.txt";if (file_exists($pathAltr10b) && !file_exists($errorpathr10b)){$goGetItr10b=file_get_contents($pathAltr10b); echo htmlspecialchars($goGetItr10b);}  } ?></div> 

  <div class="Platinum" id="daniel10"><?php  $pathr10b="Text/Events/".$Year."/".$Month."/10/platinum.txt";  if (file_exists($pathr10b)){$goGetItr10b=file_get_contents($pathr10b); echo htmlspecialchars($goGetItr10b);}else{$errorpathr10b="Text/Events/".$Year."/".$Month."/10/denied.txt";$PreTurnMtoNumr10b=$Month;$TurnMtoNumr10b=date("m",strtotime($PreTurnMtoNumr10b));  
  $gotodater10b=($Year."-".$TurnMtoNumr10b."-10");$dayr10b = date('l',strtotime($gotodater10b));$pathAltr10b="Text/Events/".$dayr10b."/platinum.txt";if (file_exists($pathAltr10b) && !file_exists($errorpathr10b)){$goGetItr10b=file_get_contents($pathAltr10b); echo htmlspecialchars($goGetItr10b);}  } ?></div>

  <div class="Diamond" id="daniele10"><?php  $pathr10d="Text/Events/".$Year."/".$Month."/10/Diamond.txt";  if (file_exists($pathr10d)){$goGetItr10d=file_get_contents($pathr10d); echo htmlspecialchars($goGetItr10d);}else{$errorpathr10d="Text/Events/".$Year."/".$Month."/10/denied.txt";$PreTurnMtoNumr10d=$Month;$TurnMtoNumr10d=date("m",strtotime($PreTurnMtoNumr10d));  
  $gotodater10d=($Year."-".$TurnMtoNumr10d."-10");$dayr10d = date('l',strtotime($gotodater10d));$pathAltr10d="Text/Events/".$dayr10d."/diamond.txt";if (file_exists($pathAltr10d) && !file_exists($errorpathr10d)){$goGetItr10d=file_get_contents($pathAltr10d); echo htmlspecialchars($goGetItr10d);}  } ?></div>                        
</div></label>



<label for="r11">
<div class="DaysGone"  id="d11" style="<?php $pathr11="Pic/Calendar/".$Year."/".$Month."/11/DaysGoneBg.png";
$errorpathr11a="Text/Events/".$Year."/".$Month."/11/denied.txt";
$PreTurnMtoNumr11a=$Month;$TurnMtoNumr11a=date("m",strtotime($PreTurnMtoNumr11a));  
  $gotodater11a=($Year."-".$TurnMtoNumr11a."-11");$dayr11a = date('l',strtotime($gotodater11a));$pathAltr11a="Pic/Calendar/".$dayr11a."/DaysGoneBg.png"; 
if (file_exists($pathr11)){echo "background-image:url(".$pathr11.") ;" ;}else if (file_exists($pathAltr11a) && !file_exists($errorpathr11a)){echo "background-image:url(".$pathAltr11a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da11">11</div>

	<div class="Gold" id="dan11"><?php   $pathr11g="Text/Events/".$Year."/".$Month."/11/gold.txt"; if (file_exists($pathr11g)){$goGetItr11g=file_get_contents($pathr11g); echo htmlspecialchars($goGetItr11g);}else{$errorpathr11g="Text/Events/".$Year."/".$Month."/11/denied.txt";$PreTurnMtoNumr11g=$Month;$TurnMtoNumr11g=date("m",strtotime($PreTurnMtoNumr11g));  
  $gotodater11g=($Year."-".$TurnMtoNumr11g."-11");$dayr11g = date('l',strtotime($gotodater11g));$pathAltr11g="Text/Events/".$dayr11g."/gold.txt";if (file_exists($pathAltr11g) && !file_exists($errorpathr11g)){$goGetItr11g=file_get_contents($pathAltr11g); echo htmlspecialchars($goGetItr11g); } } ?></div>

  <div class="Silver" id="dani11"><?php  $pathr11s="Text/Events/".$Year."/".$Month."/11/silver.txt";  if (file_exists($pathr11s)){$goGetItr11s=file_get_contents($pathr11s); echo htmlspecialchars($goGetItr11s);}else{$errorpathr11s="Text/Events/".$Year."/".$Month."/11/denied.txt";$PreTurnMtoNumr11s=$Month;$TurnMtoNumr11s=date("m",strtotime($PreTurnMtoNumr11s));  
  $gotodater11s=($Year."-".$TurnMtoNumr11s."-11");$dayr11s = date('l',strtotime($gotodater11s));$pathAltr11s="Text/Events/".$dayr11s."/silver.txt";if (file_exists($pathAltr11s) && !file_exists($errorpathr11s)){$goGetItr11s=file_get_contents($pathAltr11s); echo htmlspecialchars($goGetItr11s);}  } ?></div>

  <div class="Bronze" id="danie11"><?php  $pathr11b="Text/Events/".$Year."/".$Month."/11/bronze.txt";  if (file_exists($pathr11b)){$goGetItr11b=file_get_contents($pathr11b); echo htmlspecialchars($goGetItr11b);}else{$errorpathr11b="Text/Events/".$Year."/".$Month."/11/denied.txt";$PreTurnMtoNumr11b=$Month;$TurnMtoNumr11b=date("m",strtotime($PreTurnMtoNumr11b));  
  $gotodater11b=($Year."-".$TurnMtoNumr11b."-11");$dayr11b = date('l',strtotime($gotodater11b));$pathAltr11b="Text/Events/".$dayr11b."/bronze.txt";if (file_exists($pathAltr11b) && !file_exists($errorpathr11b)){$goGetItr11b=file_get_contents($pathAltr11b); echo htmlspecialchars($goGetItr11b);}  } ?></div> 

  <div class="Platinum" id="daniel11"><?php  $pathr11b="Text/Events/".$Year."/".$Month."/11/platinum.txt";  if (file_exists($pathr11b)){$goGetItr11b=file_get_contents($pathr11b); echo htmlspecialchars($goGetItr11b);}else{$errorpathr11b="Text/Events/".$Year."/".$Month."/11/denied.txt";$PreTurnMtoNumr11b=$Month;$TurnMtoNumr11b=date("m",strtotime($PreTurnMtoNumr11b));  
  $gotodater11b=($Year."-".$TurnMtoNumr11b."-11");$dayr11b = date('l',strtotime($gotodater11b));$pathAltr11b="Text/Events/".$dayr11b."/platinum.txt";if (file_exists($pathAltr11b) && !file_exists($errorpathr11b)){$goGetItr11b=file_get_contents($pathAltr11b); echo htmlspecialchars($goGetItr11b);}  } ?></div>

  <div class="Diamond" id="daniele11"><?php  $pathr11d="Text/Events/".$Year."/".$Month."/11/Diamond.txt";  if (file_exists($pathr11d)){$goGetItr11d=file_get_contents($pathr11d); echo htmlspecialchars($goGetItr11d);}else{$errorpathr11d="Text/Events/".$Year."/".$Month."/11/denied.txt";$PreTurnMtoNumr11d=$Month;$TurnMtoNumr11d=date("m",strtotime($PreTurnMtoNumr11d));  
  $gotodater11d=($Year."-".$TurnMtoNumr11d."-11");$dayr11d = date('l',strtotime($gotodater11d));$pathAltr11d="Text/Events/".$dayr11d."/diamond.txt";if (file_exists($pathAltr11d) && !file_exists($errorpathr11d)){$goGetItr11d=file_get_contents($pathAltr11d); echo htmlspecialchars($goGetItr11d);}  } ?></div>                       
</div></label>



<label for="r12">
<div class="DaysGone"  id="d12" style="<?php $pathr12="Pic/Calendar/".$Year."/".$Month."/12/DaysGoneBg.png";
$errorpathr12a="Text/Events/".$Year."/".$Month."/12/denied.txt";
$PreTurnMtoNumr12a=$Month;$TurnMtoNumr12a=date("m",strtotime($PreTurnMtoNumr12a));  
  $gotodater12a=($Year."-".$TurnMtoNumr12a."-12");$dayr12a = date('l',strtotime($gotodater12a));$pathAltr12a="Pic/Calendar/".$dayr12a."/DaysGoneBg.png"; 
if (file_exists($pathr12)){echo "background-image:url(".$pathr12.") ;" ;}else if (file_exists($pathAltr12a) && !file_exists($errorpathr12a)){echo "background-image:url(".$pathAltr12a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da12">12</div>

	<div class="Gold" id="dan12"><?php   $pathr12g="Text/Events/".$Year."/".$Month."/12/gold.txt"; if (file_exists($pathr12g)){$goGetItr12g=file_get_contents($pathr12g); echo htmlspecialchars($goGetItr12g);}else{$errorpathr12g="Text/Events/".$Year."/".$Month."/12/denied.txt";$PreTurnMtoNumr12g=$Month;$TurnMtoNumr12g=date("m",strtotime($PreTurnMtoNumr12g));  
  $gotodater12g=($Year."-".$TurnMtoNumr12g."-12");$dayr12g = date('l',strtotime($gotodater12g));$pathAltr12g="Text/Events/".$dayr12g."/gold.txt";if (file_exists($pathAltr12g) && !file_exists($errorpathr12g)){$goGetItr12g=file_get_contents($pathAltr12g); echo htmlspecialchars($goGetItr12g); } } ?></div>

  <div class="Silver" id="dani12"><?php  $pathr12s="Text/Events/".$Year."/".$Month."/12/silver.txt";  if (file_exists($pathr12s)){$goGetItr12s=file_get_contents($pathr12s); echo htmlspecialchars($goGetItr12s);}else{$errorpathr12s="Text/Events/".$Year."/".$Month."/12/denied.txt";$PreTurnMtoNumr12s=$Month;$TurnMtoNumr12s=date("m",strtotime($PreTurnMtoNumr12s));  
  $gotodater12s=($Year."-".$TurnMtoNumr12s."-12");$dayr12s = date('l',strtotime($gotodater12s));$pathAltr12s="Text/Events/".$dayr12s."/silver.txt";if (file_exists($pathAltr12s) && !file_exists($errorpathr12s)){$goGetItr12s=file_get_contents($pathAltr12s); echo htmlspecialchars($goGetItr12s);}  } ?></div>

  <div class="Bronze" id="danie12"><?php  $pathr12b="Text/Events/".$Year."/".$Month."/12/bronze.txt";  if (file_exists($pathr12b)){$goGetItr12b=file_get_contents($pathr12b); echo htmlspecialchars($goGetItr12b);}else{$errorpathr12b="Text/Events/".$Year."/".$Month."/12/denied.txt";$PreTurnMtoNumr12b=$Month;$TurnMtoNumr12b=date("m",strtotime($PreTurnMtoNumr12b));  
  $gotodater12b=($Year."-".$TurnMtoNumr12b."-12");$dayr12b = date('l',strtotime($gotodater12b));$pathAltr12b="Text/Events/".$dayr12b."/bronze.txt";if (file_exists($pathAltr12b) && !file_exists($errorpathr12b)){$goGetItr12b=file_get_contents($pathAltr12b); echo htmlspecialchars($goGetItr12b);}  } ?></div> 

  <div class="Platinum" id="daniel12"><?php  $pathr12b="Text/Events/".$Year."/".$Month."/12/platinum.txt";  if (file_exists($pathr12b)){$goGetItr12b=file_get_contents($pathr12b); echo htmlspecialchars($goGetItr12b);}else{$errorpathr12b="Text/Events/".$Year."/".$Month."/12/denied.txt";$PreTurnMtoNumr12b=$Month;$TurnMtoNumr12b=date("m",strtotime($PreTurnMtoNumr12b));  
  $gotodater12b=($Year."-".$TurnMtoNumr12b."-12");$dayr12b = date('l',strtotime($gotodater12b));$pathAltr12b="Text/Events/".$dayr12b."/platinum.txt";if (file_exists($pathAltr12b) && !file_exists($errorpathr12b)){$goGetItr12b=file_get_contents($pathAltr12b); echo htmlspecialchars($goGetItr12b);}  } ?></div>

  <div class="Diamond" id="daniele12"><?php  $pathr12d="Text/Events/".$Year."/".$Month."/12/Diamond.txt";  if (file_exists($pathr12d)){$goGetItr12d=file_get_contents($pathr12d); echo htmlspecialchars($goGetItr12d);}else{$errorpathr12d="Text/Events/".$Year."/".$Month."/12/denied.txt";$PreTurnMtoNumr12d=$Month;$TurnMtoNumr12d=date("m",strtotime($PreTurnMtoNumr12d));  
  $gotodater12d=($Year."-".$TurnMtoNumr12d."-12");$dayr12d = date('l',strtotime($gotodater12d));$pathAltr12d="Text/Events/".$dayr12d."/diamond.txt";if (file_exists($pathAltr12d) && !file_exists($errorpathr12d)){$goGetItr12d=file_get_contents($pathAltr12d); echo htmlspecialchars($goGetItr12d);}  } ?></div>                         
</div></label>



<label for="r13">
<div class="DaysGone"  id="d13" style="<?php $pathr13="Pic/Calendar/".$Year."/".$Month."/13/DaysGoneBg.png";
$errorpathr13a="Text/Events/".$Year."/".$Month."/13/denied.txt";
$PreTurnMtoNumr13a=$Month;$TurnMtoNumr13a=date("m",strtotime($PreTurnMtoNumr13a));  
  $gotodater13a=($Year."-".$TurnMtoNumr13a."-13");$dayr13a = date('l',strtotime($gotodater13a));$pathAltr13a="Pic/Calendar/".$dayr13a."/DaysGoneBg.png"; 
if (file_exists($pathr13)){echo "background-image:url(".$pathr13.") ;" ;}else if (file_exists($pathAltr13a) && !file_exists($errorpathr13a)){echo "background-image:url(".$pathAltr13a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da13">13</div>

	<div class="Gold" id="dan13"><?php   $pathr13g="Text/Events/".$Year."/".$Month."/13/gold.txt"; if (file_exists($pathr13g)){$goGetItr13g=file_get_contents($pathr13g); echo htmlspecialchars($goGetItr13g);}else{$errorpathr13g="Text/Events/".$Year."/".$Month."/13/denied.txt";$PreTurnMtoNumr13g=$Month;$TurnMtoNumr13g=date("m",strtotime($PreTurnMtoNumr13g));  
  $gotodater13g=($Year."-".$TurnMtoNumr13g."-13");$dayr13g = date('l',strtotime($gotodater13g));$pathAltr13g="Text/Events/".$dayr13g."/gold.txt";if (file_exists($pathAltr13g) && !file_exists($errorpathr13g)){$goGetItr13g=file_get_contents($pathAltr13g); echo htmlspecialchars($goGetItr13g); } } ?></div>

  <div class="Silver" id="dani13"><?php  $pathr13s="Text/Events/".$Year."/".$Month."/13/silver.txt";  if (file_exists($pathr13s)){$goGetItr13s=file_get_contents($pathr13s); echo htmlspecialchars($goGetItr13s);}else{$errorpathr13s="Text/Events/".$Year."/".$Month."/13/denied.txt";$PreTurnMtoNumr13s=$Month;$TurnMtoNumr13s=date("m",strtotime($PreTurnMtoNumr13s));  
  $gotodater13s=($Year."-".$TurnMtoNumr13s."-13");$dayr13s = date('l',strtotime($gotodater13s));$pathAltr13s="Text/Events/".$dayr13s."/silver.txt";if (file_exists($pathAltr13s) && !file_exists($errorpathr13s)){$goGetItr13s=file_get_contents($pathAltr13s); echo htmlspecialchars($goGetItr13s);}  } ?></div>

  <div class="Bronze" id="danie13"><?php  $pathr13b="Text/Events/".$Year."/".$Month."/13/bronze.txt";  if (file_exists($pathr13b)){$goGetItr13b=file_get_contents($pathr13b); echo htmlspecialchars($goGetItr13b);}else{$errorpathr13b="Text/Events/".$Year."/".$Month."/13/denied.txt";$PreTurnMtoNumr13b=$Month;$TurnMtoNumr13b=date("m",strtotime($PreTurnMtoNumr13b));  
  $gotodater13b=($Year."-".$TurnMtoNumr13b."-13");$dayr13b = date('l',strtotime($gotodater13b));$pathAltr13b="Text/Events/".$dayr13b."/bronze.txt";if (file_exists($pathAltr13b) && !file_exists($errorpathr13b)){$goGetItr13b=file_get_contents($pathAltr13b); echo htmlspecialchars($goGetItr13b);}  } ?></div> 

  <div class="Platinum" id="daniel13"><?php  $pathr13b="Text/Events/".$Year."/".$Month."/13/platinum.txt";  if (file_exists($pathr13b)){$goGetItr13b=file_get_contents($pathr13b); echo htmlspecialchars($goGetItr13b);}else{$errorpathr13b="Text/Events/".$Year."/".$Month."/13/denied.txt";$PreTurnMtoNumr13b=$Month;$TurnMtoNumr13b=date("m",strtotime($PreTurnMtoNumr13b));  
  $gotodater13b=($Year."-".$TurnMtoNumr13b."-13");$dayr13b = date('l',strtotime($gotodater13b));$pathAltr13b="Text/Events/".$dayr13b."/platinum.txt";if (file_exists($pathAltr13b) && !file_exists($errorpathr13b)){$goGetItr13b=file_get_contents($pathAltr13b); echo htmlspecialchars($goGetItr13b);}  } ?></div>

  <div class="Diamond" id="daniele13"><?php  $pathr13d="Text/Events/".$Year."/".$Month."/13/Diamond.txt";  if (file_exists($pathr13d)){$goGetItr13d=file_get_contents($pathr13d); echo htmlspecialchars($goGetItr13d);}else{$errorpathr13d="Text/Events/".$Year."/".$Month."/13/denied.txt";$PreTurnMtoNumr13d=$Month;$TurnMtoNumr13d=date("m",strtotime($PreTurnMtoNumr13d));  
  $gotodater13d=($Year."-".$TurnMtoNumr13d."-13");$dayr13d = date('l',strtotime($gotodater13d));$pathAltr13d="Text/Events/".$dayr13d."/diamond.txt";if (file_exists($pathAltr13d) && !file_exists($errorpathr13d)){$goGetItr13d=file_get_contents($pathAltr13d); echo htmlspecialchars($goGetItr13d);}  } ?></div>                       
</div></label>



<label for="r14">
<div class="DaysGone"  id="d14" style="<?php $pathr14="Pic/Calendar/".$Year."/".$Month."/14/DaysGoneBg.png";
$errorpathr14a="Text/Events/".$Year."/".$Month."/14/denied.txt";
$PreTurnMtoNumr14a=$Month;$TurnMtoNumr14a=date("m",strtotime($PreTurnMtoNumr14a));  
  $gotodater14a=($Year."-".$TurnMtoNumr14a."-14");$dayr14a = date('l',strtotime($gotodater14a));$pathAltr14a="Pic/Calendar/".$dayr14a."/DaysGoneBg.png"; 
if (file_exists($pathr14)){echo "background-image:url(".$pathr14.") ;" ;}else if (file_exists($pathAltr14a) && !file_exists($errorpathr14a)){echo "background-image:url(".$pathAltr14a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da14">14</div>

	<div class="Gold" id="dan14"><?php   $pathr14g="Text/Events/".$Year."/".$Month."/14/gold.txt"; if (file_exists($pathr14g)){$goGetItr14g=file_get_contents($pathr14g); echo htmlspecialchars($goGetItr14g);}else{$errorpathr14g="Text/Events/".$Year."/".$Month."/14/denied.txt";$PreTurnMtoNumr14g=$Month;$TurnMtoNumr14g=date("m",strtotime($PreTurnMtoNumr14g));  
  $gotodater14g=($Year."-".$TurnMtoNumr14g."-14");$dayr14g = date('l',strtotime($gotodater14g));$pathAltr14g="Text/Events/".$dayr14g."/gold.txt";if (file_exists($pathAltr14g) && !file_exists($errorpathr14g)){$goGetItr14g=file_get_contents($pathAltr14g); echo htmlspecialchars($goGetItr14g); } } ?></div>

  <div class="Silver" id="dani14"><?php  $pathr14s="Text/Events/".$Year."/".$Month."/14/silver.txt";  if (file_exists($pathr14s)){$goGetItr14s=file_get_contents($pathr14s); echo htmlspecialchars($goGetItr14s);}else{$errorpathr14s="Text/Events/".$Year."/".$Month."/14/denied.txt";$PreTurnMtoNumr14s=$Month;$TurnMtoNumr14s=date("m",strtotime($PreTurnMtoNumr14s));  
  $gotodater14s=($Year."-".$TurnMtoNumr14s."-14");$dayr14s = date('l',strtotime($gotodater14s));$pathAltr14s="Text/Events/".$dayr14s."/silver.txt";if (file_exists($pathAltr14s) && !file_exists($errorpathr14s)){$goGetItr14s=file_get_contents($pathAltr14s); echo htmlspecialchars($goGetItr14s);}  } ?></div>

  <div class="Bronze" id="danie14"><?php  $pathr14b="Text/Events/".$Year."/".$Month."/14/bronze.txt";  if (file_exists($pathr14b)){$goGetItr14b=file_get_contents($pathr14b); echo htmlspecialchars($goGetItr14b);}else{$errorpathr14b="Text/Events/".$Year."/".$Month."/14/denied.txt";$PreTurnMtoNumr14b=$Month;$TurnMtoNumr14b=date("m",strtotime($PreTurnMtoNumr14b));  
  $gotodater14b=($Year."-".$TurnMtoNumr14b."-14");$dayr14b = date('l',strtotime($gotodater14b));$pathAltr14b="Text/Events/".$dayr14b."/bronze.txt";if (file_exists($pathAltr14b) && !file_exists($errorpathr14b)){$goGetItr14b=file_get_contents($pathAltr14b); echo htmlspecialchars($goGetItr14b);}  } ?></div> 

  <div class="Platinum" id="daniel14"><?php  $pathr14b="Text/Events/".$Year."/".$Month."/14/platinum.txt";  if (file_exists($pathr14b)){$goGetItr14b=file_get_contents($pathr14b); echo htmlspecialchars($goGetItr14b);}else{$errorpathr14b="Text/Events/".$Year."/".$Month."/14/denied.txt";$PreTurnMtoNumr14b=$Month;$TurnMtoNumr14b=date("m",strtotime($PreTurnMtoNumr14b));  
  $gotodater14b=($Year."-".$TurnMtoNumr14b."-14");$dayr14b = date('l',strtotime($gotodater14b));$pathAltr14b="Text/Events/".$dayr14b."/platinum.txt";if (file_exists($pathAltr14b) && !file_exists($errorpathr14b)){$goGetItr14b=file_get_contents($pathAltr14b); echo htmlspecialchars($goGetItr14b);}  } ?></div>

  <div class="Diamond" id="daniele14"><?php  $pathr14d="Text/Events/".$Year."/".$Month."/14/Diamond.txt";  if (file_exists($pathr14d)){$goGetItr14d=file_get_contents($pathr14d); echo htmlspecialchars($goGetItr14d);}else{$errorpathr14d="Text/Events/".$Year."/".$Month."/14/denied.txt";$PreTurnMtoNumr14d=$Month;$TurnMtoNumr14d=date("m",strtotime($PreTurnMtoNumr14d));  
  $gotodater14d=($Year."-".$TurnMtoNumr14d."-14");$dayr14d = date('l',strtotime($gotodater14d));$pathAltr14d="Text/Events/".$dayr14d."/diamond.txt";if (file_exists($pathAltr14d) && !file_exists($errorpathr14d)){$goGetItr14d=file_get_contents($pathAltr14d); echo htmlspecialchars($goGetItr14d);}  } ?></div>                        
</div></label>



<label for="r15">
<div class="DaysGone"  id="d15" style="<?php $pathr15="Pic/Calendar/".$Year."/".$Month."/15/DaysGoneBg.png";
$errorpathr15a="Text/Events/".$Year."/".$Month."/15/denied.txt";
$PreTurnMtoNumr15a=$Month;$TurnMtoNumr15a=date("m",strtotime($PreTurnMtoNumr15a));  
  $gotodater15a=($Year."-".$TurnMtoNumr15a."-15");$dayr15a = date('l',strtotime($gotodater15a));$pathAltr15a="Pic/Calendar/".$dayr15a."/DaysGoneBg.png"; 
if (file_exists($pathr15)){echo "background-image:url(".$pathr15.") ;" ;}else if (file_exists($pathAltr15a) && !file_exists($errorpathr15a)){echo "background-image:url(".$pathAltr15a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da15">15</div>

	<div class="Gold" id="dan15"><?php   $pathr15g="Text/Events/".$Year."/".$Month."/15/gold.txt"; if (file_exists($pathr15g)){$goGetItr15g=file_get_contents($pathr15g); echo htmlspecialchars($goGetItr15g);}else{$errorpathr15g="Text/Events/".$Year."/".$Month."/15/denied.txt";$PreTurnMtoNumr15g=$Month;$TurnMtoNumr15g=date("m",strtotime($PreTurnMtoNumr15g));  
  $gotodater15g=($Year."-".$TurnMtoNumr15g."-15");$dayr15g = date('l',strtotime($gotodater15g));$pathAltr15g="Text/Events/".$dayr15g."/gold.txt";if (file_exists($pathAltr15g) && !file_exists($errorpathr15g)){$goGetItr15g=file_get_contents($pathAltr15g); echo htmlspecialchars($goGetItr15g); } } ?></div>

  <div class="Silver" id="dani15"><?php  $pathr15s="Text/Events/".$Year."/".$Month."/15/silver.txt";  if (file_exists($pathr15s)){$goGetItr15s=file_get_contents($pathr15s); echo htmlspecialchars($goGetItr15s);}else{$errorpathr15s="Text/Events/".$Year."/".$Month."/15/denied.txt";$PreTurnMtoNumr15s=$Month;$TurnMtoNumr15s=date("m",strtotime($PreTurnMtoNumr15s));  
  $gotodater15s=($Year."-".$TurnMtoNumr15s."-15");$dayr15s = date('l',strtotime($gotodater15s));$pathAltr15s="Text/Events/".$dayr15s."/silver.txt";if (file_exists($pathAltr15s) && !file_exists($errorpathr15s)){$goGetItr15s=file_get_contents($pathAltr15s); echo htmlspecialchars($goGetItr15s);}  } ?></div>

  <div class="Bronze" id="danie15"><?php  $pathr15b="Text/Events/".$Year."/".$Month."/15/bronze.txt";  if (file_exists($pathr15b)){$goGetItr15b=file_get_contents($pathr15b); echo htmlspecialchars($goGetItr15b);}else{$errorpathr15b="Text/Events/".$Year."/".$Month."/15/denied.txt";$PreTurnMtoNumr15b=$Month;$TurnMtoNumr15b=date("m",strtotime($PreTurnMtoNumr15b));  
  $gotodater15b=($Year."-".$TurnMtoNumr15b."-15");$dayr15b = date('l',strtotime($gotodater15b));$pathAltr15b="Text/Events/".$dayr15b."/bronze.txt";if (file_exists($pathAltr15b) && !file_exists($errorpathr15b)){$goGetItr15b=file_get_contents($pathAltr15b); echo htmlspecialchars($goGetItr15b);}  } ?></div> 

  <div class="Platinum" id="daniel15"><?php  $pathr15b="Text/Events/".$Year."/".$Month."/15/platinum.txt";  if (file_exists($pathr15b)){$goGetItr15b=file_get_contents($pathr15b); echo htmlspecialchars($goGetItr15b);}else{$errorpathr15b="Text/Events/".$Year."/".$Month."/15/denied.txt";$PreTurnMtoNumr15b=$Month;$TurnMtoNumr15b=date("m",strtotime($PreTurnMtoNumr15b));  
  $gotodater15b=($Year."-".$TurnMtoNumr15b."-15");$dayr15b = date('l',strtotime($gotodater15b));$pathAltr15b="Text/Events/".$dayr15b."/platinum.txt";if (file_exists($pathAltr15b) && !file_exists($errorpathr15b)){$goGetItr15b=file_get_contents($pathAltr15b); echo htmlspecialchars($goGetItr15b);}  } ?></div>

  <div class="Diamond" id="daniele15"><?php  $pathr15d="Text/Events/".$Year."/".$Month."/15/Diamond.txt";  if (file_exists($pathr15d)){$goGetItr15d=file_get_contents($pathr15d); echo htmlspecialchars($goGetItr15d);}else{$errorpathr15d="Text/Events/".$Year."/".$Month."/15/denied.txt";$PreTurnMtoNumr15d=$Month;$TurnMtoNumr15d=date("m",strtotime($PreTurnMtoNumr15d));  
  $gotodater15d=($Year."-".$TurnMtoNumr15d."-15");$dayr15d = date('l',strtotime($gotodater15d));$pathAltr15d="Text/Events/".$dayr15d."/diamond.txt";if (file_exists($pathAltr15d) && !file_exists($errorpathr15d)){$goGetItr15d=file_get_contents($pathAltr15d); echo htmlspecialchars($goGetItr15d);}  } ?></div>                       
</div></label>



<label for="r16">
<div class="DaysGone"  id="d16" style="<?php $pathr16="Pic/Calendar/".$Year."/".$Month."/16/DaysGoneBg.png";
$errorpathr16a="Text/Events/".$Year."/".$Month."/16/denied.txt";
$PreTurnMtoNumr16a=$Month;$TurnMtoNumr16a=date("m",strtotime($PreTurnMtoNumr16a));  
  $gotodater16a=($Year."-".$TurnMtoNumr16a."-16");$dayr16a = date('l',strtotime($gotodater16a));$pathAltr16a="Pic/Calendar/".$dayr16a."/DaysGoneBg.png"; 
if (file_exists($pathr16)){echo "background-image:url(".$pathr16.") ;" ;}else if (file_exists($pathAltr16a) && !file_exists($errorpathr16a)){echo "background-image:url(".$pathAltr16a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da16">16</div>

	<div class="Gold" id="dan16"><?php   $pathr16g="Text/Events/".$Year."/".$Month."/16/gold.txt"; if (file_exists($pathr16g)){$goGetItr16g=file_get_contents($pathr16g); echo htmlspecialchars($goGetItr16g);}else{$errorpathr16g="Text/Events/".$Year."/".$Month."/16/denied.txt";$PreTurnMtoNumr16g=$Month;$TurnMtoNumr16g=date("m",strtotime($PreTurnMtoNumr16g));  
  $gotodater16g=($Year."-".$TurnMtoNumr16g."-16");$dayr16g = date('l',strtotime($gotodater16g));$pathAltr16g="Text/Events/".$dayr16g."/gold.txt";if (file_exists($pathAltr16g) && !file_exists($errorpathr16g)){$goGetItr16g=file_get_contents($pathAltr16g); echo htmlspecialchars($goGetItr16g); } } ?></div>

  <div class="Silver" id="dani16"><?php  $pathr16s="Text/Events/".$Year."/".$Month."/16/silver.txt";  if (file_exists($pathr16s)){$goGetItr16s=file_get_contents($pathr16s); echo htmlspecialchars($goGetItr16s);}else{$errorpathr16s="Text/Events/".$Year."/".$Month."/16/denied.txt";$PreTurnMtoNumr16s=$Month;$TurnMtoNumr16s=date("m",strtotime($PreTurnMtoNumr16s));  
  $gotodater16s=($Year."-".$TurnMtoNumr16s."-16");$dayr16s = date('l',strtotime($gotodater16s));$pathAltr16s="Text/Events/".$dayr16s."/silver.txt";if (file_exists($pathAltr16s) && !file_exists($errorpathr16s)){$goGetItr16s=file_get_contents($pathAltr16s); echo htmlspecialchars($goGetItr16s);}  } ?></div>

  <div class="Bronze" id="danie16"><?php  $pathr16b="Text/Events/".$Year."/".$Month."/16/bronze.txt";  if (file_exists($pathr16b)){$goGetItr16b=file_get_contents($pathr16b); echo htmlspecialchars($goGetItr16b);}else{$errorpathr16b="Text/Events/".$Year."/".$Month."/16/denied.txt";$PreTurnMtoNumr16b=$Month;$TurnMtoNumr16b=date("m",strtotime($PreTurnMtoNumr16b));  
  $gotodater16b=($Year."-".$TurnMtoNumr16b."-16");$dayr16b = date('l',strtotime($gotodater16b));$pathAltr16b="Text/Events/".$dayr16b."/bronze.txt";if (file_exists($pathAltr16b) && !file_exists($errorpathr16b)){$goGetItr16b=file_get_contents($pathAltr16b); echo htmlspecialchars($goGetItr16b);}  } ?></div> 

  <div class="Platinum" id="daniel16"><?php  $pathr16b="Text/Events/".$Year."/".$Month."/16/platinum.txt";  if (file_exists($pathr16b)){$goGetItr16b=file_get_contents($pathr16b); echo htmlspecialchars($goGetItr16b);}else{$errorpathr16b="Text/Events/".$Year."/".$Month."/16/denied.txt";$PreTurnMtoNumr16b=$Month;$TurnMtoNumr16b=date("m",strtotime($PreTurnMtoNumr16b));  
  $gotodater16b=($Year."-".$TurnMtoNumr16b."-16");$dayr16b = date('l',strtotime($gotodater16b));$pathAltr16b="Text/Events/".$dayr16b."/platinum.txt";if (file_exists($pathAltr16b) && !file_exists($errorpathr16b)){$goGetItr16b=file_get_contents($pathAltr16b); echo htmlspecialchars($goGetItr16b);}  } ?></div>

  <div class="Diamond" id="daniele16"><?php  $pathr16d="Text/Events/".$Year."/".$Month."/16/Diamond.txt";  if (file_exists($pathr16d)){$goGetItr16d=file_get_contents($pathr16d); echo htmlspecialchars($goGetItr16d);}else{$errorpathr16d="Text/Events/".$Year."/".$Month."/16/denied.txt";$PreTurnMtoNumr16d=$Month;$TurnMtoNumr16d=date("m",strtotime($PreTurnMtoNumr16d));  
  $gotodater16d=($Year."-".$TurnMtoNumr16d."-16");$dayr16d = date('l',strtotime($gotodater16d));$pathAltr16d="Text/Events/".$dayr16d."/diamond.txt";if (file_exists($pathAltr16d) && !file_exists($errorpathr16d)){$goGetItr16d=file_get_contents($pathAltr16d); echo htmlspecialchars($goGetItr16d);}  } ?></div>                       
</div></label>



<label for="r17">
<div class="DaysGone"  id="d17" style="<?php $pathr17="Pic/Calendar/".$Year."/".$Month."/17/DaysGoneBg.png";
$errorpathr17a="Text/Events/".$Year."/".$Month."/17/denied.txt";
$PreTurnMtoNumr17a=$Month;$TurnMtoNumr17a=date("m",strtotime($PreTurnMtoNumr17a));  
  $gotodater17a=($Year."-".$TurnMtoNumr17a."-17");$dayr17a = date('l',strtotime($gotodater17a));$pathAltr17a="Pic/Calendar/".$dayr17a."/DaysGoneBg.png"; 
if (file_exists($pathr17)){echo "background-image:url(".$pathr17.") ;" ;}else if (file_exists($pathAltr17a) && !file_exists($errorpathr17a)){echo "background-image:url(".$pathAltr17a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da17">17</div>

	<div class="Gold" id="dan17"><?php   $pathr17g="Text/Events/".$Year."/".$Month."/17/gold.txt"; if (file_exists($pathr17g)){$goGetItr17g=file_get_contents($pathr17g); echo htmlspecialchars($goGetItr17g);}else{$errorpathr17g="Text/Events/".$Year."/".$Month."/17/denied.txt";$PreTurnMtoNumr17g=$Month;$TurnMtoNumr17g=date("m",strtotime($PreTurnMtoNumr17g));  
  $gotodater17g=($Year."-".$TurnMtoNumr17g."-17");$dayr17g = date('l',strtotime($gotodater17g));$pathAltr17g="Text/Events/".$dayr17g."/gold.txt";if (file_exists($pathAltr17g) && !file_exists($errorpathr17g)){$goGetItr17g=file_get_contents($pathAltr17g); echo htmlspecialchars($goGetItr17g); } } ?></div>

  <div class="Silver" id="dani17"><?php  $pathr17s="Text/Events/".$Year."/".$Month."/17/silver.txt";  if (file_exists($pathr17s)){$goGetItr17s=file_get_contents($pathr17s); echo htmlspecialchars($goGetItr17s);}else{$errorpathr17s="Text/Events/".$Year."/".$Month."/17/denied.txt";$PreTurnMtoNumr17s=$Month;$TurnMtoNumr17s=date("m",strtotime($PreTurnMtoNumr17s));  
  $gotodater17s=($Year."-".$TurnMtoNumr17s."-17");$dayr17s = date('l',strtotime($gotodater17s));$pathAltr17s="Text/Events/".$dayr17s."/silver.txt";if (file_exists($pathAltr17s) && !file_exists($errorpathr17s)){$goGetItr17s=file_get_contents($pathAltr17s); echo htmlspecialchars($goGetItr17s);}  } ?></div>

  <div class="Bronze" id="danie17"><?php  $pathr17b="Text/Events/".$Year."/".$Month."/17/bronze.txt";  if (file_exists($pathr17b)){$goGetItr17b=file_get_contents($pathr17b); echo htmlspecialchars($goGetItr17b);}else{$errorpathr17b="Text/Events/".$Year."/".$Month."/17/denied.txt";$PreTurnMtoNumr17b=$Month;$TurnMtoNumr17b=date("m",strtotime($PreTurnMtoNumr17b));  
  $gotodater17b=($Year."-".$TurnMtoNumr17b."-17");$dayr17b = date('l',strtotime($gotodater17b));$pathAltr17b="Text/Events/".$dayr17b."/bronze.txt";if (file_exists($pathAltr17b) && !file_exists($errorpathr17b)){$goGetItr17b=file_get_contents($pathAltr17b); echo htmlspecialchars($goGetItr17b);}  } ?></div> 

  <div class="Platinum" id="daniel17"><?php  $pathr17b="Text/Events/".$Year."/".$Month."/17/platinum.txt";  if (file_exists($pathr17b)){$goGetItr17b=file_get_contents($pathr17b); echo htmlspecialchars($goGetItr17b);}else{$errorpathr17b="Text/Events/".$Year."/".$Month."/17/denied.txt";$PreTurnMtoNumr17b=$Month;$TurnMtoNumr17b=date("m",strtotime($PreTurnMtoNumr17b));  
  $gotodater17b=($Year."-".$TurnMtoNumr17b."-17");$dayr17b = date('l',strtotime($gotodater17b));$pathAltr17b="Text/Events/".$dayr17b."/platinum.txt";if (file_exists($pathAltr17b) && !file_exists($errorpathr17b)){$goGetItr17b=file_get_contents($pathAltr17b); echo htmlspecialchars($goGetItr17b);}  } ?></div>

  <div class="Diamond" id="daniele17"><?php  $pathr17d="Text/Events/".$Year."/".$Month."/17/Diamond.txt";  if (file_exists($pathr17d)){$goGetItr17d=file_get_contents($pathr17d); echo htmlspecialchars($goGetItr17d);}else{$errorpathr17d="Text/Events/".$Year."/".$Month."/17/denied.txt";$PreTurnMtoNumr17d=$Month;$TurnMtoNumr17d=date("m",strtotime($PreTurnMtoNumr17d));  
  $gotodater17d=($Year."-".$TurnMtoNumr17d."-17");$dayr17d = date('l',strtotime($gotodater17d));$pathAltr17d="Text/Events/".$dayr17d."/diamond.txt";if (file_exists($pathAltr17d) && !file_exists($errorpathr17d)){$goGetItr17d=file_get_contents($pathAltr17d); echo htmlspecialchars($goGetItr17d);}  } ?></div>                      
</div></label>



<label for="r18">
<div class="DaysGone"  id="d18" style="<?php $pathr18="Pic/Calendar/".$Year."/".$Month."/18/DaysGoneBg.png";
$errorpathr18a="Text/Events/".$Year."/".$Month."/18/denied.txt";
$PreTurnMtoNumr18a=$Month;$TurnMtoNumr18a=date("m",strtotime($PreTurnMtoNumr18a));  
  $gotodater18a=($Year."-".$TurnMtoNumr18a."-18");$dayr18a = date('l',strtotime($gotodater18a));$pathAltr18a="Pic/Calendar/".$dayr18a."/DaysGoneBg.png"; 
if (file_exists($pathr18)){echo "background-image:url(".$pathr18.") ;" ;}else if (file_exists($pathAltr18a) && !file_exists($errorpathr18a)){echo "background-image:url(".$pathAltr18a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da18">18</div>

	<div class="Gold" id="dan18"><?php   $pathr18g="Text/Events/".$Year."/".$Month."/18/gold.txt"; if (file_exists($pathr18g)){$goGetItr18g=file_get_contents($pathr18g); echo htmlspecialchars($goGetItr18g);}else{$errorpathr18g="Text/Events/".$Year."/".$Month."/18/denied.txt";$PreTurnMtoNumr18g=$Month;$TurnMtoNumr18g=date("m",strtotime($PreTurnMtoNumr18g));  
  $gotodater18g=($Year."-".$TurnMtoNumr18g."-18");$dayr18g = date('l',strtotime($gotodater18g));$pathAltr18g="Text/Events/".$dayr18g."/gold.txt";if (file_exists($pathAltr18g) && !file_exists($errorpathr18g)){$goGetItr18g=file_get_contents($pathAltr18g); echo htmlspecialchars($goGetItr18g); } } ?></div>

  <div class="Silver" id="dani18"><?php  $pathr18s="Text/Events/".$Year."/".$Month."/18/silver.txt";  if (file_exists($pathr18s)){$goGetItr18s=file_get_contents($pathr18s); echo htmlspecialchars($goGetItr18s);}else{$errorpathr18s="Text/Events/".$Year."/".$Month."/18/denied.txt";$PreTurnMtoNumr18s=$Month;$TurnMtoNumr18s=date("m",strtotime($PreTurnMtoNumr18s));  
  $gotodater18s=($Year."-".$TurnMtoNumr18s."-18");$dayr18s = date('l',strtotime($gotodater18s));$pathAltr18s="Text/Events/".$dayr18s."/silver.txt";if (file_exists($pathAltr18s) && !file_exists($errorpathr18s)){$goGetItr18s=file_get_contents($pathAltr18s); echo htmlspecialchars($goGetItr18s);}  } ?></div>

  <div class="Bronze" id="danie18"><?php  $pathr18b="Text/Events/".$Year."/".$Month."/18/bronze.txt";  if (file_exists($pathr18b)){$goGetItr18b=file_get_contents($pathr18b); echo htmlspecialchars($goGetItr18b);}else{$errorpathr18b="Text/Events/".$Year."/".$Month."/18/denied.txt";$PreTurnMtoNumr18b=$Month;$TurnMtoNumr18b=date("m",strtotime($PreTurnMtoNumr18b));  
  $gotodater18b=($Year."-".$TurnMtoNumr18b."-18");$dayr18b = date('l',strtotime($gotodater18b));$pathAltr18b="Text/Events/".$dayr18b."/bronze.txt";if (file_exists($pathAltr18b) && !file_exists($errorpathr18b)){$goGetItr18b=file_get_contents($pathAltr18b); echo htmlspecialchars($goGetItr18b);}  } ?></div> 

  <div class="Platinum" id="daniel18"><?php  $pathr18b="Text/Events/".$Year."/".$Month."/18/platinum.txt";  if (file_exists($pathr18b)){$goGetItr18b=file_get_contents($pathr18b); echo htmlspecialchars($goGetItr18b);}else{$errorpathr18b="Text/Events/".$Year."/".$Month."/18/denied.txt";$PreTurnMtoNumr18b=$Month;$TurnMtoNumr18b=date("m",strtotime($PreTurnMtoNumr18b));  
  $gotodater18b=($Year."-".$TurnMtoNumr18b."-18");$dayr18b = date('l',strtotime($gotodater18b));$pathAltr18b="Text/Events/".$dayr18b."/platinum.txt";if (file_exists($pathAltr18b) && !file_exists($errorpathr18b)){$goGetItr18b=file_get_contents($pathAltr18b); echo htmlspecialchars($goGetItr18b);}  } ?></div>

  <div class="Diamond" id="daniele18"><?php  $pathr18d="Text/Events/".$Year."/".$Month."/18/Diamond.txt";  if (file_exists($pathr18d)){$goGetItr18d=file_get_contents($pathr18d); echo htmlspecialchars($goGetItr18d);}else{$errorpathr18d="Text/Events/".$Year."/".$Month."/18/denied.txt";$PreTurnMtoNumr18d=$Month;$TurnMtoNumr18d=date("m",strtotime($PreTurnMtoNumr18d));  
  $gotodater18d=($Year."-".$TurnMtoNumr18d."-18");$dayr18d = date('l',strtotime($gotodater18d));$pathAltr18d="Text/Events/".$dayr18d."/diamond.txt";if (file_exists($pathAltr18d) && !file_exists($errorpathr18d)){$goGetItr18d=file_get_contents($pathAltr18d); echo htmlspecialchars($goGetItr18d);}  } ?></div>                       
</div></label>



<label for="r19">
<div class="DaysGone"  id="d19" style="<?php $pathr19="Pic/Calendar/".$Year."/".$Month."/19/DaysGoneBg.png";
$errorpathr19a="Text/Events/".$Year."/".$Month."/19/denied.txt";
$PreTurnMtoNumr19a=$Month;$TurnMtoNumr19a=date("m",strtotime($PreTurnMtoNumr19a));  
  $gotodater19a=($Year."-".$TurnMtoNumr19a."-19");$dayr19a = date('l',strtotime($gotodater19a));$pathAltr19a="Pic/Calendar/".$dayr19a."/DaysGoneBg.png"; 
if (file_exists($pathr19)){echo "background-image:url(".$pathr19.") ;" ;}else if (file_exists($pathAltr19a) && !file_exists($errorpathr19a)){echo "background-image:url(".$pathAltr19a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da19">19</div>

	<div class="Gold" id="dan19"><?php   $pathr19g="Text/Events/".$Year."/".$Month."/19/gold.txt"; if (file_exists($pathr19g)){$goGetItr19g=file_get_contents($pathr19g); echo htmlspecialchars($goGetItr19g);}else{$errorpathr19g="Text/Events/".$Year."/".$Month."/19/denied.txt";$PreTurnMtoNumr19g=$Month;$TurnMtoNumr19g=date("m",strtotime($PreTurnMtoNumr19g));  
  $gotodater19g=($Year."-".$TurnMtoNumr19g."-19");$dayr19g = date('l',strtotime($gotodater19g));$pathAltr19g="Text/Events/".$dayr19g."/gold.txt";if (file_exists($pathAltr19g) && !file_exists($errorpathr19g)){$goGetItr19g=file_get_contents($pathAltr19g); echo htmlspecialchars($goGetItr19g); } } ?></div>

  <div class="Silver" id="dani19"><?php  $pathr19s="Text/Events/".$Year."/".$Month."/19/silver.txt";  if (file_exists($pathr19s)){$goGetItr19s=file_get_contents($pathr19s); echo htmlspecialchars($goGetItr19s);}else{$errorpathr19s="Text/Events/".$Year."/".$Month."/19/denied.txt";$PreTurnMtoNumr19s=$Month;$TurnMtoNumr19s=date("m",strtotime($PreTurnMtoNumr19s));  
  $gotodater19s=($Year."-".$TurnMtoNumr19s."-19");$dayr19s = date('l',strtotime($gotodater19s));$pathAltr19s="Text/Events/".$dayr19s."/silver.txt";if (file_exists($pathAltr19s) && !file_exists($errorpathr19s)){$goGetItr19s=file_get_contents($pathAltr19s); echo htmlspecialchars($goGetItr19s);}  } ?></div>

  <div class="Bronze" id="danie19"><?php  $pathr19b="Text/Events/".$Year."/".$Month."/19/bronze.txt";  if (file_exists($pathr19b)){$goGetItr19b=file_get_contents($pathr19b); echo htmlspecialchars($goGetItr19b);}else{$errorpathr19b="Text/Events/".$Year."/".$Month."/19/denied.txt";$PreTurnMtoNumr19b=$Month;$TurnMtoNumr19b=date("m",strtotime($PreTurnMtoNumr19b));  
  $gotodater19b=($Year."-".$TurnMtoNumr19b."-19");$dayr19b = date('l',strtotime($gotodater19b));$pathAltr19b="Text/Events/".$dayr19b."/bronze.txt";if (file_exists($pathAltr19b) && !file_exists($errorpathr19b)){$goGetItr19b=file_get_contents($pathAltr19b); echo htmlspecialchars($goGetItr19b);}  } ?></div> 

  <div class="Platinum" id="daniel19"><?php  $pathr19b="Text/Events/".$Year."/".$Month."/19/platinum.txt";  if (file_exists($pathr19b)){$goGetItr19b=file_get_contents($pathr19b); echo htmlspecialchars($goGetItr19b);}else{$errorpathr19b="Text/Events/".$Year."/".$Month."/19/denied.txt";$PreTurnMtoNumr19b=$Month;$TurnMtoNumr19b=date("m",strtotime($PreTurnMtoNumr19b));  
  $gotodater19b=($Year."-".$TurnMtoNumr19b."-19");$dayr19b = date('l',strtotime($gotodater19b));$pathAltr19b="Text/Events/".$dayr19b."/platinum.txt";if (file_exists($pathAltr19b) && !file_exists($errorpathr19b)){$goGetItr19b=file_get_contents($pathAltr19b); echo htmlspecialchars($goGetItr19b);}  } ?></div>

  <div class="Diamond" id="daniele19"><?php  $pathr19d="Text/Events/".$Year."/".$Month."/19/Diamond.txt";  if (file_exists($pathr19d)){$goGetItr19d=file_get_contents($pathr19d); echo htmlspecialchars($goGetItr19d);}else{$errorpathr19d="Text/Events/".$Year."/".$Month."/19/denied.txt";$PreTurnMtoNumr19d=$Month;$TurnMtoNumr19d=date("m",strtotime($PreTurnMtoNumr19d));  
  $gotodater19d=($Year."-".$TurnMtoNumr19d."-19");$dayr19d = date('l',strtotime($gotodater19d));$pathAltr19d="Text/Events/".$dayr19d."/diamond.txt";if (file_exists($pathAltr19d) && !file_exists($errorpathr19d)){$goGetItr19d=file_get_contents($pathAltr19d); echo htmlspecialchars($goGetItr19d);}  } ?></div>                       
</div></label>



<label for="r20">
<div class="DaysGone"  id="d20" style="<?php $pathr20="Pic/Calendar/".$Year."/".$Month."/20/DaysGoneBg.png";
$errorpathr20a="Text/Events/".$Year."/".$Month."/20/denied.txt";
$PreTurnMtoNumr20a=$Month;$TurnMtoNumr20a=date("m",strtotime($PreTurnMtoNumr20a));  
  $gotodater20a=($Year."-".$TurnMtoNumr20a."-20");$dayr20a = date('l',strtotime($gotodater20a));$pathAltr20a="Pic/Calendar/".$dayr20a."/DaysGoneBg.png"; 
if (file_exists($pathr20)){echo "background-image:url(".$pathr20.") ;" ;}else if (file_exists($pathAltr20a) && !file_exists($errorpathr20a)){echo "background-image:url(".$pathAltr20a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da20">20</div>

	<div class="Gold" id="dan20"><?php   $pathr20g="Text/Events/".$Year."/".$Month."/20/gold.txt"; if (file_exists($pathr20g)){$goGetItr20g=file_get_contents($pathr20g); echo htmlspecialchars($goGetItr20g);}else{$errorpathr20g="Text/Events/".$Year."/".$Month."/20/denied.txt";$PreTurnMtoNumr20g=$Month;$TurnMtoNumr20g=date("m",strtotime($PreTurnMtoNumr20g));  
  $gotodater20g=($Year."-".$TurnMtoNumr20g."-20");$dayr20g = date('l',strtotime($gotodater20g));$pathAltr20g="Text/Events/".$dayr20g."/gold.txt";if (file_exists($pathAltr20g) && !file_exists($errorpathr20g)){$goGetItr20g=file_get_contents($pathAltr20g); echo htmlspecialchars($goGetItr20g); } } ?></div>

  <div class="Silver" id="dani20"><?php  $pathr20s="Text/Events/".$Year."/".$Month."/20/silver.txt";  if (file_exists($pathr20s)){$goGetItr20s=file_get_contents($pathr20s); echo htmlspecialchars($goGetItr20s);}else{$errorpathr20s="Text/Events/".$Year."/".$Month."/20/denied.txt";$PreTurnMtoNumr20s=$Month;$TurnMtoNumr20s=date("m",strtotime($PreTurnMtoNumr20s));  
  $gotodater20s=($Year."-".$TurnMtoNumr20s."-20");$dayr20s = date('l',strtotime($gotodater20s));$pathAltr20s="Text/Events/".$dayr20s."/silver.txt";if (file_exists($pathAltr20s) && !file_exists($errorpathr20s)){$goGetItr20s=file_get_contents($pathAltr20s); echo htmlspecialchars($goGetItr20s);}  } ?></div>

  <div class="Bronze" id="danie20"><?php  $pathr20b="Text/Events/".$Year."/".$Month."/20/bronze.txt";  if (file_exists($pathr20b)){$goGetItr20b=file_get_contents($pathr20b); echo htmlspecialchars($goGetItr20b);}else{$errorpathr20b="Text/Events/".$Year."/".$Month."/20/denied.txt";$PreTurnMtoNumr20b=$Month;$TurnMtoNumr20b=date("m",strtotime($PreTurnMtoNumr20b));  
  $gotodater20b=($Year."-".$TurnMtoNumr20b."-20");$dayr20b = date('l',strtotime($gotodater20b));$pathAltr20b="Text/Events/".$dayr20b."/bronze.txt";if (file_exists($pathAltr20b) && !file_exists($errorpathr20b)){$goGetItr20b=file_get_contents($pathAltr20b); echo htmlspecialchars($goGetItr20b);}  } ?></div> 

  <div class="Platinum" id="daniel20"><?php  $pathr20b="Text/Events/".$Year."/".$Month."/20/platinum.txt";  if (file_exists($pathr20b)){$goGetItr20b=file_get_contents($pathr20b); echo htmlspecialchars($goGetItr20b);}else{$errorpathr20b="Text/Events/".$Year."/".$Month."/20/denied.txt";$PreTurnMtoNumr20b=$Month;$TurnMtoNumr20b=date("m",strtotime($PreTurnMtoNumr20b));  
  $gotodater20b=($Year."-".$TurnMtoNumr20b."-20");$dayr20b = date('l',strtotime($gotodater20b));$pathAltr20b="Text/Events/".$dayr20b."/platinum.txt";if (file_exists($pathAltr20b) && !file_exists($errorpathr20b)){$goGetItr20b=file_get_contents($pathAltr20b); echo htmlspecialchars($goGetItr20b);}  } ?></div>

  <div class="Diamond" id="daniele20"><?php  $pathr20d="Text/Events/".$Year."/".$Month."/20/Diamond.txt";  if (file_exists($pathr20d)){$goGetItr20d=file_get_contents($pathr20d); echo htmlspecialchars($goGetItr20d);}else{$errorpathr20d="Text/Events/".$Year."/".$Month."/20/denied.txt";$PreTurnMtoNumr20d=$Month;$TurnMtoNumr20d=date("m",strtotime($PreTurnMtoNumr20d));  
  $gotodater20d=($Year."-".$TurnMtoNumr20d."-20");$dayr20d = date('l',strtotime($gotodater20d));$pathAltr20d="Text/Events/".$dayr20d."/diamond.txt";if (file_exists($pathAltr20d) && !file_exists($errorpathr20d)){$goGetItr20d=file_get_contents($pathAltr20d); echo htmlspecialchars($goGetItr20d);}  } ?></div>                          
</div></label>


<label for="r21">
<div class="DaysGone"  id="d21" style="<?php $pathr21="Pic/Calendar/".$Year."/".$Month."/21/DaysGoneBg.png";
$errorpathr21a="Text/Events/".$Year."/".$Month."/21/denied.txt";
$PreTurnMtoNumr21a=$Month;$TurnMtoNumr21a=date("m",strtotime($PreTurnMtoNumr21a));  
  $gotodater21a=($Year."-".$TurnMtoNumr21a."-21");$dayr21a = date('l',strtotime($gotodater21a));$pathAltr21a="Pic/Calendar/".$dayr21a."/DaysGoneBg.png"; 
if (file_exists($pathr21)){echo "background-image:url(".$pathr21.") ;" ;}else if (file_exists($pathAltr21a) && !file_exists($errorpathr21a)){echo "background-image:url(".$pathAltr21a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da21">21</div>

	<div class="Gold" id="dan21"><?php   $pathr21g="Text/Events/".$Year."/".$Month."/21/gold.txt"; if (file_exists($pathr21g)){$goGetItr21g=file_get_contents($pathr21g); echo htmlspecialchars($goGetItr21g);}else{$errorpathr21g="Text/Events/".$Year."/".$Month."/21/denied.txt";$PreTurnMtoNumr21g=$Month;$TurnMtoNumr21g=date("m",strtotime($PreTurnMtoNumr21g));  
  $gotodater21g=($Year."-".$TurnMtoNumr21g."-21");$dayr21g = date('l',strtotime($gotodater21g));$pathAltr21g="Text/Events/".$dayr21g."/gold.txt";if (file_exists($pathAltr21g) && !file_exists($errorpathr21g)){$goGetItr21g=file_get_contents($pathAltr21g); echo htmlspecialchars($goGetItr21g); } } ?></div>

  <div class="Silver" id="dani21"><?php  $pathr21s="Text/Events/".$Year."/".$Month."/21/silver.txt";  if (file_exists($pathr21s)){$goGetItr21s=file_get_contents($pathr21s); echo htmlspecialchars($goGetItr21s);}else{$errorpathr21s="Text/Events/".$Year."/".$Month."/21/denied.txt";$PreTurnMtoNumr21s=$Month;$TurnMtoNumr21s=date("m",strtotime($PreTurnMtoNumr21s));  
  $gotodater21s=($Year."-".$TurnMtoNumr21s."-21");$dayr21s = date('l',strtotime($gotodater21s));$pathAltr21s="Text/Events/".$dayr21s."/silver.txt";if (file_exists($pathAltr21s) && !file_exists($errorpathr21s)){$goGetItr21s=file_get_contents($pathAltr21s); echo htmlspecialchars($goGetItr21s);}  } ?></div>

  <div class="Bronze" id="danie21"><?php  $pathr21b="Text/Events/".$Year."/".$Month."/21/bronze.txt";  if (file_exists($pathr21b)){$goGetItr21b=file_get_contents($pathr21b); echo htmlspecialchars($goGetItr21b);}else{$errorpathr21b="Text/Events/".$Year."/".$Month."/21/denied.txt";$PreTurnMtoNumr21b=$Month;$TurnMtoNumr21b=date("m",strtotime($PreTurnMtoNumr21b));  
  $gotodater21b=($Year."-".$TurnMtoNumr21b."-21");$dayr21b = date('l',strtotime($gotodater21b));$pathAltr21b="Text/Events/".$dayr21b."/bronze.txt";if (file_exists($pathAltr21b) && !file_exists($errorpathr21b)){$goGetItr21b=file_get_contents($pathAltr21b); echo htmlspecialchars($goGetItr21b);}  } ?></div> 

  <div class="Platinum" id="daniel21"><?php  $pathr21b="Text/Events/".$Year."/".$Month."/21/platinum.txt";  if (file_exists($pathr21b)){$goGetItr21b=file_get_contents($pathr21b); echo htmlspecialchars($goGetItr21b);}else{$errorpathr21b="Text/Events/".$Year."/".$Month."/21/denied.txt";$PreTurnMtoNumr21b=$Month;$TurnMtoNumr21b=date("m",strtotime($PreTurnMtoNumr21b));  
  $gotodater21b=($Year."-".$TurnMtoNumr21b."-21");$dayr21b = date('l',strtotime($gotodater21b));$pathAltr21b="Text/Events/".$dayr21b."/platinum.txt";if (file_exists($pathAltr21b) && !file_exists($errorpathr21b)){$goGetItr21b=file_get_contents($pathAltr21b); echo htmlspecialchars($goGetItr21b);}  } ?></div>

  <div class="Diamond" id="daniele21"><?php  $pathr21d="Text/Events/".$Year."/".$Month."/21/Diamond.txt";  if (file_exists($pathr21d)){$goGetItr21d=file_get_contents($pathr21d); echo htmlspecialchars($goGetItr21d);}else{$errorpathr21d="Text/Events/".$Year."/".$Month."/21/denied.txt";$PreTurnMtoNumr21d=$Month;$TurnMtoNumr21d=date("m",strtotime($PreTurnMtoNumr21d));  
  $gotodater21d=($Year."-".$TurnMtoNumr21d."-21");$dayr21d = date('l',strtotime($gotodater21d));$pathAltr21d="Text/Events/".$dayr21d."/diamond.txt";if (file_exists($pathAltr21d) && !file_exists($errorpathr21d)){$goGetItr21d=file_get_contents($pathAltr21d); echo htmlspecialchars($goGetItr21d);}  } ?></div>                         
</div></label>



<label for="r22">
<div class="DaysGone"  id="d22" style="<?php $pathr22="Pic/Calendar/".$Year."/".$Month."/22/DaysGoneBg.png";
$errorpathr22a="Text/Events/".$Year."/".$Month."/22/denied.txt";
$PreTurnMtoNumr22a=$Month;$TurnMtoNumr22a=date("m",strtotime($PreTurnMtoNumr22a));  
  $gotodater22a=($Year."-".$TurnMtoNumr22a."-22");$dayr22a = date('l',strtotime($gotodater22a));$pathAltr22a="Pic/Calendar/".$dayr22a."/DaysGoneBg.png"; 
if (file_exists($pathr22)){echo "background-image:url(".$pathr22.") ;" ;}else if (file_exists($pathAltr22a) && !file_exists($errorpathr22a)){echo "background-image:url(".$pathAltr22a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da22">22</div>

	<div class="Gold" id="dan22"><?php   $pathr22g="Text/Events/".$Year."/".$Month."/22/gold.txt"; if (file_exists($pathr22g)){$goGetItr22g=file_get_contents($pathr22g); echo htmlspecialchars($goGetItr22g);}else{$errorpathr22g="Text/Events/".$Year."/".$Month."/22/denied.txt";$PreTurnMtoNumr22g=$Month;$TurnMtoNumr22g=date("m",strtotime($PreTurnMtoNumr22g));  
  $gotodater22g=($Year."-".$TurnMtoNumr22g."-22");$dayr22g = date('l',strtotime($gotodater22g));$pathAltr22g="Text/Events/".$dayr22g."/gold.txt";if (file_exists($pathAltr22g) && !file_exists($errorpathr22g)){$goGetItr22g=file_get_contents($pathAltr22g); echo htmlspecialchars($goGetItr22g); } } ?></div>

  <div class="Silver" id="dani22"><?php  $pathr22s="Text/Events/".$Year."/".$Month."/22/silver.txt";  if (file_exists($pathr22s)){$goGetItr22s=file_get_contents($pathr22s); echo htmlspecialchars($goGetItr22s);}else{$errorpathr22s="Text/Events/".$Year."/".$Month."/22/denied.txt";$PreTurnMtoNumr22s=$Month;$TurnMtoNumr22s=date("m",strtotime($PreTurnMtoNumr22s));  
  $gotodater22s=($Year."-".$TurnMtoNumr22s."-22");$dayr22s = date('l',strtotime($gotodater22s));$pathAltr22s="Text/Events/".$dayr22s."/silver.txt";if (file_exists($pathAltr22s) && !file_exists($errorpathr22s)){$goGetItr22s=file_get_contents($pathAltr22s); echo htmlspecialchars($goGetItr22s);}  } ?></div>

  <div class="Bronze" id="danie22"><?php  $pathr22b="Text/Events/".$Year."/".$Month."/22/bronze.txt";  if (file_exists($pathr22b)){$goGetItr22b=file_get_contents($pathr22b); echo htmlspecialchars($goGetItr22b);}else{$errorpathr22b="Text/Events/".$Year."/".$Month."/22/denied.txt";$PreTurnMtoNumr22b=$Month;$TurnMtoNumr22b=date("m",strtotime($PreTurnMtoNumr22b));  
  $gotodater22b=($Year."-".$TurnMtoNumr22b."-22");$dayr22b = date('l',strtotime($gotodater22b));$pathAltr22b="Text/Events/".$dayr22b."/bronze.txt";if (file_exists($pathAltr22b) && !file_exists($errorpathr22b)){$goGetItr22b=file_get_contents($pathAltr22b); echo htmlspecialchars($goGetItr22b);}  } ?></div> 

  <div class="Platinum" id="daniel22"><?php  $pathr22b="Text/Events/".$Year."/".$Month."/22/platinum.txt";  if (file_exists($pathr22b)){$goGetItr22b=file_get_contents($pathr22b); echo htmlspecialchars($goGetItr22b);}else{$errorpathr22b="Text/Events/".$Year."/".$Month."/22/denied.txt";$PreTurnMtoNumr22b=$Month;$TurnMtoNumr22b=date("m",strtotime($PreTurnMtoNumr22b));  
  $gotodater22b=($Year."-".$TurnMtoNumr22b."-22");$dayr22b = date('l',strtotime($gotodater22b));$pathAltr22b="Text/Events/".$dayr22b."/platinum.txt";if (file_exists($pathAltr22b) && !file_exists($errorpathr22b)){$goGetItr22b=file_get_contents($pathAltr22b); echo htmlspecialchars($goGetItr22b);}  } ?></div>

  <div class="Diamond" id="daniele22"><?php  $pathr22d="Text/Events/".$Year."/".$Month."/22/Diamond.txt";  if (file_exists($pathr22d)){$goGetItr22d=file_get_contents($pathr22d); echo htmlspecialchars($goGetItr22d);}else{$errorpathr22d="Text/Events/".$Year."/".$Month."/22/denied.txt";$PreTurnMtoNumr22d=$Month;$TurnMtoNumr22d=date("m",strtotime($PreTurnMtoNumr22d));  
  $gotodater22d=($Year."-".$TurnMtoNumr22d."-22");$dayr22d = date('l',strtotime($gotodater22d));$pathAltr22d="Text/Events/".$dayr22d."/diamond.txt";if (file_exists($pathAltr22d) && !file_exists($errorpathr22d)){$goGetItr22d=file_get_contents($pathAltr22d); echo htmlspecialchars($goGetItr22d);}  } ?></div>                         
</div></label>



<label for="r23">
<div class="DaysGone"  id="d23" style="<?php $pathr23="Pic/Calendar/".$Year."/".$Month."/23/DaysGoneBg.png";
$errorpathr23a="Text/Events/".$Year."/".$Month."/23/denied.txt";
$PreTurnMtoNumr23a=$Month;$TurnMtoNumr23a=date("m",strtotime($PreTurnMtoNumr23a));  
  $gotodater23a=($Year."-".$TurnMtoNumr23a."-23");$dayr23a = date('l',strtotime($gotodater23a));$pathAltr23a="Pic/Calendar/".$dayr23a."/DaysGoneBg.png"; 
if (file_exists($pathr23)){echo "background-image:url(".$pathr23.") ;" ;}else if (file_exists($pathAltr23a) && !file_exists($errorpathr23a)){echo "background-image:url(".$pathAltr23a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da23">23</div>

	<div class="Gold" id="dan23"><?php   $pathr23g="Text/Events/".$Year."/".$Month."/23/gold.txt"; if (file_exists($pathr23g)){$goGetItr23g=file_get_contents($pathr23g); echo htmlspecialchars($goGetItr23g);}else{$errorpathr23g="Text/Events/".$Year."/".$Month."/23/denied.txt";$PreTurnMtoNumr23g=$Month;$TurnMtoNumr23g=date("m",strtotime($PreTurnMtoNumr23g));  
  $gotodater23g=($Year."-".$TurnMtoNumr23g."-23");$dayr23g = date('l',strtotime($gotodater23g));$pathAltr23g="Text/Events/".$dayr23g."/gold.txt";if (file_exists($pathAltr23g) && !file_exists($errorpathr23g)){$goGetItr23g=file_get_contents($pathAltr23g); echo htmlspecialchars($goGetItr23g); } } ?></div>

  <div class="Silver" id="dani23"><?php  $pathr23s="Text/Events/".$Year."/".$Month."/23/silver.txt";  if (file_exists($pathr23s)){$goGetItr23s=file_get_contents($pathr23s); echo htmlspecialchars($goGetItr23s);}else{$errorpathr23s="Text/Events/".$Year."/".$Month."/23/denied.txt";$PreTurnMtoNumr23s=$Month;$TurnMtoNumr23s=date("m",strtotime($PreTurnMtoNumr23s));  
  $gotodater23s=($Year."-".$TurnMtoNumr23s."-23");$dayr23s = date('l',strtotime($gotodater23s));$pathAltr23s="Text/Events/".$dayr23s."/silver.txt";if (file_exists($pathAltr23s) && !file_exists($errorpathr23s)){$goGetItr23s=file_get_contents($pathAltr23s); echo htmlspecialchars($goGetItr23s);}  } ?></div>

  <div class="Bronze" id="danie23"><?php  $pathr23b="Text/Events/".$Year."/".$Month."/23/bronze.txt";  if (file_exists($pathr23b)){$goGetItr23b=file_get_contents($pathr23b); echo htmlspecialchars($goGetItr23b);}else{$errorpathr23b="Text/Events/".$Year."/".$Month."/23/denied.txt";$PreTurnMtoNumr23b=$Month;$TurnMtoNumr23b=date("m",strtotime($PreTurnMtoNumr23b));  
  $gotodater23b=($Year."-".$TurnMtoNumr23b."-23");$dayr23b = date('l',strtotime($gotodater23b));$pathAltr23b="Text/Events/".$dayr23b."/bronze.txt";if (file_exists($pathAltr23b) && !file_exists($errorpathr23b)){$goGetItr23b=file_get_contents($pathAltr23b); echo htmlspecialchars($goGetItr23b);}  } ?></div> 

  <div class="Platinum" id="daniel23"><?php  $pathr23b="Text/Events/".$Year."/".$Month."/23/platinum.txt";  if (file_exists($pathr23b)){$goGetItr23b=file_get_contents($pathr23b); echo htmlspecialchars($goGetItr23b);}else{$errorpathr23b="Text/Events/".$Year."/".$Month."/23/denied.txt";$PreTurnMtoNumr23b=$Month;$TurnMtoNumr23b=date("m",strtotime($PreTurnMtoNumr23b));  
  $gotodater23b=($Year."-".$TurnMtoNumr23b."-23");$dayr23b = date('l',strtotime($gotodater23b));$pathAltr23b="Text/Events/".$dayr23b."/platinum.txt";if (file_exists($pathAltr23b) && !file_exists($errorpathr23b)){$goGetItr23b=file_get_contents($pathAltr23b); echo htmlspecialchars($goGetItr23b);}  } ?></div>

  <div class="Diamond" id="daniele23"><?php  $pathr23d="Text/Events/".$Year."/".$Month."/23/Diamond.txt";  if (file_exists($pathr23d)){$goGetItr23d=file_get_contents($pathr23d); echo htmlspecialchars($goGetItr23d);}else{$errorpathr23d="Text/Events/".$Year."/".$Month."/23/denied.txt";$PreTurnMtoNumr23d=$Month;$TurnMtoNumr23d=date("m",strtotime($PreTurnMtoNumr23d));  
  $gotodater23d=($Year."-".$TurnMtoNumr23d."-23");$dayr23d = date('l',strtotime($gotodater23d));$pathAltr23d="Text/Events/".$dayr23d."/diamond.txt";if (file_exists($pathAltr23d) && !file_exists($errorpathr23d)){$goGetItr23d=file_get_contents($pathAltr23d); echo htmlspecialchars($goGetItr23d);}  } ?></div>                       
</div></label>



<label for="r24">
<div class="DaysGone"  id="d24" style="<?php $pathr24="Pic/Calendar/".$Year."/".$Month."/24/DaysGoneBg.png";
$errorpathr24a="Text/Events/".$Year."/".$Month."/24/denied.txt";
$PreTurnMtoNumr24a=$Month;$TurnMtoNumr24a=date("m",strtotime($PreTurnMtoNumr24a));  
  $gotodater24a=($Year."-".$TurnMtoNumr24a."-24");$dayr24a = date('l',strtotime($gotodater24a));$pathAltr24a="Pic/Calendar/".$dayr24a."/DaysGoneBg.png"; 
if (file_exists($pathr24)){echo "background-image:url(".$pathr24.") ;" ;}else if (file_exists($pathAltr24a) && !file_exists($errorpathr24a)){echo "background-image:url(".$pathAltr24a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da24">24</div>

	<div class="Gold" id="dan24"><?php   $pathr24g="Text/Events/".$Year."/".$Month."/24/gold.txt"; if (file_exists($pathr24g)){$goGetItr24g=file_get_contents($pathr24g); echo htmlspecialchars($goGetItr24g);}else{$errorpathr24g="Text/Events/".$Year."/".$Month."/24/denied.txt";$PreTurnMtoNumr24g=$Month;$TurnMtoNumr24g=date("m",strtotime($PreTurnMtoNumr24g));  
  $gotodater24g=($Year."-".$TurnMtoNumr24g."-24");$dayr24g = date('l',strtotime($gotodater24g));$pathAltr24g="Text/Events/".$dayr24g."/gold.txt";if (file_exists($pathAltr24g) && !file_exists($errorpathr24g)){$goGetItr24g=file_get_contents($pathAltr24g); echo htmlspecialchars($goGetItr24g); } } ?></div>

  <div class="Silver" id="dani24"><?php  $pathr24s="Text/Events/".$Year."/".$Month."/24/silver.txt";  if (file_exists($pathr24s)){$goGetItr24s=file_get_contents($pathr24s); echo htmlspecialchars($goGetItr24s);}else{$errorpathr24s="Text/Events/".$Year."/".$Month."/24/denied.txt";$PreTurnMtoNumr24s=$Month;$TurnMtoNumr24s=date("m",strtotime($PreTurnMtoNumr24s));  
  $gotodater24s=($Year."-".$TurnMtoNumr24s."-24");$dayr24s = date('l',strtotime($gotodater24s));$pathAltr24s="Text/Events/".$dayr24s."/silver.txt";if (file_exists($pathAltr24s) && !file_exists($errorpathr24s)){$goGetItr24s=file_get_contents($pathAltr24s); echo htmlspecialchars($goGetItr24s);}  } ?></div>

  <div class="Bronze" id="danie24"><?php  $pathr24b="Text/Events/".$Year."/".$Month."/24/bronze.txt";  if (file_exists($pathr24b)){$goGetItr24b=file_get_contents($pathr24b); echo htmlspecialchars($goGetItr24b);}else{$errorpathr24b="Text/Events/".$Year."/".$Month."/24/denied.txt";$PreTurnMtoNumr24b=$Month;$TurnMtoNumr24b=date("m",strtotime($PreTurnMtoNumr24b));  
  $gotodater24b=($Year."-".$TurnMtoNumr24b."-24");$dayr24b = date('l',strtotime($gotodater24b));$pathAltr24b="Text/Events/".$dayr24b."/bronze.txt";if (file_exists($pathAltr24b) && !file_exists($errorpathr24b)){$goGetItr24b=file_get_contents($pathAltr24b); echo htmlspecialchars($goGetItr24b);}  } ?></div> 

  <div class="Platinum" id="daniel24"><?php  $pathr24b="Text/Events/".$Year."/".$Month."/24/platinum.txt";  if (file_exists($pathr24b)){$goGetItr24b=file_get_contents($pathr24b); echo htmlspecialchars($goGetItr24b);}else{$errorpathr24b="Text/Events/".$Year."/".$Month."/24/denied.txt";$PreTurnMtoNumr24b=$Month;$TurnMtoNumr24b=date("m",strtotime($PreTurnMtoNumr24b));  
  $gotodater24b=($Year."-".$TurnMtoNumr24b."-24");$dayr24b = date('l',strtotime($gotodater24b));$pathAltr24b="Text/Events/".$dayr24b."/platinum.txt";if (file_exists($pathAltr24b) && !file_exists($errorpathr24b)){$goGetItr24b=file_get_contents($pathAltr24b); echo htmlspecialchars($goGetItr24b);}  } ?></div>

  <div class="Diamond" id="daniele24"><?php  $pathr24d="Text/Events/".$Year."/".$Month."/24/Diamond.txt";  if (file_exists($pathr24d)){$goGetItr24d=file_get_contents($pathr24d); echo htmlspecialchars($goGetItr24d);}else{$errorpathr24d="Text/Events/".$Year."/".$Month."/24/denied.txt";$PreTurnMtoNumr24d=$Month;$TurnMtoNumr24d=date("m",strtotime($PreTurnMtoNumr24d));  
  $gotodater24d=($Year."-".$TurnMtoNumr24d."-24");$dayr24d = date('l',strtotime($gotodater24d));$pathAltr24d="Text/Events/".$dayr24d."/diamond.txt";if (file_exists($pathAltr24d) && !file_exists($errorpathr24d)){$goGetItr24d=file_get_contents($pathAltr24d); echo htmlspecialchars($goGetItr24d);}  } ?></div>                          
</div></label>



<label for="r25">
<div class="DaysGone"  id="d25" style="<?php $pathr25="Pic/Calendar/".$Year."/".$Month."/25/DaysGoneBg.png";
$errorpathr25a="Text/Events/".$Year."/".$Month."/25/denied.txt";
$PreTurnMtoNumr25a=$Month;$TurnMtoNumr25a=date("m",strtotime($PreTurnMtoNumr25a));  
  $gotodater25a=($Year."-".$TurnMtoNumr25a."-25");$dayr25a = date('l',strtotime($gotodater25a));$pathAltr25a="Pic/Calendar/".$dayr25a."/DaysGoneBg.png"; 
if (file_exists($pathr25)){echo "background-image:url(".$pathr25.") ;" ;}else if (file_exists($pathAltr25a) && !file_exists($errorpathr25a)){echo "background-image:url(".$pathAltr25a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da25">25</div>

	<div class="Gold" id="dan25"><?php   $pathr25g="Text/Events/".$Year."/".$Month."/25/gold.txt"; if (file_exists($pathr25g)){$goGetItr25g=file_get_contents($pathr25g); echo htmlspecialchars($goGetItr25g);}else{$errorpathr25g="Text/Events/".$Year."/".$Month."/25/denied.txt";$PreTurnMtoNumr25g=$Month;$TurnMtoNumr25g=date("m",strtotime($PreTurnMtoNumr25g));  
  $gotodater25g=($Year."-".$TurnMtoNumr25g."-25");$dayr25g = date('l',strtotime($gotodater25g));$pathAltr25g="Text/Events/".$dayr25g."/gold.txt";if (file_exists($pathAltr25g) && !file_exists($errorpathr25g)){$goGetItr25g=file_get_contents($pathAltr25g); echo htmlspecialchars($goGetItr25g); } } ?></div>

  <div class="Silver" id="dani25"><?php  $pathr25s="Text/Events/".$Year."/".$Month."/25/silver.txt";  if (file_exists($pathr25s)){$goGetItr25s=file_get_contents($pathr25s); echo htmlspecialchars($goGetItr25s);}else{$errorpathr25s="Text/Events/".$Year."/".$Month."/25/denied.txt";$PreTurnMtoNumr25s=$Month;$TurnMtoNumr25s=date("m",strtotime($PreTurnMtoNumr25s));  
  $gotodater25s=($Year."-".$TurnMtoNumr25s."-25");$dayr25s = date('l',strtotime($gotodater25s));$pathAltr25s="Text/Events/".$dayr25s."/silver.txt";if (file_exists($pathAltr25s) && !file_exists($errorpathr25s)){$goGetItr25s=file_get_contents($pathAltr25s); echo htmlspecialchars($goGetItr25s);}  } ?></div>

  <div class="Bronze" id="danie25"><?php  $pathr25b="Text/Events/".$Year."/".$Month."/25/bronze.txt";  if (file_exists($pathr25b)){$goGetItr25b=file_get_contents($pathr25b); echo htmlspecialchars($goGetItr25b);}else{$errorpathr25b="Text/Events/".$Year."/".$Month."/25/denied.txt";$PreTurnMtoNumr25b=$Month;$TurnMtoNumr25b=date("m",strtotime($PreTurnMtoNumr25b));  
  $gotodater25b=($Year."-".$TurnMtoNumr25b."-25");$dayr25b = date('l',strtotime($gotodater25b));$pathAltr25b="Text/Events/".$dayr25b."/bronze.txt";if (file_exists($pathAltr25b) && !file_exists($errorpathr25b)){$goGetItr25b=file_get_contents($pathAltr25b); echo htmlspecialchars($goGetItr25b);}  } ?></div> 

  <div class="Platinum" id="daniel25"><?php  $pathr25b="Text/Events/".$Year."/".$Month."/25/platinum.txt";  if (file_exists($pathr25b)){$goGetItr25b=file_get_contents($pathr25b); echo htmlspecialchars($goGetItr25b);}else{$errorpathr25b="Text/Events/".$Year."/".$Month."/25/denied.txt";$PreTurnMtoNumr25b=$Month;$TurnMtoNumr25b=date("m",strtotime($PreTurnMtoNumr25b));  
  $gotodater25b=($Year."-".$TurnMtoNumr25b."-25");$dayr25b = date('l',strtotime($gotodater25b));$pathAltr25b="Text/Events/".$dayr25b."/platinum.txt";if (file_exists($pathAltr25b) && !file_exists($errorpathr25b)){$goGetItr25b=file_get_contents($pathAltr25b); echo htmlspecialchars($goGetItr25b);}  } ?></div>

  <div class="Diamond" id="daniele25"><?php  $pathr25d="Text/Events/".$Year."/".$Month."/25/Diamond.txt";  if (file_exists($pathr25d)){$goGetItr25d=file_get_contents($pathr25d); echo htmlspecialchars($goGetItr25d);}else{$errorpathr25d="Text/Events/".$Year."/".$Month."/25/denied.txt";$PreTurnMtoNumr25d=$Month;$TurnMtoNumr25d=date("m",strtotime($PreTurnMtoNumr25d));  
  $gotodater25d=($Year."-".$TurnMtoNumr25d."-25");$dayr25d = date('l',strtotime($gotodater25d));$pathAltr25d="Text/Events/".$dayr25d."/diamond.txt";if (file_exists($pathAltr25d) && !file_exists($errorpathr25d)){$goGetItr25d=file_get_contents($pathAltr25d); echo htmlspecialchars($goGetItr25d);}  } ?></div>                          
</div></label>



<label for="r26">
<div class="DaysGone"  id="d26" style="<?php $pathr26="Pic/Calendar/".$Year."/".$Month."/26/DaysGoneBg.png";
$errorpathr26a="Text/Events/".$Year."/".$Month."/26/denied.txt";
$PreTurnMtoNumr26a=$Month;$TurnMtoNumr26a=date("m",strtotime($PreTurnMtoNumr26a));  
  $gotodater26a=($Year."-".$TurnMtoNumr26a."-26");$dayr26a = date('l',strtotime($gotodater26a));$pathAltr26a="Pic/Calendar/".$dayr26a."/DaysGoneBg.png"; 
if (file_exists($pathr26)){echo "background-image:url(".$pathr26.") ;" ;}else if (file_exists($pathAltr26a) && !file_exists($errorpathr26a)){echo "background-image:url(".$pathAltr26a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da26">26</div>

	<div class="Gold" id="dan26"><?php   $pathr26g="Text/Events/".$Year."/".$Month."/26/gold.txt"; if (file_exists($pathr26g)){$goGetItr26g=file_get_contents($pathr26g); echo htmlspecialchars($goGetItr26g);}else{$errorpathr26g="Text/Events/".$Year."/".$Month."/26/denied.txt";$PreTurnMtoNumr26g=$Month;$TurnMtoNumr26g=date("m",strtotime($PreTurnMtoNumr26g));  
  $gotodater26g=($Year."-".$TurnMtoNumr26g."-26");$dayr26g = date('l',strtotime($gotodater26g));$pathAltr26g="Text/Events/".$dayr26g."/gold.txt";if (file_exists($pathAltr26g) && !file_exists($errorpathr26g)){$goGetItr26g=file_get_contents($pathAltr26g); echo htmlspecialchars($goGetItr26g); } } ?></div>

  <div class="Silver" id="dani26"><?php  $pathr26s="Text/Events/".$Year."/".$Month."/26/silver.txt";  if (file_exists($pathr26s)){$goGetItr26s=file_get_contents($pathr26s); echo htmlspecialchars($goGetItr26s);}else{$errorpathr26s="Text/Events/".$Year."/".$Month."/26/denied.txt";$PreTurnMtoNumr26s=$Month;$TurnMtoNumr26s=date("m",strtotime($PreTurnMtoNumr26s));  
  $gotodater26s=($Year."-".$TurnMtoNumr26s."-26");$dayr26s = date('l',strtotime($gotodater26s));$pathAltr26s="Text/Events/".$dayr26s."/silver.txt";if (file_exists($pathAltr26s) && !file_exists($errorpathr26s)){$goGetItr26s=file_get_contents($pathAltr26s); echo htmlspecialchars($goGetItr26s);}  } ?></div>

  <div class="Bronze" id="danie26"><?php  $pathr26b="Text/Events/".$Year."/".$Month."/26/bronze.txt";  if (file_exists($pathr26b)){$goGetItr26b=file_get_contents($pathr26b); echo htmlspecialchars($goGetItr26b);}else{$errorpathr26b="Text/Events/".$Year."/".$Month."/26/denied.txt";$PreTurnMtoNumr26b=$Month;$TurnMtoNumr26b=date("m",strtotime($PreTurnMtoNumr26b));  
  $gotodater26b=($Year."-".$TurnMtoNumr26b."-26");$dayr26b = date('l',strtotime($gotodater26b));$pathAltr26b="Text/Events/".$dayr26b."/bronze.txt";if (file_exists($pathAltr26b) && !file_exists($errorpathr26b)){$goGetItr26b=file_get_contents($pathAltr26b); echo htmlspecialchars($goGetItr26b);}  } ?></div> 

  <div class="Platinum" id="daniel26"><?php  $pathr26b="Text/Events/".$Year."/".$Month."/26/platinum.txt";  if (file_exists($pathr26b)){$goGetItr26b=file_get_contents($pathr26b); echo htmlspecialchars($goGetItr26b);}else{$errorpathr26b="Text/Events/".$Year."/".$Month."/26/denied.txt";$PreTurnMtoNumr26b=$Month;$TurnMtoNumr26b=date("m",strtotime($PreTurnMtoNumr26b));  
  $gotodater26b=($Year."-".$TurnMtoNumr26b."-26");$dayr26b = date('l',strtotime($gotodater26b));$pathAltr26b="Text/Events/".$dayr26b."/platinum.txt";if (file_exists($pathAltr26b) && !file_exists($errorpathr26b)){$goGetItr26b=file_get_contents($pathAltr26b); echo htmlspecialchars($goGetItr26b);}  } ?></div>

  <div class="Diamond" id="daniele26"><?php  $pathr26d="Text/Events/".$Year."/".$Month."/26/Diamond.txt";  if (file_exists($pathr26d)){$goGetItr26d=file_get_contents($pathr26d); echo htmlspecialchars($goGetItr26d);}else{$errorpathr26d="Text/Events/".$Year."/".$Month."/26/denied.txt";$PreTurnMtoNumr26d=$Month;$TurnMtoNumr26d=date("m",strtotime($PreTurnMtoNumr26d));  
  $gotodater26d=($Year."-".$TurnMtoNumr26d."-26");$dayr26d = date('l',strtotime($gotodater26d));$pathAltr26d="Text/Events/".$dayr26d."/diamond.txt";if (file_exists($pathAltr26d) && !file_exists($errorpathr26d)){$goGetItr26d=file_get_contents($pathAltr26d); echo htmlspecialchars($goGetItr26d);}  } ?></div>                         
</div></label>



<label for="r27">
<div class="DaysGone"  id="d27" style="<?php $pathr27="Pic/Calendar/".$Year."/".$Month."/27/DaysGoneBg.png";
$errorpathr27a="Text/Events/".$Year."/".$Month."/27/denied.txt";
$PreTurnMtoNumr27a=$Month;$TurnMtoNumr27a=date("m",strtotime($PreTurnMtoNumr27a));  
  $gotodater27a=($Year."-".$TurnMtoNumr27a."-27");$dayr27a = date('l',strtotime($gotodater27a));$pathAltr27a="Pic/Calendar/".$dayr27a."/DaysGoneBg.png"; 
if (file_exists($pathr27)){echo "background-image:url(".$pathr27.") ;" ;}else if (file_exists($pathAltr27a) && !file_exists($errorpathr27a)){echo "background-image:url(".$pathAltr27a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da27">27</div>

	<div class="Gold" id="dan27"><?php   $pathr27g="Text/Events/".$Year."/".$Month."/27/gold.txt"; if (file_exists($pathr27g)){$goGetItr27g=file_get_contents($pathr27g); echo htmlspecialchars($goGetItr27g);}else{$errorpathr27g="Text/Events/".$Year."/".$Month."/27/denied.txt";$PreTurnMtoNumr27g=$Month;$TurnMtoNumr27g=date("m",strtotime($PreTurnMtoNumr27g));  
  $gotodater27g=($Year."-".$TurnMtoNumr27g."-27");$dayr27g = date('l',strtotime($gotodater27g));$pathAltr27g="Text/Events/".$dayr27g."/gold.txt";if (file_exists($pathAltr27g) && !file_exists($errorpathr27g)){$goGetItr27g=file_get_contents($pathAltr27g); echo htmlspecialchars($goGetItr27g); } } ?></div>

  <div class="Silver" id="dani27"><?php  $pathr27s="Text/Events/".$Year."/".$Month."/27/silver.txt";  if (file_exists($pathr27s)){$goGetItr27s=file_get_contents($pathr27s); echo htmlspecialchars($goGetItr27s);}else{$errorpathr27s="Text/Events/".$Year."/".$Month."/27/denied.txt";$PreTurnMtoNumr27s=$Month;$TurnMtoNumr27s=date("m",strtotime($PreTurnMtoNumr27s));  
  $gotodater27s=($Year."-".$TurnMtoNumr27s."-27");$dayr27s = date('l',strtotime($gotodater27s));$pathAltr27s="Text/Events/".$dayr27s."/silver.txt";if (file_exists($pathAltr27s) && !file_exists($errorpathr27s)){$goGetItr27s=file_get_contents($pathAltr27s); echo htmlspecialchars($goGetItr27s);}  } ?></div>

  <div class="Bronze" id="danie27"><?php  $pathr27b="Text/Events/".$Year."/".$Month."/27/bronze.txt";  if (file_exists($pathr27b)){$goGetItr27b=file_get_contents($pathr27b); echo htmlspecialchars($goGetItr27b);}else{$errorpathr27b="Text/Events/".$Year."/".$Month."/27/denied.txt";$PreTurnMtoNumr27b=$Month;$TurnMtoNumr27b=date("m",strtotime($PreTurnMtoNumr27b));  
  $gotodater27b=($Year."-".$TurnMtoNumr27b."-27");$dayr27b = date('l',strtotime($gotodater27b));$pathAltr27b="Text/Events/".$dayr27b."/bronze.txt";if (file_exists($pathAltr27b) && !file_exists($errorpathr27b)){$goGetItr27b=file_get_contents($pathAltr27b); echo htmlspecialchars($goGetItr27b);}  } ?></div> 

  <div class="Platinum" id="daniel27"><?php  $pathr27b="Text/Events/".$Year."/".$Month."/27/platinum.txt";  if (file_exists($pathr27b)){$goGetItr27b=file_get_contents($pathr27b); echo htmlspecialchars($goGetItr27b);}else{$errorpathr27b="Text/Events/".$Year."/".$Month."/27/denied.txt";$PreTurnMtoNumr27b=$Month;$TurnMtoNumr27b=date("m",strtotime($PreTurnMtoNumr27b));  
  $gotodater27b=($Year."-".$TurnMtoNumr27b."-27");$dayr27b = date('l',strtotime($gotodater27b));$pathAltr27b="Text/Events/".$dayr27b."/platinum.txt";if (file_exists($pathAltr27b) && !file_exists($errorpathr27b)){$goGetItr27b=file_get_contents($pathAltr27b); echo htmlspecialchars($goGetItr27b);}  } ?></div>

  <div class="Diamond" id="daniele27"><?php  $pathr27d="Text/Events/".$Year."/".$Month."/27/Diamond.txt";  if (file_exists($pathr27d)){$goGetItr27d=file_get_contents($pathr27d); echo htmlspecialchars($goGetItr27d);}else{$errorpathr27d="Text/Events/".$Year."/".$Month."/27/denied.txt";$PreTurnMtoNumr27d=$Month;$TurnMtoNumr27d=date("m",strtotime($PreTurnMtoNumr27d));  
  $gotodater27d=($Year."-".$TurnMtoNumr27d."-27");$dayr27d = date('l',strtotime($gotodater27d));$pathAltr27d="Text/Events/".$dayr27d."/diamond.txt";if (file_exists($pathAltr27d) && !file_exists($errorpathr27d)){$goGetItr27d=file_get_contents($pathAltr27d); echo htmlspecialchars($goGetItr27d);}  } ?></div>                        
</div></label>



<label for="r28">
<div class="DaysGone"  id="d28" style="<?php $pathr28="Pic/Calendar/".$Year."/".$Month."/28/DaysGoneBg.png";
$errorpathr28a="Text/Events/".$Year."/".$Month."/28/denied.txt";
$PreTurnMtoNumr28a=$Month;$TurnMtoNumr28a=date("m",strtotime($PreTurnMtoNumr28a));  
  $gotodater28a=($Year."-".$TurnMtoNumr28a."-28");$dayr28a = date('l',strtotime($gotodater28a));$pathAltr28a="Pic/Calendar/".$dayr28a."/DaysGoneBg.png"; 
if (file_exists($pathr28)){echo "background-image:url(".$pathr28.") ;" ;}else if (file_exists($pathAltr28a) && !file_exists($errorpathr28a)){echo "background-image:url(".$pathAltr28a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da28">28</div>

	<div class="Gold" id="dan28"><?php   $pathr28g="Text/Events/".$Year."/".$Month."/28/gold.txt"; if (file_exists($pathr28g)){$goGetItr28g=file_get_contents($pathr28g); echo htmlspecialchars($goGetItr28g);}else{$errorpathr28g="Text/Events/".$Year."/".$Month."/28/denied.txt";$PreTurnMtoNumr28g=$Month;$TurnMtoNumr28g=date("m",strtotime($PreTurnMtoNumr28g));  
  $gotodater28g=($Year."-".$TurnMtoNumr28g."-28");$dayr28g = date('l',strtotime($gotodater28g));$pathAltr28g="Text/Events/".$dayr28g."/gold.txt";if (file_exists($pathAltr28g) && !file_exists($errorpathr28g)){$goGetItr28g=file_get_contents($pathAltr28g); echo htmlspecialchars($goGetItr28g); } } ?></div>

  <div class="Silver" id="dani28"><?php  $pathr28s="Text/Events/".$Year."/".$Month."/28/silver.txt";  if (file_exists($pathr28s)){$goGetItr28s=file_get_contents($pathr28s); echo htmlspecialchars($goGetItr28s);}else{$errorpathr28s="Text/Events/".$Year."/".$Month."/28/denied.txt";$PreTurnMtoNumr28s=$Month;$TurnMtoNumr28s=date("m",strtotime($PreTurnMtoNumr28s));  
  $gotodater28s=($Year."-".$TurnMtoNumr28s."-28");$dayr28s = date('l',strtotime($gotodater28s));$pathAltr28s="Text/Events/".$dayr28s."/silver.txt";if (file_exists($pathAltr28s) && !file_exists($errorpathr28s)){$goGetItr28s=file_get_contents($pathAltr28s); echo htmlspecialchars($goGetItr28s);}  } ?></div>

  <div class="Bronze" id="danie28"><?php  $pathr28b="Text/Events/".$Year."/".$Month."/28/bronze.txt";  if (file_exists($pathr28b)){$goGetItr28b=file_get_contents($pathr28b); echo htmlspecialchars($goGetItr28b);}else{$errorpathr28b="Text/Events/".$Year."/".$Month."/28/denied.txt";$PreTurnMtoNumr28b=$Month;$TurnMtoNumr28b=date("m",strtotime($PreTurnMtoNumr28b));  
  $gotodater28b=($Year."-".$TurnMtoNumr28b."-28");$dayr28b = date('l',strtotime($gotodater28b));$pathAltr28b="Text/Events/".$dayr28b."/bronze.txt";if (file_exists($pathAltr28b) && !file_exists($errorpathr28b)){$goGetItr28b=file_get_contents($pathAltr28b); echo htmlspecialchars($goGetItr28b);}  } ?></div> 

  <div class="Platinum" id="daniel28"><?php  $pathr28b="Text/Events/".$Year."/".$Month."/28/platinum.txt";  if (file_exists($pathr28b)){$goGetItr28b=file_get_contents($pathr28b); echo htmlspecialchars($goGetItr28b);}else{$errorpathr28b="Text/Events/".$Year."/".$Month."/28/denied.txt";$PreTurnMtoNumr28b=$Month;$TurnMtoNumr28b=date("m",strtotime($PreTurnMtoNumr28b));  
  $gotodater28b=($Year."-".$TurnMtoNumr28b."-28");$dayr28b = date('l',strtotime($gotodater28b));$pathAltr28b="Text/Events/".$dayr28b."/platinum.txt";if (file_exists($pathAltr28b) && !file_exists($errorpathr28b)){$goGetItr28b=file_get_contents($pathAltr28b); echo htmlspecialchars($goGetItr28b);}  } ?></div>

  <div class="Diamond" id="daniele28"><?php  $pathr28d="Text/Events/".$Year."/".$Month."/28/Diamond.txt";  if (file_exists($pathr28d)){$goGetItr28d=file_get_contents($pathr28d); echo htmlspecialchars($goGetItr28d);}else{$errorpathr28d="Text/Events/".$Year."/".$Month."/28/denied.txt";$PreTurnMtoNumr28d=$Month;$TurnMtoNumr28d=date("m",strtotime($PreTurnMtoNumr28d));  
  $gotodater28d=($Year."-".$TurnMtoNumr28d."-28");$dayr28d = date('l',strtotime($gotodater28d));$pathAltr28d="Text/Events/".$dayr28d."/diamond.txt";if (file_exists($pathAltr28d) && !file_exists($errorpathr28d)){$goGetItr28d=file_get_contents($pathAltr28d); echo htmlspecialchars($goGetItr28d);}  } ?></div>                        
</div></label>



<label for="r29">
<div class="DaysGone"  id="d29" style="<?php $pathr29="Pic/Calendar/".$Year."/".$Month."/29/DaysGoneBg.png";
$errorpathr29a="Text/Events/".$Year."/".$Month."/29/denied.txt";
$PreTurnMtoNumr29a=$Month;$TurnMtoNumr29a=date("m",strtotime($PreTurnMtoNumr29a));  
  $gotodater29a=($Year."-".$TurnMtoNumr29a."-29");$dayr29a = date('l',strtotime($gotodater29a));$pathAltr29a="Pic/Calendar/".$dayr29a."/DaysGoneBg.png"; 
if (file_exists($pathr29)){echo "background-image:url(".$pathr29.") ;" ;}else if (file_exists($pathAltr29a) && !file_exists($errorpathr29a)){echo "background-image:url(".$pathAltr29a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da29">29</div>

	<div class="Gold" id="dan29"><?php   $pathr29g="Text/Events/".$Year."/".$Month."/29/gold.txt"; if (file_exists($pathr29g)){$goGetItr29g=file_get_contents($pathr29g); echo htmlspecialchars($goGetItr29g);}else{$errorpathr29g="Text/Events/".$Year."/".$Month."/29/denied.txt";$PreTurnMtoNumr29g=$Month;$TurnMtoNumr29g=date("m",strtotime($PreTurnMtoNumr29g));  
  $gotodater29g=($Year."-".$TurnMtoNumr29g."-29");$dayr29g = date('l',strtotime($gotodater29g));$pathAltr29g="Text/Events/".$dayr29g."/gold.txt";if (file_exists($pathAltr29g) && !file_exists($errorpathr29g)){$goGetItr29g=file_get_contents($pathAltr29g); echo htmlspecialchars($goGetItr29g); } } ?></div>

  <div class="Silver" id="dani29"><?php  $pathr29s="Text/Events/".$Year."/".$Month."/29/silver.txt";  if (file_exists($pathr29s)){$goGetItr29s=file_get_contents($pathr29s); echo htmlspecialchars($goGetItr29s);}else{$errorpathr29s="Text/Events/".$Year."/".$Month."/29/denied.txt";$PreTurnMtoNumr29s=$Month;$TurnMtoNumr29s=date("m",strtotime($PreTurnMtoNumr29s));  
  $gotodater29s=($Year."-".$TurnMtoNumr29s."-29");$dayr29s = date('l',strtotime($gotodater29s));$pathAltr29s="Text/Events/".$dayr29s."/silver.txt";if (file_exists($pathAltr29s) && !file_exists($errorpathr29s)){$goGetItr29s=file_get_contents($pathAltr29s); echo htmlspecialchars($goGetItr29s);}  } ?></div>

  <div class="Bronze" id="danie29"><?php  $pathr29b="Text/Events/".$Year."/".$Month."/29/bronze.txt";  if (file_exists($pathr29b)){$goGetItr29b=file_get_contents($pathr29b); echo htmlspecialchars($goGetItr29b);}else{$errorpathr29b="Text/Events/".$Year."/".$Month."/29/denied.txt";$PreTurnMtoNumr29b=$Month;$TurnMtoNumr29b=date("m",strtotime($PreTurnMtoNumr29b));  
  $gotodater29b=($Year."-".$TurnMtoNumr29b."-29");$dayr29b = date('l',strtotime($gotodater29b));$pathAltr29b="Text/Events/".$dayr29b."/bronze.txt";if (file_exists($pathAltr29b) && !file_exists($errorpathr29b)){$goGetItr29b=file_get_contents($pathAltr29b); echo htmlspecialchars($goGetItr29b);}  } ?></div> 

  <div class="Platinum" id="daniel29"><?php  $pathr29b="Text/Events/".$Year."/".$Month."/29/platinum.txt";  if (file_exists($pathr29b)){$goGetItr29b=file_get_contents($pathr29b); echo htmlspecialchars($goGetItr29b);}else{$errorpathr29b="Text/Events/".$Year."/".$Month."/29/denied.txt";$PreTurnMtoNumr29b=$Month;$TurnMtoNumr29b=date("m",strtotime($PreTurnMtoNumr29b));  
  $gotodater29b=($Year."-".$TurnMtoNumr29b."-29");$dayr29b = date('l',strtotime($gotodater29b));$pathAltr29b="Text/Events/".$dayr29b."/platinum.txt";if (file_exists($pathAltr29b) && !file_exists($errorpathr29b)){$goGetItr29b=file_get_contents($pathAltr29b); echo htmlspecialchars($goGetItr29b);}  } ?></div>

  <div class="Diamond" id="daniele29"><?php  $pathr29d="Text/Events/".$Year."/".$Month."/29/Diamond.txt";  if (file_exists($pathr29d)){$goGetItr29d=file_get_contents($pathr29d); echo htmlspecialchars($goGetItr29d);}else{$errorpathr29d="Text/Events/".$Year."/".$Month."/29/denied.txt";$PreTurnMtoNumr29d=$Month;$TurnMtoNumr29d=date("m",strtotime($PreTurnMtoNumr29d));  
  $gotodater29d=($Year."-".$TurnMtoNumr29d."-29");$dayr29d = date('l',strtotime($gotodater29d));$pathAltr29d="Text/Events/".$dayr29d."/diamond.txt";if (file_exists($pathAltr29d) && !file_exists($errorpathr29d)){$goGetItr29d=file_get_contents($pathAltr29d); echo htmlspecialchars($goGetItr29d);}  } ?></div>                         
</div></label>



<label for="r30">
<div class="DaysGone"  id="d30" style="<?php $pathr30="Pic/Calendar/".$Year."/".$Month."/30/DaysGoneBg.png";
$errorpathr30a="Text/Events/".$Year."/".$Month."/30/denied.txt";
$PreTurnMtoNumr30a=$Month;$TurnMtoNumr30a=date("m",strtotime($PreTurnMtoNumr30a));  
  $gotodater30a=($Year."-".$TurnMtoNumr30a."-30");$dayr30a = date('l',strtotime($gotodater30a));$pathAltr30a="Pic/Calendar/".$dayr30a."/DaysGoneBg.png"; 
if (file_exists($pathr30)){echo "background-image:url(".$pathr30.") ;" ;}else if (file_exists($pathAltr30a) && !file_exists($errorpathr30a)){echo "background-image:url(".$pathAltr30a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da30">30</div>

	<div class="Gold" id="dan30"><?php   $pathr30g="Text/Events/".$Year."/".$Month."/30/gold.txt"; if (file_exists($pathr30g)){$goGetItr30g=file_get_contents($pathr30g); echo htmlspecialchars($goGetItr30g);}else{$errorpathr30g="Text/Events/".$Year."/".$Month."/30/denied.txt";$PreTurnMtoNumr30g=$Month;$TurnMtoNumr30g=date("m",strtotime($PreTurnMtoNumr30g));  
  $gotodater30g=($Year."-".$TurnMtoNumr30g."-30");$dayr30g = date('l',strtotime($gotodater30g));$pathAltr30g="Text/Events/".$dayr30g."/gold.txt";if (file_exists($pathAltr30g) && !file_exists($errorpathr30g)){$goGetItr30g=file_get_contents($pathAltr30g); echo htmlspecialchars($goGetItr30g); } } ?></div>

  <div class="Silver" id="dani30"><?php  $pathr30s="Text/Events/".$Year."/".$Month."/30/silver.txt";  if (file_exists($pathr30s)){$goGetItr30s=file_get_contents($pathr30s); echo htmlspecialchars($goGetItr30s);}else{$errorpathr30s="Text/Events/".$Year."/".$Month."/30/denied.txt";$PreTurnMtoNumr30s=$Month;$TurnMtoNumr30s=date("m",strtotime($PreTurnMtoNumr30s));  
  $gotodater30s=($Year."-".$TurnMtoNumr30s."-30");$dayr30s = date('l',strtotime($gotodater30s));$pathAltr30s="Text/Events/".$dayr30s."/silver.txt";if (file_exists($pathAltr30s) && !file_exists($errorpathr30s)){$goGetItr30s=file_get_contents($pathAltr30s); echo htmlspecialchars($goGetItr30s);}  } ?></div>

  <div class="Bronze" id="danie30"><?php  $pathr30b="Text/Events/".$Year."/".$Month."/30/bronze.txt";  if (file_exists($pathr30b)){$goGetItr30b=file_get_contents($pathr30b); echo htmlspecialchars($goGetItr30b);}else{$errorpathr30b="Text/Events/".$Year."/".$Month."/30/denied.txt";$PreTurnMtoNumr30b=$Month;$TurnMtoNumr30b=date("m",strtotime($PreTurnMtoNumr30b));  
  $gotodater30b=($Year."-".$TurnMtoNumr30b."-30");$dayr30b = date('l',strtotime($gotodater30b));$pathAltr30b="Text/Events/".$dayr30b."/bronze.txt";if (file_exists($pathAltr30b) && !file_exists($errorpathr30b)){$goGetItr30b=file_get_contents($pathAltr30b); echo htmlspecialchars($goGetItr30b);}  } ?></div> 

  <div class="Platinum" id="daniel30"><?php  $pathr30b="Text/Events/".$Year."/".$Month."/30/platinum.txt";  if (file_exists($pathr30b)){$goGetItr30b=file_get_contents($pathr30b); echo htmlspecialchars($goGetItr30b);}else{$errorpathr30b="Text/Events/".$Year."/".$Month."/30/denied.txt";$PreTurnMtoNumr30b=$Month;$TurnMtoNumr30b=date("m",strtotime($PreTurnMtoNumr30b));  
  $gotodater30b=($Year."-".$TurnMtoNumr30b."-30");$dayr30b = date('l',strtotime($gotodater30b));$pathAltr30b="Text/Events/".$dayr30b."/platinum.txt";if (file_exists($pathAltr30b) && !file_exists($errorpathr30b)){$goGetItr30b=file_get_contents($pathAltr30b); echo htmlspecialchars($goGetItr30b);}  } ?></div>

  <div class="Diamond" id="daniele30"><?php  $pathr30d="Text/Events/".$Year."/".$Month."/30/Diamond.txt";  if (file_exists($pathr30d)){$goGetItr30d=file_get_contents($pathr30d); echo htmlspecialchars($goGetItr30d);}else{$errorpathr30d="Text/Events/".$Year."/".$Month."/30/denied.txt";$PreTurnMtoNumr30d=$Month;$TurnMtoNumr30d=date("m",strtotime($PreTurnMtoNumr30d));  
  $gotodater30d=($Year."-".$TurnMtoNumr30d."-30");$dayr30d = date('l',strtotime($gotodater30d));$pathAltr30d="Text/Events/".$dayr30d."/diamond.txt";if (file_exists($pathAltr30d) && !file_exists($errorpathr30d)){$goGetItr30d=file_get_contents($pathAltr30d); echo htmlspecialchars($goGetItr30d);}  } ?></div>                          
</div></label>



<label for="r31">
<div class="DaysGone"  id="d31" style="<?php $pathr31="Pic/Calendar/".$Year."/".$Month."/31/DaysGoneBg.png";
$errorpathr31a="Text/Events/".$Year."/".$Month."/31/denied.txt";
$PreTurnMtoNumr31a=$Month;$TurnMtoNumr31a=date("m",strtotime($PreTurnMtoNumr31a));  
  $gotodater31a=($Year."-".$TurnMtoNumr31a."-31");$dayr31a = date('l',strtotime($gotodater31a));$pathAltr31a="Pic/Calendar/".$dayr31a."/DaysGoneBg.png"; 
if (file_exists($pathr31)){echo "background-image:url(".$pathr31.") ;" ;}else if (file_exists($pathAltr31a) && !file_exists($errorpathr31a)){echo "background-image:url(".$pathAltr31a.") ;";}else{echo '';};  ?>     ">     
	<div class="DayTitle"  id="da31">31</div>

	<div class="Gold" id="dan31"><?php   $pathr31g="Text/Events/".$Year."/".$Month."/31/gold.txt"; if (file_exists($pathr31g)){$goGetItr31g=file_get_contents($pathr31g); echo htmlspecialchars($goGetItr31g);}else{$errorpathr31g="Text/Events/".$Year."/".$Month."/31/denied.txt";$PreTurnMtoNumr31g=$Month;$TurnMtoNumr31g=date("m",strtotime($PreTurnMtoNumr31g));  
  $gotodater31g=($Year."-".$TurnMtoNumr31g."-31");$dayr31g = date('l',strtotime($gotodater31g));$pathAltr31g="Text/Events/".$dayr31g."/gold.txt";if (file_exists($pathAltr31g) && !file_exists($errorpathr31g)){$goGetItr31g=file_get_contents($pathAltr31g); echo htmlspecialchars($goGetItr31g); } } ?></div>

  <div class="Silver" id="dani31"><?php  $pathr31s="Text/Events/".$Year."/".$Month."/31/silver.txt";  if (file_exists($pathr31s)){$goGetItr31s=file_get_contents($pathr31s); echo htmlspecialchars($goGetItr31s);}else{$errorpathr31s="Text/Events/".$Year."/".$Month."/31/denied.txt";$PreTurnMtoNumr31s=$Month;$TurnMtoNumr31s=date("m",strtotime($PreTurnMtoNumr31s));  
  $gotodater31s=($Year."-".$TurnMtoNumr31s."-31");$dayr31s = date('l',strtotime($gotodater31s));$pathAltr31s="Text/Events/".$dayr31s."/silver.txt";if (file_exists($pathAltr31s) && !file_exists($errorpathr31s)){$goGetItr31s=file_get_contents($pathAltr31s); echo htmlspecialchars($goGetItr31s);}  } ?></div>

  <div class="Bronze" id="danie31"><?php  $pathr31b="Text/Events/".$Year."/".$Month."/31/bronze.txt";  if (file_exists($pathr31b)){$goGetItr31b=file_get_contents($pathr31b); echo htmlspecialchars($goGetItr31b);}else{$errorpathr31b="Text/Events/".$Year."/".$Month."/31/denied.txt";$PreTurnMtoNumr31b=$Month;$TurnMtoNumr31b=date("m",strtotime($PreTurnMtoNumr31b));  
  $gotodater31b=($Year."-".$TurnMtoNumr31b."-31");$dayr31b = date('l',strtotime($gotodater31b));$pathAltr31b="Text/Events/".$dayr31b."/bronze.txt";if (file_exists($pathAltr31b) && !file_exists($errorpathr31b)){$goGetItr31b=file_get_contents($pathAltr31b); echo htmlspecialchars($goGetItr31b);}  } ?></div> 

  <div class="Platinum" id="daniel31"><?php  $pathr31b="Text/Events/".$Year."/".$Month."/31/platinum.txt";  if (file_exists($pathr31b)){$goGetItr31b=file_get_contents($pathr31b); echo htmlspecialchars($goGetItr31b);}else{$errorpathr31b="Text/Events/".$Year."/".$Month."/31/denied.txt";$PreTurnMtoNumr31b=$Month;$TurnMtoNumr31b=date("m",strtotime($PreTurnMtoNumr31b));  
  $gotodater31b=($Year."-".$TurnMtoNumr31b."-31");$dayr31b = date('l',strtotime($gotodater31b));$pathAltr31b="Text/Events/".$dayr31b."/platinum.txt";if (file_exists($pathAltr31b) && !file_exists($errorpathr31b)){$goGetItr31b=file_get_contents($pathAltr31b); echo htmlspecialchars($goGetItr31b);}  } ?></div>

  <div class="Diamond" id="daniele31"><?php  $pathr31d="Text/Events/".$Year."/".$Month."/31/Diamond.txt";  if (file_exists($pathr31d)){$goGetItr31d=file_get_contents($pathr31d); echo htmlspecialchars($goGetItr31d);}else{$errorpathr31d="Text/Events/".$Year."/".$Month."/31/denied.txt";$PreTurnMtoNumr31d=$Month;$TurnMtoNumr31d=date("m",strtotime($PreTurnMtoNumr31d));  
  $gotodater31d=($Year."-".$TurnMtoNumr31d."-31");$dayr31d = date('l',strtotime($gotodater31d));$pathAltr31d="Text/Events/".$dayr31d."/diamond.txt";if (file_exists($pathAltr31d) && !file_exists($errorpathr31d)){$goGetItr31d=file_get_contents($pathAltr31d); echo htmlspecialchars($goGetItr31d);}  } ?></div>                          
</div></label>



</div><!--MarginTop-->


    <div id="UpcomingMonth">


<label for="v1">
<div class="DaysGone" id="n1" style="<?php  $pathv1="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/1/DaysGoneBg.png";
$errorpathv1a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";
$PreTurnMtoNumv1a=$NextMonth;$TurnMtoNumv1a=date("m",strtotime($PreTurnMtoNumv1a));  
  $gotodatev1a=($YearOfNextMonth."-".$TurnMtoNumv1a."-1");$dayv1a = date('l',strtotime($gotodatev1a));$pathAltv1a="Pic/Calendar/".$dayv1a."/DaysGoneBg.png"; 
if (file_exists($pathv1)){echo "background-image:url(".$pathv1.") ;" ;}else if (file_exists($pathAltv1a) && !file_exists($errorpathv1a)){echo "background-image:url(".$pathAltv1a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na1">1</div>
	<div class="Gold" id="nan1"><?php   $pathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/gold.txt"; if (file_exists($pathv1g)){$goGetItv1g=file_get_contents($pathv1g); echo htmlspecialchars($goGetItv1g);}else{$errorpathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";$PreTurnMtoNumv1g=$NextMonth;$TurnMtoNumv1g=date("m",strtotime($PreTurnMtoNumv1g)); $gotodatev1g=($YearOfNextMonth."-".$TurnMtoNumv1g."-1");$dayv1g = date('l',strtotime($gotodatev1g));$pathAltv1g="Text/Events/".$dayv1g."/gold.txt";if (file_exists($pathAltv1g) && !file_exists($errorpathv1g)){$goGetItv1g=file_get_contents($pathAltv1g); echo htmlspecialchars($goGetItv1g); } } ?></div>
  <div class="Silver" id="nani1"><?php   $pathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/silver.txt"; if (file_exists($pathv1g)){$goGetItv1g=file_get_contents($pathv1g); echo htmlspecialchars($goGetItv1g);}else{$errorpathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";$PreTurnMtoNumv1g=$NextMonth;$TurnMtoNumv1g=date("m",strtotime($PreTurnMtoNumv1g));$gotodatev1g=($YearOfNextMonth."-".$TurnMtoNumv1g."-1");$dayv1g = date('l',strtotime($gotodatev1g));$pathAltv1g="Text/Events/".$dayv1g."/silver.txt";if (file_exists($pathAltv1g) && !file_exists($errorpathv1g)){$goGetItv1g=file_get_contents($pathAltv1g); echo htmlspecialchars($goGetItv1g); } } ?></div>
  <div class="Bronze" id="nanie1"><?php   $pathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/bronze.txt"; if (file_exists($pathv1g)){$goGetItv1g=file_get_contents($pathv1g); echo htmlspecialchars($goGetItv1g);}else{$errorpathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";$PreTurnMtoNumv1g=$NextMonth;$TurnMtoNumv1g=date("m",strtotime($PreTurnMtoNumv1g));$gotodatev1g=($YearOfNextMonth."-".$TurnMtoNumv1g."-1");$dayv1g = date('l',strtotime($gotodatev1g));$pathAltv1g="Text/Events/".$dayv1g."/bronze.txt";if (file_exists($pathAltv1g) && !file_exists($errorpathv1g)){$goGetItv1g=file_get_contents($pathAltv1g); echo htmlspecialchars($goGetItv1g); } } ?></div>
<div class="Platinum" id="naniel1"><?php   $pathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/platinum.txt"; if (file_exists($pathv1g)){$goGetItv1g=file_get_contents($pathv1g); echo htmlspecialchars($goGetItv1g);}else{$errorpathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";$PreTurnMtoNumv1g=$NextMonth;$TurnMtoNumv1g=date("m",strtotime($PreTurnMtoNumv1g));$gotodatev1g=($YearOfNextMonth."-".$TurnMtoNumv1g."-1");$dayv1g = date('l',strtotime($gotodatev1g));$pathAltv1g="Text/Events/".$dayv1g."/platinum.txt";if (file_exists($pathAltv1g) && !file_exists($errorpathv1g)){$goGetItv1g=file_get_contents($pathAltv1g); echo htmlspecialchars($goGetItv1g); } } ?></div>
<div class="Diamond" id="naniele1"><?php   $pathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/diamond.txt"; if (file_exists($pathv1g)){$goGetItv1g=file_get_contents($pathv1g); echo htmlspecialchars($goGetItv1g);}else{$errorpathv1g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/denied.txt";$PreTurnMtoNumv1g=$NextMonth;$TurnMtoNumv1g=date("m",strtotime($PreTurnMtoNumv1g));$gotodatev1g=($YearOfNextMonth."-".$TurnMtoNumv1g."-1");$dayv1g = date('l',strtotime($gotodatev1g));$pathAltv1g="Text/Events/".$dayv1g."/diamond.txt";if (file_exists($pathAltv1g) && !file_exists($errorpathv1g)){$goGetItv1g=file_get_contents($pathAltv1g); echo htmlspecialchars($goGetItv1g); } } ?></div>
</div></label>


<label for="v2">
<div class="DaysGone" id="n2" style="<?php  $pathv2="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/2/DaysGoneBg.png";
$errorpathv2a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";
$PreTurnMtoNumv2a=$NextMonth;$TurnMtoNumv2a=date("m",strtotime($PreTurnMtoNumv2a));  
  $gotodatev2a=($YearOfNextMonth."-".$TurnMtoNumv2a."-2");$dayv2a = date('l',strtotime($gotodatev2a));$pathAltv2a="Pic/Calendar/".$dayv2a."/DaysGoneBg.png"; 
if (file_exists($pathv2)){echo "background-image:url(".$pathv2.") ;" ;}else if (file_exists($pathAltv2a) && !file_exists($errorpathv2a)){echo "background-image:url(".$pathAltv2a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na2">2</div>
	<div class="Gold" id="nan2"><?php   $pathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/gold.txt"; if (file_exists($pathv2g)){$goGetItv2g=file_get_contents($pathv2g); echo htmlspecialchars($goGetItv2g);}else{$errorpathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";$PreTurnMtoNumv2g=$NextMonth;$TurnMtoNumv2g=date("m",strtotime($PreTurnMtoNumv2g)); $gotodatev2g=($YearOfNextMonth."-".$TurnMtoNumv2g."-2");$dayv2g = date('l',strtotime($gotodatev2g));$pathAltv2g="Text/Events/".$dayv2g."/gold.txt";if (file_exists($pathAltv2g) && !file_exists($errorpathv2g)){$goGetItv2g=file_get_contents($pathAltv2g); echo htmlspecialchars($goGetItv2g); } } ?></div>
  <div class="Silver" id="nani2"><?php   $pathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/silver.txt"; if (file_exists($pathv2g)){$goGetItv2g=file_get_contents($pathv2g); echo htmlspecialchars($goGetItv2g);}else{$errorpathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";$PreTurnMtoNumv2g=$NextMonth;$TurnMtoNumv2g=date("m",strtotime($PreTurnMtoNumv2g));$gotodatev2g=($YearOfNextMonth."-".$TurnMtoNumv2g."-2");$dayv2g = date('l',strtotime($gotodatev2g));$pathAltv2g="Text/Events/".$dayv2g."/silver.txt";if (file_exists($pathAltv2g) && !file_exists($errorpathv2g)){$goGetItv2g=file_get_contents($pathAltv2g); echo htmlspecialchars($goGetItv2g); } } ?></div>
  <div class="Bronze" id="nanie2"><?php   $pathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/bronze.txt"; if (file_exists($pathv2g)){$goGetItv2g=file_get_contents($pathv2g); echo htmlspecialchars($goGetItv2g);}else{$errorpathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";$PreTurnMtoNumv2g=$NextMonth;$TurnMtoNumv2g=date("m",strtotime($PreTurnMtoNumv2g));$gotodatev2g=($YearOfNextMonth."-".$TurnMtoNumv2g."-2");$dayv2g = date('l',strtotime($gotodatev2g));$pathAltv2g="Text/Events/".$dayv2g."/bronze.txt";if (file_exists($pathAltv2g) && !file_exists($errorpathv2g)){$goGetItv2g=file_get_contents($pathAltv2g); echo htmlspecialchars($goGetItv2g); } } ?></div>
<div class="Platinum" id="naniel2"><?php   $pathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/platinum.txt"; if (file_exists($pathv2g)){$goGetItv2g=file_get_contents($pathv2g); echo htmlspecialchars($goGetItv2g);}else{$errorpathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";$PreTurnMtoNumv2g=$NextMonth;$TurnMtoNumv2g=date("m",strtotime($PreTurnMtoNumv2g));$gotodatev2g=($YearOfNextMonth."-".$TurnMtoNumv2g."-2");$dayv2g = date('l',strtotime($gotodatev2g));$pathAltv2g="Text/Events/".$dayv2g."/platinum.txt";if (file_exists($pathAltv2g) && !file_exists($errorpathv2g)){$goGetItv2g=file_get_contents($pathAltv2g); echo htmlspecialchars($goGetItv2g); } } ?></div>
<div class="Diamond" id="naniele2"><?php   $pathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/diamond.txt"; if (file_exists($pathv2g)){$goGetItv2g=file_get_contents($pathv2g); echo htmlspecialchars($goGetItv2g);}else{$errorpathv2g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/denied.txt";$PreTurnMtoNumv2g=$NextMonth;$TurnMtoNumv2g=date("m",strtotime($PreTurnMtoNumv2g));$gotodatev2g=($YearOfNextMonth."-".$TurnMtoNumv2g."-2");$dayv2g = date('l',strtotime($gotodatev2g));$pathAltv2g="Text/Events/".$dayv2g."/diamond.txt";if (file_exists($pathAltv2g) && !file_exists($errorpathv2g)){$goGetItv2g=file_get_contents($pathAltv2g); echo htmlspecialchars($goGetItv2g); } } ?></div>                     
</div></label>


<label for="v3">
<div class="DaysGone" id="n3" style="<?php  $pathv3="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/3/DaysGoneBg.png";
$errorpathv3a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";
$PreTurnMtoNumv3a=$NextMonth;$TurnMtoNumv3a=date("m",strtotime($PreTurnMtoNumv3a));  
  $gotodatev3a=($YearOfNextMonth."-".$TurnMtoNumv3a."-3");$dayv3a = date('l',strtotime($gotodatev3a));$pathAltv3a="Pic/Calendar/".$dayv3a."/DaysGoneBg.png"; 
if (file_exists($pathv3)){echo "background-image:url(".$pathv3.") ;" ;}else if (file_exists($pathAltv3a) && !file_exists($errorpathv3a)){echo "background-image:url(".$pathAltv3a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na3">3</div>
	<div class="Gold" id="nan3"><?php   $pathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/gold.txt"; if (file_exists($pathv3g)){$goGetItv3g=file_get_contents($pathv3g); echo htmlspecialchars($goGetItv3g);}else{$errorpathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";$PreTurnMtoNumv3g=$NextMonth;$TurnMtoNumv3g=date("m",strtotime($PreTurnMtoNumv3g)); $gotodatev3g=($YearOfNextMonth."-".$TurnMtoNumv3g."-3");$dayv3g = date('l',strtotime($gotodatev3g));$pathAltv3g="Text/Events/".$dayv3g."/gold.txt";if (file_exists($pathAltv3g) && !file_exists($errorpathv3g)){$goGetItv3g=file_get_contents($pathAltv3g); echo htmlspecialchars($goGetItv3g); } } ?></div>
  <div class="Silver" id="nani3"><?php   $pathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/silver.txt"; if (file_exists($pathv3g)){$goGetItv3g=file_get_contents($pathv3g); echo htmlspecialchars($goGetItv3g);}else{$errorpathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";$PreTurnMtoNumv3g=$NextMonth;$TurnMtoNumv3g=date("m",strtotime($PreTurnMtoNumv3g));$gotodatev3g=($YearOfNextMonth."-".$TurnMtoNumv3g."-3");$dayv3g = date('l',strtotime($gotodatev3g));$pathAltv3g="Text/Events/".$dayv3g."/silver.txt";if (file_exists($pathAltv3g) && !file_exists($errorpathv3g)){$goGetItv3g=file_get_contents($pathAltv3g); echo htmlspecialchars($goGetItv3g); } } ?></div>
  <div class="Bronze" id="nanie3"><?php   $pathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/bronze.txt"; if (file_exists($pathv3g)){$goGetItv3g=file_get_contents($pathv3g); echo htmlspecialchars($goGetItv3g);}else{$errorpathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";$PreTurnMtoNumv3g=$NextMonth;$TurnMtoNumv3g=date("m",strtotime($PreTurnMtoNumv3g));$gotodatev3g=($YearOfNextMonth."-".$TurnMtoNumv3g."-3");$dayv3g = date('l',strtotime($gotodatev3g));$pathAltv3g="Text/Events/".$dayv3g."/bronze.txt";if (file_exists($pathAltv3g) && !file_exists($errorpathv3g)){$goGetItv3g=file_get_contents($pathAltv3g); echo htmlspecialchars($goGetItv3g); } } ?></div>
<div class="Platinum" id="naniel3"><?php   $pathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/platinum.txt"; if (file_exists($pathv3g)){$goGetItv3g=file_get_contents($pathv3g); echo htmlspecialchars($goGetItv3g);}else{$errorpathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";$PreTurnMtoNumv3g=$NextMonth;$TurnMtoNumv3g=date("m",strtotime($PreTurnMtoNumv3g));$gotodatev3g=($YearOfNextMonth."-".$TurnMtoNumv3g."-3");$dayv3g = date('l',strtotime($gotodatev3g));$pathAltv3g="Text/Events/".$dayv3g."/platinum.txt";if (file_exists($pathAltv3g) && !file_exists($errorpathv3g)){$goGetItv3g=file_get_contents($pathAltv3g); echo htmlspecialchars($goGetItv3g); } } ?></div>
<div class="Diamond" id="naniele3"><?php   $pathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/diamond.txt"; if (file_exists($pathv3g)){$goGetItv3g=file_get_contents($pathv3g); echo htmlspecialchars($goGetItv3g);}else{$errorpathv3g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/denied.txt";$PreTurnMtoNumv3g=$NextMonth;$TurnMtoNumv3g=date("m",strtotime($PreTurnMtoNumv3g));$gotodatev3g=($YearOfNextMonth."-".$TurnMtoNumv3g."-3");$dayv3g = date('l',strtotime($gotodatev3g));$pathAltv3g="Text/Events/".$dayv3g."/diamond.txt";if (file_exists($pathAltv3g) && !file_exists($errorpathv3g)){$goGetItv3g=file_get_contents($pathAltv3g); echo htmlspecialchars($goGetItv3g); } } ?></div>                    
</div></label>


<label for="v4">
<div class="DaysGone" id="n4" style="<?php  $pathv4="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/4/DaysGoneBg.png";
$errorpathv4a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";
$PreTurnMtoNumv4a=$NextMonth;$TurnMtoNumv4a=date("m",strtotime($PreTurnMtoNumv4a));  
  $gotodatev4a=($YearOfNextMonth."-".$TurnMtoNumv4a."-4");$dayv4a = date('l',strtotime($gotodatev4a));$pathAltv4a="Pic/Calendar/".$dayv4a."/DaysGoneBg.png"; 
if (file_exists($pathv4)){echo "background-image:url(".$pathv4.") ;" ;}else if (file_exists($pathAltv4a) && !file_exists($errorpathv4a)){echo "background-image:url(".$pathAltv4a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na4">4</div>
	<div class="Gold" id="nan4"><?php   $pathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/gold.txt"; if (file_exists($pathv4g)){$goGetItv4g=file_get_contents($pathv4g); echo htmlspecialchars($goGetItv4g);}else{$errorpathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";$PreTurnMtoNumv4g=$NextMonth;$TurnMtoNumv4g=date("m",strtotime($PreTurnMtoNumv4g)); $gotodatev4g=($YearOfNextMonth."-".$TurnMtoNumv4g."-4");$dayv4g = date('l',strtotime($gotodatev4g));$pathAltv4g="Text/Events/".$dayv4g."/gold.txt";if (file_exists($pathAltv4g) && !file_exists($errorpathv4g)){$goGetItv4g=file_get_contents($pathAltv4g); echo htmlspecialchars($goGetItv4g); } } ?></div>
  <div class="Silver" id="nani4"><?php   $pathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/silver.txt"; if (file_exists($pathv4g)){$goGetItv4g=file_get_contents($pathv4g); echo htmlspecialchars($goGetItv4g);}else{$errorpathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";$PreTurnMtoNumv4g=$NextMonth;$TurnMtoNumv4g=date("m",strtotime($PreTurnMtoNumv4g));$gotodatev4g=($YearOfNextMonth."-".$TurnMtoNumv4g."-4");$dayv4g = date('l',strtotime($gotodatev4g));$pathAltv4g="Text/Events/".$dayv4g."/silver.txt";if (file_exists($pathAltv4g) && !file_exists($errorpathv4g)){$goGetItv4g=file_get_contents($pathAltv4g); echo htmlspecialchars($goGetItv4g); } } ?></div>
  <div class="Bronze" id="nanie4"><?php   $pathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/bronze.txt"; if (file_exists($pathv4g)){$goGetItv4g=file_get_contents($pathv4g); echo htmlspecialchars($goGetItv4g);}else{$errorpathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";$PreTurnMtoNumv4g=$NextMonth;$TurnMtoNumv4g=date("m",strtotime($PreTurnMtoNumv4g));$gotodatev4g=($YearOfNextMonth."-".$TurnMtoNumv4g."-4");$dayv4g = date('l',strtotime($gotodatev4g));$pathAltv4g="Text/Events/".$dayv4g."/bronze.txt";if (file_exists($pathAltv4g) && !file_exists($errorpathv4g)){$goGetItv4g=file_get_contents($pathAltv4g); echo htmlspecialchars($goGetItv4g); } } ?></div>
<div class="Platinum" id="naniel4"><?php   $pathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/platinum.txt"; if (file_exists($pathv4g)){$goGetItv4g=file_get_contents($pathv4g); echo htmlspecialchars($goGetItv4g);}else{$errorpathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";$PreTurnMtoNumv4g=$NextMonth;$TurnMtoNumv4g=date("m",strtotime($PreTurnMtoNumv4g));$gotodatev4g=($YearOfNextMonth."-".$TurnMtoNumv4g."-4");$dayv4g = date('l',strtotime($gotodatev4g));$pathAltv4g="Text/Events/".$dayv4g."/platinum.txt";if (file_exists($pathAltv4g) && !file_exists($errorpathv4g)){$goGetItv4g=file_get_contents($pathAltv4g); echo htmlspecialchars($goGetItv4g); } } ?></div>
<div class="Diamond" id="naniele4"><?php   $pathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/diamond.txt"; if (file_exists($pathv4g)){$goGetItv4g=file_get_contents($pathv4g); echo htmlspecialchars($goGetItv4g);}else{$errorpathv4g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/denied.txt";$PreTurnMtoNumv4g=$NextMonth;$TurnMtoNumv4g=date("m",strtotime($PreTurnMtoNumv4g));$gotodatev4g=($YearOfNextMonth."-".$TurnMtoNumv4g."-4");$dayv4g = date('l',strtotime($gotodatev4g));$pathAltv4g="Text/Events/".$dayv4g."/diamond.txt";if (file_exists($pathAltv4g) && !file_exists($errorpathv4g)){$goGetItv4g=file_get_contents($pathAltv4g); echo htmlspecialchars($goGetItv4g); } } ?></div>                   
</div></label>


<label for="v5">
<div class="DaysGone" id="n5" style="<?php  $pathv5="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/5/DaysGoneBg.png";
$errorpathv5a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";
$PreTurnMtoNumv5a=$NextMonth;$TurnMtoNumv5a=date("m",strtotime($PreTurnMtoNumv5a));  
  $gotodatev5a=($YearOfNextMonth."-".$TurnMtoNumv5a."-5");$dayv5a = date('l',strtotime($gotodatev5a));$pathAltv5a="Pic/Calendar/".$dayv5a."/DaysGoneBg.png"; 
if (file_exists($pathv5)){echo "background-image:url(".$pathv5.") ;" ;}else if (file_exists($pathAltv5a) && !file_exists($errorpathv5a)){echo "background-image:url(".$pathAltv5a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na5">5</div>
	<div class="Gold" id="nan5"><?php   $pathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/gold.txt"; if (file_exists($pathv5g)){$goGetItv5g=file_get_contents($pathv5g); echo htmlspecialchars($goGetItv5g);}else{$errorpathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";$PreTurnMtoNumv5g=$NextMonth;$TurnMtoNumv5g=date("m",strtotime($PreTurnMtoNumv5g)); $gotodatev5g=($YearOfNextMonth."-".$TurnMtoNumv5g."-5");$dayv5g = date('l',strtotime($gotodatev5g));$pathAltv5g="Text/Events/".$dayv5g."/gold.txt";if (file_exists($pathAltv5g) && !file_exists($errorpathv5g)){$goGetItv5g=file_get_contents($pathAltv5g); echo htmlspecialchars($goGetItv5g); } } ?></div>
  <div class="Silver" id="nani5"><?php   $pathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/silver.txt"; if (file_exists($pathv5g)){$goGetItv5g=file_get_contents($pathv5g); echo htmlspecialchars($goGetItv5g);}else{$errorpathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";$PreTurnMtoNumv5g=$NextMonth;$TurnMtoNumv5g=date("m",strtotime($PreTurnMtoNumv5g));$gotodatev5g=($YearOfNextMonth."-".$TurnMtoNumv5g."-5");$dayv5g = date('l',strtotime($gotodatev5g));$pathAltv5g="Text/Events/".$dayv5g."/silver.txt";if (file_exists($pathAltv5g) && !file_exists($errorpathv5g)){$goGetItv5g=file_get_contents($pathAltv5g); echo htmlspecialchars($goGetItv5g); } } ?></div>
  <div class="Bronze" id="nanie5"><?php   $pathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/bronze.txt"; if (file_exists($pathv5g)){$goGetItv5g=file_get_contents($pathv5g); echo htmlspecialchars($goGetItv5g);}else{$errorpathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";$PreTurnMtoNumv5g=$NextMonth;$TurnMtoNumv5g=date("m",strtotime($PreTurnMtoNumv5g));$gotodatev5g=($YearOfNextMonth."-".$TurnMtoNumv5g."-5");$dayv5g = date('l',strtotime($gotodatev5g));$pathAltv5g="Text/Events/".$dayv5g."/bronze.txt";if (file_exists($pathAltv5g) && !file_exists($errorpathv5g)){$goGetItv5g=file_get_contents($pathAltv5g); echo htmlspecialchars($goGetItv5g); } } ?></div>
<div class="Platinum" id="naniel5"><?php   $pathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/platinum.txt"; if (file_exists($pathv5g)){$goGetItv5g=file_get_contents($pathv5g); echo htmlspecialchars($goGetItv5g);}else{$errorpathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";$PreTurnMtoNumv5g=$NextMonth;$TurnMtoNumv5g=date("m",strtotime($PreTurnMtoNumv5g));$gotodatev5g=($YearOfNextMonth."-".$TurnMtoNumv5g."-5");$dayv5g = date('l',strtotime($gotodatev5g));$pathAltv5g="Text/Events/".$dayv5g."/platinum.txt";if (file_exists($pathAltv5g) && !file_exists($errorpathv5g)){$goGetItv5g=file_get_contents($pathAltv5g); echo htmlspecialchars($goGetItv5g); } } ?></div>
<div class="Diamond" id="naniele5"><?php   $pathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/diamond.txt"; if (file_exists($pathv5g)){$goGetItv5g=file_get_contents($pathv5g); echo htmlspecialchars($goGetItv5g);}else{$errorpathv5g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/denied.txt";$PreTurnMtoNumv5g=$NextMonth;$TurnMtoNumv5g=date("m",strtotime($PreTurnMtoNumv5g));$gotodatev5g=($YearOfNextMonth."-".$TurnMtoNumv5g."-5");$dayv5g = date('l',strtotime($gotodatev5g));$pathAltv5g="Text/Events/".$dayv5g."/diamond.txt";if (file_exists($pathAltv5g) && !file_exists($errorpathv5g)){$goGetItv5g=file_get_contents($pathAltv5g); echo htmlspecialchars($goGetItv5g); } } ?></div>                      
</div></label>


<label for="v6">
<div class="DaysGone" id="n6" style="<?php  $pathv6="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/6/DaysGoneBg.png";
$errorpathv6a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";
$PreTurnMtoNumv6a=$NextMonth;$TurnMtoNumv6a=date("m",strtotime($PreTurnMtoNumv6a));  
  $gotodatev6a=($YearOfNextMonth."-".$TurnMtoNumv6a."-6");$dayv6a = date('l',strtotime($gotodatev6a));$pathAltv6a="Pic/Calendar/".$dayv6a."/DaysGoneBg.png"; 
if (file_exists($pathv6)){echo "background-image:url(".$pathv6.") ;" ;}else if (file_exists($pathAltv6a) && !file_exists($errorpathv6a)){echo "background-image:url(".$pathAltv6a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na6">6</div>
	<div class="Gold" id="nan6"><?php   $pathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/gold.txt"; if (file_exists($pathv6g)){$goGetItv6g=file_get_contents($pathv6g); echo htmlspecialchars($goGetItv6g);}else{$errorpathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";$PreTurnMtoNumv6g=$NextMonth;$TurnMtoNumv6g=date("m",strtotime($PreTurnMtoNumv6g)); $gotodatev6g=($YearOfNextMonth."-".$TurnMtoNumv6g."-6");$dayv6g = date('l',strtotime($gotodatev6g));$pathAltv6g="Text/Events/".$dayv6g."/gold.txt";if (file_exists($pathAltv6g) && !file_exists($errorpathv6g)){$goGetItv6g=file_get_contents($pathAltv6g); echo htmlspecialchars($goGetItv6g); } } ?></div>
  <div class="Silver" id="nani6"><?php   $pathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/silver.txt"; if (file_exists($pathv6g)){$goGetItv6g=file_get_contents($pathv6g); echo htmlspecialchars($goGetItv6g);}else{$errorpathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";$PreTurnMtoNumv6g=$NextMonth;$TurnMtoNumv6g=date("m",strtotime($PreTurnMtoNumv6g));$gotodatev6g=($YearOfNextMonth."-".$TurnMtoNumv6g."-6");$dayv6g = date('l',strtotime($gotodatev6g));$pathAltv6g="Text/Events/".$dayv6g."/silver.txt";if (file_exists($pathAltv6g) && !file_exists($errorpathv6g)){$goGetItv6g=file_get_contents($pathAltv6g); echo htmlspecialchars($goGetItv6g); } } ?></div>
  <div class="Bronze" id="nanie6"><?php   $pathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/bronze.txt"; if (file_exists($pathv6g)){$goGetItv6g=file_get_contents($pathv6g); echo htmlspecialchars($goGetItv6g);}else{$errorpathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";$PreTurnMtoNumv6g=$NextMonth;$TurnMtoNumv6g=date("m",strtotime($PreTurnMtoNumv6g));$gotodatev6g=($YearOfNextMonth."-".$TurnMtoNumv6g."-6");$dayv6g = date('l',strtotime($gotodatev6g));$pathAltv6g="Text/Events/".$dayv6g."/bronze.txt";if (file_exists($pathAltv6g) && !file_exists($errorpathv6g)){$goGetItv6g=file_get_contents($pathAltv6g); echo htmlspecialchars($goGetItv6g); } } ?></div>
<div class="Platinum" id="naniel6"><?php   $pathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/platinum.txt"; if (file_exists($pathv6g)){$goGetItv6g=file_get_contents($pathv6g); echo htmlspecialchars($goGetItv6g);}else{$errorpathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";$PreTurnMtoNumv6g=$NextMonth;$TurnMtoNumv6g=date("m",strtotime($PreTurnMtoNumv6g));$gotodatev6g=($YearOfNextMonth."-".$TurnMtoNumv6g."-6");$dayv6g = date('l',strtotime($gotodatev6g));$pathAltv6g="Text/Events/".$dayv6g."/platinum.txt";if (file_exists($pathAltv6g) && !file_exists($errorpathv6g)){$goGetItv6g=file_get_contents($pathAltv6g); echo htmlspecialchars($goGetItv6g); } } ?></div>
<div class="Diamond" id="naniele6"><?php   $pathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/diamond.txt"; if (file_exists($pathv6g)){$goGetItv6g=file_get_contents($pathv6g); echo htmlspecialchars($goGetItv6g);}else{$errorpathv6g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/denied.txt";$PreTurnMtoNumv6g=$NextMonth;$TurnMtoNumv6g=date("m",strtotime($PreTurnMtoNumv6g));$gotodatev6g=($YearOfNextMonth."-".$TurnMtoNumv6g."-6");$dayv6g = date('l',strtotime($gotodatev6g));$pathAltv6g="Text/Events/".$dayv6g."/diamond.txt";if (file_exists($pathAltv6g) && !file_exists($errorpathv6g)){$goGetItv6g=file_get_contents($pathAltv6g); echo htmlspecialchars($goGetItv6g); } } ?></div>

</div></label>


<label for="v7">
<div class="DaysGone" id="n7" style="<?php  $pathv7="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/7/DaysGoneBg.png";
$errorpathv7a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";
$PreTurnMtoNumv7a=$NextMonth;$TurnMtoNumv7a=date("m",strtotime($PreTurnMtoNumv7a));  
  $gotodatev7a=($YearOfNextMonth."-".$TurnMtoNumv7a."-7");$dayv7a = date('l',strtotime($gotodatev7a));$pathAltv7a="Pic/Calendar/".$dayv7a."/DaysGoneBg.png"; 
if (file_exists($pathv7)){echo "background-image:url(".$pathv7.") ;" ;}else if (file_exists($pathAltv7a) && !file_exists($errorpathv7a)){echo "background-image:url(".$pathAltv7a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na7">7</div>
	<div class="Gold" id="nan7"><?php   $pathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/gold.txt"; if (file_exists($pathv7g)){$goGetItv7g=file_get_contents($pathv7g); echo htmlspecialchars($goGetItv7g);}else{$errorpathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";$PreTurnMtoNumv7g=$NextMonth;$TurnMtoNumv7g=date("m",strtotime($PreTurnMtoNumv7g)); $gotodatev7g=($YearOfNextMonth."-".$TurnMtoNumv7g."-7");$dayv7g = date('l',strtotime($gotodatev7g));$pathAltv7g="Text/Events/".$dayv7g."/gold.txt";if (file_exists($pathAltv7g) && !file_exists($errorpathv7g)){$goGetItv7g=file_get_contents($pathAltv7g); echo htmlspecialchars($goGetItv7g); } } ?></div>
  <div class="Silver" id="nani7"><?php   $pathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/silver.txt"; if (file_exists($pathv7g)){$goGetItv7g=file_get_contents($pathv7g); echo htmlspecialchars($goGetItv7g);}else{$errorpathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";$PreTurnMtoNumv7g=$NextMonth;$TurnMtoNumv7g=date("m",strtotime($PreTurnMtoNumv7g));$gotodatev7g=($YearOfNextMonth."-".$TurnMtoNumv7g."-7");$dayv7g = date('l',strtotime($gotodatev7g));$pathAltv7g="Text/Events/".$dayv7g."/silver.txt";if (file_exists($pathAltv7g) && !file_exists($errorpathv7g)){$goGetItv7g=file_get_contents($pathAltv7g); echo htmlspecialchars($goGetItv7g); } } ?></div>
  <div class="Bronze" id="nanie7"><?php   $pathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/bronze.txt"; if (file_exists($pathv7g)){$goGetItv7g=file_get_contents($pathv7g); echo htmlspecialchars($goGetItv7g);}else{$errorpathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";$PreTurnMtoNumv7g=$NextMonth;$TurnMtoNumv7g=date("m",strtotime($PreTurnMtoNumv7g));$gotodatev7g=($YearOfNextMonth."-".$TurnMtoNumv7g."-7");$dayv7g = date('l',strtotime($gotodatev7g));$pathAltv7g="Text/Events/".$dayv7g."/bronze.txt";if (file_exists($pathAltv7g) && !file_exists($errorpathv7g)){$goGetItv7g=file_get_contents($pathAltv7g); echo htmlspecialchars($goGetItv7g); } } ?></div>
<div class="Platinum" id="naniel7"><?php   $pathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/platinum.txt"; if (file_exists($pathv7g)){$goGetItv7g=file_get_contents($pathv7g); echo htmlspecialchars($goGetItv7g);}else{$errorpathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";$PreTurnMtoNumv7g=$NextMonth;$TurnMtoNumv7g=date("m",strtotime($PreTurnMtoNumv7g));$gotodatev7g=($YearOfNextMonth."-".$TurnMtoNumv7g."-7");$dayv7g = date('l',strtotime($gotodatev7g));$pathAltv7g="Text/Events/".$dayv7g."/platinum.txt";if (file_exists($pathAltv7g) && !file_exists($errorpathv7g)){$goGetItv7g=file_get_contents($pathAltv7g); echo htmlspecialchars($goGetItv7g); } } ?></div>
<div class="Diamond" id="naniele7"><?php   $pathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/diamond.txt"; if (file_exists($pathv7g)){$goGetItv7g=file_get_contents($pathv7g); echo htmlspecialchars($goGetItv7g);}else{$errorpathv7g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/denied.txt";$PreTurnMtoNumv7g=$NextMonth;$TurnMtoNumv7g=date("m",strtotime($PreTurnMtoNumv7g));$gotodatev7g=($YearOfNextMonth."-".$TurnMtoNumv7g."-7");$dayv7g = date('l',strtotime($gotodatev7g));$pathAltv7g="Text/Events/".$dayv7g."/diamond.txt";if (file_exists($pathAltv7g) && !file_exists($errorpathv7g)){$goGetItv7g=file_get_contents($pathAltv7g); echo htmlspecialchars($goGetItv7g); } } ?></div>                      
</div></label>


<label for="v8">
<div class="DaysGone" id="n8" style="<?php  $pathv8="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/8/DaysGoneBg.png";
$errorpathv8a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";
$PreTurnMtoNumv8a=$NextMonth;$TurnMtoNumv8a=date("m",strtotime($PreTurnMtoNumv8a));  
  $gotodatev8a=($YearOfNextMonth."-".$TurnMtoNumv8a."-8");$dayv8a = date('l',strtotime($gotodatev8a));$pathAltv8a="Pic/Calendar/".$dayv8a."/DaysGoneBg.png"; 
if (file_exists($pathv8)){echo "background-image:url(".$pathv8.") ;" ;}else if (file_exists($pathAltv8a) && !file_exists($errorpathv8a)){echo "background-image:url(".$pathAltv8a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na8">8</div>
	<div class="Gold" id="nan8"><?php   $pathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/gold.txt"; if (file_exists($pathv8g)){$goGetItv8g=file_get_contents($pathv8g); echo htmlspecialchars($goGetItv8g);}else{$errorpathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";$PreTurnMtoNumv8g=$NextMonth;$TurnMtoNumv8g=date("m",strtotime($PreTurnMtoNumv8g)); $gotodatev8g=($YearOfNextMonth."-".$TurnMtoNumv8g."-8");$dayv8g = date('l',strtotime($gotodatev8g));$pathAltv8g="Text/Events/".$dayv8g."/gold.txt";if (file_exists($pathAltv8g) && !file_exists($errorpathv8g)){$goGetItv8g=file_get_contents($pathAltv8g); echo htmlspecialchars($goGetItv8g); } } ?></div>
  <div class="Silver" id="nani8"><?php   $pathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/silver.txt"; if (file_exists($pathv8g)){$goGetItv8g=file_get_contents($pathv8g); echo htmlspecialchars($goGetItv8g);}else{$errorpathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";$PreTurnMtoNumv8g=$NextMonth;$TurnMtoNumv8g=date("m",strtotime($PreTurnMtoNumv8g));$gotodatev8g=($YearOfNextMonth."-".$TurnMtoNumv8g."-8");$dayv8g = date('l',strtotime($gotodatev8g));$pathAltv8g="Text/Events/".$dayv8g."/silver.txt";if (file_exists($pathAltv8g) && !file_exists($errorpathv8g)){$goGetItv8g=file_get_contents($pathAltv8g); echo htmlspecialchars($goGetItv8g); } } ?></div>
  <div class="Bronze" id="nanie8"><?php   $pathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/bronze.txt"; if (file_exists($pathv8g)){$goGetItv8g=file_get_contents($pathv8g); echo htmlspecialchars($goGetItv8g);}else{$errorpathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";$PreTurnMtoNumv8g=$NextMonth;$TurnMtoNumv8g=date("m",strtotime($PreTurnMtoNumv8g));$gotodatev8g=($YearOfNextMonth."-".$TurnMtoNumv8g."-8");$dayv8g = date('l',strtotime($gotodatev8g));$pathAltv8g="Text/Events/".$dayv8g."/bronze.txt";if (file_exists($pathAltv8g) && !file_exists($errorpathv8g)){$goGetItv8g=file_get_contents($pathAltv8g); echo htmlspecialchars($goGetItv8g); } } ?></div>
<div class="Platinum" id="naniel8"><?php   $pathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/platinum.txt"; if (file_exists($pathv8g)){$goGetItv8g=file_get_contents($pathv8g); echo htmlspecialchars($goGetItv8g);}else{$errorpathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";$PreTurnMtoNumv8g=$NextMonth;$TurnMtoNumv8g=date("m",strtotime($PreTurnMtoNumv8g));$gotodatev8g=($YearOfNextMonth."-".$TurnMtoNumv8g."-8");$dayv8g = date('l',strtotime($gotodatev8g));$pathAltv8g="Text/Events/".$dayv8g."/platinum.txt";if (file_exists($pathAltv8g) && !file_exists($errorpathv8g)){$goGetItv8g=file_get_contents($pathAltv8g); echo htmlspecialchars($goGetItv8g); } } ?></div>
<div class="Diamond" id="naniele8"><?php   $pathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/diamond.txt"; if (file_exists($pathv8g)){$goGetItv8g=file_get_contents($pathv8g); echo htmlspecialchars($goGetItv8g);}else{$errorpathv8g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/8/denied.txt";$PreTurnMtoNumv8g=$NextMonth;$TurnMtoNumv8g=date("m",strtotime($PreTurnMtoNumv8g));$gotodatev8g=($YearOfNextMonth."-".$TurnMtoNumv8g."-8");$dayv8g = date('l',strtotime($gotodatev8g));$pathAltv8g="Text/Events/".$dayv8g."/diamond.txt";if (file_exists($pathAltv8g) && !file_exists($errorpathv8g)){$goGetItv8g=file_get_contents($pathAltv8g); echo htmlspecialchars($goGetItv8g); } } ?></div>                     
</div></label>


<label for="v9">
<div class="DaysGone" id="n9" style="<?php  $pathv9="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/9/DaysGoneBg.png";
$errorpathv9a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";
$PreTurnMtoNumv9a=$NextMonth;$TurnMtoNumv9a=date("m",strtotime($PreTurnMtoNumv9a));  
  $gotodatev9a=($YearOfNextMonth."-".$TurnMtoNumv9a."-9");$dayv9a = date('l',strtotime($gotodatev9a));$pathAltv9a="Pic/Calendar/".$dayv9a."/DaysGoneBg.png"; 
if (file_exists($pathv9)){echo "background-image:url(".$pathv9.") ;" ;}else if (file_exists($pathAltv9a) && !file_exists($errorpathv9a)){echo "background-image:url(".$pathAltv9a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na9">9</div>
	<div class="Gold" id="nan9"><?php   $pathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/gold.txt"; if (file_exists($pathv9g)){$goGetItv9g=file_get_contents($pathv9g); echo htmlspecialchars($goGetItv9g);}else{$errorpathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";$PreTurnMtoNumv9g=$NextMonth;$TurnMtoNumv9g=date("m",strtotime($PreTurnMtoNumv9g)); $gotodatev9g=($YearOfNextMonth."-".$TurnMtoNumv9g."-9");$dayv9g = date('l',strtotime($gotodatev9g));$pathAltv9g="Text/Events/".$dayv9g."/gold.txt";if (file_exists($pathAltv9g) && !file_exists($errorpathv9g)){$goGetItv9g=file_get_contents($pathAltv9g); echo htmlspecialchars($goGetItv9g); } } ?></div>
  <div class="Silver" id="nani9"><?php   $pathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/silver.txt"; if (file_exists($pathv9g)){$goGetItv9g=file_get_contents($pathv9g); echo htmlspecialchars($goGetItv9g);}else{$errorpathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";$PreTurnMtoNumv9g=$NextMonth;$TurnMtoNumv9g=date("m",strtotime($PreTurnMtoNumv9g));$gotodatev9g=($YearOfNextMonth."-".$TurnMtoNumv9g."-9");$dayv9g = date('l',strtotime($gotodatev9g));$pathAltv9g="Text/Events/".$dayv9g."/silver.txt";if (file_exists($pathAltv9g) && !file_exists($errorpathv9g)){$goGetItv9g=file_get_contents($pathAltv9g); echo htmlspecialchars($goGetItv9g); } } ?></div>
  <div class="Bronze" id="nanie9"><?php   $pathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/bronze.txt"; if (file_exists($pathv9g)){$goGetItv9g=file_get_contents($pathv9g); echo htmlspecialchars($goGetItv9g);}else{$errorpathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";$PreTurnMtoNumv9g=$NextMonth;$TurnMtoNumv9g=date("m",strtotime($PreTurnMtoNumv9g));$gotodatev9g=($YearOfNextMonth."-".$TurnMtoNumv9g."-9");$dayv9g = date('l',strtotime($gotodatev9g));$pathAltv9g="Text/Events/".$dayv9g."/bronze.txt";if (file_exists($pathAltv9g) && !file_exists($errorpathv9g)){$goGetItv9g=file_get_contents($pathAltv9g); echo htmlspecialchars($goGetItv9g); } } ?></div>
<div class="Platinum" id="naniel9"><?php   $pathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/platinum.txt"; if (file_exists($pathv9g)){$goGetItv9g=file_get_contents($pathv9g); echo htmlspecialchars($goGetItv9g);}else{$errorpathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";$PreTurnMtoNumv9g=$NextMonth;$TurnMtoNumv9g=date("m",strtotime($PreTurnMtoNumv9g));$gotodatev9g=($YearOfNextMonth."-".$TurnMtoNumv9g."-9");$dayv9g = date('l',strtotime($gotodatev9g));$pathAltv9g="Text/Events/".$dayv9g."/platinum.txt";if (file_exists($pathAltv9g) && !file_exists($errorpathv9g)){$goGetItv9g=file_get_contents($pathAltv9g); echo htmlspecialchars($goGetItv9g); } } ?></div>
<div class="Diamond" id="naniele9"><?php   $pathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/diamond.txt"; if (file_exists($pathv9g)){$goGetItv9g=file_get_contents($pathv9g); echo htmlspecialchars($goGetItv9g);}else{$errorpathv9g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/9/denied.txt";$PreTurnMtoNumv9g=$NextMonth;$TurnMtoNumv9g=date("m",strtotime($PreTurnMtoNumv9g));$gotodatev9g=($YearOfNextMonth."-".$TurnMtoNumv9g."-9");$dayv9g = date('l',strtotime($gotodatev9g));$pathAltv9g="Text/Events/".$dayv9g."/diamond.txt";if (file_exists($pathAltv9g) && !file_exists($errorpathv9g)){$goGetItv9g=file_get_contents($pathAltv9g); echo htmlspecialchars($goGetItv9g); } } ?></div>                     
</div></label>


<label for="v10">
<div class="DaysGone" id="n10" style="<?php  $pathv10="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/10/DaysGoneBg.png";
$errorpathv10a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";
$PreTurnMtoNumv10a=$NextMonth;$TurnMtoNumv10a=date("m",strtotime($PreTurnMtoNumv10a));  
  $gotodatev10a=($YearOfNextMonth."-".$TurnMtoNumv10a."-10");$dayv10a = date('l',strtotime($gotodatev10a));$pathAltv10a="Pic/Calendar/".$dayv10a."/DaysGoneBg.png"; 
if (file_exists($pathv10)){echo "background-image:url(".$pathv10.") ;" ;}else if (file_exists($pathAltv10a) && !file_exists($errorpathv10a)){echo "background-image:url(".$pathAltv10a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na10">10</div>
	<div class="Gold" id="nan10"><?php   $pathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/gold.txt"; if (file_exists($pathv10g)){$goGetItv10g=file_get_contents($pathv10g); echo htmlspecialchars($goGetItv10g);}else{$errorpathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";$PreTurnMtoNumv10g=$NextMonth;$TurnMtoNumv10g=date("m",strtotime($PreTurnMtoNumv10g)); $gotodatev10g=($YearOfNextMonth."-".$TurnMtoNumv10g."-10");$dayv10g = date('l',strtotime($gotodatev10g));$pathAltv10g="Text/Events/".$dayv10g."/gold.txt";if (file_exists($pathAltv10g) && !file_exists($errorpathv10g)){$goGetItv10g=file_get_contents($pathAltv10g); echo htmlspecialchars($goGetItv10g); } } ?></div>
  <div class="Silver" id="nani10"><?php   $pathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/silver.txt"; if (file_exists($pathv10g)){$goGetItv10g=file_get_contents($pathv10g); echo htmlspecialchars($goGetItv10g);}else{$errorpathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";$PreTurnMtoNumv10g=$NextMonth;$TurnMtoNumv10g=date("m",strtotime($PreTurnMtoNumv10g));$gotodatev10g=($YearOfNextMonth."-".$TurnMtoNumv10g."-10");$dayv10g = date('l',strtotime($gotodatev10g));$pathAltv10g="Text/Events/".$dayv10g."/silver.txt";if (file_exists($pathAltv10g) && !file_exists($errorpathv10g)){$goGetItv10g=file_get_contents($pathAltv10g); echo htmlspecialchars($goGetItv10g); } } ?></div>
  <div class="Bronze" id="nanie10"><?php   $pathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/bronze.txt"; if (file_exists($pathv10g)){$goGetItv10g=file_get_contents($pathv10g); echo htmlspecialchars($goGetItv10g);}else{$errorpathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";$PreTurnMtoNumv10g=$NextMonth;$TurnMtoNumv10g=date("m",strtotime($PreTurnMtoNumv10g));$gotodatev10g=($YearOfNextMonth."-".$TurnMtoNumv10g."-10");$dayv10g = date('l',strtotime($gotodatev10g));$pathAltv10g="Text/Events/".$dayv10g."/bronze.txt";if (file_exists($pathAltv10g) && !file_exists($errorpathv10g)){$goGetItv10g=file_get_contents($pathAltv10g); echo htmlspecialchars($goGetItv10g); } } ?></div>
<div class="Platinum" id="naniel10"><?php   $pathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/platinum.txt"; if (file_exists($pathv10g)){$goGetItv10g=file_get_contents($pathv10g); echo htmlspecialchars($goGetItv10g);}else{$errorpathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";$PreTurnMtoNumv10g=$NextMonth;$TurnMtoNumv10g=date("m",strtotime($PreTurnMtoNumv10g));$gotodatev10g=($YearOfNextMonth."-".$TurnMtoNumv10g."-10");$dayv10g = date('l',strtotime($gotodatev10g));$pathAltv10g="Text/Events/".$dayv10g."/platinum.txt";if (file_exists($pathAltv10g) && !file_exists($errorpathv10g)){$goGetItv10g=file_get_contents($pathAltv10g); echo htmlspecialchars($goGetItv10g); } } ?></div>
<div class="Diamond" id="naniele10"><?php   $pathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/diamond.txt"; if (file_exists($pathv10g)){$goGetItv10g=file_get_contents($pathv10g); echo htmlspecialchars($goGetItv10g);}else{$errorpathv10g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10/denied.txt";$PreTurnMtoNumv10g=$NextMonth;$TurnMtoNumv10g=date("m",strtotime($PreTurnMtoNumv10g));$gotodatev10g=($YearOfNextMonth."-".$TurnMtoNumv10g."-10");$dayv10g = date('l',strtotime($gotodatev10g));$pathAltv10g="Text/Events/".$dayv10g."/diamond.txt";if (file_exists($pathAltv10g) && !file_exists($errorpathv10g)){$goGetItv10g=file_get_contents($pathAltv10g); echo htmlspecialchars($goGetItv10g); } } ?></div>                      
</div></label>


<label for="v11">
<div class="DaysGone" id="n11" style="<?php  $pathv11="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/11/DaysGoneBg.png";
$errorpathv11a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";
$PreTurnMtoNumv11a=$NextMonth;$TurnMtoNumv11a=date("m",strtotime($PreTurnMtoNumv11a));  
  $gotodatev11a=($YearOfNextMonth."-".$TurnMtoNumv11a."-11");$dayv11a = date('l',strtotime($gotodatev11a));$pathAltv11a="Pic/Calendar/".$dayv11a."/DaysGoneBg.png"; 
if (file_exists($pathv11)){echo "background-image:url(".$pathv11.") ;" ;}else if (file_exists($pathAltv11a) && !file_exists($errorpathv11a)){echo "background-image:url(".$pathAltv11a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na11">11</div>
	<div class="Gold" id="nan11"><?php   $pathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/gold.txt"; if (file_exists($pathv11g)){$goGetItv11g=file_get_contents($pathv11g); echo htmlspecialchars($goGetItv11g);}else{$errorpathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";$PreTurnMtoNumv11g=$NextMonth;$TurnMtoNumv11g=date("m",strtotime($PreTurnMtoNumv11g)); $gotodatev11g=($YearOfNextMonth."-".$TurnMtoNumv11g."-11");$dayv11g = date('l',strtotime($gotodatev11g));$pathAltv11g="Text/Events/".$dayv11g."/gold.txt";if (file_exists($pathAltv11g) && !file_exists($errorpathv11g)){$goGetItv11g=file_get_contents($pathAltv11g); echo htmlspecialchars($goGetItv11g); } } ?></div>
  <div class="Silver" id="nani11"><?php   $pathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/silver.txt"; if (file_exists($pathv11g)){$goGetItv11g=file_get_contents($pathv11g); echo htmlspecialchars($goGetItv11g);}else{$errorpathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";$PreTurnMtoNumv11g=$NextMonth;$TurnMtoNumv11g=date("m",strtotime($PreTurnMtoNumv11g));$gotodatev11g=($YearOfNextMonth."-".$TurnMtoNumv11g."-11");$dayv11g = date('l',strtotime($gotodatev11g));$pathAltv11g="Text/Events/".$dayv11g."/silver.txt";if (file_exists($pathAltv11g) && !file_exists($errorpathv11g)){$goGetItv11g=file_get_contents($pathAltv11g); echo htmlspecialchars($goGetItv11g); } } ?></div>
  <div class="Bronze" id="nanie11"><?php   $pathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/bronze.txt"; if (file_exists($pathv11g)){$goGetItv11g=file_get_contents($pathv11g); echo htmlspecialchars($goGetItv11g);}else{$errorpathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";$PreTurnMtoNumv11g=$NextMonth;$TurnMtoNumv11g=date("m",strtotime($PreTurnMtoNumv11g));$gotodatev11g=($YearOfNextMonth."-".$TurnMtoNumv11g."-11");$dayv11g = date('l',strtotime($gotodatev11g));$pathAltv11g="Text/Events/".$dayv11g."/bronze.txt";if (file_exists($pathAltv11g) && !file_exists($errorpathv11g)){$goGetItv11g=file_get_contents($pathAltv11g); echo htmlspecialchars($goGetItv11g); } } ?></div>
<div class="Platinum" id="naniel11"><?php   $pathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/platinum.txt"; if (file_exists($pathv11g)){$goGetItv11g=file_get_contents($pathv11g); echo htmlspecialchars($goGetItv11g);}else{$errorpathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";$PreTurnMtoNumv11g=$NextMonth;$TurnMtoNumv11g=date("m",strtotime($PreTurnMtoNumv11g));$gotodatev11g=($YearOfNextMonth."-".$TurnMtoNumv11g."-11");$dayv11g = date('l',strtotime($gotodatev11g));$pathAltv11g="Text/Events/".$dayv11g."/platinum.txt";if (file_exists($pathAltv11g) && !file_exists($errorpathv11g)){$goGetItv11g=file_get_contents($pathAltv11g); echo htmlspecialchars($goGetItv11g); } } ?></div>
<div class="Diamond" id="naniele11"><?php   $pathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/diamond.txt"; if (file_exists($pathv11g)){$goGetItv11g=file_get_contents($pathv11g); echo htmlspecialchars($goGetItv11g);}else{$errorpathv11g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11/denied.txt";$PreTurnMtoNumv11g=$NextMonth;$TurnMtoNumv11g=date("m",strtotime($PreTurnMtoNumv11g));$gotodatev11g=($YearOfNextMonth."-".$TurnMtoNumv11g."-11");$dayv11g = date('l',strtotime($gotodatev11g));$pathAltv11g="Text/Events/".$dayv11g."/diamond.txt";if (file_exists($pathAltv11g) && !file_exists($errorpathv11g)){$goGetItv11g=file_get_contents($pathAltv11g); echo htmlspecialchars($goGetItv11g); } } ?></div>                      
</div></label>


<label for="v12">
<div class="DaysGone" id="n12" style="<?php  $pathv12="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/12/DaysGoneBg.png";
$errorpathv12a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";
$PreTurnMtoNumv12a=$NextMonth;$TurnMtoNumv12a=date("m",strtotime($PreTurnMtoNumv12a));  
  $gotodatev12a=($YearOfNextMonth."-".$TurnMtoNumv12a."-12");$dayv12a = date('l',strtotime($gotodatev12a));$pathAltv12a="Pic/Calendar/".$dayv12a."/DaysGoneBg.png"; 
if (file_exists($pathv12)){echo "background-image:url(".$pathv12.") ;" ;}else if (file_exists($pathAltv12a) && !file_exists($errorpathv12a)){echo "background-image:url(".$pathAltv12a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na12">12</div>
	<div class="Gold" id="nan12"><?php   $pathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/gold.txt"; if (file_exists($pathv12g)){$goGetItv12g=file_get_contents($pathv12g); echo htmlspecialchars($goGetItv12g);}else{$errorpathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";$PreTurnMtoNumv12g=$NextMonth;$TurnMtoNumv12g=date("m",strtotime($PreTurnMtoNumv12g)); $gotodatev12g=($YearOfNextMonth."-".$TurnMtoNumv12g."-12");$dayv12g = date('l',strtotime($gotodatev12g));$pathAltv12g="Text/Events/".$dayv12g."/gold.txt";if (file_exists($pathAltv12g) && !file_exists($errorpathv12g)){$goGetItv12g=file_get_contents($pathAltv12g); echo htmlspecialchars($goGetItv12g); } } ?></div>
  <div class="Silver" id="nani12"><?php   $pathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/silver.txt"; if (file_exists($pathv12g)){$goGetItv12g=file_get_contents($pathv12g); echo htmlspecialchars($goGetItv12g);}else{$errorpathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";$PreTurnMtoNumv12g=$NextMonth;$TurnMtoNumv12g=date("m",strtotime($PreTurnMtoNumv12g));$gotodatev12g=($YearOfNextMonth."-".$TurnMtoNumv12g."-12");$dayv12g = date('l',strtotime($gotodatev12g));$pathAltv12g="Text/Events/".$dayv12g."/silver.txt";if (file_exists($pathAltv12g) && !file_exists($errorpathv12g)){$goGetItv12g=file_get_contents($pathAltv12g); echo htmlspecialchars($goGetItv12g); } } ?></div>
  <div class="Bronze" id="nanie12"><?php   $pathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/bronze.txt"; if (file_exists($pathv12g)){$goGetItv12g=file_get_contents($pathv12g); echo htmlspecialchars($goGetItv12g);}else{$errorpathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";$PreTurnMtoNumv12g=$NextMonth;$TurnMtoNumv12g=date("m",strtotime($PreTurnMtoNumv12g));$gotodatev12g=($YearOfNextMonth."-".$TurnMtoNumv12g."-12");$dayv12g = date('l',strtotime($gotodatev12g));$pathAltv12g="Text/Events/".$dayv12g."/bronze.txt";if (file_exists($pathAltv12g) && !file_exists($errorpathv12g)){$goGetItv12g=file_get_contents($pathAltv12g); echo htmlspecialchars($goGetItv12g); } } ?></div>
<div class="Platinum" id="naniel12"><?php   $pathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/platinum.txt"; if (file_exists($pathv12g)){$goGetItv12g=file_get_contents($pathv12g); echo htmlspecialchars($goGetItv12g);}else{$errorpathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";$PreTurnMtoNumv12g=$NextMonth;$TurnMtoNumv12g=date("m",strtotime($PreTurnMtoNumv12g));$gotodatev12g=($YearOfNextMonth."-".$TurnMtoNumv12g."-12");$dayv12g = date('l',strtotime($gotodatev12g));$pathAltv12g="Text/Events/".$dayv12g."/platinum.txt";if (file_exists($pathAltv12g) && !file_exists($errorpathv12g)){$goGetItv12g=file_get_contents($pathAltv12g); echo htmlspecialchars($goGetItv12g); } } ?></div>
<div class="Diamond" id="naniele12"><?php   $pathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/diamond.txt"; if (file_exists($pathv12g)){$goGetItv12g=file_get_contents($pathv12g); echo htmlspecialchars($goGetItv12g);}else{$errorpathv12g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12/denied.txt";$PreTurnMtoNumv12g=$NextMonth;$TurnMtoNumv12g=date("m",strtotime($PreTurnMtoNumv12g));$gotodatev12g=($YearOfNextMonth."-".$TurnMtoNumv12g."-12");$dayv12g = date('l',strtotime($gotodatev12g));$pathAltv12g="Text/Events/".$dayv12g."/diamond.txt";if (file_exists($pathAltv12g) && !file_exists($errorpathv12g)){$goGetItv12g=file_get_contents($pathAltv12g); echo htmlspecialchars($goGetItv12g); } } ?></div>                     
</div></label>


<label for="v13">
<div class="DaysGone" id="n13" style="<?php  $pathv13="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/13/DaysGoneBg.png";
$errorpathv13a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";
$PreTurnMtoNumv13a=$NextMonth;$TurnMtoNumv13a=date("m",strtotime($PreTurnMtoNumv13a));  
  $gotodatev13a=($YearOfNextMonth."-".$TurnMtoNumv13a."-13");$dayv13a = date('l',strtotime($gotodatev13a));$pathAltv13a="Pic/Calendar/".$dayv13a."/DaysGoneBg.png"; 
if (file_exists($pathv13)){echo "background-image:url(".$pathv13.") ;" ;}else if (file_exists($pathAltv13a) && !file_exists($errorpathv13a)){echo "background-image:url(".$pathAltv13a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na13">13</div>
	<div class="Gold" id="nan13"><?php   $pathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/gold.txt"; if (file_exists($pathv13g)){$goGetItv13g=file_get_contents($pathv13g); echo htmlspecialchars($goGetItv13g);}else{$errorpathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";$PreTurnMtoNumv13g=$NextMonth;$TurnMtoNumv13g=date("m",strtotime($PreTurnMtoNumv13g)); $gotodatev13g=($YearOfNextMonth."-".$TurnMtoNumv13g."-13");$dayv13g = date('l',strtotime($gotodatev13g));$pathAltv13g="Text/Events/".$dayv13g."/gold.txt";if (file_exists($pathAltv13g) && !file_exists($errorpathv13g)){$goGetItv13g=file_get_contents($pathAltv13g); echo htmlspecialchars($goGetItv13g); } } ?></div>
  <div class="Silver" id="nani13"><?php   $pathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/silver.txt"; if (file_exists($pathv13g)){$goGetItv13g=file_get_contents($pathv13g); echo htmlspecialchars($goGetItv13g);}else{$errorpathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";$PreTurnMtoNumv13g=$NextMonth;$TurnMtoNumv13g=date("m",strtotime($PreTurnMtoNumv13g));$gotodatev13g=($YearOfNextMonth."-".$TurnMtoNumv13g."-13");$dayv13g = date('l',strtotime($gotodatev13g));$pathAltv13g="Text/Events/".$dayv13g."/silver.txt";if (file_exists($pathAltv13g) && !file_exists($errorpathv13g)){$goGetItv13g=file_get_contents($pathAltv13g); echo htmlspecialchars($goGetItv13g); } } ?></div>
  <div class="Bronze" id="nanie13"><?php   $pathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/bronze.txt"; if (file_exists($pathv13g)){$goGetItv13g=file_get_contents($pathv13g); echo htmlspecialchars($goGetItv13g);}else{$errorpathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";$PreTurnMtoNumv13g=$NextMonth;$TurnMtoNumv13g=date("m",strtotime($PreTurnMtoNumv13g));$gotodatev13g=($YearOfNextMonth."-".$TurnMtoNumv13g."-13");$dayv13g = date('l',strtotime($gotodatev13g));$pathAltv13g="Text/Events/".$dayv13g."/bronze.txt";if (file_exists($pathAltv13g) && !file_exists($errorpathv13g)){$goGetItv13g=file_get_contents($pathAltv13g); echo htmlspecialchars($goGetItv13g); } } ?></div>
<div class="Platinum" id="naniel13"><?php   $pathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/platinum.txt"; if (file_exists($pathv13g)){$goGetItv13g=file_get_contents($pathv13g); echo htmlspecialchars($goGetItv13g);}else{$errorpathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";$PreTurnMtoNumv13g=$NextMonth;$TurnMtoNumv13g=date("m",strtotime($PreTurnMtoNumv13g));$gotodatev13g=($YearOfNextMonth."-".$TurnMtoNumv13g."-13");$dayv13g = date('l',strtotime($gotodatev13g));$pathAltv13g="Text/Events/".$dayv13g."/platinum.txt";if (file_exists($pathAltv13g) && !file_exists($errorpathv13g)){$goGetItv13g=file_get_contents($pathAltv13g); echo htmlspecialchars($goGetItv13g); } } ?></div>
<div class="Diamond" id="naniele13"><?php   $pathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/diamond.txt"; if (file_exists($pathv13g)){$goGetItv13g=file_get_contents($pathv13g); echo htmlspecialchars($goGetItv13g);}else{$errorpathv13g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13/denied.txt";$PreTurnMtoNumv13g=$NextMonth;$TurnMtoNumv13g=date("m",strtotime($PreTurnMtoNumv13g));$gotodatev13g=($YearOfNextMonth."-".$TurnMtoNumv13g."-13");$dayv13g = date('l',strtotime($gotodatev13g));$pathAltv13g="Text/Events/".$dayv13g."/diamond.txt";if (file_exists($pathAltv13g) && !file_exists($errorpathv13g)){$goGetItv13g=file_get_contents($pathAltv13g); echo htmlspecialchars($goGetItv13g); } } ?></div>                     
</div></label>


<label for="v14">
<div class="DaysGone" id="n14" style="<?php  $pathv14="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/14/DaysGoneBg.png";
$errorpathv14a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";
$PreTurnMtoNumv14a=$NextMonth;$TurnMtoNumv14a=date("m",strtotime($PreTurnMtoNumv14a));  
  $gotodatev14a=($YearOfNextMonth."-".$TurnMtoNumv14a."-14");$dayv14a = date('l',strtotime($gotodatev14a));$pathAltv14a="Pic/Calendar/".$dayv14a."/DaysGoneBg.png"; 
if (file_exists($pathv14)){echo "background-image:url(".$pathv14.") ;" ;}else if (file_exists($pathAltv14a) && !file_exists($errorpathv14a)){echo "background-image:url(".$pathAltv14a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na14">14</div>
	<div class="Gold" id="nan14"><?php   $pathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/gold.txt"; if (file_exists($pathv14g)){$goGetItv14g=file_get_contents($pathv14g); echo htmlspecialchars($goGetItv14g);}else{$errorpathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";$PreTurnMtoNumv14g=$NextMonth;$TurnMtoNumv14g=date("m",strtotime($PreTurnMtoNumv14g)); $gotodatev14g=($YearOfNextMonth."-".$TurnMtoNumv14g."-14");$dayv14g = date('l',strtotime($gotodatev14g));$pathAltv14g="Text/Events/".$dayv14g."/gold.txt";if (file_exists($pathAltv14g) && !file_exists($errorpathv14g)){$goGetItv14g=file_get_contents($pathAltv14g); echo htmlspecialchars($goGetItv14g); } } ?></div>
  <div class="Silver" id="nani14"><?php   $pathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/silver.txt"; if (file_exists($pathv14g)){$goGetItv14g=file_get_contents($pathv14g); echo htmlspecialchars($goGetItv14g);}else{$errorpathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";$PreTurnMtoNumv14g=$NextMonth;$TurnMtoNumv14g=date("m",strtotime($PreTurnMtoNumv14g));$gotodatev14g=($YearOfNextMonth."-".$TurnMtoNumv14g."-14");$dayv14g = date('l',strtotime($gotodatev14g));$pathAltv14g="Text/Events/".$dayv14g."/silver.txt";if (file_exists($pathAltv14g) && !file_exists($errorpathv14g)){$goGetItv14g=file_get_contents($pathAltv14g); echo htmlspecialchars($goGetItv14g); } } ?></div>
  <div class="Bronze" id="nanie14"><?php   $pathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/bronze.txt"; if (file_exists($pathv14g)){$goGetItv14g=file_get_contents($pathv14g); echo htmlspecialchars($goGetItv14g);}else{$errorpathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";$PreTurnMtoNumv14g=$NextMonth;$TurnMtoNumv14g=date("m",strtotime($PreTurnMtoNumv14g));$gotodatev14g=($YearOfNextMonth."-".$TurnMtoNumv14g."-14");$dayv14g = date('l',strtotime($gotodatev14g));$pathAltv14g="Text/Events/".$dayv14g."/bronze.txt";if (file_exists($pathAltv14g) && !file_exists($errorpathv14g)){$goGetItv14g=file_get_contents($pathAltv14g); echo htmlspecialchars($goGetItv14g); } } ?></div>
<div class="Platinum" id="naniel14"><?php   $pathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/platinum.txt"; if (file_exists($pathv14g)){$goGetItv14g=file_get_contents($pathv14g); echo htmlspecialchars($goGetItv14g);}else{$errorpathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";$PreTurnMtoNumv14g=$NextMonth;$TurnMtoNumv14g=date("m",strtotime($PreTurnMtoNumv14g));$gotodatev14g=($YearOfNextMonth."-".$TurnMtoNumv14g."-14");$dayv14g = date('l',strtotime($gotodatev14g));$pathAltv14g="Text/Events/".$dayv14g."/platinum.txt";if (file_exists($pathAltv14g) && !file_exists($errorpathv14g)){$goGetItv14g=file_get_contents($pathAltv14g); echo htmlspecialchars($goGetItv14g); } } ?></div>
<div class="Diamond" id="naniele14"><?php   $pathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/diamond.txt"; if (file_exists($pathv14g)){$goGetItv14g=file_get_contents($pathv14g); echo htmlspecialchars($goGetItv14g);}else{$errorpathv14g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14/denied.txt";$PreTurnMtoNumv14g=$NextMonth;$TurnMtoNumv14g=date("m",strtotime($PreTurnMtoNumv14g));$gotodatev14g=($YearOfNextMonth."-".$TurnMtoNumv14g."-14");$dayv14g = date('l',strtotime($gotodatev14g));$pathAltv14g="Text/Events/".$dayv14g."/diamond.txt";if (file_exists($pathAltv14g) && !file_exists($errorpathv14g)){$goGetItv14g=file_get_contents($pathAltv14g); echo htmlspecialchars($goGetItv14g); } } ?></div>                     
</div></label>


<label for="v15">
<div class="DaysGone" id="n15" style="<?php  $pathv15="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/15/DaysGoneBg.png";
$errorpathv15a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";
$PreTurnMtoNumv15a=$NextMonth;$TurnMtoNumv15a=date("m",strtotime($PreTurnMtoNumv15a));  
  $gotodatev15a=($YearOfNextMonth."-".$TurnMtoNumv15a."-15");$dayv15a = date('l',strtotime($gotodatev15a));$pathAltv15a="Pic/Calendar/".$dayv15a."/DaysGoneBg.png"; 
if (file_exists($pathv15)){echo "background-image:url(".$pathv15.") ;" ;}else if (file_exists($pathAltv15a) && !file_exists($errorpathv15a)){echo "background-image:url(".$pathAltv15a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na15">15</div>
	<div class="Gold" id="nan15"><?php   $pathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/gold.txt"; if (file_exists($pathv15g)){$goGetItv15g=file_get_contents($pathv15g); echo htmlspecialchars($goGetItv15g);}else{$errorpathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";$PreTurnMtoNumv15g=$NextMonth;$TurnMtoNumv15g=date("m",strtotime($PreTurnMtoNumv15g)); $gotodatev15g=($YearOfNextMonth."-".$TurnMtoNumv15g."-15");$dayv15g = date('l',strtotime($gotodatev15g));$pathAltv15g="Text/Events/".$dayv15g."/gold.txt";if (file_exists($pathAltv15g) && !file_exists($errorpathv15g)){$goGetItv15g=file_get_contents($pathAltv15g); echo htmlspecialchars($goGetItv15g); } } ?></div>
  <div class="Silver" id="nani15"><?php   $pathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/silver.txt"; if (file_exists($pathv15g)){$goGetItv15g=file_get_contents($pathv15g); echo htmlspecialchars($goGetItv15g);}else{$errorpathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";$PreTurnMtoNumv15g=$NextMonth;$TurnMtoNumv15g=date("m",strtotime($PreTurnMtoNumv15g));$gotodatev15g=($YearOfNextMonth."-".$TurnMtoNumv15g."-15");$dayv15g = date('l',strtotime($gotodatev15g));$pathAltv15g="Text/Events/".$dayv15g."/silver.txt";if (file_exists($pathAltv15g) && !file_exists($errorpathv15g)){$goGetItv15g=file_get_contents($pathAltv15g); echo htmlspecialchars($goGetItv15g); } } ?></div>
  <div class="Bronze" id="nanie15"><?php   $pathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/bronze.txt"; if (file_exists($pathv15g)){$goGetItv15g=file_get_contents($pathv15g); echo htmlspecialchars($goGetItv15g);}else{$errorpathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";$PreTurnMtoNumv15g=$NextMonth;$TurnMtoNumv15g=date("m",strtotime($PreTurnMtoNumv15g));$gotodatev15g=($YearOfNextMonth."-".$TurnMtoNumv15g."-15");$dayv15g = date('l',strtotime($gotodatev15g));$pathAltv15g="Text/Events/".$dayv15g."/bronze.txt";if (file_exists($pathAltv15g) && !file_exists($errorpathv15g)){$goGetItv15g=file_get_contents($pathAltv15g); echo htmlspecialchars($goGetItv15g); } } ?></div>
<div class="Platinum" id="naniel15"><?php   $pathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/platinum.txt"; if (file_exists($pathv15g)){$goGetItv15g=file_get_contents($pathv15g); echo htmlspecialchars($goGetItv15g);}else{$errorpathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";$PreTurnMtoNumv15g=$NextMonth;$TurnMtoNumv15g=date("m",strtotime($PreTurnMtoNumv15g));$gotodatev15g=($YearOfNextMonth."-".$TurnMtoNumv15g."-15");$dayv15g = date('l',strtotime($gotodatev15g));$pathAltv15g="Text/Events/".$dayv15g."/platinum.txt";if (file_exists($pathAltv15g) && !file_exists($errorpathv15g)){$goGetItv15g=file_get_contents($pathAltv15g); echo htmlspecialchars($goGetItv15g); } } ?></div>
<div class="Diamond" id="naniele15"><?php   $pathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/diamond.txt"; if (file_exists($pathv15g)){$goGetItv15g=file_get_contents($pathv15g); echo htmlspecialchars($goGetItv15g);}else{$errorpathv15g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15/denied.txt";$PreTurnMtoNumv15g=$NextMonth;$TurnMtoNumv15g=date("m",strtotime($PreTurnMtoNumv15g));$gotodatev15g=($YearOfNextMonth."-".$TurnMtoNumv15g."-15");$dayv15g = date('l',strtotime($gotodatev15g));$pathAltv15g="Text/Events/".$dayv15g."/diamond.txt";if (file_exists($pathAltv15g) && !file_exists($errorpathv15g)){$goGetItv15g=file_get_contents($pathAltv15g); echo htmlspecialchars($goGetItv15g); } } ?></div>                     
</div></label>


<label for="v16">
<div class="DaysGone" id="n16" style="<?php  $pathv16="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/16/DaysGoneBg.png";
$errorpathv16a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";
$PreTurnMtoNumv16a=$NextMonth;$TurnMtoNumv16a=date("m",strtotime($PreTurnMtoNumv16a));  
  $gotodatev16a=($YearOfNextMonth."-".$TurnMtoNumv16a."-16");$dayv16a = date('l',strtotime($gotodatev16a));$pathAltv16a="Pic/Calendar/".$dayv16a."/DaysGoneBg.png"; 
if (file_exists($pathv16)){echo "background-image:url(".$pathv16.") ;" ;}else if (file_exists($pathAltv16a) && !file_exists($errorpathv16a)){echo "background-image:url(".$pathAltv16a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na16">16</div>
	<div class="Gold" id="nan16"><?php   $pathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/gold.txt"; if (file_exists($pathv16g)){$goGetItv16g=file_get_contents($pathv16g); echo htmlspecialchars($goGetItv16g);}else{$errorpathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";$PreTurnMtoNumv16g=$NextMonth;$TurnMtoNumv16g=date("m",strtotime($PreTurnMtoNumv16g)); $gotodatev16g=($YearOfNextMonth."-".$TurnMtoNumv16g."-16");$dayv16g = date('l',strtotime($gotodatev16g));$pathAltv16g="Text/Events/".$dayv16g."/gold.txt";if (file_exists($pathAltv16g) && !file_exists($errorpathv16g)){$goGetItv16g=file_get_contents($pathAltv16g); echo htmlspecialchars($goGetItv16g); } } ?></div>
  <div class="Silver" id="nani16"><?php   $pathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/silver.txt"; if (file_exists($pathv16g)){$goGetItv16g=file_get_contents($pathv16g); echo htmlspecialchars($goGetItv16g);}else{$errorpathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";$PreTurnMtoNumv16g=$NextMonth;$TurnMtoNumv16g=date("m",strtotime($PreTurnMtoNumv16g));$gotodatev16g=($YearOfNextMonth."-".$TurnMtoNumv16g."-16");$dayv16g = date('l',strtotime($gotodatev16g));$pathAltv16g="Text/Events/".$dayv16g."/silver.txt";if (file_exists($pathAltv16g) && !file_exists($errorpathv16g)){$goGetItv16g=file_get_contents($pathAltv16g); echo htmlspecialchars($goGetItv16g); } } ?></div>
  <div class="Bronze" id="nanie16"><?php   $pathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/bronze.txt"; if (file_exists($pathv16g)){$goGetItv16g=file_get_contents($pathv16g); echo htmlspecialchars($goGetItv16g);}else{$errorpathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";$PreTurnMtoNumv16g=$NextMonth;$TurnMtoNumv16g=date("m",strtotime($PreTurnMtoNumv16g));$gotodatev16g=($YearOfNextMonth."-".$TurnMtoNumv16g."-16");$dayv16g = date('l',strtotime($gotodatev16g));$pathAltv16g="Text/Events/".$dayv16g."/bronze.txt";if (file_exists($pathAltv16g) && !file_exists($errorpathv16g)){$goGetItv16g=file_get_contents($pathAltv16g); echo htmlspecialchars($goGetItv16g); } } ?></div>
<div class="Platinum" id="naniel16"><?php   $pathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/platinum.txt"; if (file_exists($pathv16g)){$goGetItv16g=file_get_contents($pathv16g); echo htmlspecialchars($goGetItv16g);}else{$errorpathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";$PreTurnMtoNumv16g=$NextMonth;$TurnMtoNumv16g=date("m",strtotime($PreTurnMtoNumv16g));$gotodatev16g=($YearOfNextMonth."-".$TurnMtoNumv16g."-16");$dayv16g = date('l',strtotime($gotodatev16g));$pathAltv16g="Text/Events/".$dayv16g."/platinum.txt";if (file_exists($pathAltv16g) && !file_exists($errorpathv16g)){$goGetItv16g=file_get_contents($pathAltv16g); echo htmlspecialchars($goGetItv16g); } } ?></div>
<div class="Diamond" id="naniele16"><?php   $pathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/diamond.txt"; if (file_exists($pathv16g)){$goGetItv16g=file_get_contents($pathv16g); echo htmlspecialchars($goGetItv16g);}else{$errorpathv16g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16/denied.txt";$PreTurnMtoNumv16g=$NextMonth;$TurnMtoNumv16g=date("m",strtotime($PreTurnMtoNumv16g));$gotodatev16g=($YearOfNextMonth."-".$TurnMtoNumv16g."-16");$dayv16g = date('l',strtotime($gotodatev16g));$pathAltv16g="Text/Events/".$dayv16g."/diamond.txt";if (file_exists($pathAltv16g) && !file_exists($errorpathv16g)){$goGetItv16g=file_get_contents($pathAltv16g); echo htmlspecialchars($goGetItv16g); } } ?></div>                       
</div></label>


<label for="v17">
<div class="DaysGone" id="n17" style="<?php  $pathv17="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/17/DaysGoneBg.png";
$errorpathv17a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";
$PreTurnMtoNumv17a=$NextMonth;$TurnMtoNumv17a=date("m",strtotime($PreTurnMtoNumv17a));  
  $gotodatev17a=($YearOfNextMonth."-".$TurnMtoNumv17a."-17");$dayv17a = date('l',strtotime($gotodatev17a));$pathAltv17a="Pic/Calendar/".$dayv17a."/DaysGoneBg.png"; 
if (file_exists($pathv17)){echo "background-image:url(".$pathv17.") ;" ;}else if (file_exists($pathAltv17a) && !file_exists($errorpathv17a)){echo "background-image:url(".$pathAltv17a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na17">17</div>
	<div class="Gold" id="nan17"><?php   $pathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/gold.txt"; if (file_exists($pathv17g)){$goGetItv17g=file_get_contents($pathv17g); echo htmlspecialchars($goGetItv17g);}else{$errorpathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";$PreTurnMtoNumv17g=$NextMonth;$TurnMtoNumv17g=date("m",strtotime($PreTurnMtoNumv17g)); $gotodatev17g=($YearOfNextMonth."-".$TurnMtoNumv17g."-17");$dayv17g = date('l',strtotime($gotodatev17g));$pathAltv17g="Text/Events/".$dayv17g."/gold.txt";if (file_exists($pathAltv17g) && !file_exists($errorpathv17g)){$goGetItv17g=file_get_contents($pathAltv17g); echo htmlspecialchars($goGetItv17g); } } ?></div>
  <div class="Silver" id="nani17"><?php   $pathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/silver.txt"; if (file_exists($pathv17g)){$goGetItv17g=file_get_contents($pathv17g); echo htmlspecialchars($goGetItv17g);}else{$errorpathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";$PreTurnMtoNumv17g=$NextMonth;$TurnMtoNumv17g=date("m",strtotime($PreTurnMtoNumv17g));$gotodatev17g=($YearOfNextMonth."-".$TurnMtoNumv17g."-17");$dayv17g = date('l',strtotime($gotodatev17g));$pathAltv17g="Text/Events/".$dayv17g."/silver.txt";if (file_exists($pathAltv17g) && !file_exists($errorpathv17g)){$goGetItv17g=file_get_contents($pathAltv17g); echo htmlspecialchars($goGetItv17g); } } ?></div>
  <div class="Bronze" id="nanie17"><?php   $pathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/bronze.txt"; if (file_exists($pathv17g)){$goGetItv17g=file_get_contents($pathv17g); echo htmlspecialchars($goGetItv17g);}else{$errorpathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";$PreTurnMtoNumv17g=$NextMonth;$TurnMtoNumv17g=date("m",strtotime($PreTurnMtoNumv17g));$gotodatev17g=($YearOfNextMonth."-".$TurnMtoNumv17g."-17");$dayv17g = date('l',strtotime($gotodatev17g));$pathAltv17g="Text/Events/".$dayv17g."/bronze.txt";if (file_exists($pathAltv17g) && !file_exists($errorpathv17g)){$goGetItv17g=file_get_contents($pathAltv17g); echo htmlspecialchars($goGetItv17g); } } ?></div>
<div class="Platinum" id="naniel17"><?php   $pathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/platinum.txt"; if (file_exists($pathv17g)){$goGetItv17g=file_get_contents($pathv17g); echo htmlspecialchars($goGetItv17g);}else{$errorpathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";$PreTurnMtoNumv17g=$NextMonth;$TurnMtoNumv17g=date("m",strtotime($PreTurnMtoNumv17g));$gotodatev17g=($YearOfNextMonth."-".$TurnMtoNumv17g."-17");$dayv17g = date('l',strtotime($gotodatev17g));$pathAltv17g="Text/Events/".$dayv17g."/platinum.txt";if (file_exists($pathAltv17g) && !file_exists($errorpathv17g)){$goGetItv17g=file_get_contents($pathAltv17g); echo htmlspecialchars($goGetItv17g); } } ?></div>
<div class="Diamond" id="naniele17"><?php   $pathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/diamond.txt"; if (file_exists($pathv17g)){$goGetItv17g=file_get_contents($pathv17g); echo htmlspecialchars($goGetItv17g);}else{$errorpathv17g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17/denied.txt";$PreTurnMtoNumv17g=$NextMonth;$TurnMtoNumv17g=date("m",strtotime($PreTurnMtoNumv17g));$gotodatev17g=($YearOfNextMonth."-".$TurnMtoNumv17g."-17");$dayv17g = date('l',strtotime($gotodatev17g));$pathAltv17g="Text/Events/".$dayv17g."/diamond.txt";if (file_exists($pathAltv17g) && !file_exists($errorpathv17g)){$goGetItv17g=file_get_contents($pathAltv17g); echo htmlspecialchars($goGetItv17g); } } ?></div>                      
</div></label>


<label for="v18">
<div class="DaysGone" id="n18" style="<?php  $pathv18="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/18/DaysGoneBg.png";
$errorpathv18a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";
$PreTurnMtoNumv18a=$NextMonth;$TurnMtoNumv18a=date("m",strtotime($PreTurnMtoNumv18a));  
  $gotodatev18a=($YearOfNextMonth."-".$TurnMtoNumv18a."-18");$dayv18a = date('l',strtotime($gotodatev18a));$pathAltv18a="Pic/Calendar/".$dayv18a."/DaysGoneBg.png"; 
if (file_exists($pathv18)){echo "background-image:url(".$pathv18.") ;" ;}else if (file_exists($pathAltv18a) && !file_exists($errorpathv18a)){echo "background-image:url(".$pathAltv18a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na18">18</div>
	<div class="Gold" id="nan18"><?php   $pathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/gold.txt"; if (file_exists($pathv18g)){$goGetItv18g=file_get_contents($pathv18g); echo htmlspecialchars($goGetItv18g);}else{$errorpathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";$PreTurnMtoNumv18g=$NextMonth;$TurnMtoNumv18g=date("m",strtotime($PreTurnMtoNumv18g)); $gotodatev18g=($YearOfNextMonth."-".$TurnMtoNumv18g."-18");$dayv18g = date('l',strtotime($gotodatev18g));$pathAltv18g="Text/Events/".$dayv18g."/gold.txt";if (file_exists($pathAltv18g) && !file_exists($errorpathv18g)){$goGetItv18g=file_get_contents($pathAltv18g); echo htmlspecialchars($goGetItv18g); } } ?></div>
  <div class="Silver" id="nani18"><?php   $pathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/silver.txt"; if (file_exists($pathv18g)){$goGetItv18g=file_get_contents($pathv18g); echo htmlspecialchars($goGetItv18g);}else{$errorpathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";$PreTurnMtoNumv18g=$NextMonth;$TurnMtoNumv18g=date("m",strtotime($PreTurnMtoNumv18g));$gotodatev18g=($YearOfNextMonth."-".$TurnMtoNumv18g."-18");$dayv18g = date('l',strtotime($gotodatev18g));$pathAltv18g="Text/Events/".$dayv18g."/silver.txt";if (file_exists($pathAltv18g) && !file_exists($errorpathv18g)){$goGetItv18g=file_get_contents($pathAltv18g); echo htmlspecialchars($goGetItv18g); } } ?></div>
  <div class="Bronze" id="nanie18"><?php   $pathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/bronze.txt"; if (file_exists($pathv18g)){$goGetItv18g=file_get_contents($pathv18g); echo htmlspecialchars($goGetItv18g);}else{$errorpathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";$PreTurnMtoNumv18g=$NextMonth;$TurnMtoNumv18g=date("m",strtotime($PreTurnMtoNumv18g));$gotodatev18g=($YearOfNextMonth."-".$TurnMtoNumv18g."-18");$dayv18g = date('l',strtotime($gotodatev18g));$pathAltv18g="Text/Events/".$dayv18g."/bronze.txt";if (file_exists($pathAltv18g) && !file_exists($errorpathv18g)){$goGetItv18g=file_get_contents($pathAltv18g); echo htmlspecialchars($goGetItv18g); } } ?></div>
<div class="Platinum" id="naniel18"><?php   $pathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/platinum.txt"; if (file_exists($pathv18g)){$goGetItv18g=file_get_contents($pathv18g); echo htmlspecialchars($goGetItv18g);}else{$errorpathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";$PreTurnMtoNumv18g=$NextMonth;$TurnMtoNumv18g=date("m",strtotime($PreTurnMtoNumv18g));$gotodatev18g=($YearOfNextMonth."-".$TurnMtoNumv18g."-18");$dayv18g = date('l',strtotime($gotodatev18g));$pathAltv18g="Text/Events/".$dayv18g."/platinum.txt";if (file_exists($pathAltv18g) && !file_exists($errorpathv18g)){$goGetItv18g=file_get_contents($pathAltv18g); echo htmlspecialchars($goGetItv18g); } } ?></div>
<div class="Diamond" id="naniele18"><?php   $pathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/diamond.txt"; if (file_exists($pathv18g)){$goGetItv18g=file_get_contents($pathv18g); echo htmlspecialchars($goGetItv18g);}else{$errorpathv18g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18/denied.txt";$PreTurnMtoNumv18g=$NextMonth;$TurnMtoNumv18g=date("m",strtotime($PreTurnMtoNumv18g));$gotodatev18g=($YearOfNextMonth."-".$TurnMtoNumv18g."-18");$dayv18g = date('l',strtotime($gotodatev18g));$pathAltv18g="Text/Events/".$dayv18g."/diamond.txt";if (file_exists($pathAltv18g) && !file_exists($errorpathv18g)){$goGetItv18g=file_get_contents($pathAltv18g); echo htmlspecialchars($goGetItv18g); } } ?></div>                    
</div></label>


<label for="v19">
<div class="DaysGone" id="n19" style="<?php  $pathv19="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/19/DaysGoneBg.png";
$errorpathv19a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";
$PreTurnMtoNumv19a=$NextMonth;$TurnMtoNumv19a=date("m",strtotime($PreTurnMtoNumv19a));  
  $gotodatev19a=($YearOfNextMonth."-".$TurnMtoNumv19a."-19");$dayv19a = date('l',strtotime($gotodatev19a));$pathAltv19a="Pic/Calendar/".$dayv19a."/DaysGoneBg.png"; 
if (file_exists($pathv19)){echo "background-image:url(".$pathv19.") ;" ;}else if (file_exists($pathAltv19a) && !file_exists($errorpathv19a)){echo "background-image:url(".$pathAltv19a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na19">19</div>
	<div class="Gold" id="nan19"><?php   $pathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/gold.txt"; if (file_exists($pathv19g)){$goGetItv19g=file_get_contents($pathv19g); echo htmlspecialchars($goGetItv19g);}else{$errorpathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";$PreTurnMtoNumv19g=$NextMonth;$TurnMtoNumv19g=date("m",strtotime($PreTurnMtoNumv19g)); $gotodatev19g=($YearOfNextMonth."-".$TurnMtoNumv19g."-19");$dayv19g = date('l',strtotime($gotodatev19g));$pathAltv19g="Text/Events/".$dayv19g."/gold.txt";if (file_exists($pathAltv19g) && !file_exists($errorpathv19g)){$goGetItv19g=file_get_contents($pathAltv19g); echo htmlspecialchars($goGetItv19g); } } ?></div>
  <div class="Silver" id="nani19"><?php   $pathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/silver.txt"; if (file_exists($pathv19g)){$goGetItv19g=file_get_contents($pathv19g); echo htmlspecialchars($goGetItv19g);}else{$errorpathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";$PreTurnMtoNumv19g=$NextMonth;$TurnMtoNumv19g=date("m",strtotime($PreTurnMtoNumv19g));$gotodatev19g=($YearOfNextMonth."-".$TurnMtoNumv19g."-19");$dayv19g = date('l',strtotime($gotodatev19g));$pathAltv19g="Text/Events/".$dayv19g."/silver.txt";if (file_exists($pathAltv19g) && !file_exists($errorpathv19g)){$goGetItv19g=file_get_contents($pathAltv19g); echo htmlspecialchars($goGetItv19g); } } ?></div>
  <div class="Bronze" id="nanie19"><?php   $pathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/bronze.txt"; if (file_exists($pathv19g)){$goGetItv19g=file_get_contents($pathv19g); echo htmlspecialchars($goGetItv19g);}else{$errorpathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";$PreTurnMtoNumv19g=$NextMonth;$TurnMtoNumv19g=date("m",strtotime($PreTurnMtoNumv19g));$gotodatev19g=($YearOfNextMonth."-".$TurnMtoNumv19g."-19");$dayv19g = date('l',strtotime($gotodatev19g));$pathAltv19g="Text/Events/".$dayv19g."/bronze.txt";if (file_exists($pathAltv19g) && !file_exists($errorpathv19g)){$goGetItv19g=file_get_contents($pathAltv19g); echo htmlspecialchars($goGetItv19g); } } ?></div>
<div class="Platinum" id="naniel19"><?php   $pathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/platinum.txt"; if (file_exists($pathv19g)){$goGetItv19g=file_get_contents($pathv19g); echo htmlspecialchars($goGetItv19g);}else{$errorpathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";$PreTurnMtoNumv19g=$NextMonth;$TurnMtoNumv19g=date("m",strtotime($PreTurnMtoNumv19g));$gotodatev19g=($YearOfNextMonth."-".$TurnMtoNumv19g."-19");$dayv19g = date('l',strtotime($gotodatev19g));$pathAltv19g="Text/Events/".$dayv19g."/platinum.txt";if (file_exists($pathAltv19g) && !file_exists($errorpathv19g)){$goGetItv19g=file_get_contents($pathAltv19g); echo htmlspecialchars($goGetItv19g); } } ?></div>
<div class="Diamond" id="naniele19"><?php   $pathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/diamond.txt"; if (file_exists($pathv19g)){$goGetItv19g=file_get_contents($pathv19g); echo htmlspecialchars($goGetItv19g);}else{$errorpathv19g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19/denied.txt";$PreTurnMtoNumv19g=$NextMonth;$TurnMtoNumv19g=date("m",strtotime($PreTurnMtoNumv19g));$gotodatev19g=($YearOfNextMonth."-".$TurnMtoNumv19g."-19");$dayv19g = date('l',strtotime($gotodatev19g));$pathAltv19g="Text/Events/".$dayv19g."/diamond.txt";if (file_exists($pathAltv19g) && !file_exists($errorpathv19g)){$goGetItv19g=file_get_contents($pathAltv19g); echo htmlspecialchars($goGetItv19g); } } ?></div>                      
</div></label>


<label for="v20">
<div class="DaysGone" id="n20" style="<?php  $pathv20="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/20/DaysGoneBg.png";
$errorpathv20a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";
$PreTurnMtoNumv20a=$NextMonth;$TurnMtoNumv20a=date("m",strtotime($PreTurnMtoNumv20a));  
  $gotodatev20a=($YearOfNextMonth."-".$TurnMtoNumv20a."-20");$dayv20a = date('l',strtotime($gotodatev20a));$pathAltv20a="Pic/Calendar/".$dayv20a."/DaysGoneBg.png"; 
if (file_exists($pathv20)){echo "background-image:url(".$pathv20.") ;" ;}else if (file_exists($pathAltv20a) && !file_exists($errorpathv20a)){echo "background-image:url(".$pathAltv20a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na20">20</div>
	<div class="Gold" id="nan20"><?php   $pathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/gold.txt"; if (file_exists($pathv20g)){$goGetItv20g=file_get_contents($pathv20g); echo htmlspecialchars($goGetItv20g);}else{$errorpathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";$PreTurnMtoNumv20g=$NextMonth;$TurnMtoNumv20g=date("m",strtotime($PreTurnMtoNumv20g)); $gotodatev20g=($YearOfNextMonth."-".$TurnMtoNumv20g."-20");$dayv20g = date('l',strtotime($gotodatev20g));$pathAltv20g="Text/Events/".$dayv20g."/gold.txt";if (file_exists($pathAltv20g) && !file_exists($errorpathv20g)){$goGetItv20g=file_get_contents($pathAltv20g); echo htmlspecialchars($goGetItv20g); } } ?></div>
  <div class="Silver" id="nani20"><?php   $pathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/silver.txt"; if (file_exists($pathv20g)){$goGetItv20g=file_get_contents($pathv20g); echo htmlspecialchars($goGetItv20g);}else{$errorpathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";$PreTurnMtoNumv20g=$NextMonth;$TurnMtoNumv20g=date("m",strtotime($PreTurnMtoNumv20g));$gotodatev20g=($YearOfNextMonth."-".$TurnMtoNumv20g."-20");$dayv20g = date('l',strtotime($gotodatev20g));$pathAltv20g="Text/Events/".$dayv20g."/silver.txt";if (file_exists($pathAltv20g) && !file_exists($errorpathv20g)){$goGetItv20g=file_get_contents($pathAltv20g); echo htmlspecialchars($goGetItv20g); } } ?></div>
  <div class="Bronze" id="nanie20"><?php   $pathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/bronze.txt"; if (file_exists($pathv20g)){$goGetItv20g=file_get_contents($pathv20g); echo htmlspecialchars($goGetItv20g);}else{$errorpathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";$PreTurnMtoNumv20g=$NextMonth;$TurnMtoNumv20g=date("m",strtotime($PreTurnMtoNumv20g));$gotodatev20g=($YearOfNextMonth."-".$TurnMtoNumv20g."-20");$dayv20g = date('l',strtotime($gotodatev20g));$pathAltv20g="Text/Events/".$dayv20g."/bronze.txt";if (file_exists($pathAltv20g) && !file_exists($errorpathv20g)){$goGetItv20g=file_get_contents($pathAltv20g); echo htmlspecialchars($goGetItv20g); } } ?></div>
<div class="Platinum" id="naniel20"><?php   $pathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/platinum.txt"; if (file_exists($pathv20g)){$goGetItv20g=file_get_contents($pathv20g); echo htmlspecialchars($goGetItv20g);}else{$errorpathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";$PreTurnMtoNumv20g=$NextMonth;$TurnMtoNumv20g=date("m",strtotime($PreTurnMtoNumv20g));$gotodatev20g=($YearOfNextMonth."-".$TurnMtoNumv20g."-20");$dayv20g = date('l',strtotime($gotodatev20g));$pathAltv20g="Text/Events/".$dayv20g."/platinum.txt";if (file_exists($pathAltv20g) && !file_exists($errorpathv20g)){$goGetItv20g=file_get_contents($pathAltv20g); echo htmlspecialchars($goGetItv20g); } } ?></div>
<div class="Diamond" id="naniele20"><?php   $pathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/diamond.txt"; if (file_exists($pathv20g)){$goGetItv20g=file_get_contents($pathv20g); echo htmlspecialchars($goGetItv20g);}else{$errorpathv20g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20/denied.txt";$PreTurnMtoNumv20g=$NextMonth;$TurnMtoNumv20g=date("m",strtotime($PreTurnMtoNumv20g));$gotodatev20g=($YearOfNextMonth."-".$TurnMtoNumv20g."-20");$dayv20g = date('l',strtotime($gotodatev20g));$pathAltv20g="Text/Events/".$dayv20g."/diamond.txt";if (file_exists($pathAltv20g) && !file_exists($errorpathv20g)){$goGetItv20g=file_get_contents($pathAltv20g); echo htmlspecialchars($goGetItv20g); } } ?></div>                     
</div></label>


<label for="v21">
<div class="DaysGone" id="n21" style="<?php  $pathv21="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/21/DaysGoneBg.png";
$errorpathv21a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";
$PreTurnMtoNumv21a=$NextMonth;$TurnMtoNumv21a=date("m",strtotime($PreTurnMtoNumv21a));  
  $gotodatev21a=($YearOfNextMonth."-".$TurnMtoNumv21a."-21");$dayv21a = date('l',strtotime($gotodatev21a));$pathAltv21a="Pic/Calendar/".$dayv21a."/DaysGoneBg.png"; 
if (file_exists($pathv21)){echo "background-image:url(".$pathv21.") ;" ;}else if (file_exists($pathAltv21a) && !file_exists($errorpathv21a)){echo "background-image:url(".$pathAltv21a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na21">21</div>
	<div class="Gold" id="nan21"><?php   $pathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/gold.txt"; if (file_exists($pathv21g)){$goGetItv21g=file_get_contents($pathv21g); echo htmlspecialchars($goGetItv21g);}else{$errorpathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";$PreTurnMtoNumv21g=$NextMonth;$TurnMtoNumv21g=date("m",strtotime($PreTurnMtoNumv21g)); $gotodatev21g=($YearOfNextMonth."-".$TurnMtoNumv21g."-21");$dayv21g = date('l',strtotime($gotodatev21g));$pathAltv21g="Text/Events/".$dayv21g."/gold.txt";if (file_exists($pathAltv21g) && !file_exists($errorpathv21g)){$goGetItv21g=file_get_contents($pathAltv21g); echo htmlspecialchars($goGetItv21g); } } ?></div>
  <div class="Silver" id="nani21"><?php   $pathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/silver.txt"; if (file_exists($pathv21g)){$goGetItv21g=file_get_contents($pathv21g); echo htmlspecialchars($goGetItv21g);}else{$errorpathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";$PreTurnMtoNumv21g=$NextMonth;$TurnMtoNumv21g=date("m",strtotime($PreTurnMtoNumv21g));$gotodatev21g=($YearOfNextMonth."-".$TurnMtoNumv21g."-21");$dayv21g = date('l',strtotime($gotodatev21g));$pathAltv21g="Text/Events/".$dayv21g."/silver.txt";if (file_exists($pathAltv21g) && !file_exists($errorpathv21g)){$goGetItv21g=file_get_contents($pathAltv21g); echo htmlspecialchars($goGetItv21g); } } ?></div>
  <div class="Bronze" id="nanie21"><?php   $pathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/bronze.txt"; if (file_exists($pathv21g)){$goGetItv21g=file_get_contents($pathv21g); echo htmlspecialchars($goGetItv21g);}else{$errorpathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";$PreTurnMtoNumv21g=$NextMonth;$TurnMtoNumv21g=date("m",strtotime($PreTurnMtoNumv21g));$gotodatev21g=($YearOfNextMonth."-".$TurnMtoNumv21g."-21");$dayv21g = date('l',strtotime($gotodatev21g));$pathAltv21g="Text/Events/".$dayv21g."/bronze.txt";if (file_exists($pathAltv21g) && !file_exists($errorpathv21g)){$goGetItv21g=file_get_contents($pathAltv21g); echo htmlspecialchars($goGetItv21g); } } ?></div>
<div class="Platinum" id="naniel21"><?php   $pathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/platinum.txt"; if (file_exists($pathv21g)){$goGetItv21g=file_get_contents($pathv21g); echo htmlspecialchars($goGetItv21g);}else{$errorpathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";$PreTurnMtoNumv21g=$NextMonth;$TurnMtoNumv21g=date("m",strtotime($PreTurnMtoNumv21g));$gotodatev21g=($YearOfNextMonth."-".$TurnMtoNumv21g."-21");$dayv21g = date('l',strtotime($gotodatev21g));$pathAltv21g="Text/Events/".$dayv21g."/platinum.txt";if (file_exists($pathAltv21g) && !file_exists($errorpathv21g)){$goGetItv21g=file_get_contents($pathAltv21g); echo htmlspecialchars($goGetItv21g); } } ?></div>
<div class="Diamond" id="naniele21"><?php   $pathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/diamond.txt"; if (file_exists($pathv21g)){$goGetItv21g=file_get_contents($pathv21g); echo htmlspecialchars($goGetItv21g);}else{$errorpathv21g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21/denied.txt";$PreTurnMtoNumv21g=$NextMonth;$TurnMtoNumv21g=date("m",strtotime($PreTurnMtoNumv21g));$gotodatev21g=($YearOfNextMonth."-".$TurnMtoNumv21g."-21");$dayv21g = date('l',strtotime($gotodatev21g));$pathAltv21g="Text/Events/".$dayv21g."/diamond.txt";if (file_exists($pathAltv21g) && !file_exists($errorpathv21g)){$goGetItv21g=file_get_contents($pathAltv21g); echo htmlspecialchars($goGetItv21g); } } ?></div>                       
</div></label>


<label for="v22">
<div class="DaysGone" id="n22" style="<?php  $pathv22="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/22/DaysGoneBg.png";
$errorpathv22a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";
$PreTurnMtoNumv22a=$NextMonth;$TurnMtoNumv22a=date("m",strtotime($PreTurnMtoNumv22a));  
  $gotodatev22a=($YearOfNextMonth."-".$TurnMtoNumv22a."-22");$dayv22a = date('l',strtotime($gotodatev22a));$pathAltv22a="Pic/Calendar/".$dayv22a."/DaysGoneBg.png"; 
if (file_exists($pathv22)){echo "background-image:url(".$pathv22.") ;" ;}else if (file_exists($pathAltv22a) && !file_exists($errorpathv22a)){echo "background-image:url(".$pathAltv22a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na22">22</div>
	<div class="Gold" id="nan22"><?php   $pathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/gold.txt"; if (file_exists($pathv22g)){$goGetItv22g=file_get_contents($pathv22g); echo htmlspecialchars($goGetItv22g);}else{$errorpathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";$PreTurnMtoNumv22g=$NextMonth;$TurnMtoNumv22g=date("m",strtotime($PreTurnMtoNumv22g)); $gotodatev22g=($YearOfNextMonth."-".$TurnMtoNumv22g."-22");$dayv22g = date('l',strtotime($gotodatev22g));$pathAltv22g="Text/Events/".$dayv22g."/gold.txt";if (file_exists($pathAltv22g) && !file_exists($errorpathv22g)){$goGetItv22g=file_get_contents($pathAltv22g); echo htmlspecialchars($goGetItv22g); } } ?></div>
  <div class="Silver" id="nani22"><?php   $pathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/silver.txt"; if (file_exists($pathv22g)){$goGetItv22g=file_get_contents($pathv22g); echo htmlspecialchars($goGetItv22g);}else{$errorpathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";$PreTurnMtoNumv22g=$NextMonth;$TurnMtoNumv22g=date("m",strtotime($PreTurnMtoNumv22g));$gotodatev22g=($YearOfNextMonth."-".$TurnMtoNumv22g."-22");$dayv22g = date('l',strtotime($gotodatev22g));$pathAltv22g="Text/Events/".$dayv22g."/silver.txt";if (file_exists($pathAltv22g) && !file_exists($errorpathv22g)){$goGetItv22g=file_get_contents($pathAltv22g); echo htmlspecialchars($goGetItv22g); } } ?></div>
  <div class="Bronze" id="nanie22"><?php   $pathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/bronze.txt"; if (file_exists($pathv22g)){$goGetItv22g=file_get_contents($pathv22g); echo htmlspecialchars($goGetItv22g);}else{$errorpathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";$PreTurnMtoNumv22g=$NextMonth;$TurnMtoNumv22g=date("m",strtotime($PreTurnMtoNumv22g));$gotodatev22g=($YearOfNextMonth."-".$TurnMtoNumv22g."-22");$dayv22g = date('l',strtotime($gotodatev22g));$pathAltv22g="Text/Events/".$dayv22g."/bronze.txt";if (file_exists($pathAltv22g) && !file_exists($errorpathv22g)){$goGetItv22g=file_get_contents($pathAltv22g); echo htmlspecialchars($goGetItv22g); } } ?></div>
<div class="Platinum" id="naniel22"><?php   $pathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/platinum.txt"; if (file_exists($pathv22g)){$goGetItv22g=file_get_contents($pathv22g); echo htmlspecialchars($goGetItv22g);}else{$errorpathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";$PreTurnMtoNumv22g=$NextMonth;$TurnMtoNumv22g=date("m",strtotime($PreTurnMtoNumv22g));$gotodatev22g=($YearOfNextMonth."-".$TurnMtoNumv22g."-22");$dayv22g = date('l',strtotime($gotodatev22g));$pathAltv22g="Text/Events/".$dayv22g."/platinum.txt";if (file_exists($pathAltv22g) && !file_exists($errorpathv22g)){$goGetItv22g=file_get_contents($pathAltv22g); echo htmlspecialchars($goGetItv22g); } } ?></div>
<div class="Diamond" id="naniele22"><?php   $pathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/diamond.txt"; if (file_exists($pathv22g)){$goGetItv22g=file_get_contents($pathv22g); echo htmlspecialchars($goGetItv22g);}else{$errorpathv22g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22/denied.txt";$PreTurnMtoNumv22g=$NextMonth;$TurnMtoNumv22g=date("m",strtotime($PreTurnMtoNumv22g));$gotodatev22g=($YearOfNextMonth."-".$TurnMtoNumv22g."-22");$dayv22g = date('l',strtotime($gotodatev22g));$pathAltv22g="Text/Events/".$dayv22g."/diamond.txt";if (file_exists($pathAltv22g) && !file_exists($errorpathv22g)){$goGetItv22g=file_get_contents($pathAltv22g); echo htmlspecialchars($goGetItv22g); } } ?></div>                       
</div></label>


<label for="v23">
<div class="DaysGone" id="n23" style="<?php  $pathv23="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/23/DaysGoneBg.png";
$errorpathv23a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";
$PreTurnMtoNumv23a=$NextMonth;$TurnMtoNumv23a=date("m",strtotime($PreTurnMtoNumv23a));  
  $gotodatev23a=($YearOfNextMonth."-".$TurnMtoNumv23a."-23");$dayv23a = date('l',strtotime($gotodatev23a));$pathAltv23a="Pic/Calendar/".$dayv23a."/DaysGoneBg.png"; 
if (file_exists($pathv23)){echo "background-image:url(".$pathv23.") ;" ;}else if (file_exists($pathAltv23a) && !file_exists($errorpathv23a)){echo "background-image:url(".$pathAltv23a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na23">23</div>
	<div class="Gold" id="nan23"><?php   $pathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/gold.txt"; if (file_exists($pathv23g)){$goGetItv23g=file_get_contents($pathv23g); echo htmlspecialchars($goGetItv23g);}else{$errorpathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";$PreTurnMtoNumv23g=$NextMonth;$TurnMtoNumv23g=date("m",strtotime($PreTurnMtoNumv23g)); $gotodatev23g=($YearOfNextMonth."-".$TurnMtoNumv23g."-23");$dayv23g = date('l',strtotime($gotodatev23g));$pathAltv23g="Text/Events/".$dayv23g."/gold.txt";if (file_exists($pathAltv23g) && !file_exists($errorpathv23g)){$goGetItv23g=file_get_contents($pathAltv23g); echo htmlspecialchars($goGetItv23g); } } ?></div>
  <div class="Silver" id="nani23"><?php   $pathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/silver.txt"; if (file_exists($pathv23g)){$goGetItv23g=file_get_contents($pathv23g); echo htmlspecialchars($goGetItv23g);}else{$errorpathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";$PreTurnMtoNumv23g=$NextMonth;$TurnMtoNumv23g=date("m",strtotime($PreTurnMtoNumv23g));$gotodatev23g=($YearOfNextMonth."-".$TurnMtoNumv23g."-23");$dayv23g = date('l',strtotime($gotodatev23g));$pathAltv23g="Text/Events/".$dayv23g."/silver.txt";if (file_exists($pathAltv23g) && !file_exists($errorpathv23g)){$goGetItv23g=file_get_contents($pathAltv23g); echo htmlspecialchars($goGetItv23g); } } ?></div>
  <div class="Bronze" id="nanie23"><?php   $pathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/bronze.txt"; if (file_exists($pathv23g)){$goGetItv23g=file_get_contents($pathv23g); echo htmlspecialchars($goGetItv23g);}else{$errorpathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";$PreTurnMtoNumv23g=$NextMonth;$TurnMtoNumv23g=date("m",strtotime($PreTurnMtoNumv23g));$gotodatev23g=($YearOfNextMonth."-".$TurnMtoNumv23g."-23");$dayv23g = date('l',strtotime($gotodatev23g));$pathAltv23g="Text/Events/".$dayv23g."/bronze.txt";if (file_exists($pathAltv23g) && !file_exists($errorpathv23g)){$goGetItv23g=file_get_contents($pathAltv23g); echo htmlspecialchars($goGetItv23g); } } ?></div>
<div class="Platinum" id="naniel23"><?php   $pathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/platinum.txt"; if (file_exists($pathv23g)){$goGetItv23g=file_get_contents($pathv23g); echo htmlspecialchars($goGetItv23g);}else{$errorpathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";$PreTurnMtoNumv23g=$NextMonth;$TurnMtoNumv23g=date("m",strtotime($PreTurnMtoNumv23g));$gotodatev23g=($YearOfNextMonth."-".$TurnMtoNumv23g."-23");$dayv23g = date('l',strtotime($gotodatev23g));$pathAltv23g="Text/Events/".$dayv23g."/platinum.txt";if (file_exists($pathAltv23g) && !file_exists($errorpathv23g)){$goGetItv23g=file_get_contents($pathAltv23g); echo htmlspecialchars($goGetItv23g); } } ?></div>
<div class="Diamond" id="naniele23"><?php   $pathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/diamond.txt"; if (file_exists($pathv23g)){$goGetItv23g=file_get_contents($pathv23g); echo htmlspecialchars($goGetItv23g);}else{$errorpathv23g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23/denied.txt";$PreTurnMtoNumv23g=$NextMonth;$TurnMtoNumv23g=date("m",strtotime($PreTurnMtoNumv23g));$gotodatev23g=($YearOfNextMonth."-".$TurnMtoNumv23g."-23");$dayv23g = date('l',strtotime($gotodatev23g));$pathAltv23g="Text/Events/".$dayv23g."/diamond.txt";if (file_exists($pathAltv23g) && !file_exists($errorpathv23g)){$goGetItv23g=file_get_contents($pathAltv23g); echo htmlspecialchars($goGetItv23g); } } ?></div>                         
</div></label>


<label for="v24">
<div class="DaysGone" id="n24" style="<?php  $pathv24="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/24/DaysGoneBg.png";
$errorpathv24a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";
$PreTurnMtoNumv24a=$NextMonth;$TurnMtoNumv24a=date("m",strtotime($PreTurnMtoNumv24a));  
  $gotodatev24a=($YearOfNextMonth."-".$TurnMtoNumv24a."-24");$dayv24a = date('l',strtotime($gotodatev24a));$pathAltv24a="Pic/Calendar/".$dayv24a."/DaysGoneBg.png"; 
if (file_exists($pathv24)){echo "background-image:url(".$pathv24.") ;" ;}else if (file_exists($pathAltv24a) && !file_exists($errorpathv24a)){echo "background-image:url(".$pathAltv24a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na24">24</div>
	<div class="Gold" id="nan24"><?php   $pathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/gold.txt"; if (file_exists($pathv24g)){$goGetItv24g=file_get_contents($pathv24g); echo htmlspecialchars($goGetItv24g);}else{$errorpathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";$PreTurnMtoNumv24g=$NextMonth;$TurnMtoNumv24g=date("m",strtotime($PreTurnMtoNumv24g)); $gotodatev24g=($YearOfNextMonth."-".$TurnMtoNumv24g."-24");$dayv24g = date('l',strtotime($gotodatev24g));$pathAltv24g="Text/Events/".$dayv24g."/gold.txt";if (file_exists($pathAltv24g) && !file_exists($errorpathv24g)){$goGetItv24g=file_get_contents($pathAltv24g); echo htmlspecialchars($goGetItv24g); } } ?></div>
  <div class="Silver" id="nani24"><?php   $pathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/silver.txt"; if (file_exists($pathv24g)){$goGetItv24g=file_get_contents($pathv24g); echo htmlspecialchars($goGetItv24g);}else{$errorpathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";$PreTurnMtoNumv24g=$NextMonth;$TurnMtoNumv24g=date("m",strtotime($PreTurnMtoNumv24g));$gotodatev24g=($YearOfNextMonth."-".$TurnMtoNumv24g."-24");$dayv24g = date('l',strtotime($gotodatev24g));$pathAltv24g="Text/Events/".$dayv24g."/silver.txt";if (file_exists($pathAltv24g) && !file_exists($errorpathv24g)){$goGetItv24g=file_get_contents($pathAltv24g); echo htmlspecialchars($goGetItv24g); } } ?></div>
  <div class="Bronze" id="nanie24"><?php   $pathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/bronze.txt"; if (file_exists($pathv24g)){$goGetItv24g=file_get_contents($pathv24g); echo htmlspecialchars($goGetItv24g);}else{$errorpathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";$PreTurnMtoNumv24g=$NextMonth;$TurnMtoNumv24g=date("m",strtotime($PreTurnMtoNumv24g));$gotodatev24g=($YearOfNextMonth."-".$TurnMtoNumv24g."-24");$dayv24g = date('l',strtotime($gotodatev24g));$pathAltv24g="Text/Events/".$dayv24g."/bronze.txt";if (file_exists($pathAltv24g) && !file_exists($errorpathv24g)){$goGetItv24g=file_get_contents($pathAltv24g); echo htmlspecialchars($goGetItv24g); } } ?></div>
<div class="Platinum" id="naniel24"><?php   $pathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/platinum.txt"; if (file_exists($pathv24g)){$goGetItv24g=file_get_contents($pathv24g); echo htmlspecialchars($goGetItv24g);}else{$errorpathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";$PreTurnMtoNumv24g=$NextMonth;$TurnMtoNumv24g=date("m",strtotime($PreTurnMtoNumv24g));$gotodatev24g=($YearOfNextMonth."-".$TurnMtoNumv24g."-24");$dayv24g = date('l',strtotime($gotodatev24g));$pathAltv24g="Text/Events/".$dayv24g."/platinum.txt";if (file_exists($pathAltv24g) && !file_exists($errorpathv24g)){$goGetItv24g=file_get_contents($pathAltv24g); echo htmlspecialchars($goGetItv24g); } } ?></div>
<div class="Diamond" id="naniele24"><?php   $pathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/diamond.txt"; if (file_exists($pathv24g)){$goGetItv24g=file_get_contents($pathv24g); echo htmlspecialchars($goGetItv24g);}else{$errorpathv24g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24/denied.txt";$PreTurnMtoNumv24g=$NextMonth;$TurnMtoNumv24g=date("m",strtotime($PreTurnMtoNumv24g));$gotodatev24g=($YearOfNextMonth."-".$TurnMtoNumv24g."-24");$dayv24g = date('l',strtotime($gotodatev24g));$pathAltv24g="Text/Events/".$dayv24g."/diamond.txt";if (file_exists($pathAltv24g) && !file_exists($errorpathv24g)){$goGetItv24g=file_get_contents($pathAltv24g); echo htmlspecialchars($goGetItv24g); } } ?></div>                        
</div></label>


<label for="v25">
<div class="DaysGone" id="n25" style="<?php  $pathv25="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/25/DaysGoneBg.png";
$errorpathv25a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";
$PreTurnMtoNumv25a=$NextMonth;$TurnMtoNumv25a=date("m",strtotime($PreTurnMtoNumv25a));  
  $gotodatev25a=($YearOfNextMonth."-".$TurnMtoNumv25a."-25");$dayv25a = date('l',strtotime($gotodatev25a));$pathAltv25a="Pic/Calendar/".$dayv25a."/DaysGoneBg.png"; 
if (file_exists($pathv25)){echo "background-image:url(".$pathv25.") ;" ;}else if (file_exists($pathAltv25a) && !file_exists($errorpathv25a)){echo "background-image:url(".$pathAltv25a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na25">25</div>
	<div class="Gold" id="nan25"><?php   $pathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/gold.txt"; if (file_exists($pathv25g)){$goGetItv25g=file_get_contents($pathv25g); echo htmlspecialchars($goGetItv25g);}else{$errorpathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";$PreTurnMtoNumv25g=$NextMonth;$TurnMtoNumv25g=date("m",strtotime($PreTurnMtoNumv25g)); $gotodatev25g=($YearOfNextMonth."-".$TurnMtoNumv25g."-25");$dayv25g = date('l',strtotime($gotodatev25g));$pathAltv25g="Text/Events/".$dayv25g."/gold.txt";if (file_exists($pathAltv25g) && !file_exists($errorpathv25g)){$goGetItv25g=file_get_contents($pathAltv25g); echo htmlspecialchars($goGetItv25g); } } ?></div>
  <div class="Silver" id="nani25"><?php   $pathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/silver.txt"; if (file_exists($pathv25g)){$goGetItv25g=file_get_contents($pathv25g); echo htmlspecialchars($goGetItv25g);}else{$errorpathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";$PreTurnMtoNumv25g=$NextMonth;$TurnMtoNumv25g=date("m",strtotime($PreTurnMtoNumv25g));$gotodatev25g=($YearOfNextMonth."-".$TurnMtoNumv25g."-25");$dayv25g = date('l',strtotime($gotodatev25g));$pathAltv25g="Text/Events/".$dayv25g."/silver.txt";if (file_exists($pathAltv25g) && !file_exists($errorpathv25g)){$goGetItv25g=file_get_contents($pathAltv25g); echo htmlspecialchars($goGetItv25g); } } ?></div>
  <div class="Bronze" id="nanie25"><?php   $pathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/bronze.txt"; if (file_exists($pathv25g)){$goGetItv25g=file_get_contents($pathv25g); echo htmlspecialchars($goGetItv25g);}else{$errorpathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";$PreTurnMtoNumv25g=$NextMonth;$TurnMtoNumv25g=date("m",strtotime($PreTurnMtoNumv25g));$gotodatev25g=($YearOfNextMonth."-".$TurnMtoNumv25g."-25");$dayv25g = date('l',strtotime($gotodatev25g));$pathAltv25g="Text/Events/".$dayv25g."/bronze.txt";if (file_exists($pathAltv25g) && !file_exists($errorpathv25g)){$goGetItv25g=file_get_contents($pathAltv25g); echo htmlspecialchars($goGetItv25g); } } ?></div>
<div class="Platinum" id="naniel25"><?php   $pathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/platinum.txt"; if (file_exists($pathv25g)){$goGetItv25g=file_get_contents($pathv25g); echo htmlspecialchars($goGetItv25g);}else{$errorpathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";$PreTurnMtoNumv25g=$NextMonth;$TurnMtoNumv25g=date("m",strtotime($PreTurnMtoNumv25g));$gotodatev25g=($YearOfNextMonth."-".$TurnMtoNumv25g."-25");$dayv25g = date('l',strtotime($gotodatev25g));$pathAltv25g="Text/Events/".$dayv25g."/platinum.txt";if (file_exists($pathAltv25g) && !file_exists($errorpathv25g)){$goGetItv25g=file_get_contents($pathAltv25g); echo htmlspecialchars($goGetItv25g); } } ?></div>
<div class="Diamond" id="naniele25"><?php   $pathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/diamond.txt"; if (file_exists($pathv25g)){$goGetItv25g=file_get_contents($pathv25g); echo htmlspecialchars($goGetItv25g);}else{$errorpathv25g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25/denied.txt";$PreTurnMtoNumv25g=$NextMonth;$TurnMtoNumv25g=date("m",strtotime($PreTurnMtoNumv25g));$gotodatev25g=($YearOfNextMonth."-".$TurnMtoNumv25g."-25");$dayv25g = date('l',strtotime($gotodatev25g));$pathAltv25g="Text/Events/".$dayv25g."/diamond.txt";if (file_exists($pathAltv25g) && !file_exists($errorpathv25g)){$goGetItv25g=file_get_contents($pathAltv25g); echo htmlspecialchars($goGetItv25g); } } ?></div>                        
</div></label>


<label for="v26">
<div class="DaysGone" id="n26" style="<?php  $pathv26="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/26/DaysGoneBg.png";
$errorpathv26a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";
$PreTurnMtoNumv26a=$NextMonth;$TurnMtoNumv26a=date("m",strtotime($PreTurnMtoNumv26a));  
  $gotodatev26a=($YearOfNextMonth."-".$TurnMtoNumv26a."-26");$dayv26a = date('l',strtotime($gotodatev26a));$pathAltv26a="Pic/Calendar/".$dayv26a."/DaysGoneBg.png"; 
if (file_exists($pathv26)){echo "background-image:url(".$pathv26.") ;" ;}else if (file_exists($pathAltv26a) && !file_exists($errorpathv26a)){echo "background-image:url(".$pathAltv26a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na26">26</div>
	<div class="Gold" id="nan26"><?php   $pathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/gold.txt"; if (file_exists($pathv26g)){$goGetItv26g=file_get_contents($pathv26g); echo htmlspecialchars($goGetItv26g);}else{$errorpathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";$PreTurnMtoNumv26g=$NextMonth;$TurnMtoNumv26g=date("m",strtotime($PreTurnMtoNumv26g)); $gotodatev26g=($YearOfNextMonth."-".$TurnMtoNumv26g."-26");$dayv26g = date('l',strtotime($gotodatev26g));$pathAltv26g="Text/Events/".$dayv26g."/gold.txt";if (file_exists($pathAltv26g) && !file_exists($errorpathv26g)){$goGetItv26g=file_get_contents($pathAltv26g); echo htmlspecialchars($goGetItv26g); } } ?></div>
  <div class="Silver" id="nani26"><?php   $pathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/silver.txt"; if (file_exists($pathv26g)){$goGetItv26g=file_get_contents($pathv26g); echo htmlspecialchars($goGetItv26g);}else{$errorpathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";$PreTurnMtoNumv26g=$NextMonth;$TurnMtoNumv26g=date("m",strtotime($PreTurnMtoNumv26g));$gotodatev26g=($YearOfNextMonth."-".$TurnMtoNumv26g."-26");$dayv26g = date('l',strtotime($gotodatev26g));$pathAltv26g="Text/Events/".$dayv26g."/silver.txt";if (file_exists($pathAltv26g) && !file_exists($errorpathv26g)){$goGetItv26g=file_get_contents($pathAltv26g); echo htmlspecialchars($goGetItv26g); } } ?></div>
  <div class="Bronze" id="nanie26"><?php   $pathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/bronze.txt"; if (file_exists($pathv26g)){$goGetItv26g=file_get_contents($pathv26g); echo htmlspecialchars($goGetItv26g);}else{$errorpathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";$PreTurnMtoNumv26g=$NextMonth;$TurnMtoNumv26g=date("m",strtotime($PreTurnMtoNumv26g));$gotodatev26g=($YearOfNextMonth."-".$TurnMtoNumv26g."-26");$dayv26g = date('l',strtotime($gotodatev26g));$pathAltv26g="Text/Events/".$dayv26g."/bronze.txt";if (file_exists($pathAltv26g) && !file_exists($errorpathv26g)){$goGetItv26g=file_get_contents($pathAltv26g); echo htmlspecialchars($goGetItv26g); } } ?></div>
<div class="Platinum" id="naniel26"><?php   $pathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/platinum.txt"; if (file_exists($pathv26g)){$goGetItv26g=file_get_contents($pathv26g); echo htmlspecialchars($goGetItv26g);}else{$errorpathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";$PreTurnMtoNumv26g=$NextMonth;$TurnMtoNumv26g=date("m",strtotime($PreTurnMtoNumv26g));$gotodatev26g=($YearOfNextMonth."-".$TurnMtoNumv26g."-26");$dayv26g = date('l',strtotime($gotodatev26g));$pathAltv26g="Text/Events/".$dayv26g."/platinum.txt";if (file_exists($pathAltv26g) && !file_exists($errorpathv26g)){$goGetItv26g=file_get_contents($pathAltv26g); echo htmlspecialchars($goGetItv26g); } } ?></div>
<div class="Diamond" id="naniele26"><?php   $pathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/diamond.txt"; if (file_exists($pathv26g)){$goGetItv26g=file_get_contents($pathv26g); echo htmlspecialchars($goGetItv26g);}else{$errorpathv26g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26/denied.txt";$PreTurnMtoNumv26g=$NextMonth;$TurnMtoNumv26g=date("m",strtotime($PreTurnMtoNumv26g));$gotodatev26g=($YearOfNextMonth."-".$TurnMtoNumv26g."-26");$dayv26g = date('l',strtotime($gotodatev26g));$pathAltv26g="Text/Events/".$dayv26g."/diamond.txt";if (file_exists($pathAltv26g) && !file_exists($errorpathv26g)){$goGetItv26g=file_get_contents($pathAltv26g); echo htmlspecialchars($goGetItv26g); } } ?></div>                        
</div></label>


<label for="v27">
<div class="DaysGone" id="n27" style="<?php  $pathv27="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/27/DaysGoneBg.png";
$errorpathv27a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";
$PreTurnMtoNumv27a=$NextMonth;$TurnMtoNumv27a=date("m",strtotime($PreTurnMtoNumv27a));  
  $gotodatev27a=($YearOfNextMonth."-".$TurnMtoNumv27a."-27");$dayv27a = date('l',strtotime($gotodatev27a));$pathAltv27a="Pic/Calendar/".$dayv27a."/DaysGoneBg.png"; 
if (file_exists($pathv27)){echo "background-image:url(".$pathv27.") ;" ;}else if (file_exists($pathAltv27a) && !file_exists($errorpathv27a)){echo "background-image:url(".$pathAltv27a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na27">27</div>
	<div class="Gold" id="nan27"><?php   $pathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/gold.txt"; if (file_exists($pathv27g)){$goGetItv27g=file_get_contents($pathv27g); echo htmlspecialchars($goGetItv27g);}else{$errorpathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";$PreTurnMtoNumv27g=$NextMonth;$TurnMtoNumv27g=date("m",strtotime($PreTurnMtoNumv27g)); $gotodatev27g=($YearOfNextMonth."-".$TurnMtoNumv27g."-27");$dayv27g = date('l',strtotime($gotodatev27g));$pathAltv27g="Text/Events/".$dayv27g."/gold.txt";if (file_exists($pathAltv27g) && !file_exists($errorpathv27g)){$goGetItv27g=file_get_contents($pathAltv27g); echo htmlspecialchars($goGetItv27g); } } ?></div>
  <div class="Silver" id="nani27"><?php   $pathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/silver.txt"; if (file_exists($pathv27g)){$goGetItv27g=file_get_contents($pathv27g); echo htmlspecialchars($goGetItv27g);}else{$errorpathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";$PreTurnMtoNumv27g=$NextMonth;$TurnMtoNumv27g=date("m",strtotime($PreTurnMtoNumv27g));$gotodatev27g=($YearOfNextMonth."-".$TurnMtoNumv27g."-27");$dayv27g = date('l',strtotime($gotodatev27g));$pathAltv27g="Text/Events/".$dayv27g."/silver.txt";if (file_exists($pathAltv27g) && !file_exists($errorpathv27g)){$goGetItv27g=file_get_contents($pathAltv27g); echo htmlspecialchars($goGetItv27g); } } ?></div>
  <div class="Bronze" id="nanie27"><?php   $pathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/bronze.txt"; if (file_exists($pathv27g)){$goGetItv27g=file_get_contents($pathv27g); echo htmlspecialchars($goGetItv27g);}else{$errorpathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";$PreTurnMtoNumv27g=$NextMonth;$TurnMtoNumv27g=date("m",strtotime($PreTurnMtoNumv27g));$gotodatev27g=($YearOfNextMonth."-".$TurnMtoNumv27g."-27");$dayv27g = date('l',strtotime($gotodatev27g));$pathAltv27g="Text/Events/".$dayv27g."/bronze.txt";if (file_exists($pathAltv27g) && !file_exists($errorpathv27g)){$goGetItv27g=file_get_contents($pathAltv27g); echo htmlspecialchars($goGetItv27g); } } ?></div>
<div class="Platinum" id="naniel27"><?php   $pathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/platinum.txt"; if (file_exists($pathv27g)){$goGetItv27g=file_get_contents($pathv27g); echo htmlspecialchars($goGetItv27g);}else{$errorpathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";$PreTurnMtoNumv27g=$NextMonth;$TurnMtoNumv27g=date("m",strtotime($PreTurnMtoNumv27g));$gotodatev27g=($YearOfNextMonth."-".$TurnMtoNumv27g."-27");$dayv27g = date('l',strtotime($gotodatev27g));$pathAltv27g="Text/Events/".$dayv27g."/platinum.txt";if (file_exists($pathAltv27g) && !file_exists($errorpathv27g)){$goGetItv27g=file_get_contents($pathAltv27g); echo htmlspecialchars($goGetItv27g); } } ?></div>
<div class="Diamond" id="naniele27"><?php   $pathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/diamond.txt"; if (file_exists($pathv27g)){$goGetItv27g=file_get_contents($pathv27g); echo htmlspecialchars($goGetItv27g);}else{$errorpathv27g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27/denied.txt";$PreTurnMtoNumv27g=$NextMonth;$TurnMtoNumv27g=date("m",strtotime($PreTurnMtoNumv27g));$gotodatev27g=($YearOfNextMonth."-".$TurnMtoNumv27g."-27");$dayv27g = date('l',strtotime($gotodatev27g));$pathAltv27g="Text/Events/".$dayv27g."/diamond.txt";if (file_exists($pathAltv27g) && !file_exists($errorpathv27g)){$goGetItv27g=file_get_contents($pathAltv27g); echo htmlspecialchars($goGetItv27g); } } ?></div>                         
</div></label>


<label for="v28">
<div class="DaysGone" id="n28" style="<?php  $pathv28="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/28/DaysGoneBg.png";
$errorpathv28a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";
$PreTurnMtoNumv28a=$NextMonth;$TurnMtoNumv28a=date("m",strtotime($PreTurnMtoNumv28a));  
  $gotodatev28a=($YearOfNextMonth."-".$TurnMtoNumv28a."-28");$dayv28a = date('l',strtotime($gotodatev28a));$pathAltv28a="Pic/Calendar/".$dayv28a."/DaysGoneBg.png"; 
if (file_exists($pathv28)){echo "background-image:url(".$pathv28.") ;" ;}else if (file_exists($pathAltv28a) && !file_exists($errorpathv28a)){echo "background-image:url(".$pathAltv28a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na28">28</div>
	<div class="Gold" id="nan28"><?php   $pathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/gold.txt"; if (file_exists($pathv28g)){$goGetItv28g=file_get_contents($pathv28g); echo htmlspecialchars($goGetItv28g);}else{$errorpathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";$PreTurnMtoNumv28g=$NextMonth;$TurnMtoNumv28g=date("m",strtotime($PreTurnMtoNumv28g)); $gotodatev28g=($YearOfNextMonth."-".$TurnMtoNumv28g."-28");$dayv28g = date('l',strtotime($gotodatev28g));$pathAltv28g="Text/Events/".$dayv28g."/gold.txt";if (file_exists($pathAltv28g) && !file_exists($errorpathv28g)){$goGetItv28g=file_get_contents($pathAltv28g); echo htmlspecialchars($goGetItv28g); } } ?></div>
  <div class="Silver" id="nani28"><?php   $pathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/silver.txt"; if (file_exists($pathv28g)){$goGetItv28g=file_get_contents($pathv28g); echo htmlspecialchars($goGetItv28g);}else{$errorpathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";$PreTurnMtoNumv28g=$NextMonth;$TurnMtoNumv28g=date("m",strtotime($PreTurnMtoNumv28g));$gotodatev28g=($YearOfNextMonth."-".$TurnMtoNumv28g."-28");$dayv28g = date('l',strtotime($gotodatev28g));$pathAltv28g="Text/Events/".$dayv28g."/silver.txt";if (file_exists($pathAltv28g) && !file_exists($errorpathv28g)){$goGetItv28g=file_get_contents($pathAltv28g); echo htmlspecialchars($goGetItv28g); } } ?></div>
  <div class="Bronze" id="nanie28"><?php   $pathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/bronze.txt"; if (file_exists($pathv28g)){$goGetItv28g=file_get_contents($pathv28g); echo htmlspecialchars($goGetItv28g);}else{$errorpathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";$PreTurnMtoNumv28g=$NextMonth;$TurnMtoNumv28g=date("m",strtotime($PreTurnMtoNumv28g));$gotodatev28g=($YearOfNextMonth."-".$TurnMtoNumv28g."-28");$dayv28g = date('l',strtotime($gotodatev28g));$pathAltv28g="Text/Events/".$dayv28g."/bronze.txt";if (file_exists($pathAltv28g) && !file_exists($errorpathv28g)){$goGetItv28g=file_get_contents($pathAltv28g); echo htmlspecialchars($goGetItv28g); } } ?></div>
<div class="Platinum" id="naniel28"><?php   $pathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/platinum.txt"; if (file_exists($pathv28g)){$goGetItv28g=file_get_contents($pathv28g); echo htmlspecialchars($goGetItv28g);}else{$errorpathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";$PreTurnMtoNumv28g=$NextMonth;$TurnMtoNumv28g=date("m",strtotime($PreTurnMtoNumv28g));$gotodatev28g=($YearOfNextMonth."-".$TurnMtoNumv28g."-28");$dayv28g = date('l',strtotime($gotodatev28g));$pathAltv28g="Text/Events/".$dayv28g."/platinum.txt";if (file_exists($pathAltv28g) && !file_exists($errorpathv28g)){$goGetItv28g=file_get_contents($pathAltv28g); echo htmlspecialchars($goGetItv28g); } } ?></div>
<div class="Diamond" id="naniele28"><?php   $pathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/diamond.txt"; if (file_exists($pathv28g)){$goGetItv28g=file_get_contents($pathv28g); echo htmlspecialchars($goGetItv28g);}else{$errorpathv28g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28/denied.txt";$PreTurnMtoNumv28g=$NextMonth;$TurnMtoNumv28g=date("m",strtotime($PreTurnMtoNumv28g));$gotodatev28g=($YearOfNextMonth."-".$TurnMtoNumv28g."-28");$dayv28g = date('l',strtotime($gotodatev28g));$pathAltv28g="Text/Events/".$dayv28g."/diamond.txt";if (file_exists($pathAltv28g) && !file_exists($errorpathv28g)){$goGetItv28g=file_get_contents($pathAltv28g); echo htmlspecialchars($goGetItv28g); } } ?></div>                         
</div></label>


<label for="v29">
<div class="DaysGone" id="n29" style="<?php  $pathv29="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/29/DaysGoneBg.png";
$errorpathv29a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";
$PreTurnMtoNumv29a=$NextMonth;$TurnMtoNumv29a=date("m",strtotime($PreTurnMtoNumv29a));  
  $gotodatev29a=($YearOfNextMonth."-".$TurnMtoNumv29a."-29");$dayv29a = date('l',strtotime($gotodatev29a));$pathAltv29a="Pic/Calendar/".$dayv29a."/DaysGoneBg.png"; 
if (file_exists($pathv29)){echo "background-image:url(".$pathv29.") ;" ;}else if (file_exists($pathAltv29a) && !file_exists($errorpathv29a)){echo "background-image:url(".$pathAltv29a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na29">29</div>
	<div class="Gold" id="nan29"><?php   $pathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/gold.txt"; if (file_exists($pathv29g)){$goGetItv29g=file_get_contents($pathv29g); echo htmlspecialchars($goGetItv29g);}else{$errorpathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";$PreTurnMtoNumv29g=$NextMonth;$TurnMtoNumv29g=date("m",strtotime($PreTurnMtoNumv29g)); $gotodatev29g=($YearOfNextMonth."-".$TurnMtoNumv29g."-29");$dayv29g = date('l',strtotime($gotodatev29g));$pathAltv29g="Text/Events/".$dayv29g."/gold.txt";if (file_exists($pathAltv29g) && !file_exists($errorpathv29g)){$goGetItv29g=file_get_contents($pathAltv29g); echo htmlspecialchars($goGetItv29g); } } ?></div>
  <div class="Silver" id="nani29"><?php   $pathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/silver.txt"; if (file_exists($pathv29g)){$goGetItv29g=file_get_contents($pathv29g); echo htmlspecialchars($goGetItv29g);}else{$errorpathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";$PreTurnMtoNumv29g=$NextMonth;$TurnMtoNumv29g=date("m",strtotime($PreTurnMtoNumv29g));$gotodatev29g=($YearOfNextMonth."-".$TurnMtoNumv29g."-29");$dayv29g = date('l',strtotime($gotodatev29g));$pathAltv29g="Text/Events/".$dayv29g."/silver.txt";if (file_exists($pathAltv29g) && !file_exists($errorpathv29g)){$goGetItv29g=file_get_contents($pathAltv29g); echo htmlspecialchars($goGetItv29g); } } ?></div>
  <div class="Bronze" id="nanie29"><?php   $pathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/bronze.txt"; if (file_exists($pathv29g)){$goGetItv29g=file_get_contents($pathv29g); echo htmlspecialchars($goGetItv29g);}else{$errorpathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";$PreTurnMtoNumv29g=$NextMonth;$TurnMtoNumv29g=date("m",strtotime($PreTurnMtoNumv29g));$gotodatev29g=($YearOfNextMonth."-".$TurnMtoNumv29g."-29");$dayv29g = date('l',strtotime($gotodatev29g));$pathAltv29g="Text/Events/".$dayv29g."/bronze.txt";if (file_exists($pathAltv29g) && !file_exists($errorpathv29g)){$goGetItv29g=file_get_contents($pathAltv29g); echo htmlspecialchars($goGetItv29g); } } ?></div>
<div class="Platinum" id="naniel29"><?php   $pathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/platinum.txt"; if (file_exists($pathv29g)){$goGetItv29g=file_get_contents($pathv29g); echo htmlspecialchars($goGetItv29g);}else{$errorpathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";$PreTurnMtoNumv29g=$NextMonth;$TurnMtoNumv29g=date("m",strtotime($PreTurnMtoNumv29g));$gotodatev29g=($YearOfNextMonth."-".$TurnMtoNumv29g."-29");$dayv29g = date('l',strtotime($gotodatev29g));$pathAltv29g="Text/Events/".$dayv29g."/platinum.txt";if (file_exists($pathAltv29g) && !file_exists($errorpathv29g)){$goGetItv29g=file_get_contents($pathAltv29g); echo htmlspecialchars($goGetItv29g); } } ?></div>
<div class="Diamond" id="naniele29"><?php   $pathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/diamond.txt"; if (file_exists($pathv29g)){$goGetItv29g=file_get_contents($pathv29g); echo htmlspecialchars($goGetItv29g);}else{$errorpathv29g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29/denied.txt";$PreTurnMtoNumv29g=$NextMonth;$TurnMtoNumv29g=date("m",strtotime($PreTurnMtoNumv29g));$gotodatev29g=($YearOfNextMonth."-".$TurnMtoNumv29g."-29");$dayv29g = date('l',strtotime($gotodatev29g));$pathAltv29g="Text/Events/".$dayv29g."/diamond.txt";if (file_exists($pathAltv29g) && !file_exists($errorpathv29g)){$goGetItv29g=file_get_contents($pathAltv29g); echo htmlspecialchars($goGetItv29g); } } ?></div>                       
</div></label>


<label for="v30">
<div class="DaysGone" id="n30" style="<?php  $pathv30="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/30/DaysGoneBg.png";
$errorpathv30a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";
$PreTurnMtoNumv30a=$NextMonth;$TurnMtoNumv30a=date("m",strtotime($PreTurnMtoNumv30a));  
  $gotodatev30a=($YearOfNextMonth."-".$TurnMtoNumv30a."-30");$dayv30a = date('l',strtotime($gotodatev30a));$pathAltv30a="Pic/Calendar/".$dayv30a."/DaysGoneBg.png"; 
if (file_exists($pathv30)){echo "background-image:url(".$pathv30.") ;" ;}else if (file_exists($pathAltv30a) && !file_exists($errorpathv30a)){echo "background-image:url(".$pathAltv30a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na30">30</div>
	<div class="Gold" id="nan30"><?php   $pathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/gold.txt"; if (file_exists($pathv30g)){$goGetItv30g=file_get_contents($pathv30g); echo htmlspecialchars($goGetItv30g);}else{$errorpathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";$PreTurnMtoNumv30g=$NextMonth;$TurnMtoNumv30g=date("m",strtotime($PreTurnMtoNumv30g)); $gotodatev30g=($YearOfNextMonth."-".$TurnMtoNumv30g."-30");$dayv30g = date('l',strtotime($gotodatev30g));$pathAltv30g="Text/Events/".$dayv30g."/gold.txt";if (file_exists($pathAltv30g) && !file_exists($errorpathv30g)){$goGetItv30g=file_get_contents($pathAltv30g); echo htmlspecialchars($goGetItv30g); } } ?></div>
  <div class="Silver" id="nani30"><?php   $pathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/silver.txt"; if (file_exists($pathv30g)){$goGetItv30g=file_get_contents($pathv30g); echo htmlspecialchars($goGetItv30g);}else{$errorpathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";$PreTurnMtoNumv30g=$NextMonth;$TurnMtoNumv30g=date("m",strtotime($PreTurnMtoNumv30g));$gotodatev30g=($YearOfNextMonth."-".$TurnMtoNumv30g."-30");$dayv30g = date('l',strtotime($gotodatev30g));$pathAltv30g="Text/Events/".$dayv30g."/silver.txt";if (file_exists($pathAltv30g) && !file_exists($errorpathv30g)){$goGetItv30g=file_get_contents($pathAltv30g); echo htmlspecialchars($goGetItv30g); } } ?></div>
  <div class="Bronze" id="nanie30"><?php   $pathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/bronze.txt"; if (file_exists($pathv30g)){$goGetItv30g=file_get_contents($pathv30g); echo htmlspecialchars($goGetItv30g);}else{$errorpathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";$PreTurnMtoNumv30g=$NextMonth;$TurnMtoNumv30g=date("m",strtotime($PreTurnMtoNumv30g));$gotodatev30g=($YearOfNextMonth."-".$TurnMtoNumv30g."-30");$dayv30g = date('l',strtotime($gotodatev30g));$pathAltv30g="Text/Events/".$dayv30g."/bronze.txt";if (file_exists($pathAltv30g) && !file_exists($errorpathv30g)){$goGetItv30g=file_get_contents($pathAltv30g); echo htmlspecialchars($goGetItv30g); } } ?></div>
<div class="Platinum" id="naniel30"><?php   $pathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/platinum.txt"; if (file_exists($pathv30g)){$goGetItv30g=file_get_contents($pathv30g); echo htmlspecialchars($goGetItv30g);}else{$errorpathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";$PreTurnMtoNumv30g=$NextMonth;$TurnMtoNumv30g=date("m",strtotime($PreTurnMtoNumv30g));$gotodatev30g=($YearOfNextMonth."-".$TurnMtoNumv30g."-30");$dayv30g = date('l',strtotime($gotodatev30g));$pathAltv30g="Text/Events/".$dayv30g."/platinum.txt";if (file_exists($pathAltv30g) && !file_exists($errorpathv30g)){$goGetItv30g=file_get_contents($pathAltv30g); echo htmlspecialchars($goGetItv30g); } } ?></div>
<div class="Diamond" id="naniele30"><?php   $pathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/diamond.txt"; if (file_exists($pathv30g)){$goGetItv30g=file_get_contents($pathv30g); echo htmlspecialchars($goGetItv30g);}else{$errorpathv30g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30/denied.txt";$PreTurnMtoNumv30g=$NextMonth;$TurnMtoNumv30g=date("m",strtotime($PreTurnMtoNumv30g));$gotodatev30g=($YearOfNextMonth."-".$TurnMtoNumv30g."-30");$dayv30g = date('l',strtotime($gotodatev30g));$pathAltv30g="Text/Events/".$dayv30g."/diamond.txt";if (file_exists($pathAltv30g) && !file_exists($errorpathv30g)){$goGetItv30g=file_get_contents($pathAltv30g); echo htmlspecialchars($goGetItv30g); } } ?></div>                       
</div></label>


<label for="v31">
<div class="DaysGone" id="n31" style="<?php  $pathv31="Pic/Calendar/".$YearOfNextMonth."/".$NextMonth."/31/DaysGoneBg.png";
$errorpathv31a="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";
$PreTurnMtoNumv31a=$NextMonth;$TurnMtoNumv31a=date("m",strtotime($PreTurnMtoNumv31a));  
  $gotodatev31a=($YearOfNextMonth."-".$TurnMtoNumv31a."-31");$dayv31a = date('l',strtotime($gotodatev31a));$pathAltv31a="Pic/Calendar/".$dayv31a."/DaysGoneBg.png"; 
if (file_exists($pathv31)){echo "background-image:url(".$pathv31.") ;" ;}else if (file_exists($pathAltv31a) && !file_exists($errorpathv31a)){echo "background-image:url(".$pathAltv31a.") ;";}else{echo '';};  ?>      ">
	<div class="DayTitle"  id="na31">31</div>
	<div class="Gold" id="nan31"><?php   $pathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/gold.txt"; if (file_exists($pathv31g)){$goGetItv31g=file_get_contents($pathv31g); echo htmlspecialchars($goGetItv31g);}else{$errorpathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";$PreTurnMtoNumv31g=$NextMonth;$TurnMtoNumv31g=date("m",strtotime($PreTurnMtoNumv31g)); $gotodatev31g=($YearOfNextMonth."-".$TurnMtoNumv31g."-31");$dayv31g = date('l',strtotime($gotodatev31g));$pathAltv31g="Text/Events/".$dayv31g."/gold.txt";if (file_exists($pathAltv31g) && !file_exists($errorpathv31g)){$goGetItv31g=file_get_contents($pathAltv31g); echo htmlspecialchars($goGetItv31g); } } ?></div>
  <div class="Silver" id="nani31"><?php   $pathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/silver.txt"; if (file_exists($pathv31g)){$goGetItv31g=file_get_contents($pathv31g); echo htmlspecialchars($goGetItv31g);}else{$errorpathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";$PreTurnMtoNumv31g=$NextMonth;$TurnMtoNumv31g=date("m",strtotime($PreTurnMtoNumv31g));$gotodatev31g=($YearOfNextMonth."-".$TurnMtoNumv31g."-31");$dayv31g = date('l',strtotime($gotodatev31g));$pathAltv31g="Text/Events/".$dayv31g."/silver.txt";if (file_exists($pathAltv31g) && !file_exists($errorpathv31g)){$goGetItv31g=file_get_contents($pathAltv31g); echo htmlspecialchars($goGetItv31g); } } ?></div>
  <div class="Bronze" id="nanie31"><?php   $pathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/bronze.txt"; if (file_exists($pathv31g)){$goGetItv31g=file_get_contents($pathv31g); echo htmlspecialchars($goGetItv31g);}else{$errorpathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";$PreTurnMtoNumv31g=$NextMonth;$TurnMtoNumv31g=date("m",strtotime($PreTurnMtoNumv31g));$gotodatev31g=($YearOfNextMonth."-".$TurnMtoNumv31g."-31");$dayv31g = date('l',strtotime($gotodatev31g));$pathAltv31g="Text/Events/".$dayv31g."/bronze.txt";if (file_exists($pathAltv31g) && !file_exists($errorpathv31g)){$goGetItv31g=file_get_contents($pathAltv31g); echo htmlspecialchars($goGetItv31g); } } ?></div>
<div class="Platinum" id="naniel31"><?php   $pathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/platinum.txt"; if (file_exists($pathv31g)){$goGetItv31g=file_get_contents($pathv31g); echo htmlspecialchars($goGetItv31g);}else{$errorpathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";$PreTurnMtoNumv31g=$NextMonth;$TurnMtoNumv31g=date("m",strtotime($PreTurnMtoNumv31g));$gotodatev31g=($YearOfNextMonth."-".$TurnMtoNumv31g."-31");$dayv31g = date('l',strtotime($gotodatev31g));$pathAltv31g="Text/Events/".$dayv31g."/platinum.txt";if (file_exists($pathAltv31g) && !file_exists($errorpathv31g)){$goGetItv31g=file_get_contents($pathAltv31g); echo htmlspecialchars($goGetItv31g); } } ?></div>
<div class="Diamond" id="naniele31"><?php   $pathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/diamond.txt"; if (file_exists($pathv31g)){$goGetItv31g=file_get_contents($pathv31g); echo htmlspecialchars($goGetItv31g);}else{$errorpathv31g="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31/denied.txt";$PreTurnMtoNumv31g=$NextMonth;$TurnMtoNumv31g=date("m",strtotime($PreTurnMtoNumv31g));$gotodatev31g=($YearOfNextMonth."-".$TurnMtoNumv31g."-31");$dayv31g = date('l',strtotime($gotodatev31g));$pathAltv31g="Text/Events/".$dayv31g."/diamond.txt";if (file_exists($pathAltv31g) && !file_exists($errorpathv31g)){$goGetItv31g=file_get_contents($pathAltv31g); echo htmlspecialchars($goGetItv31g); } } ?></div>                       
</div></label>


</div><!--MarginTop-->






</div><!--FlexBoxCallendar-->
 
<div id="inputWrapper">
  
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r1"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r2"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r3"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r4"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r5"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r6"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r7"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r8"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r9"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r10"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r11"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r12"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r13"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r14"/> 
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r15"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r16"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r17"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r18"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r19"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r20"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r21"/>   
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r22"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r23"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r24"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r25"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r26"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r27"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r28"/>  
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r29"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r30"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="r31"/>




<!--======================================NEXT MONTH==========================================-->


<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v1"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v2"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v3"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v4"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v5"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v6"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v7"/>  
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v8"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v9"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v10"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v11"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v12"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v13"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v14"/>    
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v15"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v16"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v17"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v18"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v19"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v20"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v21"/>  
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v22"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v23"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v24"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v25"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v26"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v27"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v28"/> 
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v29"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v30"/>
<input type="radio" class="hideRadio" name="ActiveDay" onclick="radioClick(this)" id="v31"/>

          
</div><!--InputWrapper-->


<div id="wrapperEventInfo">
 
  <div id="q1"  class="hideAlsoDat">

<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/1/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/1/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/1/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/1/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/1/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/1/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/1/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/1/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/1/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/1/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/1/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>
                

</div>

  <div id="q2"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/2/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/2/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/2/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/2/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/2/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/2/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/2/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/2/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/2/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/2/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/2/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


</div>


  <div id="q3"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/3/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/3/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/3/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/3/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/3/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/3/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/3/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/3/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/3/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/3/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/3/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


  </div>
  <div id="q4"  class="hideAlsoDat">        
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/4/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/4/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/4/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/4/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/4/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/4/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/4/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/4/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/4/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/4/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo" >
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/4/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>
  </div>
  <div id="q5"  class="hideAlsoDat" >
<div class="Section1DivSub" >
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne"  style="display:block;min-height:5em">
<?php $path="Text/Events/".$Year."/".$Month."/5/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/5/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/5/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/5/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/5/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/5/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/5/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/5/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/5/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/5/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/5/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="q6"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/6/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/6/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/6/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/6/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/6/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/6/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/6/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/6/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/6/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/6/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/6/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="q7"  class="hideAlsoDat">

<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/7/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/7/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/7/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/7/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/7/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/7/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/7/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/7/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/7/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/7/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/7/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="q8"  class="hideAlsoDat"> 
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/8/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/8/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/8/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/8/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/8/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/8/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/8/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/8/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/8/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/8/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/8/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

         </div>
  <div id="q9"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/9/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/9/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/9/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/9/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/9/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/9/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/9/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/9/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/9/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/9/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/9/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div> 
  <div id="q10" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/10/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/10/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/10/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/10/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/10/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/10/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/10/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/10/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/10/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/10/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/10/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q11" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/11/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/11/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/11/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/11/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/11/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/11/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/11/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/11/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/11/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/11/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/11/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q12" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/12/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/12/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/12/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/12/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/12/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/12/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/12/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/12/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/12/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/12/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/12/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q13" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/13/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/13/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/13/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/13/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/13/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/13/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/13/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/13/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/13/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/13/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/13/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q14" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/14/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/14/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/14/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/14/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/14/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/14/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/14/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/14/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/14/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/14/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/14/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q15" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/15/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/15/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/15/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/15/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/15/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/15/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/15/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/15/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/15/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/15/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/15/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q16" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/16/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/16/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/16/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/16/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/16/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/16/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/16/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/16/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/16/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/16/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/16/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="q17" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/17/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/17/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/17/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/17/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/17/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/17/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/17/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/17/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/17/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/17/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/17/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q18" class="hideAlsoDat"><div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/18/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/18/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/18/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/18/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/18/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/18/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/18/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/18/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/18/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/18/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/18/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>        </div> 
  <div id="q19" class="hideAlsoDat"> 
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/19/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/19/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/19/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/19/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/19/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/19/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/19/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/19/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/19/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/19/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/19/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


         </div>
  <div id="q20" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/20/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/20/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/20/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/20/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/20/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/20/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/20/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/20/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/20/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/20/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/20/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>
          </div>
  <div id="q21" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/21/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/21/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/21/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/21/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/21/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/21/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/21/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/21/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/21/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/21/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/21/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="q22" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/22/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/22/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/22/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/22/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/22/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/22/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/22/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/22/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/22/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/22/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/22/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q23" class="hideAlsoDat"><div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/23/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/23/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/23/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/23/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/23/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/23/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/23/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/23/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/23/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/23/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/23/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>        </div>
  <div id="q24" class="hideAlsoDat">
    <div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/24/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/24/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/24/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/24/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/24/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/24/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/24/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/24/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/24/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/24/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/24/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>        
    </div>
  <div id="q25" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/25/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/25/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/25/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/25/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/25/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/25/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/25/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/25/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/25/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/25/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/25/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="q26" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/26/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/26/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/26/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/26/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/26/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/26/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/26/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/26/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/26/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/26/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/26/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q27" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/27/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/27/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/27/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/27/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/27/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/27/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/27/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/27/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/27/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/27/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/27/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div> 
  <div id="q28" class="hideAlsoDat">
    <div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/28/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/28/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/28/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/28/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/28/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/28/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/28/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/28/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/28/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/28/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/28/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>
                            </div>
  <div id="q29" class="hideAlsoDat"><div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/29/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/29/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/29/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/29/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/29/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/29/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/29/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/29/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/29/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/29/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/29/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>        </div>
  <div id="q30" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/30/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/30/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/30/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/30/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/30/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/30/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/30/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/30/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/30/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/30/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/30/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="q31" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php $path="Text/Events/".$Year."/".$Month."/31/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php $path="Text/Events/".$Year."/".$Month."/31/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h2 class="EventTwo">
<?php $path="Text/Events/".$Year."/".$Month."/31/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php $path="Text/Events/".$Year."/".$Month."/31/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php $path="Text/Events/".$Year."/".$Month."/31/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php $path="Text/Events/".$Year."/".$Month."/31/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php $path="Text/Events/".$Year."/".$Month."/31/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php $path="Text/Events/".$Year."/".$Month."/31/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php $path="Text/Events/".$Year."/".$Month."/31/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php $path="Text/Events/".$Year."/".$Month."/31/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
$path='Text/Events/'.$Year.'/'.$Month.'/31/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>

  
  <div id="a1"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/1/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/1/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>








  	       </div>
  <div id="a2"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/2/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/2/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a3"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/3/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/3/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a4"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/4/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/4/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a5"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/5/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/5/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a6"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/6/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/6/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a7"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/7/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/7/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a8"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 8/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/ 8/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a9"  class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 9/p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/ 9/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div> 
  <div id="a10" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/10 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/10/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a11" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 11/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 11/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/11 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/11/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a12" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/12 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/12/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a13" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/13 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/13/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a14" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 14/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 14/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 14/h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 14/p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/14 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/14/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a15" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/15 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/15/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a16" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/16 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/16/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a17" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 17/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 17/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 17/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/17 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/17/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="a18" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/18 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/18/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div> 
  <div id="a19" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 19/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/19 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/19/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a20" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 20/p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/20 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/20/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a21" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 21/p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 21/p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/21 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/21/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a22" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/22 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/22/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a23" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 23/h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/23 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/23/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="a24" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/24 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/24/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a25" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/25 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/25/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a26" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/26 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/26/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>

          </div>
  <div id="a27" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/27 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/27/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div> 
  <div id="a28" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/28 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/28/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="a29" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText" >
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/29 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/29/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>



          </div>
  <div id="a30" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/ 30/h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/30 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/30/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>
  <div id="a31" class="hideAlsoDat">
<div class="Section1DivSub">
  <div class="SectionText">
  <div class="WrapToFit"> 

    <h1 class="EventOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /h1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>





  </h1>
    <p class="ContentOne">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /p1.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </p>


    <h2 class="EventTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /h2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>

    </h2>
    <p class="ContentTwo">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /p2.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?> 
    </p>


    <h3 class="EventThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /h3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h3>
    <p class="ContentThree">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /p3.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h4 class="EventFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /h4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h4>
    <p class="ContentFour">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /p4.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>


    <h5 class="EventFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /h5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </h5>
    <p class="ContentFive">
<?php   if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path="Text/Events/".$YearOfNextMonth."/".$NextMonth."/31 /p5.txt";  if (file_exists($path)){$goGetIt=file_get_contents($path); echo nl2br(htmlspecialchars($goGetIt));}  ?>
    </p>
            </div>


                </div><!--SectionText -->
                <div class="SectionVideo">
                        <div class="videoEvent">
<?php 
if ($Month=="December"){$YearOfNextMonth=gmdate("Y",strtotime('+1year'));}else{$YearOfNextMonth=$Year;};
$path='Text/Events/'.$YearOfNextMonth.'/'.$NextMonth.'/31/tricky.txt';
if (file_exists($path)){
  $goGetIt=file_get_contents($path);
echo '<iframe  src="'. $goGetIt  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         } 
                         ?>
                        </div>
                      </div><!--Slide1Position -->
                      
                    </div>


          </div>


</div><!-- wrapper info-->

<div id="BlockWrapper">
<div class="SectionImage">
											<div class="slideshow-container" >

 <div class="SliderDiv1">
   <div class="numbertext">1 / 5</div>
   <div class="imgHeight" id="replica1"></div>
   <div class="text" id="replicaText1"></div>
 </div>
 <div class="SliderDiv1">
  <div class="numbertext">2 / 5</div>
   <div class="imgHeight" id="replica2"></div>
   <div class="text" id="replicaText2"></div>
 </div>
 <div class="SliderDiv1">
  <div class="numbertext">3 / 5</div>
  <div class="imgHeight" id="replica3"></div>
  <div class="text" id="replicaText3"></div>
 </div>
 <div class="SliderDiv1">
  <div class="numbertext">4 / 5</div>
  <div class="imgHeight" id="replica4"> </div>
  <div class="text" id="replicaText4"></div>
 </div>
 <div class="SliderDiv1">
  <div class="numbertext">5 / 5</div>
  <div class="imgHeight" id="replica5"></div>
  <div class="text" id="replicaText5"></div>
 </div>

	<a class="prev" onclick="howtriggers1(-1)">&#10094;</a>
	<a class="next" onclick="howtriggers1(1)">&#10095;</a>
	<div class="SliderQuote"><p></p></div>

													</div>
					</div><!--SectionImage -->



	</div><!--Block Wrapper-->
<div style="position:fixed;bottom:1em;left:1em;font-size:3em" id="meter"></div>


</div><!--WholePageDiv -->
</div><!--WrapperFromBodyToWholePageDiv -->

<script>
  var PreDiamondGlow=document.getElementsByClassName('Diamond');
  for (i=0;i<PreDiamondGlow.length;i++){
    if (PreDiamondGlow[i].clientHeight!==0){
      PreDiamondGlow[i].style.boxShadow="0px 10px 25px 10px #DEC6DF ";
    }
  }
  function NextMonthGlow(){
  var PreDiamondGlow=document.getElementsByClassName('Diamond');
  for (i=0;i<PreDiamondGlow.length;i++){
    if (PreDiamondGlow[i].clientHeight!==0){
      PreDiamondGlow[i].style.boxShadow="0px 10px 25px 10px #DEC6DF ";
    }
  }


  }

</script>



<script>
  
  function getScroll(){
  
var yas=document.scrollingElement.scrollTop;
  var z=yas;
  document.getElementById('meter').innerHTML=z;

if (z>=0){
	document.getElementById('navbar').style.display="block";
  document.getElementById("DaysName").style.position="fixed"; 
   document.getElementById("DaysName").style.marginTop="0em";  
  } 
if (z>=1105){
	document.getElementById('navbar').style.display="block";
  document.getElementById("DaysName").style.position="absolute";
  document.getElementById("DaysName").style.marginTop="70.3em"; 

}
if (z>=1210){
document.getElementById('navbar').style.display="none";

}

}

</script>


<script>


function Forward(){

  document.getElementById('getLostToo').style.visibility="hidden";
 document.getElementById('getLost').style.visibility="initial";

  document.getElementById('Month').style.display="none";
  document.getElementById('CurrentMonth').style.display="none";
      document.getElementById('UpcomingMonth').style.display="block";
  document.getElementById('NextMonth').style.display="block";
 

}

function Back(){
  document.getElementById('getLostToo').style.visibility="initial";
  document.getElementById('getLost').style.visibility="hidden";


      document.getElementById('Month').style.display="block";
  document.getElementById('CurrentMonth').style.display="block";
   
    document.getElementById('UpcomingMonth').style.display="none";
  document.getElementById('NextMonth').style.display="none";
  



}



/*Get day to put effect on current day div */
	var effect=new Array();
effect [0]="Sunday";
effect [1]="Monday";
effect [2]="Tuesday";
effect [3]="Wednesday";
effect [4]="Thursday";
effect [5]="Friday";
effect [6]="Saturday";
var effectDay=new Date();
var effectDayBankai=effect[effectDay.getUTCDay()];


document.getElementById(effectDayBankai).classList.add('qwer');

</script>

<script>



/*get Current Month*/
 var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";

  var d = new Date();
  var n = month[d.getUTCMonth()];
var y=d.getFullYear();
  document.getElementById("Month").innerHTML = n;
/*get Next Month*/
var MonthPlusOne=d.getUTCMonth()+1;
var NextMonthReady=month[MonthPlusOne];
document.getElementById("NextMonth").innerHTML = NextMonthReady;


/*WE GOT THE FIRST DAY OF THE CURRENT MONTH*/

var Xmas95 = new Date(n+' 1, 2023');
var tested=new Array();
tested [0]="Sunday";
tested [1]="Monday";
tested [2]="Tuesday";
tested [3]="Wednesday";
tested [4]="Thursday";
tested [5]="Friday";
tested [6]="Saturday";
var weekday =tested[Xmas95.getDay()];

/*GET NEXTS MONTH FIRST DAY*/

var WorkPlease=new Date(NextMonthReady+' 1, 2020');
var qwerqwer =tested[WorkPlease.getDay()];








/* lets push the first div to fix the first day of the month Mond tuest e.t.c*/
var FirstDivFirstMonth=document.getElementById('d1');
if (weekday=="Monday"){
FirstDivFirstMonth.style.marginLeft="0.5em";
}
if (weekday=="Tuesday"){
FirstDivFirstMonth.style.marginLeft="13.9em";
}
if (weekday=="Wednesday"){
FirstDivFirstMonth.style.marginLeft="27.2em";
}
if (weekday=="Thursday"){
FirstDivFirstMonth.style.marginLeft="40.5em";
}
if (weekday=="Friday"){
FirstDivFirstMonth.style.marginLeft="53.8em";
}
if (weekday=="Saturday"){
FirstDivFirstMonth.style.marginLeft="67.15em";
}
if (weekday=="Sunday"){
FirstDivFirstMonth.style.marginLeft="80.50em";
}


/* lets push the first div to fix the first day of the NEXT MONTH e.t.c*/
var FirstDivNextMonth=document.getElementById('n1');
if (qwerqwer=="Monday"){
FirstDivNextMonth.style.marginLeft="0.5em";
}
if (qwerqwer=="Tuesday"){
FirstDivNextMonth.style.marginLeft="13.9em";
}
if (qwerqwer=="Wednesday"){
FirstDivNextMonth.style.marginLeft="27.2em";
}
if (qwerqwer=="Thursday"){
FirstDivNextMonth.style.marginLeft="40.5em";
}
if (qwerqwer=="Friday"){
FirstDivNextMonth.style.marginLeft="53.8em";
}
if (qwerqwer=="Saturday"){
FirstDivNextMonth.style.marginLeft="67.15em";
}
if (qwerqwer=="Sunday"){
FirstDivNextMonth.style.marginLeft="80.50em";
}


/*check if last days 28 till 31 exist if not turning off the divs display of them*/
var checking31=new Date(n+' 31,'+y);
if (checking31=="Invalid Date" || month[checking31.getMonth()] != n){
	document.getElementById('d31').style.display="none";
}


var checking30=new Date(n+' 30,'+y);
if (checking31=="Invalid Date" || month[checking30.getMonth()] != n){
	document.getElementById('d30').style.display="none";
}
var checking29=new Date(n+' 29,'+y);
if (checking31=="Invalid Date" || month[checking29.getMonth()] != n){
	document.getElementById('d29').style.display="none";
}
var checking28=new Date(n+' 28,'+y);
if (checking31=="Invalid Date" || month[checking28.getMonth()] != n){
	document.getElementById('d28').style.display="none";
}

  /*    get current day so we can make green the div on load of the page    */
var datetold=new Date();
var CurrentDayNumber=datetold.getUTCDate();
var inputWithDayNumber="r"+CurrentDayNumber;
document.getElementById(inputWithDayNumber).checked="true";

/*click onload the div to active the xml info of it*/
var createDivIdOfCurrentDay="d"+CurrentDayNumber;
document.getElementById(createDivIdOfCurrentDay).click();




/*          after getting the day use id of input to make the two ids of divs.onload colorize                */
var DeleteR=inputWithDayNumber.substr(1);
var OuterDayDiv="d"+DeleteR;
var TopDayDiv="da"+DeleteR;
var outa=document.getElementById(OuterDayDiv);
var topa=document.getElementById(TopDayDiv);
outa.style.borderColor="green";
topa.style.borderColor="green";
topa.style.backgroundColor="green";

var createIdOfInfo="q"+DeleteR;
var HideAllTheTabs=document.getElementsByClassName("hideAlsoDat");
for (i=0;i<HideAllTheTabs.length;i++){
HideAllTheTabs[i].style.display="none";
}

document.getElementById(createIdOfInfo).style.display="block";


var inputs=document.getElementsByName("ActiveDay");





































function radioClick(ele){

 /*Get the id of input and turn it into the id of both divs...outer div and top div of dates*/ 
var ouf=ele.id;
var what=ouf.charAt(0);












if (what=="v"){
var DeleteR=ouf.substr(1);
var OuterDayDiv="n"+DeleteR;
var TopDayDiv="na"+DeleteR;

/*Reset all the previous green selected days  */
  var DaysGone=document.getElementsByClassName("DaysGone");

for (i=0;i<DaysGone.length;i++){
DaysGone[i].style.borderColor="rgb(91,0,0)";
                }

var DayTitle=document.getElementsByClassName("DayTitle");

for (i=0;i<DayTitle.length;i++){
DayTitle[i].style.borderColor="rgb(91,0,0)";
DayTitle[i].style.backgroundColor="rgb(91,0,0)";
                }


/*Set the new day*/
var outa=document.getElementById(OuterDayDiv);
var topa=document.getElementById(TopDayDiv);
outa.style.borderColor="green";
topa.style.borderColor="green";
topa.style.backgroundColor="green";

var createIdOfInfo="a"+DeleteR;
var HideAllTheTabs=document.getElementsByClassName("hideAlsoDat");
for (i=0;i<HideAllTheTabs.length;i++){
HideAllTheTabs[i].style.display="none";
}
document.getElementById(createIdOfInfo).style.display="block";
var GiveMonthToAjax=document.getElementById('NextMonth').innerHTML;

var GetMonthFirst=document.getElementById('Month').innerHTML;
if (GetMonthFirst=="December" && GiveMonthToAjax=="January"){
var PrepareYear=new Date();
var BeforePlusss=PrepareYear.getFullYear();
var Year=BeforePlusss+1;
}else{
var PrepareYear=new Date();
var Year=PrepareYear.getFullYear();
}



var denthatrelathw=DeleteR;
var trickDatShit=denthatrelathw-=1;
var recoverit=trickDatShit+=1;
var nowaddit=recoverit+=30;
var mercy=nowaddit;

var EventOne=document.getElementsByClassName('EventOne');
var Confusin=document.getElementsByClassName('Section1DivSub');
var Imagess=document.getElementById('BlockWrapper');
var wrapper=document.getElementById('wrapperEventInfo');
if (EventOne[mercy].clientHeight=="0"){
EventOne[mercy].style.display="none";Confusin[mercy].style.display="none";Imagess.style.display="none";
wrapper.style.visibility="hidden";
}else{
Imagess.style.display="block";
wrapper.style.visibility="visible";
};




}






if (what=="r"){

var DeleteR=ouf.substr(1);






var OuterDayDiv="d"+DeleteR;
var TopDayDiv="da"+DeleteR;

/*Reset all the previous green selected days  */
  var DaysGone=document.getElementsByClassName("DaysGone");

for (i=0;i<DaysGone.length;i++){
DaysGone[i].style.borderColor="rgb(91,0,0)";
								}

var DayTitle=document.getElementsByClassName("DayTitle");

for (i=0;i<DayTitle.length;i++){
DayTitle[i].style.borderColor="rgb(91,0,0)";
DayTitle[i].style.backgroundColor="rgb(91,0,0)";
								}


/*Set the new day*/
var outa=document.getElementById(OuterDayDiv);
var topa=document.getElementById(TopDayDiv);
outa.style.borderColor="green";
topa.style.borderColor="green";
topa.style.backgroundColor="green";

var createIdOfInfo="q"+DeleteR;
var HideAllTheTabs=document.getElementsByClassName("hideAlsoDat");
for (i=0;i<HideAllTheTabs.length;i++){
HideAllTheTabs[i].style.display="none";
}

document.getElementById(createIdOfInfo).style.display="block";


var different=DeleteR;
var mercy=different-1;

var EventOne=document.getElementsByClassName('EventOne');
var Confusin=document.getElementsByClassName('Section1DivSub');
var Imagess=document.getElementById('BlockWrapper');
var wrapper=document.getElementById('wrapperEventInfo');
if (EventOne[mercy].clientHeight=="0"){
EventOne[mercy].style.display="none";Confusin[mercy].style.display="none";Imagess.style.display="none";
wrapper.style.visibility="hidden";
}else{
Imagess.style.display="block";
wrapper.style.visibility="visible";
};


var GiveMonthToAjax=document.getElementById('Month').innerHTML;
var PrepareYear=new Date();
var Year=PrepareYear.getFullYear();
}
/*======================================     Image1 +Zoom    ======================*/

var replicaImg1=document.getElementById('replica1').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/1SlideS1.png"  style="width:100%" onclick="OpenZoom1()"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';

var replicaZoomImg1=document.getElementById('replicaZoom1').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/1SlideS1.png"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';

  /*======================================     Image2 +Zoom    ======================*/
 
var replicaImg2=document.getElementById('replica2').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/2SlideS1.png"  style="width:100%" onclick="OpenZoom1()" onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
var replicaZoomImg2=document.getElementById('replicaZoom2').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/2SlideS1.png"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
/*======================================     Image3 +Zoom    ======================*/

var replicaImg3=document.getElementById('replica3').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/3SlideS1.png"  style="width:100%" onclick="OpenZoom1()" onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
var replicaZoomImg3=document.getElementById('replicaZoom3').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/3SlideS1.png"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';

/*======================================     Image4 +Zoom    ======================*/

var replicaImg4=document.getElementById('replica4').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/4SlideS1.png"   style="width:100%" onclick="OpenZoom1()" onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
var replicaZoomImg4=document.getElementById('replicaZoom4').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/4SlideS1.png"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
/*======================================     Image5  +Zoom   ======================*/

var replicaImg5=document.getElementById('replica5').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/5SlideS1.png"  style="width:100%" onclick="OpenZoom1()" onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
var replicaZoomImg5=document.getElementById('replicaZoom5').innerHTML=
'<img src="Pic/Calendar/'+Year+'/'+GiveMonthToAjax+'/'+DeleteR+'/5SlideS1.png"  onerror="this.onerror=null; this.src='+"'"+'Pic/Calendar/NoPicture.png'+"'"+'"  >   ';
/*======================================     ImgTitle1     ======================*/

var imgTitle1=new XMLHttpRequest();
imgTitle1.open("GET", "Text/Events/"+Year+"/"+GiveMonthToAjax+"/"+DeleteR+"/ImgTitle1.txt", false);
imgTitle1.send();
if (imgTitle1.status==404){malakasimgTitle1=""}else{
var malakasimgTitle1=imgTitle1.responseText;}

var CorrectItimgTitle1= malakasimgTitle1.replace("<","&lt");
var grrimgTitle1=document.getElementById("replicaText1");
grrimgTitle1.innerHTML = CorrectItimgTitle1;
var grrimgTitle1zoom=document.getElementById('replicaZoom1Text');
grrimgTitle1zoom.innerHTML=CorrectItimgTitle1;
/*======================================     ImgTitle2     ======================*/

var imgTitle2=new XMLHttpRequest();
imgTitle2.open("GET", "Text/Events/"+Year+"/"+GiveMonthToAjax+"/"+DeleteR+"/ImgTitle2.txt", false);
imgTitle2.send();
if (imgTitle2.status==404){malakasimgTitle2=""}else{
var malakasimgTitle2=imgTitle2.responseText;}

var CorrectItimgTitle2= malakasimgTitle2.replace("<","&lt");
var grrimgTitle2=document.getElementById("replicaText2");
grrimgTitle2.innerHTML = CorrectItimgTitle2;
var grrimgTitle2zoom=document.getElementById('replicaZoom2Text');
grrimgTitle2zoom.innerHTML=CorrectItimgTitle2;
/*======================================     ImgTitle3     ======================*/

var imgTitle3=new XMLHttpRequest();
imgTitle3.open("GET", "Text/Events/"+Year+"/"+GiveMonthToAjax+"/"+DeleteR+"/ImgTitle3.txt", false);
imgTitle3.send();
if (imgTitle3.status==404){malakasimgTitle3=""}else{
var malakasimgTitle3=imgTitle3.responseText;}

var CorrectItimgTitle3= malakasimgTitle3.replace("<","&lt");
var grrimgTitle3=document.getElementById("replicaText3");
grrimgTitle3.innerHTML = CorrectItimgTitle3;
var grrimgTitle3zoom=document.getElementById('replicaZoom3Text');
grrimgTitle3zoom.innerHTML=CorrectItimgTitle3;
/*======================================     ImgTitle4     ======================*/

var imgTitle4=new XMLHttpRequest();
imgTitle4.open("GET", "Text/Events/"+Year+"/"+GiveMonthToAjax+"/"+DeleteR+"/ImgTitle4.txt", false);
imgTitle4.send();
if (imgTitle4.status==404){malakasimgTitle4=""}else{
var malakasimgTitle4=imgTitle4.responseText;}

var CorrectItimgTitle4= malakasimgTitle4.replace("<","&lt");
var grrimgTitle4=document.getElementById("replicaText4");
grrimgTitle4.innerHTML = CorrectItimgTitle4;
var grrimgTitle4zoom=document.getElementById('replicaZoom4Text');
grrimgTitle4zoom.innerHTML=CorrectItimgTitle4;
/*======================================     ImgTitle5     ======================*/

var imgTitle5=new XMLHttpRequest();
imgTitle5.open("GET", "Text/Events/"+Year+"/"+GiveMonthToAjax+"/"+DeleteR+"/ImgTitle5.txt", false);
imgTitle5.send();
if (imgTitle5.status==404){malakasimgTitle5=""}else{
var malakasimgTitle5=imgTitle5.responseText;}

var CorrectItimgTitle5= malakasimgTitle5.replace("<","&lt");
var grrimgTitle5=document.getElementById("replicaText5");
grrimgTitle5.innerHTML = CorrectItimgTitle5;
var grrimgTitle5zoom=document.getElementById('replicaZoom5Text');
grrimgTitle5zoom.innerHTML=CorrectItimgTitle5;









}







var myVar = setInterval(function() {
  myTimer();
}, 1000);

function myTimer() {
  var d = new Date();
  var fixThis=d.toUTCString();
  var readyFixed=fixThis.substr(17);
  document.getElementById("clock").innerHTML = readyFixed;
}



</script>
<script>
function OpenZoom1(){
var Zoom=document.getElementsByClassName("ZoomImage1Wrap");
for (i=0;i<Zoom.length;i++){
Zoom[i].style.display="block";
}
}
function CloseZoom1(){
var Zoom=document.getElementsByClassName("ZoomImage1Wrap");
for (i=0;i<Zoom.length;i++){
Zoom[i].style.display="none";
}
}

</script>

<script>
 var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
var currentJsDate=new Date();
  var UtcMonth = month[currentJsDate.getUTCMonth()];
var NextUtcMonth=month[currentJsDate.getUTCMonth()+1];
var UtcYear=currentJsDate.getFullYear();


if (UtcMonth=="December" && NextUtcMonth=="January"){
	YearOfNextUtcMonth=UtcYear+1;
}else{
	YearOfNextUtcMonth=UtcYear;
}




</script>

<script src="Javascript/LoginMenu.js"></script>
<script src="Javascript/LoginMenuTwo.js"></script>
<script src="Javascript/Slider1.js">		</script>
<script src="Javascript/Slider2.js">		</script> 
<noscript>
    <style type="text/css">    	
        #WrapperFromBodyToWholePageDiv {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
 
</noscript>


</body>
</html>