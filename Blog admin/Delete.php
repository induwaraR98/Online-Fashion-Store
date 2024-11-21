<?php
    require'Connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql="delete from crud where Blog_ID=$id";
        if($con->query($sql)) {
            //echo "Data deleted successfully";
            header('location:show_table.php');
        } else {
            echo "Error deleting data: " . $con->error;
        }
        
            $con->close();
        }
    
?>