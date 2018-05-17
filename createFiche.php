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
<section>
<div class="onglet createFiche">
	<div class="container">
		<div class="row">
            <form class="needs-validation" action="http://localhost/littleworldBack/fiche/" enctype="multipart/form-data" novalidate style="width:100%;" method="post">
				<div class="form-block">
					<span>Etape 1</span>
					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="continent" class="col-md-4">Continent du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="continent" id="continent" placeholder="Français" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="nom" class="col-md-4">Population</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="population" id="population" placeholder="66 000 000" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="nom" class="col-md-4">Nom du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="nom" id="nom" placeholder="France" required>
							</div>
						</div>
					
						<div class="col-md-6 row">
							<label for="langue" class="col-md-4">Langue du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="langue" id="langue" placeholder="Français" required>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="capital" class="col-md-4">Capital du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="capital" id="capital" placeholder="Paris" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="population" class="col-md-4">Monnaie du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="monnaie" id="monnaie" placeholder="Euro" required>
							</div>
						</div>
					</div>	

					<div class="form-group row">
						<div class="col-md-6 row">
							<label for="superficie" class="col-md-4">Superficie du pays</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="superficie" id="superficie" placeholder="672 051" pattern="[1-9]" required>
							</div>
						</div>
						<div class="col-md-6 row">
							<label for="fleuve" class="col-md-4">Fleuve</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="fleuve" id="fleuve" placeholder="Seine" required>
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
                <div class="row justify-content-between">
                    <div class="form-block col-5">
                        <span>Etape 2</span>		
                        <div class="form-row row">
                            <div class="col-md-12">
                                <p>Choix de la mise en page</p>
                                <div id="choix-mise-en-page">
                                    <input type="radio" id="page1" value="page1" name="page" checked="checked"><label for="page1"><img src="images/mep1.PNG" alt="mise en page image a gauche"></label>
                                    <input type="radio" id="page2" value="page2" name="page" ><label for="page2"><img src="images/mep2.PNG" alt="mise en page image a gauche"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-block col-4">
                        <span>Etape 3</span>
                        <div class="align-middle">
                            <p class="row">Séléctionnez image du pays </p>
                            <label for="image-pays" class="B1">Parcourir</label>
                            <input type="file" name="image-pays" id="image-pays" value="parcourir">
                        </div>
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
</section>
<script src="js/less.min.js" ></script>

<!--<script>-->
<!--    // Example starter JavaScript for disabling form submissions if there are invalid fields-->
<!--    (function() {-->
<!--        'use strict';-->
<!--        window.addEventListener('load', function() {-->
<!--            // Fetch all the forms we want to apply custom Bootstrap validation styles to-->
<!--            var forms = document.getElementsByClassName('needs-validation');-->
<!--            // Loop over them and prevent submission-->
<!--            var validation = Array.prototype.filter.call(forms, function(form) {-->
<!--                form.addEventListener('submit', function(event) {-->
<!--                    if (form.checkValidity() === false) {-->
<!--                        event.preventDefault();-->
<!--                        event.stopPropagation();-->
<!--                    }-->
<!--                    form.classList.add('was-validated');-->
<!--                }, false);-->
<!--            });-->
<!--        }, false);-->
<!--    })();-->
<!--</script>-->


</body>
</html>