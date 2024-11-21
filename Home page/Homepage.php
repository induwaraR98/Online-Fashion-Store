<!DOCTYPE html>
<head>

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Categories.css">
    <link rel="stylesheet" href="Header and footer.css">

</head>



<body>
<!-- header begining -->
<div class="header">
        <header>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="logo" width="200px" height="100px">
            </div>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="\Online Fashion Store\Product_page\products_page.php">Shop</a></li>
                    <li><a href="\Online Fashion Store\Blog customer\Blog Customer page.php">Blog</a></li>
                    <li><a href="\Online Fashion Store\About us\aboutus.php">About</a></li>
                    <li><a href="\Online Fashion Store\Contact us\contact_us.php">Contact</a></li>
                    <li><a href="\Online Fashion Store\Login & register\customer_login.php">Login</a></li>
                    <li><a href="\Online Fashion Store\FAQ\faqpage.php">FAQ</a></li>
                    <li><a href="\Online Fashion Store\Our story\Our story.php">Our story</a></li>
                </ul>
            </nav>
            <a href="\Online Fashion Store\Product_page\cart.php"><img src="cart.png" alt="cart" width="60px" height="60px"></a>
           </div> 
           

    </div>
    </div>
</header>
<!-- header ending -->

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
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

 

<h5 class="categories_header">CATEGORIES</h5>

  <div class="quotes">
    <div class="card">
      <div class="box box1">
        <h2>Mens</h2>
        <img src="mens.jpg">
      </div>
      <div class="bg"><img src="back1.jpg"></div>
    </div>

    <div class="card">
      <div class="box box2">
        <h2>Womens</h2>
        <img src="woman.jpg">
      </div>
      <div class="bg"><img src="woman.jpg"></div>
    </div>

    <div class="card">
      <div class="box box3">
        <h2>Accessories</h2>
        <img src="Acces.jpg">
      </div>
      <div class="bg"><img src="Acces.jpg"></div>
    </div>



  </div>

  <div class="banner-container">
  <div class="banner1">
  <p>SALE!!</p>
  <img src="Banner1.jpg" height="450px" width="300px">
  </div>

<div class="banner2">
  <p>Clothes that are sure to heat up your winter.</p>
  <img src="Banner2.jpg" height="400px" width="300px">
  </div>

  <div class="banner3">
  <p>Classy from head to toe.</p>
  <img src="Banner3.jpg" height="400px" width="300px">
  </div>


  </div>





<!-- footer begining -->
<footer class="footer" style="margin-top: 200px;">
    <div class="footer-container">
<div class="footer-row">

<div class="footer-col">
    <h3>CATEGORIES</h3>
    <ul class="footerul">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Watches</a></li>
    </ul>
</div>

<div class="footer-col">
    <h3>HELP</h3>
    <ul class="footerul">
        <li><a href="#">Track Order</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Shopping</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="\Online Fashion Store\Login & register\customer_login.html">Login</a></li>
    </ul>
</div>

<div class="footer-col">
    <h3>Get in Touch</h3>
    <p id="GetInTouch">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
        Repudiandae odio quae, fugit beatae ad aliquam,<br>  
        asperiores maiores obcaecati ex aspernatur<br>  
        officia facere dolores expedita totam<br>  
        tenetur sint unde natus rerum?<br> 
    </p>
</div>

<div class="footer-col">
    <h3>FOLLOW US</h3>
    <input type="email" name="email" id="subcribeEmail" placeholder="example@gmail.com">
    <a href="#" class="footerbtn">Subcribe to Email</a>
    <div class="socialMediaIcons">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
</div>
</div>



</div>


</div>
<div class="copyright">
    <p>Copyright &copy;2023 All right reserved</p>
</div>


</footer>
<!-- footer ending -->



</body>





</html>