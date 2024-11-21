<?php
include 'connectdb.php';
?>


<?php
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['phonenumber']) && isset($_POST['password']) && isset($_POST['cpassword'])&& isset($_POST['address']) && isset($_POST['gender'])){
    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    //user name status
$existQuery = "SELECT * FROM registration WHERE username = '$username'";
$existResult = mysqli_query($connect,$existQuery);

//check password confirmation
if($password != $cpassword) {
    echo "<SCRIPT> //not showing me this
        alert('password confirmation faild! please try again.');
        window.location.replace('register.html');
    </SCRIPT>";
}

// check username exist or not
elseif(mysqli_num_rows($existResult)>0){

    echo "<SCRIPT> //not showing me this
        alert('username is already exist! please try again.');
        window.location.replace('register.html');
    </SCRIPT>";

}

//Insert data
else{
    $sql = "INSERT INTO registration (name,username,birthday,email,phonenumber,password,address,gender) VALUES('$name','$username','$birthday','$email','$phonenumber','$password','$address','$gender');";
    $result = mysqli_query($connect, $sql);
    echo "<SCRIPT>alert('Registration success!');</SCRIPT>";

    $logQuary = "SELECT * FROM registration WHERE username = '$username';";
    $logResult = mysqli_query($connect,$logQuary);
    $row = mysqli_fetch_assoc($logResult);

    session_start();
    $_SESSION["id"] = $row['User_ID'];                                 
    $_SESSION["name"] = $row['name'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["birthday"] = $row['birthday'];
    $_SESSION["phonenumber"] = $row['phonenumber'];
    $_SESSION["address"] = $row['address'];
    $_SESSION["gender"] = $row['gender'];

    header("Location:index.html");
}

}

?>