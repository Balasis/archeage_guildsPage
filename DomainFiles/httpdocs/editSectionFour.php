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



/*AUTHEDICATION CHECK*/




// configuration
$url = 'editSectionFour.php';


?>
<?php  
		/*==================================================================================================*/

/*=================================              Section 4          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/
$Section4H='Text/Section4/head.txt';
$Section4 = 'Text/Section4/text.txt';

$VideoTag='Text/Section4/VideoTag.txt';
$GetVideoTagSec4=file_get_contents($VideoTag);

if (isset($_POST['VideoIframeSec4'])){
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	file_put_contents($VideoTag,$_POST['VideoIframeSec4']);
	header(sprintf('Location: %s', $url));
	exit();
}}



     

if (isset($_POST['head4'])){
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	file_put_contents($Section4H,$_POST['head4']);
	header(sprintf('Location: %s', $url));
	exit();
}}
// read the textfile
$headd4 =file_get_contents($Section4H);
$textt4 = file_get_contents($Section4);





// check if form has been submitted
if (isset($_POST['text4']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4, $_POST['text4']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}

$Section4Set2Name= 'Text/Section4/Set1and2GroupNames/Set2.txt';
$GetSection4Set2Name = file_get_contents($Section4Set2Name);
$Section4Set1Name= 'Text/Section4/Set1and2GroupNames/Set1.txt';
$GetSection4Set1Name = file_get_contents($Section4Set1Name);

// check if form has been submitted
if (isset($_POST['Set1Name']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Set1Name, $_POST['Set1Name']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}




if (isset($_POST['Set2Name']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Set2Name, $_POST['Set2Name']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}




// forBackground      
		/*==================================================================================================*/

/*=================================         Set 1                    ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/																


       /*=============== 1 ==========================*/

if(isset($_POST["Section4Bg1a"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="1SlideS1.png"){
	
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title1a="Text/Section4/Set1and2Titles/Set1/Title1a.txt";
$GetSection4Title1a = file_get_contents($Section4Title1a);
if (isset($_POST['TitleSection4Set1a']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title1a, $_POST['TitleSection4Set1a']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}






			/*=============== 2 ==========================*/

if(isset($_POST["Section4Bg1b"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="2SlideS1.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title1b="Text/Section4/Set1and2Titles/Set1/Title1b.txt";
$GetSection4Title1b = file_get_contents($Section4Title1b);
if (isset($_POST['TitleSection4Set1b']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title1b, $_POST['TitleSection4Set1b']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}


			/*=============== 3 ==========================*/

if(isset($_POST["Section4Bg1c"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="3SlideS1.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title1c="Text/Section4/Set1and2Titles/Set1/Title1c.txt";
$GetSection4Title1c = file_get_contents($Section4Title1c);
if (isset($_POST['TitleSection4Set1c']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title1c, $_POST['TitleSection4Set1c']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}


			/*=============== 4 ==========================*/

if(isset($_POST["Section4Bg1d"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="4SlideS1.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
     
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title1d="Text/Section4/Set1and2Titles/Set1/Title1d.txt";
$GetSection4Title1d = file_get_contents($Section4Title1d);
if (isset($_POST['TitleSection4Set1d']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title1d, $_POST['TitleSection4Set1d']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}
			/*=============== 5 ==========================*/

if(isset($_POST["Section4Bg1e"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="5SlideS1.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title1e="Text/Section4/Set1and2Titles/Set1/Title1e.txt";
$GetSection4Title1e = file_get_contents($Section4Title1e);
if (isset($_POST['TitleSection4Set1e']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title1e, $_POST['TitleSection4Set1e']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}

	/*==================================================================================================*/

/*=================================         Set 2                    ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/

       /*=============== 1 ==========================*/

if(isset($_POST["Section4Bg2a"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="1SlideS2.png"){
	
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title2a="Text/Section4/Set1and2Titles/Set2/Title2a.txt";
$GetSection4Title2a = file_get_contents($Section4Title2a);
if (isset($_POST['TitleSection4Set2a']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title2a, $_POST['TitleSection4Set2a']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}


			/*=============== 2 ==========================*/

if(isset($_POST["Section4Bg2b"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="2SlideS2.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}


///Title
$Section4Title2b="Text/Section4/Set1and2Titles/Set2/Title2b.txt";
$GetSection4Title2b = file_get_contents($Section4Title2b);
if (isset($_POST['TitleSection4Set2b']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title2b, $_POST['TitleSection4Set2b']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}

			/*=============== 3 ==========================*/

if(isset($_POST["Section4Bg2c"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="3SlideS2.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title2c="Text/Section4/Set1and2Titles/Set2/Title2c.txt";
$GetSection4Title2c = file_get_contents($Section4Title2c);
if (isset($_POST['TitleSection4Set2c']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title2c, $_POST['TitleSection4Set2c']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}


			/*=============== 4 ==========================*/

if(isset($_POST["Section4Bg2d"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="4SlideS2.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
     
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title2d="Text/Section4/Set1and2Titles/Set2/Title2d.txt";
$GetSection4Title2d = file_get_contents($Section4Title2d);
if (isset($_POST['TitleSection4Set2d']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title2d, $_POST['TitleSection4Set2d']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}

			/*=============== 5 ==========================*/

if(isset($_POST["Section4Bg2e"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="5SlideS2.png"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section4/SlideSection4/Selection2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

///Title
$Section4Title2e="Text/Section4/Set1and2Titles/Set2/Title2e.txt";
$GetSection4Title2e = file_get_contents($Section4Title2e);
if (isset($_POST['TitleSection4Set2e']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4Title2e, $_POST['TitleSection4Set2e']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}

  ?>
		
<!-- HTML form -->
<html>
<head>
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>
<style>



body{background-color:rgb(36,36,36);
	
}
textarea{
	min-width:35em;
}
.SmallerTextAreaForTitle{
	max-width:25em;
	min-width:10em;
	max-height:2em;
	height:2em;
}
.SmallerTextAreaForSet{
	max-width:45em;
	min-width:35em;
	max-height:3em;
	height:3em;
}
.VideoTagTextArea{
	max-width:75em;
	min-width:55em;
	max-height:15em;
	height:10em;
}
.TitlePosition{
	position:absolute;
	top:-1em;
	right:0em;
}
.TitleOfImage{
	position:absolute;
	top:-1em;
	left:0em;
}


#Wrapper{

	display:block;
	
	background-color:rgb(20,38,52);
	width:100em;
	margin-left:auto;
	margin-right:auto;
	color:rgb(171,172,179);
}
#info{
	width:100%;
	border-size:1em;
	border-style:solid;
	border-color:black;
}
#guide{
	
		display:flex;
	flex-direction:column;
	border-color:black;
	border-size:1em;
	border-style:solid;
	position:relative;
	border-top:0;
	border-bottom:0;
	width:100%;
	background-color:black;
}

#guide img{	

	max-width:100%;
	opacity:0.8;
}
#Section4Proc{

	font-size:1.5em;
	overflow:hidden;
	display:flex;
	flex-direction:column;
	align-content:center;
	border-color:black;
	border-size:1em;
	border-style:solid;
	width:100%;
	position:relative;
	margin:0;
	margin-left:auto;
	margin-right:auto;
}


.textCenter{
	text-align:center;
	font-size:1.5em;
}
.WrapForLeftSpace{
	margin-left:1em;
}
.Important{
	color:rgb(255,128,0);
	font-style:italic;

}
.NoFitPreview{
	font-style:italic;
	color:orange;
	white-space:nowrap;
	position:absolute;
	margin-left:21em;
}
#fontme{
	font-size:1.5em;
}




.NumberOfImageIntoSet{
	display:flex;
	align-items:center;
	justify-content:center;
	border-radius:25%;
	color:lightgreen;
	background-color:grey;
position:absolute;
right:-3em;
bottom:5em;
font-size:1.5em;
width:1.6em;
height:1.6em;
}
/*======================================================================================================================== */
/*=============================================================== SECTION  SET 1========================================= */
/*=============================================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇====================================== */


#SectionBg1Now1a{position:absolute;bottom:165.3em;left:17em;}
#SectionBg1Now1a img{width:20em; height:10em;margin-top:-1em}


#SectionBg1Now1b{position:absolute;bottom:147.8em;left:17em;}
#SectionBg1Now1b img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now1c{position:absolute;bottom:130.3em;left:17em;}
#SectionBg1Now1c img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now1d{position:absolute;bottom:112.8em;left:17em;}
#SectionBg1Now1d img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now1e{position:absolute;bottom:95.3em;left:17em;}
#SectionBg1Now1e img{width:20em; height:10em;margin-top:-1em}


/*======================================================================================================================== */
/*=============================================================== SECTION  SET 2========================================= */
/*=============================================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇====================================== */
#SectionBg1Now2a{position:absolute;bottom:72.5em;left:17em;}
#SectionBg1Now2a img{width:20em; height:10em;margin-top:-1em}


#SectionBg1Now2b{position:absolute;bottom:55em;left:17em;}
#SectionBg1Now2b img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now2c{position:absolute;bottom:37.5em;left:17em;}
#SectionBg1Now2c img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now2d{position:absolute;bottom:20em;left:17em;}
#SectionBg1Now2d img{width:20em; height:10em;margin-top:-1em}

#SectionBg1Now2e{position:absolute;bottom:2.5em;left:17em;}
#SectionBg1Now2e img{width:20em; height:10em;margin-top:-1em}














/*======================================================================================================================== */
/*=========================================END END END END END END END END END END END=================================== */
/*=========================================END END END END END END END END END END END==================================== */
/*======================================================================================================================== */



/*=======================================                   Sec1Prev1                         =========================== */

#Sec1Prev1a{
width:15em;
height:15em;
}
#Sec1Prev1b{
width:15em;
height:15em;
}
#Sec1Prev1c{
width:15em;
height:15em;
}
#Sec1Prev1d{
width:15em;
height:15em;
}
#Sec1Prev1e{
width:15em;
height:15em;
}



/*=======================================                   Sec1Prev2                         =========================== */


#Sec1Prev2a{
width:15em;
height:15em;
}
#Sec1Prev2b{
width:15em;
height:15em;
}
#Sec1Prev2c{
width:15em;
height:15em;
}
#Sec1Prev2d{
width:15em;
height:15em;
}
#Sec1Prev2e{
width:15em;
height:15em;
}


#RealView{
	 pointer-events: none; 
	 width:100%;
	 height:200em;
	 overflow:auto;
}
.circle{
	color:white;
	display:flex;
	flex-direction:column;
	align-content:center;
	justify-content:center;
	text-align:center;
	border-radius:50%;
	width:3em;
	height:3em;
	background-color:grey;
}
.hide{
	visibility:hidden;
}
</style>
</head>
<body onscroll="getScroll()" id="AsLong">
<div id="Wrapper"  >

<div id="info"><h1 style="text-align:center">Welcome adminstrator</h1>

<p id="fontme"> From here you can change the text of your webpage.If you need any "core" change contact me at [...].<br/>The picture here shows an example of Section 1 where Video,Set one and two pictures,Set names,Image title,Head and text goes to,(Its the same for the rest):</p></div>



<div id="guide"><img src="Pic/PreviewInside.png"></div>

<!--=================================               HTML SECTION 1         ==================================-->

	<div id="Section4Proc">		
	<p class="textCenter">SECTION 4 CONTENT</p>
	<div class="WrapForLeftSpace">

<form action="" method="post">
	<p>To change video simple copy paste the embed code you get from youtube or vimeo.<br/>
		Any Iframe will work.In case the video is really small size(few seconds)you may also<br/>
	contact me to upload it to your website server but I would highly recomment to avoid that since it <br/>may cause delay of pageload and also affect the general monthly bandwidth of the
webserver.</p>
	<p>Video Iframe:</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="VideoIframeSec4"><?php  include('Text/Section4/VideoTag.txt')  ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>




												<!--head-->
	<form action="" method="post">
	<p>Head(till 15-20 words for better view)</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="head4"><?php echo htmlspecialchars($headd4) ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>


												<!--Text-->		
<form action="" method="post">
	<p>Text(Unlimited/Scroll text)</p>
	<input  name="dafuc" type="hidden" value="">
<textarea name="text4"><?php echo htmlspecialchars($textt4) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>

<form action="" method="post">
	<p>Set 1 Name</p>
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForSet" name="Set1Name">
	<?php echo htmlspecialchars($GetSection4Set1Name)?>
	</textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>

<form action="" method="post">
	<p>Set 2 Name</p>
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForSet" name="Set2Name">
	<?php echo htmlspecialchars($GetSection4Set2Name)?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>
<!--======================================================================================================================================================-->
<!-- ============================================================================= Sec1   SET 1===================================================-->
<!--==============================================================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇===================================================-->











<p style="text-align:center;font-size:2em;color:red">~SET 1~ </p>

					<!--=======================================================================================-->
					<!-- ==========================       1         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->
												
												<!--Current image-->	

<div id="SectionBg1Now1a">
	<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set1a"><?php echo htmlspecialchars($GetSection4Title1a) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>

<p>Current Picture:</p>     
<img  src="Pic/Section4/SlideSection4/Selection1/1SlideS1.png">
<p class="NumberOfImageIntoSet">1</p>
</div>
<p>-Here you can change the background images of the Section [set1 and set2].<br/>-Each set has 5 images that you can change.<br/>-Whatever the resolution/size of picture it will	fit into the whole Section.<br/>-If it is too small it will just "stretch" it and will seem like poor quality.<br/>- 1 Mb max(better not choose big size images since it will affect the load speed of the page</p>
	<p class="Important">Important:If you are looking at the main website page sometimes theres a chance<br/> you will need to retype the url(vastolorde.space)(not refresh)since it saves the cache<br/> of the previous image and wont show the new one.Chrome Saves it for sure	so recommend to use firefox.<br> Chrome may even push you to to reopen browser to see changes</p>



												<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev1a" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev1a').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg1a">
</form>
									<hr><hr>

					<!--=======================================================================================-->
					<!-- ==========================       2         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->
												<!--Current image-->

<div id="SectionBg1Now1b">
	<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set1b"><?php echo htmlspecialchars($GetSection4Title1b) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>


<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection1/2SlideS1.png">
<p class="NumberOfImageIntoSet">2</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev1b" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev1b').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg1b">
</form>



															<hr><hr>
						<!--=======================================================================================-->
					<!-- ==========================       3         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->
												<!--Current image-->


<div id="SectionBg1Now1c">
	<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set1c"><?php echo htmlspecialchars($GetSection4Title1c) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>



<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection1/3SlideS1.png">
<p class="NumberOfImageIntoSet">3</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev1c" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev1c').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg1c">
</form>
															<hr><hr>
					<!--=======================================================================================-->
					<!-- ==========================       4         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->
												<!--Current image-->


<div id="SectionBg1Now1d">
<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set1d"><?php echo htmlspecialchars($GetSection4Title1d) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>


<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection1/4SlideS1.png">
<p class="NumberOfImageIntoSet">4</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev1d" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev1d').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg1d">
</form>



																	<hr><hr>
					<!--=======================================================================================-->
					<!-- ==========================       5         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->
												<!--Current image-->


<div id="SectionBg1Now1e">

<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set1e"><?php echo htmlspecialchars($GetSection4Title1e) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>

<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection1/5SlideS1.png">
<p class="NumberOfImageIntoSet">5</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev1e" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev1e').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg1e">
</form>





<hr><hr>
<!--======================================================================================================================================================-->
<!-- ============================================================================= Sec1   SET 2        ===================================================-->
<!--==============================================================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇===================================================-->

					<!--=======================================================================================-->
					<!-- ==========================       1         ===========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->

												<!--Current image-->
<p style="text-align:center;font-size:2em;color:red">~SET 2~ </p>													
<div id="SectionBg1Now2a">
<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set2a"><?php echo htmlspecialchars($GetSection4Title2a) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>



<p>Current Picture:</p>     
<img  src="Pic/Section4/SlideSection4/Selection2/1SlideS2.png">
<p class="NumberOfImageIntoSet">1</p>
</div>




												<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev2a" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev2a').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg2a">
</form>
									<hr><hr>

					<!--=======================================================================================-->
					<!-- ==========================     2       ===============================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->

<div id="SectionBg1Now2b">

<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set2b"><?php echo htmlspecialchars($GetSection4Title2b) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>



<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection2/2SlideS2.png">
<p class="NumberOfImageIntoSet">2</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev2b" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev2b').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg2b">
</form>



															<hr><hr>
						<!--=======================================================================================-->
					<!-- ==========================             3         ==========================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->


<div id="SectionBg1Now2c">

<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set2c"><?php echo htmlspecialchars($GetSection4Title2c) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>

<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection2/3SlideS2.png">
<p class="NumberOfImageIntoSet">3</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev2c" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev2c').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg2c">
</form>
															<hr><hr>
						<!--=======================================================================================-->
					<!-- ==========================              4     ===============================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->


<div id="SectionBg1Now2d">

<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set2d"><?php echo htmlspecialchars($GetSection4Title2d) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>

<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection2/4SlideS2.png">
<p class="NumberOfImageIntoSet">4</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev2d" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev2d').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg2d">
</form>



																	<hr><hr>
						<!--=======================================================================================-->
					<!-- ==========================           5      ===============================================-->
					<!--=========================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇========================================-->


<div id="SectionBg1Now2e">

<!-- Title for Image  -->
<div class="TitleOfImage">Title of image:</div>
<div class="TitlePosition"> 

<form action="" method="post">
	<input  name="dafuc" type="hidden" value="">
<textarea class="SmallerTextAreaForTitle" name="TitleSection4Set2e"><?php echo htmlspecialchars($GetSection4Title2e) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form></div>

<p>Current Picture:</p> 
<img  src="Pic/Section4/SlideSection4/Selection2/5SlideS2.png">
<p class="NumberOfImageIntoSet">5</p>
</div>


											
<form action="" method="post" enctype="multipart/form-data">
    <img id="Sec1Prev2e" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload"   onchange="document.getElementById('Sec1Prev2e').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg2e">
</form>



</div><!--WrapperForLeftSpace -->
</div><!--Section4Proc -->


												<!--=====END======-->

</div><!--Wrapper-->
<script type="text/javascript">
	var z;
	function getScroll(){
	var y=document.getElementById("AsLong").scrollTop;	
	var els=document.getElementsByName("dafuc");
for (var i=0;i<els.length;i++) {els[i].value=y;}
	z=y;
}
</script>
<script>
	window.onload=function(){saveMe()};
	function saveMe(){
	var j = <?php echo json_encode($_SESSION['dafuc']); ?>;
	
		window.scrollTo(0,j);

	}
	</script>

</body>
</html>