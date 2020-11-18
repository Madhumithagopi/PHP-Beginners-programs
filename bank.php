<html><title>Banking Application</title>
<head><meta charset="utf-8">
<strong><h1>Banking Application</h1></strong></head>
<body align="center">
<center><form method="post">
<table>
<tr><td><label for="name">Name</label></td>
<td><input type="text" name="name"></td></tr>
<tr><td><label for="address">Address</label></td>
<td><textarea name="address" rows="4" cols="20"></textarea></td></tr>
<tr><td><label for="dob">Date of Birth</label></td>
<td><input type="text" name="dob"></td></tr>
<tr><td><label for="personal">Phone Number<label></td>
<td><input type="text" name="personal"></td></tr>
<tr><td><label for="branch">Number of Accounts</label></td>
<td><input type="text" name="branch"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table></center>
<?php
class Person {
  public $name,$address,$dob;
  function __construct($name,$address,$dob) {
    $this->name = $name;
	$this->address = $address;
	$this->dob = $dob;
  }
  public function display() {
    echo "Name               : " . $this->name;
	echo "<br>";
	echo "Address 		     : " . $this->address;
	echo "<br>";
	echo "Date Of Birth      : " . $this->dob;
	echo "<br>";
  }
}
class Customer extends Person {
  public $personal,$number_accounts;
  function __construct($personal,$number_accounts) {
    $this->personal = $personal;
	$this->number_accounts = $number_accounts;
  }
  public function displayCustomer() { 
    echo "Phone number   : " . $this->personal;
	echo "<br>";
	echo "Number of Accounts : " . $this->number_accounts;
	echo "<br>";
  }
}
$ob1 = new Person($_POST['name'],$_POST['address'],$_POST['dob']);
$ob2 = new Customer($_POST['personal'],$_POST['branch']);
if(isset($_POST['submit'])){
$ob1->display();
$ob2->displayCustomer();
} ?></body></html>