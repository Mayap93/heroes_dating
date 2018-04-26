<?php
include '../classes/database.php';

$to_user = 3;
$from_user = 1;
$text = $_POST['commentText'];
$database = new Database;
$database->connect();


$database->prepared("INSERT INTO comments (from_user, to_user, text) VALUES (?, ?, ?);", [$from_user, $to_user, $text]);
header('Location: ../index.php');
