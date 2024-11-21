
<?php
$serverName = "localhost";
$sUserName = "root";
$sPassword = '';
$dbName = "iwt_project";

$connect = mysqli_connect($serverName,$sUserName,$sPassword,$dbName);

if ($connect == false){
    die("Error: can not connect to database".mysqli_connect_error());
}

?>