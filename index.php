<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Montserrat:wght@100&display=swap" rel="stylesheet">
	<title>Главная</title>
</head>

<body>
	<h2>Главная</h2>
	<p>
		<a href="add.php">Добавить</a>
	</p>
	<table width='80%'>
		<tr class="hat">
			<td><strong>Студент</strong></td>
			<td><strong>Группа</strong></td>
			<td><strong>Тема</strong></td>
			<td><strong>Задача</strong></td>
			<td><strong>Дата</strong></td>
			<td><strong>Баллы</strong></td>
			<td><strong>Зачёт</strong></td>
			<td><strong>Действие</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['theme']."</td>";
			echo "<td>".$res['zadacha']."</td>";
			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['score']."</td>";
			echo "<td>";
            if ($res['score'] >= 60) {
                echo "<input class='tic' type='checkbox' checked>";
            } else {
                echo "<input type='checkbox' class='tic'>";
            }
            echo "</td>";

			echo "<td><a href=\"edit.php?id=$res[id]\">Изменить</a> |
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Вы уверены, что хотите удалить?')\">Удалить</a></td>";
		}
		?>
	</table>

	<h2>
	    <a href="dolg.php"> Безнадёжные должники</a><h2>

</body>
</html>
