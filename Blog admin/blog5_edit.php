<!DOCTYPE html>
<html>
<body>

<head>
    <link rel="stylesheet" href="Blog_edit.css">
    </head>

<div class="changeBlogPg">
  <!-- blog 5 -->
<form method="post" action="form_process.php">

  <label for="Header">Header :</label><br>
  <input type="text" id="Header" class="header" name="Header5"><br>
  

  <label for="Date">Date :</label><br>
  <input type="text" id="Date" class="date" name="Date5"><br>
  

  <label for="Paragraph">Paragraph :</label><br>
  <textarea name="Paragraph5" id="Paragraph" class="para"></textarea><br>
  

  <input type="submit" value="submit" name="submit5">
  
</form>
</div>

<br>

<!-- Show home button -->
<form action="blog_admin.php" method="post">
    <button type="submit" id="show_table" class="homebtn_table">Home Button</button>
</form>


</body>
</html>