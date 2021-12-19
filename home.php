<?php 
	session_start();

    if(!isset($_SESSION["userName"])) {
        header("Location:form_connexion.php");
        exit;
    }

	require ('begin_page.php');
	require ('header.php');
	require ('nav.php');
	echo '<h1 class="m-5 justify-center"> Bonjour ' . $_SESSION['userName'] . '!!! Et bienvenue sur votre espace personnel !</h1>';
	require ('cards.php');
	require ('articles.php');
	require ('footer.php');
	require ('end_page.php');
?>