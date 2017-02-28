<?php
//Redirection utilisateur si il n'est pas connecté
if(!isset($_SESSION['name'])){
	header("Location:../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BankNow - Accueil</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
	<img src="../include/logo.png" class="toplogo">
</header>
<body>
	<h1 class="MainTitle">BankNow</h1>
	<div class="infoContainer">
		<div class="CurrentSold">
			<p>3210</p>
			<i class="fa fa-eur"></i>
		</div>
		<div class="REAL">
			<div id="items" class="item">
				<i id="pos" class="fa fa-arrow-up"></i>
				<p>423</p>
				<p>Ta voiture</p>
				<i  id="last" class="fa fa-eur"></i>
			</div>
			<div class="item">
				<i id="neg" class="fa fa-arrow-up"></i>
				<p>935</p>
				<p>Loyer
				<i id="last" class="fa fa-eur"></i>
			</div>
			<div class="item">
				<i id="neg" class="fa fa-arrow-up"></i>
				<p>35</p>
				<p>A manger</p>
				<i id="last" class="fa fa-eur"></i>
			</div>
			<div class="item">
				<i id="pos" class="fa fa-arrow-up"></i>
				<p>235</p>
				<p>des pates</p>
				<i id="last" class="fa fa-eur"></i>
			</div>
			</div>
		</div>
	<a href="../index.html"><button class="accueilbtn">Accueil</button></a>
</body>
</html>
