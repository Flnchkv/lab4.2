<?php

try {
	$pdo = new PDO('mysql:dbname=test1; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}