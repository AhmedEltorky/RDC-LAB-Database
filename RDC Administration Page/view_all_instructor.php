<!DOCTYPE html>
<html>
<head>
	<title>ALL INSTRUCTORS</title>
</head>
<body>
	<?php
		include 'dbconnector.php';
		$sql = "SELECT * FROM instructor";
		$result = $conn->query($sql);
		$check = FALSE;
	?>
	<table>
		<?php
			echo "<tr><th>"."Instructor ID"."</th><th>"."First Name"."</th><th>"."Last Name"."</th><th>"."Phone Number"."</th><th>"."E-Mail"."</th></tr>";
			while($row = $result->fetch_assoc()){
				//$check = True;
				echo "<tr><td>".$row['INS_ID']."</td><td>".$row['FNAME']."</td><td>".$row['LNAME']."</td><td>".$row['PHONE']."</td><td>".$row['EMAIL']."</td></tr>";
			} 

			// if(!$check) {
			// 	echo "DataBase Empty";
			// }
		?>
	</table>

	<form action="view_instructor.html">
		<button type="submit">Back to View Instructor</button><br>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>