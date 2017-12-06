$("[data-menu-underline-from-center] a").addClass("underline-from-center");

var x =0;
var ppt =0;

function suivant(dx)
{
	var bloc =document.getElementById("putain")

   x += dx;

   // 

   bloc.style.left = -x+ppt + "px";

}
function precedent(dx)
{
	var bloc =document.getElementById("putain")

   ppt += dx;

   // on place le bloc

   bloc.style.left = -(x-ppt) + "px";

}
