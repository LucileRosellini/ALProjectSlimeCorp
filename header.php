<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    <title>SlimeCorp</title>
    <link rel="stylesheet" href="style.css">
 
  </head>

<body>


<header class="bg-firstColor">
    <div class="row justify-content-center no-gutters">
        <div>
            <img class="display-block p-2" src="img\logo.png" alt="">
        </div>
        <div class="d-flex">
            <h1 id="titre" class="text-center py-3 m-auto fluo titleFont">SLIME CORP</h1>
        </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondColor no-gutters">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Acceuil
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projects.php">Projets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customers.php">Nos clients</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>
</header>

<main class="bg-thirdColor">