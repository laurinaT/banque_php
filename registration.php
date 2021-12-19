<pre><?php print_r($_POST); ?></pre>
<?php
// if(empty($_POST['firstname'])) {
// echo '<div class="alert alert-danger" role="alert">
//   Veuillez saisir votre prénom !!!
// </div>';
// header("Location: account_creation.php"); 
// 		exit();
// }


	session_start();
	try {
		$db = new PDO('mysql:host=localhost;dbname=secure_bank', "root", "");
	} catch (\Exception $e) {
		echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
		die();
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$user_mail = $_POST['user_mail'];
	$user_pwd = $_POST['user_pwd'];

	// On prepare la requête dans la table user
	$sqlQuery = 'INSERT INTO User (firstname, lastname, phone, user_mail, user_pwd, login_creation) 
					VALUES ("'.$firstname.'", "'.$lastname.'", "'.$phone.'", "'.$user_mail.'", "'.$user_pwd.'", NOW())';

	$userStatement = $db->prepare($sqlQuery);
	$userStatement->execute();

?>