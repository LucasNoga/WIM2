<?php
	
	session_start();
	$message = '<center><u><h1><b>compteur</b></h1></u></center>';
	echo $message;

	if(!isset($_SESSION['count'])){
		$_SESSION['count'] = 1;
		echo '<center>Bonjour visiteur, vous avez vu cette page '.$_SESSION['count'].' fois</center><br/>';
	}

	//destruction de la session
	else{
		if($_SESSION['count'] == 3){
			session_destroy();
			echo '<center>Session détruite<br/>';
			var_dump($_SESSION);
			echo '</center>';
		}

		else{
			$_SESSION['count']++;
			echo '<center>Bonjour visiteur, vous avez vu cette page '.$_SESSION['count'].' fois</center><br/>';
		}
	}

	echo "<center><a href=\"session2.php?".session_name()."=".session_id()."\">Continuer</a></center>";

	
?>