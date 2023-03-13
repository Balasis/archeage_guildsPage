  var k=4;
  howtriggers2(k);
function howtriggers2(p){
k=k+=p;
var sliders2=document.getElementsByClassName("SliderDiv2");
var sliders2Zoom=document.getElementsByClassName("SliderDiv2Zoom");
 if (k<1){k=sliders2.length;}
 if (k>sliders2.length){k=1;}
 for (i=0;i<sliders2.length;i++){ 
 sliders2[i].style.display="none";
 }
  for (z=0;z<sliders2Zoom.length;z++){
 
 sliders2Zoom[z].style.display="none";
 }
sliders2[k-1].style.display="block";
sliders2Zoom[k-1].style.display="block";
}