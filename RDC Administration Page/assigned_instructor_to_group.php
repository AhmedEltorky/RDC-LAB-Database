<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

	<?php
		include 'dbconnector.php';
		$instructor_id = $_POST['instructor_id'];
		$group_no = $_POST['group_no'];

		$sql = "SELECT * FROM course_group WHERE GNO='$group_no'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$sql2 = "SELECT * FROM instructor WHERE INS_ID='$instructor_id'";
		$result2 = $conn->query($sql2);
		$row2 = $result2->fetch_assoc();

		$check = TRUE;
		
		if (!$row['GNO'] && $check) {
			echo "Group Doesn't Exist !!!"."<br>";
			$check = FALSE;
		}

		//$sql = "SELECT * FROM instructor WHERE INS_ID='$instructor_id'";
		//$result = $conn->query($sql);
		//$row = $result->fetch_assoc();

		if (!$row2['INS_ID'] && $check) {
			echo "instructor Doesn't Exist !!!"."<br>";
			$check = FALSE;
		} 

		if ($check && ($row2['SPECIALTY'] == $row['COURSE_NAME'])) {
			$sql3 = "INSERT INTO assigned (INS_ID,GNO) VALUES ('$instructor_id','$group_no')";
			$result3 = $conn->query($sql3);
			echo "Operation Done";
		} else {
			echo "Error !!!";
		}
	?>

	<br><br>

	<form action="assigned_instructor_to_group.html">
		<button type="submit">Back</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>