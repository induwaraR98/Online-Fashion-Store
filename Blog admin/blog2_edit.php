<!DOCTYPE html>
<html>
<body>

<head>
    <link rel="stylesheet" href="Blog_edit.css">
    </head>

<div class="changeBlogPg">
  <!-- blog 2 -->
<form method="post" action="form_process.php">

  <label for="Header">Header :</label><br>
  <input type="text" id="Header" class="header" name="Header2"><br>
  

  <label for="Date">Date :</label><br>
  <input type="text" id="Date" class="date" name="Date2"><br>
  

  <label for="Paragraph">Paragraph :</label><br>
  <textarea name="Paragraph2" id="Paragraph" class="para" name="Paragraph"></textarea><br>
  

  <input type="submit" value="submit" name="submit2">
  
</form>
</div>

<br>

<!-- Show home button -->
<form action="blog_admin.php" method="post">
    <button type="submit" id="show_table" class="homebtn_table">Home Button</button>
</form>


</body>
</html>