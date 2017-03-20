<?php

$hote = 'localhost';
$port = '3306'; //port par défaut
$db = 'Users'; // le nom de la base de donnée
$login = 'root';
$mdp = 'Mirage'; // mot de passe pour la base de donnée
//Instanciation de la classe PDO
try{
  $pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$db, $login, $mdp);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
  echo 'Erreur: '.$e->getMessage(). '<br/>';
}

$res = $pdo->query("SELECT Name, Email, Password, Access FROM Users ORDER BY Name;");
while($row = $res->fetch()){
	if (isset($_POST['email']) && isset($_POST['password'])){
  		if($_POST['email'] == $row['Email'] && $_POST['password'] == $row['Password']){
		    //L'utilisateur est connecté
		    session_start();
		    $_SESSION['name'] = $row['Name'];
		    $_SESSION['access'] = $row['Access'];
		       $didItMatch = 1;
		    header("Location: activity.php");
		    break;
		  }else{
		  	header("Location: ../index.php");
		  }
 	}else{
 		header("Location: ../index.php");
 	}
}
$res->closeCursor();
$pdo = null;
?>