
<?php

include 'connectdb.php';

$sql = "SELECT * FROM products";              //connect database
$all_product = $connect->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEFAULT-PRODUCTS</title>
    
    <link rel="stylesheet" href="products_page_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

/* quantity  */
.quantity{
    margin-top: 7px;
    text-align:center;
    border:none;
    padding: 5px;
    width: 150px;
    border-radius: 5px;
    
}
</style>


</head>
<body>
    <div class="header">
        <header>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="logo" width="125px">
            </div>
            <nav>
                <ul>
                <li><a href="\Online Fashion Store\Home page\Homepage.php">Home</a></li>
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
</header>
</div>
  <!--header ending--> 



<!--begining of the categories-->

<h5 class="category-title">ALL CATEGORIES</h5> <!--create categories title-->


<div class="categories">
    <div class="small-container">
    <div class="row">
    
    <?php
$query = "select * from products order by id asc";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($all_product)) {  
?>
<!-- php code to get data from DB -->
<div class="col-1">
    <form method="post" action="cart.php?action=add&id=<?php echo $row["id"];
    echo '<script>window.location="products_page.php"</script>';  ?>
        <img src="uploaded_img/<?php echo $row["image"]; ?>" alt="a product">
        <!-- get the relevant image and other details from DB -->
        <h4><?php echo $row["name"]; ?></h4>
        <p>LKR <?php echo $row["price"]; ?></p>
        <input type="text" name="quantity" class="quantity" value="1">
        <!-- quantity box -->
        <br>
        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
        <input type="submit" class="addToCart" name="add" value="Add to cart">
        <!-- created add to cart button -->
        <button class="buyNow">Buy now</button>
        <!-- created buy now button -->
    </form>
</div>
<?php
}
?>

    
       </div> 
    </div>   
    </div> 
</div>

<!--ending of the categories-->


  <!--footer begining--> 
<footer class="footer">
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
        <li><a href="\Online Fashion Store\FAQ\faqpage.php">FAQs</a></li>
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
</body>
</html>