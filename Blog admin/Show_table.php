<!-- Show admin table info -->
<!DOCTYPE html>
<html>
<body>

<?php
require 'Connection.php';
require 'form_process.php';
?>
<style>
.Admin_data_table {
  width: 100%;
  border-collapse: collapse;
  border: 2px;
}

.Admin_data_table td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

.Admin_data_table th {
  background-color: #808080;
  width: 10px;
}

.Delete_btn {
  display: flex;
  padding: 6px 12px;
  background-color: #f44336;
  color: #fff;
  border: none;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  margin-left: 45%;
}

.Delete_btn:hover {
  background-color: #d32f2f;
}

.tableid {
  text-align: center;
}
.paragraph {
  width: 30px; 
  white-space: pre-wrap;
}

.homebtn_table:hover {
  background-color: rgb(94, 96, 255);
  color: white;
}

.homebtn_table {
  position: fixed;
  bottom: 10px;
  background-color: rgb(255, 255, 255);
  border: 2px solid black;
  padding: 10px 20px;
  display: inline-block;
  transition: background-color 0.3s ease;
}

</style>

<?php
$sql = "SELECT Blog_ID, Blog_header, Blog_date, Blog_paragraph FROM crud";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=\"Admin_data_table\">
            <tr>
                <th>Blog Number</th>
                <th>Header</th>
                <th>Date</th>
                <th>Paragraph</th>
                <th>Action</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        $id = $row['Blog_ID'];
        $header = $row['Blog_header'];
        $date = $row['Blog_date'];
        $paragraph = $row['Blog_paragraph'];

        // Convert newline characters to <br> tags
        //php function is used to convert newline tags in the php file to <br> tags in the html file

        echo '<tr>
                <td class="tableid">' . $id . '</td>
                <td>' . $header . '</td>
                <td>' . $date . '</td>
                <td class="paragraph"><p>' . nl2br($paragraph) . '</p></td>
                <td><button class="Delete_btn"><a href="Delete.php?deleteid=' . $id . '">Delete</a></button></td>
              </tr>';
    }

    echo "</table>";
} else {
    echo 'No results found.';
}

$con->close();
?>

<!-- Show home button -->
<form action="blog_admin.php" method="post">
    <button type="submit" id="show_table" class="homebtn_table">Home Button</button>
</form>




</body>
</html>
