<?php
    require 'Connection_file.php'

    $Lname = $_POST["fullName"];
    $Lnic = $_POST["nic"];
    $Ldob = $_POST["dob"];
    $Laddress = $_POST["address"];
    $Lmobile = $_POST["mobile"];
    $Lemail = $_POST["email"];
    $Ljob = $_POST["jobTitle"];
    $Ltype1 = $_POST["type1"];
    $Ltype2 = $_POST["type2"];
    $Lgender = $_POST["gender"];
    $Lincome = $_POST["income"];
    $Lloantype = $_POST["loanType"];
    $Lamount = $_POST["loanAmount"];
    $Lpurpose = $_POST["purpose"];

    $sql = "INSERT INTO loan(Fullname,NIC,DOB,Address,Mobile_number,Email,Job_Title,
    Employment,Martial,Gender,Income,Loan_Type,D_amount,Loan_purpose) 
    VALUES ('$Lname','$Lnic','$Ldob','$Laddress','$Lmobile','$Lemail','$Ljob','$Ltype1','$Ltype2'
    ,'$gender','$income','$Lloantype','$Lamount','$Lpurpose')";
    
    if($con->query($sql)){
        echo"Data inserted successfully";
    }
    else{
        echo"Error :".$con->error;
    }
    $con->close();
?>