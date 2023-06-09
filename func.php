<?php
include 'config.php';

$name = $_POST['name'];
$theme = $_POST['theme'];
$zadacha = $_POST['zadacha'];
$date = $_POST['date'];
$score = $_POST['score'];
$zachet = $_POST['zachet'];

// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `users`(`id`, `name`, `theme`, `zadacha`, `date`, `score`, `zachet`) VALUES (?,?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$id, $name, $theme, $zadacha, $date, $score, $zachet]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}else{
	echo 'error';
}

// Read

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$edit_name = $_POST['edit_name'];
$edit_theme = $_POST['edit_theme'];
$edit_zadacha = $_POST['edit_zadacha'];
$edit_date = $_POST['edit_date'];
$edit_score = $_POST['edit_score'];
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE users SET name=?, theme=?, zadacha=?, date=?, score=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_name, $edit_theme, $edit_zadacha, $edit_date,$edit_score, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM users WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
