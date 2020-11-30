<?php
function getPdo(): PDO
{
	$pdo = new PDO('mysql:host=localhost;dbname=github;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
	return $pdo;
}

function exists($login){

	$pdo = getPdo();
	$stmt = $pdo->prepare("SELECT * FROM test WHERE login = :login ;");
    $stmt->execute(['login' => $login]);
    if($stmt->rowCount() > 0){
        return -1;
    } else {
        return 1;
    }
}