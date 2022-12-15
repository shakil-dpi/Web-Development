



<?php get_header(); ?>




<!-- ---search part start---  -->
<div class="search text-end">
   <form action="">
    <input class="search_bar" type="text" placeholder="Search.." name="s" value="<?= get_search_query(); ?>">
    <button class="search_button">Click Here</button>
   </form>
</div>
<!-- ---search part end---  -->



<!-- --hero part start--  -->
<div class="container text-center">
  <div class="row hero-top ">
  <?php dynamic_sidebar('herotop');?>
  </div>
  
  <div class="row hero-bottom ">
    <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
      <?php dynamic_sidebar('herobottomimg');?>
      <div class="card-body">
      <?php dynamic_sidebar('herobody');?>
      </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
      <?php dynamic_sidebar('herobottomimg2');?>
      <div class="card-body">
      <?php dynamic_sidebar('herobody2');?>
      </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
      <?php dynamic_sidebar('herobottomimg3');?>
      <div class="card-body">
      <?php dynamic_sidebar('herobody3');?>
      </div>
      </div>
    </div>


  </div>
</div>
<!-- --hero part end--  -->


<!-- photo part start -->
<section class="container photo mt-5 text-center">
    <div class="row photo_top">
        <div class="col-sm-4">
            <!-- --------------------------------- -->
            <img src="<?= get_template_directory_uri()?>./assets/images/green3.png" alt="">
        </div>
        <div class="col-sm-4">
            <h4>Recent Photos</h4>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-sm-4">
        <img src="<?= get_template_directory_uri()?>./assets/images/green2.png" alt="">
        </div>
    </div>

    <div class="row photo-bottom">
      <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
      <?php dynamic_sidebar('p-img1');?>
        <div class="card-body">
        <?php dynamic_sidebar('p-body1');?>
        </div>
      </div>
      </div>
      
    </div>

    <div class="row photo_end pt-5">
        <div class="col-sm-4">
            <!-- --------------------------------- -->
            <img src="<?= get_template_directory_uri()?>./assets/images/green3.png" alt="">
        </div>
        <div class="col-sm-4">
            <h4>NEWS & EVENTS</h4>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="col-sm-4">
        <img src="<?= get_template_directory_uri()?>./assets/images/green2.png" alt="">
        </div>
    </div>

</section>










<!-- --------------text-slider------------- -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $x=0;
            while(have_posts()){ the_post();
            $x++;
            ?>
            <div class="carousel-item <?= ($x==1)?'active': '' ?> ">
                <?php the_title(); ?>
                
            </div>
            <?php } ?>

        </div>
        
    </div>






<?php get_footer();?>
