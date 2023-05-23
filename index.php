<?php 
  require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--  
    Document Title
    =============================================
    -->
    <title>42ponto0</title>


    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASEURL;?>assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo BASEURL;?>assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASEURL;?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASEURL;?>assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASEURL;?>assets/images/favicons/favicon-16x16.png">
    <!-- VER OQUE FAZ -->
                        <link rel="manifest" href="/manifest.json">
                        <meta name="msapplication-TileColor" content="#ffffff">
                        <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
                        <meta name="theme-color" content="#ffffff"> 

    
    <!--  
    Stylesheets
    =============================================
    -->
    <!-- Default stylesheets-->
    <link href="<?php echo BASEURL;?>assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="<?php echo BASEURL;?>assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="<?php echo BASEURL;?>assets/css/colors/default.css" rel="stylesheet">

    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <a class="btn btn-border-w btn-circle" href="<?php echo BASEURL;?>login"> <i class="icon-play"></i> + Seja parceiro </a>
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home" data-background="<?php echo BASEURL;?>assets/images/landing/landing_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="container">
              <div class="font-alt"><b>Bem Vindo</b></div>
              <div class="font-alt mt-30"><a class="btn btn-border-w btn-circle" href="<?php echo BASEURL;?>home"><i class="icon-play"></i> Acessar </a></div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-md-offset"><img class="img-responsive banner-img" src="assets/images/landing/banner_img.png"></div>
        </div>
      </div>
      <div class="main">
        <section class="module" id="alt-features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                  <h3 class="alt-features-title font-alt">Branding</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="alt-features-title font-alt">Desenvolvedores</h3>
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-target"></span></div>
                  <h3 class="alt-features-title font-alt">Marketing</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools"></span></div>
                  <h3 class="alt-features-title font-alt">Design</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="<?php echo BASEURL;?>assets/images/landing/feature.png" alt="Feature Image"></div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-camera"></span></div>
                  <h3 class="alt-features-title font-alt">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                  <h3 class="alt-features-title font-alt">Mobile</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                  <h3 class="alt-features-title font-alt">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-basket"></span></div>
                  <h3 class="alt-features-title font-alt">Shop</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pb-0 bg-dark landing-reason parallax-bg" data-background="<?php echo BASEURL;?>assets/images/landing/why_choose_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6"><img src="<?php echo BASEURL;?>assets/images/landing/why_choose.png" alt=""></div>
              <div class="col-sm-6">
                <h2 class="module-title font-alt align-left">Why Titan is best</h2>
                <p class="module-subtitle font-serif align-left">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row landing-image-text">
              <div class="col-sm-6 col-sm-push-6"><img class="center-block" src="<?php echo BASEURL;?>assets/images/landing/ipad.png" alt=""></div>
              <div class="col-sm-6 col-sm-pull-6">
                <h2 class="font-alt">Keep the conversation going</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <!--<a class="btn btn-border-d btn-circle" href="#">Try free version</a>-->
              </div>
            </div>
            <div class="row landing-image-text">
              <div class="col-sm-6"><img class="center-block" src="<?php echo BASEURL;?>assets/images/landing/iphone-mockup.png" alt=""></div>
              <div class="col-sm-6">
                <h2 class="font-alt">How it works</h2>
                <p class="font-serif">Lorem ipsum dolor sitamet consectetur adipisicing elit ullamut consequatur repellendus amet nemo dignissimos possimus eius fugiat</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
                  <li>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                  <li>Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                </ul> <!--<a class="btn btn-border-d btn-circle" href="<?php echo BASEURL;?>#">Download App</a>-->
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark parallax-bg landing-screenshot" data-background="<?php echo BASEURL;?>assets/images/landing/screenshot_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">ScreenShots</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row client">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup2.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup6.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup1.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup3.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup5.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>assets/images/landing/screens/Mockup4.png" alt="App Screenshot"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

<!-- FOOTER -->
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg">
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="<?php echo BASEURL;?>#"><i class="fa fa-facebook"></i></a><a href="<?php echo BASEURL;?>#"><i class="fa fa-twitter"></i></a><a href="<?php echo BASEURL;?>#"><i class="fa fa-dribbble"></i></a><a href="<?php echo BASEURL;?>#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>


    <!--  
    JavaScripts
    =============================================
    -->
    <script src="<?php echo BASEURL;?>assets/lib/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/wow/dist/wow.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?php echo BASEURL;?>ssets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/smoothscroll.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/plugins.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/main.js"></script>
   
  </body>
</html>