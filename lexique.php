<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site vitrine du peuple kanigui</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<body>
 
  <?php include ("header.php") ?>

  <h1 class="text-center mt-3">Dictionnaire Français Bakanigui</h1>

  <div class="container text-center mt-5">
  <div class="row">
    <div class="col">
      <button id="bouton-nombres" class="btn btn-dark" type="button">
        Nombres
      </button>
    </div>
    <div class="col">
      <button  class="btn btn-dark" type="button" id="bouton-pronoms">
        Pronoms
      </button>
    </div>
    <div class="col">
      <button id="bouton-conjugaison" class="btn btn-dark" type="button">
        Conjugaison
      </button>
    </div>
    <div class="col">
      <button id="bouton-mots-esxpressions" class="btn btn-dark mt-2" type="button">
        Mots-expressions
      </button>
    </div>
  </div>
</div>

<div class="container text-center" id="nombres">
  <div class="row">
    <section id="section-nombres" class="section-nombre mt-4 " >
      <div class="titre-rubrique text-center mt-3">
        <h3>
          Nombres        
        </h3> 
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_1-10.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_11-20.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_21-30.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_31-40.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_41-50.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_51-60.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_61-70.php"); ?>
          </div>
          <div class="col-2 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_71-80.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/nombres_81-90.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-lg-1 text-nowrap">
              <?php include("lexique/nombres/nombres_91-100.php"); ?>
          </div>
        </div>
      </div>
      </section>
  </div>
</div>

<div class="container text-center" id="conjugaison">
  <div class="row">
    <section id="section-nombres" class="section-nombre" >
      <div class="titre-rubrique text-center mt-5">
        <h3>
          Conjugaison        
        </h3> 
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/conjugaison/conjugaison_Obagha.php"); ?>
          </div>
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 offset-2 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/conjugaison/conjugaison-Obissa.php"); ?>
          </div>
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap ">
              <?php include("lexique/nombres/conjugaison/conjugaison-Okina.php"); ?>
          </div>
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-2 text-nowrap ">
              <?php include("lexique/nombres/conjugaison/conjugaison_Ota.php"); ?>
          </div>
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap ">
              <?php include("lexique/nombres/conjugaison/conjugaison-Otuma.php"); ?>
          </div>
          <div class="col-4 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-2 text-nowrap ">
              <?php include("lexique/nombres/conjugaison/conjugaison-Otama.php"); ?>
          </div>
        </div>
      </div>
      </section>
  </div>
</div>

<div class="container text-center" id="pronoms">
  <div class="row">
    <section id="section-nombres" class="section-nombre" >
      <div class="titre-rubrique text-center mt-5">
        <h3>
          Pronoms       
        </h3> 
      </div>
      <div class="container">
        <div class="row mt-5 text-center">
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-3 offset-3  mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/pronoms/pronoms_personnel.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-3 offset-1 mt-sm-2 text-nowrap">
              <?php include("lexique/nombres/pronoms/pronoms_possessif.php"); ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="container text-center" id="mots-expressions">
  <div class="row">
    <section id="section-nombres" class="section-nombre " >
      <div class="titre-rubrique text-center mt-5">
        <h3>
          Mots-Expressions        
        </h3> 
      </div>
      <div class="container">
        <div class="row mt-5 text-center">
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2  mt-sm-2">
              <?php include("lexique/mots-expressions/quelqu'un.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 offset-1 offset-lg-0 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/genre-personne.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/fille.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2  mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/garcon.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-sm-0 text-nowrap">
              <?php include("lexique/mots-expressions/enfant.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2  mt-sm-2 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/mon-mari.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/ma-femme.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/jalousie.php"); ?>
          </div>
          <div class="col-3 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/petite-amie.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/mange-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/bois-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/parle-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/viens-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/touche-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/pars-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/crie-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/bouge-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/fais-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/t-assoir-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/m-membete-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/regarde-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/provoque-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-2 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/pousse-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/m-insulte-pas.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-reveille.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-prie.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-brosse.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-lave.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-deshabille.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-m-habille.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-mange-du-pain.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-mange-du-riz.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-bois-de-l-eau.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-marche.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-cours.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-vais-au-travail.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-fais-mon-travail.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-finis-mon-travail.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-quitte-du-travail.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-retourne-a-la-maison.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-repose.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-vais-au-wc.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-me-brosse.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/j-ecoute-de-la-musique.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-2 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-dors.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-balais-la-maison.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 offset-1 offset-lg-0 text-nowrap">
              <?php include("lexique/mots-expressions/je-lis-un-document.php"); ?>
          </div>
          <div class="col-8 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-tisse-la-natte.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-bois-du-cafe.php"); ?>
          </div>
          <div class="col-5 col-sm-3 mt-2 col-md-2 col-lg-2 mt-sm-2 text-nowrap">
              <?php include("lexique/mots-expressions/je-souleve-un-enfant.php"); ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<?php include("footer.php")?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <script src="script.js"></script>
            

</body>

</html>