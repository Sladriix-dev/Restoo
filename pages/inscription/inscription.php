<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../../css/inscription_style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
                <img src="../../asset/Logo_Restoo.png" alt="logo du restaurant" class="logo_restoo"/>
            </div>
			<div class="card-body">
				<form action="./inscription_validation.php" name="register" method="POST">
					<div class="identifiants-login">
					<div class="input-group form-group col-12-md-6" style="margin-right: 5px;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="nom" placeholder="Nom de famille">
					</div>
                    <div class="input-group form-group col-12-md-6" style="margin-left: 5px;">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="prenom" placeholder="Prénom">
					</div>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
						</div>
						<div class="genders">
							<div class="homme">
								<input type="radio" id="homme" name="gender" value="Homme">
  								<label for="homme">Homme</label><br>
							</div>
							<div class="femme">
  								<input type="radio" checked id="femme" name="gender" value="Femme">
  								<label for="femme">Femme</label><br>
							</div>
							<div class="others">
  								<input type="radio" id="others" name="gender" value="Others">
  								<label for="others">Autre</label>
							</div>
						</div>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
						</div>
						<input type="text" class="form-control" name="adresse" placeholder="Adresse">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
						</div>
						<input type="text" class="form-control" minlength="5" name="cp" placeholder="Code postale">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="text" class="form-control" minlength="10" name="telephone" placeholder="Téléphone">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="confirmPassword" placeholder="Confirmez votre mot de passe" required="required">
					</div>
					<div class="form-group">
						<input type="submit" value="register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Déjà inscrit(e) ?<a href="../connexion/connexion.php">Se connecter</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>