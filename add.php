<html>

<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="assets/app.css">
</head>

<body>
	<?php
	//including the database connection file
	include_once("config.php");

	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$designation = $_REQUEST['designation'];

	// checking empty fields
	if (empty($id) || empty($name) || empty($phone) ||empty($designation)) {

		if (empty($id)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if (empty($phone)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if (empty($designation)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty) 

		//insert data to database		
		$sql = "INSERT INTO employees (name, id, phone, designation) VALUES ('$name', '$id', '$phone', '$designation')";
		$dbConn->exec($sql);

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
	?>
</body>

</html>