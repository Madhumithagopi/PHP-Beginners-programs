<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Mxians";
setcookie($cookie_name, $cookie_value, time() + (60*10), "/"); //10minutes
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>