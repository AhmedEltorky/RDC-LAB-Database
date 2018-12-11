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
	$address = $_POST['address'];
	$sex = $_POST['sex'];
	$dob = $_POST['dob'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$university = $_POST['university'];
	$department = $_POST['department'];
	$studt_year = $_POST['studt_year'];

	$sql = "INSERT INTO intern (FNAME, MNAME, LNAME, ADDRESS, SEX, DATE_OF_BIRTH, EMAIL, PHONE, UNIVERSITY, DEPARTMENT, STUDY_YEAR) VALUES ('$fname', '$mname', '$lname', '$address', '$sex', '$dob', '$mail', '$phone', '$university', '$department', '$studt_year')";

	$result = $conn->query($sql);

	if (!$result){
		echo "Operation Failed !!!";
	} else {
		echo "Operation Done";
	}

	//header("Location: home.html");
?>
	<br><br>
	<form action="add_new_intern.html">
		<button type="submit">Add Another Intern</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>