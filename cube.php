<html><title>Cube of Number</title>
<head><meta charset="utf-8">
<strong><h1>Cube of Number</h1></strong></head>
<body align="center">
<center><form method="post">
<table><tr><td><label for="nu">Enter Number</label></td>
  <td><input type="text" name="nu"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
</tr></table>
<?php
if(isset($_POST['submit'])){
	$n=$_POST['nu'];
	for($i=1;$i<=$n;$i++)
     {
		 $num=$i*$i*$i;
		  echo "<center>Cube of $i is :$num </center>";
    }
}	
?></body></html>



        