<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

<?php
	include 'dbconnector.php';
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$specialty = $_POST['specialty'];
		
	$sql = "INSERT INTO instructor (FNAME, MNAME, LNAME, SEX, EMAIL, PHONE, SPECIALTY) VALUES ('$fname', '$mname', '$lname', '$sex', '$mail', '$phone', '$specialty')";

	$result = $conn->query($sql);

	if (!$result){
		echo "Operation Failed !!!";
	} else {
		echo "Operation Done";
	}

	//header("Location: home.html");
?>
	<br><br>
	<form action="add_new_instructor.html">
		<button type="submit">Add Another Instructor</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>