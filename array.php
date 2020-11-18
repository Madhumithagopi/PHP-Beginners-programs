<!DOCTYPE html>
<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo "<br>";

$arrlength = count($cars);
echo "Indexed Array";
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "<br>";
echo "Associative Array";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "<br>";

echo "Associative Array Using Loop";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>