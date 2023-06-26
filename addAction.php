<html>
<head>
	<title>Добавить</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$theme = mysqli_real_escape_string($mysqli, $_POST['theme']);
	$zadacha = mysqli_real_escape_string($mysqli, $_POST['zadacha']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$score = mysqli_real_escape_string($mysqli, $_POST['score']);


	// Check for empty fields
	if (empty($name) || empty($age) || empty($theme) || empty($zadacha) || empty($date) || empty($score)) {
		// Show link to the previous page
		echo "<img src='cat.jpg' width = '300px'>";
		echo "<br/><a href='javascript:self.history.back();'>Ошибка. Попробовать снова.</a>";

	} else {
		// If all the fields are filled (not empty)

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `theme`, `zadacha`, `date`, `score`) VALUES ('$name', '$age', '$theme', '$zadacha', '$date', '$score')");

		// Display success message
		echo "<p><font color='green'>Данные успешно добавлены!</p>";
		echo "<a href='index.php'>Показать результат</a>";
	}
}
?>
</body>
</html>
