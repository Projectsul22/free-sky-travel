<?php

/* use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
*/
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Saikou">
    <meta name="generator" content="Hugo 0.108.0">
    
    <title> Free Sky Travel</title>
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    

<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS perso -->
<link href="../assets/css/style.css" rel="stylesheet">

    

  
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/public/index.php">
            <img src="/assets/img/FST.png" height="70" weight="70"></a>
      <a class="navbar-brand" href="/public/index.php">FST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/public/index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/front/a_propos.php">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/front/offres.php">Offres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/front/">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">recherche</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  class="bd-placeholder-img" width="100%" height="100%" src="/assets/img/carousel_4.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Free Sky Travel ?</h1>
            <p>Pour des voyages toujours plus surprenants ;)</p>
            <p><a class="btn btn-lg btn-primary" href="/front/login.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img  class="bd-placeholder-img" width="100%" height="100%" src="/assets/img/carousel_2.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      <div class="container">
          <div class="carousel-caption">
            <h1>Vous voulez un voyage inoubliable mais ne savez pas oû ?</h1>
            <p>Nous nous occupons de tout, et le tout, dans le plus grand secret.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img  class="bd-placeholder-img" width="100%" height="100%" src="/assets/img/carousel_3.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Des envies de confort ou d'expériences atypiques ?</h1>
            <p>Nous nous engageons à vous concevoir un voyage sur mesure.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- costumers msg
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2 class="fw-normal">Xavier Hernandez</h2>
        <p>Ce Concept est in-croy-yable !! Partir en voyage sans savoir ou tout en étant garantie que tout se passe bien ? Que demander de plus ? 
</br> Mention spéciale à Mous qui m'a été d'une grande aide. A l'année prochaine :D
        </p>
        <p><a class="btn btn-secondary" href="#">En savoir plus son voyage ? &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2 class="fw-normal">Judith Pob</h2>
        <p>Ce Concept est in-croy-yable !! Partir en voyage sans savoir ou tout en étant garantie que tout se passe bien ? Que demander de plus ? 
</br> Mention spéciale à Mous qui m'a été d'une grande aide. A l'année prochaine :D</p>
        <p><a class="btn btn-secondary" href="#">En savoir plus son voyage ? &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2 class="fw-normal">Alexandra Costa Da Vida</h2>
        <p>Ce Concept est in-croy-yable !! Partir en voyage sans savoir ou tout en étant garantie que tout se passe bien ? Que demander de plus ? 
</br> Mention spéciale à Mous qui m'a été d'une grande aide. A l'année prochaine :D</p>
        <p><a class="btn btn-secondary" href="#">En savoir plus son voyage ? &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> Le luxe et le confort font parti de votre personne ?<span class="text-muted"></br>Nous avons la solution !</span></h2>
        <p class="lead">Un voyage sous le signe de la royauté avec un confort maximal tout au du séjour. Et pour les activités ? Bien evidement, l'offre s'adapte aussi dans ce cas.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="/assets/img/home_img_1.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Vous préferer les sensations fortes ? <span class="text-muted"> </br>Eh bien nous aussi !</span></h2>
        <p class="lead">Les défis de la vie ? Des defis un jour, des défis tous les jours. Un séjour rempli d'expériences fortes.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="/assets/img/home_img_2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Vous aimez les road trips ?  <span class="text-muted"></br>Restés connecté</span></h2>
        <p class="lead">Un programme avec differents endroits à visiter, des activités uniques, un contact avec la population locale ? Go, go, go !</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="/assets/img/home_img_3.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
      </div>
    </div>

    <hr class="featurette-divider">

    

  </div>


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Retour en haut</a></p>
    <p>&copy; 2023 Saikou Bah, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
