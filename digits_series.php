<html><title>Digit as series of word</title>
<head><meta charset="utf-8"> <strong><h1>Digit as series of word</h1></strong></head>
<body align="center"> 
<center><form method="post">
<table><tr><td><label for="nu">Enter Number</label></td><td><input type="text" name="nu"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:#f27669;"></td></tr></table>
<?php if(isset($_POST['submit'])){ $n=$_POST['nu'];
	$num=mb_strlen($n);
	for($i=0;$i<=$num;$i++)
    { switch ($n[$i]) { 
		case '0': 
			echo "<center>Zero</center>";
        break; 
		case '1': 
			echo "<center>One</center>"; 
        break; 
		case '2': 
			echo "<center>Two</center>";
        break;
		case '3': 
			echo "<center>Three</center>";
        break; 
		case '4': 
			echo "<center>Four</center>";
        break; 
		case '5': 
			echo "<center>Five</center>";
        break;
		case '6': 
			echo "<center>Six</center>";
        break; 
		case '7': 
			echo "<center>Seven</center>";
        break; 
		case '8': 
			echo "<center>Eight</center>";
        break; 
		case '9': 
			echo "<center>Nine</center>";
        break; } } }	?></body></html>



        