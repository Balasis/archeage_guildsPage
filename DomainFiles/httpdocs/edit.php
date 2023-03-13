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
$url = 'edit.php';

$Section1H='Text/DescriptionHead/Section1H.txt';
$Section1 = 'Text/DescriptionTextDiv/Section1.txt';
/*==================================================================================================*/

/*=================================              Section 1          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/


     

if (isset($_POST['head1'])){
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	file_put_contents($Section1H,$_POST['head1']);
	header(sprintf('Location: %s', $url));
	exit();
}}
// read the textfile
$headd1 =file_get_contents($Section1H);
$textt1 = file_get_contents($Section1);





// check if form has been submitted
if (isset($_POST['text1']))
{
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section1, $_POST['text1']);

    // redirect to form again
    
    header(sprintf('Location: %s', $url));
    exit();
}}
// forBackground

if(isset($_POST["Section1Bg"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="Section1Bg.jpg"){
		
	$_SESSION['dafuc']=$_POST["dafuc"];
    $target_dir = "Pic/Section1/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}
?>
<?php  
		/*==================================================================================================*/

/*=================================              Section 2          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/
$Section2H='Text/DescriptionHead/Section2H.txt';
$Section2 = 'Text/DescriptionTextDiv/Section2.txt';
if (isset($_POST['head2'])){
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	file_put_contents($Section2H,$_POST['head2']);
	header(sprintf('Location: %s', $url));
	exit();
}}
// read the textfile
$headd2 =file_get_contents($Section2H);
$textt2 = file_get_contents($Section2);





// check if form has been submitted
if (isset($_POST['text2']))
{if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section2, $_POST['text2']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    
    exit();
}}
if(isset($_POST["Section2Bg"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="Section2Bg.jpg"){
    $target_dir = "Pic/Section2/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

  ?>
<?php  
		/*==================================================================================================*/

/*=================================              Section 3          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/
$Section3H='Text/DescriptionHead/Section3H.txt';
$Section3 = 'Text/DescriptionTextDiv/Section3.txt';
if (isset($_POST['head3'])){
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	file_put_contents($Section3H,$_POST['head3']);
	header(sprintf('Location: %s', $url));
	exit();
}}
// read the textfile
$headd3 =file_get_contents($Section3H);
$textt3 = file_get_contents($Section3);





// check if form has been submitted
if (isset($_POST['text3']))
{if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section3, $_POST['text3']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    
    exit();
}}
if(isset($_POST["Section3Bg"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="Section3Bg.jpg"){
    $target_dir = "Pic/Section3/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}

  ?>

<?php  
		/*==================================================================================================*/

/*=================================              Section 4          ==================================*/

/*========================================🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇🡇======================================*/
$Section4H='Text/DescriptionHead/Section4H.txt';
$Section4 = 'Text/DescriptionTextDiv/Section4.txt';
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
{if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
    // save the text contents
    file_put_contents($Section4, $_POST['text4']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    
    exit();
}}

if(isset($_POST["Section4Bg"])) {
	if (isset($_POST['dafuc'])){
	$_SESSION['dafuc']=$_POST["dafuc"];
	if($_FILES['fileToUpload']['size'] < 1000000){
	if ($_FILES["fileToUpload"]["name"]="Section4Bg.jpg"){
    $target_dir = "Pic/Section4/";
$target_file = $target_dir .($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
}
}else{echo "<script>alert('Put an image with less than 1Mb size')</script>";}
}
}
  ?>
<!-- HTML form -->
<html>
<head>
	<meta name="viewport" content="width=device-width ,initial-scale=0.4 maximum-scale=1 "/>
<style>

@media (max-width:73em){html,body{font-size:1vw;}}

body{background-color:rgb(36,36,36);
	
}
textarea{
	min-width:35em;
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
#Section1Proc{

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
#Section2Proc{
	overflow:hidden;
	display:flex;
	flex-direction:column;
	font-size:1.5em;
	display:block;
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
#Section3Proc{
	display:flex;
	flex-direction:column;
	font-size:1.5em;
	display:block;
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
#Section4Proc{
	display:flex;
	flex-direction:column;
	font-size:1.5em;
	display:block;
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
#SectionBgNow1{position:absolute;bottom:4.5em;left:20em;}
#SectionBgNow1 img{width:20em; height:10em;margin-top:-1em}

#SectionBgNow2{position:absolute;bottom:4.5em;left:20em;}
#SectionBgNow2 img{width:20em; height:10em;margin-top:-1em}

#SectionBgNow3{position:absolute;bottom:4.5em;left:20em;}
#SectionBgNow3 img{width:20em; height:10em;margin-top:-1em}

#SectionBgNow4{position:absolute;bottom:4.5em;left:20em;}
#SectionBgNow4 img{width:20em; height:10em;margin-top:-1em}

#Sec1Prev{
width:15em;
height:15em;
}
#Sec2Prev{
width:15em;
height:15em;
}
#Sec3Prev{
width:15em;
height:15em;	
}
#Sec4Prev{
width:15em;
height:15em;	
}

#ScrollToSection1{
position:fixed;
right:2em;
top:12em;
}
#ScrollToSection2{
position:fixed;
right:2em;
top:22em;	
}
#ScrollToSection3{
position:fixed;
right:2em;
top:32em;	
}
#ScrollToSection4{
position:fixed;
right:2em;
top:42em;	
}
#ScrollToPreview{
position:fixed;
right:2em;
top:52em;	
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

<p id="fontme"> From here you can change the text of your webpage.If you need any "core" change contact me at [...].<br/>The picture here shows an example of Section 1 where Section,Head and MainText goes to,(Its the same for the rest):</p></div>



<div id="guide"><img src="Pic/Preview1.png"></div>

<!--=================================               HTML SECTION 1         ==================================-->

	<div id="Section1Proc">		
	<p class="textCenter">SECTION 1</p>
	<div class="WrapForLeftSpace">
												<!--head-->
	<form action="" method="post">
	<p>Head(till 4 words for better view)</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="head1"><?php echo htmlspecialchars($headd1) ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>


												<!--MainText-->		
<form action="" method="post">
	<p>MainText</p>
	<input  name="dafuc" type="hidden" value="">
<textarea name="text1"><?php echo htmlspecialchars($textt1) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>
	

												<!--Current image-->	
<div id="SectionBgNow1">
<p>Current Picture:</p>         
<div class="NoFitPreview">This doesnt show how it fits<br/>Check the website for that(scroll down at the end or <br/>
	<a href="index.php" style="text-decoration:none;color:lightblue;">Click here</a>)to redirect to webpage</div>
<img  src="Pic/Section1/Section1Bg.jpg">
</div>


												<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
	<p>-Here you can change the background image of the Section.<br/>-Recommented size:1500x450.<br/>-Whatever the resolution/size of picture it will	fit into the whole Section.<br/>-Even though if the picture is bigger than 1500x450 <br/>it will simple have different view-ratio<br/>-If it is smaller than this size it will just "stretch" it and will seem like poor quality.</p>
	<p class="Important">Important:If you are looking at the main website page sometimes theres a chance<br/> you will need to retype the url(vastolorde.space)(not refresh)since it saves the cache<br/> of the previous image and wont show the new one.Chrome Saves it for sure
	so recommend to use firefox</p>
    <img id="Sec1Prev" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload" 
    onchange="document.getElementById('Sec1Prev').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section1Bg">
</form>
</div>





</div>


												<!--=====END======-->


<!--------------------------------------------------HTML SECTION 2------------------------------------------->

<div id="Section2Proc">
	<p class="textCenter">SECTION 2</p>
	<div class="WrapForLeftSpace">
													 <!--head-->
	<form action="" method="post">
	<p>Head(till 4 words for better view)</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="head2"><?php echo htmlspecialchars($headd2) ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>

													<!--MainText-->
<form action="" method="post">
	<p>MainText</p>
	<input  name="dafuc" type="hidden" value="">
<textarea name="text2"><?php echo htmlspecialchars($textt2) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>

													<!--Current image-->
<div id="SectionBgNow2">
<p>Current Picture:</p>         
<div class="NoFitPreview">This doesnt show how it fits<br/>Check the website for that(scroll down at the end or <br/>
	<a href="index.php" style="text-decoration:none;color:lightblue;">Click here</a>)to redirect to webpage</div>
<img  src="Pic/Section2/Section2Bg.jpg">
</div>

	
													<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
	<p>-Here you can change the background image of the Section.<br/>-Recommented size:1500x450.<br/>-Whatever the resolution/size of picture it will	fit into the whole Section.<br/>-Even though if the picture is bigger than 1500x450 <br/>it will simple have different view-ratio<br/>-If it is smaller than this size it will just "stretch" it and will seem like poor quality.</p>
	<p class="Important">Important:If you are looking at the main website page sometimes theres a chance<br/> you will need to retype the url(vastolorde.space)(not refresh)since it saves the cache<br/> of the previous image and wont show the new one.Chrome Saves it for sure
	so recommend to use firefox</p>
    <img id="Sec2Prev" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload" 
    onchange="document.getElementById('Sec2Prev').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section2Bg">
    
    
</form>

</div>
</div>




													<!--=====END======-->

															
<!------------------------------------------------------HTML SECTION 3--------------------->

<div id="Section3Proc">
	<p class="textCenter">SECTION 3</p>
	<div class="WrapForLeftSpace">
													<!--head-->
	<form action="" method="post">
	<p>Head(till 4 words for better view)</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="head3"><?php echo htmlspecialchars($headd3) ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>

													<!--MainText-->
<form action="" method="post">
	<p>MainText</p>
	<input  name="dafuc" type="hidden" value="">
<textarea name="text3"><?php echo htmlspecialchars($textt3) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>


													<!--Current image-->

<div id="SectionBgNow3">
<p>Current Picture:</p>         
<div class="NoFitPreview">This doesnt show how it fits<br/>Check the website for that(scroll down at the end or <br/>
	<a href="index.php" style="text-decoration:none;color:lightblue;">Click here</a>)to redirect to webpage</div>
<img  src="Pic/Section3/Section3Bg.jpg">
</div>


												<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
	<p>-Here you can change the background image of the Section.<br/>-Recommented size:1500x450.<br/>-Whatever the resolution/size of picture it will	fit into the whole Section.<br/>-Even though if the picture is bigger than 1500x450 <br/>it will simple have different view-ratio<br/>-If it is smaller than this size it will just "stretch" it and will seem like poor quality.</p>
	<p class="Important">Important:If you are looking at the main website page sometimes theres a chance<br/> you will need to retype the url(vastolorde.space)(not refresh)since it saves the cache<br/> of the previous image and wont show the new one.Chrome Saves it for sure
	so recommend to use firefox</p>
    <img id="Sec3Prev" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload" 
    onchange="document.getElementById('Sec3Prev').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section3Bg">
    
    
</form>
</div>
</div>


													<!--=====END======-->


<!-------------------------------------------------------HTML SECTION 4--------------------->

<div id="Section4Proc">
	<p class="textCenter">SECTION 4</p>
	<div class="WrapForLeftSpace">
													<!--head-->
	<form action="" method="post">
	<p>Head(till 4 words for better view)</p>
	<input  name="dafuc" type="hidden" value="">
	<textarea name="head4"><?php echo htmlspecialchars($headd4) ?></textarea>
	<input type="submit" value="Paste" />
	<input type="reset" value="Reset" />
	</form>

													<!--MainText-->
<form action="" method="post">
	<p>MainText</p>
	<input  name="dafuc" type="hidden" value="">
<textarea name="text4"><?php echo htmlspecialchars($textt4) ?></textarea>
<input type="submit" value="Paste" />
<input type="reset" value="Reset"/>
</form>

													<!--Current image-->
<div id="SectionBgNow4">
<p>Current Picture:</p>   
<div class="NoFitPreview">This doesnt show how it fits<br/>Check the website for that(scroll down at the end or <br/>
	<a href="index.php" style="text-decoration:none;color:lightblue;">Click here</a>)to redirect to webpage</div>
<img  src="Pic/Section4/Section4Bg.jpg">
</div>


													<!--Upload image-->
<form action="" method="post" enctype="multipart/form-data">
<p>-Here you can change the background image of the Section.<br/>-Recommented size:1500x450.<br/>-Whatever the resolution/size of picture it will	fit into the whole Section.<br/>-Even though if the picture is bigger than 1500x450 <br/>it will simple have different view-ratio<br/>-If it is smaller than this size it will just "stretch" it and will seem like poor quality.</p>
	<p class="Important">Important:If you are looking at the main website page sometimes theres a chance<br/> you will need to retype the url(vastolorde.space)(not refresh)since it saves the cache<br/> of the previous image and wont show the new one.Chrome Saves it for sure
	so recommend to use firefox</p>
    <img id="Sec4Prev" alt="Click at browse to choose the image then click at Upload Image" width="300" height="300" />
    <input  name="dafuc" type="hidden" value="">
    <input type="file" name="fileToUpload" 
    onchange="document.getElementById('Sec4Prev').src = window.URL.createObjectURL(this.files[0])">
    <input type="submit" value="Upload Image" name="Section4Bg">
    
    
</form>

</div>
</div>

													
													<!--=====END======-->


<div style="font-size:1.5em;color:red;min-height:4em;width:100%;border-size:1px;border-style:solid;border-color:black;display:flex;align-items:center;justify-content:center;">Here is the preview of the webpage just to check the result.The interaction with it is disabled to prevent mistakes(refresh if not showing all of it)</div>
<div> 
    <object id="RealView" type="text/html" data="index.php">
    </object>
 </div>
<div style="position:fixed;bottom:0;"><input  name="dafuc" type="text" value=""></div>

<div id="ScrollToSection1"><input type="radio" id="ScrollSection1" class="hide" name="Destination" onclick="ScrollToSection1()">
	<label for="ScrollSection1">  <div id="ColorChange1" class="circle">S1</div></label>
</div>


<div id="ScrollToSection2"><input type="radio" id="ScrollSection2" class="hide" name="Destination" onclick="ScrollToSection2()">
	<label for="ScrollSection2">  <div id="ColorChange2" class="circle">S2</div></label>
</div>
<div id="ScrollToSection3"><input type="radio" id="ScrollSection3" class="hide" name="Destination" onclick="ScrollToSection3()">
	<label for="ScrollSection3">  <div id="ColorChange3" class="circle">S3</div></label>
</div>
<div id="ScrollToSection4"><input type="radio" id="ScrollSection4" class="hide" name="Destination" onclick="ScrollToSection4()">
	<label for="ScrollSection4">  <div id="ColorChange4" class="circle">S4</div></label>
</div>
<div id="ScrollToPreview"><input type="radio" id="ScrollPreview" class="hide" name="Destination" onclick="ScrollToPreview()">
	<label for="ScrollPreview">  <div id="ColorChange5" class="circle">Prev</div></label>
</div>

</div><!--Wrapper-->
<script type="text/javascript">
	var z;
	function getScroll(){
	var y=document.getElementById("AsLong").scrollTop;	
	var els=document.getElementsByName("dafuc");
for (var i=0;i<els.length;i++) {els[i].value=y;}
	z=y;
if (z>=0 && z<1534){
	s1.checked=true;
	document.getElementById("ColorChange1").style.backgroundColor="red";	
}	
else{
	document.getElementById("ColorChange1").style.backgroundColor="grey";
}

if(z>=1534 && z<2534){
	s2.checked=true;
	document.getElementById("ColorChange2").style.backgroundColor="red";
	
}
	
else{
	document.getElementById("ColorChange2").style.backgroundColor="grey";
}
if(z>=2534 && z<3534){
	s3.checked=true;
	document.getElementById("ColorChange3").style.backgroundColor="red";	
}	
else{
	document.getElementById("ColorChange3").style.backgroundColor="grey";
}

if(z>=3534 && z<4534){
	s4.checked=true;
	document.getElementById("ColorChange4").style.backgroundColor="red";
}
else{
	document.getElementById("ColorChange4").style.backgroundColor="grey";
}

 if(z>=4534){
	sP.checked=true;
	document.getElementById("ColorChange5").style.backgroundColor="red";
}
else{
	document.getElementById("ColorChange5").style.backgroundColor="grey";
}
	




}
</script>
<script>
	window.onload=function(){saveMe()};
	function saveMe(){
	var j = <?php echo json_encode($_SESSION['dafuc']); ?>;
	
		window.scrollTo(0,j);

	}
	</script>
<script>
	var s1=document.getElementById("ScrollSection1");
var s2=document.getElementById("ScrollSection2");
var s3=document.getElementById("ScrollSection3");
var s4=document.getElementById("ScrollSection4");
var sP=document.getElementById("ScrollPreview");
function ScrollToSection1(){
window.scrollTo(0,969);
}
function ScrollToSection2(){
window.scrollTo(0,2050);
}	
function ScrollToSection3(){
window.scrollTo(0,3139);
}	
function ScrollToSection4(){
window.scrollTo(0,4219);
}
function ScrollToPreview(){
window.scrollTo(0,5291);
}






</script>
</body>
</html>