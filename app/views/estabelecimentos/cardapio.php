<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Cardápio</title>
   <!--  
    Favicons
    =============================================
    -->
    <?php include_once ABSPATH.'../../../includes/favicons.php';?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include_once ABSPATH.'../../../includes/stylesheets.php';?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <?php
        include_once ABSPATH .'../../../includes/header.php'
      ?>      
      <div class="main">
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_lanches.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Lanches</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_entradas.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Entradas</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>public/images/restaurant/bg_pratos.webp">
          <div class="container">
            <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Abaixo</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Pratos Principais</h2>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-sm-4">
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Wild Mushroom Bucatini with Kale</h4>
                      <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$10.5</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- FOOTER -->
    <?php
        include_once ABSPATH .'../../../includes/footer.php';
    ?>

        <!--  
        JavaScripts
        =============================================
        -->
    <?php
      include ABSPATH .'../../../includes/animations.php';
    ?>
  </body>
</html>