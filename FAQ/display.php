<?php
   include 'connect.php';
?>

<?php include 'header.php' ?>

<!DOCTYPE html>
<head>
    <title>Dispaly Question</title>
    <style>
        .newbtn{
           margin-top:20px;
           background-color:black;
           color:white;
           padding-left:30px;
           padding-right:30px; 
           padding-top:10px;
           padding-bottom:10px;
           margin-left:110px;
           margin-top:50px;
           margin-bottom:30px;
           border-radius: 20px;

        }
        .addnew{
            text-decoration:none;
            color:white;
        }
        .addnew:hover{
            color:black;
            background:white;
        }
        .newbtn:hover{
           color:black;
           background:white;
        }

        table{
            margin-top:20px;
            margin-left:110px;
            width:90%;
            margin-bottom:50px;
        }
        th{
            height:50px;
        }
        tr{
            text-align:left;
            height:50px;
        }

        tr:nth-child(even) {background-color: #f2f2f2;} /*table strips*/

        .update{
          margin-top:20px;
           background-color:#6495ED;
           color:white;
           padding: 8px 30px;
           border-radius: 10px;
        }
        .delete{
           margin-top:20px;
           background-color:#FD1C03;
           color:white;
           padding: 8px 30px;
           border-radius: 10px;
        }
        .updatebtn,.deletebtn{
          text-decoration:none;
          color:white;
        }

    </style>
        
</head>

<body>
    <button class="newbtn"><a href="questions.php" class="addnew">Add New Question</a></button>

<table>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Question</th>
      <th scope="col">Operation</th>
    </tr>
  <tbody>
    <?php
        $sql="select * from questions";
        $result=mysqli_query($con,$sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){ //access to data in database 
            $number=$row['Number'];
            $name=$row['Name'];
            $mobile=$row['Mobile'];
            $question=$row['Question'];
            echo ' <tr >
            <td scope="row">'.$number.'</td>
            <td>'.$name.'</td>
            <td>'.$mobile.'</td>
            <td>'.$question.'</td>
            <td>
            <button class="update"><a href="update.php?updatenumber='.$number.'" class="updatebtn">Update</a></button>
            <button class="delete"><a href="delete.php?deletenumber='.$number.'" class="deletebtn">Delete</a></button>
            </td>
          </tr>';
            }
        }
     ?>   
  </tbody>
    </table>
</body>

<?php include 'footer.php' ?>

</html>
