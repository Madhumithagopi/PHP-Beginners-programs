<html>
<title>Sum of Digits</title>
<head>
<meta charset="utf-8">
<strong><h1>Sum of Digits</h1></strong>
</head>
<body align="center">
<center>
<form method="post">
<table><tr>
  <td><label for="num">Input an integer between 0 and 1000</label></td>
  <td><input type="text" name="num"></td></tr>
<tr><td><input type="submit" name= "submit" value="Sum" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table>
   </center>

<?php
if(isset($_POST['submit']))
{
	$n= $_POST['num'];
	$t=$n;
	$sum=0;
	while($n!=0){
		$a=$n%10;
		$sum+=$a;
		$n=$n/10;
	}
	echo "<center>The sum of all digits in $t is $sum</center>";
}		
	?>
</body>
</html>