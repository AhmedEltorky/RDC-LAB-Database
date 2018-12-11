<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

<?php
	include 'dbconnector.php';
	$intern_id = $_POST['intern_id'];

	$sql = "DELETE FROM intern WHERE id='$intern_id'";
	$result = $conn->query($sql);
	
	if (!$result){
		echo "Operation Failed !!!";
	} else {
		echo "Operation Done";
	}

	//header("Location: home.html");
?>

	<br><br>
	<form action="delete_intern.html">
		<button type="submit">Delete Another Intern</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>