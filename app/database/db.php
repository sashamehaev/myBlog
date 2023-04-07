<?php

require('connect.php');

function tt($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

$sql = "SELECT * FROM posts";

$query= $pdo->prepare($sql);
$query->execute();

$data = $query->fetchAll();

$title = $data[0]['title'];
$date = $data[0]['date'];
echo $date;
// $title = 'title1';
// $text = 'text1';

// $params = [
//     'title' => $title,
//     'text' => $text
// ];

// $sql = "INSERT posts (title, text) VALUE (:title, :text)";
// $query = $connection->prepare($sql);
// $query->execute($params);