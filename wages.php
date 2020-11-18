<html><title>Wages Calculation</title>
<head><meta charset="utf-8">
<strong><h1>Wages Calculation</h1></strong></head>
<body align="center">
<center><form method="post"><table>
<tr><td><label for="work">Working Hours</label></td>
<td><input type="text" name="work"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table></center>
<?php
if(isset($_POST['submit'])){
	class worker {
		public $hrs;
		function set_name($hrs) { $this->hrs= $hrs; }
		function wages(){
		if($this->hrs <=30)
		{ $w=$this->hrs*10;
		  echo "Wages for $this->hrs hours is: $w rupees"; }
		if($this->hrs >30 and $this->hrs <=55){
			$w=$this->hrs - 30;
			$wage=300+($w*15);
			echo "Wages for $this->hrs hours is: $wage rupees"; }
		if($this->hrs >55){
			$w=$this->hrs - 55;
			$wage=300+375+($w*20);
			echo "Wages for $this->hrs hours is: $wage rupees"; }
	} }
	$wage=new worker();
	$wage->set_name($_POST['work']);
	$wage->wages();
	}	?></center></body></html>