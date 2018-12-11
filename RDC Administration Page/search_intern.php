<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
</head>
<body>
	<h1>Search Result</h1>

<?php
	include 'dbconnector.php';

	$intern_id = $_POST['intern_id'];
	$intern_name = $_POST['intern_name'];
	$intern_e_mail = $_POST['intern_e_mail'];
	$phone = $_POST['phone'];

	if (!$intern_id && !$intern_name && !$phone && !$intern_e_mail){
		header("Location: search_intern.html");
	}

	$sql = "SELECT * FROM intern WHERE id='$intern_id' OR email='$intern_e_mail' OR fname='$intern_name' OR phone='$phone'";
	$result = $conn->query($sql);
	$check = FALSE;

	while($row = $result->fetch_assoc()){
		$check = True;
		echo "Intern ID:  ", $row['ID'], "<br>";
		echo "First name:  ", $row['FNAME'], "<br>";
		echo "Last name:  ", $row['LNAME'], "<br>";
		echo "Phone number:  ", $row['PHONE'], "<br>";
		echo "E-Mail:  ", $row['EMAIL'], "<br>";
		echo "Date Of Birth:  ", $row['DATE_OF_BIRTH'], "<br>";
		echo "University:  ", $row['UNIVERSITY'], "<br>";
		echo "Department:  ", $row['DEPARTMENT'], "<br>";
		echo "Study Year:  ", $row['STUDY_YEAR'], "<br>";
		echo "<br>";
	} 
	if(!$check) {
		echo "Not Found";
	}
?>

	<form action="search_intern.html">
		<button type="submit">Back to Search</button>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>