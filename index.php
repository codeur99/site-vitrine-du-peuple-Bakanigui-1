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

<div class="container mt-4">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-6 container-carousel">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="images/pond_aliane.jpg" class="d-block image-carousel" alt="femme baka">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/baka_2.jpg" class="d-block image-carousel" alt="femme baka">
          </div>
          <div class="carousel-item">
            <img src="images/baka_3.jpg" class="d-block image-carousel" alt="danse baka">
          </div>
          <div class="carousel-item">
            <img src="images/image-forgeron-2.jpeg" class="d-block image-carousel" alt="forgeron baka">
          </div>
          <div class="carousel-caption d-block d-md-block">
            <h5 class="police-bienvenue">BIENVENUE SUR LE SITE VITRINE DU PEUPLE <br>BAKANIGUI DU GABON</h5>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class="container my-5 bloc-1">
  <div class="row text-center">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
      <h1 class="fw-bold">Vision</h1>
      <hr
        class="mb-4 mt-0 d-inline-block mx-auto"
        style="width: 70px; background-color: #7c4dff; height: 2px"
      />
      <p class="text-vision" >
            Nous aspirons à faire briller la culture Kaningui à travers le Gabon et au-delà. Notre objectif est de créer un réseau solide, 
        d'organiser des événements culturels enrichissants, de former et de promouvoir les jeunes impliqués dans la préservation de notre héritage culturel, 
        y compris la langue vernaculaire kaningui, au fil des générations.Nous nous engageons également à accroître la visibilité de notre communauté et à établir des partenariats avec divers acteurs locaux et internationaux. 
        Rejoignez-nous dans cette mission passionnante de valorisation et de préservation de notre riche patrimoine culturel.
      </p>
    </div>
    
  </div>
</div>

<div class="container text-center mt-5 bloc-5">
  <h1 class="fw-bold">Equipe</h1>
  <hr
    class="mb-4 mt-0 d-inline-block mx-auto"
    style="width: 90px; background-color: #7c4dff; height: 2px"
  />
  <div class="row">
    <div class="col-6 col-sm-6 col-md-4 col-lg-4">
      <div class="card mb-4 card-equipe-footer">
        <div class="logo">
        <img src="images/darryn.jpeg" class="card-img-top mt-2" alt="Photo de membre d'équipe">
        </div>
       
        <div class="card-body">
          <h5 class="card-title police-equipe-nom">TSOUNGHAT Darryn</h5>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-6 col-md-4 col-lg-4">
      <div class="card mb-4 card-equipe-footer">
        <div class="logo">
        <img src="images/Sakoussou.jpeg" class="card-img-top mt-2" alt="Photo de membre d'équipe">
        </div>
       
        <div class="card-body">
          <h5 class="card-title police-equipe-nom"> SAKOUSSOU BANDA Parfait Noël</h5>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-6 col-md-4 col-lg-4">
      <div class="card mb-4 card-equipe-footer">
        <div class="logo">
        <img src="images/ngoundou.jpeg" class="card-img-top mt-2" alt="Photo de membre d'équipe">
        </div>
       
        <div class="card-body">
          <h5 class="card-title police-equipe-nom">NGOUNDOU BOULAMATARI Thierry</h5>
        </div>
      </div>
    </div>

    <div class="col-6 col-sm-6 col-md-4 col-lg-4 offset-lg-4">
      <div class="card mb-4 card-equipe-footer">
        <div class="logo">
        <img src="images/jerry_mvoulangari.jpg" class="card-img-top mt-2" alt="Photo de membre d'équipe">
        </div>
       
        <div class="card-body">
          <h5 class="card-title police-equipe-nom">MVOULANGARI Jerry</h5>
        </div>
      </div>
    </div>
  </div>

</div>
  <?php include("footer.php")?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            

</body>

</html>