<?php
if (!isset($_SESSION)) {
    session_start();
}
/*AUTHEDICATION CHECK*/
if (isset($_SESSION['PlayerName'])){ 
$daplayer=$_SESSION['PlayerName'];
$daNumber=$_SESSION['DoubleProtection'];
require '../CS/Cs.php';
/*if( $conn ) { echo  "('Connection established.'')";
   }else{ echo "'Connection could not be established.'";	 die( print_r( sqlsrv_errors(), true));}  */
if (isset($_SESSION["ADMIN"]) && $_SESSION["ADMIN"] = 'true'){
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
		$GoTo="Login.php";
$_SESSION["authenticated"]="false";
$_SESSION["ADMIN"]="false";
session_destroy();
 header(sprintf('Location: %s', $GoTo));	

}
}else{
$GoTo="Login.php";
session_destroy();
 header(sprintf('Location: %s', $GoTo));
}
?>
<?php
if (isset($_POST['PlatSubmit'])){

$YearPlatStart=$_POST['YearOfEvent'];
$MonthPlatStart=$_POST['MonthOfEvent'];
$DayOfEventStart=$_POST['DayOfEvent'];
$YearPlatEnd=$_POST['YearOfEventEnd'];
$MonthPlatEnd=$_POST['MonthOfEventEnd'];
$DayOfEventEnd=$_POST['DayOfEventEnd'];
$ConvertedStart = date('m',strtotime($MonthPlatStart));
$ConvertedEnd = date('m',strtotime($MonthPlatEnd));
$getDateOfStart=$YearPlatStart."-".$ConvertedStart."-".$DayOfEventStart;
$getDateOfEnd=$YearPlatEnd."-".$ConvertedEnd."-".$DayOfEventEnd;



$old_date = date('l, F d y ');              // returns Saturday, January 30 10 02:06:34

$old_date_timestamp = strtotime($getDateOfStart);
$new_dateBegin = date('Y-m-d', $old_date_timestamp); 

$old_dateEnd = date('l, F d y ');              // returns Saturday, January 30 10 02:06:34

$old_date_timestampEnd = strtotime($getDateOfEnd);
$new_dateBeginEnd = date('Y-m-d', $old_date_timestampEnd); 

$earlier = new DateTime($new_dateBegin);
$later = new DateTime($new_dateBeginEnd);

$diff = $later->diff($earlier)->format("%a");


if ($diff<=60){


$_SESSION['startDate']=$YearPlatStart."-".$ConvertedStart."-".$DayOfEventStart;
$_SESSION['endDate']=$YearPlatEnd."-".$ConvertedEnd."-".$DayOfEventEnd;

if ($_POST['addMore']=="true"){
$_SESSION['addMore']="true";
}else if($_POST['addMore']=="false"){
$_SESSION['addMore']="false";	
}

if ($_POST['DayOfEventR']=="true"){
$_SESSION['per']="+1 day";
$_SESSION['DayOfEventEnd']=$_SESSION['startDate'];

}else{
$_SESSION['per']="+1 week";	
$_SESSION['DayOfEventEnd']=$_POST['DayOfEventR'];

}



$_SESSION['CopsAndThievesLimit']='true';
$GoTo="editforlimitevents.php";
header(sprintf('Location: %s', $GoTo));


}else if($diff>0){
echo '<script>alert("Difference between days cant be negative");</script>';

}else{
echo '<script>alert("difference between dates is more than 60 days");</script>';

}
}





if (isset($_POST['GoBackToForm'])){
	$_SESSION['CopsAndThievesLimit']='false';
	unset($_SESSION['startDate']);
	unset($_SESSION['endDate']);
	unset($_SESSION['DayOfEventEnd']);
	unset($_SESSION['addMore']);	
}



 ?>
<?php 
if  (isset($_POST['Complicated'])) {
$addMoreQ=$_SESSION['addMore'];
$WishDay=$_SESSION['DayOfEventEnd'];
$endDate = strtotime($_SESSION['endDate']);
$HowOften=$_SESSION['per'];
for($i = strtotime($WishDay, strtotime($_SESSION['startDate'])); $i <= $endDate; $i = strtotime($HowOften, $i)){	
	$MonthPlat=date('F', $i);
	$YearPlat=date('Y',$i);
	$DayOfEvent=date('j',$i);
	echo $MonthPlat;
	echo $YearPlat;
	echo $DayOfEvent;
$CheckYearOfText="Text/Events/".$YearPlat;
if (file_exists($CheckYearOfText)){	
}else{
	$CreateYearDirectory=mkdir($CheckYearOfText,0755,true);
}
$CheckMonthOfText="Text/Events/".$YearPlat."/".$MonthPlat;
if (file_exists($CheckMonthOfText)){	
}else{
	$CreateMonthDirectory=mkdir($CheckMonthOfText,0755,true);
}
$CheckDayOfText="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent;
if (file_exists($CheckDayOfText)){	
}else{
	$CreateDayDirectory=mkdir($CheckDayOfText,0755,true);
}
$CheckYearOfImg="Pic/Calendar/".$YearPlat;
$CheckMonthOfImg="Pic/Calendar/".$YearPlat."/".$MonthPlat;
$CheckDayOfImg="Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent;
if (file_exists($CheckYearOfImg)){	
}else{
	$CreateYearImgDirectory=mkdir($CheckYearOfImg,0755,true);
}
if (file_exists($CheckMonthOfImg)){	
}else{
	$CreateMonthImgDirectory=mkdir($CheckMonthOfImg,0755,true);
}
if (file_exists($CheckDayOfImg)){	
}else{
	$CreateDayImgDirectory=mkdir($CheckDayOfImg,0755,true);
}

$goldpath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/gold.txt";
if (file_exists($goldpath) && $_POST['gold']!=="" ){
file_put_contents($goldpath, $_POST['gold']);
;}else if($_POST['gold']!==""){
$Creategold=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/gold.txt","a");
file_put_contents($goldpath, $_POST['gold']);	
}else if (file_exists($goldpath) && $_POST['gold']=="" && $addMoreQ=="false" ){
	unlink(realpath($goldpath));
}
$silverpath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/silver.txt";
if (file_exists($silverpath) && $_POST['silver']!=="" ){
file_put_contents($silverpath, $_POST['silver']);
;}else if($_POST['silver']!==""){
$Createsilver=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/silver.txt","a");
file_put_contents($silverpath, $_POST['silver']);	
}else if (file_exists($silverpath) && $_POST['silver']=="" && $addMoreQ=="false" ){
	unlink(realpath($silverpath));
}
$bronzepath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/bronze.txt";
if (file_exists($bronzepath) && $_POST['bronze']!=="" ){
file_put_contents($bronzepath, $_POST['bronze']);
;}else if($_POST['bronze']!==""){
$Createbronze=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/bronze.txt","a");
file_put_contents($bronzepath, $_POST['bronze']);	
}else if (file_exists($bronzepath) && $_POST['bronze']=="" && $addMoreQ=="false" ){
	unlink(realpath($bronzepath));
}
$platinumpath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/platinum.txt";
if (file_exists($platinumpath) && $_POST['platinum']!=="" ){
file_put_contents($platinumpath, $_POST['platinum']);
;}else if($_POST['platinum']!==""){
$Createplatinum=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/platinum.txt","a");
file_put_contents($platinumpath, $_POST['platinum']);	
}else if (file_exists($platinumpath) && $_POST['platinum']=="" && $addMoreQ=="false"){
	unlink(realpath($platinumpath));
}
$diamondpath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/diamond.txt";
if (file_exists($diamondpath) && $_POST['diamond']!=="" ){
file_put_contents($diamondpath, $_POST['diamond']);
;}else if($_POST['diamond']!==""){
$Creatediamond=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/diamond.txt","a");
file_put_contents($diamondpath, $_POST['diamond']);	
}else if (file_exists($diamondpath) && $_POST['diamond']=="" && $addMoreQ=="false"){
	unlink(realpath($diamondpath));
}
$h1path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h1.txt";
if (file_exists($h1path) && $_POST['h1']!=="" ){
file_put_contents($h1path, $_POST['h1']);
;}else if($_POST['h1']!==""){
$Createh1=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h1.txt","a");
file_put_contents($h1path, $_POST['h1']);	
}else if (file_exists($h1path) && $_POST['h1']=="" && $addMoreQ=="false"){
	unlink(realpath($h1path));
}
$h2path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h2.txt";
if (file_exists($h2path) && $_POST['h2']!=="" ){
file_put_contents($h2path, $_POST['h2']);
;}else if($_POST['h2']!==""){
$Createh2=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h2.txt","a");
file_put_contents($h2path, $_POST['h2']);	
}else if (file_exists($h2path) && $_POST['h2']=="" && $addMoreQ=="false"){
	unlink(realpath($h2path));
}
$h3path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h3.txt";
if (file_exists($h3path) && $_POST['h3']!=="" ){
file_put_contents($h3path, $_POST['h3']);
;}else if($_POST['h3']!==""){
$Createh3=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h3.txt","a");
file_put_contents($h3path, $_POST['h3']);	
}else if (file_exists($h3path) && $_POST['h3']=="" && $addMoreQ=="false"){
	unlink(realpath($h3path));
}
$h4path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h4.txt";
if (file_exists($h4path) && $_POST['h4']!=="" ){
file_put_contents($h4path, $_POST['h4']);
;}else if($_POST['h4']!==""){
$Createh4=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h4.txt","a");
file_put_contents($h4path, $_POST['h4']);	
}else if (file_exists($h4path) && $_POST['h4']=="" && $addMoreQ=="false"){
	unlink(realpath($h4path));
}
$h5path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h5.txt";
if (file_exists($h5path) && $_POST['h5']!=="" ){
file_put_contents($h5path, $_POST['h5']);
;}else if($_POST['h5']!==""){
$Createh5=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/h5.txt","a");
file_put_contents($h5path, $_POST['h5']);	
}else if (file_exists($h5path) && $_POST['h5']=="" && $addMoreQ=="false"){
	unlink(realpath($h5path));
}
	if($_FILES['1SlideS1']['size'] < 1000000){

	if ($_FILES["1SlideS1"]["name"]="1SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["1SlideS1"]["name"]);
	if (file_exists($_FILES["1SlideS1"]["tmp_name"])){
    copy($_FILES["1SlideS1"]["tmp_name"], $target_file);
    }else if (!file_exists($_FILES["1SlideS1"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."1SlideS1.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['2SlideS1']['size'] < 1000000){

	if ($_FILES["2SlideS1"]["name"]="2SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["2SlideS1"]["name"]);
	if (file_exists($_FILES["2SlideS1"]["tmp_name"])){
    copy($_FILES["2SlideS1"]["tmp_name"], $target_file);
        }else if (!file_exists($_FILES["2SlideS1"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."2SlideS1.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['3SlideS1']['size'] < 1000000){

	if ($_FILES["3SlideS1"]["name"]="3SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["3SlideS1"]["name"]);
 	if (file_exists($_FILES["3SlideS1"]["tmp_name"])){
    copy($_FILES["3SlideS1"]["tmp_name"], $target_file);
        }else if (!file_exists($_FILES["3SlideS1"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."3SlideS1.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['4SlideS1']['size'] < 1000000){

	if ($_FILES["4SlideS1"]["name"]="4SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["4SlideS1"]["name"]);
   	if (file_exists($_FILES["4SlideS1"]["tmp_name"])){
    copy($_FILES["4SlideS1"]["tmp_name"], $target_file);
        }else if (!file_exists($_FILES["4SlideS1"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."4SlideS1.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}




	if($_FILES['5SlideS1']['size'] < 1000000){

	if ($_FILES["5SlideS1"]["name"]="5SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["5SlideS1"]["name"]);
  	if (file_exists($_FILES["5SlideS1"]["tmp_name"])){
    copy($_FILES["5SlideS1"]["tmp_name"], $target_file);
        }else if (!file_exists($_FILES["5SlideS1"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."5SlideS1.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}







	if($_FILES['DaysGoneBg']['size'] < 1000000){

	if ($_FILES["DaysGoneBg"]["name"]="DaysGoneBg.png"){

     $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["DaysGoneBg"]["name"]);
   	if (file_exists($_FILES["DaysGoneBg"]["tmp_name"])){
    copy($_FILES["DaysGoneBg"]["tmp_name"], $target_file);
        }else if (!file_exists($_FILES["DaysGoneBg"]["tmp_name"])  && $addMoreQ=="false"){
    	unlink(realpath($target_dir."DaysGoneBg.png"));
    }
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}




$ImgTitle1path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle1.txt";
if (file_exists($ImgTitle1path) && $_POST['ImgTitle1']!=="" ){
file_put_contents($ImgTitle1path, $_POST['ImgTitle1']);
;}else if($_POST['ImgTitle1']!==""){
$CreateImgTitle1=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle1.txt","a");
file_put_contents($ImgTitle1path, $_POST['ImgTitle1']);	
}else if (file_exists($ImgTitle1path) && $_POST['ImgTitle1']=="" && $addMoreQ=="false"){
	unlink(realpath($ImgTitle1path));
}
$ImgTitle2path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle2.txt";
if (file_exists($ImgTitle2path) && $_POST['ImgTitle2']!=="" ){
file_put_contents($ImgTitle2path, $_POST['ImgTitle2']);
;}else if($_POST['ImgTitle2']!==""){
$CreateImgTitle2=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle2.txt","a");
file_put_contents($ImgTitle2path, $_POST['ImgTitle2']);	
}else if (file_exists($ImgTitle2path) && $_POST['ImgTitle2']=="" && $addMoreQ=="false"){
	unlink(realpath($ImgTitle2path));
}
$ImgTitle3path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle3.txt";
if (file_exists($ImgTitle3path) && $_POST['ImgTitle3']!=="" ){
file_put_contents($ImgTitle3path, $_POST['ImgTitle3']);
;}else if($_POST['ImgTitle3']!==""){
$CreateImgTitle3=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle3.txt","a");
file_put_contents($ImgTitle3path, $_POST['ImgTitle3']);	
}else if (file_exists($ImgTitle3path) && $_POST['ImgTitle3']=="" && $addMoreQ=="false"){
	unlink(realpath($ImgTitle3path));
}
$ImgTitle4path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle4.txt";
if (file_exists($ImgTitle4path) && $_POST['ImgTitle4']!=="" ){
file_put_contents($ImgTitle4path, $_POST['ImgTitle4']);
;}else if($_POST['ImgTitle4']!==""){
$CreateImgTitle4=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle4.txt","a");
file_put_contents($ImgTitle4path, $_POST['ImgTitle4']);	
}else if (file_exists($ImgTitle4path) && $_POST['ImgTitle4']=="" && $addMoreQ=="false"){
	unlink(realpath($ImgTitle4path));
}
$ImgTitle5path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle5.txt";
if (file_exists($ImgTitle5path) && $_POST['ImgTitle5']!=="" ){
file_put_contents($ImgTitle5path, $_POST['ImgTitle5']);
;}else if($_POST['ImgTitle5']!==""){
$CreateImgTitle5=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/ImgTitle5.txt","a");
file_put_contents($ImgTitle5path, $_POST['ImgTitle5']);	
}else if (file_exists($ImgTitle5path) && $_POST['ImgTitle5']=="" && $addMoreQ=="false"){
	unlink(realpath($ImgTitle5path));
}
$p1path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p1.txt";
if (file_exists($p1path) && $_POST['p1']!=="" ){
file_put_contents($p1path, $_POST['p1']);
;}else if($_POST['p1']!==""){
$Createp1=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p1.txt","a");
file_put_contents($p1path, $_POST['p1']);	
}else if (file_exists($p1path) && $_POST['p1']=="" && $addMoreQ=="false"){
	unlink(realpath($p1path));
}
$p2path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p2.txt";
if (file_exists($p2path) && $_POST['p2']!=="" ){
file_put_contents($p2path, $_POST['p2']);
;}else if($_POST['p2']!==""){
$Createp2=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p2.txt","a");
file_put_contents($p2path, $_POST['p2']);	
}else if (file_exists($p2path) && $_POST['p2']=="" && $addMoreQ=="false"){
	unlink(realpath($p2path));
}
$p3path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p3.txt";
if (file_exists($p3path) && $_POST['p3']!=="" ){
file_put_contents($p3path, $_POST['p3']);
;}else if($_POST['p3']!==""){
$Createp3=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p3.txt","a");
file_put_contents($p3path, $_POST['p3']);	
}else if (file_exists($p3path) && $_POST['p3']=="" && $addMoreQ=="false"){
	unlink(realpath($p3path));
}
$p4path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p4.txt";
if (file_exists($p4path) && $_POST['p4']!=="" ){
file_put_contents($p4path, $_POST['p4']);
;}else if($_POST['p4']!==""){
$Createp4=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p4.txt","a");
file_put_contents($p4path, $_POST['p4']);	
}else if (file_exists($p4path) && $_POST['p4']=="" && $addMoreQ=="false"){
	unlink(realpath($p4path));
}
$p5path="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p5.txt";
if (file_exists($p5path) && $_POST['p5']!=="" ){
file_put_contents($p5path, $_POST['p5']);
;}else if($_POST['p5']!==""){
$Createp5=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/p5.txt","a");
file_put_contents($p5path, $_POST['p5']);	
}else if (file_exists($p5path) && $_POST['p5']=="" && $addMoreQ=="false"){
	unlink(realpath($p5path));
}
$trickypath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/tricky.txt";
if (file_exists($trickypath) && $_POST['tricky']!=="" ){
file_put_contents($trickypath, $_POST['tricky']);
;}else if($_POST['tricky']!==""){
$Createtricky=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/tricky.txt","a");
file_put_contents($trickypath, $_POST['tricky']);	
}else if (file_exists($trickypath) && $_POST['tricky']=="" && $addMoreQ=="false"){
	unlink(realpath($trickypath));
}

$deniedpath="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/denied.txt";
if (!file_exists($deniedpath) && $_POST['denied']=="on" ){
$Createdenied=fopen("Text/Events/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/denied.txt","a");
;}else if(file_exists($deniedpath) && $_POST['denied']==null ){
unlink(realpath($deniedpath));
}





$GoReload="EditForLimitEvents";
header(sprintf('Location: %s', $GoReload));
}
}
?>



<!DOCTYPE html>
<html>
<head>

<style>
body{background-color:rgb(36,36,36);}
select{font-size:1.2em;}
textarea{
	width:43.75em;
	max-width:43.75em;
	min-height:25em;
}

#Wrapper{

	display:flex;
	align-items:center;
	justify-content:center;
	min-height:50em;
	/*background-color:rgb(20,38,52);*/
	width:100em;
	margin-left:auto;
	margin-right:auto;
	color:rgb(171,172,179);
}

#WrapTheStartPlatform{
	display:block;
	width:68em;
	height:37em;
	background-color:grey;
	border-radius:10px 10px 10px 10px;
	margin-top:-3em;

}
#WrapTheStartPlatform div{
font-size:1.3em;

}


#TimeOfEvent{
width:45em;

}
#fixToCenter{

	width:25em;
	text-align:left;
	display:block;
	margin-left:2.5em;
	margin-top:2em;
}
#infoForForm{
color:white;
	
}
#infoForFormEnd{
color:white;

margin-top:1.5em;	
}
#ChooseMonthText{
	display:inline-block;
	color:white;
}
#ChooseYearText{
	color:white;
	display:inline-block;
}
#ChooseDayTextR{
	margin-top:0.5em;
		color:white;
	display:inline-block;
}
#ChooseDayTextRr{
	margin-top:0.5em;
		color:white;
	display:inline-block;
}
#ChooseDayText{
		color:white;
	display:inline-block;
}

#ChooseMonthTextEnd{
	display:inline-block;
	color:white;
}
#ChooseYearTextEnd{
	color:white;
	display:inline-block;
}
#ChooseDayTextEnd{
		color:white;
	display:inline-block;
}

#GoBackToForm{
	display:none;
}

#hideSubForm{
	display:none;
}	
#helloAdmin{
	margin-top:0.2em;
	width:100%;	
	text-align:center;
	color:white;
}

#afterDate{
	
margin-top:5em;
display:none;
width:110em;
margin-left:auto;
margin-right:auto;
min-height:100%;
background-color:transparent;
overflow:auto;
color:white;
}
#creator{
width:95%;
margin:auto;
background-color:rgb(36,36,36);
}
#Images{
visibility:hidden;
	max-width:50em;
text-align:center;
	position:absolute;	
}
#video{
visibility:hidden;
	max-width:50em;
text-align:center;
	position:absolute;		
}
#InfoText{
visibility:hidden;
	max-width:50em;
text-align:center;
	position:absolute;
}
#CalendarTitle{
		max-width:50em;
text-align:center;
	position:absolute;
}
#Preview{
			max-width:50em;
text-align:center;
	position:absolute;
	visibility:hidden;
}
.Images{
		text-align:center;
	min-height:1em !important;
	font-size:1.5em;
	width:22.3em;
}
.heads{
	text-align:center;
	min-height:1em !important;
	font-size:1.5em;
	width:22.3em;

}
.CalendarTitle{
	text-align:center;
	min-height:1em !important;
	font-size:1.5em;
	width:22.3em;

}
#fixDat{
	position:fixed;
	top:15em;
	right:5.3em;
	font-size:3em;
	z-index:999;
}
#fixDat:hover{
	background-color:orange;
	cursor:pointer;
	border-color:orange;
}
#newTest{
	font-size:3em;
	top:12em;
	right:4.5em;
	position:fixed;
	display:none;
	color:white;
	z-index:999;
	border-radius:10px 10px 10px 10px;
	border-width:0.5em;
	background-color:orange;
	border-style:solid;
	border-color:orange;
}
#newTest:hover{
	background-color:lightblue;
	border-color:lightblue;
		color:red;
	cursor:url(Curs/Hover.cur),auto;
}
.ImgDiv{
	margin-top:3em;
}
#ChosenDay{
	color:white;
	text-align:center;
	position:fixed;
	top:2em;
	right:4.5em;
	font-size:2.5em;
	z-index:999;
}
#clock{
	color:white;
	text-align:center;
	position:fixed;
	top:12em;
	right:4.5em;
	font-size:2.5em;
	z-index:999;
}
#AddNoDelete{
	color:white;
	text-align:center;
	position:fixed;
	top:0.5em;
	right:8em;
	font-size:1.5em;
	z-index:999;	
	
}
#currentDay{
	color:white;
	text-align:center;
	position:fixed;
	top:9.5em;
	right:5em;
	font-size:2.5em;
	z-index:999;	
}
#SpecificDateMenu{
	position:fixed;
	display:flex;
	
background-color:orange;
	top:0;
	font-size:3em;

	z-index:999;
}

.Menu{
	
	border-radius:10px 10px 10px 10px;

border-right:0.1em solid white;

	color:white;
	padding-left:0.3em;
	padding-right:0.3em;
	padding-bottom:0.3em;
	padding-top:0.2em;
	
}
#f1{
	border-left:0.1em solid white;
}
#f5{
	border-right:0.1em solid white;
}
.Menu:hover{
	cursor:pointer;
	color:red;
	background-color:lightblue;
}
.hideMeAlso{
	display:none;
}
.PrevNow{
	max-width:13em;
	height:auto;
	margin-left:-3.2em;
}
.PrevLater{
		max-width:13em;
	height:auto;
}
.tricky{
	text-align:center;
	min-height:1em !important;
	font-size:1.5em;
	width:22.3em;
}
.VideoFrame{
	margin-top:3em;
	width:45em;
	height:30em;
}
#DenyDaily{
	position:fixed;
	right:23em;
	top:10em;
	font-size:1.5em;
	color:orange;
}
input[type=checkbox] {
    transform: scale(3.5);
    margin-left:4em;
}

@media (max-width:98.6em){html,body{font-size:1vw;}
</style>

<title>form</title>
	<!--CSS-->
	<link rel="stylesheet" href="" type="text/css"/>

   	<!--JAVASCRIPT LIBRARY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!--Resize For Devices-->
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>

	<!--Creator-->
	<meta name="author" content="John balasis"/>

	<!--AFK KICK-->
	<meta http-equiv="refresh" content="9000"/>

	<meta charset="UTF-8"/>	

</head>


<body>
	<div id="Wrapper"  >

<div id="WrapTheStartPlatform">
	<div id="helloAdmin" style="font-size:2em">Hello Admin</div>
<div id="fixToCenter">
		
<form action="" id="TimeOfEvent" method="POST">
<div id="infoForForm">Set Starting Date</div>
<br>
 
<select id="YearOfEvent"  name="YearOfEvent" value="" style="display:inline-block">
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
  <option value="2027">2027</option>
  <option value="2028">2028</option>
  <option value="2029">2029</option>
  <option value="2030">2030</option>
  <option value="2031">2031</option>
  <option value="2032">2032</option>
  <option value="2033">2033</option>
  <option value="2034">2034</option>
  <option value="2035">2035</option>
  <option value="2036">2036</option>
  <option value="2037">2037</option>
  <option value="2038">2038</option>
  <option value="2039">2039</option>
  <option value="2040">2040</option>
  <option value="2041">2041</option>
  <option value="2042">2042</option>
  <option value="2043">2043</option>
  <option value="3000">are you still alive?dafuc</option>




</select>


  <select id="MonthOfEvent"  name="MonthOfEvent" value="">
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
   <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>


  <select id="DayOfEvent"  name="DayOfEvent" value="">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28(if exist)</option>
  <option value="29">29(if exist)</option>
  <option value="30">30(if exist)</option>
  <option value="31">31(if exist)</option>
</select>
<br><br>


<div id="infoForFormEnd">Set end Date</div>
<br>

<select id="YearOfEventEnd"  name="YearOfEventEnd" value="" style="display:inline-block">
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
  <option value="2025">2025</option>
  <option value="2026">2026</option>
  <option value="2027">2027</option>
  <option value="2028">2028</option>
  <option value="2029">2029</option>
  <option value="2030">2030</option>
  <option value="2031">2031</option>
  <option value="2032">2032</option>
  <option value="2033">2033</option>
  <option value="2034">2034</option>
  <option value="2035">2035</option>
  <option value="2036">2036</option>
  <option value="2037">2037</option>
  <option value="2038">2038</option>
  <option value="2039">2039</option>
  <option value="2040">2040</option>
  <option value="2041">2041</option>
  <option value="2042">2042</option>
  <option value="2043">2043</option>
  <option value="3000">are you still alive?dafuc</option>




</select>


  <select id="MonthOfEventEnd"  name="MonthOfEventEnd" value="">
  <option value="January">January</option>
  <option value="February">February</option>
  <option value="March">March</option>
   <option value="April">April</option>
  <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
  <option value="September">September</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>


  <select id="DayOfEventEnd"  name="DayOfEventEnd" value="">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28(if exist)</option>
  <option value="29">29(if exist)</option>
  <option value="30">30(if exist)</option>
  <option value="31">31(if exist)</option>
</select>
<br><br>
<div id="ChooseDayTextR">Choose Day That Will be repeated within the range: </div>
  <select id="DayOfEventR"  name="DayOfEventR" value="">
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
  <option value="true">Every day</option>
</select>
<br><br>
<div id="ChooseDayTextRr">Set this to off if you want to delete files by letting empty the textareas: </div>
  <select id="addMore"  name="addMore" value="">  
 <option value="true">on</option>
<option value="false">off</option>
</select>
<br><br>
  <input type="submit" name="PlatSubmit" value="Post" style="margin-left:5.5em;font-size:3em;margin-top:0.1em">
</form>
</div>

</div>




</div>
<div id="AddNoDelete"><?php if (isset($_SESSION['addMore']) && $_SESSION['addMore']=="true" ){ echo '<span style="color:lightgreen;">You add only <br> without delete if blank</span>';}else if(isset($_SESSION['addMore']) && $_SESSION['addMore']=="false" ){
	echo '<span style="color:red;box-shadow:2px 0px 2px orange;">If blank(empty) <br> will delete</span>';
	echo '<script>alert("DELETE MODE ON !");</script>';
}      ;     ?></div>
<div id="ChosenDay"><?php if (isset($_SESSION['DayOfEventEnd'])){echo 'Date Range:';}; ?> <br><span style="color:lightblue;">   <?php 
if (isset($_SESSION['DayOfEventEnd'])){

echo $_SESSION['startDate']."<br>"."-"."<br>".$_SESSION['endDate']."<br>"."Every ".$_SESSION['DayOfEventEnd'];
}?> 
</span></div>
<?php if (isset($_SESSION['DayOfEventEnd'])){

echo '<div id="currentDay">Current day:<br></div>' ;}?>

<?php if (isset($_SESSION['DayOfEventEnd'])){
echo '<div id="clock"></div>' ;}?>
<label for="GoBackToForm"><div id="newTest">Go back</div></label>



<div id="afterDate">
<div id="SpecificDateMenu">
<label for="r1">	<div class="Menu" id="f1" > CalendarTitle </div></label>
<label for="r2">	<div class="Menu" id="f2"> InfoText </div></label>
<label for="r3">	<div class="Menu" id="f3"> Images </div></label>
<label for="r4">	<div class="Menu" id="f4"> Video </div></label>
<label for="r5">	<div class="Menu" id="f5"> Preview </div></label>
	        </div>
<form method="Post" action="" id="creator" enctype="multipart/form-data">
<div id="DenyDaily">If you let it uncheck <br>on submit will allow .<br>Check to Deny Daily <br>Event for that day:<br><br><input id="DenyDailyInput " type="checkbox" name="denied" value="on">



</div>
<div id="CalendarTitle" class="hidden">
<p style="color:red;font-size:1.3em"><i>~Do not forget to type the time of the event.~<br>~Bronze event is till 8 words around the rest events are like 4-6~<br>(to fit the view in calendar thats only a title after all)
</i></p>

<p>Bronze Event title:</p>
 <textarea name="bronze" class="CalendarTitle" ></textarea>


<p>Silver Event title:</p>
 <textarea name="silver" class="CalendarTitle"></textarea>

<p>Gold Event title:</p>
 <textarea name="gold" class="CalendarTitle"></textarea>


 <p>Platinum Event title:</p>
 <textarea name="platinum" class="CalendarTitle"></textarea>

 <p>Diamond Event title:</p>
 <textarea name="diamond" class="CalendarTitle"></textarea>
</div>







<div id="InfoText" class="hidden">

<p>Event 1 head</p>
<textarea class="heads" name="h1"></textarea>
<p>Event 1 Maintext</p><textarea name="p1" ></textarea>
<br><br><hr><hr><br><br>
<p>Event 2 head</p>

<textarea class="heads" name="h2"></textarea>
<p>Event 2 Maintext</p>
 <textarea name="p2"></textarea>
 <br><br><hr><hr><br><br>
<p>Event 3 head</p>
<textarea class="heads" name="h3"></textarea>
<p>Event 3 Maintext</p>
<textarea name="p3"></textarea>
 <br><br><hr><hr><br><br>
<p>Event 4 head</p>
<textarea class="heads" name="h4"></textarea>


<p>Event 4 Maintext</p>
<textarea name="p4"></textarea>
<br><br><hr><hr><br><br>
<p>Event 5 head</p>
<textarea class="heads" name="h5"></textarea>

<p>Event 5 Maintext</p>
<textarea name="p5"></textarea>	




 
</div><!--InfoText-->
<div id="Images" class="hidden">

<p style="font-size:1.5em;margin-top:3em;text-align:left;width:100%">Background of Event</p>
<div class="ImgDiv">

<img id="DaysGoneBg.png"  class="PrevLater" alt=""  style="margin-left:1em" />
<br>
<input type="file" name="DaysGoneBg"   onchange="document.getElementById('DaysGoneBg.png').src = window.URL.createObjectURL(this.files[0])">	


</div>
<hr><hr>


<div class="ImgDiv">

<img id="1SlidePreview"  class="PrevLater" alt=""  style="margin-left:1em" />
<br>
<input type="file" name="1SlideS1"    onchange="document.getElementById('1SlidePreview').src = window.URL.createObjectURL(this.files[0])">	
<p>ImgTitle1</p>
<textarea class="Images" name="ImgTitle1"></textarea>
</div>


<div class="ImgDiv">

<img id="2SlidePreview" alt="" class="PrevLater"  style="margin-left:1em" />
<br>
<input type="file" name="2SlideS1"   onchange="document.getElementById('2SlidePreview').src = window.URL.createObjectURL(this.files[0])">
<p>ImgTitle2</p>
<textarea class="Images" name="ImgTitle2"></textarea>
</div>

<div class="ImgDiv">

<img id="3SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="3SlideS1"   onchange="document.getElementById('3SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle3</p>
<textarea class="Images" name="ImgTitle3"></textarea>
</div>

<div class="ImgDiv">

<img id="4SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="4SlideS1"   onchange="document.getElementById('4SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle4</p>
<textarea class="Images" name="ImgTitle4"></textarea>
</div>

<div class="ImgDiv">

<img id="5SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="5SlideS1"   onchange="document.getElementById('5SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle5</p>
<textarea class="Images" name="ImgTitle5"></textarea>
</div>

</div>



<div id="video" class="hidden">


<p>Current Link / Paste The Link of new Video embed here(only the "https://www.example.com/embed/452fda") :</p>
<textarea name="tricky" class="tricky"></textarea>	

</div>
<div id="Preview" class="hidden">
<p>Preview of event page:<br><span style="color:orange;font-style:italic;">there might be a slight difference how letters fit in ,like 0.1%, because of window size of preview</span></p>
 <object class="RealView" type="text/html" data="Events.php" style="width:65em;height:45em;overflow:scroll;">
    </object>
</div>


<br><br>

<input type="submit" name="Complicated" id="fixDat" value="Submit">
</form>	








</div>









<form id="hideSubForm" method="Post">
	<input type="submit" name="GoBackToForm" id="GoBackToForm"/>
</form>
<?php
if (isset($_SESSION['CopsAndThievesLimit']) && $_SESSION['CopsAndThievesLimit']=='true' ){
	echo "<script>document.getElementById('Wrapper').style.display='none'</script>";
	echo "<script>document.getElementById('newTest').style.display='block'</script>";
	echo "<script>document.getElementById('afterDate').style.display='block'</script>";
}
if (isset($_SESSION['CopsAndThievesLimit']) && $_SESSION['CopsAndThievesLimit']=='false' ){
	echo "<script>document.getElementById('Wrapper').style.display='flex'</script>";
	echo "<script>document.getElementById('newTest').style.display='none'</script>";
	echo "<script>document.getElementById('afterDate').style.display='none'</script>";
}



 ?>	
  <input type="radio"    id="r1"   class="hideMeAlso" name="hideMenu"	    onclick="radioClick()">
  <input type="radio"   id="r2"   class="hideMeAlso" name="hideMenu"	    onclick="radioClick()">
   <input type="radio"  id="r3"   class="hideMeAlso" name="hideMenu"	    onclick="radioClick()">
    <input type="radio" id="r4"   class="hideMeAlso" name="hideMenu"	    onclick="radioClick()">
    <input type="radio" id="r5"   class="hideMeAlso" name="hideMenu"	    onclick="radioClick()">
<script>
function radioClick(){
var OptionMenus=document.getElementsByClassName('Menu');
var allMenus=document.getElementsByClassName('hidden');

if (document.getElementById('r1').checked){
	for (i=0;i<allMenus.length;i++){allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white";}

document.getElementById('f1').style.borderRight="0.1em solid white";
document.getElementById('f1').style.borderLeft="0.1em solid white";


document.getElementById('f1').style.backgroundColor="lightblue";
document.getElementById('CalendarTitle').style.visibility="visible";
window.scrollTo(0, 0);
}

if (document.getElementById('r2').checked){
	for (i=0;i<allMenus.length;i++){allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){
OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white ";
}
document.getElementById('f1').style.borderRight="0.0em solid white";
document.getElementById('f1').style.borderLeft="0.1em solid white";
document.getElementById('f2').style.borderRight="0.1em solid white";
document.getElementById('f2').style.borderLeft="0.1em solid white";
	document.getElementById('f2').style.backgroundColor="lightblue";
	document.getElementById('InfoText').style.visibility="visible";
	window.scrollTo(0, 0);
	 }

if (document.getElementById('r3').checked){
	for (i=0;i<allMenus.length;i++){allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){
OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white";
}
document.getElementById('f1').style.borderLeft="0.1em solid white";
document.getElementById('f2').style.borderRight="0.0em solid white";
document.getElementById('f3').style.borderRight="0.1em solid white";
document.getElementById('f3').style.borderLeft="0.1em solid white";


document.getElementById('f3').style.backgroundColor="lightblue";
document.getElementById('Images').style.visibility="visible";
window.scrollTo(0, 0);
 }

if (document.getElementById('r4').checked){
	for (i=0;i<allMenus.length;i++){
allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white";}
document.getElementById('f1').style.borderLeft="0.1em solid white";
document.getElementById('f3').style.borderRight="0.0em solid white";
document.getElementById('f4').style.borderRight="0.1em solid white";
document.getElementById('f4').style.borderLeft="0.1em solid white";

document.getElementById('video').style.visibility="visible";
document.getElementById('f4').style.backgroundColor="lightblue";
window.scrollTo(0, 0);

 }
if (document.getElementById('r5').checked){
	for (i=0;i<allMenus.length;i++){
allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white";}
document.getElementById('f1').style.borderLeft="0.1em solid white";
document.getElementById('f4').style.borderRight="0.0em solid white";
document.getElementById('f5').style.borderRight="0.1em solid white";
document.getElementById('f5').style.borderLeft="0.1em solid white";

document.getElementById('f5').style.backgroundColor="lightblue";
document.getElementById('Preview').style.visibility="visible";
window.scrollTo(0, 0);
 }

}
 </script>







<script>var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');

var yyyy = today.getFullYear();
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
today = dd + '/' + UtcMonth + '/' + yyyy;

document.getElementById("currentDay").innerHTML+="<span style=color:lightblue;>"+today+"</span>"; </script>


<!-- CLOCK -->
 <script>
 var xm= document.getElementById('afterDate').style.display=='block';
 if (xm){
 var myVar = setInterval(function() {
  myTimer();
}, 1000);

function myTimer() {
  var d = new Date();
  var fixThis=d.toUTCString();
  var readyFixed=fixThis.substr(17);
  document.getElementById("clock").innerHTML = readyFixed;
}	}
 </script>

</body>
</html>