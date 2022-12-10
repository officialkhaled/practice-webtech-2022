
<!DOCTYPE html>
<html>
<head>
 
  <title></title>
  <style>
table, th, td {
  border: 1px solid;
  text-align: center;
}

table {
  width: 100%;
}
</style>
</head>
<body>
<a href="insertForm.php">Add Data</a> </br></br>
<a href="updateForm.php">Update Data</a> </br></br>
<form name = "Update" method="post" action="update.php">
  Id: <input type="number" name="uid"><br><br>
  City: <input type="text" name="uname"><br><br>
  Adress: <input type="text" name="address"><br><br>
  Hotline Number: <input type="text" name="hotline_number"><br><br>
  <input type="submit" name="submitDelete" value="Update">
</form>
