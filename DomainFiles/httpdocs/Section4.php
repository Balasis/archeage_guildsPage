<?php include ('PhpSection4.php') ?>





<!DOCTYPE html>
<html>
<head>
<style>	
</style>
	<!--CSS-->
	<link rel="stylesheet" href="Section4.css" type="text/css"/>
   	<!--JAVASCRIPT LIBRARY-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
		<!--ZOOMS of sliders-->
		<div id="ZoomImage1Wrap">
						
							<div  class="Slide1PositionZoom">
								<span class="xXx" onclick="CloseZoom1()">X</span>
					<div class="SliderDiv1Zoom">
  					<div class="numbertext1Zoom">1 / 5</div>
  					<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/1SlideS1.png"   ></div>
  					<div class="text1Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1a.txt")) ?></div>
					</div>

					<div class="SliderDiv1Zoom">
 						<div class="numbertext1Zoom">2 / 5</div>
  					<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/2SlideS1.png"  ></div>
  					<div class="text1Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1b.txt")) ?></div>
					</div>

					<div class="SliderDiv1Zoom">
 						<div class="numbertext1Zoom">3 / 5</div>
 					<div class="imgHeightZoom"> <img src="Pic/Section4/SlideSection4/Selection1/3SlideS1.png"  ></div>
 						<div class="text1Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1c.txt")) ?></div>
					</div>

					<div class="SliderDiv1Zoom">
 						<div class="numbertext1Zoom">4 / 5</div>
 						<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/4SlideS1.png"  ></div>
 						<div class="text1Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1d.txt")) ?></div>
					</div>

					<div class="SliderDiv1Zoom">
 						<div class="numbertext">5 / 5</div>
 					<div class="imgHeightZoom"> <img src="Pic/Section4/SlideSection4/Selection1/5SlideS1.png"  ></div>
 						<div class="text1Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1e.txt")) ?></div>
					</div>
					<a class="prev1Zoom" onclick="howtriggers1(-1)">&#10094;</a>
				<a class="next1Zoom" onclick="howtriggers1(1)">&#10095;</a>	

						<div class="SliderQuote1Zoom"><p><?php echo nl2br(file_get_contents("Text/Section4/Set1and2GroupNames/Set1.txt")) ?></p></div>
														
			</div>


					</div>


			<div id="ZoomImage2Wrap">
						
							<div  class="Slide2PositionZoom">
								<span class="xXx" onclick="CloseZoom2()">X</span>
					<div class="SliderDiv2Zoom">
  					<div class="numbertext2Zoom">1 / 5</div>
  					<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/1SlideS1.png"   ></div>
  					<div class="text2Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2a.txt")) ?></div>
					</div>

					<div class="SliderDiv2Zoom">
 						<div class="numbertext2Zoom">2 / 5</div>
  					<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/2SlideS1.png"  ></div>
  					<div class="text2Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2b.txt")) ?></div>
					</div>

					<div class="SliderDiv2Zoom">
 						<div class="numbertext2Zoom">3 / 5</div>
 					<div class="imgHeightZoom"> <img src="Pic/Section4/SlideSection4/Selection1/3SlideS1.png"  ></div>
 						<div class="text2Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2c.txt")) ?></div>
					</div>

					<div class="SliderDiv2Zoom">
 						<div class="numbertext2Zoom">4 / 5</div>
 						<div class="imgHeightZoom"><img src="Pic/Section4/SlideSection4/Selection1/4SlideS1.png"  ></div>
 						<div class="text2Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2d.txt")) ?></div>
					</div>

					<div class="SliderDiv2Zoom">
 						<div class="numbertext">5 / 5</div>
 					<div class="imgHeightZoom"> <img src="Pic/Section4/SlideSection4/Selection1/5SlideS1.png"  ></div>
 						<div class="text2Zoom"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2e.txt")) ?></div>
					</div>
					<a class="prev2Zoom" onclick="howtriggers2(-1)">&#10094;</a>
				<a class="next2Zoom" onclick="howtriggers2(1)">&#10095;</a>	

						<div class="SliderQuote2Zoom"><p><?php echo nl2br(file_get_contents("Text/Section4/Set1and2GroupNames/Set2.txt")) ?></p></div>
														
			</div>


					</div>				
		<div id="WholePageDiv">
			
			<?php include "navbar.php" ?>
			

				<!--VIDEO BEHIND MENU-->
				<div id="DivOfVideo">
				<?php include ("Text/Section4/VideoTag.txt") ?>
				<!--<iframe id="MuteMe" src="https://player.vimeo.com/video/345490534?loop=1"  allow="autoplay; fullscreen" allowfullscreen></iframe>-->

				<!--<video id="video"  autoplay="autoplay"

				src="https://redirect.veoh.com/flash/p/2/v1420011108WdWKADT/l142001110.mp4?ct=452bfa1560185f02a6f4bd268667a561469fdd51a4791292" muted="muted" autoplay="autoplay" type="mp4" preload="auto"
				playinline="playinline" loop>

				</video>-->
				</div>
				<!--VIDEO  END-->

			<div id="AfterVideo">
<!--Wings and shield-->
<div id="ChangeTestLeft"><img src="Pic/LeftWing.png"></div>
<div id="ChangeTest"><img src="Pic/Shield2.png"></div>
<div id="ChangeTestRight"><img src="Pic/RightWing.png"></div>
<!--End-->

			
				<div id="DescriptionDivs">
								<div id="Section1DivSub">
								<div id="SectionText">
					<h1><?php echo nl2br(file_get_contents("Text/Section4/head.txt")) ?></h1>
								<p> <?php echo nl2br(file_get_contents("Text/Section4/text.txt")) ?></p>	
								</div><!--SectionText -->
								<div id="SectionImage">
											<div class="slideshow-container" id="Slide1Position">

													<div class="SliderDiv1">
  													<div class="numbertext">1 / 5</div>
  													<div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection1/1SlideS1.png" style="width:100%" onclick="OpenZoom1()" ></div>
  													<div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1a.txt")) ?></div>
													</div>

													<div class="SliderDiv1">
 													 <div class="numbertext">2 / 5</div>
  													<div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection1/2SlideS1.png" style="width:100%" onclick="OpenZoom1()"></div>
  													<div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1b.txt")) ?></div>
													</div>

													<div class="SliderDiv1">
 													 <div class="numbertext">3 / 5</div>
 													<div class="imgHeight"> <img src="Pic/Section4/SlideSection4/Selection1/3SlideS1.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1c.txt")) ?></div>
													</div>

													<div class="SliderDiv1">
 													 <div class="numbertext">4 / 5</div>
 													<div class="imgHeight"> <img src="Pic/Section4/SlideSection4/Selection1/4SlideS1.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1d.txt")) ?></div>
													</div>

													<div class="SliderDiv1">
 													 <div class="numbertext">5 / 5</div>
 													 <div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection1/5SlideS1.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set1/Title1e.txt")) ?></div>
													</div>

													<a class="prev" onclick="howtriggers1(-1)">&#10094;</a>
													<a class="next" onclick="howtriggers1(1)">&#10095;</a>
														<div class="SliderQuote"><p><?php echo nl2br(file_get_contents("Text/Section4/Set1and2GroupNames/Set1.txt")) ?></p></div>
											</div><!--Slide1Position -->

											<div class="slideshow-container" id="Slide2Position">

													<div class="SliderDiv2">
  													<div class="numbertext">1 / 5</div>
  													<div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection2/1SlideS2.png" style="width:100%" onclick="OpenZoom1()"></div>
  													<div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2a.txt")) ?></div>
													</div>

													<div class="SliderDiv2">
 													 <div class="numbertext">2 / 5</div>
  													<div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection2/2SlideS2.png" style="width:100%" onclick="OpenZoom1()"></div>
  													<div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2b.txt")) ?></div>
													</div>

													<div class="SliderDiv2">
 													 <div class="numbertext">3 / 5</div>
 													 <div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection2/3SlideS2.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2c.txt")) ?></div>
													</div>

													<div class="SliderDiv2">
 													 <div class="numbertext">4 / 5</div>
 													 <div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection2/4SlideS2.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2d.txt")) ?></div>
													</div>

													<div class="SliderDiv2">
 													 <div class="numbertext">5 / 5</div>
 													 <div class="imgHeight"><img src="Pic/Section4/SlideSection4/Selection2/5SlideS2.png" style="width:100%" onclick="OpenZoom1()"></div>
 													 <div class="text"><?php echo nl2br(file_get_contents("Text/Section4/Set1and2Titles/Set2/Title2e.txt")) ?></div>
													</div>

													<a class="prev" onclick="howtriggers2(-1)">&#10094;</a>
													<a class="next" onclick="howtriggers2(1)">&#10095;</a>
														<div class="SliderQuote"><p><?php echo nl2br(file_get_contents("Text/Section4/Set1and2GroupNames/Set2.txt")) ?></p></div>
											</div><!--Slide1Position -->
										
								</div><!--SectionImage -->

				</div><!-- -->		
									
				</div><!--<=/Close Description Divs-->
				
			</div><!--<=/Close AfterVideo -->
<div style="margin-top:1em;margin-bottom:5em;color:white;"><p>I will be removed Soon just to keep the space</p></div>
					

		</div><!-- <=/ Close WholepageDiv-->

	</div><!-- <=/ Close wrapper-->
<script>
function OpenZoom1(){
var Zoom=document.getElementById("ZoomImage1Wrap");
Zoom.style.display="block";
}
function CloseZoom1(){
var Zoom=document.getElementById("ZoomImage1Wrap");
Zoom.style.display="none";	
}
function OpenZoom2(){
var Zoom2=document.getElementById("ZoomImage1Wrap");
Zoom.style.display="block";
}
function CloseZoom2(){
var Zoom2=document.getElementById("ZoomImage1Wrap");
Zoom.style.display="none";	
}

</script>

	<script>var muted=document.getElementById("MuteMe");var player=new Vimeo.player(muted);player.setVolume(0);</script>
	<script src="Javascript/Slider1.js">		</script>
	<script src="Javascript/Slider2.js">		</script>
	<script src="Javascript/NeonLight.js"></script>
	<script src="Javascript/BlueWingsScroll.js"></script>
	<script src="Javascript/MarginTopTextHeads.js"></script>
			<script src="Javascript/LoginMenu.js"></script>

<script src="Javascript/LoginMenuTwo.js"></script>
<noscript>
    <style type="text/css">    	
        #WrapperFromBodyToWholePageDiv {display:none;}
        body{background-image:url(Pic/NOjavascript.png);background-position:center;background-repeat:no-repeat;background-color:white;}
    </style>
 
</noscript>
	</body>
	</html>
