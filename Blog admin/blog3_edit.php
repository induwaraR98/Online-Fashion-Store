<!DOCTYPE html>
<html>
<body>

<head>
    <link rel="stylesheet" href="Blog_edit.css">
    </head>

<div class="changeBlogPg">
  <!-- blog 3 -->
<form method="post" action="form_process.php">

  <label for="Header">Header :</label><br>
  <input type="text" id="Header" class="header" name="Header3"><br>
  

  <label for="Date">Date :</label><br>
  <input type="text" id="Date" class="date" name="Date3"><br>
  

  <label for="Paragraph">Paragraph :</label><br>
  <textarea name="Paragraph3" id="Paragraph" class="para"></textarea><br>
  

  <input type="submit" value="submit" name="submit3">
  
</form>
</div>

<br>

<!-- Show home button -->
<form action="blog_admin.php" method="post">
    <button type="submit" id="show_table" class="homebtn_table">Home Button</button>
</form>


</body>
</html>