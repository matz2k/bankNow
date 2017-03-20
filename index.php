<!DOCTYPE html>
<html>
<head>
	<title>NantesMonitoring - Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
</head>
<header>
	<img src="include/logo.png" class="toplogo">
</header>
<body>
	<h1 class="MainTitle">NantesMonitoring</h1>
	<form action="php/log.php" class="loginform" method="POST" >
		<input type="email" name="email" class="first" placeholder="Email" style="text-align: center;">
		<input type="password" name="password" placeholder="Password" style="text-align: center;">
		<p style="text-align: center;"><?php if(isset($_SESSION['name']))echo "accés refusé";?></p>
		<input class="loginButton" type="submit" name="loginSub" value="Log in">
	</form>
</body>
</html>
