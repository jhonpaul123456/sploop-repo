





<!DOCTYPE html>    
<html lang="en">
<?php
include_once("head.php");

?>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<body onload="displaypage()"> 
<script type="text/javascript">
function displaypage()
{
    var t=setTimeout("displaydiv()",3000);// it will Delay for 3 seconds
}
function displaydiv()
{
// document.getElementById("wrapperdiv").style.display='block';
  window.location = "home"
}

</script>
<div class="container" >
<div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center animate__animated animate__bounceInLeft">   
        <img class="img-fluid" src="assets/images/splash/vr.png">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center animate__animated animate__bounceInRight">   
        <img class="img-fluid" src="assets/images/splash/sploop.png">
    </div>
</div>

</div>


</body> 
</html>
