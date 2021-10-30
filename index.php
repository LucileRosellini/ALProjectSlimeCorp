<?php require_once 'header.php' ?>

<div class="bg-thirdColor">
  <div id="carouselExampleIndicators" class="carousel slide p-5" data-ride="carousel" data >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50 mx-auto" src="https://picsum.photos/900/600" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 mx-auto" src="https://picsum.photos/900/600" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 mx-auto" src="https://picsum.photos/900/600"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  <?php require_once 'footer.php' ?>