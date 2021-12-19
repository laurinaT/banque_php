<?php
	session_start();
	try {
		$db = new PDO('mysql:host=localhost;dbname=secure_bank', "root", "");
	} catch (\Exception $e) {
		echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
		die();
	}

	// On prepare la requête dans la table user
	$sqlQuery = 'SELECT * FROM user';

	$userStatement = $db->prepare($sqlQuery);
	$userStatement->execute();

	$users = $userStatement->fetchAll();

	// Validation du formulaire
	if (isset($_POST['email']) && isset($_POST['password'])) {
		foreach ($users as $user) {
			if ($user['user_mail'] === $_POST['email'] && $user['user_pwd'] === $_POST['password'] ) {
				$_SESSION['userName'] = $user['firstname'];
				header("Location: home.php"); 
				exit();
			}
		}
		header("Location: form_connexion.php"); 
		exit();
	}
?>