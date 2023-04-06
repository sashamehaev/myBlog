<?php

$connection = new PDO('mysql:host=localhost;dbname=myBlog;', 'root', '');

$title = 'title1';
$text = 'text1';

$params = [
    'title' => $title,
    'text' => $text
];

$sql = "INSERT posts (title, text) VALUE (:title, :text)";
$query = $connection->prepare($sql);
$query->execute($params);