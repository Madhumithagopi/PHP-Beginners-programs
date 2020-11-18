<!DOCTYPE html>
<html>
<body>
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);
echo "Ascending Order";
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
rsort($cars);
echo "Descending Order";
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo "Sorting according to value(Ascending Order)";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>