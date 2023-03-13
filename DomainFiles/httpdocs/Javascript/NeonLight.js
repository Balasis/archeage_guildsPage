setTimeout(RepeatN,4000);/*Wait Till Description Menu Gets to position*/
var myvar;

function RepeatN(){
var x=0;/*the px of spreading neon*/
var y=0;/*the judger for Neonon to Neonoff*/
var z=0;/*to stop the loop inside (to do it only 1 wave of light) till restart with myvar*/
startOnce();/*Call it once before wait for Interval*/
myvar=setInterval(wrap,7000 );/*how often should neon */

		function wrap(){
if (!document.hidden){
					
					z=0;
					
					

													
													
												
   													
												var ledon=setInterval(stepB,125);/**/
													function stepB(){
													if (y==0 && z!=1){
													x=x+2.5;
		
													if (x==25){y=25;clearInterval(ledon);}
													const MakeItString=x.toString();
													const led=document.getElementById("AfterVideo").style.boxShadow = "0px 0px" +" " +x+ "px #f8f8ff";
																	}}
													

													var ledoff=setInterval(stepneon,125);/**/	
													function stepneon(){
													if (y==25 && z!=1){
													x=x-2.5;
													if (x==0){y=0;z=1;clearInterval(ledoff);}
													const MakeItString=x.toString();
													console.log(x);
													const led=document.getElementById("AfterVideo").style.boxShadow = "0px 0px"+" " +x+ "px #f8f8ff";			
																	}}}
												}

function startOnce(){/*Single neon use start up before loop start*/
	var e=25;
	
	

	var ledcr=setInterval(stepdam,55);	/*how fast to neon off (starts from neon on 25 px)*/
   function stepdam(){	
   								
e=e-2.5;

if (e==0){clearInterval(ledcr);}
const MakeItString=e.toString();
console.log(e);
const dam=document.getElementById("AfterVideo").style.boxShadow = "0px 0px"+" " +e+ "px #f8f8ff";			
											}
														
	
}






						}
						

						