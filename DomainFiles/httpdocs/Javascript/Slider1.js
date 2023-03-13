  var g=4;
  howtriggers1(g);
function howtriggers1(p){
g=g+=p;

var sliders1=document.getElementsByClassName("SliderDiv1");
var sliders1Zoom=document.getElementsByClassName("SliderDiv1Zoom");
 if (g<1){g=sliders1.length;}

 if (g>sliders1.length){g=1;}
 for (i=0;i<sliders1.length;i++){
 
 sliders1[i].style.display="none";
 }
 
 for (z=0;z<sliders1Zoom.length;z++){
 
 sliders1Zoom[z].style.display="none";
 }
sliders1[g-1].style.display="block";
sliders1Zoom[g-1].style.display="block";
}