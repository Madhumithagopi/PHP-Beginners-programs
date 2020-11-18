<!DOCTYPE HTML>
<html>  
<body>
<h3>FORM HANDLING-GET AND POST METHOD</h3>
<form action="" method="post">
<table><tr>
<td>Name</td>
<td><input type="text" name="name"></td></tr>
<tr><td>E-mail</td>
<td><input type="text" name="email"></td></tr>
<tr><td></td>
<td><input type="submit" name="submit"></td></tr>
<?php
if(isset($_POST["submit"]))
{
?>
<tr><td>Welcome <?php echo $_POST["name"]; ?></td></tr>
<tr><td>Your email address is: <?php echo $_POST["email"]; ?></td></tr>
<?php } ?>
</table>
</form>
</body>
</html>