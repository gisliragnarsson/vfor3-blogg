<?php 

require "core/db.php";

$id = $_GET['id'];

$query = $pdo->query("SELECT * FROM blogs WHERE id = $id");

$blog = $query->fetch();

$query = $pdo->query("SELECT * FROM comments WHERE blog_id = $id");

$comments = $query->fetchAll();

require "view/single-blog-view.php";

?>
