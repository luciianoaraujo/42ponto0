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
      <?php
        include '../../includes/header.php'
      ?>

      <!-- BACKGROUND IMAGE -->   
      <section class="module bg-dark-60 portfolio-page-header" data-background="<?php echo BASEURL;?>public/images/section-4.jpg">
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
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/1.png" alt="Main Demo"></div>
                  <h3 class="content-box-title font-serif">Mc Donald</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/2.png" alt="Agency"></div>
                  <h3 class="content-box-title font-serif">OutBack</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/3.png" alt="Portfolio"></div>
                  <h3 class="content-box-title font-serif">Burguer King</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/4.png" alt="Restaurant"></div>
                  <h3 class="content-box-title font-serif">Starbucks</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/5.png" alt="Portfolio"></div>
                  <h3 class="content-box-title font-serif">Subway</h3></a>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12"><a class="content-box" href="cardapio.php">
                  <div class="content-box-image"><img src="<?php echo BASEURL;?>public/images/logos/6.png" alt="Restaurant"></div>
                  <h3 class="content-box-title font-serif">Pizza Hut</h3></a>
              </div>
              
            </div>
          </div>
        </section>
 
    <!-- FOOTER -->
    <?php
        include '../../includes/footer.php';
    ?>

        <!--  
        JavaScripts
        =============================================
        -->
    <?php
      include '../../includes/animations.php';
    ?>
  </body>
</html>