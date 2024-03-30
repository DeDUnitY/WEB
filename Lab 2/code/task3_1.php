<?php
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$content = $_POST['content'];

$directory = "объявления/{$category}";
if (!is_dir($directory)) {
    mkdir($directory);
}

$file = fopen("{$directory}/{$title}.txt", "w");
fwrite($file, "{$email}|{$category}|{$title}|{$content}");
fclose($file);

header("Location: task3.php");
?>