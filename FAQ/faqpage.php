<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEFAULT-FAQ</title>
    
	<script src="faqjs.js"></script> 
    <link rel="stylesheet" href="faqcss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php include 'header.php' ?>

<!--FAQ body begining-->
<body>
<div class="page">

     <P class="faq">FAQ's</P>
     <P class="faqpara">Have Question? We are here to help.</P>
     <br><br>

     <!--search bar-->
         <form class="faq" action="/action_page.php" style="margin:auto;max-width:300px">
         <input type="text" placeholder="Search.." name="search2">
         <button type="submit"><i class="fa fa-search"></i></button>
         </form>
     <!--end of search bar-->

     <br><br><br><br><br>
	 
     <a href="#"  class="dropdown-trigger01" id="linestyle" style="color:black;">How do I place an order?</a>
	 <p class="dropdown-paragraph01" style="color:blue;"><br>To place an order , browse through our online store and select the desired items. Add them to your shopping cart , review your order , and proceed to checkout .</p>
	 <br><br><hr><br>
	 
     <a href="#" class="dropdown-trigger02" id="linestyle" style="color:black;">What payment do you accept?</a>
	 <p class="dropdown-paragraph02" style="color:blue;"><br>We accept various payment methods to make your shopping experience convenient. You can pay for your order using major credit cards (Visa, Mastercard, American Express), debit cards, PayPal, and Apple Pay.</p>
	 <br><br><hr><br>
		 
	 <a href="#" class="dropdown-trigger03" id="linestyle" style="color:black;">Is it safe to enter my payment information on your web site?</a>
	 <p class="dropdown-paragraph03" style="color:blue;"><br>Yes, it is safe to enter your payment information on our website. We use industry-standard encryption technology and trusted payment service providers to ensure the security and confidentiality of your data.</p>
	 <br><br><hr><br>
		 
	 <a href="#" class="dropdown-trigger04" id="linestyle" style="color:black;">What are your shipping options and cost?</a>
	 <p class="dropdown-paragraph04" style="color:blue;"><br>Shipping charges may apply depending on your order total and shipping destination. During the checkout process, the shipping costs will be calculated and displayed before you confirm your order.</p>
	 <br><br><hr><br>
	
	 <a href="#" class="dropdown-trigger05" id="linestyle" style="color:black;">How long will it take to recive my order?</a>
	 <p class="dropdown-paragraph05" style="color:blue;"><br>The delivery time depends on your location and the shipping method you choose during checkout. Typically, orders are processed within 1-2 business days, and the delivery time ranges from 3 to 7 business days for domestic orders.</p>
	 <br><br><hr><br>

	 <a href="#" class="dropdown-trigger06" id="linestyle" style="color:black;">What is your return/exchange policy?</a>
	 <p class="dropdown-paragraph06" style="color:blue;"><br>We want you to be completely satisfied with your purchase. If for any reason you are not happy with your order, we offer a hassle-free return and exchange policy.</p>
	 <br><br><hr><br>

	 <a href="#" class="dropdown-trigger07" id="linestyle" style="color:black;">Do you offer any discount or promotions?</a>
	 <p class="dropdown-paragraph07" style="color:blue;"><br> We occasionally offer free shipping promotions, so keep an eye out for those!</p>
	 <br><br><hr><br>

	 <a href="#" class="dropdown-trigger08" id="linestyle" style="color:black;">What if I have a question or need assistance?</a>
	 <p class="dropdown-paragraph08" style="color:blue;"><br>You can contact our support team by cliking the button below.</p>
	 <br><br><hr><br>
	 
	 <br>
     <!--Image of people-->
	 <div align="center">
	 <img src="peoplephoto.png" alt="image" style="width:160px;height:80px;">
	 </div>
	 
	 <p class="bottompara01">Still Have a Questions?</p>
	 <p class="bottompara02">Can't find the answer you're looking for? Please submit your Question to our friendly team.</P>
	 
	 <!--SUBMIT BUTTON-->
	 <button class="helpbtn"><a href="questions.php" class="helphref">Help</a></button>
	 
</div>

<?php include 'footer.php' ?>


</body>
</html>