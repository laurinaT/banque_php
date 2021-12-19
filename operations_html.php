

<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=secure_bank', "root", "");
	} catch (\Exception $e) {
		echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
		die();
	}

	// On prepare la requête dans la table user
	$sqlQuery = 'SELECT * FROM Account';

	$accountStatement = $db->prepare($sqlQuery);
	$accountStatement->execute();

	$accounts = $accountStatement->fetchAll();
?> 

<div id="cards" class="container-main lg-col-9">
    <div class="text-center">
		<h1>Vos comptes personnels</h1>
		<div class="row"></div>
		<div id="comptes" class="row">
			<?php foreach($accounts as $account) :?>
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body border-pink text-center">
							<h4 class="card-title">Compte <?php echo $account['account_name']?></h4>
							<h6 class="card-title">N° <?php echo $account['account_number']?></h6>
							<p class="card-text">Solde :</p>
							<h6 class="card-text"><?php echo $account['account_amount']?> €</h6>
							<div class="text-center">
								<a href="#" class="btn btn-pink">Réaliser une opération</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

        <!-- ##########################################################################################################################################################
                                                                        Formulaire
############################################################################################################################################################### -->



        <main class="container text-center">

            <div class="form-group py-5 shadow">
                <h1>Vos Opérations</h1><br>
                <div class="col-6 text-center">
                    <label class="mt-2">Choisissez l'opération à effectuer</label><br>
                    <select class="form-control" required>
                        <option selected disabled>opération à effectuer</option>
                        <option class="choice" value="devis">Dépôt</option>
                        <option class="choice" value="informations">retrait</option>
                        <option class="choice" value="reclamation">création d'un compte</option>
                        <option class="choice" value="reclamation">suppression d'un compte</option>
                    </select>
                    <br>
                </div>
            </div>


        </main>
    </div>