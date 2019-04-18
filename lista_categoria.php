<?php
  require_once('include/header.php');
  require_once('include/navbar.php');
?>

<div class="container">
     <!-- Section: Blog v.3 -->
    <section class="my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
    <!-- Section description -->
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  
    <hr class="my-5">


    <?php
        for($i=0;$i<3;$i++){
    ?>

    <!-- Grid row -->
    <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->



    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
        cupiditate non provident et accusamus iusto odio dignissimos et dolorum fuga.</p>
        <!-- Post data -->
        <p>by <a class="font-weight-bold">Jessica Clark</a>, 16/04/2018</p>
        <!-- Read more button -->
        <a class="btn btn-primary btn-md">Read more</a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <?php
        }
    ?>

    </section>
    <!-- Section: Blog v.3 -->   
</div>

<?php
  require_once('include/footer.php');
?>