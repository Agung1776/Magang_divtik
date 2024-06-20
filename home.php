<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;
      background-color:white;
}
.mySlides {display: none;
           /* margin-left:-303px; */
           margin-top:-10px;
           z-index:0;
           position: relative;
}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100px;
  position: relative;
  display:none;
  color: #2F4F4F;
}

.divtik{
  background-color:black;
  margin-top:-924px;
  z-index:1;
  position: relative;
  width:500px; 
  height:900px;
	transform: skew(-20deg);
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: white;
  border-radius: 50%;
  display: none;
  transition: background-color 0.6s ease;
}
.hitam{
  background-color:black;
  margin-top:-900px;
  /* margin-left:-305px; */
  z-index:1;
  position: relative;
  width:500px; 
  height:900px;
  opacity:1;
  transform: skew(20deg);
}
.text-divtik{
  color:white;
  opacity:1;
  text-align: center;
  padding: 100px;
  transform: skew(-20deg);

}
.pinfo{
  margin-left:-200px;
  background-color:white;
  width:1590px;
  height:1000px;
}
.p-divtik{
  height:250px;
  width:250px;
  margin-left:50%;
  margin-top:100px;
  opacity:1;
  transform: skew(-20deg);

}
.tu{
  margin-top:-900px;
   margin-left:10%; 
}
.pidio{
  margin-top:-300px;
  margin-left:50%;
}
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 8s;
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: 4}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 3000px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>


<div class="mySlides fade">
  <img src="./img/fotog.jpg" style="width:100%; height:900px;">
</div>

<div class="mySlides fade">
  <img src="./img/Kapolri.jpg" style="width:100%; height:900px;">
  
</div>

<div class="mySlides fade">
  <img src="./img/KaPXKaD.jpg" style="width:100%; height:900px;">
  
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<div class="divtik">
</div>
  <div class="hitam">
  <img class="p-divtik" src="./img/Lambang.jpeg" alt="Terjadi kesalahan.">
<div class="text-divtik"><h1><b>Divisi TIK Polri</b></h1><br><h3>Divisi Teknologi, Informasi dan Komunikasi Kepolisian Negara Republik Indonesia.</h3></div>
  </div>



<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>
<div class="pinfo">
</div>
<div class="tu">
    <h2><b>Divisi TIK</b></h2>
    <p>Divisi Teknologi Informasi dan Komunikasi Kepolisian<br>
Negara Republik Indonesia (Div TIK Polri) merupakan alat<br>
negara yang berperan dalam menyelenggarakan fungsi<br>
pembinaan dan pengembangan sistem teknologi informasi dan<br>
komunikasi elektronika serta informasi manajerial termasuk<br>
jaringan telekomunikaksi di lingkungan Kepolisian Negara<br>
Republik Indonesia.</p>
  </div>
<div class="pidio">
 <iframe width="750" height="400" src="https://www.youtube.com/embed/w1zXUP-VTm0" >
  </iframe>
</div>
</body>
</html> 
<?php
include "footer.php";
?>