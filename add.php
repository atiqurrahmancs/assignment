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
		$sql = "INSERT INTO employees (id, name, phone, designation)
    VALUES (:id, :name, :phone, :designation)";
$stmt = $dbConn->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
$stmt->bindValue(':designation', $designation, PDO::PARAM_STR);
$stmt->execute();

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
	?>
</body>

</html>