<html><title>Book Details</title>
<head><meta charset="utf-8">
<strong><h1>Book Details</h1></strong></head>
<body align="center">
<center><form method="post">
<table>
<tr><td><label for="bid">Book Id</label></td>
<td><input type="text" name="bid"></td></tr>
<tr><td><label for="anum">Accession Number</label></td>
<td><input type="text" name="anum"></td></tr>
<tr><td><label for="bname">Book Name</label></td>
<td><input type="text" name="bname"></td></tr>
<tr><td><label for="auth">Author</label></td>
<td><input type="text" name="auth"></td></tr>
<tr><td><label for="year">Year</label></td>
<td><input type="text" name="year"></td></tr>
<tr><td><label for="jid">Journal Id</label></td>
<td><input type="text" name="jid"></td></tr>
<tr><td><label for="jname">Journal Name</label></td>
<td><input type="text" name="jname"></td></tr>
<tr><td><input type="submit" name= "submit" value="Submit" style="font-size: 2em; background-color:  #f27669;"></td>
<td><input type="reset" value="Reset" style="font-size: 2em; background-color: #4c4c4c;"></td></tr></table></center>
<?php
class Book {
  public $book_id,$accession_number,$book_name,$author,$year,$journal_id,$journal_name;
  function set($book_id,$accession_number,$book_name,$author,$year,$journal_id,$journal_name) {
    $this->book_id = $book_id;
	$this->accession_number = $accession_number;
	$this->book_name = $book_name;
	$this->author = $author;
	$this->year = $year;
	$this->journal_id = $journal_id;
	$this->journal_name = $journal_name;
  }
  function get_id() { return $this->book_id;  }
  function get_acc() { return $this->accession_number;  }
  function get_name() { return $this->book_name; }
  function get_author() { return $this->author; }
  function get_year() { return $this->year; }
  function get_journ() { return $this->journal_id; }
  function get_journa() { return $this->journal_name;  }
}
$ob1 = new Book();
$ob1->set($_POST['bid'],$_POST['anum'],$_POST['bname'],$_POST['auth'],$_POST['year'],$_POST['jid'],$_POST['jname']);
if(isset($_POST['submit'])){
echo "Book Id          : " . $ob1->get_id();
echo "<br>";
echo "Accession Number : " . $ob1->get_acc();
echo "<br>";
echo "Book Name		   : " . $ob1->get_name();
echo "<br>";
echo "Author 		   : " . $ob1->get_author();
echo "<br>";
echo "Year			   : " . $ob1->get_year();
echo "<br>";
echo "Journal Id	   : " . $ob1->get_journ();
echo "<br>";
echo "Journal Name	   : " . $ob1->get_journa(); } ?></body></html>