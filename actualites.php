<?php 
	session_start();

    if(!isset($_SESSION["userName"])) {
        header("Location:form_connexion.php");
        exit;
    }

	include ('begin_page.php');

	include ('header.php');

	include ('nav.php');
?>  

	<div id="cards" class="container-main lg-col-9">

		<div id="Articles" class="text-center">
			<h1>Nos actualités</h1>
			<div id="comptes" class="row">
			
			</div>
		</div>

	</div>

<?php include ('footer.php'); ?>

<script src="js/actualites.js"></script>

<?php include ('end_page.php'); ?>