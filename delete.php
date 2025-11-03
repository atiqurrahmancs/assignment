<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_POST['id'];

//deleting the row from table
$sql = "DELETE FROM employees WHERE id = $id";
$dbConn->exec($sql);

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>
