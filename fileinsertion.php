<?php
session_start();
mysql_connect("localhost","root","gopi2627") or die("No Connection");
if(isset($_POST['submit']))
{
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 $final_file=str_replace(' ','-',$new_file_name);
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
	 $title=$_POST["titletxt"];
	$category=$_POST["category"];
	$date=$_POST["datetxt"];
	$description=$_POST["message"];
	$sql="INSERT INTO `file_sample`.`sample` VALUES (NULL,'$title','$category','$date','$description','$final_file','$new_size',CURDATE())"; 
 mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='fileinput.php?success';
        </script>
  <?php
 }
 else
 {
	 $title=$_POST["titletxt"];
	$category=$_POST["category"];
	$date=$_POST["datetxt"];
	$description=$_POST["message"];
	$sql="INSERT INTO `file_sample`.`sample` VALUES (NULL,'$title','$category','$date','$description','','','')"; 
 mysql_query($sql);
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='fileinput.php?fail';
        </script>
  <?php
 }
}
?>