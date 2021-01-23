$(document).ready(() => {
  
    $("#toggle").on("click", function () {
      $("#header").css("backgroundcolor='white'");
      $("#header").hide();
  });

});
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}