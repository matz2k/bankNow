<?php
$hote = 'localhost';
$port = '3306'; //port par défaut
$db = 'bankNow'; // le nom de la base de donnée
$login = 'root';
$mdp = 'root'; // mot de passe pour la base de donnée

//Instanciation de la classe PDO
try{
  $pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$db, $login, $mdp);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
  echo 'Erreur: '.$e->getMessage(). '<br/>';
}

$res = $pdo->query("SELECT Name, Email, Password FROM Users ORDER BY Name;");
while($row = $res->fetch()){
  //Login System
if (isset($_POST['email']) && isset($_POST['password'])){
  if($_POST['email'] == $row['Email'] && $_POST['password'] == $row['Password']){
    //L'utilisateur est connecté
    session_start();
    $_SESSION['name'] = $row['Name'];
    header("Location:php/activity.php");
    echo "OK";
    break;
  }else{
    echo "Accès refusé";
  }
}
}
$res->closeCursor();
$pdo = null;
?>


<!DOCTYPE html>
<html>
<head>
	<title>BankNow - Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
</head>
<header>
	<img src="include/logo.png" class="toplogo">
</header>
<body>
	<h1 class="MainTitle">BankNow</h1>
	<form class="loginform">
		<input type="email" name="email" class="first" placeholder="Email" style="text-align: center;">
		<input type="password" name="password" placeholder="Password" style="text-align: center;">
			<p class="signin">Sign in <a href="php/register.php">Now!</a></p>
		<input class="loginButton" type="submit" name="loginSub" value="Log in">
	</form>
</body>
</html>
