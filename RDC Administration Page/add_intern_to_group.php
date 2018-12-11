<!DOCTYPE html>
<html>
<head>
	<title>REPORT</title>
</head>
<body>

	<?php
		include 'dbconnector.php';
		$intern_id = $_POST['intern_id'];
		$group_no = $_POST['group_no'];
		$course_name = $_POST['course_name'];
		$payment = $_POST['payment'];

		$sql = "SELECT * FROM course_group WHERE GNO='$group_no' AND course_name='$course_name'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$check = TRUE;
		
		if (!$row['GNO'] && $check) {
			echo "Group no. ",$group_no,"  ",$course_name," doesn't Exist !!!"."<br>";
			$check = FALSE;
		}

		$sql = "SELECT * FROM intern WHERE ID='$intern_id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if (!$row['ID'] && $check) {
			echo "Intern ",$intern_id," doesn't Exist !!!"."<br>";
			$check = FALSE;
		} 

		$sql = "SELECT * FROM enroll WHERE ID='$intern_id' AND COURSE_NAME='$course_name'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if ($row['ID'] && $check) {
			echo "Intern ",$intern_id," already enrolled in ",$course_name."<br>";
			$check = FALSE;
		} 

		if ($check) {
			$sql = "INSERT INTO enroll (ID,GNO,COURSE_NAME,PAYMENT) VALUES ('$intern_id','$group_no','$course_name','$payment')";
			$result = $conn->query($sql);
			echo "Operation Done";
		}
	?>

	<br><br>

	<form action="add_intern_to_group.html">
		<button type="submit">Back</button>
	</form>
	<form action="home.html">
		<button type="submit">Home</button>
	</form>

</body>
</html>