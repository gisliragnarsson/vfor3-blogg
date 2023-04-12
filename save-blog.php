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

$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];

$data = [null, $title, $content, $author];

try {
    $pdo->prepare("INSERT INTO blogs VALUES (?,?,?,?)")->execute($data);
} catch(\PDOException $e) {
    die($e->getMessage());
}

header("Location: index.php");

?>