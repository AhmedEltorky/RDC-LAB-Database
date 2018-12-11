<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>
<?php
	include 'dbconnector.php';

	$instructor_id = $_POST['instructor_id'];
	$instructor_fname = $_POST['instructor_fname'];
	$instructor_mname = $_POST['instructor_mname'];
	$instructor_lname = $_POST['instructor_lname'];
	$instructor_phone = $_POST['instructor_phone'];
	$instructor_mail = $_POST['instructor_mail'];

	$count = 0;

	if($instructor_fname){
		$sql = "UPDATE instructor SET fname='$instructor_fname' WHERE ins_id='$instructor_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($instructor_mname) {
		$sql = "UPDATE instructor SET mname='$instructor_mname' WHERE ins_id='$instructor_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($instructor_lname) {
		$sql = "UPDATE instructor SET lname='$instructor_lname' WHERE ins_id='$instructor_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($instructor_phone) {
		$sql = "UPDATE instructor SET phone='$instructor_phone' WHERE ins_id='$instructor_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($instructor_mail) {
		$sql = "UPDATE instructor SET email='$instructor_mail' WHERE ins_id='$instructor_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($count != 0){
		echo "Operation Done";	
	} else {
		header("Location: edit_instructor.html");
	}	

?>
	
	<form action="edit_instructor.html">
		<button type="submit">Edit Another Instructor</button>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>