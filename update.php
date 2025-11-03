<?php
// including the database connection file
include_once("config.php");

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$designation = $_REQUEST['designation'];

// checking empty fields
if (empty($id) || empty($name) || empty($phone) ||empty($designation)) {

	if (empty($id)) {
		echo "<font color='red'>ID field is empty.</font><br/>";
	}

	if (empty($name)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}

	if (empty($phone)) {
		echo "<font color='red'>Phone field is empty.</font><br/>";
	}

	if (empty($designation)) {
		echo "<font color='red'>Designation field is empty.</font><br/>";
	}
} else{
	//updating the table
	$sql = "UPDATE employees SET name='$name', phone='$phone', designation='$designation' WHERE id='$id'";
	$dbConn->exec($sql);

	/*redirectig to the display page. In our case, it is index.php*/
	header("Location: index.php");
}
?>