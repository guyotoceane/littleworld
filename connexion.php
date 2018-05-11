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
			<div class="inscription">
				<div class="container">
					<div class="row">
						<form class="needs-validation form-user" novalidate style="width:100%;">
							<div class="form-block">
								<div class="text-center tittle-inscription">
									<h3> CONNEXION </h3>
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
										<label for="pwd">Mot de passe</label>
									</div>
									<div class="col-md-8 col-sm-12">
										<input type="password" class="form-control " id="pwd" required>
									</div>
								</div>
								
										
								
								<button class="B1 mx-3 btn-submit-inscription" type="submit">Connexion</button>
							</div>
						</form>
					
					</div>
				</div>
			</div>
		</section>
		<script src="js/less.min.js" ></script>
		
		
	</body>
</html>