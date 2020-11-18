<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Echo session variables that were set on previous page
echo "Course-1 " . $_SESSION["18MXBA"] . ".<br>";
echo "Course-2 " . $_SESSION["18MX24"] . ".";
?>
</body>
</html>