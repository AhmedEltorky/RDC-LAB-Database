<!DOCTYPE html>
<html>
<head>
	<title>ALL INTERN ORDERED</title>
</head>
<body>
	<?php
		include 'dbconnector.php';
		$sql = "SELECT * FROM intern ORDER BY FNAME";
		$result = $conn->query($sql);
		$check = FALSE;
	?>

	<table>
		<?php
			echo "<tr><th>"."Intern ID"."</th><th>"."First Name"."</th><th>"."Last Name"."</th><th>"."Date Of Birth"."</th><th>"."Address"."</th><th>"."Phone Number"."</th><th>"."E-Mail"."</th><th>"."University"."</th><th>"."Department"."</th><th>"."Study Year"."</th><th>"."</th></tr>";
			while($row = $result->fetch_assoc()){
				//$check = True;
				echo "<tr><td>".$row['ID']."</td><td>".$row['FNAME']."</td><td>".$row['LNAME']."</td><td>".$row['DATE_OF_BIRTH']."</td><td>".$row['ADDRESS']."</td><td>".$row['PHONE']."</td><td>".$row['EMAIL']."</td><td>".$row['UNIVERSITY']."</td><td>".$row['DEPARTMENT']."</td><td>".$row['STUDY_YEAR']."</td></tr>";
			} 

			// if(!$check) {
			// 	echo "DataBase Empty";
			// }
		?>
	</table>

	<form action="view_intern.html">
		<button type="submit">Back to View Intern</button><br>
	</form>
	<form action="home.html">
		<button type="submit">Back to Home</button>
	</form>

</body>
</html>