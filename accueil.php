<?php
	session_start();
	if(isset($_SESSION['userName'])){
		require ('begin_page.php');
		require ('header.php');
		require ('nav.php');
		echo '<h1>Bonjour ' . $_SESSION['userName'] . "!!! Et bienvenue sur votre espace personnel !</h1>";
		require ('cards.php');
		require ('articles.php');
		require ('footer.php');
		require ('end_page.php');
	} else {
		header("Location: http://localhost/banque_php/banque_php/"); 
		exit();
	}
?>