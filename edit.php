<?php
// including the database connection file
include_once("config.php");
//getting id from url
$id = $_REQUEST['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM employees WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$id = $row['id'];
	$name = $row['name'];
	$phone = $row['phone'];
	$designation = $row['designation'];
}
?>
<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="assets/app.css">
</head>

<body>
	<a href="index.php">Home</a>
	<br /><br />

	<form name="form1" method="post" action="update.php">
		<table border="0">
			<tr>
				<td>ID</td>
				<td><input type="number" name="id" value="<?php echo $id; ?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="number" name="phone" value="<?php echo $phone; ?>"></td>
			</tr>
			<tr>
				<td>Designation</td>
				<td><input type="text" name="designation" value="<?php echo $designation; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>

</html>