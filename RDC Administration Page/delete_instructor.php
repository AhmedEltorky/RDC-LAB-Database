<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

<?php
	include 'dbconnector.php';
	$instructor_id = $_POST['instructor_id'];

	$sql = "DELETE FROM instructor WHERE INS_ID='$instructor_id'";
	$result = $conn->query($sql);

	if (!$result){
		echo "Operation Failed !!!";
	} else {
		echo "Operation Done";
	}
	
	//header("Location: home.html");
?>

	<br><br>
	<form action="delete_instructor.html">
		<button type="submit">Delete Another Instructor</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>