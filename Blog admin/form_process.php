

<?php

    require 'Connection.php';

    if(isset($_POST['submit1'])){

    $header = $_POST["Header1"];
    $date = $_POST["Date1"];
    $para = $_POST["Paragraph1"];
    

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
    //echo "Data inserted successfully";
    header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}

if(isset($_POST['submit2'])){

    $header = $_POST["Header2"];
    $date = $_POST["Date2"];
    $para = $_POST["Paragraph2"];

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
    //echo "Data inserted successfully";
    header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}

if(isset($_POST['submit3'])){

    $header = $_POST["Header3"];
    $date = $_POST["Date3"];
    $para = $_POST["Paragraph3"];

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
   //echo "Data inserted successfully";
   header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}  

if(isset($_POST['submit4'])){

    $header = $_POST["Header4"];
    $date = $_POST["Date4"];
        $para = $_POST["Paragraph4"];

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
   // echo "Data inserted successfully";
   header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}

if(isset($_POST['submit5'])){

    $header = $_POST["Header5"];
    $date = $_POST["Date5"];
    $para = $_POST["Paragraph5"];

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
    //echo "Data inserted successfully";
    header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}

if(isset($_POST['submit6'])){

    $header = $_POST["Header6"];
    $date = $_POST["Date6"];
    $para = $_POST["Paragraph6"];

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
   // echo "Data inserted successfully";
    header('location:show_table.php');

} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}
if(isset($_POST['create'])){

    $header = $_POST["createH"];
    $date = $_POST["createD"];
    $para = $_POST["createP"];
    

    $sql = "INSERT INTO crud(Blog_header,Blog_date,Blog_paragraph)
    VALUES('$header','$date','$para')";

if($con->query($sql)) {
    //echo "Data inserted successfully";
    header('location:show_table.php');
} else {
    echo "Error inserting data: " . $con->error;
}

    $con->close();
}

?>      

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                