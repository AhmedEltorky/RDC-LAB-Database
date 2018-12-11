<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

	<?php
		include 'dbconnector.php';
		
		$group_no = $_POST['group_no'];
		$course_name = $_POST['course_name'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];

		$result = "";

		if (!$group_no && !$course_name && !$start_date && !$end_date && !$fins_id) {
			header("Location: add_new_course_group.html");
		} else {
			$sql = "INSERT INTO course_group 
			(GNO,COURSE_NAME,START_DATE,END_DATE) 
			VALUES ('$group_no','$course_name','$start_date','$end_date')";
			$result = $conn->query($sql);
		}
		

		if (!$result){
			echo "Operation Failed !!!";
		} else {
			echo "Operation Done";
		}
	?>

	<br><br>

	<form action="add_new_course_group.html">
		<button type="submit">Back</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>