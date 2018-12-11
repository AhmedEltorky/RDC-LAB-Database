<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
</head>
<body>
	<h1>Search Result</h1>

<?php
	include 'dbconnector.php';

	$instructor_id = $_POST['instructor_id'];
	$instructor_name = $_POST['instructor_name'];
	$instructor_phone = $_POST['instructor_phone'];
	$instructor_mail = $_POST['instructor_mail'];

	if (!$instructor_id && !$instructor_name && !$instructor_phone && !$instructor_mail){
		header("Location: search_instructor.html");
	}

	$sql = "SELECT * FROM instructor WHERE ins_id='$instructor_id' OR email='$instructor_mail' OR fname='$instructor_name' OR phone='$instructor_phone'";
	$result = $conn->query($sql);
	$check = FALSE;

	while($row = $result->fetch_assoc()){
		$check = True;
		echo "Instructor ID:  ", $row['INS_ID'], "<br>";
		echo "First name:  ", $row['FNAME'], "<br>";
		echo "Last name:  ", $row['LNAME'], "<br>";
		echo "Phone number:  ", $row['PHONE'], "<br>";
		echo "E-Mail:  ", $row['EMAIL'], "<br>";
		echo "<br>";
	} 
	if(!$check) {
		echo "Not Found";
	}
?>

	<form action="search_instructor.html">
		<button type="submit">Back to Search</button>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>