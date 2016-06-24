<?php
	session_start();
	$message = '<center><u><h1><e><b>compteur</b></h1></u></center>';
	echo $message;

	//premier chargement
	if(!isset($_SESSION['count'])){
		$_SESSION['count'] = 0;
		echo $_SESSION['count'];
	}
	
	//deuxieme chargment
	else{
		if($_SESSION['count'] == 3){
			unset($_SESSION['count']);
			echo 'erreur suppresion de la variable';
		}

		else{
			$_SESSION['count']++;
			echo $_SESSION['count'];
		}
	}
?>
