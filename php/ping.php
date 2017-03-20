<?php
session_start();


function pingAnalyserWindows(){
	$_SESSION['ping'] = 0;
	if(PHP_OS == 'Linux'){
		exec('ping 127.0.0.1 -c 1', $output);
	}else{
		exec('ping 127.0.0.1', $output);
	}
	if($output){
		echo "<h1>Status : ON</h1>";
		}else{
		echo "<h1>Status : OFF</h1>";
		}
}

function pingAnalyserDebian(){
	$_SESSION['ping'] = 0;
	if(PHP_OS == 'Linux'){
		exec('ping 127.0.0.1 -c 1', $output);
	}else{
		exec('ping 127.0.0.1', $output);
	}
	if($output){
		echo "<h1>Status : ON</h1>";
		}else{
		echo "<h1>Status : OFF</h1>";
		}
}
?>