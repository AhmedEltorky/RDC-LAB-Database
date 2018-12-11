<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

	<?php
	include 'dbconnector.php';

	$intern_id = $_POST['intern_id'];
	$intern_fname = $_POST['intern_fname'];
	$intern_mname = $_POST['intern_mname'];
	$intern_lname = $_POST['intern_lname'];
	$intern_address = $_POST['intern_address'];
	$intern_dob = $_POST['intern_dob'];
	$intern_phone = $_POST['intern_phone'];
	$intern_mail = $_POST['intern_mail'];
	$intern_university = $_POST['intern_university'];
	$intern_department = $_POST['intern_department'];
	$intern_sty = $_POST['intern_sty'];

	$count = 0;

	if($intern_fname){
		$sql = "UPDATE intern SET fname='$intern_fname' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_mname) {
		$sql = "UPDATE intern SET mname='$intern_mname' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_lname) {
		$sql = "UPDATE intern SET lname='$intern_lname' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_address) {
		$sql = "UPDATE intern SET address='$intern_address' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_dob) {
		$sql = "UPDATE intern SET date_of_birth='$intern_dob' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_phone) {
		$sql = "UPDATE intern SET phone='$intern_phone' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_mail) {
		$sql = "UPDATE intern SET email='$intern_mail' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_university) {
		$sql = "UPDATE intern SET university='$intern_university' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_department) {
		$sql = "UPDATE intern SET department='$intern_department' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($intern_sty) {
		$sql = "UPDATE intern SET study_year='$intern_sty' WHERE id='$intern_id'";
		$result = $conn->query($sql);
		$count++;
	} if ($count != 0){
		echo "Operation Done";	
	} else {
		header("Location: edit_intern.html");
	}	

?>

	<form action="edit_intern.html">
		<button type="submit">Edit Another Intern</button>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>