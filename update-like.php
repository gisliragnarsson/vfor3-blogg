<?php 

$database = 'vefforritun3';
$user = 'root';
$password = '';
$dsn = "mysql:host=127.0.0.1;dbname=" . $database . ";charset=utf8";

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (\PDOException $e) {
    die($e->getMessage());
}

$comment_id = $_POST["comment_id"];
$blog_id = $_POST["blog_id"];

$data = [$comment_id];

try {
    $pdo->prepare("UPDATE comments SET likes = likes + 1 WHERE id=?")->execute($data);
} catch(\PDOException $e) {
    die($e->getMessage());
}

header("Location: single-blog.php?id=$blog_id");

?>