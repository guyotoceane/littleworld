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
<div class="onglet createLivre">
	<div class="container-fluid">
		<div class="row">
			<?php include("aside.php"); ?> 
			<div class="content col-md-9">
				<div class="onglet">
				    <h2 class="label">Choix des fiches : </h2>
					<div class="row">
						<div class="block-fiche px-3 col-md-8"> 
							<ul class="d-flex justify-content-around">
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
							</ul>
						</div>
					</div>
                    <h2 class="label">Assemblage des fiches : </h2>
					<div class="row">
						<div class="block-fiche px-3 col-md-8"> 
							<ul class="d-flex justify-content-around">
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
								<li><img src="images/page1.PNG"></li>
							</ul>
						</div>
					</div>								
					<div class="row">
						<div class="block-btn">
							<button class="btn-submit B1">
								Aperçu
							</button>
							<button class="btn-submit B1">
								Assembler
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script src="js/less.min.js" ></script>
<script src="js/jquery.js" ></script>

<script>
//
//    $.ajax({
//        // chargement du fichier externe monfichier-ajax.php
//        url      : "http://localhost/littleworldBack/fiche/",
//        cache    : false,
//        type : "GET",
//        error    : function(request, error) { // Info Debuggage si erreur
//            alert("Erreur : responseText: "+request.responseText);
//        },
//        success  : function(data) {
//
//            data = JSON.parse(data);
//
//            console.log(data.length)
//
//
//            for(let i=0; i< data.length; i++){
//                let li = document.createElement('li');
//                console.log(data[i])
//
//                // li.innerText = data[i].nam_land
//
//                let img = document.createElement('img');
//
//                img.setAttribute('src', "./images/fiches_pays/"+data[i].nam_img);
//                img.style.width = '5em'
//
//                let text = document.createElement("p")
//
//                text.appendChild(document.createTextNode(data[i].nam_land))
//
//                text.style.textAlign = "center"
//
//                li.appendChild(img);
//
//                li.appendChild(text);
//
//                li.id = data[i].idt_lnd
//
//                document.getElementById('list-fiches').appendChild(li)
//
//            }
//
//        }
//    })

</script>



</body>
</html>