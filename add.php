<html>
<head>
	<title>Добавить</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Montserrat:wght@100&display=swap" rel="stylesheet">

</head>

<body>
	<h2>Добавить</h2>
	<p>
		<a href="index.php">Главная</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table class = "add" >
			<tr>
				<td>Студент</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Группа</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>Тема</td>
				<td><input type="text" name="theme"></td>
			</tr>
			<tr>
				<td>Задача</td>
				<td><input type="text" name="zadacha"></td>
			</tr>
			<tr>
				<td>Дата</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr>
				<td>Баллы</td>
				<td><input type="text" name="score"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Добавить" class = "button" ></td>
			</tr>
		</table>
	</form>
</body>
</html>
