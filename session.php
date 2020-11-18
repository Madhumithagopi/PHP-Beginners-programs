<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
<table>
<tr>
		<td><input type="submit" name="session_set" value="Session set"></td>
		<td><input type="submit" name="session_destroy" value="Session Destroy"></td>
		</tr>
<?php
// Set session variables
if(isset($_POST['session_set']))
{
$_SESSION["18MXBA"] = "Web Technology";
$_SESSION["18MX24"] = "Database Management System";?>

<tr><td><p> "Session variables are set</p></td></tr>
<?php
}
// Destroy session variables
if(isset($_POST['session_destroy']))
{// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>
<tr><td><p> "Session variables are Destroyed</p></td></tr>
<?php
}
?>
</table>
</form>
</body>
</html>