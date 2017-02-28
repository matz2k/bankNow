<?php
//Instanciation de PDO
$hote = 'localhost';
$port = '3306'; //port par défaut
$db = 'bankNow'; // le nom de la base de donnée
$login = 'root';
$mdp = 'root'; // mot de passe pour la base de donnée

try{
  $pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$db, $login, $mdp);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
  echo 'Erreur: '.$e->getMessage(). '<br/>';
}

//Création de compte
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$pdo->query("INSERT INTO Users(Name, Email, Password) VALUES ('$name', '$email', '$password')");
		echo "Succes ! Welcome In Bank Now !";
}else{
	echo "Veuillez remplir tous les champs SVP";
}

$pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
	<title>BankNow - Accueil</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen" />
</head>
<header>
	<img src="../include/logo.png" class="toplogo">
</header>
<body>
	<h1 class="MainTitle">BankNow</h1>
	<form class="loginform">
		<input type="text" name="name" class="first" placeholder="Email" style="text-align: center;">
		<input type="email" name="email" placeholder="Name" style="text-align: center;">
		<input type="password" name="password" placeholder="Password" style="text-align: center;">
		<input class="loginButton" type="submit" name="registerSub" value="Sign in">
	</form>
</body>
</html>
