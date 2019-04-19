<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>

<?php

    include 'matriz.php';

    $i=$_GET['post'];

    $nome = $matriz[$i][1];

    $imagem1 = $matriz[$i][4];
    $titulo1 = $matriz[$i][7];
    $texto1 = $matriz[$i][10];

    $imagem2 = $matriz[$i][5];
    $titulo2 = $matriz[$i][8];
    $texto2 = $matriz[$i][11];

    $imagem3 = $matriz[$i][6];
    $titulo3 = $matriz[$i][9];
    $texto3 = $matriz[$i][12];
    
?>


<div class="container mt-3 mb-5">

  <div class="text-center p-4">
    <h2> Fotos de  <?php echo $nome ?> </h2>
  </div>

  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="<?php echo 'img/'.$imagem1 ?>"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive"><?php echo $titulo1 ?></h3>
          <p><?php echo $texto1 ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="<?php echo 'img/'.$imagem2 ?>"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive"><?php echo $titulo2 ?></h3>
          <p><?php echo $texto2 ?></p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="<?php echo 'img/'.$imagem3 ?>"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive"><?php echo $titulo3 ?></h3>
          <p><?php echo $texto3 ?></p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <div class="" style="position: absolute;left: 30px;top: 98px;">
  <a onclick="history.go(-1)" class="btn-floating btn-lg blue-gradient" style="color:white;"><i class="fas fa-arrow-left"></i></a>
  </div>

</div>

<?php
  require_once('include/footer.php');
?>