var x = 0;

function sliderBiatch(dx)
{

   var bloc = document.getElementById("mycarou");

   // on enregistre la nouvelle position

   x += dx;


   // on place le bloc

   bloc.style.left = (parseInt(x) + parseInt(x) )+ "px";
   console.log(x);

}