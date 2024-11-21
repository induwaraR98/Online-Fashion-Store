<?php
include 'connect.php';

if(isset($_GET['deletenumber'])){
    $number=$_GET['deletenumber'];

    $sql="delete from questions where Number=$number";
    $result=mysqli_query($con,$sql);

    if($result){
       // echo "Deleted successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>