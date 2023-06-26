<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$theme = mysqli_real_escape_string($mysqli, $_POST['theme']);
	$zadacha = mysqli_real_escape_string($mysqli, $_POST['zadacha']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$score = mysqli_real_escape_string($mysqli, $_POST['score']);

	
	// Check for empty fields
	if (empty($name) || empty($age) || empty($theme) || empty($zadacha) || empty($date) || empty($score)) {
			echo "<font color='red'>Заполните все поля</font><br/>";
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `age` = '$age', `theme` = '$theme', `zadacha` = '$zadacha', `date` = '$date',`score` = '$score'  WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Данные успешно обновлены!</p>";
		echo "<a href='index.php'>Показать результаты</a>";
	}
}
