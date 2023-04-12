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

$blog_id = $_POST["blog_id"];
$author = $_POST["author"];
$content = $_POST["content"];

$data = [null, $author, $content, 0, $blog_id];

try {
    $pdo->prepare("INSERT INTO comments VALUES (?,?,?,?,?)")->execute($data);
} catch(\PDOException $e) {
    die($e->getMessage());
}

header("Location: single-blog.php?id=$blog_id");

?>