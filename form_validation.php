<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>Form validation</title>
<style type="text/css">
h1 {margin-bottom:20px}
input, label {margin-top:7px; margin-bottom:7px; color:#000066; font-size: 18px; padding-right: 7px}
input[type='checkbox'] {margin-left: 5px}
.note {color: #ff0000}
.success_msg{color:#006600}
</style>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
//checking name
if(empty($_POST['name']))
$msg_name = "Required";
$name_subject = $_POST['name'];
$name_pattern = '/^[a-zA-Z ]*$/';
preg_match($name_pattern, $name_subject, $name_matches);
if(!$name_matches[0])
$msg2_name = "Only alphabets and white space allowed";
//phone number
if(empty($_POST['phone']))
$msg_phone = "Required";
$phone_subject = $_POST['phone'];
$phone_pattern = '/^[0-9]{10}+$/';
preg_match($phone_pattern, $phone_subject, $phone_matches);
if(!$phone_matches[0])
$msg2_phone = "Only 10 digits are allowed";
//check email
if(empty($_POST['email']))
$msg_email = "Required";
$email_subject = $_POST['email'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
preg_match($email_pattern, $email_subject, $email_matches);
if(!$email_matches[0])
$msg2_email = "Must be of valid email format";
//check address
if(empty($_POST['address']))
$msg_addr = "Required";
if($msg_name=="" && $msg2_name=="" && $msg_email=="" && $msg2_email=="" && $msg_phone=="" && $msg2_phone==""&& $msg_email=="" && $msg2_email=="" && $msg_addr=="" )
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
    echo "THANK YOU!!!";
}
}
?>
    <h2>Biodata of Applicant</h2>
    <p>Please fill in this form and send us.</p>
    <form action="" method="post">
        <table>
		<tr>
           <td> <label for="inputName">Name</label></td>
            <td><input type="text" name="name" id="inputName" placeholder="name" value="<?php echo $_POST['name']; ?>"></td>
			<td><?php echo "<p class='note'>".$msg_name."</p>";?></td></tr>
			<tr><td></td>
			<td><?php echo "<p class='note'>".$msg2_name."</p>";?></td></tr>
        </tr>
		<tr>
            <td><label for="inputName">Phone number</label></td>
            <td><input type="text" name="phone" id="inputphone" placeholder="phone" value="<?php echo $_POST['phone']; ?>"></td>
			<td><?php echo "<p class='note'>".$msg_phone."</p>";?></td></tr>
			<tr><td></td>
			<td><?php echo "<p class='note'>".$msg2_phone."</p>";?></td></tr>
        </tr>
        <tr>
            <td><label for="inputEmail">Mail-Id</label></td>
            <td><input type="text" name="email" id="inputEmail" placeholder="Mail-Id" value="<?php echo $_POST['email']; ?>"></td>
			<td><?php echo "<p class='note'>".$msg_email."</p>";?></td></tr>
			<tr><td></td>
			<td><?php echo "<p class='note'>".$msg2_email."</p>";?></td></tr>
        </tr>
        <tr>
            <td><label for="inputaddress">Address</label></td>
            <td><textarea name="address" rows="5" cols="25" id="inputaddress" value="<?php echo $_POST['address']; ?>"></textarea></td>
			<td><?php echo "<p class='note'>".$msg_addr."</p>";?></td></tr>
        </tr>
        <tr>
		<td><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>
		</table>
    </form>
</body>
</html>
