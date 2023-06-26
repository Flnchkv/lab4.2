<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$theme = $resultData['theme'];
$zadacha = $resultData['zadacha'];
$date = $resultData['date'];
$score = $resultData['score'];
?>
<html>
<head>
	<title>Изменить</title>
</head>

<body>
    <h2>Изменить</h2>
    <p>
	    <a href="index.php">На главную</a>
    </p>

	<form name="edit" method="post" action="editAction.php">
		<table>
			<tr>
				<td>Студент</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Группа</td>
				<td><input type="text" name="age" value="<?php echo $age; ?>"></td>
			</tr>
			<tr>
				<td>Тема</td>
				<td><input type="text" name="theme" value="<?php echo $theme; ?>"></td>
			</tr>
			<tr>
				<td>Задача</td>
				<td><input type="text" name="zadacha" value="<?php echo $zadacha; ?>"></td>
			</tr>
			<tr>
				<td>Дата</td>
				<td><input type="text" name="date" value="<?php echo $date; ?>"></td>
			</tr>
			<tr>
				<td>Баллы</td>
				<td><input type="text" name="score" value="<?php echo $score; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Обновить"></td>
			</tr>
		</table>
	</form>
</body>
</html>
