<?php //SUBMIT INPUTED DATA TO THE DATA BASE

include 'connect.php';
$number=$_GET['updatenumber'];

$sql="Select * from questions where Number=$number";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result); //got from dispaly.php to dispaly data in update form

$name=$row['Name'];
$mobile=$row['Mobile'];
$question=$row['Question'];

if(isset($_POST['submit'])){

    $name=$_POST['Name'];
    $mobile=$_POST['Mobile'];
    $question=$_POST['Question'];

    $sql="update questions set Number=$number,Name='$name',Mobile='$mobile',Question='$question'
    where Number=$number";

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


<!DOCTYPE html>
<head>
    <title>Question Page</title>
<style>
    .formcontainer{
        margin:100px;
        text-align:center;
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

<?php include 'header.php' ?>

<body>
<div class="formcontainer" my-5>
     <form method="post" action="">
        <div class="QesContainer">
            <label for="Name" class="headings">Name:</label><br>
            <input type="text" class="form-control" placeholder="Enter your name.." name="Name" autocomplete="off" value=<?php echo $name;?>>
        </div>

        <div class="QesContainer">
            <label for="mobile" class="headings">Mobile Number:</label><br>
            <input type="text" class="form-control" placeholder="Enter your mobile.." name="Mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div>

        <div class="QesContainer">
            <label for="question" class="headings">Question:</label><br>
            <input type="text" class="form-question" placeholder="Enter your question.." name="Question" autocomplete="off" value=<?php echo $question;?>>
        </div>

         <button type="submit" name="submit" class="btn">Update</button>
     </form>
</div>

<?php include 'footer.php' ?>

</body>
</html>


