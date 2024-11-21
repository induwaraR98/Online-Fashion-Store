<?php

@include 'connectdb.php';

$id = $_GET['edit'];
//check if form is submited
if(isset($_POST['update_product'])){
   
 // retrieve the product details from the form fields
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   //check if any required fields are empty
   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all!';    
   }else{                                                          //update the products in database with new details

      $update_data = "UPDATE products SET name='$product_name', price='$product_price', image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($connect, $update_data);

      if($upload){             //move the uploaded product images to specific folder called product_images
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location:admin_page.php');           //redirect to the admin page if update is successful

      }else{        //display error message if the update fails
         $message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DEFAULT-admin_update_page</title>
   <link rel="stylesheet" href="admin.css">
</head>
<body>

<?php
                        //display any error messages
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>

      <!-- display the current product details in field-->
      <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>" placeholder="enter the product price">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <!-- submit button for updating the product-->
      <input type="submit" value="update product" name="update_product" class="btn">
      <!-- a link to go back to admin page-->
      <a href="admin_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>