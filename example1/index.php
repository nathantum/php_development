<?php
require './view/Database.php';
$config = require('./view/config.php');


$db = new Database($config['database']);
$id = $_GET['id'];
$query = 'SELECT * FROM myapp.posts WHERE id = ?';
$posts = $db -> query($query, [$id]) -> fetchAll();

var_dump($posts);
// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
