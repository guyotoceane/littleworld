<!DOCTYPE html>
<html>
	<head lang="fr">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<title>Littleworld</title>
		<link rel="stylesheet/less" type="text/css" href="less/styles.less" />
		<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css" />
	</head>
    <style>
        li{
            list-style: none;
        }

        .gu-mirror {
            position: fixed !important;
            margin: 0 !important;
            z-index: 9999 !important;
            opacity: 0.8;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
            filter: alpha(opacity=80);
        }
        .gu-hide {
            display: none !important;
        }
        .gu-unselectable {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }
        .gu-transit {
            opacity: 0.2;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
            filter: alpha(opacity=20);
        }

    </style>

<body>
<?php include("header.php"); ?>

<section>
<div class="onglet createLivre">
	<div class="container-fluid">
		<div class="row">
			<?php include("aside.php"); ?> 
			<div class="content col-md-9">
				<div class="onglet wrapper">
				    <h2 class="label">Choix des fiches : </h2>
					<div class="row">
						<div class="block-fiche px-3 col-md-8">
							<ul class="connected-sortable d-flex justify-content-around container" id="left-rollbacks">
                                <?php

                                $liste = $_SESSION['listFiches'];

                                for($i=0; $i<count($liste) ;$i++){
                                    echo "<li id='".$liste[$i]['idt_lnd']."'>
                                                <img width='100px' src='./images/fiches_pays/".$liste[$i]['nam_img']."'>
                                                <p style='text-align: center'>".$liste[$i]['nam_land']."</p>
                                          </li>";
                                }

                                ?>

                                <li>&nbsp;</li>
							</ul>
						</div>
					</div>
                    <h2 class="label">Assemblage des fiches : </h2>
					<div class="row">
                        <div class="col-md-12">
                            <input style="margin-left:16%; margin-bottom:2%;" type="text" id="name_book" placeholder="Titre du livre">
                        </div>
						<div class="block-fiche px-3 col-md-8">
							<ul  class="connected-sortable d-flex justify-content-around container" id="right-rollbacks">
                                <li id="legende">Glissez les fiches que vous voulez assenbler</li>

							</ul>
						</div>
					</div>								
					<div class="row">
						<div class="block-btn">
							<button class="btn-submit B1" id="b1">
								Aperçu
							</button>
							<button class="btn-submit B1" id="b2">
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


<script src='https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js'></script>

<script>
    
    
    document.getElementById('b1').addEventListener('click', assembler, false);
    document.getElementById('b2').addEventListener('click', assembler, false);

    function assembler() {

        console.log(this.id)

        var fiches = [];

        for(let i = 0 ; i<document.getElementById('right-rollbacks').children.length; i++){
            let tmp = document.getElementById('right-rollbacks').children[i];


            if(tmp.id && tmp.id !== "legende" ){
                let fiche = {}
                fiche.id = tmp.id;

                fiches.push(tmp.id);


            }

        }

        console.log(fiches);
        envoyer(this.id, fiches)
    }

    function envoyer(id, infos) {

        if(id === "b1"){
            type = "GET"
        } else if (id === "b2")  {
            type = "POST"
        }

        console.log(infos);


        $.ajax({
            // chargement du fichier externe monfichier-ajax.php
            url      : "http://localhost/littleworldBack/book/",
            cache    : false,
            data : {
                infos : infos,
                title : document.getElementById('name_book').value
            },
            type : type,
            dataType : "html",
            error    : function(request, error) { // Info Debuggage si erreur
                alert("Erreur : responseText: "+request.responseText);
            },
            success  : function(data) {
                console.log(data);

                console.log('BRAVO !! ')
            }

        });
    }

   dragula([document.getElementById('left-rollbacks'), document.getElementById('right-rollbacks')]).on('drop', function (el) {
       console.log(document.getElementById('right-rollbacks').children.length)

       if(document.getElementById('right-rollbacks').children.length>2){
           document.getElementById('legende').style.display="none"
       } else {
           document.getElementById('legende').style.display="block"
       }
   });






//   $( init );
//
//   function init() {
//       $( ".droppable-area1, .droppable-area2" ).sortable({
//           connectWith: ".connected-sortable",
//           stack: '.connected-sortable ul'
//       }).disableSelection();
//   }


</script>



</body>
</html>