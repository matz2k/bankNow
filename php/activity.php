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
		<div class="LeftContainer">
			<div class="money">
				<p class="Amount">75</p>
				<i id="AmountSym" class="fa fa-eur"></i>
			</div>
			<div class="historyContainer">
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="neg" class="fa fa-arrow-down" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="neg" class="fa fa-arrow-down" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
			</div>
		</div>
		<div class="MidContainer">
			<div class="money">
				<p class="Amount">3421</p>
				<i id="AmountSym" class="fa fa-eur"></i>
			</div>
			<div class="historyContainer">
				<div class="item">
					<i id="neg" class="fa fa-arrow-down" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="neg" class="fa fa-arrow-down" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
				<div class="item">
					<i id="pos" class="fa fa-arrow-up" aria-hidden="true"></i>
					<p class="Libelle">Loyer</p>
					<p class="howmuch">310</p>
					<i id="eur" class="fa fa-eur"></i>
				</div>
			</div>
		</div>
		<div class="RightContainer">
			<a href="php/intvir.php"><button>Virement Interne</button></a>
			<a href="php/extvir.php"><button>Virement Externe</button></a>
		</div>
	</div>
	<a href="../index.html"><button class="accueilbtn">Accueil</button></a>
</body>
</html>