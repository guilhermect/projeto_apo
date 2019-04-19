<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>

<?php

include'matriz.php';

$cat=$_POST['categoria'];

?>

<script>
          
            
$(function(){
    $(".scroll-up button").hide();
                
    var alturadocument = $(document).height();
    var alturajanela = $(window).height();
                
    $(".scroll-down button").on("click",function(e){
        $("html, body").animate({ scrollTop:alturadocument }, 1000);
    });
                
    $(".scroll-up button").on("click",function(e){
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });
                
    $(window).scroll(function() {
        if($(window).scrollTop() + alturajanela == alturadocument) {
            $(".scroll-down button").fadeOut(1000);
            $(".scroll-up button").fadeIn(1000);
        }
    });

    $(window).scroll(function() {
        if($(window).scrollTop() == 0) {
            $(".scroll-up button").fadeOut(1000);
            $(".scroll-down button").fadeIn(1000);
        }
    });
})
</script>

<div class="container">


     <!-- Section: Blog v.3 -->
    <section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Maiores Artistas do <?php echo $cat ?></h2>
    <!-- Section description -->
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Aqui há uma lista de alguns dos maiores nomes do <?php echo $cat ?>.</p>

  
    <hr class="my-5">

    <?php

    for($i=0;$i<sizeof($matriz);$i++){

        $categoria = $matriz[$i][0];
        $nome_artista = $matriz[$i][1];
        $imagem = $matriz[$i][2];
        $descricao_artista=$matriz[$i][3];
        
        if($cat == $categoria){

    ?>

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="<?php echo 'img/'.$imagem ?>" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->



    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong><?php echo $nome_artista ?></strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text text-justify"><?php echo $descricao_artista ?></p>
        <!-- Post data -->
        
        <!-- Read more button -->
        <a class="btn btn-elegant btn-md" href="categoria_interna.php?post=<?php echo $i ?>">Ver Mais</a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <?php
        }
    }
    ?>

    </section>
    <!-- Section: Blog v.3 -->   
</div>

<div class="" style="position: absolute;left: 30px;top: 98px;">
  <a onclick="history.go(-1)" class="btn-floating btn-lg blue-gradient" style="color:white;"><i class="fas fa-arrow-left"></i></a>
</div>

<div class="scroll-down">
    <button><i class="fas fa-arrow-down"></i></button>
</div>

<div class="scroll-up">
    <button><i class="fas fa-arrow-up"></i></button>
</div>



<?php
  require_once('include/footer.php');
?>