<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>test fonction</title>
</head>
<body>
	<form action="" method="post">
	<input type="text" name="login" placeholder="login">
	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
require_once'function/function.php';
if (isset($_POST['login'])) {
$login = htmlspecialchars($_POST['login']);
	if (exists($login) == -1){
		echo " Nannnnn login pris";
	}
	else
		echo "ta de la chance";
}



?>