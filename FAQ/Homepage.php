<!DOCTYPE html>
<head>
    <title>
        Default-Home
    </title>
    <link rel="stylesheet" href="home.css">
</head>

<?php include 'header.php'?>

<body>

    <div class="home">
        <div class="slideshow-container">

             <div class="mySlides fade">
             <img src="tamara.jpg"  class="homeimage" >
                 <div class="text-overlay">
                 <h4>New Summer Collection 2023</h4>
                 <h1>NEW ARRIVALS</h1>
                 <button class="shopbtn">SHOP</button>
                 </div>
             <div class="text">Summer Collection</div>
             </div>

             <div class="mySlides fade">
             <img src="clark.jpg" class="homeimage">
                 <div class="text-overlay">
                 <h4>Men Collection 2023</h4>
                 <h1>NEW ARRIVALS</h1>
                 <button class="shopbtn">SHOP</button>
                 </div>
             <div class="text">Men Collection</div>
             </div>

             <div class="mySlides fade">
             <img src="burgess-milner.jpg"  class="homeimage">
                 <div class="text-overlay">
                 <h4>Women Collection 2023</h4>
                 <h1>NEW ARRIVALS</h1>
                 <button class="shopbtn">SHOP</button>
                 </div>
             <div class="text">New Arrivals</div>
             </div>

         </div>
    </div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>




</body>

<?php include 'footer.php'?>

</html>