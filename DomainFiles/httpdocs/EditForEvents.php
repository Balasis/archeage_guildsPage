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

if (isset($_SESSION['YearPlat'])){

	$YearPlat=$_SESSION['YearPlat'];
	$MonthPlat=$_SESSION['MonthPlat'];
	$DayPlat=$_SESSION['DayOfEvent'];



if (isset($_POST['DelBg'])){
$bgTarget = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."DaysGoneBg.png";
if (file_exists($bgTarget)){
unlink(realpath($bgTarget));

}
}

if (isset($_POST['Del1'])){
$slide1 = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."1SlideS1.png";
if (file_exists($slide1)){
unlink(realpath($slide1));

}
}

if (isset($_POST['Del2'])){
$slide2 = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."2SlideS1.png";
if (file_exists($slide2)){
unlink(realpath($slide2));
	
}
}

if (isset($_POST['Del3'])){
$slide3 = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."3SlideS1.png";
if (file_exists($slide3)){
unlink(realpath($slide3));

}
}

if (isset($_POST['Del4'])){
$slide4 = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."4SlideS1.png";
if (file_exists($slide4)){
unlink(realpath($slide4));
	
}
}

if (isset($_POST['Del5'])){
$slide5 ="Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayPlat."/"."5SlideS1.png";
if (file_exists($slide5)){
unlink(realpath($slide5));

}
}







$gold="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/gold.txt";
if (file_exists($gold)){
$getgold=file_get_contents($gold);}

$silver="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/silver.txt";
if (file_exists($silver)){
$getsilver=file_get_contents($silver);}

$bronze="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/bronze.txt";
if (file_exists($bronze)){
$getbronze=file_get_contents($bronze);}


$platinum="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/platinum.txt";
if (file_exists($platinum)){
$getplatinum=file_get_contents($platinum);}

$diamond="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/diamond.txt";
if (file_exists($diamond)){
$getdiamond=file_get_contents($diamond);}

$h1="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/h1.txt";
if (file_exists($h1)){
$geth1=file_get_contents($h1);}

$h2="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/h2.txt";
if (file_exists($h2)){
$geth2=file_get_contents($h2);}

$h3="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/h3.txt";
if (file_exists($h3)){
$geth3=file_get_contents($h3);}

$h4="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/h4.txt";
if (file_exists($h4)){
$geth4=file_get_contents($h4);}

$h5="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/h5.txt";
if (file_exists($h5)){
$geth5=file_get_contents($h5);}

$ImgTitle1="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/ImgTitle1.txt";
if (file_exists($ImgTitle1)){
		$getImgTitle1=file_get_contents($ImgTitle1);}

$ImgTitle2="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/ImgTitle2.txt";
if (file_exists($ImgTitle2)){
$getImgTitle2=file_get_contents($ImgTitle2);}

$ImgTitle3="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/ImgTitle3.txt";
if (file_exists($ImgTitle3)){
$getImgTitle3=file_get_contents($ImgTitle3);}

$ImgTitle4="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/ImgTitle4.txt";
if (file_exists($ImgTitle4)){
$getImgTitle4=file_get_contents($ImgTitle4);}

$ImgTitle5="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/ImgTitle5.txt";
if (file_exists($ImgTitle5)){
$getImgTitle5=file_get_contents($ImgTitle5);}

$p1="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/p1.txt";
if (file_exists($p1)){
$getp1=file_get_contents($p1);}

$p2="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/p2.txt";
if (file_exists($p2)){
$getp2=file_get_contents($p2);}

$p3="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/p3.txt";
if (file_exists($p3)){
$getp3=file_get_contents($p3);}

$p4="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/p4.txt";
if (file_exists($p4)){
$getp4=file_get_contents($p4);}

$p5="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/p5.txt";
if (file_exists($p5)){
$getp5=file_get_contents($p5);}

$tricky="Text/Events/".$YearPlat."/".$MonthPlat."/".$DayPlat."/tricky.txt";
if (file_exists($tricky)){
$gettricky=file_get_contents($tricky);}

}





if (isset($_POST['PlatSubmit'])){

if ($_POST['addMore']=="true"){
$_SESSION['addMoreQ']="true";
}else if($_POST['addMore']=="false"){
$_SESSION['addMoreQ']="false";	
}


$_SESSION['YearPlat']=$_POST['YearOfEvent'];
$_SESSION['MonthPlat']=$_POST['MonthOfEvent'];
$_SESSION['DayOfEvent']=$_POST['DayOfEvent'];



$_SESSION['CopsAndThieves']='true';
$GoTo="editforevents.php";
header(sprintf('Location: %s', $GoTo));



}

if (isset($_POST['GoBackToForm'])){
	$_SESSION['CopsAndThieves']='false';
	unset($_SESSION['YearPlat']);
	unset($_SESSION['MonthPlat']);
	unset($_SESSION['DayOfEvent']);
	unset($_SESSION['addMoreQ']);
}

 ?>




<?php 
if  (isset($_POST['Complicated'])){

$addMoreQ=$_SESSION['addMoreQ'];
	
$YearPlat=$_SESSION['YearPlat'];
$CheckYearOfText="Text/Events/".$YearPlat;
if (file_exists($CheckYearOfText)){
	
}else{
	$CreateYearDirectory=mkdir($CheckYearOfText,0755,true);
}


$MonthPlat=$_SESSION['MonthPlat'];
$CheckMonthOfText="Text/Events/".$YearPlat."/".$MonthPlat;
if (file_exists($CheckMonthOfText)){
	
}else{
	$CreateMonthDirectory=mkdir($CheckMonthOfText,0755,true);
}

$DayOfEvent=$_SESSION['DayOfEvent'];
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
    copy($_FILES["1SlideS1"]["tmp_name"], $target_file);
}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['2SlideS1']['size'] < 1000000){

	if ($_FILES["2SlideS1"]["name"]="2SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["2SlideS1"]["name"]);
    copy($_FILES["2SlideS1"]["tmp_name"], $target_file);

}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['3SlideS1']['size'] < 1000000){

	if ($_FILES["3SlideS1"]["name"]="3SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["3SlideS1"]["name"]);
    copy($_FILES["3SlideS1"]["tmp_name"], $target_file);

}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}



	if($_FILES['4SlideS1']['size'] < 1000000){

	if ($_FILES["4SlideS1"]["name"]="4SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["4SlideS1"]["name"]);
    copy($_FILES["4SlideS1"]["tmp_name"], $target_file);

}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}




	if($_FILES['5SlideS1']['size'] < 1000000){

	if ($_FILES["5SlideS1"]["name"]="5SlideS1.png"){

    $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["5SlideS1"]["name"]);
    copy($_FILES["5SlideS1"]["tmp_name"], $target_file);

}
}else{
	echo "<script>alert('Put an image with less than 1Mb size')</script>";
}







	if($_FILES['DaysGoneBg']['size'] < 1000000){

	if ($_FILES["DaysGoneBg"]["name"]="DaysGoneBg.png"){

     $target_dir = "Pic/Calendar/".$YearPlat."/".$MonthPlat."/".$DayOfEvent."/";
$target_file = $target_dir .($_FILES["DaysGoneBg"]["name"]);
    copy($_FILES["DaysGoneBg"]["tmp_name"], $target_file);

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
;}else if(file_exists($deniedpath) && $_POST['denied']=="off" ){
unlink(realpath($deniedpath));
}

$GoReload="EditForEvents";
header(sprintf('Location: %s', $GoReload));


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
	width:42em;
	height:36em;
	background-color:grey;
	border-radius:10px 10px 10px 10px;
}
#WrapTheStartPlatform div{
font-size:1.3em;
}


#TimeOfEvent{
width:100%;
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
#ChooseMonthText{
	display:inline-block;
	color:white;
}
#ChooseYearText{
	color:white;
	display:inline-block;
}
#ChooseDayText{
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
	margin-bottom:0.5em;
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
background-color:black;
overflow:auto;
color:white;
}
#creator{
width:95%;
margin:auto;
}
#Images{
visibility:visible;
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
	visibility:hidden;
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
	overflow:scroll;
	height:25em;
}
#ChosenDay{
	color:white;
	text-align:center;
	position:fixed;
	top:3em;
	right:2.5em;
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
#ChooseDayTextRr{
	margin-top:0.5em;
		color:white;
	display:inline-block;
}
#buttonPos{
	
	position:absolute;
	left:10em;
	margin-top:27em;
}
#buttonPos1{	
	position:absolute;
	left:10em;
	margin-top:60em;
}
#buttonPos2{
	
	position:absolute;
	left:10em;
	margin-top:90em;
}
#buttonPos3{
	
	position:absolute;
	left:10em;
	margin-top:125em;
}
#buttonPos4{
	
	position:absolute;
	left:10em;
	margin-top:158em;
}
#buttonPos5{
	
	position:absolute;
	left:10em;
	margin-top:190em;
}
.dax{
	visibility:visible;
}
.grrr{
	visibility:visible;
	
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

#buttonPos{
	
	position:absolute;
	left:8.4vw;
	margin-top:27vw;
}
#buttonPos1{	
	position:absolute;
	left:8.4vw;
	margin-top:60vw;
}
#buttonPos2{
	
	position:absolute;
	left:8.4vw;
	margin-top:85vw;
}
#buttonPos3{
	
	position:absolute;
	left:8.4vw;
	margin-top:110vw;
}
#buttonPos4{
	
	position:absolute;
	left:8.4vw;
	margin-top:135vw;
}
#buttonPos5{
	
	position:absolute;
	left:8.4vw;
	margin-top:160vw;
}


   }
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
<div id="fixToCenter">
<div id="helloAdmin">Hello Admin</div>		
<form action="" id="TimeOfEvent" method="POST">
<div id="infoForForm">You may set an event that is further than two months</div>
<br>
 <div id="ChooseYearText">Choose Year: </div>
<select id="YearOfEvent"  name="YearOfEvent" value="" >
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
<br><br>
<div id="ChooseMonthText">Choose Month: </div>
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
<br><br>
<div id="ChooseDayText">Choose Day: </div>
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
<div id="ChooseDayTextRr">Set this to off if you want to delete files by letting empty the textareas: </div>
  <select id="addMore"  name="addMore" value="">  
 <option value="true">on</option>
<option value="false">off</option>
</select>
<br><br>

  <input type="submit" name="PlatSubmit" value="Post Date" style="font-size:3em;margin-top:0.1em">
</form>
</div>

</div>




</div>
<div id="AddNoDelete"><?php if (isset($_SESSION['addMoreQ']) && $_SESSION['addMoreQ']=="true" ){ echo '<span style="color:lightgreen;">You add only <br> without delete if blank</span>';}else if(isset($_SESSION['addMoreQ']) && $_SESSION['addMoreQ']=="false" ){
	echo '<span style="color:red;box-shadow:2px 0px 2px orange;">If blank(empty) <br> will delete</span>';
	echo '<script>alert("DELETE MODE ON !");</script>';
}      ;     ?></div>
<div id="ChosenDay"><?php if (isset($_SESSION['YearPlat'])){echo '(Set Specific)<br>Chosen day:';}; ?> <br><span style="color:lightblue;">   <?php 
if (isset($_SESSION['YearPlat'])){
$PreTurnMtoNumr1g=$_SESSION['MonthPlat'];$TurnMtoNumr1g=date("m",strtotime($PreTurnMtoNumr1g));

$PreFindDayOfDateaa=$_SESSION['YearPlat']."/".$TurnMtoNumr1g."/".$_SESSION['DayOfEvent'];
$FindDayOfDateee=date("l",strtotime($PreFindDayOfDateaa));
echo $_SESSION['DayOfEvent']."/".$_SESSION['MonthPlat']."/".$_SESSION['YearPlat']." "."(".$FindDayOfDateee.")";
}?> 
</span></div>
<div id="currentDay">Current day:<br></div>

<?php if (isset($_SESSION['YearPlat'])){
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
<div id="DenyDaily">Check to Deny <br>Daily Event<br>for that day:<br><br><input id="DenyDailyInput " type="checkbox" name="denied" value="on" 
	<?php if (isset($_SESSION['YearPlat'])) {$deniedpath="Text/Events/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/denied.txt";
if (file_exists($deniedpath)){echo 'checked';};
}
 ?>                         >



</div>
<div id="CalendarTitle" class="hidden">
<p style="color:red;font-size:1.3em"><i>~Do not forget to type the time of the event.~<br>~Bronze event is till 8 words around the rest events are like 4-6~<br>(to fit the view in calendar thats only a title after all)
</i></p>

<p>Bronze Event title:</p>
 <textarea name="bronze" class="CalendarTitle" ><?php
 if (file_exists($bronze)){
	echo htmlspecialchars($getbronze);
}
 ?></textarea>


<p>Silver Event title:</p>
 <textarea name="silver" class="CalendarTitle"><?php
 if (file_exists($silver)){
	echo htmlspecialchars($getsilver);
}
 ?></textarea>

<p>Gold Event title:</p>
 <textarea name="gold" class="CalendarTitle"><?php
 if (file_exists($gold)){
	echo htmlspecialchars($getgold);
}
 ?></textarea>


 <p>Platinum Event title:</p>
 <textarea name="platinum" class="CalendarTitle"><?php
 if (file_exists($platinum)){
	echo htmlspecialchars($getplatinum);
}
 ?></textarea>

 <p>Diamond Event title:</p>
 <textarea name="diamond" class="CalendarTitle"><?php
 if (file_exists($diamond)){
	echo htmlspecialchars($getdiamond);
}
 ?></textarea>







</div>







<div id="InfoText" class="hidden">

<p>Event 1 head</p>
<textarea class="heads" name="h1"><?php

if (file_exists($h1)){
	echo htmlspecialchars($geth1);
}
  
 ?></textarea>
<p>Event 1 Maintext</p>
 <textarea name="p1" ><?php
 if (file_exists($p1)){
	echo htmlspecialchars($getp1);
}
 ?></textarea>
<br><br><hr><hr><br><br>
<p>Event 2 head</p>

<textarea class="heads" name="h2"><?php
 if (file_exists($h2)){
	echo htmlspecialchars($geth2);
}
 ?></textarea>
<p>Event 2 Maintext</p>
 <textarea name="p2"><?php
 if (file_exists($p2)){
	echo htmlspecialchars($getp2);
}
 ?></textarea>
 <br><br><hr><hr><br><br>
<p>Event 3 head</p>
<textarea class="heads" name="h3"><?php
 if (file_exists($h3)){
	echo htmlspecialchars($geth3);
}
 ?></textarea>
<p>Event 3 Maintext</p>
<textarea name="p3"><?php
 if (file_exists($p3)){
	echo htmlspecialchars($getp3);
}
 ?></textarea>
 <br><br><hr><hr><br><br>
<p>Event 4 head</p>
<textarea class="heads" name="h4"><?php
if (file_exists($h4)){
	echo htmlspecialchars($geth4);
}
 ?></textarea>


<p>Event 4 Maintext</p>
<textarea name="p4"><?php
  if (file_exists($p4)){
	echo htmlspecialchars($getp4);
}
 ?></textarea>
<br><br><hr><hr><br><br>
<p>Event 5 head</p>
<textarea class="heads" name="h5"><?php
if (file_exists($h5)){
	echo htmlspecialchars($geth5);
}
 ?></textarea>

<p>Event 5 Maintext</p>
<textarea name="p5"><?php
 if (file_exists($p5)){
	echo htmlspecialchars($getp5);
}
 ?></textarea>	




 
</div><!--InfoText-->
<div id="Images" class="hidden">
<p style="color:lightblue;font-style:italic;font-size:1.3em">Pressing <span style="color:orange;font-size:1.5em";>X </span> will delete the img<br>Carefull though the delete will happen without submiting the form and will cause
	page reload so fields that are not saved (submitted from before) will reset.If you just want to replace the images simple browse/Choose file and continue to the rest of the 
form but if you want the image slot to be empty first delete the pictures and then complete the rest of the form or the opposite.<br> <span style="color:orange";>(~this 
happens to prevent any perfomance issues of the form~)</span></p>
<p style="font-size:1.5em;margin-top:3em;text-align:left;width:100%">Background of Event</p>
<div class="ImgDiv" style="height:25em !important">
	<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/DaysGoneBg.png'>";	
	} ?>
<img id="DaysGoneBg.png"  class="PrevLater" alt=""  style="margin-left:1em" />
<br>
<input type="file" name="DaysGoneBg"   onchange="document.getElementById('DaysGoneBg.png').src = window.URL.createObjectURL(this.files[0])">	


</div>
<hr><hr>


<div class="ImgDiv">
	<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/1SlideS1.png'>";	
	} ?>
<img id="1SlidePreview"  class="PrevLater" alt=""  style="margin-left:1em" />
<br>
<input type="file" name="1SlideS1"   onchange="document.getElementById('1SlidePreview').src = window.URL.createObjectURL(this.files[0])">	
<p>ImgTitle1</p>
<textarea class="Images" name="ImgTitle1"><?php
if (file_exists($ImgTitle1)){
	echo htmlspecialchars($getImgTitle1);
}  
 ?></textarea>
</div>


<div class="ImgDiv">
		<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/2SlideS1.png'>";	
	} ?>
<img id="2SlidePreview" alt="" class="PrevLater"  style="margin-left:1em" />
<br>
<input type="file" name="2SlideS1"   onchange="document.getElementById('2SlidePreview').src = window.URL.createObjectURL(this.files[0])">
<p>ImgTitle2</p>
<textarea class="Images" name="ImgTitle2"><?php
if (file_exists($ImgTitle2)){
	echo htmlspecialchars($getImgTitle2);
}  
 ?></textarea>
</div>

<div class="ImgDiv">
		<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/3SlideS1.png'>";	
	} ?>
<img id="3SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="3SlideS1"   onchange="document.getElementById('3SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle3</p>
<textarea class="Images" name="ImgTitle3"><?php
if (file_exists($ImgTitle3)){
	echo htmlspecialchars($getImgTitle3);
}  
 ?></textarea>
</div>

<div class="ImgDiv">
		<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/4SlideS1.png'>";	
	} ?>
<img id="4SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="4SlideS1"   onchange="document.getElementById('4SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle4</p>
<textarea class="Images" name="ImgTitle4"><?php
if (file_exists($ImgTitle4)){
	echo htmlspecialchars($getImgTitle4);
}  
 ?></textarea>
</div>

<div class="ImgDiv">
		<?php
	if (isset($_SESSION['YearPlat'])){
	echo "<img class='PrevNow' alt='Theres No Image' src='Pic/Calendar/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/5SlideS1.png'>";	
	} ?>
<img id="5SlidePreview" alt="" class="PrevLater" style="margin-left:1em" />
<br>
<input type="file" name="5SlideS1"   onchange="document.getElementById('5SlidePreview').src = window.URL.createObjectURL(this.files[0])">
 <p>ImgTitle5</p>
<textarea class="Images" name="ImgTitle5"><?php
if (file_exists($ImgTitle5)){
	echo htmlspecialchars($getImgTitle5);
}  
 ?></textarea>
</div>

</div>



<div id="video" class="hidden">
<?php 
if (isset($_SESSION['YearPlat'])){
	$trickyP="Text/Events/".$_SESSION['YearPlat']."/".$_SESSION['MonthPlat']."/".$_SESSION['DayOfEvent']."/tricky.txt";
if (file_exists($trickyP)){
  $gotrickyP=file_get_contents($trickyP);
echo '<iframe class="VideoFrame"  src="'. $gotrickyP  .'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                         }else{
                         	echo 'Theres no current Video';
                         } }
                         ?>

<p>Current Link / Paste The Link of new Video embed here(only the "https://www.example.com/embed/452fda") :</p>
<textarea name="tricky" class="tricky"><?php
 if (file_exists($tricky)){
	echo htmlspecialchars($gettricky);
}
 ?></textarea>	

</div>
<div id="Preview" class="hidden">
<p>Here you can see how it's on page right now:<br><span style="color:orange;font-style:italic;">there might be a slight difference how letters fit in ,like 0.1%, because of window size of preview</span></p>
 <object class="RealView" type="text/html" data="Events.php" style="width:65em;height:45em;overflow:scroll;">
    </object>
</div>




<input type="submit" name="Complicated" id="fixDat" value="Submit">
</form>	



<?php
	if (isset($_SESSION['YearPlat'])){

	echo '<form method="Post" class="dax" action="" >';
	echo '<input type="submit"  name="DelBg" id="buttonPos" class="grrr" value="X" />';
	echo '</form>';


			echo '<form method="Post" action="" >';
	echo '<input type="submit"  name="Del1"  id="buttonPos1" class="grrr" value="X" />';
	echo '</form>'	;


	echo '<form method="Post" action=""  >';
	echo '<input type="submit"  name="Del2"  id="buttonPos2" class="grrr" value="X" />';
	echo '</form>'	;


			echo '<form method="Post" action="" >';
	echo '<input type="submit"  name="Del3"  id="buttonPos3" class="grrr" value="X" />';
	echo '</form>'	;	

			echo '<form method="Post" action="" >';
	echo '<input type="submit"  name="Del4"  id="buttonPos4" class="grrr" value="X" />';
	echo '</form>'	;	
	
			echo '<form method="Post" action="" >';
	echo '<input type="submit"  name="Del5"  id="buttonPos5" class="grrr" value="X" />';
	echo '</form>'	;
	
	} ?>




</div>









<form id="hideSubForm" method="Post">
	<input type="submit" name="GoBackToForm" id="GoBackToForm"/>
</form>
<?php
if (isset($_SESSION['CopsAndThieves']) && $_SESSION['CopsAndThieves']=='true' ){
	echo "<script>document.getElementById('Wrapper').style.display='none'</script>";
	echo "<script>document.getElementById('newTest').style.display='block'</script>";
	echo "<script>document.getElementById('afterDate').style.display='block'</script>";
}
if (isset($_SESSION['CopsAndThieves']) && $_SESSION['CopsAndThieves']=='false' ){
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
var imgsX=document.getElementsByClassName('grrr');
if (document.getElementById('r1').checked){
	for (i=0;i<imgsX.length;i++){imgsX[i].style.visibility="hidden";}
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
	for (i=0;i<imgsX.length;i++){imgsX[i].style.visibility="hidden";}
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
	for (i=0;i<imgsX.length;i++){imgsX[i].style.visibility="visible";}
	for (i=0;i<allMenus.length;i++){
allMenus[i].style.visibility="hidden";}
	for (i=0;i<OptionMenus.length;i++){OptionMenus[i].style.backgroundColor="orange";
OptionMenus[i].style.borderRight="0.1em solid white";
OptionMenus[i].style.borderLeft="0.0em solid white";}
document.getElementById('f1').style.borderLeft="0.1em solid white";
document.getElementById('f2').style.borderRight="0.0em solid white";
document.getElementById('f3').style.borderRight="0.1em solid white";
document.getElementById('f3').style.borderLeft="0.1em solid white";

document.getElementById('Images').style.visibility="visible";
document.getElementById('f3').style.backgroundColor="lightblue";
window.scrollTo(0, 0);

 }

if (document.getElementById('r4').checked){
	for (i=0;i<imgsX.length;i++){imgsX[i].style.visibility="hidden";}
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
	for (i=0;i<imgsX.length;i++){imgsX[i].style.visibility="hidden";}
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