<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <? php wap_head():?>
</head>
<body>
    
    <!-- Top Bar Part Start -->
    <header class="my_container">
        <div class="row topbar">
            <div class="col-lg-6 top_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
                

            <div class="col-lg-6 top_right text-end">
                <p>১৯ কার্তিক, ১৪২৯</p>
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!-- Top Bar Part End -->

    
    <!-- Logo Part Start -->
    <section class="my_container">
      <div class="row logo">
          <div class="col-lg-5 logo_left">
            <?php the_custom_logo();?>
              <!-- <img src="<?php echo get_template_directory_uri()?>./assets/images/header/logo_bn.png" alt=""> -->
          </div>

          <div class="col-lg-5 logo_search">
            <form action="">
              <input type="text" name="" id="" placeholder="খুঁজুন">
              <button>অনুসন্ধান</button>
            </form>
          </div>

          <div class="col-lg-2 logo_right d-flex justify-content-end">
              <div class="logo1">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/header/a2i-logo-footer.png" alt=""></a>
              </div>
              
              <div class="logo2">
                <p>সাথে থাকুন:</p>
                <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/images/header/facebook-icon.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/images/header/twitter-blue-icon.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/images/header/youtube-icon.png" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/images/header/gplus-icon.png" alt=""></a>
                
            </div>
          </div>
      </div>
  </section>
  <!-- Logo Part End -->

  
<!-- ---menu Part start--- -->

<section class="my_container">
  <div class="row">
      <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">হোম</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">সেবাখাত</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">বৈদেশিক বিনিয়োগ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">আইন-বিধি</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ফরমস</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">তথ্য বাতায়ন হ্যাকাথন</a>
                </li>
                
              </ul>
              
            </div>
          </div>
        </nav>
  </div>
</section>

<!-- ---Menu Part end--- -->



<!-- ---Menu Part Start--- -->
<section class="my_container">
  <div class="row hero">
      <div class="col-lg-8 hero_main">
          <div class="banner">
              <!-- --banner Part Start-- -->
              <img src="<?php echo get_template_directory_uri()?>./assets/images/padmabanner.jpg" class="d-block w-100 " alt="">
              <!-- --banner Part end-- -->
          </div>
          <div class="slider">
              <!-- --slider Part Start-- -->
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/0.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/Banner-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/corona_banner.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/pmobanner.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              <!-- --slider Part end-- -->
          </div>

          
          <div class="tab">
            <!-- ====tab part start==== -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>দপ্তর ভিত্তিক</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">সকল ই-সেবা</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/agriculture.png" alt=""></a><br>
                      <a href="">কৃষি</a>
                  </div>

                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/call_center.png" alt=""></a><br>
                      <a href="">কল সেন্টার</a>
                  </div>

                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/agriculture.png" alt=""></a><br>
                      <a href="">মৎস্য ও প্রাণী </a>
                  </div>

                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/mobile_service.png" alt=""></a><br>
                      <a href="">মোবাইল সেবা</a>
                  </div>

                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/helpdesk.png" alt=""></a><br>
                      <a href="">হেল্পডেস্ক</a>
                  </div>

                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/service/agriculture.png" alt=""></a><br>
                      <a href="">কৃষি</a>
                  </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
            </div>
            <!-- ====tab part end==== -->

          </div>

          <div class="list">
            <h5>উদ্যোগ</h5>
            <ul>
              <li>
                <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                <p>(১৩-০৬-২০১৬)</p>
              </li>
              <li><a href=""></a>
                <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                <p>(১৩-০৬-২০১৬)</p>
              </li>
              <li><a href=""></a>
                <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                <p>(১৩-০৬-২০১৬)</p>
              </li>
              <li><a href=""></a>
                <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                <p>(১৩-০৬-২০১৬)</p>
              </li>
              <li><a href=""></a>
                <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                <p>(১৩-০৬-২০১৬)</p>
              </li>
            </ul>
            <div class="side-video">
            <h5>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h5>
            <div class="row">
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
              <div class="col-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>

          </div>
          </div>
          <div class="others"></div>
      </div>
      <div class="col-lg-4 hero_side">
        <div class="side-image">
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/discount_bn.jpg" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/mygov_bn.jpg" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/prottyon.jpg" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_Apps_bn (5).png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_Dictonary_bn.png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_DistrictBranding_b (3).png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_fund_bn.png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_govtjob_bn.png" class="d-block w-100 p-2" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_guard_bn.png" class="d-block w-100 p-2" alt=""></a>
        </div>

        <div class="side-video">
          <h5>সকল বাতায়ন</h5>
          <form action="">
            <select name="" id="">
              <option value="">ওয়েবসাইট বাছাই করুন</option>
              <option value="">ঢাকা বিভাগ</option>
              <option value="">চট্টগ্রাম বিভাগ</option>
              <option value="">রাজশাহী বিভাগ</option>
              <option value="">খুলনা বিভাগ</option>
              <option value="">বরিশাল বিভাগ</option>
              <option value="">রংপুর বিভাগ</option>
              <option value="">সিলেট বিভাগ</option>
            </select>
            <a href=""><button class="btn">select</button></a>

          </form>
          <div class=" side_video">
            <h5>মুজিব১০০ আ্যাপ</h5>
            <iframe frameborder="0" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" width="100%"></iframe>
            <h6>মাস্ক পরুন সেবা নিন	</h6>
            <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/mask-bd-portal (1).jpg" class="d-block w-100" alt=""></a>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- footer part start -->
<footer class="my_container">
  <div class="row footer_top">
    <img src="<?php echo get_template_directory_uri()?>./assets/images/footer/footer_top_bg.png">
  </div>

  <div class="row footer-bottom">
    <div class="col-lg-8 fb-left">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">সাইট ম্যাপ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
      <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে</p>
    </div>
    <div class="col-lg-4 fb-right text-end">
      <p>পরিকল্পনা ও বাস্তবায়নে:
        <a target="_blank" href="#">এটুআই,</a>
        <a target="_blank" href="#">মন্ত্রিপরিষদ বিভাগ,</a>
        <a target="_blank" href="#">বিসিসি,</a>
        <a target="_blank" href="#">বেসিস,</a>
        <a target="_blank" href="#">ডিওআইসিটি</a>
        </p>
        <div class="col-lg-4 fb-right text-end">
          <p> কারিগরি সহায়তায়:<img src="<?php echo get_template_directory_uri()?>./assets/images/footer/np-logo-set.png" alt=""></p>
        </div>
    </div>
  </div>

 <?php Wp_footer();?>
</footer>
<!-- footer part end -->
   
</body>
</html>



