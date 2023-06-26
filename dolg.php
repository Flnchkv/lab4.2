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
	<title>Должники</title>
</head>

<body>
	<h2>Безнадёжные должники</h2>

	<table width='80%'>
		<tr class="hat">
			<td><strong>Студент</strong></td>
			<td><strong>Группа</strong></td>
			<td><strong>Тема</strong></td>
			<td><strong>Задача</strong></td>
			<td><strong>Дата</strong></td>
			<td><strong>Баллы</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			if($res['score'] < 30){
				echo "<tr>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['theme']."</td>";
				echo "<td>".$res['zadacha']."</td>";
				echo "<td>".$res['date']."</td>";
				echo "<td>".$res['score']."</td>";
				echo "</tr>";
			}
		}
		?>
	</table>
</body>
</html>