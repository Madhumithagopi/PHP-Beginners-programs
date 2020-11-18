<html>
<title>Fahrenheit to Celsius</title>
<head>
<meta charset="utf-8">
<strong><h1>Convert Fahrenheit to Celcius</h1></strong>
</head>
<body align="center">
<center>
<form method="post">
<table><tr>
  <td><label for="far">Input a degree in Fahrenheit</label></td>
  <td><input type="text" name="far"></td></tr>
<tr><td><input type="submit" name= "submit" value="Convert" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table>
   </center>

<?php
if(isset($_POST['submit']))
{
	$f= $_POST['far'];
	$c= ($f - 32) * (5/9);
	echo "<center>$f.0 degree Fahrenheit is equal to $c.0 Celsius </center>";
}		
	?>
</body>
</html>