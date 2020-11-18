<html><title>Number checking</title>
<head><meta charset="utf-8">
<strong><h1>Number Checking</h1></strong></head>
<body align="center">
<center><form method="post">
<table><tr><td><label for="nu">Enter Number</label></td>
  <td><input type="text" name="nu"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
</tr></table>
<?php
if(isset($_POST['submit'])){
	$n=$_POST['nu'];
	if ($n > 0){
            if ($n < 1)
                echo "<center>Positive Small</center>";
            else if ($n > 1000000)
                echo "<center>Positive Large</center>";
            else
                echo "<center>Positive</center>";}
        else if ($n < 0) {
            if (abs($n) < 1)
                echo "<center>Negative Small</center>";
            else if (abs($n) > 1000000)
				echo "<center>Negative large</center>";
            else
                echo "<center>Negative</center>"; }
        else{
            echo "<center>Zero</center>";}
}	
?></body></html>



        