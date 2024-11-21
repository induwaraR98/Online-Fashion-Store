<!DOCTYPE html>
<html>
<body>
<head>
<style>
.changeBlogPg {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
}
.createH {
    width: 80%;
    padding: 10px;
    margin-bottom: 10px;
  }


.createP {
  width: 80%;
  padding: 10px;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #020202;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #6c6c6c;
}

</style>
</head>


  <!-- new blog creation form -->
  <div class="changeBlogPg">
<form method="post" action="form_process.php">

  <label for="Header">Header :</label><br>
  <input type="text" id="Header" class="blog" name="createH"><br>
  

  <label for="Date">Date :</label><br>
  <input type="text" id="Date" class="blog" name="createD"><br>
  

  <label for="Paragraph">Paragraph :</label><br>
  <textarea name="createP" id="Paragraph" class="createP"></textarea><br>
  

  <input type="submit" value="submit" name="create">
</div>
  
</form>
</body>
</html>