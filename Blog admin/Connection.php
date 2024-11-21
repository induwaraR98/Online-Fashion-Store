<?php
    $con = new mysqli("localhost","root","","blog_crud");

    if($con->connect_error){
        die("Connection failed :".$con->connect_error);
    }

?>