<?php 
  require_once '../../includes/config.php';
?>

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
    <link rel="manifest" href="<?php echo BASEURL;?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo BASEURL;?>assets/images/favicons/ms-icon-144x144.png">
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
     <!-- <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
    -->      
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg"></a>
          </div>
        </div>
      </nav>
      
      <div class="main">
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>assets/images/restaurant/bg_lanches.jpg">
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>assets/images/restaurant/bg_entradas.jpg">
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="<?php echo BASEURL;?>assets/images/restaurant/bg_pratos.webp">
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
                </div>
              </div>
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
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Lemon and Garlic Green Beans</h4>
                      <div class="menu-detail font-serif">Lemon / Garlic / Beans</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$14.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">LambBeef Kofka Skewers with Tzatziki</h4>
                      <div class="menu-detail font-serif">Lamb / Wine / Butter</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$18.5</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Imported Oysters Grill (5 Pieces)</h4>
                      <div class="menu-detail font-serif">Oysters / Veggie / Ginger</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$15.9</h4>
                    </div>
                  </div>
                </div>
                <div class="menu">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="menu-title font-alt">Meatloaf with Black Pepper-Honey BBQ</h4>
                      <div class="menu-detail font-serif">Pepper / Chicken / Honey</div>
                    </div>
                    <div class="col-sm-4 menu-price-detail">
                      <h4 class="menu-price font-alt">$16.4</h4>
                    </div>
                  </div>
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
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i    class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      
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