<?php
session_start();
mysql_connect("localhost","root","gopi2627") or die("No Connection");
mysql_select_db("file_sample") or die("No Database name");
?>
<!DOCTYPE html>
<html>
<body>
<form method="POST" action="fileinsertion.php" enctype="multipart/form-data" >
<h2>FILE UPLOAD</h2>
<table>
<tr>
  <td><label for="titletxt">Title</label></td>
  <td><input type="text" id="titletxt" name="titletxt"></td>
</tr>
<tr>
<td><label for="category">Choose a category</label></td>
<td><select id="category" name="category">
    <option value="Tutorial">Tutorial</option>
    <option value="Events">Events</option>
    <option value="Works/Assignments">Works/Assignments</option>
    <option value="Timetable">Timetable</option>
  </select></td>
</tr>
<tr>
  <td><label for="datetxt">Date</label></td>
  <td><input type="date" id="datetxt" name="datetxt"></td>
</tr>
<tr>
<td><label for="message">Description</label></td>
<td><textarea name="message" style="width:200px; height:150px;"></textarea></td>
</tr>
<tr>
<td><label for="file">Upload Content</label></td>
<td><input type="file" name="file" value="file"></td>
</tr>
<tr>
<td></td><td><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
<?php	
 if(isset($_GET['success']))
 { 
echo "File Uploaded Successfully..";
 }
 else if(isset($_GET['fail']))
 {
	   echo "Problem While File Uploading !";
 }
 ?>
</form>
</body>
</html>