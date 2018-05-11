<!DOCTYPE html>
<html>
	<head lang="fr">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>Littleworld</title>
		<link rel="stylesheet/less" type="text/css" href="less/styles.less" />
		<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" />
	</head>
	<body>
		<?php include("header.php"); ?>
		<section class="background-image">
			<div class="container">
				<div class="inscription">
					<div class="row">
						<form class="needs-validation form-user" novalidate style="width:100%;">
							<div class="form-block">
								<div class="text-center tittle-inscription">
									<h3> INSCRIPTION </h3>
								</div>

								<div class="row">
									<div class="col-md-4 col-sm-12">
										<label for="nom">Nom</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="text" class="form-control " id="nom" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<label for="prenom">Prénom</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="text" class="form-control " id="prenom" required>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4 col-sm-12">
										<label for="mail">E-mail</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="text" class="form-control " id="mail" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<label for="password">Mot de passe</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="password" class="form-control " id="password" required>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<label for="confirm_password">Verification mot de passe</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="password" class="form-control" id="confirm_password" required>
									</div>
								</div>
								
	
								
								<button class="B1 mx-3 btn-submit-inscription" type="submit">Inscription</button>
							</div>
						</form>
					
					</div>
				</div>
			</div>
		</section>
		<script src="js/less.min.js" ></script>
		<script>
		    var element = document.getElementById('confirm_password');

			element.addEventListener('keyup', function() {

			
			  if (document.getElementById('password').value == element.value) {
				element.style.border = 'solid 1px green';
			  } else {
				element.style.border = 'solid 1px red';

			  }
			})
		
		</script>
	</body>
</html>