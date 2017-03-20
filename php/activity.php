<?php
session_start();
$try = "3";
$scdtry = "4";

$_SESSION['winCon'] = "N/A";
$_SESSION['debCon']	= "N/A";
if(!isset($_SESSION['name'])){
	header("Location: ../index.php");
}
if($_SESSION['access'] == 0){
	header("Location: ../index.php");
}

if(!isset($_REQUEST['debianPing']) || !isset($_REQUEST['windowsPing'])){
	pingAnalyserDebian();
	pingAnalyserWindows();
}

function pingAnalyserWindows(){
	$res = "";
	$_SESSION['ping'] = 0;
	if(PHP_OS == 'Linux'){
		exec('fping -c1 -t500 192.168.200.17', $output);
	}else{
		exec('ping 192.168.200.17', $output);
	}
	if($output){
		$_SESSION['winCon'] = "Status : ON";
		}else{
		$_SESSION['winCon'] = "Status : OFF";
		}
}

function pingAnalyserDebian(){
	$res = "";
	$_SESSION['ping'] = 0;
	if(PHP_OS == 'Linux'){
		exec('fping -c1 -t500 192.168.200.18', $output);
	}else{
		exec('ping 192.168.200.18', $output);
	}
	if($output){
		$_SESSION['debCon'] = "Status : ON";
		}else{
		$_SESSION['debCon'] = "Status : OFF";
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>NantesMonitoring - Accueil</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../include/jscharts.js"></script>
</head>
<header>
	<img src="../include/logo.png" class="toplogo">
</header>
<body>
	<h1 class="MainTitle">NantesMonitoring</h1>
	<div class="infoContainer">
		<section id="firstmgl">
			<div id="chartcontainer">	
				<script type="text/javascript">
				var myData = new Array(["hey", 20], ["hello", 10], ["lor", 30], ["try", 70], ["hello", 5]);
				var myChart = new JSChart('chartcontainer', 'bar');
				myChart.setDataArray(myData);
				myChart.draw();
				</script>
			</div>
		</section>
		<div class="infoSrv1">
			<h1>Serveur Windows</h1>
			<h2 id='proto1'><?= $_SESSION['winCon'];?></h2>
			<form>
			<input class="pingButton" type="submit" name="windowsPing" value="PING">
			</form>
			<h3 class="graph1">Response time</h3>
		</div>
		<section id="scdmgl">
			<div id="chartcontainer2">	
				<script type="text/javascript">
				var myData = new Array(["hey", 53], ["hello", 17], ["lor", 13], ["try", 2], ["hello", 5]);
				var myChart = new JSChart('chartcontainer2', 'bar');
				myChart.setDataArray(myData);
				myChart.draw();
				</script>
			</div>
		</section>
		<div class="infoSrv2">
			<h1>Serveur DEBIAN</h1>
			<h2 id='proto2'><?= $_SESSION['debCon'];?></h2>
			<form>
			<input class="pingButton" type="submit" name="debianPing" value="PING">
			</form>
		</div>
			<h2 class="winDownTimes" style="text-align: center;">Windows total down times : 45</h2>
			<h2 class="winDownTimes" style="text-align: center;">Debian total down times : 57</h2>
			<h2 style="text-align: center;">Windows fiability mark : <?= $try;?></h2>
			<h2 style="text-align: center;">Debian fiability mark : <?= $scdtry;?></h2>
	</div>
	<a href="../index.php"><button class="accueilbtn">Accueil</button></a>
</body>
</html>
