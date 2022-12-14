
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <?php wp_head();?>
</head>
<body>
<!-- slider part start-->

<div class="container-fluid slider">
  <div class="logo">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <?php
    $x = 0;
    while(have_posts()){the_post();
    $x++;
    ?>
    <div class="carousel-item <?=($x==1)? 'active': '' ?>">
        <?php the_post_thumbnail();?>
    </div>
    <?php }?>
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
</div>
<!-- slider part start-->

<!-- ---logo part start---- -->
<section class="logo container-fluid pt-2">
    <div class="row">
        <div class="col-sm-6 logo-left">
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logo-right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
</section>
<!-- ---logo part end---- -->

<!-- ---menu part start---  -->
<div class="container navbar-expand menu-1">

  <?php wp_nav_menu(array(
    'theme_location'=>'TM',
    'menu_class'=>'menu navbar-nav'
  ));

  ?>
</div>
<!-- ---menu part end---  -->

