<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>

<?php

include'matriz.php';

$pesquisa=$_POST['pesquisa'];

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

    <h3 class="mt-5"> Resultados de "<?php echo $pesquisa ?>"</h3>

    <?php

    for($i=0;$i<sizeof($matriz);$i++){


        $categoria = $matriz[$i][0];
        $nome_artista = $matriz[$i][1];
        $imagem = $matriz[$i][2];
        $descricao_artista=$matriz[$i][3];
            
        if (strpos($descricao_artista, $pesquisa) !== false) {

            
            
    ?>
    
    <!-- News jumbotron -->
    <div class="jumbotron text-center hoverable p-4 mt-4">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <!-- Featured image -->
                <div class="view overlay">
                <img class="img-fluid" src="<?php echo 'img/'.$imagem ?>" alt="Sample image">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 text-md-left ml-3 mt-3">

        

                <h4 class="h4 mb-4"><?php echo $nome_artista ?></h4>

                <p class="font-weight-normal"><?php echo $descricao_artista ?></p>

                <a class="btn btn-success" href="categoria_interna.php?post=<?php echo $i ?>"> Ver Mais</a>

            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->

    </div>
    <!-- News jumbotron -->


    <?php

            
        } else {
        
    ?>
        
        <h4>Nenhum resultado encontrado</h4>

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