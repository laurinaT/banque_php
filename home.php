<?php 
	session_start();

    if(!isset($_SESSION["userName"])) {
        header("Location:form_connexion.php");
        exit;
    }

	require ('begin_page.php');
	require ('header.php');
	require ('nav.php');
	echo $_SESSION['userName'];
	require ('cards.php');
	require ('articles.php');
	require ('footer.php');
	require ('end_page.php');
?>