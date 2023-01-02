<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma</title>
    <?php wp_head();?>
</head>
<body>
  <!-- header part start -->
<header>
    <div class="container-fluid">

    <div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php
        $qry = new WP_Query([
            'post_type'=>'post',
            'category_name'=>'slider'
        ]);
        ?>
  <div class="carousel-inner">
    <?php
    $p = 0;
    while ($qry->have_posts()) {
        $qry->the_post();
        $p++;
    ?>

    <div class="carousel-item <?=($p==1)?' active' : ''?>">

        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>

    <?php }?>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </div>
</header>

  <!-- header part end -->
  <!-- logo part start -->
  <section>
    <div class="container-fluid">
        <div class="logo">
            <div class="row">
                <div class="col-sm-6 logo_left>
            <?php the_custom_logo();?>
            </div>
                <div class="col-sm-6 logo_right text-end">
            <?php dynamic_sidebar('bdlogo',);?>
            </div>
            </div>
        </div>
    </div>
  </section>
  <!-- logo part end -->
  <!-- menu part start -->
  <section>
    <div class="container menu">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu([
            'theme_location'       => 'TM',
            'menu_class'           => 'navbar-nav top_menu',
        ]);
        ?>
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
      </ul> -->
      
    </div>
  </div>
</nav>
    </div>
  </section>
  <!-- menu part end -->
  <!-- hero part start -->
  <section class="container text-center mt-5 hero">
    <div class="row">
      <?php dynamic_sidebar('herotitle');?>
    </div>
    <div class="row mt-5">
      <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
       <?php dynamic_sidebar('card1');?>
      </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
       <?php dynamic_sidebar('card1');?>
      </div>
      </div>
      <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
       <?php dynamic_sidebar('card1');?>
      </div>
      </div>
    </div>
  </section>
  <!-- hero part end -->
  <!-- photo part start -->
  <section class="container text-center mt-5 photo">
    <div class="row monir">
      <div class="col-sm-5">
        <?php dynamic_sidebar('lineleft');?>
      </div>
      <div class="col-sm-2">
      <?php dynamic_sidebar('phototitle');?>        

      </div>
      <div class="col-sm-5">
      <?php dynamic_sidebar('lineright');?>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
       <?php dynamic_sidebar('photocard1');?>
      </div>
      </div>
      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
       <?php dynamic_sidebar('photocard1');?>
      </div>
      </div>
      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
       <?php dynamic_sidebar('photocard1');?>
      </div>
      </div>
      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
       <?php dynamic_sidebar('photocard1');?>
      </div>
      </div>
    </div>
  </section>
  <!-- photo part end -->
  <!-- news part start -->
  <section class="container  mt-5 news">
    <div class="row monir text-center">
    <div class="col-sm-5">
        <?php dynamic_sidebar('lineleft');?>
      </div>
      <div class="col-sm-2">
      <?php dynamic_sidebar('newstitle');?>        

      </div>
      <div class="col-sm-5">
      <?php dynamic_sidebar('lineright');?>
      </div>
    </div>
    <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php
        $qry = new WP_Query([
            'post_type'=>'post',
            'category_name'=>'slider'
        ]);
        ?>
  <div class="carousel-inner">
    <?php
    $p = 0;
    while ($qry->have_posts()) {
        $qry->the_post();
        $p++;
    ?>

    <div class="carousel-item <?=($p==1)?' active' : ''?>">

        <?php the_title();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>

    <?php }?>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </div>
  </section>
  <!-- news part end -->
  <!-- footer part start -->
  <footer class="container-fluid mt-5 foot">
    <div class="container">
      <div class="row ft">
        <div class="col-sm-8 ft_left">
          <?php dynamic_sidebar('ftleft');?>
        </div>
        <div class="col-sm-4 ft_right">
        <?php dynamic_sidebar('ftright');?>
        </div>
      </div>
      <div class="row fb">
        <div class="col-sm-6 fb_left">
        <?php dynamic_sidebar('fbleft');?>
        </div>
        <div class="col-sm-6 fb_right">
        <?php dynamic_sidebar('fbright');?>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer part end -->



<?php wp_footer();?>
</body>
</html>