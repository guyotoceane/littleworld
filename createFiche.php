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
<? include("header.php"); ?>
<section>
<div class="onglet createFiche">
	<div class="container">
		<div class="row">
			<form class="needs-validation" novalidate style="width:100%;">
				<div class="form-block">
					<span>Etape 1</span>
					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="continent" class="col-md-4">Continent du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="continent" placeholder="Français" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="nom" class="col-md-4">Continent du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="nom" placeholder="Europe" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="nom" class="col-md-4">Nom du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="nom" placeholder="France" required>
							</div>
						</div>
					
						<div class="col-md-6 row">
							<label for="langue" class="col-md-4">Langue du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="langue" placeholder="Français" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="capital" class="col-md-4">Capital du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="capital" placeholder="Paris" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="population" class="col-md-4">Monnaie du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="population" placeholder="Euro" required>
							</div>
						</div>
					</div>	

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="superficie" class="col-md-4">Superficie du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="superficie" placeholder="672 051" pattern="[1-9]" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="fleuve" class="col-md-4">Fleuve</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="fleuve" placeholder="Seine" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-4 row">
							<label for="monument" class="col-md-6">Monument</label>
							<div class="col-md-6">
								<input type="text" class="form-control" id="monument" placeholder="Notre-Dame" required>
							</div>
						</div>
						<div class="col-md-8 row">
							<label for="image-monument" class="B1">Parcourir</label>
							<div class="col-md-2">
								<input type="file" value="Parcourir" id="image-monument" required>
							</div>
						</div>
					</div>		
					<div class="form-group row">
						<div class="col-md-12 row">
							<label for="description" class="col-md-2">Histoire du pays</label>
							<div class="col-md-10">
							<textarea name="description" id="description" class="form-control" rows="5" ></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="form-block">
					<span>Etape 2</span>		
					<div class="form-row">
						<div class="col-md-12">
							<p>Choix de la mise en page</p>
							<div id="choix-mise-en-page">
								<input type="radio" id="page1" name="page" checked="checked"><label for="page1"><img src="images/mep1.PNG" alt="mise en page image a gauche"></label>
								<input type="radio" id="page2" name="page" ><label for="page2"><image src="images/mep2.PNG" alt="mise en page image a gauche"></label>			
							</div>
						</div>
					</div>
				</div>
				<div class="form-block">
					<span>Etape 3</span>
					<div class="form-row">
						<p class="row">Séléctionnez image du pays </p>
						<p class="row">(seulement si choix de mise en page 2 effectué) :</p>
						<label class="B1">Parcourir</label>
						<input type="file" value="parcourir">
					</div>
				</div>
				<div class="form-row justify-content-center">
					<button class="B1 mx-3">Aperçu</button>
					<button class="B1 mx-3 btn-submit-creer-pays" type="submit">Sauvegarder</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
<script src="js/less.min.js" ></script>
</body>
</html>