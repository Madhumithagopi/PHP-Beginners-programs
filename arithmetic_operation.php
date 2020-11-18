<html><title>Arithmetic Operation</title>
<head><meta charset="utf-8">
<strong><h1>Arithmetic Operation</h1></strong></head>
<body align="center">
<center><form method="post">
<table><tr><td><label for="num1">Enter First Integer</label></td>
  <td><input type="text" name="num1"></td></tr>
  <tr><td><label for="num2">Enter second Integer</label></td>
  <td><input type="text" name="num2"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table></center>
<?php
if(isset($_POST['submit'])){
	$add= $_POST['num1']+$_POST['num2'];
	$sub= $_POST['num1']-$_POST['num2'];
	$mul= $_POST['num1']*$_POST['num2'];
	$avg= ($_POST['num1']+$_POST['num2'])/2;
	if($_POST['num1']>$_POST['num2']){
		$large=$_POST['num1'];
		$small=$_POST['num2'];}
	else{
		$large=$_POST['num2'];
		$small=$_POST['num1'];}
	echo "<center>Sum of two Integers: $add<br>Difference of two Integers: $sub</center>";
	echo "<center>Product of two Integers: $mul</center>";
	echo "<center>Average of two Integers: $avg</center>";
	echo "<center>Distance of two Integers: $sub</center>";
	echo "<center>Maximum of two Integers: $large</center>";
	echo "<center>Minimum of two Integers: $small</center>";
}	?></body></html>