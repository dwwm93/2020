<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="assets/jquery/jquery-3.5.1.min.js"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- navBar menu -->
  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark"> 
    <img src="img/justplay.png" height="100px" width="100px">
  <!-- permet de mettre en responsive la navbar -->
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      
        <li class="nav-item active">
          <a class="nav-link btn btn-info" style="margin: 5px;" href="index.html">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            class="nav-link btn btn-info" style="margin: 5px;">
            Catégories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Films</a></li>
            <li><a class="dropdown-item" href="#">Séries</a></li>
            <li><a class="dropdown-item" href="#">Documentaires</a></li>
            <li><a class="dropdown-item" href="#">Divertissements</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a type="button" class="nav-link btn btn-info getUrl" style="margin: 5px;" getPage="tarif.html">Abonnements</a>
        </li>
        <li class="nav-item">
          <a type="button" class="nav-link btn btn-info getUrl" style="margin: 5px;" getPage="login.html">Connexion</a>
        </li>
      </ul>
    </div>
  </nav>
   <main>
    <!-- Carrousel des films -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner"> </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <center>
      <h2 style="background-color: cyan;">Top 10 des meilleurs Films</h2>
    </center>

    <!-- id intégrations des films dans la balise Top10 -->
    <section id="Top10">
    </section>

    <div class="modal fade" id="detailFilm" tabindex="-1" aria-labelledby="detailFilmLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detailFilmLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="imageFilm"></div>
            Date de sortie : <span id="dateSortieFilm"></span>
            
          </div>
         
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>



    
  </main>



