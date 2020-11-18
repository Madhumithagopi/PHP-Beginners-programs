<html><title>Maximum and Minimum of Number</title>
<head><meta charset="utf-8">
<strong><h1>Maximum and Minimum of Number</h1></strong></head>
<?php
$array = array(1, 2, 3, 4, 5); 
$n = count($array); 
$max = $array[0]; 
for ($i = 1; $i < $n; $i++) 
	if ($max < $array[$i]) 
		$max = $array[$i]; 
$min = $array[0]; 
for ($i = 1; $i < $n; $i++) 
	if ($min > $array[$i]) 
		$min = $array[$i]; 
echo("Difference of array:".($max-$min)); 
?> 
</html>



        