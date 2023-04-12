<?php 

require "core/db.php";

$query = $pdo->query("SELECT * FROM blogs ORDER BY id DESC");

$blogs = $query->fetchAll();

require "view/index-view.php";

?>
