<aside class="col-md-3">
	<h2 class="label">Filtrage des pays</h2>
	<h3>Continent</h3>
	<div class="rubrique">
		<span>Amérique du sud</span>
		<span>Amérique du nord</span>
		<span>Afrique</span>
		<span>Asie</span>
		<span>Europe</span>
	</div>
	<h3>Lettre du pays</h3>
	<div class="rubrique">
<?php
    for($nbr = 0; $nbr < 26; $nbr++){
        echo "<span>".chr($nbr + 65)."</span>";
    }
?>
	</div>
	<h3>Langue parlé</h3>
	<div class="rubrique">
		<span>Anglais</span>
		<span>Allemand</span>
		<span>Français</span>
		<span>Portugais</span>
		<span>Espagnol</span>
	</div>
	<h3>Population du pays</h3>
	<div class="rubrique">
		<div class="row form-group">
			<label for="population-inf" class="col-md-7">En dessous de : </label>
			<div class="col-md-5">
				<input type="text" id="population-inf" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<label for="population-sup" class="col-md-7">Au dessus de : </label>
			<div class="col-md-5">
				<input type="text" id="population-sup" class="form-control">
			</div>
		</div>
	</div>
	<h3>Superficie du pays</h3>
	<div class="rubrique">
		<div class="row form-group">
			<label for="superficie-inf" class="col-md-7">En dessous de : </label>
			<div class="col-md-5">
				<input type="text" id="superficie-inf" class="form-control">
			</div>
		</div>
		<div class="row form-group">
			<label for="superficie-sup" class="col-md-7">Au dessus de : </label>
			<div class="col-md-5">
				<input type="text" id="superficie-sup" class="form-control">
			</div>
		</div>
	</div>

</aside>