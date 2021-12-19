 <section class="vh-100">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5 bg-light border-pink" style="border-radius: 1rem;">
              <h2 class="text-uppercase text-center mb-5">Création d'un compte</h2>

              <form action="registration.php" method="post">

                <div class="form-outline mb-4 row">
					<div class="form-outline mb-4 col-6">
						<input type="text" id="prenom" name="firstname" class="form-control form-control-lg border-pink" />
						<label class="form-label" for="prenom">Votre prénom</label>
					</div>
                
					<div class="form-outline mb-4 col-6">
						<input type="text" id="nom" name="lastname" class="form-control form-control-lg border-pink" />
						<label class="form-label" for="form3Example1cg">Votre nom</label>
                	</div>
				</div>

				<div class="form-outline mb-4">
					<input type="tel" id="phone" name="phone" class="form-control form-control-lg border-pink" />
					<label class="form-label" for="phone">Votre numéro de téléphone</label>
      			</div>

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="user_mail" class="form-control form-control-lg border-pink" />
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="pwd" name="user_pwd" class="form-control form-control-lg border-pink" />
                  <label class="form-label" for="pwd">Votre mot de passe</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="conf_pwd" name="confirm_user_pwd" class="form-control form-control-lg border-pink" />
                  <label class="form-label" for="conf_pwd">Confirmation de votre mot de passe</label>
                </div>
            

                <div class="d-flex justify-content-center">
                  <button class="btn btn-pink btn-block btn-lg gradient-custom-4" type="submit">S'enregistrer</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="form_connexion.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>