<?php 
  require_once '../../includes/config.php'; 
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
    <title>Estabelecimentos</title>
    
    <!--  
    Favicons
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/favicons.php';?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/stylesheets.php';?>
  </head>

  <!--BODY-->

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg"></a>
          </div>
        </div>        
      </nav>

      <!-- BACKGROUND IMAGE -->   
      <section class="module bg-dark-60 portfolio-page-header" data-background="<?php echo BASEURL;?>assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Bem Vindo</h2>
              </div>
            </div>
          </div>
        </section>

        <!-- main -->
        <section class="module-medium" id="demos">
          <div class="container main showcase-page">
            <div class="row multi-columns-row">
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/1.png" alt="Main Demo"></div>
                  <h3 class="content-box-title font-serif">Mc Donald</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/2.png" alt="Agency"></div>
                  <h3 class="content-box-title font-serif">OutBack</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/3.png" alt="Portfolio"></div>
                  <h3 class="content-box-title font-serif">Burguer King</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/4.png" alt="Restaurant"></div>
                  <h3 class="content-box-title font-serif">Starbucks</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/5.png" alt="Portfolio"></div>
                  <h3 class="content-box-title font-serif">Subway</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>assets/images/logos/6.png" alt="Restaurant"></div>
                  <h3 class="content-box-title font-serif">Pizza Hut</h3></a>
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
            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
    <script src="<?php echo BASEURL;?>assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/smoothscroll.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/plugins.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/main.js"></script>
  </body>
</html>