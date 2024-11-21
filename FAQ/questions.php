<?php //SUBMIT INPUTED DATA TO THE DATA BASE WHEN CILCK THE SUBMIT BUTTON

include 'connect.php';

if(isset($_POST['submit'])){

    $name=$_POST['Name'];
    $mobile=$_POST['Mobile'];
    $question=$_POST['Question'];

    $sql="insert into questions(Name,Mobile,Question) values('$name','$mobile','$question')";

    $result=mysqli_query($con,$sql);

    if($result){
        //echo "Question submited successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<?php include 'header.php' ?>

<!DOCTYPE html>
<head>
    <title>Question Page</title>
<style>
    .formcontainer{
        margin:100px;
        text-align:center;
        margin-bottom:20px;
    }
    .form-control{
        width:600px;
        height:50px;
        border-radius:10px;
        margin-bottom:30px;
    }
    .headings{
        font-size:20px;
    }
    .form-question{
        width:600px;
        height:200px;
        border-radius:10px;
    }
    .btn{
        margin-top:20px;
        background-color:black;
        color:white;
        padding: 8px 30px; 
        margin: 30px 0px;
        border-radius: 20px;
    }
    .btn:hover{
        color:black;
        background:white;
    }
</style>

</head>
<body>
<div class="formcontainer" my-5>
     <form method="post" action="">
        <div class="QesContainer">
            <label for="Name" class="headings">Name:</label><br>
            <input type="text" class="form-control" placeholder="Enter your name.." name="Name" autocomplete="off">
        </div>

        <div class="QesContainer">
            <label for="mobile" class="headings">Mobile Number:</label><br>
            <input type="text" class="form-control" placeholder="Enter your mobile.." name="Mobile" autocomplete="off">
        </div>

        <div class="QesContainer">
            <label for="question" class="headings">Question:</label><br>
            <input type="text" class="form-question" placeholder="Enter your question.." name="Question" autocomplete="off">
        </div>

         <button type="submit" name="submit" class="btn">Submit</button>
     </form>
</div>

<?php include 'footer.php' ?>

</body>
</html>



