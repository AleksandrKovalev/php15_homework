<?php
$data = [
    "author" => $_POST['author'],
    "article" => $_POST['article']
];
try{
    $connection = new PDO('mysql:host=localhost;dbname=php15db','root','');
    $query = "INSERT INTO posts(title, author) VALUES (:author, :article)";
    $statement = $connection->prepare($query);
    $res = $statement->execute($data);

} catch (PDOException $e) {
    die($e->getMessage());
}
